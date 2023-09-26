@php
    use Carbon\Carbon;
@endphp
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body class="m-5">
    <table class="table table-striped table-danger">
        <thead>
            <tr>
            <th>id</th>
            <th>Judul buku</th>
            <th>Penulis</th>
            <th>Harga</th>
            <th>Tanggal terbit</th>
            <th colspan="2" class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data_buku as $buku)
            <tr>
                <td>{{++$no}}
                <td>{{$buku->judul}}</td>
                <td>{{$buku->penulis}}</td>
                <td>{{"Rp ".number_format($buku->harga, 2, ',', '.')}}</td>
                <td>{{Carbon::parse($buku->tgl_terbit)->format('d/m/Y') }}</td>
                <td>
                  <div> <form action="{{route('buku.destroy', $buku->id)}}" method="post">
                    @csrf
                  <button class="btn btn-danger" onclick="return confirm('yakin mau di hapus?')">Hapus</button>
                </form></div>
                </td>
                <td>
                  <div> <form action="{{route('buku.edit', $buku->id)}}" method="get">
                    @csrf
                  <button class="btn btn-primary">Update Nilai</button>
                </form></div>
                </td>
            </tr>
            @endforeach
        </tbody>
      </table>
      <h3>banyak data = {{$banyak_data}}</h3>
      <h3>Total harga = {{$total_harga}}</h3>
      <div> <form action="{{route('buku.create')}}" method="get">
        @csrf
      <button class="btn btn-primary">Tambah nilai</button>
    </form></div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>