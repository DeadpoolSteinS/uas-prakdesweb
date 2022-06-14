<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar</title>

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
            <div class="col-md-6">
                <div class="jumbotron vertical-center">

                    <div class="container">
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-10">
                                <center>
                                    <h2>Selamat Bergabung, <span style="color: #05595B;" >Dude</span></h2>
    
                                </center>
                                <form action="/proses-registrasi" method="post" >
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-input">
                                            <label class="form-label" for="nama">Nama Lengkap</label>
                                            <input type="text" id="nama" name="nama" value="{{ old('nama') }}" class="form-control @error('nama') is-invalid @enderror">
                                            @error('nama')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-input">
                                            <label class="form-label" for="tanggal_lahir">Tanggal Lahir</label>
                                            <input type="date" id="tanggal_lahir" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}" class="form-control @error('tanggal_lahir') is-invalid @enderror">
                                            @error('tanggal_lahir')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-input">
                                                <label class="form-label" for="username">Username</label>
                                                <input type="text" id="username" name="username" value="{{ old('username') }}" class="form-control @error('username') is-invalid @enderror">
                                                @error('username')
                                                <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-input">
                                                <label class="form-label" for="email">Email</label>
                                                <input type="text" id="email" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror">
                                                @error('email')
                                                <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                        </div>
                                    </div>
                                </div>
    
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-input">
                                                <label class="form-label" for="katasandi">Kata Sandi</label>
                                                <input type="password" id="katasandi" name="katasandi" value="{{ old('katasandi') }}" class="form-control @error('password') is-invalid @enderror">
                                                @error('katasandi')
                                                <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-input">
                                                <label class="form-label" for="v_katasandi">Verifikasi Kata Sandi</label>
                                                <input type="password" id="v_katasandi" name="v_katasandi" value="{{ old('v_katasandi') }}" class="form-control @error('v_password') is-invalid @enderror">
                                                @error('v_katasandi')
                                                <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <center>
                                            <input type="submit" value="Daftar" name="" placeholder="Daftar" class="btn-darkgreen" id="">
                                            <p class="login-ask">Sudah punya akun?</p>
                                            <a href="/login" class="masuk-di-sini">Masuk Di Sini</a>
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