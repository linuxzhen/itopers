<?php
include("connectdb.php");

class Action_Group {
    public $content=array();
    public function SetContent($content){
        $this->content=$content;
    }

    public function Start(){
        RcordLogFile("group start ...","info");
        RcordLogFile("group content：".print_r($this->content,true),"info");
        if(isset($this->content["group"]) && ($keyword=$this->IsCreateGroupXM($this->content["group"])) != ""){
            $sender=$this->content["sender"];
            $groupid=$this->content["group_id"];
            $group=$this->content["group"];
            RcordLogFile($this->content["group"]." is created","info");
            if(strstr($this->content["content"],$keyword)){
                /* to xiao mi */
                RcordLogFile("group xiaomi：".$keyword,"info");
                $con_arr=explode('：',$this->content["content"]);
                RcordLogFile(print_r($con_arr,true),"info");
                if(strstr($con_arr[0],"info")){
                    RcordLogFile("into info","info");
                    /* info： */
                    $this->ToInfo($sender,$groupid,$con_arr,$group);
                }else if(strstr($con_arr[0],"get")){
                    RcordLogFile("into get","info");
                    /* get： */
                    $this->ToGet($sender,$groupid,$con_arr,$group);
                }else if(strstr($this->content["content"],"笑话")){
                    /* img */
                    RcordLogFile("into laugh","info");
                    $this->Laugh();
                }else if(strstr($this->content["content"],"天气")){
                    /* add */
                    $this->Weather();
                }else {
                    /* else */
                    $flag=$this->Serach($keyword);
                    if($flag==0){
                        SendGroupById($groupid,"@".$sender."  [小秘]提供如下功能：\n1.收集信息：".$keyword."  info：姓名：电话：地址：生日\n2.获取信息：".$keyword."  get：姓名","content");
                        RcordLogFile("into else","info");
                        return -1;
                    }
                }
            }else if(strstr($this->content["content"],"小秘")){
                SendGroupById($groupid,"@".$sender." 请叫我 ".$keyword,"content");
            }else if(strstr($this->content["content"],"笑话")){
                SendGroupById($groupid,"@".$sender." 我来讲个笑话吧","content");
                $this->Laugh();
            }else if(strstr($this->content["content"],"看美女") || strstr($this->content["content"],"看妹子")){
                $this->LookMeiNv();
            }else {

                return -1;
            }
        }else if(isset($this->content["post_type"]) && $this->content["post_type"] == "send_message" && $this->content["format"] == "text"){
            RcordLogFile("post_type:send_message...","info");
            $con_arr=explode('叫',$this->content["content"]);
            RcordLogFile("content=".print_r($con_arr,true),"info");
            if($con_arr[0] == "#我要小秘" && isset($con_arr[1]) && isset($this->content["group"])){
                $this->AddXM($con_arr[1],$this->content["group"],$this->content["group_id"]);
            }
        }

   }
   public function Serach($keyword){
       $con_arr=explode($keyword,$this->content["content"]);
       $sender=$this->content["sender"];
       $groupid=$this->content["group_id"];
       RcordLogFile("serach=".print_r($con_arr,true),"info");
       if(isset($con_arr[1]) && trim($con_arr[1]) != ""){
          $url="http://www.tngou.net/api/search?";
          $param="keyword=".urlencode(trim($con_arr[1]))."&name=topword";
          $data=json_decode(curl_get_contents($url.$param),true);
          RcordLogFile("serach url=".$url.$param." data=".print_r($data,true),"info");
          if(isset($data["total"]) && $data["total"] >=1){
              $id=rand(0,count($data["tngou"]));
              RcordLogFile("serach randid=".$id." total=".$data["total"]." title=".$data["tngou"][$id]["title"],"info");
              $content=$data["tngou"][$id]["message"];
              SendGroupById($groupid,"@".$sender."  ".$content,"content");
              if(isset($data["tngou"][$id]["img"])){
                 SendGroupById($groupid,$data["tngou"][$id]["img"],"media_path");
              }
              return 1;
          }

       }
       return 0;
   }
   public function LookMeiNv(){
       $sender=$this->content["sender"];
       $groupid=$this->content["group_id"];
       $url="http://www.tngou.net/tnfs/api/list?";
       $id=rand(1,7);
       $param="page=1&rows=1&id=".$id;
       $data=json_decode(curl_get_contents($url.$param),true);
       RcordLogFile("LookMeiNv URL=".$url.$param,"info");
       RcordLogFile("LookMeiNv data=".print_r($data,true),"info");
       if(isset($data["total"]) && $data["total"] >=1){
           $maxnum=$data["total"];
           $page=rand(1,$maxnum);
           $param="page=".$page."&rows=1&id=".$id;
           RcordLogFile("LookMeiNv maxnum=".$maxnum." page=".$page." URL2=".$url.$param,"info");
           $data2=json_decode(curl_get_contents($url.$param),true);
           if(isset($data2[tngou][0]["img"])){
               SendGroupById($groupid,"@".$sender."  ".$data2[tngou][0]["title"],"content");
               $img="http://tnfs.tngou.net/img".$data2[tngou][0]["img"];
               SendGroupById($groupid,$img,"media_path");
           }
       }
   }
   public function Laugh(){
       $sender=$this->content["sender"];
       $groupid=$this->content["group_id"];
       $db=new Action_DB();
       $randnum=rand(1,2060);
       $sql="select content from laugh_ok where id=".$randnum;
       $data=$db->SelectSql($sql);
       RcordLogFile("laugh content=".print_r($data,true),"info");
       if(isset($data["content"]) && $data["content"] != ""){
           $content=str_replace("<p>"," ",$data["content"]);
           $content=str_replace("</p>","\n",$content);
           $content=str_replace("<br />","\n",$content);
           SendGroupById($groupid,"@".$sender."  ".$content,"content");
           return 1;
       }
       return 0;
   }
   public function Weather(){
       RcordLogFile("Weather start...","info");
       $sender=$this->content["sender"];
       $groupid=$this->content["group_id"];
       $place=substr(strrchr(trim($this->content["content"])," "),1); 
       $place_arr=explode('天气',$place);
       $place=$place_arr[0];
       RcordLogFile("Weather pacle=".$place,"info");
       $params="key=wxexcogibij3obom&location=".urlencode($place)."&language=zh-Hans&unit=c&start=0&days=3";
       /*$params = array(
           "key"=>"wxexcogibij3obom",
           "location"=>urlencode($place),
           "language"=>"zh-Hans",
           "unit"=>"c",
           "start"=>0,
           "days"=>3,
       );*/
       $url="https://api.thinkpage.cn/v3/weather/daily.json?";
       #$data=json_decode(CURL($params,$url),true);
       $data=json_decode(curl_get_contents($url.$params),true);
       $url_cur="https://api.thinkpage.cn/v3/weather/now.json?key=wxexcogibij3obom&location=".urlencode($place)."&language=zh-Hans&unit=c";
       $data_cur=json_decode(curl_get_contents($url_cur),true);
       RcordLogFile("Weather Data=".print_r($data,true),"info");
       if(isset($data["results"])){
            $daily=$data["results"][0]["daily"];
            $daily_cur=$data_cur["results"][0]["now"];
            $result="@".$sender." [".$place."] 当前:".$daily_cur["text"].",气温:".$daily_cur["temperature"]."\n* 今天,白天:".$daily[0]["text_day"].",晚间:".$daily[0]["text_night"].",最高温:".$daily[0]["high"].",最低温:".$daily[0]["low"].",风速:".$daily[0]["wind_speed"]."\n";
            $result .="* 明天,白天:".$daily[1]["text_day"].",晚间:".$daily[1]["text_night"].",最高温:".$daily[1]["high"].",最低温:".$daily[1]["low"].",风速:".$daily[1]["wind_speed"]."\n";
            $result .="* 后天,白天:".$daily[2]["text_day"].",晚间:".$daily[2]["text_night"].",最高温:".$daily[2]["high"].",最低温:".$daily[2]["low"].",风速:".$daily[2]["wind_speed"];
            SendGroupById($groupid,$result,"content");
            RcordLogFile("Weather get success:".$url.$params,"info");
            return 1;
       }else {
            RcordLogFile("Weather get fail:".$url.$params,"info");
            SendGroupById($groupid,"@".$sender." ^ ^ 没有查到,换个城市试试?","content");
       }    
       return 0;
   }
   public function AddXM($xiaomi,$group,$groupid){
       $db=new Action_DB();
       $sql="replace into xiaomi(groupname,keyword,createtime)values('".addslashes($group)."','".$xiaomi."',now())";
       RcordLogFile($sql,"info");
       if($db->UpdateSql($sql)==1){
           SendGroupById($groupid,"@all 我是本群小秘,请叫我 ".$xiaomi,"content");
           return 1;
       }
       return 0;
   }
   public function ToGet($sender,$groupid,$con_arr,$group){
       $name=$con_arr[1];
       if(preg_match("/^[\x4e00-\x9fa5]+$/",$name)){
           SendGroupById($groupid,"@".$sender." 请填写真实姓名.","content");
           return 0;
       }
       $db=new Action_DB();
       $sql="select name,tel,birth,place from contact where name='".addslashes($name)."' and groupname='".addslashes($group)."'";
       RcordLogFile($sql,"info");
       if($row=$db->SelectSql($sql)){
           SendGroupById($groupid,"@".$sender." 你需要的信息如下：\n姓名：".$name."\n电话：".$row["tel"]."\n地址：".$row["place"]."\n生日：".$row["birth"],"content");
           return 1;
       }
       SendGroupById($groupid,"@".$sender." 没有找到：".$name." 信息","content");
       return 0;

   }
   public function ToInfo($sender,$groupid,$con_arr,$group){
       $name=trim($con_arr[1]);
       $tel=trim($con_arr[2]);
       $address=trim($con_arr[3]);
       $birth=trim($con_arr[4]);
       if(preg_match("/^[\x4e00-\x9fa5]+$/",$name)){
           SendGroupById($groupid,"@".$sender." 请填写真实姓名.","content");
           return 0;
       }
       if(!preg_match("/^1[34578]\d{9}$/", $tel)){
           SendGroupById($groupid,"@".$sender." 请填写11位手机号码,不带分隔.","content");
           return 0;
       }
       $db=new Action_DB();
       $sql="replace into contact(name,tel,birth,place,groupname)values('".addslashes($name)."','".addslashes($tel)."','".addslashes($birth)."','".addslashes($address)."','".addslashes($group)."')";
       RcordLogFile($sql,"info");
       if($db->UpdateSql($sql)==1){
           SendGroupById($groupid,"@".$sender." 您的信息已经更新成功","content");
           return 1;
       }
       return 0;
   } 
   public function IsCreateGroupXM($group){
       $sql="select keyword from xiaomi where groupname='".addslashes($group)."' limit 1";
       RcordLogFile("IsCreateGroupXM sql=".$sql,"info");
       $cmd=new Action_DB();
       $result=$cmd->SelectSql($sql);
       RcordLogFile("IsCreateGroupXM result=".print_r($result,true),"info");
       if(isset($result["keyword"]) && $result["keyword"] != ""){
          return $result["keyword"];
       }
       return "";
   }

}

?>
