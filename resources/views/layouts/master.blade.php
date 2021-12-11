<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf_8">
    <title>Hommie Event</title>
    <meta name="viewport" content="width= device-width, initial- scale=1.0">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body a link="#db7093" vlink="black">
    <div class="main_container" id="home">
        <div class="navbar">
            <div class="logo"><a href="/"><img src="{{ asset('images/imagesHE.png') }}"></a>
                <p style="position: absolute;left:366px;top:-2.5px;font-size: 25px;">Hommie<br>Event</p>

            </div>

            <div class="navbar_items">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/venues">Venue</a></li>
                    <li><a href="/services">Service</a></li>
                    <li><a href="/about">About</a></li>

                </ul>
            </div>
        </div>
        @if (Route::is('home'))
            <div class="banner_image">
                <div class="banner_content">
                    <p>Enjoy</p>
                    <span>Yours favourite Event</span>
                    <div class="btn"><a href="/book">GET STARTED</a></div>
                </div>
            </div>

            <div class="ourgal">
                <h1>OUR GALLERY</h1>

                <div class="gallery">
                    <a target="_blank" href="image/1.jpeg">
                        <img src="image/1.jpeg" width="284.5" height="189.5">
                    </a>
                </div>

                <div class="gallery">
                    <a target="_blank" href="image/wp7488275-corporate-event-wallpapers(1).jpg">
                        <img src="image/wp7488275-corporate-event-wallpapers(1).jpg" width="284.5" height="189.5">
                    </a>
                </div>



                <div class="gallery">
                    <a target="_blank" href="image/images2.jpeg">
                        <img src="image/images2.jpeg" width="284.5" height="189.5">
                    </a>
                </div>
                <div class="gallery">
                    <a target="_blank" href="image/asd.jpeg">
                        <img src="image/asd.jpeg" width="284.5" height="189.5">
                    </a>
                </div>

                <div class="gallery">
                    <a target="_blank" href="image/jeongim-kwon-sqWzP97H_bo-unsplash.jpg">
                        <img src="image/jeongim-kwon-sqWzP97H_bo-unsplash.jpg" width="284.5" height="189.5">
                    </a>
                </div>



                <div class="gallery">
                    <a target="_blank" href="image/alvaro-cvg-mW8IZdX7n8E-unsplash.jpg">
                        <img src="image/alvaro-cvg-mW8IZdX7n8E-unsplash.jpg" width="284.5" height="189.5">
                    </a>
                </div>

            </div>
        @endif
    </div>
    @yield('content')
    <footer>
        <div class="footer-container">
            <div class="footer-left">Contact Us
                <li>9845921001</li>
                <li>+131726481746</li>
                <li>user@gmail.com</li>
            </div>
            <div class="footer-middle">Address<br>
                Dumkauli,Nawalparasi</div>

            <div class="footer-right">Follow Us
                <br> facebook <div class="footer-image"><img src="image/twitter.png" alt=""></div>
                <br> Instagram <div class="footer-image"><img src="" alt=""></div>
                <br> Twitter <div class="footer-image"><img src="" alt=""></div>
            </div>
        </div>
    </footer>
