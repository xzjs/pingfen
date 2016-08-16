<!doctype html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>添加规则</title>
</head>
<body>
<form action="{{route('mission.store')}}" method="post">
    {{ csrf_field() }}
    name<input type="text" name="name"><br>
    description<input type="text" name="description"><br>
    point<input type="text" name="point"><br>
    group<input type="text" name="group" value="2"><br>
    <input type="submit" value="提交">
</form>
</body>
</html>