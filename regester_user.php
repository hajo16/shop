<?php
// include('header.php');
include('confec.php');
if(isset($_POST['login'])){
    //  function validate input failed coming
 function clean($data){
    global $con;
    $data = htmlspecialchars($data);
    $data = mysqli_real_escape_string($con,$data);
    $data = stripslashes($data);
    $data = strip_tags($data);
    return $data;
   
  }
    $UNAME = clean($_POST['uname']);
    $EMAIL = clean($_POST['email']);
    $PASS = clean($_POST['password']);
    //$TPASS = $_POST['tpassword'];
    // $HASH_PASS =sha1($PASS);
    $ROLE_ID = clean($_POST['role_id']);
   
    if (empty($UNAME )) {
        header("Location:regester.php?error_reg=اسم المستخدم ضروري");
     }//elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
       //  header("Location:regester.php?error_reg=الايميل غير صحيح");
    // }
     elseif (empty($EMAIL)){
        header("Location:regester.php?error_reg=الايميل  ضروري");
    
     }elseif (empty($PASS)){
        header("Location:regester.php?error_reg=كلمة السر  ضرورية");
       
     }
    //}//elseif ($TPASS!=$PASS){
       // header("Location:regester.php?error_reg=كلمة السر غير متطابقه");
     
     //}
   
     elseif (strlen($PASS) <= 5){
        header("Location:regester.php?error_reg=كلمة السر  قصيرة");
        
     } else {
         if (empty($error)) {
             // global $conn;
            
             $HASH_PASS = md5($PASS);
             $sql = "INSERT INTO users(name, email , password , role_id ) VALUES('$UNAME','$EMAIL','$HASH_PASS','$ROLE_ID')";
            //  mysqli_query($con,$sql);
             if($con->query($sql)=== TRUE) {
                 header("Location:index.php?create_user");
             }else {
                 die("some error". $con->error);
             }
         }
     }
 
    }      
?>