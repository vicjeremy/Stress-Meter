<!DOCTYPE html>
<html>
<head>
    <title>Tabel Diagnosa</title>
    <style type="text/css">
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table th,
        table td {
            border: 1px solid black;
            padding: 5px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Tabel Diagnosa</h1>
    <hr>
    <table>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Rata-rata Skor</th>
            <th>Tingkat Stress</th>
        </tr>
        <?php
        $no = 1;
        foreach ($result as $value) {
            echo "<tr>";
            echo "<td>".$no++."</td>";
            echo "<td>".$value['nama']."</td>";
            echo "<td>".$value['email']."</td>";
            echo "<td>".$value['rata_rata_skor']."</td>";
            echo "<td>".$value['tingkat_stres']."</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
