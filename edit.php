<?php
    include('koneksi.php');
    $no=$_GET["no"];
    $data = mysqli_query($koneksi,"SELECT * FROM data WHERE no='$no'");
   $baris = mysqli_fetch_array($data);

    ?>

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
        <div class='container col-md-6 mt-5'>
        <h1>Edit Data</h1>
    <p>Silahakan Edit Data Dibawah ini</p>

    <form method="POST" action="update.php" >
        <div class ="mb-3">
        <label class="form-labe">Nama : </label>
        <input class=form-control value="<?php echo $baris['nama']; ?>" type="text" name="nama" 
        placeholder="Isi Dengan Nama..." required> 
        <input name='no' value ="<?php echo $no ;?>"hidden>
        </div>

        <div class ="mb-3">
        <label class="form-labe">Email : </label>
        <input class=form-control value="<?php echo $baris['email']; ?>" type="email" name="email" 
        placeholder="Isi Dengan Email..." required > 
        </div>
        
        <div class ="mb-3">
        <label class="form-labe" >Handphone: </label>
        <input class=form-control value="<?php echo $baris['handphone']; ?>"type="number" name="handphone" 
        placeholder="Isi Dengan handphone..." required > 
        </div>
        

        <button  class=btn-primary type="submit">Simpan</button>

    </form>
            <div>
    
    </body>
    
    </html>
