<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Indo Film</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body>
    <h2 class="text-center mb-4">Data Film</h2>
      <div class="container">
        <a href="/tambahfilm" class="btn btn-success">Tambah + </a>
        <div class="row">
          @if ($message = Session::get('success'))
            <div class="alert alert-success" role="alert">
              {{$message}}
            </div>
          @endif
          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Poster</th>
                <th scope="col">Judul</th>
                <th scope="col">Penulis</th>
                <th scope="col">Sinopsis</th>
                <th scope="col">Genre</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              @php
                $no = 1;
              @endphp
              @foreach ($data as $row)
              <tr>
                <th scope="row">{{$no++}}</th>
                <td>
                  <img src="{{asset('posterfilm/'.$row->foto)}}" alt="" style="width: 100px">
                </td>
                <td>{{$row->judul}}</td>
                <td>{{$row->penulis}}</td>
                <td>{{$row->sinopsis}}</td>
                <td>{{$row->genre}}</td>
                <td>
                  <a href="/tampilkandata/{{ $row->id }}" class="btn btn-warning">Edit</a>
                  <a href="/delete/{{ $row->id }}"  class="btn btn-danger">Hapus</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
  </body>
</html>