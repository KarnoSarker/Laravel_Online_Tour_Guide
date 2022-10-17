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

    <style type="text/css">
        @media screen and (min-width: 850px) {
        .filter{ padding-left: 120px; }
        .xline{ margin-right: 100px; }
    }

    </style>
</head>

<body>

<div>
        <nav class="navbar navbar-light navbar-expand-lg fixed-top" style="background-color: #282d32;padding-top: 4px;padding-bottom: 4px;padding-left: 10px;padding-right: 16px;">
            <div class="container-fluid"><a class="navbar-brand" href="{{route('index.all')}}" style="background-image: url(&quot;assets/img/logo.png&quot;);background-repeat: no-repeat;background-size: cover;background-position: center;height: 36px;width: 173px;padding-top: 2px;padding-bottom: 3px;"></a>
                <button
                    class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><i class="fa fa-bars" style="color: #ffffff;font-size: 22px;"></i></button>
                    <div class="collapse navbar-collapse" id="navcol-1">
                        
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
 









    <div class="page-content-wrapper" style="min-height: 450px;">
            
<div id="insert_here" style="margin-top: 80px;">
                            


        <div id="id_admin_modify_post_search" class="filter" style="margin: 5px;margin-bottom: 50px;">
            <form method="post">
                {{ csrf_field() }}

                <div class="form-row" id="id_admin_modify_post_catrgory" style="margin-right: 0px;margin-left: 0px;margin-top: 0px;margin-bottom: 0px;">

            <div class="col-12 d-flex col-sm-12 col-md-3" style="margin-top: 7px;margin-bottom: 7px;">

                <div class="form-group d-flex" ><label style="margin-right: 8px;margin-top: 5px;min-width: 72px;">Division:&nbsp;</label><select class="form-control" name="division" style="max-width: 100px;min-width: 100px;width: 90px;padding-right: 5px;padding-left: 5px;"><option  value=""></option><option value="Dhaka">Dhaka</option><option value="Chittagong">Chittagong</option><option value="Rajshahi">Rajshahi</option><option value="Khulna">Khulna</option><option value="Barishal">Barishal</option><option value="Sylhet">Sylhet</option><option value="Rangpur">Rangpur</option><option value="Mymensingh">Mymensingh</option></select></div>
            </div>

            <div class="col-12 d-flex col-sm-12 col-md-3" style="margin-top: 7px;margin-bottom: 7px;">

                <div class="form-group d-flex" ><label style="margin-right: 8px;margin-top: 5px;min-width: 72px;">District:&nbsp;</label><select class="form-control" name="district" style="max-width: 100px;min-width: 100px;width: 90px;padding-right: 5px;padding-left: 5px;"><option  value=""></option>
                     @foreach ($district as $dist)
                        <option value="{{ $dist->district_name }}">{{ $dist->district_name }}</option>
                    @endforeach
                </select></div>
            </div>   
                

            <div class="col-12 d-flex col-sm-12 col-md-3" style="margin-top: 7px;margin-bottom: 7px;">

                <div class="form-group d-flex" ><label style="margin-right: 8px;margin-top: 5px;min-width: 72px;">Category:&nbsp;</label><select class="form-control" name="category"  style="max-width: 100px;min-width: 100px;width: 90px;padding-right: 5px;padding-left: 5px;"><option value=""></option><option value="Natural">Natural</option><option value="Historical">Historical</option><option value="Artificial">Artificial</option></select></div>
            </div>

            <div class="col-12 d-flex justify-content-center col-sm-12 col-md-3" style="margin-top: 7px;margin-bottom: 7px;max-width: 200px;min-width: 200px;"><button class="btn btn-primary" type="submit" style="background-color: rgb(5,55,108);margin-right: 5px;width: 55px;height: 40px;">Go</button>
            </div>

            </div>

                <div class="form-row" id="id_admin_modify_post_line" style="margin-right: 0px;margin-left: 0px;margin-top: 0px;margin-bottom: 0px;">
                    <div class="col xline" style="margin-top: 10px;margin-bottom: 10px;">
                        <div style="height: 2px;background-color: rgb(5,55,108);margin-right: 5px;margin-left: 5px;"></div>
                    </div>
                </div>
               
            </form>
        </div>









     @if(session('post_edited') != null)
            <div class="alert alert-success alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Success!</strong> Post edited successfully!!
            </div>
        @endif
                    
        @if(session('post_deleted') != null)
            <div class="alert alert-success alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Success!</strong> Post deleted successfully!!
            </div>
        @endif




    @foreach($postList as $post)
    <div id="find_nearest_post_list" style="background-color: rgb(7,55,108);margin-top: 8px;margin-bottom: 8px;">
        

         
        <div class="row cls_find_nearest_post_list_row" style="margin-right: 0px;">
            <div class="col-12 d-lg-flex col-sm-10">
               <div style="margin-top: 4px;margin-bottom: 4px;margin-left: 10px;margin-right: 5px;color: rgb(255,255,255);font-size: 17px;min-width: 20px;">{{$post->id}}</div>

                <div style="margin-top: 4px;margin-bottom: 4px;margin-left: 10px;margin-right: 5px;color: rgb(255,255,255);min-width: 200px;"><a role="button" data-bs-hover-animate="pulse" href="{{route('post.index',[$post->id])}}" style="color: white;font-size: 17px;">{{substr($post->name_bangla, 0, 50)}}</a></div>
                <div style="margin-top: 4px;margin-bottom: 4px;margin-left: 10px;margin-right: 5px;color: rgb(255,255,255);font-size: 17px;min-width: 150px;">{{$post->district}}</div>
                <div style="margin-top: 4px;margin-bottom: 4px;margin-left: 10px;margin-right: 5px;color: rgb(255,255,255);font-size: 17px;min-width: 150px;">{{$post->division}}</div>
            </div>

            

            <div class="col-12 d-flex justify-content-between col-sm-2">
          
               <div style="padding: 3px;padding-left: 10px;"><a class="btn btn-primary d-inline-block route_button" role="button" data-bs-hover-animate="pulse" href="{{route('admin.editPost',[$post->id])}}" style="height: 28px;padding-top: 0px;padding-bottom: 0px;margin-top: 3px;margin-bottom: 2px;margin-right: 15px;margin-left: 10px;background-color: rgb(255,255,255);color: rgb(7,55,108);">Edit</a><a class="btn btn-primary d-inline-block route_button" role="button" data-bs-hover-animate="pulse" href="{{route('admin.deleteMainPost',[$post->id])}}" style="height: 28px;padding-top: 0px;padding-bottom: 0px;margin-top: 3px;margin-bottom: 2px;margin-right: 15px;margin-left: 10px;background-color: rgb(255,255,255);color: rgb(7,55,108);">Delete</a></div>

            </div>
        </div>
       


    </div>
 @endforeach

    <div style="margin-left: 40%;">{{ $postList->links() }} </div>




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