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
            justify-content: space-between;
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
        }



        footer {
            background-color: black;
            color: white;
            height: 500px;
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

        .information {
            margin: auto 115px;
            width: 1250px;
            margin-bottom: 100px;
        }

        .details-information {
            display: flex;
            justify-content: space-between;
        }

        input {
            width: 516px;
            height: 57px;
            border-radius: 10px;
        }

        .information button {
            margin-top: 20px;
            background-color: black;
            color: white;
            width: auto;
        }

        .navbar a {
            text-decoration: none;
            color: black;
        }

        .review {
            display: flex;
            width: 1320px;
            height: 233px;
            margin-left: 60px;
            margin-bottom: 50px;
            margin-top: 50px;
        }

        .review img {
            width: 127px;
            height: 127px;
            display: flex;
            justify-content: center;
            margin-right: 30px;
        }



        .box-review {
            width: 100%;
            height: 127px;
            background-color: #DAFD3C;
            border-radius: 10px;
        }

        .details {
            width: 1200px;
            height: 127px;
            align-items: center;
            padding: 20px;
        }

        .details p {
            padding: 20px;
            font-size: 21px;
        }

        .rating {
            display: flex;
            /* align-items: center; */
            justify-content: center;
        }

        .rating img {
            width: 24px;
            height: 24px;
            padding-left: 12px;
            margin: 0px;
        }

        .rating p {
            font-size: 14px;
            margin-left: 10px;
            padding: 0;
            margin-top: 4px;
            margin-left: 8px;
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

        </ul>
        <p><a href="/profile">Profile</a> </p>
    </nav>

    <div class="review">
        <img src="{{ asset('Assets/profile.svg') }}" alt="" srcset="">
        <div class="details">
            <h1>Aldoy</h1>
            <div class="box-review">
                <p><b>Terima kasih atas fitur-fitur yang membantu saya menjaga kesehatan secara lebih
                        efektif!</b>
                </p>
                <div class="rating">
                    <img src="{{ asset('Assets/STAR.png') }}" alt="">
                    <p><b>4.6</b></p>
                </div>
            </div>

        </div>
    </div>
    <div class="review">
        <img src="{{ asset('Assets/profile.svg') }}" alt="" srcset="">
        <div class="details">
            <h1>Phyz</h1>
            <div class="box-review">
                <p><b>Rasa makanan pada catering-catering di YukMam! sangatlah enak dan bergizi</b>
                </p>
                <div class="rating">
                    <img src="{{ asset('Assets/STAR.png') }}" alt="">
                    <p><b>4.8</b></p>
                </div>
            </div>

        </div>
    </div>

    <div class="review">
        <img src="{{ asset('Assets/profile.svg') }}" alt="" srcset="">
        <div class="details">
            <h1>Muno</h1>
            <div class="box-review">
                <p><b>Saya merasa kesehatan saya semakin meningkat semenjak mengonsumsi catering YukMam!</b>
                </p>
                <div class="rating">
                    <img src="{{ asset('Assets/STAR.png') }}" alt="">
                    <p><b>5.0</b></p>
                </div>
            </div>

        </div>
    </div>

    <div class="review">
        <img src="{{ asset('Assets/profile.svg') }}" alt="" srcset="">
        <div class="details">
            <h1>Bison</h1>
            <div class="box-review">
                <p><b>Saya sangat gemar makan makanan YukMam!</b>
                </p>
                <div class="rating">
                    <img src="{{ asset('Assets/STAR.png') }}" alt="">
                    <p><b>4.8</b></p>
                </div>
            </div>

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
