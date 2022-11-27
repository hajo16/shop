<?php
include('confec.php');

if(isset($_POST['upload'])){
    // die('test');
    $NAME = $_POST['name'];
    $PRACE = $_POST['price'];
    $IMAGE = $_FILES['image'];
    $image_location = $_FILES['image']['tmp_name'];
    $image_name = $_FILES['image']['name'];
    $image_up = "images/".$image_name;
   
    $insert ="INSERT INTO pro (name , prace , amge) VALUES ('$NAME','$PRACE','$image_up')";
    mysqli_query($con,$insert);
    if(move_uploaded_file($image_location,'images/'.$image_name)){

        echo '<script>alert("تـــم رفع الصوره بنجاح")</script>';
       

    }
    else{
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        // echo '<script>alert("لقــد حدث مشكلــةلم يتم رفع المنتج")</script>';
 
    }
    header('Location:  upload.php');

}

mysqli_close($con);
?>