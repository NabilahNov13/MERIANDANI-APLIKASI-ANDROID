<!doctype html>
<html lang="en">
 
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Android Populer di Dunia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  
  <body>
    <h2 class="text-center mt-2">Edit Android Populer di Dunia</h2>
    <div class="container">
    <form action="{{ '/edit/'.$AndroidPopuler->id }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nama_android" class="form-label">Nama Android Populer di Dunia</label>
                <input type="text" class="form-control @error('nama_android') is-invalid @enderror" id="nama_android" name="nama_android" value="{{ $AndroidPopuler->nama_android }}">
                @error('nama_android')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="owner" class="form-label">Owner</label>
                <input type="text" class="form-control @error('owner') is-invalid @enderror" id="owner" name="owner" value="{{ $AndroidPopuler->owner }}">
                @error('owner')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>  
            <a href="/" class="btn btn-primary">Kembali</a>
            <button type="submit" class="btn btn-success">Submit</button>
        </form> 
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script> 
  </body>

</html>