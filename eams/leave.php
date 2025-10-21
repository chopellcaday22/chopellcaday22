<?php
session_start();
$pageTitle = 'Leave | EAMS';
include __DIR__ . '/includes/header.php';
?>
<div class="card card-glass p-4">
  <h2 class="h5">Leave Management</h2>
  <form class="row g-3 mt-1">
    <div class="col-md-4">
      <label class="form-label">Employee</label>
      <select class="form-select">
        <option>David Grey</option>
        <option>Admin User</option>
      </select>
    </div>
    <div class="col-md-4">
      <label class="form-label">Start</label>
      <input type="date" class="form-control" />
    </div>
    <div class="col-md-4">
      <label class="form-label">End</label>
      <input type="date" class="form-control" />
    </div>
    <div class="col-12">
      <label class="form-label">Reason</label>
      <textarea class="form-control" rows="2" placeholder="Optional"></textarea>
    </div>
    <div class="col-12">
      <button class="btn btn-primary" type="button">Record Leave</button>
    </div>
  </form>
</div>
<?php include __DIR__ . '/includes/footer.php'; ?>
