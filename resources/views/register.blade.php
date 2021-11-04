<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<body>
    <h1>LOGIN</h1>
    <form method="POST" action="/api/register">
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
        <button type="submit">Register !</button>
        <a href="/home"><button>Go Back</button></a>
    </form>


    @if($errors->any())
        <table>
            <tr>Error while registering:</tr>
            @foreach ($errors->all() as $error)
                <tr><li style="color:red">{{ $error }}</li></tr>
            @endforeach
        </table>
    @endif
</body>
</html>
