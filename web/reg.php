<?php
require "../src/header.php";
?>

<h1>Registration</h1>
<div>
  <form>
    <div class="form-group">
      <label for="reg-name">Name</label>
      <input type="text" class="form-control" id="reg-name" placeholder="Name">
    </div>
    <div class="form-group">
      <label for="reg-email">Email</label>
      <input type="email" class="form-control" id="reg-email" placeholder="Email">
    </div>
    <div class="form-group">
      <label for="reg-password">Password</label>
      <input type="password" class="form-control" id="reg-password" placeholder="Password">
    </div>
    <div class="form-group">
      <label for="reg-password-repeat">Password Repeat</label>
      <input type="text" class="form-control" id="reg-password-repeat" placeholder="Password Repeat">
    </div>
    <div class="form-group">
      <label for="reg-birthday">Birthday</label>
      <input type="text" class="form-control" id="reg-birthday" placeholder="Birthday">
    </div>
    <div class="form-group">
      <label for="avatar">Avatar</label>
      <input type="file" id="regavatar">
    </div>
    <div class="checkbox">
      <label>
        <input type="checkbox">Terms of Use are Accepted
      </label>
    </div>
    <button type="submit" class="btn btn-default">Register</button>
  </form>
</div>

<?php
require "../src/footer.php";