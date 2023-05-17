<!doctype html>
<html lang="en">
 
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Android Populer di Dunia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  
  <body>
    <h2 class="text-center mt-2">Android Populer di Dunia</h2>
    <div class="container mt-3">
    <form>
  <div class="mb-3">
    <label for="nama_android" class="form-label">Nama Android Populer di Dunia</label>
    <input type="text" class="form-control" id="nama_android" name="nama_android" value="{{ $AndroidPopuler->nama_android }}" disabled>
  </div>
  <div class="mb-3">
    <label for="owner" class="form-label">Owner</label>
    <input type="text" class="form-control" id="owner" name="owner" value="{{ $AndroidPopuler->owner }}" disabled>
  </div>
  <a href="/" class="btn btn-primary">Kembali</a>
</form>  
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script> 
  </body>

</html>