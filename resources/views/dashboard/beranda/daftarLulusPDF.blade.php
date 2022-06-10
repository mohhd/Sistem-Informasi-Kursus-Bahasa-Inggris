<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Siswa Lulus</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .line-title{
            border: 0;
            border-style: inset;
            border-top: 1px solid #000;
        }
        table tr td,
		table tr th{
			font-size: 9pt;
		}
    </style>
</head>
<body>
    <img src="admin/assets/img/ailcc.png" style="position: absolute; width: 60px; height: auto;">
    <table style="width: 100%;">
        <tr>
        <td align="center">
            <span style="line-height: 1.6; font-weight: bold;">
            AZIZA INTERNATIONAL LANGUAGE COURSE
            <br>SURABAYA INDONESIA
            </span>
        </td>
        </tr>
    </table>

    <hr class="line-title"> 
    <p align="center">
        LAPORAN SISWA LULUS <br>
    </p>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Email</th>
                <th>No.HP</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $e=>$d)
            <tr>
                <td>{{ $e+1 }}</td>
                <td>{{ $d->user_r->name }}</td>
                <td>{{ $d->user_r->email }}</td>
                <td>{{ $d->no_hp }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>