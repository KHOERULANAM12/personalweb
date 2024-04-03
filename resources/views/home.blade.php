<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <style>
        /* Global Styles */
        body {
            background-color: rgb(12, 10, 10);
            margin: 0;
            padding: 0;
        }

        .text-white {
            color: white;
        } 

        .text-red {
            color: rgb(243, 239, 239);
        }

        /* Navigation Styles */
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 100px;
        }

        nav a {
            margin-right: 00px;
            color: white;
            text-decoration: none;
        }

        /* Main Section Styles */
        section {
            padding: 40px;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        /* Image Container Styles */
        .image-container {
            display: flex;
            justify-content: space-around;
            margin: 20px auto;
        }

        .image-container img {
            width: 30%;
            height: auto;
        }

        /* Grid Styles */
        .grid {
            display: grid;
            gap: 50px;
        }

        .grid-item {
            padding: 20px;
            text-align: center;
            border: 2px solid rgb(247, 243, 243);
            color: white;
        }

        /* Services Section Styles */
        .services {
            display: grid;
            gap: 50px;
        }

        .service-item {
            text-align: center;
            border: 2px solid rgb(246, 240, 240);
            color: white;
            padding: 20px;
        }

        /* About Me Section Styles */
        .about {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 60px;
        }

        .about img {
            margin-right: 20px;
        }

        .about-info {
            color: white;
        }

        /* Footer Styles */
        footer {
            background-color: rgb(11, 10, 10);
            padding: 20px;
            text-align: center;
        }

        footer h1 {
            color: white;
        }
    </style>
</head>

<body>

    <!-- Navigation -->
    <nav>
        <div>
            <h1 class="text-white text-5xl">portfolio<span class="text-red">folio</span></h1>
        </div>
        <div>
            <a href="#home">Home</a>
            <a href="#portfolio">Portfolio</a>
            <a href="#services">Services</a>
            <a href="#about">About</a>
        </div>
    </nav>

    <!-- Main Section -->
    <section class="container" id="portfolio">

        <!-- Introduction -->
        <div class="text-center">
            <div class="mx-auto max-w-xl">
                <h1 class="text-white text-4xl mb-4">Hello</h1>
                <h1 class="text-white text-4xl mb-4">I'm Khoerul Anam</h1>
                <h1 class="text-white text-4xl mb-4">Lorem Ipsum is simply dummy text</h1>
                <h1 class="text-white text-4xl mb-4">of the printing and typesetting</h1>
                <h1 class="text-white text-4xl mb-4">industry</h1>
                <a href="#" class="text-black text-3xl bg-red inline-block px-4 py-2 mt-4">Contact Me</a>
            </div>
        </div>

        <!-- Image -->
        <div class="image-container">
            <img src="https://i.ibb.co/BN2vBtM/mas-anam-poto.jpg"  alt="">
        </div>

    </section>

    <!-- Recent Projects -->
    <section class="container"id="">
        <h1 class="text-red mt-9 text-center text-5xl">Recent Project</h1>
        <div class="image-container mt-14">
            <img src="https://i.ibb.co/k0JK28B/Screenshot-2024-04-02-153910.png" alt="Gambar 1">
            <img src="https://i.ibb.co/k8nKw8s/Screenshot-2024-04-02-153845.png" alt="Gambar 2">
        </div>
    </section>

    <!-- Services -->
    <section class="container"id="services">
        <h1 class="text-red mt-9 text-center text-5xl">Service</h1>
        <div class="grid grid-cols-3 mt-20">
            <div class="grid-item">
                <img src="https://i.ibb.co/4RYQK56/world-wide-web-1-1.png" alt="">
                <h1 class="text-red">Web</h1>
                <p class="mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
            <div class="grid-item">
                <img src="https://i.ibb.co/qBLqynR/web-design-1.png" alt="">
                <h1 class="text-red">Graphic Design</h1>
                <p class="mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
            <div class="grid-item">
                <img src="https://i.ibb.co/BfnKTwW/ux-design-1.png" alt="">
                <h1 class="text-red">UI/UX</h1>
                <p class="mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
        </div>
    </section>

    <!-- About Me -->
    <section class="container"id="home">
        <h1 class="text-red mt-9 text-center text-5xl">About Me</h1>
        <div class="about mt-60">
            <img src="https://i.ibb.co/BN2vBtM/mas-anam-poto.jpg" alt="">
            <div class="about-info">
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                <div class="bg-white h-10 rounded-sm mt-36"></div>
                <h1 class="text-white mt-9">085156632744</h1>
                <h1 class="text-white">_khoerulanam _</h1>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <section class="container"id="">
        <h1 class="text-red mt-9 text-center text-5xl">contact</h1>
        <div class="text-center">
            <h1 class="text-black">Contact Me</h1>
        <div>
            
            <a href=""><img src="img/whatsapp (1).png" alt=""></a>
            <a href=""><img src="img/facebook (1).png"></Img></a>
            <a href=""><img src="img/instagram (2).png"></a>
        
        </div>

        </div>
    </footer>

</body>

</html>
