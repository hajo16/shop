<?php 
include ('header.php');
//include('nav.php');
//$id;
//if($_SESSION['id']) {
  //  $id = $_SESSION['id'] ;
//}

?>
<center>
    <div class="container">
        <div class="shopping-cart" style="margin-top: 40px;">

            <h1 class="heading">جميع الطلبات المحجوزه</h1>

            <table>
                <thead>
                    <th>اسم طالب المنتج</th>
                    <th>الصورة</th>
                    <th>الاسم</th>
                    <th>السعر</th>
                    <th>العدد</th>
                    <th>السعر الكلي</th>
                    <th>العمل</th>
                </thead>
                <tbody>
                    <?php
         include('confec.php');
         $cart_query = mysqli_query($con,"SELECT * FROM addcard
         ");
         $grand_total = 0;
         if(mysqli_num_rows($cart_query) > 0){
             while($fetch_cart = mysqli_fetch_assoc($cart_query)){
                $id = $fetch_cart['user_id'];
                 $result = mysqli_query($con,"SELECT * FROM users where id=$id ");
                 if(mysqli_num_rows($result)>0 ){
                    while($user_data = mysqli_fetch_assoc($result)){
                 ?>
                    <tr>
                        <td><?php echo $user_data['name'];?></td>
                        <td><img src="<?php echo $fetch_cart['caunt'];?>" height="75" alt=""></td>
                        <td><?php echo $fetch_cart['cname']; ?></td>
                        <td><?php echo $fetch_cart['prace']; ?> SDG</td>

                        <form action="" method="post">
                            <input type="hidden" name="cart_id" value="<?php echo $fetch_cart['id']; ?>">
                            <td><?php echo $fetch_cart['total']; ?></td>
                            <!-- <input type="submit" name="update_cart" value="تعديل" class="option-btn"> -->
                        </form>
                        <td><?php echo $sub_total = ($fetch_cart['prace'] * $fetch_cart['total']); ?> SDG</td>
                        <td><a href="del_card.php?id=<?php echo $fetch_cart['id']; ?>" class="delete-btn"
                                onclick="return confirm('إزالة العنصر من سلة التسوق؟');">حذف</a></td>
                    </tr>
                    <?php
         $grand_total += $sub_total;
                    }
            }
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
    </div>
</center>
<?php
include ('res_footer.php');
?>