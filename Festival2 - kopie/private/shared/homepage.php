<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="stylesheets/css.css">
</head>
<body>


<h1>Foto's afgelopen jaar:</h1>

<div class="slideshow-container">

    <div class="mySlides fade">
        <div class="numbertext">1 / 3</div>
        <img src="images/foto1.jpg" style="width:100%">
    </div>

    <div class="mySlides fade">
        <div class="numbertext">2 / 3</div>
        <img src="images/foto2.jpg" style="width:100%">
    </div>

    <div class="mySlides fade">
        <div class="numbertext">3 / 3</div>
        <img src="images/foto3.jpg" style="width:100%">
    </div>

</div>
<br>

<div style="text-align:center">
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
</div>

<script>
    var slideIndex = 0;
    showSlides();

    function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {slideIndex = 1}
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
        setTimeout(showSlides, 2000); // Change image every 2 seconds
    }
</script>

<h1>Koop hier uw tickets:</h1>

<div class="containerCard">
    <div class="card">
        <h1>Basic Ticket</h1>
        <p class="price">€40</p>
        <p>Basic Ticket</p>
        <p><button>Bestel!</button></p>
    </div>


    <div class="card">
        <h1>Premium Ticket</h1>
        <p class="price">€60</p>
        <p>Basic Ticket</p>
        <p><button>Bestel!</button></p>
    </div>


    <div class="card">
        <h1>Vip Ticket</h1>
        <p class="price">€100</p>
        <p>Basic Ticket</p>
        <p><button>Bestel!</button></p>
    </div>
</div>
</body>
</html>