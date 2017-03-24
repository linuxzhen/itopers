<?php
require("address.php");
$namestr="@丁国兴";
$file="/home/webadmin/gitblog-2.2/weixin/log/weixin.log";
$sendfile="/home/webadmin/gitblog-2.2/weixin/log/weixin_send.log";
$content=file_get_contents("php://input");
#$content=preg_replace('/("id\d":)(\d{9,})/i', '${1}"${2}"', $content); 
$content_arr=json_decode($content,true);
if($f  = file_put_contents($file, $content."\n",FILE_APPEND))
{
  echo "OK";
}
#echo $content_arr["group_id"]."\n";
if(isset($content_arr["group_id"])){
    echo "xxx1\n";
    #if($content_arr["group_id"] == "@@999922e94c0f50a0935272e1891774de805a6255505684e0cfac6e473c932e4d"){
    #if($content_arr["group_id"] == "@@b3164d69519128926209822f07c49429ce3002d7a91b1e1049300ee346da5d1f"){
    if($content_arr["group"] == "05计（2）班"){
        $sender=$content_arr["sender"];
        $con=$content_arr["content"];
        $groupid=$content_arr["group_id"];
        echo substr($con,0,strlen($namestr))."-\n";
        #if(substr($con,0,strlen($namestr)) == $namestr){
        if(strstr($con,$namestr) and $sender != "丁国兴"){
             $url="http://127.0.0.1:3000/openwx/send_group_message";
             $params="id=$groupid&content=@$sender 你的消息已经收到.其它同学请@丁国兴 +姓名+手机号+城市+公司名 发到群里";
             $data=CURL($params,$url);
             if($s=file_put_contents($sendfile, "groupid:".$groupid." sender:".$sender." content:".$con." return:".$data."\n",FILE_APPEND)){
                echo "send OK";
             }
        }
    }
}
echo $content_arr["type"]."\n";
if(isset($content_arr["type"]) and $content_arr["type"] == "friend_message"){
    $sender=$content_arr["sender"];
    $con=$content_arr["content"];
    $sendid=$content_arr["sender_id"];
    if(strstr($con,"中秋")){
        $max=count($images);
        $randomnum=rand(0,$max-1);
        $url="http://127.0.0.1:3000/openwx/send_friend_message";
        $params="id=".$sendid."&media_path=".$images[$randomnum];
        $data=CURL($params,$url);
    }
}
if(isset($content_arr["type"]) and $content_arr["type"] == "group_message"){
    $sender=$content_arr["sender"];
    $con=$content_arr["content"];
    $sendid=$content_arr["group_id"];
    if(strstr($con,"中秋")){
        $max=count($images);
        $randomnum=rand(0,$max-1);
        $url="http://127.0.0.1:3000/openwx/send_group_message";
        $params="id=".$sendid."&media_path=".$images[$randomnum];
        $data=CURL($params,$url);
    }
}


function CURL($params,$url){
    $ch = curl_init();      
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);        
    curl_setopt($ch, CURLOPT_URL,$url);       
    curl_setopt($ch, CURLOPT_POST, 1);    
    curl_setopt($ch, CURLOPT_HEADER, 0);
    // $params如果是array，curl会自动转成multipart/form-data。所以此处$params请用拼接好的字符串。详见php官方文档。
    curl_setopt($ch, CURLOPT_POSTFIELDS, $params);  
    $data = curl_exec($ch);      
    curl_close($ch);  
    return $data;
}
?>
