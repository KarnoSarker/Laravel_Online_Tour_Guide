<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Create Post | bdtourinfo</title>
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
                            

         @if(session('success') != null)
                 <div class="alert alert-success alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                     <strong>Success!</strong> Post successfully uploaded for admin approval!!
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


        <form method="post" class="fileupload" enctype="multipart/form-data" style="margin: 5px;margin-right: 10px;margin-top: 10px;margin-bottom: 10px;margin-left: 10px;">
        {{ csrf_field() }}
        <div class="form-row">
            <div class="col-sm-6" style="max-width: 180px;">
                <div class="form-group"><label>Place Name (English):<br></label></div>
            </div>
            <div class="col-sm-6 col-sm-9">
                <div class="form-group"><input class="form-control" type="text" name="name_english" value="{{old('name_english')}}" placeholder="Place Name (English)" style="height: 34px;"></div>
            </div>
        </div>
        <div class="form-row">
            <div class="col-sm-6" style="max-width: 180px;">
                <div class="form-group"><label>Place Name (Bangla):</label></div>
            </div>
            <div class="col-sm-6 col-sm-9">
                <div class="form-group"><input class="form-control" type="text" name="name_bangla" value="{{old('name_bangla')}}" placeholder="Place Name (Bangla)" style="height: 34px;"></div>
            </div>
        </div>
        <div class="form-row">
            <div class="col-sm-4">
                <div class="form-group d-flex"><label style="margin-right: 8px;margin-top: 5px;min-width: 72px;">Division:&nbsp;</label><select class="form-control" name="division" style="max-width: 100px;min-width: 100px;width: 90px;padding-right: 5px;padding-left: 5px;"><option value="">select</option>
                     @foreach ($division as $key => $value)
                        <option value="{{ $key }}">{{ $value }}</option>
                    @endforeach
                </select></div>
            </div>
            <div class="col-sm-4">
                <div class="form-group d-flex"><label style="margin-right: 8px;margin-top: 5px;min-width: 72px;">District:&nbsp;</label><select class="form-control" name="district" style="max-width: 100px;min-width: 100px;width: 90px;padding-right: 5px;padding-left: 5px;"></select></div>
            </div>
            <div class="col-sm-4">
                <div class="form-group d-flex"><label style="margin-right: 8px;margin-top: 5px;min-width: 72px;">Category:&nbsp;</label><select class="form-control" name="category" style="max-width: 100px;min-width: 100px;width: 90px;padding-right: 5px;padding-left: 5px;"><option value=""></option><option value="Natural">Natural</option><option value="Historical">Historical</option><option value="Artificial">Artificial</option></select></div>
            </div>
        </div>
        <div class="form-row">
            <div class="col-sm-6" style="max-width: 180px;">
                <div class="form-group"><label>Place Description:&nbsp;</label></div>
            </div>
            <div class="col-sm-6 col-sm-9">
                <div class="form-group"><textarea class="form-control" name="description" placeholder="Description of the place">{{old('description')}}</textarea></div>
            </div>
        </div>
        <div class="form-row">
            <div class="col-sm-6" style="max-width: 180px;">
                <div class="form-group"><label>Direction:&nbsp;</label></div>
            </div>
            <div class="col-sm-6 col-sm-9">
                <div class="form-group"><textarea class="form-control" name="direction"  required="" placeholder="How to Go"> {{old('direction')}}</textarea></div>
            </div>
        </div>
        <div class="form-row">
            <div class="col-sm-3" style="max-width: 180px;">
                <div class="form-group"><label>Latitude:&nbsp;</label></div>
            </div>
            <div class="col-sm-3">
                <div class="form-group"><input class="form-control" type="text" name="latitude" value="{{old('latitude')}}" placeholder="Latitude" style="height: 34px;max-width: 200px;"></div>
            </div>
            <div class="col-sm-3" style="max-width: 160px;">
                <div class="form-group"><label>Longitude:&nbsp;</label></div>
            </div>
            <div class="col-sm-3">
                <div class="form-group"><input class="form-control" type="text" name="langitude" value="{{old('langitude')}}" placeholder="Langitude" style="height: 34px;max-width: 200px;"></div>
            </div>
        </div>
        <div class="form-row">
            <div class="col-sm-6" style="max-width: 180px;">
                <div class="form-group"><label>Add Image:&nbsp;</label></div>
            </div>
            <div class="col-sm-6 col-sm-9">
                <div class="form-group">
                    <div class="custom-file"><input type="file" accept="image/*" name="imageFiles[]" multiple=""  class="custom-file-input"><label class="custom-file-label">Upload File</label></div>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="col-sm-6" style="max-width: 180px;">
                <div class="form-group"><label>Tags:&nbsp;</label></div>
            </div>
            <div class="col-sm-6 col-sm-9">
                <div class="form-group"><input class="form-control" type="text" name="tag" value="{{old('tag')}}" placeholder="Tags" style="height: 34px;"></div>
            </div>
        </div>
        <div class="form-row">
            <div class="col-sm-4" style="max-width: 180px;">
                <div class="form-group"><label>Author</label></div>
            </div>
            <div class="col-sm-4 col-sm-6">
                <div class="form-group"><input class="form-control" type="text" name="author" value="{{old('author')}}" placeholder="Author / Main Source" style="height: 34px;"></div>
            </div>
            <div class="col-sm-4 col-sm-3" style="max-width: 200px;">
                <div class="form-group"><button class="btn btn-primary" type="submit" style="background-color: rgb(7,55,108);margin: 0px;margin-right: 10px;margin-left: 10px;">Submit</button><button class="btn btn-primary" type="reset" style="background-color: rgb(7,55,108);margin-left: 10px;margin-right: 10px;">Reset</button></div>
            </div>
        </div>
    </form>

       


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

<script type="text/javascript">
    $(document).ready(function() {
        $('select[name="division"]').on('change', function() {
            var divisionID = $(this).val();
            if(divisionID) {
                $.ajax({
                    url: '/district/ajax/'+divisionID,
                    type: "GET",
                    dataType: "json",
                    success:function(data) {

                        
                        $('select[name="district"]').empty();
                        $.each(data, function(key, value) {
                            $('select[name="district"]').append('<option value="'+ value +'">'+ value +'</option>');
                        });


                    }
                });
            }else{
                $('select[name="district"]').empty();
            }
        });
    });
</script>

</body>

</html>