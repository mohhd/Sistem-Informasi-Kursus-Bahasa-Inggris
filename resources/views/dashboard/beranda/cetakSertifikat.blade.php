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
        SERTIFIKAT <br>
    </p>
    <div class="profile-detail">
        <div class="profile-info">
            <h4 class="heading">Basic Info</h4>
            <ul class="list-unstyled list-justify">
                <li><h3>{{ auth()->user()->name }}</h3></li>
                <li>Address <span>{{ auth()->user()->pendaftaran_r->alamat }}</span></li>
                <li>Kelas <span>{{ auth()->user()->pendaftaran_r->kelas_r->kursus_r->nama_kursus }}</span></li>
            </ul>
        </div>
    </div>
</body>
</html>