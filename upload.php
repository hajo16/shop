<?php 
include 'header.php';
// include('nav.php');
?>
<center>
    <div class="main">
        <form action="insert.php" method="post" enctype="multipart/form-data" name="upload">
            <h2> مـــوقع تســويـــقي</h2>
            <img src="images/onlin-shop.png" alt="foto" width="440px"><br>
            <input type="text" name='name' placeholder="ادخـــل اســـم المنتـــج">
            <br>
            <input type="text" name='price' placeholder="ادخـــل سعـــر المنتـــج">
            <br>
            <input type="file" id='file' name='image' style="display:none">
            <hr>
            <p width=60%><label for="file" style="background-color: #fff;">إخــتيـــــار
                    صـــــــــــــوره</label></p>
            <button type="submit" name='upload'>رفـــــــع المــــــنتــج</button>
            <button style="background-color: blue;"><a href=protacts.php style="color:black;">عــــرض كـــــــــل
                    المنتجــــــات</a></button>
        </form>
    </div>

</center>
<?php
     include 'res_footer.php';
    ?>
</body>

</html>