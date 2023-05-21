<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>slider</title>
    <?php include 'link.php' ?>
    </head>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

    <link rel="stylesheet" type="text/css" href="OwlCarousel2-2.3.4/dist/assets/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css">

    <body>

<div class="owl-carousel owl-theme">

    <div class="item">
        <div class="card bg-black text-light p-2">
            <div class="img">
                <img src="assets/image/men1.png" alt="">
            </div>
            <div class="content text-center">
                <div class="tittle">
                   <h3> Random</h3>
                </div>
                <div class="sub-tittle text-danger">
                   <h4> trainer</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="item">
        <div class="card bg-black text-light p-2">
            <div class="img">
                <img src="assets/image/men2.png" alt="">
            </div>
            <div class="content text-center">
                <div class="tittle">
                   <h3> Random</h3>
                </div>
                <div class="sub-tittle text-danger">
                   <h4> trainer</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="item">
        <div class="card bg-black text-light p-2">
            <div class="img">
                <img src="assets/image/men3.png" alt="">
            </div>
            <div class="content text-center">
                <div class="tittle">
                   <h3> Random</h3>
                </div>
                <div class="sub-tittle text-danger">
                   <h4> trainer</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="item">
        <div class="card bg-black text-light p-2">
            <div class="img">
                <img src="assets/image/women1.png" alt="">
            </div>
            <div class="content text-center">
                <div class="tittle">
                   <h3> Random</h3>
                </div>
                <div class="sub-tittle text-danger">
                   <h4> trainer</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="item">
        <div class="card bg-black text-light p-2">
            <div class="img">
                <img src="assets/image/women2.png" alt="">
            </div>
            <div class="content text-center">
                <div class="tittle">
                   <h3> Random</h3>
                </div>
                <div class="sub-tittle text-danger">
                   <h4> trainer</h4>
                </div>
            </div>
        </div>
    </div>
   
</div>





    <script type="text/javascript" src="OwlCarousel2-2.3.4/docs/assets/vendors/jquery.min.js"></script>
    <script type="text/javascript" src="OwlCarousel2-2.3.4/dist/owl.carousel.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

    <script type="text/javascript" >
            $('.owl-carousel').owlCarousel({
                loop:true,
                margin:10,
                nav:true,
                dots:false,
                button:false,
                autoplay:true,
                autoplayTimeout:2000,  //2sec
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:3
                    },
                    1000:{
                        items:4
                    }
                }
})
    </script>
</body>
</html>