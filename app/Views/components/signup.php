<div id="signup" class="form-container">
  <div>
    <img class="logoTitle" src="img/ci4logo.svg" alt="CodeIgniter">
  </div>
  <form action="<?= base_url() ?>signup" method="POST">
    <div class="form-control">
      <label for="username">Nombre:</label>
      <input type="text" name="username" required>
    </div>
    <div class="form-control">
      <label for="email">Email:</label>
      <input type="text" name="email" type="email" required>
    </div>
    <div class="form-control">
      <label for="password">Contraseña:</label>
      <input type="password" name="password" required>
    </div>
    <div class="form-control">
      <label for="password">Repetir contraseña:</label>
      <input type="password" name="rptpassword" required>
    </div>
    <div class="form-control">
      <button class="btn btn-primary orange" id="signup-btn" type="submit">Signup</button>
    </div>
  </form>
</div>