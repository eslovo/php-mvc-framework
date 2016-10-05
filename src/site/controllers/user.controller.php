<?php

/**
 * Show all users.
 * 
 * @return array Response data
 */
function action_user_list() {
  // Process request with using of models
  $profiles = get_profile_list();
  $message = '';
  if(isset($_GET['status']) && $_GET['status'] === 'registered'){
    $message = 'You has been registered!';
  }
  // Make Response Data
  return ['view' => 'user/list', 
      'data' => [ 
          'profiles' => $profiles,
          'message' => $message
          ]];
}

/**
 * Show user profile.
 * 
 * @param int $id Id user to show.
 * @return array Response data.
 */
function action_user_show($id) {
  // Process request with using of models
  $id = (int) $id;
  $profile = get_profile_data($id);
  // Make Response Data
  if ($profile !== NULL) {
    $data = [
        'profile' => $profile,
    ];
    return [ 'view' => 'user/show', 'data' => $data];
  } else {
    return error404('user');
  }
}
