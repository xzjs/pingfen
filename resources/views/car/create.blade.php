<!doctype html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
<form action="{{route('car.store')}}" method="post">
    {{ csrf_field() }}
    name<input type="text" name="name"><br>
    description<input type="text" name="description"><br>
    v2x_id<input type="text" name="v2x_id" value="1"><br>
    <input type="submit" value="提交">
</form>
</body>
</html>