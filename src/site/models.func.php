<?php

/**
 * Model functions
 */

function get_user_schema(){
  return ['email', 'password', 'name', 'birthday', 'city', 'avatar'];
}

function get_profile_data($id){
  return db_find('user', get_user_schema(), $id);
}
function find_user_by_email($email){
  return db_find_by('user', get_user_schema(), ['email' => $email]);
}
function get_profile_list(){
  $profiles = db_select_all('user', get_user_schema());
  // Remove credentials
  foreach ($profiles as $id => $profile) {
    unset($profile['password']);
    $profiles[$id] = $profile;
  }
  return $profiles;
}
function check_user($email, $password){
  $user = db_find_by(
          'user',
          get_user_schema(),
          [
              'email' => $email,
              'password' => get_password_hash($password)
              ]
          );
  return $user;
}
function add_user($user){
  $user['password'] = get_password_hash($user['password']);
  $user['birthday'] = strtotime($user['birthday']);
  return db_add('user', get_user_schema(), $user);
}

