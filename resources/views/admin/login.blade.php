<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel CRUD With Multiple Image Upload</title>

      <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap.min.css" integrity="sha512-Ez0cGzNzHR1tYAv56860NLspgUGuQw16GiOOp/I2LuTmpSK9xDXlgJz3XN4cnpXWDmkNBKXR/VDMTCnAaEooxA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

     <!-- Font-awesome -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

        <style>
            .divider:after,
            .divider:before {
            content: "";
            flex: 1;
            height: 1px;
            background: #eee;
            }
            .h-custom {
            height: calc(100% - 73px);
            }
            @media (max-width: 450px) {
            .h-custom {
            height: 100%;
            }
            }
        </style>
    </head>
    <body>

    <section class="vh-100">
            <div class="container-fluid h-custom">
                <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                    class="img-fluid" alt="Sample image">
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    <form action="/admin/login/postlogin" method="post">
                    @include('share.error')
                    <div class="divider d-flex align-items-center my-4">
                        <p class="text-center fw-bold mx-3 mb-0 h1">Login</p>
                    </div>

                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form3Example3">Email address</label>
                        <input type="text" name="email" id="form3Example3" class="form-control form-control-lg"
                        placeholder="Email" />
                        <div class="input-group-append">

                    </div>
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-3">
                        <lbel class="form-label" for="form3Example4">Password</lbel>
                        <input type="password" name="password"  id="form3Example4" class="form-control form-control-lg"
                        placeholder="Password" />
                        <div class="input-group-append">

                        </div>
                    </div>

                    <div class="row">
                    <div class="col-8">
                        <div class="icheck-primary">
                            <input type="checkbox" id="remember">
                            <label for="remember">
                                Remember Me
                            </label>
                        </div>
                    </div>
                     <!-- /.col -->

                    <div class="text-center text-lg-start mt-4 pt-2 " >
                        <button type="submit" class="btn btn-primary btn-lg"
                          style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
                        <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="/register"
                            style="font-size: 16px; color:rgb(247, 94, 6)">Register</a></p>
                      </div>
                    <!-- /.col -->
                        @csrf
                    </form>
                </div>
                </div>
            </div>

    </section>


        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/js/bootstrap.min.js" integrity="sha512-EKWWs1ZcA2ZY9lbLISPz8aGR2+L7JVYqBAYTq5AXgBkSjRSuQEGqWx8R1zAX16KdXPaCjOCaKE8MCpU0wcHlHA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    </body>
</html>
