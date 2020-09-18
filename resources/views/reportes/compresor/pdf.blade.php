<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <div style="margin-left: 50px;">
    <table class="table table-bordered" style="width: 600px;">
        <tbody>
          <tr>
            <th scope="row"> Fecha reporte: </th>
            <td>{{ $compresor->date }}</td>
          </tr>
          <tr>
            <th scope="row"> Nivel de aceite: </th>
            <td>{{ $compresor->oil_level }}</td>
          </tr>
          <tr>
            <th scope="row"> Temperatura: </th>
            <td>{{ $compresor->temperature }}</td>
          </tr>
          <tr>
            <th scope="row"> Observaciones: </th>
            <td>{{ $compresor->observations }}</td>
          </tr>
          <tr>
            <th scope="row"> ID: </th>
            <td>{{ $compresor->user_report }}</td>
          </tr>
          <tr>
            <th scope="row"> Persona que realizó el reporte:
            </th>
            <td>{{ $user->name }}</td>
          </tr>
        </tbody>
      </table>
    </div>
</body>
</html>