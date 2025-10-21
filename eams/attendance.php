<?php
session_start();
$pageTitle = 'Attendance | EAMS';
include __DIR__ . '/includes/header.php';
?>
<div class="row g-4">
  <div class="col-12 col-lg-5">
    <div class="card card-glass p-4 h-100">
      <h2 class="h5">Record Attendance</h2>
      <form id="attendance-form" class="mt-3">
        <div class="mb-3">
          <label class="form-label">Employee</label>
          <select class="form-select" name="employee_id" required>
            <option value="">Select employee</option>
            <option value="1">David Grey</option>
            <option value="2">Admin User</option>
          </select>
        </div>
        <div class="row g-3">
          <div class="col-md-6">
            <label class="form-label">Date</label>
            <input type="date" class="form-control" name="date" required />
          </div>
          <div class="col-md-6">
            <label class="form-label">Overtime Hours</label>
            <input type="number" class="form-control" name="overtime" step="0.5" min="0" value="0" />
          </div>
        </div>
        <div class="mt-3">
          <label class="form-label">Notes (optional)</label>
          <textarea class="form-control" name="notes" rows="2" placeholder="Any note..."></textarea>
        </div>
        <div class="d-flex gap-2 mt-3">
          <button class="btn btn-primary" data-action="time_in" type="button">Time In</button>
          <button class="btn btn-outline-primary" data-action="time_out" type="button">Time Out</button>
          <button class="btn btn-outline-danger" data-action="absent" type="button">Mark Absent</button>
        </div>
      </form>
    </div>
  </div>
  <div class="col-12 col-lg-7">
    <div class="card card-glass p-4 h-100">
      <h2 class="h5">Attendance History</h2>
      <div id="history" class="mt-3 small text-muted">No records yet</div>
    </div>
  </div>
</div>
<script>
const form = document.getElementById('attendance-form');
const historyDiv = document.getElementById('history');

document.querySelectorAll('#attendance-form [data-action]')?.forEach(btn => {
  btn.addEventListener('click', async () => {
    const action = btn.dataset.action;
    const formData = new FormData(form);
    formData.append('action', action);
    const res = await fetch('/eams/api/attendance.php', { method: 'POST', body: formData });
    const data = await res.json();
    if (!data.success) {
      alert(data.message || 'Something went wrong');
      return;
    }
    loadHistory();
  });
});

async function loadHistory() {
  const employeeId = form.querySelector('[name=employee_id]').value;
  if (!employeeId) { historyDiv.textContent = 'Select an employee'; return; }
  const res = await fetch(`/eams/api/attendance.php?action=history&employee_id=${employeeId}`);
  const data = await res.json();
  if (!data.success) { historyDiv.textContent = data.message; return; }
  if (!data.records?.length) { historyDiv.textContent = 'No records'; return; }
  historyDiv.innerHTML = data.records.map(r => `<div>• ${r.date} — ${r.status}${r.overtime ? ` (OT ${r.overtime}h)` : ''}</div>`).join('');
}

form.querySelector('[name=employee_id]').addEventListener('change', loadHistory);
</script>
<?php include __DIR__ . '/includes/footer.php'; ?>
