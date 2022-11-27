<?php
include('confec.php');

if(isset($_POST['update'])){
    // die('test');
    $ID = $_POST['id'];
    $NAME = $_POST['name'];
    $PRACE = $_POST['price'];
    $IMAGE = $_FILES['image'];
    $image_location = $_FILES['image']['tmp_name'];
    $image_name = $_FILES['image']['name'];
    $image_up = "images/".$image_name;
    $update = "UPDATE pro SET name='$NAME', prace='$PRACE', amge='$image_up'WHERE id=$ID";
    mysqli_query($con,$update);
    if(move_uploaded_file($image_location,'images/'.$image_name)){

        echo '<script>alert("تـــم تحديث الصوره بنجاح")</script>';
       

    }
    else{
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
        // echo '<script>alert("لقــد حدث مشكلــةلم تم رفع المنتج")</script>';
 
    }
    header('Location:  protacts.php');

}

mysqli_close($con);
?>