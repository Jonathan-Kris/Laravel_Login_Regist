<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<body>
    <form action="">
        @csrf
        <table>
            <tr>
                <td><label for="name">Name</label></td>
                <td><input type="text" id="name" name="name" placeholder="Kimi No Namaewa"></td>
            </tr>
            <tr>
                <td><label for="age">Age</label></td>
                <td><input type="number" id="age" name="age" placeholder="age"></td>
            </tr>
            <tr>
                <td><label for="password">Password</label></td>
                <td><input type="password" id="password" name="password" placeholder="password"></td>
            </tr>
        </table>
    </form>
</body>
</html>