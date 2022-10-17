<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Route | bdtourinfo</title>
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fonts/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/fonts/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bdtourinfo_footer_v1.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bdtourinfo_slide_menu_v1.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bdtourinfo_user_navbar_v1.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="{{asset('assets/css/bdtourinfo_post_list_v1-1.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bdtourinfo_post_list_v1.csss')}}">
    <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}">

    <style type="text/css">
         #floating-panel {
        top: 10px;
        left: 25%;
        z-index: 5;
        background-color: #fff;
        padding: 5px;
        border: 1px solid #999;
        text-align: center;
        font-family: 'Roboto','sans-serif';
        line-height: 30px;
        padding-left: 10px;
      }

    </style>

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
        <div class="row" id="id_place_route_Location_row">
            <div class="col col-md-12" id="id_place_route_Location_column">
                <div>
                    <div class="row" style="margin-top: 5px;margin-bottom: 5px;">
                        <div class="col-12 col-md-6" id="id_place_route_your_location" style="padding-bottom: 10px;">
                            <div class="d-flex">
                                <h5 style="margin-right: 5px;font-style: oblique;color: rgb(33,37,41);">Current Location:</h5>
                                <h5 id="current" class="text-dark" style="margin-left: 5px;font-size: 20px;font-weight: normal;"></h5>
                            </div>
                        </div>
                        <div class="col-12 col-md-6" id="id_place_route_destination" style="padding-top: 0px;padding-bottom: 0px;">
                            <div class="d-flex">
                                <h5 style="margin-right: 5px;font-style: oblique;">Destination:</h5>
                                <h5 class="text-dark" style="margin-left: 5px;font-weight: normal;">{{$postDescription->name_english}}</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" id="id_place_route_distance_post_row">
            <div class="col col-md-12" id="id_place_route_distance_post_column">
                <div>
                    <div class="row" style="margin-top: 5px;margin-bottom: 5px;">
                        <div class="col-12 col-md-4" id="id_place_route_distance_column">
                            <div class="d-flex">
                                <h5 style="margin-right: 5px;font-style: oblique;color: rgb(33,37,41);">Distance:</h5>
                                <h5 id="distance1" class="text-dark" style="margin-left: 5px;font-size: 20px;font-weight: normal;"></h5>
                            </div>
                        </div>
                        <div class="col-12 col-md-4" id="id_place_route_view_post_column" style="padding-bottom: 10px;">
                            <div class="d-flex"><a class="btn btn-primary" role="button" href="{{route('post.index',[$postDescription->id])}}" style="height: 30px;padding-top: 2px;background-color: rgb(7,55,108);">View Post</a></div>
                        </div>
                        <div class="col-12 col-md-4" id="id_place_route_show_nearest_column" style="padding-bottom: 10px;">
                            <div class="d-flex"><a class="btn btn-primary" role="button" href="#" style="height: 30px;padding-top: 2px;background-color: rgb(7,55,108);">View Nearest Places</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <p hidden id="destination_latitude"> {{$postDescription->latitude}} </p>
   <p hidden id="destination_langitude"> {{$postDescription->langitude}} </p>
   <p hidden id="current_latitude"></p>
   <p hidden id="current_langitude" ></p>
   <div id="myMap" style="margin-left: 5px;margin-right: 5px;margin-top: 5px;margin-bottom: 5px; min-height: 400px;">
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

   
    <script type='text/javascript'>
    var map, directionsManager;

    function GetMap()
    {
        navigator.geolocation.getCurrentPosition(showPosition);
    
        function showPosition(position) {

             var latitudeByDevice=  position.coords.latitude;
             var langitudeByDevice=  position.coords.longitude;

                document.getElementById("current_latitude").innerHTML=latitudeByDevice;
                document.getElementById("current_langitude").innerHTML=langitudeByDevice;
                document.getElementById("current").innerHTML= latitudeByDevice.toFixed(3) +' , '+langitudeByDevice.toFixed(3);

            var placeLatitudex = document.getElementById("destination_latitude").innerHTML;
            var placeLangitudex = document.getElementById("destination_langitude").innerHTML;


            map = new Microsoft.Maps.Map('#myMap', {
                credentials: 'AmvxZALK8DOsHsk49ei5iR20s7liwPThrJ7_aLQ9xgtujihPemUiprbhxs6qbIZE',
                center: new Microsoft.Maps.Location(23.810331, 90.412521),
                //mapTypeId: Microsoft.Maps.MapTypeId.aerial,
                 zoom: 15
            });

        //Load the directions module.
        Microsoft.Maps.loadModule('Microsoft.Maps.Directions', function () {

          var placeLatitude = document.getElementById("destination_latitude").innerHTML;
          var placeLangitude = document.getElementById("destination_langitude").innerHTML;
                
            var CurrentLatitude = document.getElementById("current_latitude").innerHTML;
            var CurrentLangitude = document.getElementById("current_langitude").innerHTML;

            var destination = placeLatitude+','+placeLangitude;
            var position = CurrentLatitude+','+CurrentLangitude;

            /*var destination =25.126611+','+91.097563;
            var position = 23.8186531+','+90.42372549999999;*/


            //Create an instance of the directions manager.
            directionsManager = new Microsoft.Maps.Directions.DirectionsManager(map);

            //Create waypoints to route between.
            directionsManager.addWaypoint(new Microsoft.Maps.Directions.Waypoint({ address: position }));
           // directionsManager.addWaypoint(new Microsoft.Maps.Directions.Waypoint({ address: 'Paris, FR' }));
            directionsManager.addWaypoint(new Microsoft.Maps.Directions.Waypoint({ address: destination }));

            //Set the request options that avoid highways and uses kilometers.
            directionsManager.setRequestOptions({
                distanceUnit: Microsoft.Maps.Directions.DistanceUnit.km,
                routeAvoidance: [Microsoft.Maps.Directions.RouteAvoidance.avoidLimitedAccessHighway]
            });

            //Make the route line thick and green. Replace the title of waypoints with an empty string to hide the default text that appears.
            directionsManager.setRenderOptions({
                drivingPolylineOptions: {
                    strokeColor: 'green',
                    strokeThickness: 5
                },
                waypointPushpinOptions: {
                    title: 'Route'
                }
            });

            //Calculate directions.
            directionsManager.calculateDirections();
                var ax = parseFloat(CurrentLatitude);
                var ay = parseFloat(CurrentLangitude);
                var bx = parseFloat(placeLatitude);
                var by = parseFloat(placeLangitude);
            distance(ax, ay, bx, by);
        });

}


    }
    </script>
    <script type='text/javascript' src='https://www.bing.com/api/maps/mapcontrol?callback=GetMap' async defer></script>

    <script>

    if (typeof(Number.prototype.toRad) === "undefined") {
      Number.prototype.toRad = function() {
        return this * Math.PI / 180;
      }
    }
    function distance(lat1, lng1, lat2, lng2) {
        var dLat = (lat2-lat1).toRad(),
          dLng = (lng2-lng1).toRad(),
          lat1 = lat1.toRad(),
          lat2 = lat2.toRad();

      var a = Math.sin(dLat / 2) * Math.sin(dLat / 2) +
              Math.sin(dLng / 2) * Math.sin(dLng / 2) * 
              Math.cos(lat1) * Math.cos(lat2),
          c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));

     var x= 3956 * c;
    document.getElementById('distance1').innerHTML=x.toFixed(2) + " KM";
}  
    </script>

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