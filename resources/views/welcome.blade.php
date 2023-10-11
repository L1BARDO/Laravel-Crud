<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Enlace al archivo CSS -->
    <!-- <link href="{{ asset('css/test.css') }}" rel="stylesheet"> -->
    <!-- <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

        .dark-bg {
            background: rgb(0, 0, 0);
            background: linear-gradient(0deg, rgb(34, 50, 75) 18%, rgb(0, 0, 0) 100%);
        }

        .dark-gb {
            background: rgb(0, 0, 0);
            background: linear-gradient(0deg, rgb(0, 0, 0) 18%, rgb(34, 50, 75) 18%);
        }
    </style> -->

    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        .pagination {
            display: flex;
            list-style: none;
            padding: 0;
        }

        .pagination li {
            margin-right: 5px;
        }
    </style>

</head>

<body class="antialiased">

    <head>

    </head>
    <div class="dark-bg">
        @include('crud.index')

        <!-- Aquí puedes agregar el contenido principal de tu página -->
    </div>

</body>

</html>
