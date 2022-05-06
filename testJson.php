<?php

include_once("private/Admin_Functions.php");
// $theImage = "jj.jpg";//the real image url. 
//echo file_get_contents($theImage);
// echo '<img src="'.$theImage.'">';
// $admin->fetchUserData($admin->tryConnect_rip_user(), 'Andydiu', 'actknowledgement');
// $admin->showOneUserData($admin->tryConnect_rip_user(), 'andydiu');
//$admin->showAllUserData($admin->tryConnect_rip_user());
header('Content-Type: application/json; charset=utf-8');

$jj = $admin->showAllUserNameActions($admin->tryConnect_rip_user()); //array 
$strjj =json_encode($jj);
$jj2 = "{'result': $strjj}";
//echo json_encode($jj);
echo '{"lat":11.52,"lon":-87.03,"mag":6.5,"region":"near coast of Nicaragua","ptime":"2022-04-21T15:43:00+08:00","updateTime":"2022-04-21T15:49:00+08:00"}';
// foreach ($output as $e) {  //$e json object 
//     if ($e->nickname == NULL) {
//         echo "null";
//     } else {
//         echo $e->nickname;
//     }
//     if ($e->actions == NULL) {
//         echo "null";
//     } else {
//         echo $e->actions;
//     }
// }
