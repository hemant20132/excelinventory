<?php
class loginclass
{
var $user;
var $pass;
var $message1;
var $conn;

function checklogin($conn1,$userid,$password)
{
$this->conn=$conn1;
$this->user=$userid;
$this->pass=$password;
echo $this->user;
echo $this->password;
$query="select username, userpassword from login_user_data where username='".$this->user."' and userpassword='".$this->pass."'";
$result=mysqli_query($this->conn,$query);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);

if ($row["username"]==$this->user and $row["userpassword"]==$this->pass)
{	
$_SESSION['username']=$this->user;
$this->message1="success";
return $this->message1;
}

if ( $row["username"]<>$this->user or $row["userpassword"]<>$this->pass )
{
session_destroy();
$this->message1="nosuccess";
return $this->message1;
}

}

}

?>