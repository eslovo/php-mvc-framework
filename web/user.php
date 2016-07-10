<?php

// Init Framework
require_once '../src/core/init.php';


// Process request with using of models
$id = intval($_GET['id']); // Get Request Info
$profile = get_profile_data($id);


  // Give Response
if ($profile !== NULL) {
  $data = [
      'profile' => $profile,
  ];
  load_view('user', $data);
} else {
  error404('user');
}