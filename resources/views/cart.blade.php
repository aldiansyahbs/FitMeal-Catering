<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keranjang Belanja</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap">
    <style>
        body {
            font-family: 'Lexend', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #FFFFF5;
        }

        .container {
            width: 80%;
            margin: 50px auto;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            padding: 15px;
            text-align: left;
        }

        th {
            background-color: #DAFD3C;
        }

        .total {
            text-align: right;
            font-size: 20px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Keranjang Belanja</h1>
        <table>
            <thead>
                <tr>
                    <th>Nama Menu</th>
                    <th>Harga</th>
                    <th>Kuantitas</th>
                    <th>Total Harga</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cartItems as $item)
                    <tr>
                        <td>{{ $item->menu->nama_makanan }}</td>
                        <td>Rp {{ number_format($item->menu->harga, 2) }}</td>
                        <td>{{ $item->kuantitas }}</td>
                        <td>Rp {{ number_format($item->total_harga, 2) }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="total">
            <strong>Total: Rp {{ number_format($cartItems->sum('total_harga'), 2) }}</strong>
        </div>
    </div>
</body>
</html>