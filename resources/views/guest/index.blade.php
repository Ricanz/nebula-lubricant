<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <meta name="keywords" content="nebula, pelumas, industri, limbah">
    <meta name="author" content="Nebula Lubricant">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Nebula Lubricant</title>

    <link rel="stylesheet" href="{{ asset('tguest/css/style.css') }}">
</head>

<body>
    <header>
        <nav>
            <div class="nav-content">
                <div class="logo">
                    <a href="#">Nebula Lubricant</a>
                </div>
    
                <div class="links">
                    <ul class="nav-links mright-20">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
    
                    <a href="#" class="btn btn-subscribe mleft-20">Subscribe</a>
                </div>
            </div>
        </nav>
    </header>
    {{-- <section class="home">
        <h1>Test</h1>
    </section>
    <section class="home">
        <h1>Test</h1>
    </section> --}}

    <script>
        let nav = document.querySelector("nav");
        window.onscroll = function() {
            if (document.documentElement.scrollTop > 20) {
                nav.classList.add("sticky");
            } else {
                nav.classList.remove("sticky");
            }
        }
    </script>

</body>

</html>
