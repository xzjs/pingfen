<!doctype html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>评分</title>
</head>
<body>
<form action="{{route('exam.store')}}" method="post">
    {{ csrf_field() }}
    car_id<input type="text" name="car_id"><br>
    mission_id<input type="text" name="mission_id"><br>
    is_get<input type="text" name="is_get"><br>
    <input type="submit" value="提交">
</form>
</body>
</html>