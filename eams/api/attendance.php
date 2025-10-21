<?php
header('Content-Type: application/json');
session_start();

// In-memory dataset for demo. Replace with DB queries.
if (!isset($_SESSION['attendance'])) {
  $_SESSION['attendance'] = [];
}

$method = $_SERVER['REQUEST_METHOD'];
$action = $_GET['action'] ?? $_POST['action'] ?? '';

function json($ok, $payload = []) {
  echo json_encode(array_merge(['success' => $ok], $payload));
  exit;
}

if ($method === 'GET' && $action === 'history') {
  $employeeId = $_GET['employee_id'] ?? '';
  if (!$employeeId) json(false, ['message' => 'Employee ID is required']);
  $records = array_values(array_filter($_SESSION['attendance'], fn($r) => $r['employee_id'] == $employeeId));
  json(true, ['records' => $records]);
}

if ($method === 'POST' && in_array($action, ['time_in', 'time_out', 'absent'])) {
  $employeeId = $_POST['employee_id'] ?? '';
  $date = $_POST['date'] ?? date('Y-m-d');
  $overtime = (float)($_POST['overtime'] ?? 0);
  $notes = trim($_POST['notes'] ?? '');
  if (!$employeeId) json(false, ['message' => 'Employee is required']);
  $status = match ($action) {
    'time_in' => 'Time In',
    'time_out' => 'Time Out',
    'absent' => 'Absent',
  };
  $_SESSION['attendance'][] = [
    'employee_id' => $employeeId,
    'date' => $date,
    'status' => $status,
    'overtime' => $overtime,
    'notes' => $notes,
  ];
  json(true, ['message' => 'Recorded']);
}

json(false, ['message' => 'Invalid action']);
