<html>
    <head>
        <title>edit product</title>
    </head>
    <body>
        <form action="/edit/{{$product->id}}"method="post">
            {{csrf_field()}}
            product name:  <input type="text" value="{{$product->name}}" name="name" />
            <br>
            product price:  <input type="text"value="{{$product->price}}" name="price" />
            <br>
            <input type="submit" value="edit product" />
        </form>
    </body>
</html>

