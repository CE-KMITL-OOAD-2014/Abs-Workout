<?php
 class Inbox {

 	function __construct(){
 		$conn = mysql_connect ('localhost','root');
 		mysql_select_db('absworkout',$conn);
 		mysql_query("SET NAMES UTF8");
 	}
 	public function Index(){
 		$query = mysql_query('SELECT * FROM member');
 			return mysql_num_rows($query);
 	}
 	public function Add_member($user = null, $pass = null){
 		if(isset($user) && isset($pass)){
 			$query = mysql_query("INSERT INTO member (username,password) VALUES ('$user','$pass')");
 			if ($query) {
 				echo "Add Complate";
 			}else{
 				echo "Error";
 			}
 		}else{
 			echo "Need User & Pass";
 		}
 	}
 	public function Login_Member($user,$pass){
 		if(isset($user) && isset($pass)){
 			$query = mysql_query("SELECT Username,Password FROM login WHERE Username='$user' AND Password='$pass' ");
 			if(mysql_num_rows($query) <= 0){
 				return $data[] = "ERROR" ;
 			}else{
 				return $data[] = "Login Complate";
 			}
 		}else{
 			return false;
 		}
 	}
 	public function Edit_Member ($user = null , $pass = null , $new_pass = null){
 		if(isset($user)&&isset($pass)&&isset($new_pass)){
 			$query = mysql_query("SELECT Username,Password FROM login WHERE Username='$user' AND Password='$pass'");
 			if(mysql_num_rows($query) <=0){
 				return $data[] = "No User";
 			}else{
 				$statsUpdate = mysql_query("UPDATE login SET Password = '$new_pass' WHERE Username='$user' ");
 				if($statsUpdate){
 					return $data[] = "Edit Comlete";
 				}
 			}
 		}else{
 			return false;
 		}
 	}
 }
