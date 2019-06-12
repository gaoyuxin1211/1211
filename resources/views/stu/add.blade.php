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
    <form action="/stu/add_do" method="post"enctype="multipart/from-data">
        @csrf

        <table>
            <tr>
                <td>用户名称</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>用户密码</td>
                <td><input type="password" name="password"></td>
            </tr>
      
             <tr>
                <td>确认密码</td>
                <td><input type="password" name="passwords"></td>
            </tr>
             <tr>
                <td>用户邮箱</td>
                <td><input type="email" name="email"></td>
            </tr>
            <tr>
            <td> </td>
            <td><input type="submit"></td>
           
            </tr>

        </table>

    </from>
</body>
</html>