<?php 
include 'header.php';
// include('nav.php');

?>

<section class="products">
    <h2 class="title">الإداره والإشراف</h2>
    <div class="container">
        <?php
            include('confec.php');
            $result = mysqli_query($con, "SELECT * FROM pro");
            while($row = mysqli_fetch_array($result)){
                echo "
                <div class='product'>
                    <div class='card-img'style='height: 280px;'>
                    <img src='$row[amge]' alt='foto' width='100%'>
                    </div>
                <div class='new'style='margin-top: 10px;'>
                    <h4 class='h5''>$row[name]</h4>
                    <p class='pr'style='margin-top: 5px;'>$row[prace]<span style='margin-left: 5px;'>SDG</span></p>
                    <style>
                    .del-btn{
                        background-color:red;
                        color:black;
                    }
                    </style>
                    <button class='del-btn'>
                    <a href='delete.php? id=$row[id]'class='lin' style='color: '>حذف المنتج</a>
                    </button>
                    
                    <button>
                    <a href='update.php? id=$row[id]' class='lin' style='color: '>تعديل المنتج</a>
                    </button>
                </div>
                </div>

                ";
            }
            ?>
    </div>
</section>
<?php
include 'res_footer.php';
?>