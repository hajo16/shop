<?php
include('res_haeder.php');
include('confec.php');

?>
<center>
    <form class="main" action="regester_user.php" method="POST">
        <div class="regester">
            <h2> إنشاءحساب جديد</h2>
            <?php if(isset($_GET['error_reg'])){?>
            <p class="error"><?php echo $_GET['error_reg'];?></p>
            <?php } ?>
            <label>ادخل اسم المستخدم</label><br>
            <input type="text" name="uname" placeholder="ادخل الإســم" autocomplete="off"><br>
            <label>ادخل الايميل</label><br>
            <input type="email" name="email" placeholder="ادخل الايميل" autocomplete="off"><br>
            <label>ادخل كلمه سر </label><br>
            <input type="password" name="password" placeholder="ادخل كلمه الســـر" autocomplete="new-password"><br>

            <di style="display:none">
                <select name="role_id">
                    <?php
                    $result = mysqli_query($con,"SELECT * FROM role WHERE id=2");
                    while($row = mysqli_fetch_array($result)){
                        echo"
                      <option value='$row[id]'>$row[role_name]</option>
                      ";

                    }
                ?>
                </select>
            </di>
            <button type="submit" name="login" style="width: 90%;"> تسجيل </button><br>
        </div>
    </form>
</center>
<script>
// remove message after 5 second
try {
    let msg = document.getElementById('msg');
    setTimeout(() => {
        msg.style.display = "none";
    }, 5000);
} catch (error) {
    console.log(error);
}
</script>
<?php
//include('footer.php');
?>