<?php 
include 'header.php';
//include('nav.php');
include 'confec.php';
$ID =$_GET['id'];
$up =mysqli_query($con, "SELECT * FROM pro WHERE id=$ID");
$data = mysqli_fetch_array($up);
include'header.php'; 
?>
<center>
    <h2>تسوق</h2>
    <div class="main">
        <form action="up.php" method="post" enctype="multipart/form-data" name="upload">
            <h2>تعديل المنتج</h2>
            <input type="text" name='id' value='<?php echo $data['id']?>'>
            <br>
            <input type="text" name='name' value='<?php echo $data['name']?>'>
            <br>
            <input type="text" name='price' value='<?php echo $data['prace']?>'>
            <br>
            <input type="file" id='file' name='image' style="display:none" value='<?php echo $data['amge']?>'>
            <br>
            <label for="file"> تحديث صوره المنتج</label>
            <button type="submit" name='update'>تعديل المنتج</button>
            <br><br>
            <a href=protacts.php>عرض كل المنتجات</a>
        </form>
    </div>
    <?php
     include 'res_footer.php';
    ?>
</center>