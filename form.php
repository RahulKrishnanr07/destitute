<?php
error_reporting(0);
session_start();
include('actions.php');
$ob = new Dbactions;
date_default_timezone_set("Asia/Calcutta");
$dTime= date('Y-m-d H:i:s');
if(isset($_POST['Dname']) && isset($_POST['Dmail']) && isset($_POST['Dmob']) && isset($_POST['Dsub'])  && isset($_POST['Dcomment']) && isset($_POST['g-recaptcha-response']))
{//1
if(!( empty($_POST['Dname']) || empty($_POST['Dmail']) || empty($_POST['Dmob']) || empty($_POST['Dsub']) || empty($_POST['Dsub']) || empty($_POST['Dcomment']) || empty($_POST['g-recaptcha-response'])))
{//2

  $fileType='';
  $fileName='';
  $fileSize='';
  $targetFilePath='';



  $name=$_POST['Dname']; 
  $email=$_POST['Dmail'];
  $mobile=$_POST['Dmob'];
  $subject=$_POST['Dsub'];
  $comment=$_POST['Dcomment'];
  $captcha_code=$_POST['g-recaptcha-response'];
  $email_is_valid=validEmail($email);
  $mobile_is_valid=validate_mobile($mobile);
  $better_token = md5(uniqid(mt_rand(), true));
  $generate_id  = hash('sha256', microtime() );
  $user_id=$better_token.$generate_id;

  if($email_is_valid == 1 && $mobile_is_valid == 1 )
  {//3
    $secretKey = "6LeIxAcTAAAAAGG-vFI1TnRWxMZNFuojJ4WifJWe";//change secret key
    $ip = $_SERVER['REMOTE_ADDR'];
    $url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . urlencode($secretKey) .  '&response=' . urlencode($captcha_code);
    $response = file_get_contents($url);
    $responseKeys = json_decode($response,true);
    if($responseKeys["success"])
    {//4

      if( !empty($_FILES["file"]["name"])) 
      {//5
      $statusMsg = '';
      $targetDir = "media/uploads";
      mkdir($targetDir."/".$generate_id);
      $targetDir=$targetDir."/".$generate_id."/";
      $fileName = basename($_FILES["file"]["name"]);//
      $targetFilePath = $targetDir . $fileName;//
      $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);//
      $fileSize=$_FILES["file"]["size"];//
      $maxsize = 2 * 1024 * 1024;
      if ($fileSize > $maxsize) {
      $err='File size is larger than the allowed limit (2mb).';
      goBackWithError($err);
      }
      else {
        $allowTypes = array('jpg', 'jpeg', 'gif', 'png', 'zip', 'cad', 'pdf', 'doc', 'docx' );
        /* uploading */
        if(in_array($fileType, $allowTypes))
        {
              if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath))
              {
              $err= "The file ".$fileName. " has been uploaded.";
              // goBackWithError($err);
              }
              else
              {
              $err= "Sorry, there was an error uploading your file.";
              goBackWithError($err);
              }
        }
        else
         {
        $err= "Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.";
        goBackWithError($err);
         }
        /* uploading */
      }

    




      }//5
      else {//5
        $fileType='';
        $fileName='';
        $fileSize='';
        $targetFilePath='';
      }//5

    /*Data insertion to database*/
    $inS=$ob ->userDataInsertion($name,$email,$mobile,$subject,$comment,$user_id,$dTime,$fileType,$fileName,$fileSize,$targetFilePath);
    // print_r($inS);
    // exit();
    $err= "Form Submitted";
        goBackWithError($err);
    /*Data insertion to database*/


    }//4
    else
    { //4 else
      $err= "Captcha Validation Failed Try Again";
      goBackWithError($err);
      exit();
    }//4 else

  }//3
  else
  {// 3 else
    
    $err= "Email or Mobile is Invalid";
    goBackWithError($err);
    exit();
  }//3 else
  
  
}//1
}//2

/*********************/
function validate_mobile($mobile)
{
  return preg_match('/^[0-9]{10}+$/', $mobile);
}
function validEmail($email){
  if (!preg_match("/^[^@]{1,64}@[^@]{1,255}$/", $email)) {
      return false;
  }
  $email_array = explode("@", $email);
  $local_array = explode(".", $email_array[0]);
  for ($i = 0; $i < sizeof($local_array); $i++) {
  if (!preg_match("/^(([A-Za-z0-9!#$%&'*+\/=?^_`{|}~-][A-Za-z0-9!#$%&'*+\/=?^_`{|}~\.-]{0,63})|(\"[^(\\|\")]{0,62}\"))$/", $local_array[$i])) {
          return false;
      }
  }
  if (!preg_match("/^\[?[0-9\.]+\]?$/", $email_array[1])) {
      $domain_array = explode(".", $email_array[1]);
      if (sizeof($domain_array) < 2) {
          return false; 
      }
      for ($i = 0; $i < sizeof($domain_array); $i++) {
          if (!preg_match("/^(([A-Za-z0-9][A-Za-z0-9-]{0,61}[A-Za-z0-9])|([A-Za-z0-9]+))$/", $domain_array[$i])) {
              return false;
          }
      }
  }

  return true;
}
/*********************/
$err="Fill all madadatory fields and try again";
goBackWithError($err);
function goBackWithError($err)
{
$_SESSION['err']=$err;
header("Location: {$_SERVER["HTTP_REFERER"]}");
exit();
}
exit();
?>