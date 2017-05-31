<?php
//// PAGE TEMP
$page_get = $_GET['page'];

if (isset($page_get)) {
  $page_include = $page_types[$page_get][1];
  $page_name = $page_types[$page_get][0];
  $page_key = $page_get;
} else {
  $page_include = $page_types['home'][1];
  $page_name = $page_types['home'][0];
  $page_key = 'home';
}

//// USER TEMP
$user_get = $_GET['user'];

if (isset($user_get)) {
  $user_name = $userswitch[$user_get]["name"];
  $user_key = $user_get;
} else {
  $user_name = $userswitch["een_start"]["name"];
  $user_key = "een_start";
}

//// URL BUILDER
function urlQuery ($page, $user) {
  $data = array('page'=>$page, 'user'=>$user);
  return "?".http_build_query($data);
}
?>
