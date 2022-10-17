<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Contact | bdtourinfo</title>
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fonts/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fonts/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bdtourinfo_footer_v1.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bdtourinfo_slide_menu_v1.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bdtourinfo_user_navbar_v1.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="{{asset('assets/css/bdtourinfo_post_list_v1-1.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bdtourinfo_post_list_v1.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bdtourinfo_contact_form_v1.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bdtourinfo_about_us.css')}}">
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
                            <div class="input-group"><input class="form-control" type="text" placeholder="Search" aria-describedby="basic-addon1" style="padding-top: 3px;padding-bottom: 3px;height: 27px;padding-left: 11px;"><button class="btn btn-info" type="button" data-bs-hover-animate="wobble"
                                    style="height: 29px;width: 27px;background-color: rgb(40,45,50);padding-right: 5px;padding-left: 5px;padding-top: 3px;padding-bottom: 3px;border: 0px;"><i class="fa fa-search" style="font-size: 20px;"></i></button></div>
                        </form>
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item" role="presentation"><a class="nav-link active" href="{{route('index.all')}}" data-bs-hover-animate="pulse" style="color: #ffffff;font-size: 16px;padding-top: 5px;padding-left: 5px;margin-left: 3px;margin-right: 3px;">All Posts</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="{{route('feature.nearestPlaces')}}" data-bs-hover-animate="pulse" style="color: #ffffff;font-size: 16px;padding-top: 5px;padding-bottom: 5px;margin-left: 3px;margin-right: 3px;">Nearest Places</a></li>
                            <li class="nav-item"
                                role="presentation"><a class="nav-link" href="{{route('feature.create')}}" data-bs-hover-animate="pulse" style="color: #ffffff;font-size: 16px;padding-top: 5px;padding-bottom: 5px;margin-right: 0px;margin-left: 4px;">Create Posts</a></li>
                        </ul>
                    </div>
            </div>
        </nav>
    </div>
    <div id="wrapper" style="margin-top: 50px;">
        <div id="sidebar-wrapper" style="background-color: rgb(40,45,50),margin-top: 2px;">
            <ul class="sidebar-nav" style="width: 150px;">
                <li class="sidebar-brand" style="width: 150px;"> <a href="#" data-bs-hover-animate="bounce" style="width: 148px;color: rgb(255,255,255);font-size: 21px;">Divisions</a></li>
                <li> <a href="{{route('index.all')}}" data-bs-hover-animate="pulse" style="width: 150px;color: rgb(255,255,255);">All Division</a><a href="{{route('index.dhaka')}}" data-bs-hover-animate="pulse" style="width: 150px;color: rgb(255,255,255);">Dhaka</a></li>
                <li> <a href="{{route('index.chittagong')}}" data-bs-hover-animate="pulse" style="width: 150px;color: rgb(255,251,251);">Chittagong</a></li>
                <li> <a href="{{route('index.rajshahi')}}" data-bs-hover-animate="pulse" style="width: 150px;color: rgb(255,255,255);">Rajshahi</a><a href="{{route('index.khulna')}}" data-bs-hover-animate="pulse" style="width: 150px;color: rgb(255,255,255);">Khulna</a><a href="{{route('index.barishal')}}" data-bs-hover-animate="pulse" style="width: 150px;color: rgb(255,255,255);">Barishal</a><a href="{{route('index.sylhet')}}" data-bs-hover-animate="pulse" style="width: 150px;color: rgb(255,255,255);">Sylhet</a><a href="{{route('index.rangpur')}}" data-bs-hover-animate="pulse" style="width: 150px;color: rgb(255,255,255);">Rangpur</a>
                    <a
                        href="{{route('index.mymensingh')}}" data-bs-hover-animate="pulse" style="width: 150px;color: rgb(255,255,255);">Mymensingh</a>
                </li>
            </ul>
        </div>
        <div class="page-content-wrapper">
 

            <div class="container-fluid" style="padding-right: 0px;padding-left: 12px;"><a class="btn btn-link" role="button" href="#menu-toggle" id="menu-toggle" style="color: rgb(59,53,53);"><i class="fa fa-bars" style="color: rgb(72,37,19);"></i></a>
                <div class="row">
                    <div class="col-md-12">
                        <div id="insert_here">
                            


                                <section id="contact" style="padding: 40px;padding-right: 5px;padding-left: 5px;padding-top: 10px;padding-bottom: 10px;">
        <div class="container d-flex justify-content-center" style="padding-right: 0px;padding-left: 0px;">
            <form class="align-content-center" id="contactForm" style="padding: 0px;max-width: 501px;padding-right: 0px;padding-left: 0px;background-color: #f1f7fc;padding-top: 0px;padding-bottom: 0px;" data-bss-recipient="abc9ee1ba19eb66a5befbe87c99c61bc">
                <div class="form-row" style="margin-left: 0px;margin-right: 0px;padding: 10px;background-color: #f1f7fc;">
                    <div class="col-12 col-md-6" id="message" style="padding-right: 20px;padding-left: 20px;min-width: 100%;">
                        <fieldset></fieldset>
                        <div class="form-group has-feedback"><label for="from_name">Name</label><input class="form-control" type="text" name="name" required="" placeholder="Name" minlength="2" id="from_name" tabindex="-1"></div>
                        <div class="form-group has-feedback" style="max-width: 64px;"><label for="from_email">Email</label><input class="form-control" type="email" name="email" required="" placeholder="Email" id="from_email" style="width: 361px;"></div>
                        <div class="form-row">
                            <div class="col-sm-6">
                                <div class="form-group has-feedback"><label for="from_phone">Title</label><input class="form-control" type="text" name="title" required="" placeholder="Title" minlength="2" id="from_phone"></div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group"><label for="calltime">Type</label><select class="form-control" name="Type" value="Type" required="" id="calltime"><option value="suggestion">Suggestion</option><option value="query">Query</option><option value="advertisement">Advertisement</option></select></div>
                            </div>
                        </div>
                        <div class="form-group"><label for="comments">Description</label><textarea class="form-control" rows="5" spellcheck="true" name="description" placeholder="Type Your Description" id="comments"></textarea></div>
                        <div class="form-group"><button class="btn btn-primary active btn-block" type="submit" data-bs-hover-animate="pulse" style="background-color: #07376c;">Send <i class="fa fa-chevron-circle-right"></i></button></div>
                        <hr>
                    </div>
                </div>
            </form>
        </div>
    </section>




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
    <script src="{{asset('assets/js/smart-forms.min.js')}}"></script>
    <script src="{{asset('assets/js/bs-animation.js')}}"></script>
</body>

</html>