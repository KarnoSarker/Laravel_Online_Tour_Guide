<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home | bdtourinfo</title>
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fonts/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fonts/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bdtourinfo_footer_v1.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bdtourinfo_slide_menu_v1.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bdtourinfo_user_navbar_v1.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="{{asset('assets/css/bdtourinfo_post_list_v1-1.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bdtourinfo_post_list_v1.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bdtourinfo_login_form_v1.css')}}">
</head>

<body>
    <div>
       <nav class="navbar navbar-light navbar-expand-lg fixed-top" style="background-color: #282d32;padding-top: 4px;padding-bottom: 4px;padding-left: 10px;padding-right: 16px;">
            <div class="container-fluid"><a class="navbar-brand" href="/index" style="background-image: url(&quot;assets/img/logo.png&quot;);background-repeat: no-repeat;background-size: cover;background-position: center;height: 36px;width: 173px;padding-top: 2px;padding-bottom: 3px;"></a>
                <button
                    class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><i class="fa fa-bars" style="color: #ffffff;font-size: 22px;"></i></button>
                    <div class="collapse navbar-collapse" id="navcol-1">
                        <form class="form-inline mx-auto navbar-left cls_nav_search">
                            <div class="input-group"><input class="form-control" type="text" placeholder="খুঁজুন" aria-describedby="basic-addon1" style="padding-top: 3px;padding-bottom: 3px;height: 27px;padding-left: 11px;"><button class="btn btn-info" type="button" data-bs-hover-animate="wobble"
                                    style="height: 29px;width: 27px;background-color: rgb(40,45,50);padding-right: 5px;padding-left: 5px;padding-top: 3px;padding-bottom: 3px;border: 0px;"><i class="fa fa-search" style="font-size: 20px;"></i></button></div>
                        </form>
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item" role="presentation"><a class="nav-link active" href="/index" data-bs-hover-animate="pulse" style="color: #ffffff;font-size: 16px;padding-top: 5px;padding-left: 5px;margin-left: 3px;margin-right: 3px;">তথ্য ভাণ্ডার</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="/find_nearest_place" data-bs-hover-animate="pulse" style="color: #ffffff;font-size: 16px;padding-top: 5px;padding-bottom: 5px;margin-left: 3px;margin-right: 3px;">নিকটবর্তী স্থান খুঁজুন</a></li>
                            <li class="nav-item"
                                role="presentation"><a class="nav-link" href="/create_post" data-bs-hover-animate="pulse" style="color: #ffffff;font-size: 16px;padding-top: 5px;padding-bottom: 5px;margin-right: 0px;margin-left: 4px;">তথ্য যোগ করুন</a></li>
                        </ul>
                    </div>
            </div>
        </nav>
    </div>
    <div style="margin-top: 50px;">
        

            

            <div class="container-fluid" style="padding-right: 0px;padding-left: 12px;">
                <div class="row">
                    <div class="col-md-12">
                        <div id="insert_here">
                            
           
               @if(session('message') != null)
                 <div class="alert alert-danger alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                     <strong>Warning!</strong> Invalid Username or Password!!
                 </div>
                @endif
           
            
                    @if($errors->any())
                @foreach($errors->all() as $err)
                <div class="alert alert-danger alert-dismissible" style="padding: 5px;margin-bottom: 5px;">
                <a href="#" class="close" data-dismiss="alert" aria-label="close" style="padding: 2px;">&times;</a>
                {{$err}} <br>
                </div>
                @endforeach
            @endif

                <div class="register-photo">
                 <div class="form-container" style="max-width: 500px;">
                    <form method="post">
                        {{ csrf_field() }}
                        <h2 class="text-center"><strong>Login </strong>into account.</h2>
                        <div class="form-group"><input class="form-control" type="email" value="{{old('email')}}" required="" name="email"  placeholder="Email" autofocus="" ></div>
                        <div class="form-group"><input class="form-control" type="password" name="password"  placeholder="Password" maxlength="20" minlength="4" ></div>
                        <div class="form-group">
                            
                        </div>
                        <div class="form-group"><button class="btn btn-primary btn-block" type="submit" style="background-color: rgb(7,55,108);">Login</button></div><a href="#" class="already">Forget Your Password? Click Here</a></form>
                </div>
            </div>


                        </div>
                    </div>
                </div>
            </div>
     
    </div>
   
       <div class="footer-basic cls_footer" style="height: 105px;color: rgb(255,255,255);">
        <footer>
            <div class="social cls_social" style="padding-bottom: 0px;color: rgb(40,45,50);height: 42px;margin-top: 0px;margin-bottom: 16px;"><a href="https://plus.google.com/u/0/115558606805686636031" target="_blank" data-bs-hover-animate="swing" style="color: rgb(40,45,50);"><i class="icon ion-social-google"></i></a><a href="www.twitter.com/ssarkerkarno" target="_blank" data-bs-hover-animate="swing"
                    style="color: rgb(40,45,50);"><i class="icon ion-social-twitter"></i></a><a href="https://www.facebook.com/tonmoy.asif" target="_blank" data-bs-hover-animate="swing" style="color: rgb(40,45,50);"><i class="icon ion-social-facebook"></i></a></div>
            <ul
                class="list-inline d-flex flex-row flex-grow-1 flex-shrink-1 justify-content-center align-items-center align-content-center flex-wrap" style="height: 26px;margin-top: 10px;">
                <li class="list-inline-item" data-bs-hover-animate="swing"><a href="{{route('index.all')}}" data-bs-hover-animate="bounce" style="color: rgb(40,45,50);">Home</a></li>
                <li class="list-inline-item" data-bs-hover-animate="swing"><a href="{{route('footer.contactUs')}}" style="color: rgb(40,45,50);">Contact</a></li>
                <li class="list-inline-item" data-bs-hover-animate="swing"><a href="{{route('footer.aboutUs')}}" style="color: rgb(40,45,50);">About Us</a></li>
                <li class="list-inline-item" data-bs-hover-animate="swing"><a href="{{route('footer.advertise')}}" style="color: rgb(40,45,50);">Advertisement</a></li>
                <li class="list-inline-item" data-bs-hover-animate="swing"><a class="d-flex" href="{{route('index.all')}}" style="color: rgb(40,45,50);font-size: 17px;">bdtourinfo © 2018<br></a></li>
            </ul>
        </footer>
    </div>
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/bdtourinfo_slide_menu_v1.js')}}"></script>
    <script src="{{asset('assets/js/bdtourinfo_user_navbar_v1.js')}}"></script>
    <script src="{{asset('assets/js/bs-animation.js')}}"></script>
</body>

</html>