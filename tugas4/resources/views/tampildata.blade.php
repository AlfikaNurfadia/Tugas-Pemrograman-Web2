<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Indo Film</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
 
    <h2 class="text-center mb-4">Edit Data</h2>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-8">
            <div class="card">
              <div class="card-body">
                <form action="/updatedata/{{$data->id}}" method="post" enctype="multipart/form-data">
                  @method('post')
                  @csrf
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Judul</label>
                    <input type="text" name="judul" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->judul}}">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Penulis</label>
                    <input type="text" name="penulis" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->penulis}}">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Sinopsis</label>
                    <input type="text" name="sinopsis" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->sinopsis}}">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Genre</label>
                    <select class="form-select" name="genre" aria-label="Default select example">
                      <option selected>{{$data->genre}}"</option>
                      <option value="Drama">Drama</option>
                      <option value="Romantis">Romantis</option>s
                      <option value="Komedi">Komedi</option>
                      <option value="Dokumenter">Dokumenter</option>
                      <option value="Horor">Horor</option>
                      <option value="Aksi">Aksi</option>
                    </select>
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
  </body>
</html>