<?php
// Shared header include for all pages
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title><?php echo isset($pageTitle) ? htmlspecialchars($pageTitle) : 'EAMS'; ?></title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="/eams/assets/css/styles.css" />
</head>
<body class="bg-gradient">
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
    <div class="container">
      <a class="navbar-brand fw-bold" href="/eams/index.php">EAMS</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item"><a class="nav-link" href="/eams/index.php">Dashboard</a></li>
          <li class="nav-item"><a class="nav-link" href="/eams/employee.php">Employees</a></li>
          <li class="nav-item"><a class="nav-link" href="/eams/attendance.php">Attendance</a></li>
          <li class="nav-item"><a class="nav-link" href="/eams/leave.php">Leave</a></li>
          <li class="nav-item"><a class="nav-link" href="/eams/reports.php">Reports</a></li>
          <li class="nav-item"><a class="btn btn-light btn-sm ms-lg-2" href="/eams/login.php">Login</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <main class="py-4">
    <div class="container">
