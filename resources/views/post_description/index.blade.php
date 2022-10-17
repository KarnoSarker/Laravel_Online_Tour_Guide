<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Post Description | bdtourinfo</title>

    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fonts/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fonts/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bdtourinfo_footer_v1.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bdtourinfo_slide_menu_v1.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bdtourinfo_user_navbar_v1.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="{{asset('assets/css/bdtourinfo_post_list_v1-1.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bdtourinfo_post_list_v1.csss')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bdtourinfo_post_images_v1.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}">

</head>

<body>
    <div>
       <nav class="navbar navbar-light navbar-expand-lg fixed-top" style="background-color: #282d32;padding-top: 4px;padding-bottom: 4px;padding-left: 10px;padding-right: 16px;">
            <div class="container-fluid"><a class="navbar-brand" href="{{route('index.all')}}" style="background-image: url('{{asset('assets/img/logo.png')}}');background-repeat: no-repeat;background-size: cover;background-position: center;height: 36px;width: 173px;padding-top: 2px;padding-bottom: 3px;"></a>
                <button
                    class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><i class="fa fa-bars" style="color: #ffffff;font-size: 22px;"></i></button>
                    <div class="collapse navbar-collapse" id="navcol-1">
                         <form method="post" class="form-inline mx-auto navbar-left cls_nav_search">
                            {{ csrf_field() }}
                            <div class="input-group">

                               <input class="form-control " name="searchField" id="searchField" type="text" placeholder="Search" autocomplete="off" spellcheck="false" aria-describedby="basic-addon1" style="padding-top: 3px;padding-bottom: 3px;height: 27px;padding-left: 11px;">
                              
                               <div id="searchList" class="overlay"></div>
                               
                             </div>
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
                            

                    





                             <div id="post_description_page" style="margin-left: 5px;margin-right: 5px;margin-top: 5px;margin-bottom: 5px;">
        <h2 class="text-center" id="id_post_description" style="padding-top: 3px;padding-bottom: 3px;padding-left: 10px;padding-right: 10px;margin-top: 10px;"> {{$postDescription[0]->name_english}} </h2>
        <div class="row" id="id_post_description_info_row">
            <div class="col col-md-9" id="id_post_description_info__column">
                <div>
                    <div class="row" style="margin-top: 5px;margin-bottom: 5px;">
                        <div class="col-12 col-md-6" id="id_post_description_info_district_column">
                            <div class="d-flex">
                                <h5 style="margin-right: 5px;font-style: oblique;color: rgb(33,37,41);">District:</h5>
                                <h5 class="text-dark" style="margin-left: 5px;font-size: 20px;font-weight: normal;"> {{$postDescription[0]->district}} </h5>
                            </div>
                        </div>
                        <div class="col-12 col-md-6" id="id_post_description_info_division_column">
                            <div class="d-flex">
                                <h5 style="margin-right: 5px;font-style: oblique;">Division:</h5>
                                <h5 class="text-dark" style="margin-left: 5px;font-weight: normal;"> {{$postDescription[0]->division}} </h5>
                            </div>
                        </div>
                    </div>
                    <div class="row" id="id_post_description_info_category_row" style="margin-top: 5px;margin-bottom: 5px;">
                        <div class="col" id="id_post_description_info_category_column">
                            <div>
                                <div class="row" id="id_post_description_info_category_sub_row">
                                    <div class="col-12 col-md-2" id="id_post_description_info_category_title_column" style="min-width: 104px;max-width: 108px;">
                                        <h5 style="font-style: oblique;">Category:</h5>
                                    </div>
                                    <div class="col-12 col-md-10" id="id_post_description_info_category_data_column">
                                        <h5 class="text-dark" style="font-weight: normal;"> {{$postDescription[0]->category}} </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3" id="id_post_description_info_button_column" style="padding-left: 17px;">
                <div style="padding: 4px;padding-left: 10px;"><a class="btn btn-primary" role="button" href="{{route('post.howToGo',[$postDescription[0]->id])}}" style="height: 30px;padding-top: 2px;background-color: rgb(7,55,108);">View Map</a></div>

                <div style="padding: 4px;padding-left: 10px;"><a class="btn btn-primary" role="button" href="#" style="height: 30px;padding-top: 1px;background-color: rgb(7,55,108);">View Nearest Places</a></div>
            </div>
        </div>
        <div class="row" id="id_post_description_description_row" style="margin-top: 5px;margin-bottom: 5px;">
            <div class="col-12 col-md-2" id="id_post_description_description_title_column" style="min-width: 135px;">
                <h5 style="padding-top: 0px;padding-bottom: 0px;margin-top: 5px;margin-bottom: 13px;font-style: oblique;">Description:</h5>
            </div>
            <div class="col-12 col-md-10" id="id_post_description_description_data_column">
                <p style="margin-bottom: 13px;margin-left: 6px;margin-top: 5px;"> {{$postDescription[0]->description}}</p>
            </div>
        </div>
        <div class="row" id="id_post_description_direction_row" style="margin-top: 5px;margin-bottom: 5px;">
            <div class="col-12 col-md-2" id="id_post_description_direction_title_column" style="min-width: 139px;">
                <h5 style="padding-top: 0px;padding-bottom: 0px;margin-top: 5px;margin-bottom: 13px;font-style: oblique;">Direction:</h5>
            </div>
            <div class="col-12 col-md-10" id="id_post_description_direction_data_column">
                <p style="margin-bottom: 13px;margin-left: 6px;margin-top: 5px;"> {{$postDescription[0]->direction}}</p>
            </div>
        </div>
        <div class="row" id="id_post_description_author_row" style="margin-top: 5px;margin-bottom: 5px;">
            <div class="col-12 col-md-2" id="id_post_description_author_title_column" style="min-width: 135px;">
                <h5 style="padding-top: 0px;padding-bottom: 0px;margin-top: 5px;margin-bottom: 13px;font-style: oblique;">Author:</h5>
            </div>
            <div class="col-12 col-md-10" id="id_post_description_author_data_column">
                <p style="margin-bottom: 13px;margin-left: 6px;margin-top: 5px;"> {{$postDescription[0]->source}} </p>
            </div>
        </div>
        <div class="row" id="id_post_description_image_row" style="margin-top: 5px;margin-bottom: 5px;">
            <div class="col-12 col-md-2" id="id_post_description_image_title_column" style="min-width: 135px;">
                <h5 style="padding-top: 0px;padding-bottom: 0px;margin-top: 5px;margin-bottom: 13px;width: 110px;font-style: oblique;">Gallery:</h5>
            </div>
            <div class="col-12 col-md-10" id="id_post_description_image_data_column">
                <p style="margin-bottom: 13px;margin-left: 6px;margin-top: 5px;"> 

                   @foreach($postDescription as $post)
                            
                    <figure class="snip1527">
                      <div class="image"><img src="{{asset($post->image)}}" /></div>
                      <a href="{{asset($post->image)}}" target="_blank" ></a>
                    </figure> 
                    @endforeach
                </p>
            </div>
        </div>
        <div class="row" id="id_post_description_tag_row" style="margin-top: 5px;margin-bottom: 5px;">
            <div class="col-12 col-md-2" id="id_post_description_tag_title_column">
                <h5 style="padding-top: 0px;padding-bottom: 0px;margin-top: 5px;margin-bottom: 13px;font-style: oblique;">Tags:</h5>
            </div>
            <div class="col-12 col-md-10" id="id_post_description_tag_data_column">
                <p style="margin-bottom: 13px;margin-left: 6px;margin-top: 5px;">{{$postDescription[0]->tag}}</p>
            </div>
        </div>
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
       <script>
$(document).ready(function(){

 $('#searchField').keyup(function(){ 
        var query = $(this).val();
        if(query != '')
        {
         var _token = $('input[name="_token"]').val();
         $.ajax({
          url:"{{ route('autocomplete.fetch') }}",
          method:"POST",
          data:{query:query, _token:_token},
          success:function(data){
           $('#searchList').fadeIn();
                    $('#searchList').html(data);

                        
          }
         });
        }
        else{
            $('#searchList').fadeOut();  
                    $('#searchList').html(null);
        }
    });

    $(document).on('click', 'li', function(){  
        $('#searchField').val($(this).text());  
        $('#searchList').fadeOut();  
    });  

});

function on() {
  document.getElementById("overlay").style.display = "block";
}


</script>
</body>

</html>