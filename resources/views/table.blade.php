<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table>
    <tr>
        <th>Id</th>
        <th>First name</th>
        <th>last name</th>
        <th>city</th>
    </tr>
    @foreach ($product as $product)
    <tr>
        <td>{{$product->id}}</td>
        <td>{{$product->fname}}</td>
        <td>{{$product->lname}}</td>
        <td>{{$product->city}}</td>
    </tr>


    @endforeach
</table>
</body>
</html>
