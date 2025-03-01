<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>products</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <h1 class="title">Products</h1>
    <div class="divButton">
        <a href="{{Route('product.create')}}"><button class="addProductButton">Add product</button></a>
    </div>
    <div class="main">
        @foreach ($products as $product)
            <div class="elementProduct">
                <h3>{{ $product->title }}</h3>
                <p>${{ $product->price }}</p>
                <div class="divButtons">
                    <div class="editButton">
                        <a href="{{Route('product.edit',$product->id)}}"><button>edit</button></a>
                    </div>
                    <div class="deleteButton">
                        <form action="{{Route('product.destroy',$product->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button>delete</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</body>
</html>
