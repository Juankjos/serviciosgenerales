<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body style="font-family: Arial">

    <div class="d-inline-block" style="margin-top: 10px">
        <img src={{ asset('dist/img/udg/udg.png') }} style="height: 130px" alt="UDG">
    </div>
    <div class="d-inline-block" style="margin-top: 10px">
        <p> <span style="font-size: 30px"> Universidad de Guadalajara </span> <br>
            <span style="font-size: 20px">Centro Universitario de los Altos </span> <br>
            <span>Secretaría Administrativa </span> <br>
            <span>Coordinación de Servicios Generales </span>
        </p>
    </div>
    </div>

    <p class="text-center" style="font-family: 'Arial'; font-size: 25px">Reportes de prestámo vehicular</p>

    @foreach ($vehicles as $vehiclereport)
        
    <div class="col-md-12" style="width: 650px;">
        <table style="width: 100%">
            <tbody class="table table-bordered" style="font-family: 'Arial'; font-size: 14px; ">
                <tr style="border: 5px;">
                    <th scope="row" style="width: 100px"> Fecha de salida </th>
                    <th scope="row" style="width: 100px"> Hora de salida </th>
                    <th scope="row"> Fecha de llegada </th>
                    <th scope="row"> Hora de llegada </th>
                </tr>
                <tr>
                    <td>{{ $vehiclereport->date_start }}</td>
                    <td>{{ $vehiclereport->hour_start }}</td>
                    <td>{{ $vehiclereport->date_end }}</td>
                    <td>{{ $vehiclereport->hour_end }}</td>
                </tr>
            </tbody>
        </table>
        <table style="width: 650px">
            <tbody class="table table-bordered" style="font-family: 'Arial'; font-size: 14px;">
                <tr style="border: 5px;">
                    <th scope="row" style="width: 100px"> KM salida </th>
                    <th scope="row" style="width: 100px"> KM llegada </th>
                    <th scope="row">Recarga de gasolina </th>
                </tr>
                <tr>
                    <td>{{ $vehiclereport->km_start }}</td>
                    <td>{{ $vehiclereport->km_end }}</td>
                    <td>{{ $vehiclereport->gas_recharge }}</td>
                </tr>
            </tbody>
        </table>

        <table style="width: 650px">
            <tbody class="table table-bordered" style="font-family: 'Arial'; font-size: 14px; ">
                <tr style="border: 5px;">
                    <th scope="row" style="width: 225px">Conductor </th>
                    <th scope="row">Código vehiculo </th>
                    <th scope="row">Modelo </th>
                    <th scope="row">Año </th>
                </tr>
                <tr>
                    <td>{{ $vehiclereport->driver }}</td>
                    <td>{{ $vehiclereport->code_car }}</td>
                    <td>{{ $vehiclereport->model }}</td>
                    <td>{{ $vehiclereport->year }}</td>
                </tr>
            </tbody>
        </table>
    </div>
    <br>

    <div class="col-md-12">
        <h5>Observaciones: </h5>
        @if ($vehiclereport->observations == '')
            <p>Sin observaciones.</p>

        @else
            <p>{{ $vehiclereport->observations }}</p>

        @endif
    </div>
    @endforeach

</body>

</html>
