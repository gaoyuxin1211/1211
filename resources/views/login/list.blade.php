<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <td>id</td>
            <td>用户名</td>
            <td>密码</td>
        </tr>
        @if($data)
        @foreach($data as $v)

        <tr>  
            <td>{{$v->d_id}}</td>
            <td>{{$v->d_name}}</td>
            <td>{{$v->d_pwd}}</td>
        
         </tr>
         @endforeach
         @endif
    </table>
</body>
</html>