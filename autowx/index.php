<?php
require_once("function.php");
include("group.php");

$token=$_GET['token'];
if(CheckToken($token) != 1){
    echo "fuck,what do you want?\n";
    return;
}
$content=file_get_contents("php://input");

RcordLogFile($content,"detail");

$content_arr=json_decode($content,true);

if(isset($content_arr["post_type"]) && $content_arr["post_type"] == "send_message" && strstr($content_arr["content"],"来自小秘") ){
     return ;
}
if(isset($content_arr["format"]) && $content_arr["format"] != "text"){
     return ;
}
if(isset($content_arr["type"]) && $content_arr["type"] == "group_message" ){
    /* group msg*/
    $g = new Action_Group();
    $g->SetContent($content_arr);
    $g->Start();
}else if(isset($content_arr["type"]) && $content_arr["type"] == "friend_message"){
    /* friend msg */
   echo "friend msg";
    
}else {
   echo "else\n";
}
?>
