<?php
require "../src/header.php";
?>

<h1>Users List</h1>
<div class="user-list row">

  <?php
  for ($i = 0; $i < 7; $i++) {
    ?>
    <div class="profile-thumbnail">
      <a href="/profile.php" class="profile-link">
        <img src="/img/def-avatar.jpg" alt="Name Surname" class="profile-avatar">
        <h3 class="profile-name">Name Surname</h3>
      </a>
    </div>
    <?php
  }
  ?>

</div>

<?php
require "../src/footer.php";
