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
        <h1>FORMULIR PENDAFTARAN</h1>
    <p>Silahakan Isi Data Di Bawah Ini Dengan Benar</p>

    <form method="POST" action="submit.php" >
        <div class="mb-3">
        <label class="form-label">Nama : </label>
        <input class="form-control" type="text" name="nama" 
        placeholder="Isi Dengan Nama..." required> 
        </div>

        <div class="mb-3">
        <label class="form-label">Email : </label>
        <input class="form-control" type="email" name="email" 
        placeholder="Isi Dengan Email..." required > 
        </div>
        
        <div class="mb-3">
        <label class="form-label" >Handphone: </label>
        <input class="form-control" type="number" name="handphone" 
        placeholder="Isi Dengan handphone..." required > 
        </div>
        
        <button type="submit">Submit</button>

    </form>
        </div>
    
    </body>
    
    </html>
