<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/registerStyle.css">
</head>
<body class="text-center">
    <main class="form-register center-form">
        
        <h1>REGISTER</h1>
        <form method="POST" action="/api/register">
            @csrf
            <div class="form-floating">
                <input type="text" id="floatingInput" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Kimi No Namaewa" required value="{{ old('name') }}">
                <label for="floatingInput">Name</label>

                @error('name')
                    <div class="invalid-feedback error-message">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-floating">
                <input type="number" id="floatingInput" class="form-control @error('age') is-invalid @enderror" name="age" placeholder="Your age" required value="{{ old('age') }}">
                <label for="floatingInput">Age</label>

                @error('age')
                    <div class="invalid-feedback error-message">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-floating">
                <input type="email" id="floatingInput" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Your age" required value="{{ old('email') }}">
                <label for="floatingInput">Email address</label>

                @error('email')
                    <div class="invalid-feedback error-message">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-floating">
                <input type="password" id="floatingPassword" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="password" required value="{{ old('password') }}">
                <label for="floatingPassword">Password</label>

                @error('password')
                    <div class="invalid-feedback error-message">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <button type="submit" class="w-100 btn btn-lg btn-primary register-button">Register !</button>
        </form>

        <button onclick="location.href = 'home';" class="w-100 btn btn-lg btn-secondary">Go Back</button>

        <small class="d-block text-center mt-3"> Already have account? <a href="login"> Login Now!</a></small>

    </main>

    <p class="mb-3 text-muted copyright-bottom">&copy; November 2021</p>

    {{-- @if($errors->any())
        <table>
            <tr>Error while registering:</tr>
            @foreach ($errors->all() as $error)
                <tr><li style="color:red">{{ $error }}</li></tr>
            @endforeach
        </table>
    @endif --}}
</body>
</html>
