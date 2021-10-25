<!DOCTYPE html>
<html>

<head>
    <title>TRANSAKSI</title>
</head>

<body>
    <center>
        <table bgcolor="#FFFA" width="480px">
            <tr>
                <th colspan="5">

                    <h3>TOKO SEPATU AAA</h3>

                    <hr>
                </th>
            </tr>
            <tr>

                <td align="center">NAMA PEMBELI</td>

                <td>:</td>
                <td><?= $nama ?></td>
            </tr>
            <tr>
                <td></td>
            </tr>
            <tr>
                <td align="center">NO HP</td>
                <td>:</td>
                <td><?= $no ?></td>
            </tr>
            <tr>
                <td></td>
            </tr>
            <tr>
                <td align="center">MERK SEPATU</td>
                <td>:</td>
                <td><?= $merk ?></td>
            </tr>
            <tr>
                <td></td>
            </tr>
            <tr>
                <td align="center">UKURAN SEPATU</td>
                <td>:</td>
                <td><?= $size ?></td>
            </tr>
            <tr>
                <td></td>
            </tr>
            <tr>
                <td align="center">HARGA</td>
                <td>:</td>
                <td>Rp. <?= $harga ?></td>
            </tr>
            <tr>
                <td colspan="3">
                    <hr>
                </td>
            </tr>
        </table>
        <p><button><a href="<?php echo base_url() . 'index.php/sepatu' ?>">KEMBALI</a></button></p>
    </center>
</body>

</html>