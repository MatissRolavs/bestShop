<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="/style.css">
  <title>Products</title>
</head>
<body>
  <header>
    <p>MAXIMA</p>
    @auth
      <div>
        <p>YO, {{auth()->user()->name}}</p>
        <form action="/logout" method="POST">
          @csrf
          <button>Log Out</button>
        </form>
      </div>
    @endauth
  </header>
  <main>
    <h1>Products</h1>
    <a href="/products/create">Uztaisīt jaunu</a>
    @foreach($products as $product)
    <article>
      <h2><a href="/products/{{$product->id}}">{{$product->name}}</a></h2>
      <img src={{$product->imageURL}} alt="{{$product->name}}" width="200px"/>
      <p>{{$product->description}}
      </p>
      <p>{{$product->price}} EUR</p>
    </article>
    @endforeach
  </main>
</body>
</html>