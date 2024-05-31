@extends('layouts.public.app')
@section('content')
<!-- ======= Hero Section ======= -->
<section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

            <!-- Slide 1 -->
            <div class="carousel-item active" style="background-color: #FFC0CB">
    <div class="carousel-container">
        <div class="carousel-content">
            <h2 style="font-family: 'Garamond', sans-serif;">Welcome to My Portfolio</h2>
            <p style="font-family: 'Garamond', sans-serif;">Explore my work and skills in web development and graphic design</p>
        </div>
    </div>
</div>
</section>
<!-- End Hero -->

<main id="main">

    <!-- ======= About Me ======= -->
    <section id="about-me" class="about-me">
        <div class="container">

    <div class="section-title text-center" style="font-family: Garamond, sans-serif;">
    <h2 style="font-family: 'Garamond', sans-serif;">About Me</h2>
    <p style="text-align: center;">
        Hello! My name is Hildegardis, and I am a student of Universitas Mercu Buana Yogyakarta. 
        I have experience with specialized skills in graphic design and web development.
    </p>
</div>

            <div class="row content justify-content-center align-items-center text-center">
                <div class="col-lg-6">
                <h3 style="text-align: center; font-family: Garamond, sans-serif;"><strong>Expertise and Specialization</strong></h3>


                <ul class="list-unstyled" style="text-align: justify; font-family: Garamond, sans-serif; padding: 0 20px;">
                  <li><strong>Web Development:</strong> I have expertise in website development using programming languages such as HTML, CSS, JavaScript, PHP, and Laravel.</li>
                   <li><strong>Graphic Design:</strong> I have expertise in graphic design using software such as Adobe Photoshop, Illustrator, and InDesign.</li>
                  </ul>
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0">
                <div class="swiper-slide"><a href="{{ asset('img/recent-photos/recent-photos-1.jpg') }}" class="glightbox"><img src="{{ asset('img/recent-photos/recent-photos-1.jpg') }}" class="img-fluid" alt=""></a></div>
                </div>
            </div>
        </div>
    </section><!-- End About Me -->

</main><!-- End #main -->
@endsection

<!-- Custom CSS for better visuals -->
@push('styles')
<style>
    #hero {
        position: relative;
        background-size: cover;
        background-position: center;
    }
    .carousel-container {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        color: #fff;
    }
    .carousel-content h2 {
        font-size: 48px;
        font-weight: 700;
        margin-bottom: 20px;
    }
    .carousel-content p {
        font-size: 20px;
        margin-bottom: 30px;
    }
    .btn-get-started {
        font-size: 18px;
        padding: 10px 30px;
        border-radius: 50px;
        transition: all 0.4s;
        color: #fff;
        background-color: #5fcf80;
    }
    .btn-get-started:hover {
        background-color: #3ac162;
    }
    .about-me img {
        border-radius: 10px;
        max-width: 100%;
        height: auto;
        display: block;
        margin: 0 auto;
    }
    .recent-photos .swiper-slide {
        transition: transform 0.3s;
    }
    .recent-photos .swiper-slide:hover {

        transform: scale(1.05);
    }
</style>
@endpush
