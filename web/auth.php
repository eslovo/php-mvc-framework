<?php
require "../src/header.php";
?>

<h1>Sign in</h1>
<div>
  <form>
    <div class="form-group">
      <label for="reg-email">Email</label>
      <input type="email" class="form-control" id="reg-email" placeholder="Email">
    </div>
    <div class="form-group">
      <label for="reg-password">Password</label>
      <input type="password" class="form-control" id="reg-password" placeholder="Password">
    </div>
    <button type="submit" class="btn btn-default">Authorize</button>
  </form>
</div>

<?php
require "../src/footer.php";
