<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Product</title>
    <link rel="stylesheet" href="{{asset('css/appAdd.css')}}">
</head>
<body>
    <h1 class="title">Edit product</h1>
    <form action="{{ Route('product.update',$product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="InputDiv">
            <label for="title">Title  </label>
            <input type="text" name="title" value="{{$product->title}}">
            <span class="error">{{$errors->first('title')}}</span>
        </div>
        <div class="InputDiv">
            <label for="price">Price</label>
            <input type="number" name="price" value="{{$product->price}}">
            <span class="error">{{$errors->first('price')}}</span>
        </div>
        <div class="InputDiv">
            <button type="submit">Add</button>
        </div>
    </form>

</body>
</html>
