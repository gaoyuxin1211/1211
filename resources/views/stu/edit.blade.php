<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
@if ($errors->any())
 <div class="alert alert-danger">
 <ul>
 @foreach ($errors->all() as $error)
 <li>{{ $error }}</li>
 @endforeach
 </ul>
 </div>
@endif
    <form action="/stu/update/{{$data->id}}" method="post"enctype="multipart/from-data">
    <!-- <input type="hidden" name="id" value="{{$data->id}}"> -->
        @csrf

        <table>
            <tr>
                <td>用户名称</td>
                <td><input type="text" name="name" value="{{$data->name}}"></td>
            </tr>
            <tr>
                <td>用户密码</td>
                <td><input type="password" name="password" value="{{$data->password}}"></td>
            </tr>
      
             <tr>
                <td>确认密码</td>
                <td><input type="password" name="passwords" value="{{$data->passwords}}"></td>
            </tr>
             <tr>
                <td>用户邮箱</td>
                <td><input type="email" name="email" value="{{$data->email}}"></td>
            </tr>
            <tr>
            <td> </td>
            <td><input type="submit"></td>
           
            </tr>

        </table>

    </from>
</body>
</html>