<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <!-- <form>
        <>
    </form> -->
    <table border="1">
    <tr>
        <td>id</td>
        <td>用户名</td>
        <td>邮箱</td>
        <td>时间</td>
        <td>操作</td>
    </tr>
    @if($data)
    @foreach($data as $v)

    <tr>
        <td>{{$v->id}}</td>
        <td>{{$v->name}}</td>
        <td>{{$v->email}}</td>
        <td>{{date('Y-m-d H:i:s',$v->time)}}</td>

        <td>
         <a href="{{url('/stu/del',['id'=>$v->id])}}">删除</a>
         <a href="{{url('/stu/edit',['id'=>$v->id])}}">修改</a>
        </td>
    </tr>
    @endforeach
    @endif
    
    </table>
</body>
</html>