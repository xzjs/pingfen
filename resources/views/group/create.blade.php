<!doctype html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>添加任务点</title>
</head>
<body>
<form action="{{route('group.store')}}" method="post">
    {{ csrf_field() }}
    名称<input type="text" name="name">
    <br>
    <input type="submit" value="提交">
</form>
</body>
</html>