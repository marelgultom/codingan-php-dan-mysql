<html>
    <head>
    <title>web saya </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
     crossorigin="anonymous">
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
    crossorigin="anonymous"></script>
    </head>

    <body>
        <?php include('navbar.php');?>
        <div class='container  mt-5'>
        <h1>Data Formulir</h1>
    <p>Berikut Adalah Data Yang Sudah Terdaftar</p>

    
    <table class="table" >
        <thead>
            <tr>
                <th>No </th>
                <th>Nama </th>
                <th>Email </th>
                <th>Handphone </th>
                <th>Opsi </th>
            </tr>
        </thead>
        <tbody>
        <?php
    include('koneksi.php');
    $data = mysqli_query($koneksi,"SELECT * FROM data");
    while ($baris = mysqli_fetch_array($data)){
       
    ?>
            <tr>
                <td><?php echo $baris ["no"]; ?></td>
                <td><?php echo $baris ["nama"]; ?></td>
                <td><?php echo $baris ["email"]; ?></td>
                <td><?php echo $baris ["handphone"];?></td>
                <td>
                    <a href="edit.php?no=<?php echo $baris ['no']?>">EDIT</a> 
                    <a href= "hapus.php?no=<?php echo $baris ['no']?>"> HAPUS</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
            <div>

    </body>
    
    </html>
