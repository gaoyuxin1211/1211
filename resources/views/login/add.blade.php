<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>   @if ($errors->any())
            <div class="alert alert-danger">
            <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
            </ul>
            </div>
            @endif
    <form action="add_do" method="post" enctype="multipart/form-data">
        @csrf
            <table >
                <tr>
                    <td>用户名</td>
                    <td><input type="text" name="d_name"></td>
                </tr>

                <tr>
                    <td>密码</td>
                    <td><input type="password" name="d_pwd"></td>
                </tr>

                <tr>
                    <td></td>
                    <td><input type="submit" value="登录"></td>
                    <!-- <td><input type="submit" value="注册"></td> -->

                </tr>
            </table>
    </form>
</body>
</html>