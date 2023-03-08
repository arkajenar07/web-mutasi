<html>
    <head>
        <title>SHOW TABLE</title>
    </head>
    <body>
        <h1>MOETASI</h1>
        <table border="1" class="table">
            <tr>
                <th>nomor</th>
                <th>nama kelas</th>
            </tr>
            <?php
            include "connect.php";
            $query_mysql = mysqli_query($host, "SELECT * FROM kelas") or die(mysqli_error());
            $nomor = 1;
            while($data = mysqli_fetch_array($query_mysql)){
            ?>
            <tr>
                <td><?php echo $nomor++; ?></td>
                <td><?php echo $data['nama_kelas']; ?></td>
            </tr>
            <?php } ?>
        </table>

    </body>
</html>