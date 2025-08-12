<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Tambah</h1>
    <a href="{{url('hello')}}">Back</a>
    <form action="{{route('tambah.store')}}" method="post">
        @csrf
        <div>
            <label for="angka1">Angka 1</label>
            <input type="number" name="angka1">
        </div>
        <div>
            <label for="angka2">Angka 2</label>
            <input type="number" name="angka2">
        </div>
        <button type="submit">Count</button>
    </form>
    <span>Hasilnya adalah {{$total}}</span>
</body>
</html>
