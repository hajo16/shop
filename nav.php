  <header role="banner">
      <div class="container logo-wrap">
          <div class="row">
              <div class="col-12">
                  <div class="user_navbar">
                      <ul class="navbar-nav mr-auto d-flex flex-row align-items-center">
                          <li class="nav-item">

                              <?php
                  if ($_SESSION) {
                  
                  ?>
                              <div class="mt-2 mb-2">
                                  <div class="d-flex justify-content-center text-center flex-row">

                                      <?php 
                          if ($_SESSION['name']) {
                            echo $_SESSION['name']; 
                          }else {
                            echo '$_SESSION["role_id"]';
                          }
                        ?>
                                      <?php echo $_SESSION['role']; ?>



                                  </div>
                              </div>
                              <?php
                  }else {
                    echo "";
                  }
    ?>
                              </a>
                          </li>
                          <?php 
           if($_SESSION){
              if($_SESSION['name']){
                echo ' <li class="nav-item">
              <a class="nav-link" href="logout.php"> تسجيل خروج</a>
            </li>';
           }else {
              echo ' <li class="nav-item">
              <a class="nav-link" href="index.php"> دخول</a>
            </li>';
           }
           }
           ?>

                      </ul>
                  </div>

              </div>
          </div>
          <div class="row pt-5">
              <div class="col-12 text-center">
                  <a class="absolute-toggle d-block d-md-none" data-toggle="collapse" href="#navbarMenu" role="button"
                      aria-expanded="false" aria-controls="navbarMenu"><span class="burger-lines"></span></a>
                  <h1 class="site-logo my-4"><a href="index.php">احمد ماركا</a></h1>
              </div>
          </div>
      </div>

      <nav class="navbar navbar-expand-md  navbar-light bg-light">
          <div class="container">
              <div class="collapse navbar-collapse" id="navbarMenu">
                  <ul class="navbar-nav mx-auto">
                      <li class="nav-item">
                          <a class="nav-link active" href="index.php">الريئسية</a>
                      </li>



                      <?php 
           if(!$_SESSION){
             echo '<li class="nav-item">
              <a class="nav-link" href="regester.php"> تسجيل</a>
            </li>';
            echo ' <li class="nav-item">
              <a class="nav-link" href="index.php"> دخول</a>
            </li>';
           }
           ?>

                  </ul>
              </div>
          </div>
      </nav>
  </header>
  <center>
      <h2>منتجاتك المحجوزه</h2>
  </center>
  <center>
      <main>
          <table class='table' style='box-shadow:1px 1px silver;width:30%;'>
              <th>
                  <tr>
                      <th scope='col'>إسم المنتج</th>
                      <th scope='col'>سعر المنتج</th>
                      <th scope='col'>العدد </th>
                      <th scope='col'>جمله السعر</th>
                      <th scope='col'>حذف المنتج</th>
                  </tr>
                  <?php
include('confec.php');
$result = mysqli_query($con,"SELECT * FROM addcard ");
while($row = mysqli_fetch_array($result)){
    echo "
    
                <tbody>
                    <tr>
                        <td>$row[user_id]</td>
                        <td>$row[cname]</td>
                        <td>$row[prace]</td>
                        <td>$row[caunt]</td>
                        <td>$row[total]</td>
                        <td><a href='del_card.php? id=$row[id]' class='btn btn-danger'>إزالــه</a></td>
                    </tr>
                </tbody>
            </th>
        </table>
    </main>
</center>
    <br><br>";}
  echo ' <center><a href="protact_user.php">الرجوع لصفحه المنتجات</a></center>';
//include ('voter.php');