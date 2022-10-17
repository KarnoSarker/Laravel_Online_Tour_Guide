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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="{{asset('assets/css/bd_tour_info_admin_navbar_v1.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bdtourinfo_admin_panel_button_v1.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}">
</head>

<body>

<div>
        <nav class="navbar navbar-light navbar-expand-lg fixed-top" style="background-color: #282d32;padding-top: 4px;padding-bottom: 4px;padding-left: 10px;padding-right: 16px;">
            <div class="container-fluid"><a class="navbar-brand" href="{{route('index.all')}}" style="background-image: url(&quot;assets/img/logo.png&quot;);background-repeat: no-repeat;background-size: cover;background-position: center;height: 36px;width: 173px;padding-top: 2px;padding-bottom: 3px;"></a>
                <button
                    class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><i class="fa fa-bars" style="color: #ffffff;font-size: 22px;"></i></button>
                    <div class="collapse navbar-collapse" id="navcol-1">
                        <form class="form-inline mx-auto navbar-left cls_nav_search">
                            <div class="input-group"></div>
                        </form>
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item" role="presentation"><a class="nav-link active" href="{{route('admin.index')}}" data-bs-hover-animate="pulse" style="color: #ffffff;font-size: 16px;padding-top: 5px;padding-left: 5px;margin-left: 3px;margin-right: 3px;">Home</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="{{route('admin.changePassword')}}" data-bs-hover-animate="pulse" style="color: #ffffff;font-size: 16px;padding-top: 5px;padding-bottom: 5px;margin-left: 3px;margin-right: 3px;">Settings</a></li>
                            <li class="nav-item"
                                role="presentation"><a class="nav-link" href="{{route('logout.index')}}" data-bs-hover-animate="pulse" style="color: #ffffff;font-size: 16px;padding-top: 5px;padding-bottom: 5px;margin-right: 0px;margin-left: 4px;">Logout</a></li>
                        </ul>
                    </div>
            </div>
        </nav>
    </div>
    <div class="d-flex flex-row justify-content-center" style="margin-top: 70px;margin-bottom: 10px;margin-right: 3px;margin-left: 3px;min-height: 400px;">
        <div class="row d-flex align-items-center align-content-center" style="min-height: 200px;">
            <div class="col-12 d-flex justify-content-center col-sm-12 col-md-4">
                <div class="d-flex flex-column justify-content-center align-items-center cls_admin_button_div">
                    <p style="margin-bottom: 10px;margin-right: -101px;width:23px;height:23px;margin-top: 0px;padding-left:6px;font-size: 18px;color: white; background-color: rgb(66,103,178); border-radius: 50%">{{$postCount}}</p><a class="btn btn-primary btn-block d-flex flex-column justify-content-center align-items-center icon-button" role="button" href="{{route('admin.reviewList')}}" data-bs-hover-animate="pulse" style="background-color: rgb(14,58,105);"><i class="fa fa-eye d-flex" style="font-size: 26px;"></i><span class="d-flex">Review Post</span></a></div>
            </div>

            

            <div class="col-12 d-flex justify-content-center col-sm-12 col-md-4">
                <div class="d-flex flex-column justify-content-center align-items-center cls_admin_button_div"><a class="btn btn-primary btn-block d-flex flex-column justify-content-center align-items-center icon-button" role="button" href="{{route('admin.managePost')}}" data-bs-hover-animate="pulse" style="background-color: rgb(14,58,105);margin-top: 4px;"><i class="fa fa-eye d-flex" style="font-size: 26px;"></i><span class="d-flex">Manage Post</span></a></div>
            </div>
            <div class="col-12 d-flex justify-content-center col-sm-12 col-md-4">
                <div class="d-flex flex-column justify-content-center align-items-center cls_admin_button_div"><a class="btn btn-primary btn-block d-flex flex-column justify-content-center align-items-center icon-button" role="button" href="{{route('admin.createPost')}}" data-bs-hover-animate="pulse" style="background-color: rgb(14,58,105);margin-top: 4px;"><i class="fa fa-eye d-flex" style="font-size: 26px;"></i><span class="d-flex">Create Post</span></a></div>
            </div>
        </div>
    </div>

   
       <div class="footer-basic cls_footer" style="height: 105px;margin-top: 6%;color: rgb(255,255,255);">
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
    <script src="{{asset('assets/js/bdtourinfo_admin_navbar_v1.js')}}"></script>
    <script src="{{asset('assets/js/bs-animation.js')}}"></script>
</body>

</html>