<?php
include('confec.php');
include('header.php');

?>
<center class="form" style="padding: 0px 0 50px 0;">
    <form action="login.php" method="post">
        <div class="main">
            <h2>تسجيل دخـــول</h2>
            <?php if(isset($_GET['error'])){?>
            <h4 class="error" style="color:red"><?php echo $_GET['error'];?></h4>
            <?php } ?>

            <label>أدخل الإيميل </label><br>
            <input type="email" name="email" placeholder="ادخل الاميـــل" autocomplete="off"><br>
            <label>أدخل كلمه السر </label><br>
            <input type="password" name="password" placeholder="ادخل كلمه الســـر" autocomplete="new-password"><br>
            <button type="submit" name="login" style="width:90%;"> تسجيل دخـــول</button><br>
            <button style="width:90%;background-color:rgb(90, 150, 228); ;">
                <a href="regester.php" style="color:black;">إنشاء حساب جــديد</a>
            </button>
        </div>
    </form>
</center>


<?php
include('res_footer.php');
?>