<?php

// Init Framework
require_once '../src/core/init.php';


// Process request with using of models
$profiles = get_profile_list();
$data = ['profiles' => $profiles];

// Give Response
load_view('user_list', $data);
