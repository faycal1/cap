<?php
$router->group(['namespace' => 'Cv'], function () use ($router) {    
            	 get('cvs' , 'CvController@index')->name('admin.cvs');            
            	  get('download/{hash}' , 'CvController@download')->name('admin.cv.download'); 
});



