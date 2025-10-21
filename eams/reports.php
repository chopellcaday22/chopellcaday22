<?php
session_start();
$pageTitle = 'Reports | EAMS';
include __DIR__ . '/includes/header.php';
?>
<div class="card card-glass p-4">
  <div class="row align-items-center">
    <div class="col-lg-7">
      <h2 class="h4">Generate Reports</h2>
      <p class="text-muted mb-4">Create comprehensive attendance reports with download and print options</p>
      <form class="row g-3">
        <div class="col-md-4">
          <label class="form-label">Report Type</label>
          <select class="form-select">
            <option>Attendance Report</option>
            <option>Leave Summary</option>
            <option>Daily Log</option>
          </select>
        </div>
        <div class="col-md-4">
          <label class="form-label">Start Date</label>
          <input type="date" class="form-control" />
        </div>
        <div class="col-md-4">
          <label class="form-label">End Date</label>
          <input type="date" class="form-control" />
        </div>
        <div class="col-12">
          <label class="form-label">Employee (optional)</label>
          <select class="form-select">
            <option>All Employees</option>
            <option>David Grey</option>
            <option>Admin User</option>
          </select>
        </div>
        <div class="col-12 d-flex gap-2">
          <button class="btn btn-secondary" type="button">Preview</button>
          <button class="btn btn-danger" type="button">PDF</button>
          <button class="btn btn-success" type="button">CSV</button>
          <button class="btn btn-primary" type="button">Print</button>
        </div>
      </form>
    </div>
    <div class="col-lg-5">
      <div class="rounded-4 p-4 text-white" style="background: linear-gradient(135deg, var(--primary), var(--gradient-end));">
        <div class="h5 fw-bold">Reports & Analytics</div>
        <ul class="small opacity-90 mt-3 mb-0">
          <li class="mb-2">Export attendance to CSV/PDF</li>
          <li class="mb-2">Filter by date range and employee</li>
          <li class="mb-2">Print-ready layouts</li>
          <li class="mb-2">Live preview</li>
        </ul>
      </div>
    </div>
  </div>
</div>
<?php include __DIR__ . '/includes/footer.php'; ?>
