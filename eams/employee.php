<?php
session_start();
$pageTitle = 'Employees | EAMS';
include __DIR__ . '/includes/header.php';
?>
<div class="card card-glass p-4">
  <div class="d-flex justify-content-between align-items-center mb-3">
    <h2 class="h5 mb-0">Employee Management</h2>
    <a href="#" class="btn btn-primary btn-sm">Add Employee</a>
  </div>
  <div class="table-responsive">
    <table class="table align-middle">
      <thead>
        <tr>
          <th>#</th>
          <th>Full Name</th>
          <th>Role</th>
          <th>Email</th>
          <th class="text-end">Actions</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>David Grey</td>
          <td>Project Manager</td>
          <td>david@example.com</td>
          <td class="text-end">
            <button class="btn btn-sm btn-outline-primary">Edit</button>
            <button class="btn btn-sm btn-outline-danger">Delete</button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
<?php include __DIR__ . '/includes/footer.php'; ?>
