 <!DOCTYPE html>
 <html lang="ar" dir="rtl">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="hae_and_foot.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
     <link rel="stylesheet" href="index.css">
     <link rel="stylesheet" href="css/style.css">
     <title>الرئيسيه</title>
 </head>

 <body>
     <nav>

         <div class="logo">
             <a href="user.php">
                 <h4> أحمد <span>ماركه</span></h4>
             </a>
         </div>
         <ul class="links">

             <?php 
                 if(isset($_SESSION['id'])){
                    if($_SESSION['name']){
                        echo " <li >
                        <a href='logout.php' onclick='return confirm('هل أنت متأكد أنك تريد تسجيل الخروج؟');'>
                        تسجيل خروج</a>
                        </li>
                        
                        ";
                 }
                 }else {
                    echo "";
                 }
                
            ?>

             <li><a href="#services">خدماتنا</a></li>
             <li><a href="#locations">مواقعنا</a></li>
             <li><a href="#team">شركاءنا</a></li>
             <li><a href="#pages">صفحاتنا</a></li>
             <?php 
                 if(isset($_SESSION['id'])){
                    if($_SESSION['name']){?>
             <li>مرحبا

                 <span>
                     <?php 
                            echo $_SESSION['name'];
                       ?>
                 </span>

                 <!-- <list>
                     <option>one</option>
                     <option>tow</option>
                     <option>three</option>
                 </list> -->
             </li>
             <?php
                 }
                 }else {
                    echo "";
                 }
                
            ?>
         </ul>
         <div class="icon-burger">
             <label for="nav-toggle" class="8px 10px">
                 <input type="checkbox" name="" id="nav-toggle">
                 <div class="line"></div>
                 <div class="line"></div>
                 <div class="line"></div>
             </label>
         </div>

     </nav>
     <div class="container"></div>