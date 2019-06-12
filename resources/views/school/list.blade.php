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
        <td>名称</td>
        <td>邮箱</td>
        <td>班级名称</td>
        <td>教师名称</td>
        <td>操作</td>
    </tr>
    @if($data)
    @foreach($data as $v)

    <tr>
        <td>{{$v->s_id}}</td>
        <td>{{$v->s_name}}</td>
        <td>{{$v->s_email}}</td>
        <td>{{$v->s_student}}</td>
        <td>{{$v->s_sname}}</td>
       

        <td>
         <a href="{{url('/school/del',['s_id'=>$v->s_id])}}">删除</a>
         <a href="{{url('/school/edit',['s_id'=>$v->s_id])}}">修改</a>
        </td>
    </tr>
    @endforeach
    @endif
    
    </table>
</body>
</html>