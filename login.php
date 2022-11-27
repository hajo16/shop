<?php
 session_start(); 
include('confec.php');
if(isset($_POST['login'])){
    
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
   $email = validate($_POST['email']);
   $pass =  validate($_POST['password']);
   $HASH_PASS =md5($pass);
   if(empty($email)){
      header('location: index.php?error=User email Is required');
      exit();
   }else if(empty($pass)){
     header('location: index.php?error=Password Is required');
     exit();
   }else{
    //المدير
    $sql="SELECT * FROM users WHERE email='$email'";
    $result= mysqli_query($con,$sql);
    // die(print_r($result->num_rows));
    if(mysqli_num_rows($result) === 1 ){
        $row = mysqli_fetch_assoc($result);
        if($row['password']== $HASH_PASS ){
            $_SESSION['name'] = $row['name'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['id'] = $row['id'];
            $_SESSION['role'] = $row['role_id'];
            if($row['role_id'] == 1) {
              header('location: protacts.php');
              exit();
            }else {
                header('location: user.php');
                exit();
            }
            
        }else{
            header('location: index.php?error=إسم المستخدم إو كلمة السر غير صحيخه');
            exit();
        }
    }else{
        header('location: index.php?error=المستخدم غير موجود ');
        exit();
    }
    
   }
}


else{
    header('location: index.php');
    exit();
}
?>