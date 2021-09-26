<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Moew Food</title>
  </head>
  <body>
      <!-- Navbar starts here -->
    <div class="container">
        <div class="row">
            <div class="col-md-8 logo">
                <img src="images/logo.png" alt="" class="img-fluid">
            </div>
            <div class="col-md-4 ">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="container">
                    <ul class="mt-4 nav justify-content-center fw-boldo  ">
                    <li class="nav-item ">
                        <a class="nav-link menu-link nav-menu" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link menu-link nav-menu" href="categories.php">Category</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link menu-link nav-menu" href="food.php">Foods</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link menu-link nav-menu" href="#">Contact</a>
                    </li>
                </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar ends here -->
    <!-- Food-search starts here -->
    <section class="food-search text-center">
        <div class="container">
            <form action="food-search.php" method="POST">
                <input type="search" name="search" placeholder="Search for Food.." required>
                <input type="submit" name="submit" value="Search" class="btn btn-primary">
            </form>
        </div>
    </section>
     <!--Explore Start-->
     <div class="container">
        <h2 class="text-center py-5  fw-bold ">Explore Foods</h2>
        <div class="row">
            <div class="col-4 img-responsive  ">
                <figure class="figure">
                    <img src="images/pizza.jpg" class="figure-img img-fluid img" alt="Pizza" >
                    <figcaption class="figure-caption fs-3 content-img">Pizza</figcaption>
                  </figure>
            </div>
            <div class="col-4 img-responsive">
                <figure class="figure">
                    <img src="images/burger.jpg" class="figure-img img-fluid img" alt="Burger" >
                    <figcaption class="figure-caption fs-3 content-img">Burger</figcaption>
                  </figure>
            </div>
            <div class="col-4 img-responsive">
                <figure class="figure">
                    <img src="images/momo.jpg" class="figure-img img-fluid img" alt="Momo" >
                    <figcaption class="figure-caption fs-3 content-img">Momo</figcaption>
                  </figure>
            </div>
        </div>
    </div>
    <!--Explore Start-->

    <!-- Food menu starts here -->
    <section class="Foodmenu">
        <div class="container">
            <h2 class="text-center py-5 fw-bold">Food Menu</h2>
        
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col-6">
                    <div class="menu-box">
                        <div class="div_img_food_menu_home">
                            <img src="images/menu-momo.jpg" class="card-img-top img_Food_menu_home" alt="...">
                        </div>
                        <div class="title_menu">
                            <h4>Dumplings Speacials</h4>
                            <h4>$5.00</h4>
                            <p>Chicken Dumpling with herbs from Mountains</p>
                            <a href="order.php" class="btn btn-primary">Order Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                     <div class="menu-box">
                        <div class="div_img_food_menu_home">
                            <img src="images/menu-burger.jpg" class="card-img-top img_Food_menu_home" alt="...">
                        </div>
                        <div class="title_menu">
                            <h4>Best Burger</h4>
                            <h4>$4.00</h4>
                            <p>Burger wwith Ham, Pineapple and lots of Cheese</p>
                            <a href="order.php" class="btn btn-primary">Order Now</a>
                        </div>
                    </div>
                </div>
            </div>
                    <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col-6">
                    <div class="menu-box">
                        <div class="div_img_food_menu_home">
                            <img src="images/menu-momo.jpg" class="card-img-top img_Food_menu_home" alt="...">
                        </div>
                        <div class="title_menu">
                            <h4>Sadeko Momo</h4>
                            <h4>$6.00</h4>
                            <p>Best Spicy Momo for Winter</p>
                            <a href="order.php" class="btn btn-primary">Order Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                     <div class="menu-box">
                        <div class="div_img_food_menu_home">
                            <img src="images/menu-pizza.jpg" class="card-img-top img_Food_menu_home" alt="...">
                        </div>
                        <div class="title_menu">
                            <h4>Mixed Pizza</h4>
                            <h4>$10.00</h4>
                            <p>Pizza with chicken, Ham, Buff, Mushroom and Vegetables</p>
                            <a href="order.php" class="btn btn-primary">Order Now</a>
                        </div>
                    </div>
            </div>
            </div>
        </div>
</section>
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <a href="foods.php" class="nav justify-content-center mb-5 text-decoration-none" style="color: #ff6b81;">See All Foods</a>
                </div>
            </div>

        </div>
    </div>



    </section>
    <!--Social Start here-->
    <section class=" social">
        <div class="container text-center">
            <ul>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/50/000000/facebook-new.png" alt="Facebook"></a>
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/48/000000/instagram-new.png" alt="Instagram"></a>
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/48/000000/twitter.png" alt=""></a>
                </li>
            </ul>
        </div>
    </section>
    <!--Social Ends here-->

    <!--Footer Start here-->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p class=" fw-bold text-center ">All right reserved. Design by <a href="">CSE485</a></p>
            </div>
        </div>
    </div>
    <!--Footer Ends here-->
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>