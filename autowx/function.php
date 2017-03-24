<?php
function CURL($params,$url){
    $ch = curl_init();      
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);        
    curl_setopt($ch, CURLOPT_URL,$url);       
    curl_setopt($ch, CURLOPT_POST, 1);    
    curl_setopt($ch, CURLOPT_HEADER, 0);
    // $params如果是array，curl会自动转成multipart/form-data。所以此处$params请用拼接好的字符串。详见php官方文档。
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.11 (KHTML, like Gecko) Chrome/23.0.1271.1 Safari/537.11');
    print_r($params);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $params);  
    $data = curl_exec($ch);      
    curl_close($ch);  
    return $data;
}

function CheckToken($token){
    if($token == "oihqwgqpnwq82@34slD"){
       return 1;
    }
    return 0;
}

function RcordLogFile($content,$name){
    $ddt=date('Ymd',time());
    $filename="log/".$name.".log.".$ddt;
    $dt=date('Y-m-d H:I:s',time());
    if($s=file_put_contents($filename, $dt." - ".$content."\n",FILE_APPEND)){
        echo "recode log OK\n";
        return 1;
    }
    return 0;
}

/**
 * @param group id,content,[content|media_path]
 * @return 0|1
 */
function SendGroupById($groupid,$content,$type){
    $url="http://127.0.0.1:3000/openwx/send_group_message";
    if($type == "content"){
        $content=$content."\n(来自小秘)";
    }
    $params="id=".$groupid."&".$type."=".urlencode($content);
    $data=json_decode(CURL($params,$url),true);
    if(isset($data["code"]) && $data["code"] == 0){
        RcordLogFile("send group msg success".$url."?".$params,"send_ok");
        return 1;
    }else{
        RcordLogFile("send group msg fail:".$url."?".$params,"send_error");
        return 0;
    }
}
/**
 * @param friend id,content,[content|media_path]
 * @return 0|1
 */
function SendFriendById($groupid,$content,$type){
    $url="http://127.0.0.1:3000/openwx/send_friend_message";
    $params="id=".$groupid."&".$type."=".urlencode($content);
    $data=json_decode(CURL($params,$url),true);
    if(isset($data["code"]) && $data["code"] == 0){
        RcordLogFile("send Friend msg success".$url."?".$params,"send_ok");
        return 1;
    }else{
        RcordLogFile("send Friend msg fail:".$url."?".$params,"send_error");
        return 0;
    }
}


function curl_get_contents($url){  
        $ch = curl_init();  
        curl_setopt($ch, CURLOPT_URL, $url);//设置访问的url地址  
        //curl_setopt($ch, CURLOPT_POST, true);   
        //curl_setopt($ch, CURLOPT_POSTFIELDS, "IdCard={$content}");  
        //curl_setopt($ch,CURLOPT_HEADER,1);//是否显示头部信息  
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.89 Safari/537.1');   //用户访问代理 User-Agent  
        curl_setopt($ch, CURLOPT_REFERER,"http://www.thinkpage.cn");//设置 referer  
        //curl_setopt($ch,CURLOPT_FOLLOWLOCATION,1);//跟踪301  
        curl_setopt($ch, CURLOPT_TIMEOUT, 2);//设置超时  
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);//返回结果  
        curl_setopt($ch, CURLOPT_COOKIE, "");    
          
        $result = curl_exec($ch);     
        curl_close($ch);     
        return $result;     
}  
?>
