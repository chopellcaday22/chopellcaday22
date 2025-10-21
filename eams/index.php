<?php
session_start();
$pageTitle = 'Dashboard | EAMS';
include __DIR__ . '/includes/header.php';
?>
<div class="row g-4">
  <div class="col-12 col-md-6 col-lg-3">
    <div class="card card-glass p-4">
      <div class="d-flex justify-content-between align-items-start">
        <div>
          <div class="text-muted small">Employees</div>
          <div class="h4 mb-0 fw-bold">24</div>
        </div>
        <span class="badge bg-primary-subtle text-primary">+2</span>
      </div>
    </div>
  </div>
  <div class="col-12 col-md-6 col-lg-3">
    <div class="card card-glass p-4">
      <div class="text-muted small">Present Today</div>
      <div class="h4 mb-0 fw-bold">19</div>
    </div>
  </div>
  <div class="col-12 col-md-6 col-lg-3">
    <div class="card card-glass p-4">
      <div class="text-muted small">On Leave</div>
      <div class="h4 mb-0 fw-bold">3</div>
    </div>
  </div>
  <div class="col-12 col-md-6 col-lg-3">
    <div class="card card-glass p-4">
      <div class="text-muted small">Late</div>
      <div class="h4 mb-0 fw-bold">2</div>
    </div>
  </div>
</div>
<?php include __DIR__ . '/includes/footer.php'; ?>
