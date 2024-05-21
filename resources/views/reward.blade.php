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
            display: flex;
            flex-direction: column;
            min-height: 100vh;
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
            margin: 0;
            padding: 0;
        }

        .navbar-item {
            margin-left: 20px;
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
            width: 300px;
            margin: 119px 42% 250px;
            font-size: 21px;
            padding: 12px;
        }

        button:hover {
            background-color: #b3e600;
            /* Slightly darker green on hover */
        }

        main {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        h1 {
            font-size: 64px;
            margin: 0;
        }

        footer {
            background-color: black;
            color: white;
            height: 500px;
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

        .profile img {
            width: 180px;
            height: 180px;
            display: flex;
            justify-content: center;
            margin-right: 30px;
        }

        .profile {
            display: flex;
            /* justify-content: center;
            align-items: center; */
            margin: 50px auto 150px 177px;
        }

        .profile .name {
            margin-top: 20px;
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
        <p>Profile</p>
    </nav>
    <div class="profile">
        <img src="{{ asset('Assets/profile.svg') }}" alt="">
        <div class="name">
            <h1>Adnan Kiseki</h1>
            <span>Point : 0/10</span>
        </div>
    </div>

    <main>
        <h1>Unggah Foto Makanan Sehatmu dan Ambillah kupon catering gratismu!</h1>
    </main>
    <button>Unggah Foto Makananmu</button>


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
