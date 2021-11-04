<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="css/registerStyle.css">
</head>
<body class="text-center">
    <main class="form-register center-form">
    <h1>REGISTER</h1>
    <form method="POST" action="/api/register">
        @csrf
        <div class="form-floating">
            <input type="text" id="floatingInput" class="form-control" name="name" placeholder="Kimi No Namaewa">
            <label for="floatingInput">Name</label>
        </div>
        <div class="form-floating add-margin">
            <input type="number" id="floatingInput" class="form-control" name="age" placeholder="Your age">
            <label for="floatingInput">Age</label>
        </div>
        <div class="form-floating">
            <input type="password" id="floatingPassword" class="form-control" name="password" placeholder="password">
            <label for="floatingPassword">Password</label>
        </div>

        <button type="submit" class="w-100 btn btn-lg btn-primary register-button">Register !</button>
    </form>
    
    <button onclick="location.href = 'home';" class="w-100 btn btn-lg btn-secondary">Go Back</button>

    <small class="d-block text-center mt-3"> Already have account? <a href="login"> Login Now!</a></small>
    <p class="mt-5 mb-3 text-muted">&copy; November 2021</p>

    </main>


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
