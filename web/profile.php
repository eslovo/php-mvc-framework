<?php
require "../src/header.php";
?>

<!-- Profile Page -->
<div class="profile-box">

  <!-- Main User Info -->
  <div class="profile-header">
    <div class="profile-info pull-left">
      London
    </div>
    <div class="profile-avatar pull-left">
      <img src="/img/def-avatar.jpg" alt="Avatar">
    </div>
    <div class="profile-info pull-right">
      23 y/o
    </div>
    <div class="clear"></div>
  </div>

  <!-- User's Name -->
  <h1 class="profile-name">
    Name Surname
  </h1>

  <!-- Other stuff -->
  <div class="profile-body">

    <!-- Gallery -->
    <div class="profile-gallery">
      <div class="row">

        <?php
        for ($i = 0; $i < 5; $i++) {
          ?>
          <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
              <img src="/img/def-gallery-pic.jpg" alt="Gallery Pic">
              <div class="caption">
                <h3>Gallery Pic</h3>
                <p>
                  <a href="#" class="btn btn-primary" role="button" title="Vote Up"><span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span></a>
                  <a href="#" class="btn btn-primary" role="button" title="Vote Down"><span class="glyphicon glyphicon-thumbs-down" aria-hidden="true"></span></a>
                </p>
              </div>
            </div>
          </div>
          <?php
        }
        ?>

      </div>
    </div>

  </div>

</div>

<?php
require "../src/footer.php";
