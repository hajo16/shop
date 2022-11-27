<?php
session_start();
// if(!$_SESSION['name']){
//     // die($_SESSION['name']);
//     header('Location: index.php');
// }
include 'header.php';
include 'confec.php';

if(isset($_SESSION['id'])){
$id = $_SESSION['id'];
if(isset($_POST['add_to_cart'])){

   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_POST['product_image'];
   $product_quantity = $_POST['product_quantity'];

   $select_cart = mysqli_query($con, "SELECT * FROM `addcard` WHERE cname = '$product_name' AND user_id = '$id'") or die('query failed');

   if(mysqli_num_rows($select_cart) > 0){
      $message[] = 'المنتج أضيف بالفعل إلى عربة التسوق!';
   }else{
      mysqli_query($con, "INSERT INTO `addcard`(user_id, cname, prace, caunt, total) VALUES('$id', '$product_name', '$product_price', '$product_image', '$product_quantity')") or die('query failed');
      $message[] = 'المنتج يضاف الى عربة التسوق!';
   }

};

if(isset($_POST['update_cart'])){
   $update_quantity = $_POST['cart_quantity'];
   $update_id = $_POST['cart_id'];
   mysqli_query($con, "UPDATE `addcard` SET total = '$update_quantity' WHERE id = '$update_id'") or die('query failed');
   $message[] = 'تم تحديث كمية سلة التسوق بنجاح!';
}

if(isset($_GET['remove'])){
   $remove_id = $_GET['remove'];
   mysqli_query($con, "DELETE FROM `addcard` WHERE id = '$remove_id'") or die('query failed');
   header('location:user.php');
}
  
if(isset($_GET['delete_all'])){
   mysqli_query($con, "DELETE FROM `addcard` WHERE user_id = '$id'") or die('query failed');
   header('location:user.php');
}
}
?>


<?php
if(isset($message)){
   foreach($message as $message){
      echo '<div class="message" onclick="this.remove();">'.$message.'</div>';
   }
}
?>

<div class="container">



    <div class="products" style="padding: 30px 0 120px 0;">

        <h1 class="heading">أحدث المنتجات</h1>

        <div class="box-container">

            <?php
   include('confec.php');
   $result = mysqli_query($con, "SELECT * FROM pro");      
   while($row = mysqli_fetch_array($result)){
   ?>
            <form method="post" class="box" action="">
                <img src="<?php echo $row['amge']; ?>" style="height:240px">
                <div class="name"><?php echo $row['name']; ?></div>
                <div class="price" style="z-index:1"><?php echo $row['prace']; ?></div>
                <input type="number" min="1" name="product_quantity" value="1">
                <input type="hidden" name="product_image" value="<?php echo $row['amge']; ?>">
                <input type="hidden" name="product_name" value="<?php echo $row['name']; ?>">
                <input type="hidden" name="product_price" value="<?php echo $row['prace']; ?>">

                <?php 
                if(isset($_SESSION['id'])){?>
                <input type="submit" value="إضافه إلى السله" name="add_to_cart" class="btn">
                <?php }
                else {
                    echo "<a class='btn' href='index.php'>add to cart</a>";
                }
                ;?>
            </form>
            <?php
      };
   ?>

        </div>

    </div>

    <?php if(isset($_SESSION['id'])){?>
    <div class="shopping-cart" style="margin-top: -115px;">

        <h1 class="heading"> عربة التسوق</h1>

        <table>
            <thead>
                <th>الصورة</th>
                <th>الاسم</th>
                <th>السعر</th>
                <th>العدد</th>
                <th>السعر الكلي</th>
                <th>العمل</th>
            </thead>
            <tbody>
                <?php
         $cart_query = mysqli_query($con, "SELECT * FROM `addcard` WHERE user_id = '$id'") or die('query failed');
         $grand_total = 0;
         if(mysqli_num_rows($cart_query) > 0){
            while($fetch_cart = mysqli_fetch_assoc($cart_query)){
      ?>
                <tr>
                    <td><img src="<?php echo $fetch_cart['caunt'];?>" height="75" alt=""></td>
                    <td><?php echo $fetch_cart['cname']; ?></td>
                    <td><?php echo $fetch_cart['prace']; ?> SDG</td>
                    <td>
                        <form action="" method="post">
                            <input type="hidden" name="cart_id" value="<?php echo $fetch_cart['id']; ?>">
                            <input type="number" min="1" name="cart_quantity"
                                value="<?php echo $fetch_cart['total']; ?>">
                            <input type="submit" name="update_cart" value="تعديل" class="option-btn">
                        </form>
                    </td>
                    <td><?php echo $sub_total = ($fetch_cart['prace'] * $fetch_cart['total']); ?> SDG</td>
                    <td><a href="user.php?remove=<?php echo $fetch_cart['id']; ?>" class="delete-btn"
                            onclick="return confirm('إزالة العنصر من سلة التسوق؟');">حذف</a></td>
                </tr>
                <?php
         $grand_total += $sub_total;
            }
         }else{
            echo '<tr><td style="padding:20px; text-transform:capitalize;" colspan="6">العربة فارغة</td></tr>';
         }
      ?>
                <tr class="table-bottom">
                    <td colspan="4">المبلغ الإجمالي :</td>
                    <td><?php echo $grand_total; ?> SDG</td>
                    <td><a href="index.php?delete_all" onclick="return confirm('حذف كل المنتجات من العربة?');"
                            class="delete-btn <?php echo ($grand_total > 1)?'':'disabled'; ?>">حذف الكل</a></td>
                </tr>
            </tbody>
        </table>



    </div>
    <?php }?>
</div>
<?php
    include 'res_footer.php';
    ?>