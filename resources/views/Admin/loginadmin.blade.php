<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Login Admin</title>
  </head>
  <body>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    <div class="row justify-content-center">
        <div class="col-md-4">
        @if(session()->has('success'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
            {{ session('success')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
            <style>

                img{width:100px;

                height:100px;

                }
            </style>
            <style>
                #card {
                background: #fbfbfb;
                border-radius: 20px;
                box-shadow: 9px 8px 9px rgba(0, 0, 0, 0.78);
                height: 500px;
                margin: 4rem auto 10rem auto;
                width: 400px;
            }
            </style>
            <style>
                body{
                    background-image:url('');
                }
            </style>
         <div id="card">
             <main class="form-signin">
                 </style>
                 <h1 class="h3 mb-3 fw-normal text-center fw-bold ">Please Login Admin</h1> 
                 <center>
                     <img src="/img/login.png" class="rounded-circle" alt="...">
                    </center>
                    <br>
                    <form action="/login" method="post">
                        @csrf
                        <!-- <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">-->
                        
                        <div class="form-floating">
                                    <input type="email" name="email" class="form-control @error ('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required  value="{{ old('email') }}">
                                    <label for="email">Email address</label>
                                    @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                    @if(session()->has('loginerror'))
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        {{ session('loginerror')}}
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                @endif
                                </div>
                                <div class="form-floating">
                                    <input type="password" name="password"class="form-control" id="password" placeholder="Password" required>
                                    <label for="password">Password</label>
                                </div>
                                
                                <div class="checkbox mb-3">
                                    <label>
                                        <input type="checkbox" value="remember-me"> Remember me
                                    </label>
                                </div>
                                <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
                        </form>
                        <small class="d-block text-center mt-3">Not Registered? <a href="/daftar">Register Now!</a></small>
                        <p class="mt-3 mb-2 text-muted text-center">&copy; 2022–2023</p>
                    </main>
                </div>
            </div>
        </div>
    </body>
  </html>