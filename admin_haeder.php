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
    <link rel="stylesheet" href="hae_and_foot.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="index.css">
    <title>الرئيسيه</title>
</head>

<body>
    <nav>
        <input type="checkbox" name="" id="nav-toggle">
        <div class="logo"> أحمد <span>ماركه</span></div>
        <ul class="links">
            <li><a href="upload.php">أضافة منتج</a></li>
            <li><a href="#about">عرض كل المنتجات</a></li>
            <li><a href="#work">عرص كل المنتجات المحجوزه</a></li>
            <li><a href="#projects">Projacts</a></li>
            <li><a href="#contacts">Contacts</a></li>
        </ul>
        <label for="nav-toggle" class="icon-burger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </label>

    </nav>
    <div class="container"></div>