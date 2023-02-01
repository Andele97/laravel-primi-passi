<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <title>ciao laravel</title>
</head>
<body>

  <div>
    <h1>{{ $saluto }}</h1>

    @if ($stampa_paragrafo)
    <p>
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni, quam nihil perspiciatis, placeat quaerat necessitatibus accusantium natus alias dolorum quasi magnam consectetur odit illo sit consequatur id ratione sapiente earum!
    </p>
    @else
    <p>nessun paragrafo da stampare</p>
    @endif

    <ul>
      @foreach ($ingredienti as $ingrediente)
        <li>{{ $ingrediente }}</li>
      @endforeach
    </ul>

    <a href="/chi-siamo">CHI SIAMO</a>
  </div>

</body>
</html>