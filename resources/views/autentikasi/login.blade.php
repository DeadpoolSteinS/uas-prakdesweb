<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>


    <link rel="stylesheet" href={{ asset('css/style.css')}}>
    <link rel="stylesheet" href={{ asset('css/style_daftar.css')}}>
    

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,300;0,400;0,600;0,700;1,100&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300;400;500;700&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


</head>
<body>

<div class="container-wrapper">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 md-3">
                <div class="jumbotron vertical-center ">
                    <div class="container container-login">
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-10">
                                <center>
                                    <h2>Welcome Back, <span style="color: #05595B;" >Dude</span></h2>
    
                                </center>
                                <form action="/proses-login" method="post" >
                                @csrf
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-input">
                                                <label class="form-label" for="username">Username or Email</label>
                                                <input type="text" id="email" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror">
                                                @error('username')
                                                <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
    
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-input">
                                                <label class="form-label" for="password">Password</label>
                                                <input type="password" id="password" name="password" value="{{ old('password') }}" class="form-control @error('password') is-invalid @enderror">
                                                @error('password')
                                                <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
    
                                    </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <center>
                                            <input type="submit" name="" value="Masuk" placeholder="Masuk" class="btn-darkgreen" id="">
                                            <p style="margin-bottom: 0;">Belum punya akun?</p>
                                            <a href="/daftar" class="masuk-di-sini">Daftar Di Sini</a>
                                        </center>
                                    </div>
                                </div>
                                
                            </form>
    
                            </div>
                        </div>
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>