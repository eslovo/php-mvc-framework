<?php

// Init Framework
require_once '../src/core/init.php';


// Process request with using of models
$id = NULL;
$data = [];
if (!empty($_POST['email']) && !empty($_POST['password'])) {
  $authorized = authorize($_POST['email'], $_POST['password']);
  if ($authorized) {
    $id = get_authorized_user()['id'];
  } else {
    $data['notices'] = [
        'Wrong email-password pair!',
    ];
  }
}


// Give Response
if (empty($id)) {
  load_view('auth', $data);
} else {
  header('Location:/profile.php');
  exit();
}