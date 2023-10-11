<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <title>Hello, world!</title>
</head>
<body>

<div class="container">
    <h1>Lista de Cuentas</h1>
    {{--    Busqueda avanzada por usuario   --}}
    <form action="/cuentas/search" method="get">
        <div class="input-group mb-3">
            <input type="text" class="form-control" id="search" name="search" placeholder="Buscar por usuario"
                   value="{{ request('search') }}">
            <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="submit">Buscar</button>
            </div>
        </div>
    </form>

    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>Usuario</th>
            <th>Correo</th>
            <th>Teléfono</th>
            <th>Cédula</th>
            <th>Saldo</th>
        </tr>
        </thead>
        <tbody>
        @foreach($cuentas as $cuenta)
            <tr>
                <td>{{ $cuenta->id }}</td>
                <td>{{ $cuenta->usuario }}</td>
                <td>{{ $cuenta->correo }}</td>
                <td>{{ $cuenta->telefono }}</td>
                <td>{{ $cuenta->cedula }}</td>
                <td>{{ $cuenta->saldo }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {{ $cuentas->links() }}
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        $('#search').on('keyup', function () {
            var value = $(this).val().toLowerCase();
            $('table tbody tr').filter(function () {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>
<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
        crossorigin="anonymous"></script>
</body>
</html>
