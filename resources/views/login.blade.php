<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <style>
        .view-table thead th, .view-table thead td, .view-table thead tr{
            border: 1px solid black;
        }

        .row {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <h1>LOGIN</h1>
    {{-- Insert Brand --}}
    <div class="row">
        <form action="/login" method="POST">
            @csrf
            <table>
                <tr>
                    <td><label for="name">Name</label></td>
                    <td><input type="text" id="name" name="name" placeholder="Name"></td>
                </tr>
                <tr>
                    <td><label for="name">Age</label></td>
                    <td><input type="text" id="age" name="age" placeholder="18"></td>
                </tr>
                <tr>
                    <td><label for="name">Password</label></td>
                    <td><input type="password" id="password" name="password" placeholder="password"></td></tr>
                </tr>
            </table>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
