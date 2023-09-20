<?php
class Dbactions
{
public $con;  
public $tp,$tpid,$lim,$issch,$schkey;
public function __construct()  
{  
$this->con = mysqli_connect("localhost", "root", "", "destitue_db");  
if(!$this->con)  
{  
// echo 'Database Connection Error ' . mysqli_connect_error($this->con);  
}  
} 
public function RealEscapeString($comData)
{
$afData=mysqli_real_escape_string($this->con,$comData);
return  $afData;
}
public function userDataInsertion($name,$email,$mobile,$subject,$comment,$user_id,$date_time,$fileType,$fileName,$fileSize,$targetFilePath)  
{
$array = array();
$query = "INSERT INTO users_list_tb (user_id,user_name,user_email,user_mobile,user_status,user_generated_at) 
VALUES ('$user_id', '$name', '$email', '$mobile','1','$date_time')";
$result = mysqli_query($this->con, $query);
if($result == 1)
{
   $query_2 = "INSERT INTO user_form_tb (user_id,user_subject,user_comments,user_file,user_file_type,user_file_path,user_read_status,user_form_status,generated_at) 
    VALUES ('$user_id', '$subject', '$comment',NULLIF('$fileName',''),NULLIF('$fileType',''),NULLIF('$targetFilePath',''),0,1,'$date_time')";
    $result_2 = mysqli_query($this->con, $query_2);   
}
return $array; 
}
}
?>