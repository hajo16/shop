<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Cairo&family=Changa:wght@200;300;400;500&family=Poppins:ital,wght@0,200;0,300;0,400;1,100;1,200;1,300&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="css/style.css">
    <title>الرئيسيه</title>
</head>

<body>
    <style>
    body {

        font-family: 'Cairo', sans-serif;
        font-family: 'Poppins', sans-serif;
        font-family: 'Changa', sans-serif;
    }

    .dropdown {
        display: inline-block;
        position: relative;
    }


    nav .dropdown button {
        font-family: 'Changa', sans-serif;
        width: 180px;
        border: none;
        border-radius: 5px;
        padding: 15px 30px;
        font-size: 18px;
        cursor: pointer;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    button:hover {
        background-color: #ddd;
    }

    .dropdown-options {
        display: none;
        position: absolute;
        overflow: auto;
        background-color: #fff;
        color: black;
        border-radius: 5px;
        box-shadow: 0px 10px 10px 0px rgba(0, 0, 0, 0.4);
    }

    .dropdown:hover .dropdown-options {
        display: block;
    }

    .dropdown-options a {
        width: 180px;
        display: block;
        color: black !important;
        padding: 5px;
        text-decoration: none;
        padding: 20px 40px;
    }

    .dropdown-options a:hover {
        color: #0a0a23;
        background-color: #ddd;
        border-radius: 5px;
    }
    </style>
    <nav>
        <input type="checkbox" name="" id="nav-toggle">
        <div class="logo">
            <a href="user.php">

                أحمد <span>ماركه</span>
            </a>
        </div>
        <ul class="links">

            <li><a href="#locations">مواقعنا</a></li>
            <li><a href="#pages">صفحاتنا</a></li>
            <li><a href="#services">خدماتنا</a></li>
            <?php 
                 if(isset($_SESSION['id'])){
                    if($_SESSION['name']){?>
            <li style="font-size: 16px;
                       font-weight: bold;
                       letter-spacing: 1px;
                       color: #fff;">مرحبا

                <span>
                    <?php 
                            echo $_SESSION['name'];
                       ?>
                </span>


            </li>
            <?php
                 }
                 }else {
                    echo "";
                 }
                
            ?>
            <?php 
                 if(isset($_SESSION['id'])){
                    if($_SESSION['name']){?>
            <li>
                <div class="dropdown">
                    <button>الضبط</button>
                    <div class="dropdown-options">
                        <?php 
                 if(isset($_SESSION['role'])){
                    if($_SESSION['role'] == 1){?>
                        <a href="upload.php">إضافة منتج</a>
                        <a href="cared.php">عرض كل الحجوزات</a>
                        <a href="protacts.php">صفحة الإداره</a>
                        <?php
                 }
                 }else {
                    echo "";
                 }
                
            ?>

                        <a href="logout.php">تسجيل خروج</a>

                    </div>
                </div>
            </li>
            <?php
             }
            }else {
               echo "";
            }
           
       ?>
        </ul>
        <label for="nav-toggle" class="icon-burger">

        </label>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </nav>
    <div class="container"></div>