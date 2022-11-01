<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Log-In</title>
        <link rel="stylesheet" href="assets/css/login.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <link rel="stylesheet" href="assets/css/all.min.css">
    </head>
    <body>
        <section class="section py-5">
            
            <section class="container-fluid sign_in_section">
                
                
                <div class="row py-5">
                    <div class="col-lg-4"></div>
                    <div class="col-lg-4">
                        <div class="text-center sign_in_heading my-4">
                            <h2 class="text-center"> Login</h2>
                            <p>Not have an account? <a href="{{ route('register') }}">Register Here</a>.</p>
                            <img src="assets/image/Line 15.png" class="w-100" alt="">
                        </div>
                        <div class="form">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group py-2">
                                    <label for="" class="my-2">E-MAIL</label>
                                    <div class="input-group">
                                        
                                        <div class="input-group-prepend">
                                            <div class="input-group-text p-0 m-0"><img src="assets/image/Group 1920.png" class="img-fluid" alt="">
                                            </div>
                                        </div>
                                        <input type="email" class="form-control sign_in_input @error('email') is-invalid @enderror" id="inlineFormInputGroupUsername2" name="email" value="{{ old('email') }}" placeholder="Enter Email">
                                    </div>
                                </div>
                                @error('email')
                                <div class="alert alert-warning p-2">
                                    <strong>{{ $message }}</strong>
                                </div>
                                {{-- <span class="invalid-feedback text-warning" role="alert">
                                    --}}
                                </span>
                                @enderror
                                
                                <div class="form-group py-2">
                                    <label for="" class="my-2">PASSWORD</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text p-0 m-0"><img src="assets/image/Group 1921.png" class="img-fluid" alt="">
                                            </div>
                                        </div>
                                        <input type="password" name="password" class="form-control sign_in_input @error('password') is-invalid @enderror" id="inlineFormInputGroupUsername2" placeholder="Enter Password">
                                    </div>
                                </div>
                                @error('password')
                                {{-- <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span> --}}
                                <div class="alert alert-warning p-2">
                                    <strong>{{ $message }}</strong>
                                </div>
                                @enderror
                                
                                
                                
                                <div class="button my-4">
                                    <input type="submit" class="px-4 py-1" value="Login">
                                </div>
                                
                            </form>
                        </div>
                        
                    </div>
                    <div class="col-lg-2"></div>
                    <div class="col-lg-2 sign_in_custom_image pl-3">
                        <img src="assets/image/Picture1.png" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="last_para mt-5">
                    <p>
                        Copyright@ 2022 KUET TexBot | All Rights Reserved
                    </p>
                </div>
                
            </section>
        </section>
        
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
        <script src="assets/js/all.min.js"></script>
    </body>
</html>