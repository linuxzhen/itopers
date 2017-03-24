<?php
class Action_DB {
    private $con;
    public function OpenDB($dbname){
        $this->con = mysql_connect("127.0.0.1","u_weixin_rw","wei_xin_123");
        if (!$this->con)
        {
            die('Could not connect: ' . mysql_error());
        }
        mysql_select_db($dbname, $this->con);
        mysql_set_charset('latin1',$this->con);
    }
    public function UpdateSql($sql){
       $this->OpenDB("weixin");
       if (!mysql_query($sql,$this->con))
       {
           die('Error: ' . mysql_error());
           return 0;
       }
       mysql_close($this->con);
       return 1;
    }
    public function SelectSql($sql){
       $this->OpenDB("weixin");
       $articles=mysql_query($sql,$this->con);
       $Row = mysql_fetch_assoc($articles);
       mysql_close($this->con);
       return $Row;
    }
}
?>
