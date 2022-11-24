<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>

<body>
    <table border="1">
        <tr>
            <th>NO</th>
            <th>ID Pemesanan</th>
            <th>ID Kasir</th>
            <th>Nama Pemesan</th>
            <th>Harga Total</th>
            <th>Tanggal</th>
            <th>Status</th>
        </tr>
        <?php
        $no = 1;
        foreach ($penjualan as $p) {
        ?>
            <tr>
                <td><?= $no ?></td>
                <td><?= $p['id_pemesanan'] ?></td>
                <td><?= $p['id_kasir'] ?></td>
                <td><?= $p['nama_pemesanan'] ?></td>
                <td><?= $p['total_harga'] ?></td>
                <td><?= $p['tanggal_pemesanan'] ?></td>
                <td><?= $p['status'] ?></td>
            </tr>
        <?php
            $no++;
        }
        ?>
    </table>
    

    <script type="text/javascript">
        window.print();
    </script>

</body>

</html>