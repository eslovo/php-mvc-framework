<?php

/**
 * Core functions: helpers, view generating, authorization etc.
 */

/**
 * Shows variable info with nice view even on webpages.
 * 
 * @param mixed $var
 */
function dump($var){
  echo '<pre>';
  var_dump($var);
  echo '</pre>';
}

/**
 * Shows variable info with nice view even on webpages and exit.
 * 
 * @param mixed $var
 */
function dumpe($var = NULL){
  dump($var);
  exit();
}

/**
 * Makes scope for view data, shows base template frame
 * and adds globals view variables (for all actions).
 * 
 * @param string $view_name
 * @param array $data
 */
function load_view($view_name, $data){
  /*? Check $view_name ?*/
  if(file_exists(SITE_PATH.'/views/'.$view_name.'.inc.php')){
    // Add global view variabls to this scope
    $user = get_authorized_user();
    // Make response
    require SITE_PATH.'/views/blocks/header.inc.php';
    require SITE_PATH.'/views/'.$view_name.'.inc.php';
    require SITE_PATH.'/views/blocks/footer.inc.php';
  }
  else{
    // In more complex system better use exceptions.
    exit('No such template: '.$view_name.'.inc.php');
  }
}

/**
 * Shows 403 page
 */
function error403(){
  // Site has to have this template!
  load_view('error_403', []);
}

/**
 * Shows 404 page for concrete thing that wasn't found.
 * 
 * @param string $entity
 */
function error404($entity = 'page'){
  // Site has to have this template!
  load_view('error_404', ['entity' => $entity]);
}

/**
 * Creates password hash.
 * 
 * @param string $password
 * @return string
 */
function get_password_hash($password){
  return md5($password); // Better to use newer algorythms with salt!
}

/**
 * Tries to authorize user.
 * 
 * @param string $email
 * @param string $passsword
 * @return boolean
 */
function authorize($email, $passsword){
  // Site has to have this function!
  // Framework doesn't know from where user data comes.
  // So just it asks site model.
  $user = check_user($email, $passsword);
  if($user !== NULL){
    $_SESSION['user'] = $user;
    return TRUE;
  }
  else{
    return FALSE;// In more complex system better to use exceptions.
  }
}

/**
 * Tries to log out user.
 */
function logout(){
  if(isset($_SESSION['user'])){
    unset($_SESSION['user']);
  }
}

/**
 * Gets current user.
 * 
 * @return mixed
 */
function get_authorized_user(){
  if(!empty($_SESSION['user'])){
    return $_SESSION['user'];
  }
  return NULL;
}