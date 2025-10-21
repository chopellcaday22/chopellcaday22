<?php
session_start();
$pageTitle = 'Login | EAMS';
$error = $_SESSION['auth_error'] ?? null;
unset($_SESSION['auth_error']);
include __DIR__ . '/includes/header.php';
?>
<div class="auth-container d-flex align-items-center justify-content-center">
  <div class="row w-100 justify-content-center">
    <div class="col-12 col-md-10 col-lg-8 col-xl-6">
      <div class="card card-glass border-0 rounded-4 overflow-hidden">
        <div class="row g-0">
          <div class="col-lg-6 p-4 p-md-5 d-flex flex-column justify-content-center order-lg-2">
            <h1 class="h3 fw-bold mb-2 text-primary">Welcome back</h1>
            <p class="text-muted mb-4">Employee Attendance Management System</p>
            <?php if ($error): ?>
              <div class="alert alert-danger py-2" role="alert"><?php echo htmlspecialchars($error); ?></div>
            <?php endif; ?>
            <form method="post" action="/eams/login_action.php" class="needs-validation" novalidate>
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <div class="input-group">
                  <span class="input-group-text">📩</span>
                  <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com" required />
                  <div class="invalid-feedback">Please enter your email</div>
                </div>
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <div class="input-group">
                  <span class="input-group-text">🔒</span>
                  <input type="password" class="form-control" id="password" name="password" placeholder="••••••••" required />
                  <div class="invalid-feedback">Please enter your password</div>
                </div>
              </div>
              <div class="d-flex align-items-center justify-content-between mb-3">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="1" id="remember" name="remember">
                  <label class="form-check-label" for="remember">Remember me</label>
                </div>
                <a href="#" class="small">Forgot password?</a>
              </div>
              <button type="submit" class="btn btn-primary w-100 py-2">Login</button>
              <div class="text-center small text-muted mt-3">Don't have an account? <a href="#">Create Account</a></div>
            </form>
          </div>
          <div class="col-lg-6 bg-primary text-white p-4 p-md-5 d-flex flex-column justify-content-center order-lg-1">
            <div class="text-center text-lg-start">
              <div class="display-6 fw-bold">EAMS</div>
              <p class="opacity-75 mt-2">Streamline time-in/out, leave tracking, and reports with ease.</p>
            </div>
            <ul class="list-unstyled small mt-4 mb-0 opacity-90">
              <li class="mb-2">✔ Real‑time attendance tracking</li>
              <li class="mb-2">✔ Leave requests & approvals</li>
              <li class="mb-2">✔ Analytics & exportable reports</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
(() => {
  'use strict';
  const forms = document.querySelectorAll('.needs-validation');
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault();
        event.stopPropagation();
      }
      form.classList.add('was-validated');
    }, false);
  });
})();
</script>
<?php include __DIR__ . '/includes/footer.php'; ?>
