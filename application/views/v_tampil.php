<!DOCTYPE html>
<html>

<head>
    <title>Data Pembayaran SPP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            background-image: url('../upload/wb.jpg');
            background-size: cover;
        }

        center {
            margin-top: 20px;
        }

        h2 {
            color: #333;
        }

        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ddd;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        input[type="button"] {
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }

        input[type="button"]:hover {
            background-color: #45a049;
        }

        .edit-button {
            background-color: #3498db;
            color: #fff;
            padding: 5px 10px;
            text-decoration: none;
            border-radius: 3px;
            margin-right: 5px;
        }


        .hapus-button {
            background-color: #e74c3c;
            color: #fff;
            padding: 5px 10px;
            text-decoration: none;
            border-radius: 3px;
        }
    </style>
</head>

<body>
    <center>
        <h2>Data Pembayaran SPP<br>SMK Wira Buana 2 Bogor<br>Tahun Ajaran
            2023/2024</h2>
    </center>
    <center><?php echo anchor('crud/tambah', 'Tambah Data'); ?></center>
    <table style="margin:20px auto;" border="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Jurusan</th>
            <th>SPP</th>
            <th>Tanggal Bayar</th>
            <th>Action</th>
        </tr>
        <?php
        $no = 1;
        foreach ($user as $u) {
        ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $u->nama ?></td>
                <td><?php echo $u->kelas ?></td>
                <td><?php echo $u->jurusan ?></td>
                <td><?php echo $u->spp ?></td>
                <td><?php echo $u->tanggal_bayar ?></td>
                <td>
                    <?php echo anchor('crud/edit/' . $u->id, 'Edit', 'class="edit-button"'); ?>
                    <?php echo anchor('crud/hapus/' . $u->id, 'Hapus', 'class="hapus-button"'); ?>
                </td>

            </tr>
        <?php } ?>
    </table>
    <center><input type="button" value="Cetak" onClick="window.print()" /> </center>
</body>

</html>