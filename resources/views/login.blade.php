<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Login Dulu Yuks</title>
</head>

<style>
    .login-box {
        border: solid 1px;
        width: 500px;
        padding: 20px;
        box-sizing: border-box;
        border-radius: 15px;
        height: 385px;
    }
</style>


<body>
    <div class="vh-100 d-flex justify-content-center align-items-center flex-column">
        @if (Session::has('status'))
            <div class="alert alert-danger" role="alert">
                {{ Session::get('message') }}
            </div>
        @endif
        <div style="opacity: 85%" class="login-box">
            <h1 style="text-align: center" class="mt-1">Login</h1>
            <form method="POST" action="">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email" class="form-control" required>
                </div>
                <div class="mb-3 mt-4">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" id="password" class="form-control" required>
                </div>
                <div class="mb-3 mt-5">
                    <button class="btn btn-dark form-control" type="submit">LOGIN</button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
