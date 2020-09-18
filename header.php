<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JW Mobile Shop</title>
    <!--Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!--OWel carosel-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous" />

    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />


    <!--Custom css file-->
    <link rel="stylesheet" ref="./css/style.css">
    <!--Not Sure why i could not import this file through the normal import style.scss so i made this for the special prices part
   <link rel="stylesheet" href="./css/style.css" > -->
    <?php
    //Require functions.php for MySql data base
    require ('functions.php');
    ?>







</head>
<body>

<!-- start #header-->
<header id="header">
    <!-- dflex is for the flex between is for the space px is for side padding all of these are bootstrap -->
    <div class="strip d-flex justify-content-between px-4 py-1 bg-light">
        <!-- first two are custom -->
        <p class="font-rale font-size-20 text-black-50 m-0">James Watson Email:Jameswatsom98@hotmail.com</p>
        <div class="font-rale font-size-14">
            <a href="#" class="px-3 border-right border-left text-dark"> Login</a>
            <a href="#" class="px-3 border-right text-dark"> Whishlist(0)</a>

        </div>
    </div>
    <!--creating the nav bar bootstrap-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-info">
        <a class="navbar-brand" href="#">JW Mobile Shop</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav m-auto font-rubik">
                <li class="nav-item active">
                    <a class="nav-link" href="#">On Sale <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Category<i class="fas fa-chevron-down"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Product<i class="fas fa-chevron-down"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Coming Soon</a>
                </li>

            </ul>
            <!--creating basket-->
            <form action= "#" class= "font-size-14 font-rale">
                <a href="cart.php" class="py-2 rounded-pill bg-primary">
                    <span class="font-size-16 px-2 text-white"><i class="fas fa-shopping-cart"></i></span>
                    <span class="px-3 py-2 rounded-pill text-dark bg-light"><?php echo count($product->getData('cart')); ?></span>



                </a>
            </form>
        </div>
    </nav>









</header>
<!-- end #header-->

<!-- start #main-site -->
<main id="main-site">
