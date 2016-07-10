<?php

/**
 * Model functions
 */

// No DB site version
$profiles = [
    1 => [
        'email'     => 'mvc1@example.com',
        'password'  => '59b4754925725e90e8aab90e1fdcb59d', //mvc1
        'name'      => 'Main User',
        'birthday'  => new \DateTimeImmutable('11.12.1993'),
        'city'      => 'London',
        'avatar'    => '/uploads/avatars/random1.jpg',
    ],
    9 => [
        'email'     => 'mvc9@example.com',
        'password'  => 'd15c44dfe3bda15421e7cf8528a6ae18', //mvc9
        'name'      => 'Second User (9)',
        'birthday'  => new \DateTimeImmutable('10.11.1992'),
        'city'      => 'New York',
        'avatar'    => NULL,
    ],
    42 => [
        'email'     => 'mvc42@example.com',
        'password'  => '7a275027f6453f387ef1bffa99d081c7', //mvc42
        'name'      => 'Third User (42)',
        'birthday'  => new \DateTimeImmutable('9.10.1991'),
        'city'      => 'Vienna',
        'avatar'    => '/uploads/avatars/random2.jpg',
    ],
];

function get_profile_data($id){
  // Usually it's better not to use "global"
  global $profiles;
  if(!empty($profiles[$id])){
    $profile = $profiles[$id];
    $profile['id'] = $id;
    return $profile;
  }
  else{
    return NULL;
  }
}
function get_profile_list(){
  // Usually it's better not to use "global"
  global $profiles;
  // Remove credentials
  foreach ($profiles as $id => $profile) {
    unset($profile['password']);
    $profile['id'] = $id;
    $profiles[$id] = $profile;
  }
  return $profiles;
}
function check_user($email, $password){
  // Usually it's better not to use "global"
  global $profiles;
  $user = NULL;
  foreach ($profiles as $id => $profile) {
    if($email === $profile['email']
            && get_password_hash($password) === $profile['password']){
      unset($profile['password']);//remove credentials
      $profile['id'] = $id;
      return $profile;
    }
  }
  return $user;
}

