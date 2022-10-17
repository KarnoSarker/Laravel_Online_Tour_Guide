<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Nearest Places | bdtourinfo</title>
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
    <link rel="stylesheet" href="{{asset('assets/css/bdtourinfo_find_nearest_post_list_v1.css')}}">



        <script type='text/javascript' 
            src='http://www.bing.com/api/maps/mapcontrol?callback=GetMap' 
            async defer></script>
    <script type='text/javascript'>
    function GetMap() {
        var map = new Microsoft.Maps.Map('#myMap', {
            credentials: 'AmvxZALK8DOsHsk49ei5iR20s7liwPThrJ7_aLQ9xgtujihPemUiprbhxs6qbIZE'
        });

        //Request the user's location
        navigator.geolocation.getCurrentPosition(function (position) {
            var loc = new Microsoft.Maps.Location(
                position.coords.latitude,
                position.coords.longitude);
        document.getElementById("device_latitude").value= position.coords.latitude;
        document.getElementById("device_langitude").value= position.coords.longitude;

            //Add a pushpin at the user's location.
            var pin = new Microsoft.Maps.Pushpin(loc);
            map.entities.push(pin);

            //Center the map on the user's location.
            map.setView({ center: loc, zoom: 15 });
        });
    }
    </script>




    
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
                            


                <div>
        <div class="row" style="margin-left: 0px;margin-right: 0px;">
            <div class="col-12 col-md-7" style="padding: 0px;">
                <div style="min-height: 300px;padding: 5px;">
                    
                    <center> <div id="myMap" style="position:relative;width:420px;height:280px;"></div></center>

                </div>
            </div>
            <div class="col-12 d-flex flex-column justify-content-center align-items-start col-md-5" style="padding-right: 0px;padding-left: 0px;">
                <div>
                    
                </div>
            <form method="post">
               {{ csrf_field() }}
                <div>
                    <h5 class="d-inline-block" style="margin-right: 5px;margin-left: 10px;margin-top: 5px;margin-bottom: 5px;width: 128.734px;">Distance</h5>
                    <div class="dropdown d-inline-block"><select class="form-control" name="range" style="max-width: 120px;min-width: 120px;width: 90px;padding-right: 5px;padding-left: 5px; margin-bottom: 5px;"><option value="20">20 KM</option><option value="50">50 KM</option><option value="100">100 KM</option><option value="200">200 KM</option><option value="500">500 KM</option></select>
                        
                </div>
            </div>
            <div>
                <h5 class="d-inline-block" id="test" style="margin-right: 5px;margin-left: 10px;margin-top: 5px;margin-bottom: 5px;width: 128.734px;">Category</h5>
                <div class="dropdown d-inline-block"><select class="form-control" name="category" style="max-width: 120px;min-width: 120px;width: 90px;padding-right: 5px;padding-left: 5px;"><option value="All">All</option><option value="Natural">Natural</option><option value="Historical">Historical</option><option value="Artificial">Artificial</option></select>

            </div>
        </div>
        <input type="hidden" id="device_latitude" name="device_latitude1">
        <input type="hidden" id="device_langitude" name="device_langitude1">
        <div><input class="btn btn-primary" type="submit" value="Filter" style="margin-top: 10px;margin-bottom: 5px;margin-left: 105px;padding-top: 3px;padding-bottom: 3px;height: 32px;background-color: rgb(7,55,108);"></div>


        </form>
    </div>
    </div>
    </div>
    <div style="background-color: #587f9a;margin-top: 2px;margin-bottom: 3px; padding-top: 2px;"></div>
    @foreach($postList as $post)
    <div id="find_nearest_post_list" style="background-color: rgb(7,55,108);margin-top: 8px;margin-bottom: 8px;">
        

         
        <div class="row cls_find_nearest_post_list_row" style="margin-right: 0px;">
            <div class="col-12 col-sm-8">
                <h5 style="margin-top: 4px;margin-bottom: 4px;margin-left: 10px;margin-right: 5px;color: rgb(255,255,255);"><a role="button" data-bs-hover-animate="pulse" href="{{route('post.index',[$post->id])}}" style="color: white;font-size: 17px;">{{$post->name_english}}</a></h5>
            </div>

            

            <div class="col-12 d-flex justify-content-between col-sm-4">
                <h5 class="d-inline-block" style="margin-top: 5px;margin-bottom: 3px;margin-left: 10px;margin-right: 15px;color: rgb(255,255,255);font-size: 19px;">0.0 KM</h5>
                
                

               <div style="padding: 3px;padding-left: 10px;"><a class="btn btn-primary d-inline-block route_button" role="button" data-bs-hover-animate="pulse" href="{{route('post.howToGo',[$post->id])}}" style="height: 28px;padding-top: 0px;padding-bottom: 0px;margin-top: 3px;margin-bottom: 2px;margin-right: 15px;margin-left: 10px;background-color: rgb(255,255,255);color: rgb(7,55,108);">Route</a></div>

            </div>
        </div>
       


    </div>
 @endforeach

<div style="margin-left: 40%;">{{ $postList->links() }} </div>

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