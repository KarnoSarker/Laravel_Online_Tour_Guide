<?php


//redirecting to index.all (main page)
Route::get('/index', function(){
	
	return redirect()->route('index.all');
});


//redirecting to index.all (main page)
Route::get('/home', function(){
	
	return redirect()->route('index.all');
});


//redirecting to login controller 
Route::get('/admin', function(){
	
	return redirect()->route('login.index');
});

//index (main) controller
Route::get('/', 'IndexController@index')->name('index.all');
// Route::post('/', 'IndexController@go');

//Post autocomplete (search) controller
Route::post('/index/fetch', 'AutocompleteController@fetch')->name('autocomplete.fetch');

//District (combo box) auto show controller
Route::get('/district/ajax/{id}', 'DistrictController@myformAjax')->name('myform.ajax');

//division wise post filter
Route::get('/Dhaka', 'IndexController@dhaka')->name('index.dhaka');
Route::get('/Chittagong', 'IndexController@chittagong')->name('index.chittagong');
Route::get('/Rajshahi', 'IndexController@rajshahi')->name('index.rajshahi');
Route::get('/Khulna', 'IndexController@khulna')->name('index.khulna');
Route::get('/Barishal', 'IndexController@barishal')->name('index.barishal');
Route::get('/Sylhet', 'IndexController@sylhet')->name('index.sylhet');
Route::get('/Rangpur', 'IndexController@rangpur')->name('index.rangpur');
Route::get('/Mymensingh', 'IndexController@mymensingh')->name('index.mymensingh'); 

//district wise post filter
Route::get('/PostList/{division}/{district}', 'IndexController@viewPostDistrictWise')->name('index.viewPostDistrictWise');

//category wise post filter
Route::get('/PostList/{category}', 'IndexController@viewPostCategoryWise')->name('index.viewPostCategoryWise');


//footer controller
Route::get('/contact-us', 'FooterController@contactUs')->name('footer.contactUs');
Route::get('/about-us', 'FooterController@aboutUs')->name('footer.aboutUs');
Route::get('/advertise', 'FooterController@advertise')->name('footer.advertise');


//post description show
Route::get('/Post/{id}', 'PostController@index')->name('post.index');

//How-to-go (route in map) show
Route::get('/Post/{postId}/show-route', 'PostController@howToGo')->name('post.howToGo');

//Find nearest Place show
Route::get('/nearest-places', 'FeatureController@nearestPlaces')->name('feature.nearestPlaces');
Route::post('/nearest-places', 'FeatureController@filterPost');


//User create Post Controller
Route::get('/create-post', 'FeatureController@create')->name('feature.create');
Route::post('/create-post', 'FeatureController@store');


//Admin Login-Logout Controller
Route::get('/login', 'LoginController@index')->name('login.index');
Route::post('/login', 'LoginController@verify');
Route::get('/logout', 'LogoutController@index')->name('logout.index');


//Admin MiddleWare
Route::group(['middleware'=>['admin_session']], function(){


//Admin Index (Admin Home) Show
Route::get('/admin-index', 'AdminController@index')->name('admin.index');

//Admin Change Password Controller
Route::get('/admin-change-password', 'AdminController@changePassword')->name('admin.changePassword');
Route::post('/admin-change-password', 'AdminController@changePasswordVerify');

//Admin Create Post Controller
Route::get('/admin-create-post', 'AdminController@createPost')->name('admin.createPost');
Route::post('/admin-create-post', 'AdminController@store');

//Admin Review Temporary post (List) Show
Route::get('/review-user-post-list', 'AdminController@reviewList')->name('admin.reviewList');

//Admin Review Temporary post (Description) Show
Route::get('/review-user-post-description/{PostId}', 'AdminController@reviewPost')->name('admin.reviewPost');
Route::post('/review-user-post-description/{PostId}', 'AdminController@storeReview');

//Admin Delete Temporary Post
Route::get('/delete-temporary-post/{PostId}', 'AdminController@deletePost')->name('admin.deletePost');

//Admin manage  Main Post (List) Show
Route::get('/admin-manage-posts', 'AdminController@managePost')->name('admin.managePost');
Route::post('/admin-manage-posts', 'AdminController@filterManagePost');

//Admin Edit  Main Post (description) Show
Route::get('/admin-edit-post/{PostId}', 'AdminController@editPost')->name('admin.editPost');
Route::post('/admin-edit-post/{PostId}', 'AdminController@updatePost');

//Admin Delete  Main Post (description) Show
Route::get('/admin-delete-post/{PostId}', 'AdminController@deleteMainPost')->name('admin.deleteMainPost');

});