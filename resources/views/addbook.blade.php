<?php
$angka = 1;
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="img/favicon.png">

    <title>Admin </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Selamat datang 👋🏻</h1>

        <form method="POST" action="{{ url('add') }}">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama Buku</label>
                <input name="nama_buku" type="text" class="form-control" required>
            </div>
            <input name="gambar_buku" type="hidden" value="default" class="form-control" required>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama Pengarang</label>
                <input name="pengarang_buku" type="text" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">penerbit buku</label>
                <input name='penerbit_buku' type="text" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">ISBN</label>
                <input name="isbn" type="text" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        <h1 class="mt-5">table buku</h1>
        <table class="table ">
            <thead>
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">nama buku</th>
                    <th scope="col">Penerbit Buku</th>
                    <th scope="col">nama Pengarang</th>
                    <th scope="col">ISBN</th>
                    <th scope="col">action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($buku as $bukus)
                    <tr>
                        <th scope="row">{{ $angka++ }}</th>
                        <td>{{ $bukus->nama_buku }}</td>
                        <td>{{ $bukus->penerbit_buku }}</td>
                        <td>{{ $bukus->pengarang_buku }}</td>
                        <td>{{ $bukus->isbn }}</td>
                        <td><a href="{{ url('add/' . $bukus->id . '/edit') }} ">🖊edit</a> |
                            |
                            {{-- <a actio href="{{ url('add/' . $bukus->id) }}">🚮delete</a> --}}
                            <form action="{{ url('add/' . $bukus->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" name="submit">delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
