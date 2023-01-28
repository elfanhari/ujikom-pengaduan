<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>

  TANGGAPAN PENGADUAN MASYARAKAT
  <br>
  <div class="table-responsive">
    <table class="table table-primary">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Pengaduan ID</th>
          <th scope="col">Nama Pengadu</th>
          <th scope="col">NIK Pengadu</th>
          <th scope="col">Tanggal Pengaduan</th>
          <th scope="col">Penanggap</th>
          <th scope="col">Tanggal Tanggapan</th>
          <th scope="col">Tanggapan</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($tanggapan as $view)
          <tr class="">
            <td scope="row">{{ $loop->iteration }}</td>
            <td>{{ $view->id }}</td>
            <td>{{ $view->pengaduan->user->name }}</td>
            <td>{{ $view->pengaduan->user->masyarakat->nik }}</td>
            <td>{{ $view->pengaduan->tanggal }}</td>
            <td>{{ $view->user->name }}</td>
            <td>{{ $view->tanggal }}</td>
            <td>{{ $view->tanggapan }}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  
</body>
</html>