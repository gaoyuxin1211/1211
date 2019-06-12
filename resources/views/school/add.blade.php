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
        <form action="/school/add_do" method="post" enctype="multipart/from-data">
        @csrf

            <table>
                <tr>
                <td>学校名称</td>
                <td><input type="text" name="s_name"></td>
                </tr>

                <tr>
                <td>学校邮箱</td>
                <td><input type="email" name="s_email"></td>
                </tr>
                <tr>
                <td>班级名称</td>
                <td><input type="text" name="s_student"></td>
                </tr>

                <tr>
                <td>教师名称</td>
                <td><input type="text" name="s_sname"></td>
                </tr>

                
                <tr>
                <td></td>
                <td><input type="submit"></td>
                </tr>

            </table>
        
        </form>
</body>
</html>
