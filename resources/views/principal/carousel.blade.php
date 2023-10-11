<!-- carousel.blade.php -->

<div id="myCarousel" class="carousel slide " data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner text-center" style="border:1px solid #212529;box-shadow:0 3px 7px rgb(255, 255, 255);">
        <div class="carousel-item active" style="height: 300px;">
            <img src="{{ asset('img/carousel/slide1.jpg') }}" alt="Slide 1" style="max-width: 100%;
            max-height: 100%; object-fit: contain;">
        </div>

        <div class="carousel-item" style=" height: 300px; ">
            <img src="{{ asset('img/carousel/slide2.jpg') }}" alt="Slide 2" style="max-width: 100%;
            max-height: 100%; object-fit: contain;">
        </div>

        <div class="carousel-item" style="  height: 300px;   ">
            <img src="{{ asset('img/carousel/slide3.jpg') }}" alt="Slide 3" style="max-width: 100%;
            max-height: 100%; object-fit: contain;">
        </div>
    </div>

    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
