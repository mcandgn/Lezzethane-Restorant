
<!DOCTYPE html>
<html lang="tr">
<head>
<title>Lezzethane-Üye Ol</title>
<meta charset="utf-8">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:700,400' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Yesteryear' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="assets/css/login.css" >
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
</head>
<body>
<div id="main-wrapper" class="container">
    <div class="row justify-content-center">
        <div class="col-xl-10">
            <div class="card border-0">
                <div class="card-body p-0">
                    <div class="row no-gutters">
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="mb-5">
                                    <h3 class="h4 font-weight-bold text-theme">Kayıt ol</h3>
                                </div>

                                <h6 class="h5 mb-0">Hoş Geldiniz!</h6>
                                <p class="text-muted mt-2 mb-5">Aşağıdaki Formdan Üye Olabilirsiniz.</p>
                                @if(isset($error))
                                <p class="alert alert-danger">{{$error}}</p>
                                @endif
                                @if (session('alert'))
                                <div class="alert alert-danger">
                                {{ session('alert') }}
                                </div>
                                
                                @endif
                                @if(session('success'))
                                <div class="alert alert-success">session('success')</div>
                                @endif
                                <form action="{{route('register-post')}}" method="POST" >
                                    @csrf
                                <div class="form-group ">
                                            <label for="exampleInputPassword1">Kullanıcı Adı</label>
                                            <input type="text" name="name" class="form-control" id="exampleInputPassword1">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">E-mail adres</label>
                                            <input type="email" name="email" class="form-control" id="exampleInputEmail1">
                                        </div>
                                        <div class="form-group mb-5">
                                            <label for="exampleInputPassword1">Şifre</label>
                                            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                                        </div>
                                        
                                        
                                        <button type="submit" class="btn btn-danger">Kayıt Ol</button>
                                    </form>
                            </div>
                        </div>

                        <div class="col-lg-6 d-none d-lg-inline-block">
                            <div class="account-block rounded-right">
                                <div class="overlay rounded-right"></div>
                                <div class="account-testimonial">
                                    <h4 class="text-white mb-4 baslik">Lezzethane</h4>
                                    <p class="lead text-white">"Bugün harika bir deneyim yaşayın"</p>
                                    <p>- Mehmet Can DOĞAN</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- end card-body -->
            </div>
            <!-- end card -->

            <p class="text-muted text-center mt-3 mb-0">Giriş Yapmak İçin -> <a href="{{route('login')}}" class="text-primary ml-1">Giriş</a></p>

            <!-- end row -->

        </div>
        <!-- end col -->
    </div>
    <!-- Row -->
</div>


</body>
</html>