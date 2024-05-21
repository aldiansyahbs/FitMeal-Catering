<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FitMeal Catering</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap">
    <style>
        body {
            font-family: 'Lexend', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #FFFFF5;
        }

        .Logo {
            font-size: 48px;
            font-weight: bold;
            color: black;
            text-decoration: none;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 50px;
            background-color: transparent;
            color: black;
        }


        .navbar img {
            max-width: 100px;
            height: auto;
        }

        .navbar-menu {
            list-style: none;
            display: flex;
            justifyx-content: space-between;
            margin: 0;
            padding: 0;
        }

        .navbar-item {
            margin-left: 20px;
            justify-content: space-between;
        }

        .navbar-item a {
            text-decoration: none;
            color: black;
            font-size: 18px;
            display: flex;
            align-items: center;
            height: 100%;
        }

        .navbar-item a:hover {
            color: black;
        }

        .heroText {
            font-size: 64px;
            width: 625px;
            height: 411px;
            margin-left: 69px;
            /* margin-top: 250px; */
            text-align: left;
        }

        button {
            background-color: #DAFD3C;
            color: black;
            border: 4px solid black;
            border-radius: 10px;
            padding: 14px 61px;
            font-size: 24px;
            font-weight: bold;
            text-align: center;
            cursor: pointer;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #b3e600;
            /* Slightly darker green on hover */
        }

        .sectionCatering {
            font-size: 64px;
            /* margin-left: 250px; */
            margin-top: 150px;
            justify-content: center;
            display: flex;
        }

        .ButtonCatering {
            margin-top: 50px;
            justify-content: right;
            margin-right: 64px;
            display: flex;
        }

        .Banner {
            background-color: #DAFD3C;
            /* width: 1312px;*/
            height: 259px;
            border-radius: 16px;
            display: flex;
            margin: 12px 64px;
        }

        .Banner .Logo {
            justify-content: center;
            align-items: center;
            display: flex;
            margin-left: 42px;
            margin-right: 70px;
        }

        .vertical-line {
            border-left: 4px solid black;
            height: 200px;
            margin: 20px;
        }

        .right-section {
            width: 416px;
            height: 180px;
            font-size: 27px;
            margin-left: 70px;
        }

        .right-section button {
            background-color: black;
            color: #DAFD3C;
            width: 200px;
            font-size: 16px;
            padding: 12px 0;
        }

        footer {
            background-color: black;
            color: white;
            height: 500px;
            /* display: flex; */
            justify-content: space-between;
            align-items: center;
        }

        footer .top {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 50px 50px;
        }

        footer .Logo {
            font-size: 36px;
            font-weight: bold;
            color: white;
        }

        footer .section1 {
            /* display: flex; */
            justify-content: space-between;
            align-items: center;
            color: white;
            width: 300px;

        }

        footer .section1 .sosmed {
            display: flex;
            justify-content: space-between;
        }

        footer hr {
            border: 1px solid white;
            margin: auto 50px;
        }

        footer .bottom {
            background-color: black;
            color: white;
            text-align: center;
            padding: 50px 0;
        }

        .miniCard {
            width: 300px;
            height: 400px;
            background-color: white;
            border-radius: 16px;
            border: 4px solid black;
        }

        .miniCard img {
            width: 250px;
            height: 200px;
            margin: 20px 27px;
            /* margin: 0 2px; */
        }

        .miniCard h1 {
            margin: 20px 50px;
            font-size: 24px;
        }

        .miniCard .details {
            margin: 20px 50px;
            font-size: 12px;
            display: flex;
            justify-content: space-between;
            font-weight: normal;
            color: #7C7C7C;
        }

        .miniCardHero {
            width: 530px;
            height: 636px;
            background-color: white;
            border-radius: 16px;
            margin: 12px 12px;
            border: 4px solid black;
        }

        .miniCardHero img {
            width: 467px;
            height: 438px;
            margin: 20px 27px;
            /* margin: 0 2px; */
        }

        .miniCardHero h1 {
            margin: 20px 50px;
            font-size: 24px;
        }

        .miniCardHero .details {
            margin: 20px 50px;
            font-size: 12px;
            display: flex;
            justify-content: space-between;
            font-weight: normal;
            color: #7C7C7C;
        }

        .HeroItem {
            display: flex;
            margin-top: 250px;
        }

        .HeroItem .miniCard {
            margin: 0px 20px;
        }

        .catering {
            display: flex;
            justify-content: center;
            margin: 20px 20px 0px;

        }

        .catering .miniCard {
            margin: 250px 20px 0px;
        }

        .HeroItem .minicard1 {
            margin-top: 114px;
        }
    </style>

</head>

<body>

    <nav class="navbar">
        <a href="/" class="Logo">
            <p><b>YukMam!</b></p>
        </a>
        <ul class="navbar-menu">
            <li class="navbar-item"><a href="/">Home</a></li>
            <li class="navbar-item"><a href="/catering">Catering</a></li>
            <li class="navbar-item"><a href="/reward">Reward</a></li>
            <li><a href="{{route('actionlogout')}}"><i class="fa fa-power-off"></i> Log Out</a></li>
        </ul>
        <p>Profile</p>
    </nav>
    <div class="HeroItem">
        <div class="heroText">
            <p>Mulai <b>Hidup Sehatmu</b> Dengan Makan <b>Makanan Yang Bergizi!</b></p>
            <button><b>Pesan Sekarang</b> </button>
        </div>
        <div class="miniCard">
            <img src="{{ asset('Assets/food_1.png') }}" alt="">
            <h1>Catering Bison</h1>
            <div class="details">
                <p>Tidar Atas</p>
                <p>rating</p>
            </div>
        </div>
        <div class="minicard1">
            <div class="miniCard">
                <img src="{{ asset('Assets/food_1.png') }}" alt="">
                <h1>Catering Bison</h1>
                <div class="details">
                    <p>Tidar Atas</p>
                    <p>rating</p>
                </div>
            </div>
        </div>

    </div>

    <div class="sectionCatering">
        <p><b>Catering paling laris di yukMam!</b></p>
    </div>
    <div class="ButtonCatering">
        <button><b>Lihat Lebih Banyak!</b> </button>
    </div>

    <div class="catering">
        <div class="miniCardHero">
            <img src="{{ asset('Assets/food_1.png') }}" alt="">
            <h1>Catering Bison</h1>
            <div class="details">
                <p>Tidar Atas</p>
                <p>rating</p>
            </div>

        </div>
        <div class="miniCard">
            <img src="{{ asset('Assets/food_1.png') }}" alt="">
            <h1>Catering Bison</h1>
            <div class="details">
                <p>Tidar Atas</p>
                <p>rating</p>
            </div>

        </div>

        <div class="miniCard">
            <img src="{{ asset('Assets/food_1.png') }}" alt="">
            <h1>Catering Bison</h1>
            <div class="details">
                <p>Tidar Atas</p>
                <p>rating</p>
            </div>

        </div>
    </div>

    <div class="Banner">
        <div class="Logo">
            <p><b>YukMam!</b></p>
        </div>
        <div class="vertical-line"></div>
        <div class="right-section">
            <p><b>Unggah Foto Makananmu, Ambil Kupon Makanan Gratismu!</b></p>
            <button>Unggah Sekarang</button>
        </div>
    </div>

    <footer>
        <div class="top">
            <div class="section1">
                <div class="Logo">
                    <p><b>YukMam!</b></p>
                </div>
                <p>Mulai hidup sehatmu
                    dengan makan makanan
                    yang bergizi!
                </p>
                <div class="sosmed">
                    <p>ig</p>
                    <p>fb</p>
                    <p>twitter</p>
                    <p>tiktok</p>
                </div>
            </div>
            <div class="section2">
                <h1>Layanan</h1>
                <p>Pesan Catering</p>
                <p>Ambil Reward</p>
            </div>

        </div>
        <hr>

        <div class="bottom">
            <p>© 2021 YukMam! All Rights Reserved</p>
        </div>
    </footer>
</body>

</html>
