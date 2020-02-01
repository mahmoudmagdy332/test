<html>
    <head>
        <title>add product</title>
    </head>
    <body>
        <form action="add"method="post">
            {{csrf_field()}}
            product name:  <input type="text" name="name" />
            <br>
            product price:  <input type="text" name="price" />
            <br>
            <input type="submit" value="add product" />
        </form>
    </body>
</html>
