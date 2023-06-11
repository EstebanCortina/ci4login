<div class="form-container">
  <div>
    <img class="logoTitle" src="img/ci4logo.svg" alt="CodeIgniter">
  </div>
  <form action="<?= base_url() ?>" method="POST">
    <div class="form-control">
      <label for="username">Nombre:</label>
      <input type="text" name="username" required>
    </div>
    <div class="form-control">
      <label for="password">Contraseña:</label>
      <input type="password" name="password" required>
    </div>
    <div class="form-control">
      <button id="login-btn" type="submit">Login</button>
    </div>
  </form>
</div>
<script src="js/index.js"></script>