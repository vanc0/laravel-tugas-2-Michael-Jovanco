<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<a href="{{route('fakultas.index')}}">Fakultas</a>
<a href="{{route('prodi.index')}}">Prodi</a>
<a href="{{route('mahasiswa.index')}}">Mahasiswa</a>
@yield('content')

</body>
</html>
