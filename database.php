<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendaftaran</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 0 auto;
            font-family: Arial, sans-serif;
        }
        th {
            text-align: center;
            font-size: 18px;
        }
        td {
            padding: 8px;
        }
        input[type="text"],
        input[type="date"],
        textarea,
        select {
            width: 100%;
            padding: 5px;
            box-sizing: border-box;
        }
        input[type="radio"] {
            margin-right: 10px;
        }
        .center {
            text-align: center;
        }
        .button-group {
            text-align: center;
        }
    </style>
</head>
<body>
    <h2 style="text-align: center;">Formulir Pendaftaran</h2>
    <form action="#" method="post">
        <table border="1">
            <tr>
                <th colspan="2">Formulir Pendaftaran</th>
            </tr>
            <tr>
                <td>ID Mahasiswa</td>
                <td><input type="text" name="id_mahasiswa" required></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" required></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><textarea name="alamat" rows="3" required></textarea></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>
                    <input type="radio" name="jenis_kelamin" value="Pria" required> Pria
                    <input type="radio" name="jenis_kelamin" value="Wanita" required> Wanita
                </td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td><input type="date" name="tgl_lahir" required></td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td>
                    <select name="jurusan" required>
                        <option value="Sistem Informasi">Sistem Informasi</option>
                        <option value="Teknik Informatika">Teknik Informatika</option>
                        <option value="Ilmu Komputer">Ilmu Komputer</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Minat</td>
                <td>
                    <input type="checkbox" name="minat[]" value="Programming"> Programming
                    <input type="checkbox" name="minat[]" value="Animasi"> Animasi
                    <input type="checkbox" name="minat[]" value="Desain"