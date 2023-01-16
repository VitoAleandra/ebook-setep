<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <title>Login</title>
</head>
<body>
    <div class="login-container mx-auto" style="padding: 50px 50px; width: 500px; border-radius:20px; background-color: #eee; margin-top: 10%;">
        <form method="POST" action="{{ route('login.auth') }}" class="mx-auto" style="width: 400px;">
            @if ($errors->any())
            <script>
                Swal.fire(
                    'Username Tidak Tersedia!',
                    'please create username',
                    'warning'
                )
            </script>
            @endif
            @if (session('succes'))
                <div class="alert alert-success">
                    {{ session('succes') }}
                </div>
            @endif

            @if (session('notAllowed'))
                <script>
                    Swal.fire(
                    'Login dulu ngab!',
                    'bapa lu hamil',
                    'error'
                    )
                </script>
            @endif
            @csrf
            <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" name="email">
            </div>
            <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password">
            </div>
            <div class="btn">
                <button type="submit" class="btn btn-primary">Login</button>
                <a href="/register">Don't have an account? register here!</a>
            </div>
        </form>
    </div>


        {{-- Bootstrap --}}
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>

</body>
</html>