<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-05-16 06:44:01 --- EMERGENCY: View_Exception [ 0 ]: The requested view user/info could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /Users/saurav/Sites/kohana/system/classes/Kohana/View.php:145
2015-05-16 06:44:01 --- DEBUG: #0 /Users/saurav/Sites/kohana/system/classes/Kohana/View.php(145): Kohana_View->set_filename('user/info')
#1 /Users/saurav/Sites/kohana/system/classes/Kohana/View.php(30): Kohana_View->__construct('user/info', NULL)
#2 /Users/saurav/Sites/kohana/application/classes/Controller/Api/V1/User.php(7): Kohana_View::factory('user/info')
#3 /Users/saurav/Sites/kohana/system/classes/Kohana/Controller.php(84): Controller_Api_V1_User->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/saurav/Sites/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_V1_User))
#6 /Users/saurav/Sites/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/saurav/Sites/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /Users/saurav/Sites/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /Users/saurav/Sites/kohana/system/classes/Kohana/View.php:145
2015-05-16 07:05:18 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: controller ~ SYSPATH/classes/Kohana/Request.php [ 967 ] in /Users/saurav/Sites/kohana/system/classes/Kohana/Request.php:967
2015-05-16 07:05:18 --- DEBUG: #0 /Users/saurav/Sites/kohana/system/classes/Kohana/Request.php(967): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/saurav/S...', 967, Array)
#1 /Users/saurav/Sites/kohana/index.php(118): Kohana_Request->execute()
#2 {main} in /Users/saurav/Sites/kohana/system/classes/Kohana/Request.php:967
2015-05-16 08:09:36 --- EMERGENCY: View_Exception [ 0 ]: The requested view user/info could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /Users/saurav/Sites/kohana/system/classes/Kohana/View.php:145
2015-05-16 08:09:36 --- DEBUG: #0 /Users/saurav/Sites/kohana/system/classes/Kohana/View.php(145): Kohana_View->set_filename('user/info')
#1 /Users/saurav/Sites/kohana/system/classes/Kohana/View.php(30): Kohana_View->__construct('user/info', NULL)
#2 /Users/saurav/Sites/kohana/application/classes/Controller/Api/V1/User.php(7): Kohana_View::factory('user/info')
#3 /Users/saurav/Sites/kohana/system/classes/Kohana/Controller.php(84): Controller_Api_V1_User->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/saurav/Sites/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_V1_User))
#6 /Users/saurav/Sites/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/saurav/Sites/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /Users/saurav/Sites/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /Users/saurav/Sites/kohana/system/classes/Kohana/View.php:145
2015-05-16 12:06:21 --- EMERGENCY: ErrorException [ 2 ]: Illegal offset type ~ SYSPATH/classes/Kohana/File.php [ 78 ] in /Users/saurav/Sites/kohana/system/classes/Kohana/File.php:78
2015-05-16 12:06:21 --- DEBUG: #0 /Users/saurav/Sites/kohana/system/classes/Kohana/File.php(78): Kohana_Core::error_handler(2, 'Illegal offset ...', '/Users/saurav/S...', 78, Array)
#1 /Users/saurav/Sites/kohana/modules/kohana-restful-api/classes/Kohana/Controller/Rest.php(186): Kohana_File::mime_by_ext(NULL)
#2 /Users/saurav/Sites/kohana/modules/kohana-restful-api/classes/Kohana/Controller/Rest.php(416): Kohana_Controller_Rest->rest_output(Array, 500)
#3 /Users/saurav/Sites/kohana/application/classes/Controller/Api/V1/User.php(42): Kohana_Controller_Rest->_error('An internal err...', 500)
#4 /Users/saurav/Sites/kohana/system/classes/Kohana/Controller.php(84): Controller_Api_V1_User->action_create()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/saurav/Sites/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_V1_User))
#7 /Users/saurav/Sites/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/saurav/Sites/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /Users/saurav/Sites/kohana/index.php(118): Kohana_Request->execute()
#10 {main} in /Users/saurav/Sites/kohana/system/classes/Kohana/File.php:78
2015-05-16 12:13:19 --- EMERGENCY: Kohana_Exception [ 0 ]: Invalid Route::callback specified ~ SYSPATH/classes/Kohana/Route.php [ 391 ] in /Users/saurav/Sites/kohana/application/bootstrap.php:151
2015-05-16 12:13:19 --- DEBUG: #0 /Users/saurav/Sites/kohana/application/bootstrap.php(151): Kohana_Route->filter('RESTful::route_...')
#1 /Users/saurav/Sites/kohana/index.php(102): require('/Users/saurav/S...')
#2 {main} in /Users/saurav/Sites/kohana/application/bootstrap.php:151
2015-05-16 12:15:14 --- EMERGENCY: Kohana_Exception [ 0 ]: Invalid Route::callback specified ~ SYSPATH/classes/Kohana/Route.php [ 391 ] in /Users/saurav/Sites/kohana/application/bootstrap.php:151
2015-05-16 12:15:14 --- DEBUG: #0 /Users/saurav/Sites/kohana/application/bootstrap.php(151): Kohana_Route->filter('RESTful::route_...')
#1 /Users/saurav/Sites/kohana/index.php(102): require('/Users/saurav/S...')
#2 {main} in /Users/saurav/Sites/kohana/application/bootstrap.php:151
2015-05-16 12:15:35 --- EMERGENCY: Kohana_Exception [ 0 ]: Invalid Route::callback specified ~ SYSPATH/classes/Kohana/Route.php [ 391 ] in /Users/saurav/Sites/kohana/application/bootstrap.php:151
2015-05-16 12:15:35 --- DEBUG: #0 /Users/saurav/Sites/kohana/application/bootstrap.php(151): Kohana_Route->filter('RESTful::route_...')
#1 /Users/saurav/Sites/kohana/index.php(102): require('/Users/saurav/S...')
#2 {main} in /Users/saurav/Sites/kohana/application/bootstrap.php:151
2015-05-16 12:15:37 --- EMERGENCY: Kohana_Exception [ 0 ]: Invalid Route::callback specified ~ SYSPATH/classes/Kohana/Route.php [ 391 ] in /Users/saurav/Sites/kohana/application/bootstrap.php:151
2015-05-16 12:15:37 --- DEBUG: #0 /Users/saurav/Sites/kohana/application/bootstrap.php(151): Kohana_Route->filter('RESTful::route_...')
#1 /Users/saurav/Sites/kohana/index.php(102): require('/Users/saurav/S...')
#2 {main} in /Users/saurav/Sites/kohana/application/bootstrap.php:151
2015-05-16 12:15:39 --- EMERGENCY: Kohana_Exception [ 0 ]: Invalid Route::callback specified ~ SYSPATH/classes/Kohana/Route.php [ 391 ] in /Users/saurav/Sites/kohana/application/bootstrap.php:151
2015-05-16 12:15:39 --- DEBUG: #0 /Users/saurav/Sites/kohana/application/bootstrap.php(151): Kohana_Route->filter('RESTful::route_...')
#1 /Users/saurav/Sites/kohana/index.php(102): require('/Users/saurav/S...')
#2 {main} in /Users/saurav/Sites/kohana/application/bootstrap.php:151
2015-05-16 12:15:44 --- EMERGENCY: Kohana_Exception [ 0 ]: Invalid Route::callback specified ~ SYSPATH/classes/Kohana/Route.php [ 391 ] in /Users/saurav/Sites/kohana/application/bootstrap.php:151
2015-05-16 12:15:44 --- DEBUG: #0 /Users/saurav/Sites/kohana/application/bootstrap.php(151): Kohana_Route->filter('RESTful::route_...')
#1 /Users/saurav/Sites/kohana/index.php(102): require('/Users/saurav/S...')
#2 {main} in /Users/saurav/Sites/kohana/application/bootstrap.php:151
2015-05-16 12:16:52 --- EMERGENCY: Kohana_Exception [ 0 ]: Invalid Route::callback specified ~ SYSPATH/classes/Kohana/Route.php [ 391 ] in /Users/saurav/Sites/kohana/application/bootstrap.php:151
2015-05-16 12:16:52 --- DEBUG: #0 /Users/saurav/Sites/kohana/application/bootstrap.php(151): Kohana_Route->filter('RESTful::route_...')
#1 /Users/saurav/Sites/kohana/index.php(102): require('/Users/saurav/S...')
#2 {main} in /Users/saurav/Sites/kohana/application/bootstrap.php:151
2015-05-16 12:16:52 --- EMERGENCY: Kohana_Exception [ 0 ]: Invalid Route::callback specified ~ SYSPATH/classes/Kohana/Route.php [ 391 ] in /Users/saurav/Sites/kohana/application/bootstrap.php:151
2015-05-16 12:16:52 --- DEBUG: #0 /Users/saurav/Sites/kohana/application/bootstrap.php(151): Kohana_Route->filter('RESTful::route_...')
#1 /Users/saurav/Sites/kohana/index.php(102): require('/Users/saurav/S...')
#2 {main} in /Users/saurav/Sites/kohana/application/bootstrap.php:151
2015-05-16 12:16:53 --- EMERGENCY: Kohana_Exception [ 0 ]: Invalid Route::callback specified ~ SYSPATH/classes/Kohana/Route.php [ 391 ] in /Users/saurav/Sites/kohana/application/bootstrap.php:151
2015-05-16 12:16:53 --- DEBUG: #0 /Users/saurav/Sites/kohana/application/bootstrap.php(151): Kohana_Route->filter('RESTful::route_...')
#1 /Users/saurav/Sites/kohana/index.php(102): require('/Users/saurav/S...')
#2 {main} in /Users/saurav/Sites/kohana/application/bootstrap.php:151
2015-05-16 13:03:24 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: controller ~ SYSPATH/classes/Kohana/Request.php [ 967 ] in /Users/saurav/Sites/kohana/system/classes/Kohana/Request.php:967
2015-05-16 13:03:24 --- DEBUG: #0 /Users/saurav/Sites/kohana/system/classes/Kohana/Request.php(967): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/saurav/S...', 967, Array)
#1 /Users/saurav/Sites/kohana/index.php(118): Kohana_Request->execute()
#2 {main} in /Users/saurav/Sites/kohana/system/classes/Kohana/Request.php:967
2015-05-16 13:06:09 --- EMERGENCY: ErrorException [ 2 ]: Illegal offset type ~ SYSPATH/classes/Kohana/File.php [ 78 ] in /Users/saurav/Sites/kohana/system/classes/Kohana/File.php:78
2015-05-16 13:06:09 --- DEBUG: #0 /Users/saurav/Sites/kohana/system/classes/Kohana/File.php(78): Kohana_Core::error_handler(2, 'Illegal offset ...', '/Users/saurav/S...', 78, Array)
#1 /Users/saurav/Sites/kohana/modules/kohana-restful-api/classes/Kohana/Controller/Rest.php(186): Kohana_File::mime_by_ext(NULL)
#2 /Users/saurav/Sites/kohana/modules/kohana-restful-api/classes/Kohana/Controller/Rest.php(416): Kohana_Controller_Rest->rest_output(Array, 500)
#3 /Users/saurav/Sites/kohana/application/classes/Controller/Api/V1/User.php(42): Kohana_Controller_Rest->_error('An internal err...', 500)
#4 /Users/saurav/Sites/kohana/system/classes/Kohana/Controller.php(84): Controller_Api_V1_User->action_create()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/saurav/Sites/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_V1_User))
#7 /Users/saurav/Sites/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/saurav/Sites/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /Users/saurav/Sites/kohana/index.php(118): Kohana_Request->execute()
#10 {main} in /Users/saurav/Sites/kohana/system/classes/Kohana/File.php:78
2015-05-16 13:07:30 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 132 ~ SYSPATH/classes/Kohana/Route.php [ 423 ] in file:line
2015-05-16 13:07:30 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/Users/saurav/S...', 423, Array)
#1 /Users/saurav/Sites/kohana/system/classes/Kohana/Route.php(423): preg_match('#^api/v1(?:/(?P...', 'api/v1/user', NULL)
#2 /Users/saurav/Sites/kohana/system/classes/Kohana/Request.php(472): Kohana_Route->matches(Object(Request))
#3 /Users/saurav/Sites/kohana/system/classes/Kohana/Request.php(949): Kohana_Request::process(Object(Request), Array)
#4 /Users/saurav/Sites/kohana/index.php(118): Kohana_Request->execute()
#5 {main} in file:line
2015-05-16 13:07:38 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 132 ~ SYSPATH/classes/Kohana/Route.php [ 423 ] in file:line
2015-05-16 13:07:38 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/Users/saurav/S...', 423, Array)
#1 /Users/saurav/Sites/kohana/system/classes/Kohana/Route.php(423): preg_match('#^api/v1(?:/(?P...', 'api/v1/user/cre...', NULL)
#2 /Users/saurav/Sites/kohana/system/classes/Kohana/Request.php(472): Kohana_Route->matches(Object(Request))
#3 /Users/saurav/Sites/kohana/system/classes/Kohana/Request.php(949): Kohana_Request::process(Object(Request), Array)
#4 /Users/saurav/Sites/kohana/index.php(118): Kohana_Request->execute()
#5 {main} in file:line
2015-05-16 13:07:39 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: missing ) at offset 132 ~ SYSPATH/classes/Kohana/Route.php [ 423 ] in file:line
2015-05-16 13:07:39 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/Users/saurav/S...', 423, Array)
#1 /Users/saurav/Sites/kohana/system/classes/Kohana/Route.php(423): preg_match('#^api/v1(?:/(?P...', 'api/v1/user/cre...', NULL)
#2 /Users/saurav/Sites/kohana/system/classes/Kohana/Request.php(472): Kohana_Route->matches(Object(Request))
#3 /Users/saurav/Sites/kohana/system/classes/Kohana/Request.php(949): Kohana_Request::process(Object(Request), Array)
#4 /Users/saurav/Sites/kohana/index.php(118): Kohana_Request->execute()
#5 {main} in file:line
2015-05-16 13:09:53 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: controller ~ SYSPATH/classes/Kohana/Request.php [ 967 ] in /Users/saurav/Sites/kohana/system/classes/Kohana/Request.php:967
2015-05-16 13:09:53 --- DEBUG: #0 /Users/saurav/Sites/kohana/system/classes/Kohana/Request.php(967): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/saurav/S...', 967, Array)
#1 /Users/saurav/Sites/kohana/index.php(118): Kohana_Request->execute()
#2 {main} in /Users/saurav/Sites/kohana/system/classes/Kohana/Request.php:967
2015-05-16 13:11:34 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: controller ~ SYSPATH/classes/Kohana/Request.php [ 967 ] in /Users/saurav/Sites/kohana/system/classes/Kohana/Request.php:967
2015-05-16 13:11:34 --- DEBUG: #0 /Users/saurav/Sites/kohana/system/classes/Kohana/Request.php(967): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/saurav/S...', 967, Array)
#1 /Users/saurav/Sites/kohana/index.php(118): Kohana_Request->execute()
#2 {main} in /Users/saurav/Sites/kohana/system/classes/Kohana/Request.php:967
2015-05-16 13:12:34 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: controller ~ SYSPATH/classes/Kohana/Request.php [ 967 ] in /Users/saurav/Sites/kohana/system/classes/Kohana/Request.php:967
2015-05-16 13:12:34 --- DEBUG: #0 /Users/saurav/Sites/kohana/system/classes/Kohana/Request.php(967): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/saurav/S...', 967, Array)
#1 /Users/saurav/Sites/kohana/index.php(118): Kohana_Request->execute()
#2 {main} in /Users/saurav/Sites/kohana/system/classes/Kohana/Request.php:967
2015-05-16 13:12:36 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: controller ~ SYSPATH/classes/Kohana/Request.php [ 967 ] in /Users/saurav/Sites/kohana/system/classes/Kohana/Request.php:967
2015-05-16 13:12:36 --- DEBUG: #0 /Users/saurav/Sites/kohana/system/classes/Kohana/Request.php(967): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/saurav/S...', 967, Array)
#1 /Users/saurav/Sites/kohana/index.php(118): Kohana_Request->execute()
#2 {main} in /Users/saurav/Sites/kohana/system/classes/Kohana/Request.php:967
2015-05-16 13:13:46 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: controller ~ SYSPATH/classes/Kohana/Request.php [ 967 ] in /Users/saurav/Sites/kohana/system/classes/Kohana/Request.php:967
2015-05-16 13:13:46 --- DEBUG: #0 /Users/saurav/Sites/kohana/system/classes/Kohana/Request.php(967): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/saurav/S...', 967, Array)
#1 /Users/saurav/Sites/kohana/index.php(118): Kohana_Request->execute()
#2 {main} in /Users/saurav/Sites/kohana/system/classes/Kohana/Request.php:967
2015-05-16 13:13:49 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: controller ~ SYSPATH/classes/Kohana/Request.php [ 967 ] in /Users/saurav/Sites/kohana/system/classes/Kohana/Request.php:967
2015-05-16 13:13:49 --- DEBUG: #0 /Users/saurav/Sites/kohana/system/classes/Kohana/Request.php(967): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/saurav/S...', 967, Array)
#1 /Users/saurav/Sites/kohana/index.php(118): Kohana_Request->execute()
#2 {main} in /Users/saurav/Sites/kohana/system/classes/Kohana/Request.php:967
2015-05-16 13:24:00 --- EMERGENCY: ErrorException [ 2 ]: Illegal offset type ~ SYSPATH/classes/Kohana/File.php [ 78 ] in /Users/saurav/Sites/kohana/system/classes/Kohana/File.php:78
2015-05-16 13:24:00 --- DEBUG: #0 /Users/saurav/Sites/kohana/system/classes/Kohana/File.php(78): Kohana_Core::error_handler(2, 'Illegal offset ...', '/Users/saurav/S...', 78, Array)
#1 /Users/saurav/Sites/kohana/modules/kohana-restful-api/classes/Kohana/Controller/Rest.php(186): Kohana_File::mime_by_ext(NULL)
#2 /Users/saurav/Sites/kohana/modules/kohana-restful-api/classes/Kohana/Controller/Rest.php(416): Kohana_Controller_Rest->rest_output(Array, 500)
#3 /Users/saurav/Sites/kohana/application/classes/Controller/Api/v1/User.php(42): Kohana_Controller_Rest->_error('An internal err...', 500)
#4 /Users/saurav/Sites/kohana/system/classes/Kohana/Controller.php(84): Controller_Api_V1_User->action_create()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/saurav/Sites/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_V1_User))
#7 /Users/saurav/Sites/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/saurav/Sites/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /Users/saurav/Sites/kohana/index.php(118): Kohana_Request->execute()
#10 {main} in /Users/saurav/Sites/kohana/system/classes/Kohana/File.php:78
2015-05-16 13:24:36 --- EMERGENCY: ErrorException [ 2 ]: Illegal offset type ~ SYSPATH/classes/Kohana/File.php [ 78 ] in /Users/saurav/Sites/kohana/system/classes/Kohana/File.php:78
2015-05-16 13:24:36 --- DEBUG: #0 /Users/saurav/Sites/kohana/system/classes/Kohana/File.php(78): Kohana_Core::error_handler(2, 'Illegal offset ...', '/Users/saurav/S...', 78, Array)
#1 /Users/saurav/Sites/kohana/modules/kohana-restful-api/classes/Kohana/Controller/Rest.php(186): Kohana_File::mime_by_ext(NULL)
#2 /Users/saurav/Sites/kohana/modules/kohana-restful-api/classes/Kohana/Controller/Rest.php(416): Kohana_Controller_Rest->rest_output(Array, 500)
#3 /Users/saurav/Sites/kohana/application/classes/Controller/Api/v1/User.php(42): Kohana_Controller_Rest->_error('An internal err...', 500)
#4 /Users/saurav/Sites/kohana/system/classes/Kohana/Controller.php(84): Controller_Api_V1_User->action_create()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/saurav/Sites/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_V1_User))
#7 /Users/saurav/Sites/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/saurav/Sites/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /Users/saurav/Sites/kohana/index.php(118): Kohana_Request->execute()
#10 {main} in /Users/saurav/Sites/kohana/system/classes/Kohana/File.php:78
2015-05-16 13:24:37 --- EMERGENCY: ErrorException [ 2 ]: Illegal offset type ~ SYSPATH/classes/Kohana/File.php [ 78 ] in /Users/saurav/Sites/kohana/system/classes/Kohana/File.php:78
2015-05-16 13:24:37 --- DEBUG: #0 /Users/saurav/Sites/kohana/system/classes/Kohana/File.php(78): Kohana_Core::error_handler(2, 'Illegal offset ...', '/Users/saurav/S...', 78, Array)
#1 /Users/saurav/Sites/kohana/modules/kohana-restful-api/classes/Kohana/Controller/Rest.php(186): Kohana_File::mime_by_ext(NULL)
#2 /Users/saurav/Sites/kohana/modules/kohana-restful-api/classes/Kohana/Controller/Rest.php(416): Kohana_Controller_Rest->rest_output(Array, 500)
#3 /Users/saurav/Sites/kohana/application/classes/Controller/Api/v1/User.php(42): Kohana_Controller_Rest->_error('An internal err...', 500)
#4 /Users/saurav/Sites/kohana/system/classes/Kohana/Controller.php(84): Controller_Api_V1_User->action_create()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/saurav/Sites/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_V1_User))
#7 /Users/saurav/Sites/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/saurav/Sites/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /Users/saurav/Sites/kohana/index.php(118): Kohana_Request->execute()
#10 {main} in /Users/saurav/Sites/kohana/system/classes/Kohana/File.php:78
2015-05-16 13:44:41 --- EMERGENCY: ErrorException [ 2 ]: Illegal offset type ~ SYSPATH/classes/Kohana/File.php [ 78 ] in /Users/saurav/Sites/kohana/system/classes/Kohana/File.php:78
2015-05-16 13:44:41 --- DEBUG: #0 /Users/saurav/Sites/kohana/system/classes/Kohana/File.php(78): Kohana_Core::error_handler(2, 'Illegal offset ...', '/Users/saurav/S...', 78, Array)
#1 /Users/saurav/Sites/kohana/modules/kohana-restful-api/classes/Kohana/Controller/Rest.php(186): Kohana_File::mime_by_ext(NULL)
#2 /Users/saurav/Sites/kohana/modules/kohana-restful-api/classes/Kohana/Controller/Rest.php(416): Kohana_Controller_Rest->rest_output(Array, 500)
#3 /Users/saurav/Sites/kohana/application/classes/Controller/Api/v1/User.php(42): Kohana_Controller_Rest->_error('An internal err...', 500)
#4 /Users/saurav/Sites/kohana/system/classes/Kohana/Controller.php(84): Controller_Api_V1_User->action_create()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/saurav/Sites/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_V1_User))
#7 /Users/saurav/Sites/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/saurav/Sites/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /Users/saurav/Sites/kohana/index.php(118): Kohana_Request->execute()
#10 {main} in /Users/saurav/Sites/kohana/system/classes/Kohana/File.php:78
2015-05-16 13:48:19 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: unmatched parentheses at offset 97 ~ SYSPATH/classes/Kohana/Route.php [ 423 ] in file:line
2015-05-16 13:48:19 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/Users/saurav/S...', 423, Array)
#1 /Users/saurav/Sites/kohana/system/classes/Kohana/Route.php(423): preg_match('#^api/v1(?:/(?P...', 'api/v1/user/cre...', NULL)
#2 /Users/saurav/Sites/kohana/system/classes/Kohana/Request.php(472): Kohana_Route->matches(Object(Request))
#3 /Users/saurav/Sites/kohana/system/classes/Kohana/Request.php(949): Kohana_Request::process(Object(Request), Array)
#4 /Users/saurav/Sites/kohana/index.php(118): Kohana_Request->execute()
#5 {main} in file:line
2015-05-16 13:48:23 --- EMERGENCY: ErrorException [ 2 ]: preg_match(): Compilation failed: unmatched parentheses at offset 97 ~ SYSPATH/classes/Kohana/Route.php [ 423 ] in file:line
2015-05-16 13:48:23 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_match(): C...', '/Users/saurav/S...', 423, Array)
#1 /Users/saurav/Sites/kohana/system/classes/Kohana/Route.php(423): preg_match('#^api/v1(?:/(?P...', 'api/v1/user/log...', NULL)
#2 /Users/saurav/Sites/kohana/system/classes/Kohana/Request.php(472): Kohana_Route->matches(Object(Request))
#3 /Users/saurav/Sites/kohana/system/classes/Kohana/Request.php(949): Kohana_Request::process(Object(Request), Array)
#4 /Users/saurav/Sites/kohana/index.php(118): Kohana_Request->execute()
#5 {main} in file:line
2015-05-16 13:56:38 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: controller ~ SYSPATH/classes/Kohana/Request.php [ 967 ] in /Users/saurav/Sites/kohana/system/classes/Kohana/Request.php:967
2015-05-16 13:56:38 --- DEBUG: #0 /Users/saurav/Sites/kohana/system/classes/Kohana/Request.php(967): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/saurav/S...', 967, Array)
#1 /Users/saurav/Sites/kohana/index.php(118): Kohana_Request->execute()
#2 {main} in /Users/saurav/Sites/kohana/system/classes/Kohana/Request.php:967
2015-05-16 14:05:41 --- EMERGENCY: ErrorException [ 2 ]: Illegal offset type ~ SYSPATH/classes/Kohana/File.php [ 78 ] in /Users/saurav/Sites/kohana/system/classes/Kohana/File.php:78
2015-05-16 14:05:41 --- DEBUG: #0 /Users/saurav/Sites/kohana/system/classes/Kohana/File.php(78): Kohana_Core::error_handler(2, 'Illegal offset ...', '/Users/saurav/S...', 78, Array)
#1 /Users/saurav/Sites/kohana/modules/kohana-restful-api/classes/Kohana/Controller/Rest.php(186): Kohana_File::mime_by_ext(NULL)
#2 /Users/saurav/Sites/kohana/application/classes/Controller/Api/v1/User.php(9): Kohana_Controller_Rest->rest_output('loggedin, saura...')
#3 /Users/saurav/Sites/kohana/system/classes/Kohana/Controller.php(84): Controller_Api_V1_User->action_hh()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/saurav/Sites/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_V1_User))
#6 /Users/saurav/Sites/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/saurav/Sites/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /Users/saurav/Sites/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /Users/saurav/Sites/kohana/system/classes/Kohana/File.php:78
2015-05-16 14:06:03 --- EMERGENCY: ErrorException [ 2 ]: Illegal offset type ~ SYSPATH/classes/Kohana/File.php [ 78 ] in /Users/saurav/Sites/kohana/system/classes/Kohana/File.php:78
2015-05-16 14:06:03 --- DEBUG: #0 /Users/saurav/Sites/kohana/system/classes/Kohana/File.php(78): Kohana_Core::error_handler(2, 'Illegal offset ...', '/Users/saurav/S...', 78, Array)
#1 /Users/saurav/Sites/kohana/modules/kohana-restful-api/classes/Kohana/Controller/Rest.php(186): Kohana_File::mime_by_ext(NULL)
#2 /Users/saurav/Sites/kohana/application/classes/Controller/Api/v1/User.php(9): Kohana_Controller_Rest->rest_output('loggedin, saura...')
#3 /Users/saurav/Sites/kohana/system/classes/Kohana/Controller.php(84): Controller_Api_V1_User->action_hh()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/saurav/Sites/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_V1_User))
#6 /Users/saurav/Sites/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/saurav/Sites/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /Users/saurav/Sites/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /Users/saurav/Sites/kohana/system/classes/Kohana/File.php:78
2015-05-16 14:06:04 --- EMERGENCY: ErrorException [ 2 ]: Illegal offset type ~ SYSPATH/classes/Kohana/File.php [ 78 ] in /Users/saurav/Sites/kohana/system/classes/Kohana/File.php:78
2015-05-16 14:06:04 --- DEBUG: #0 /Users/saurav/Sites/kohana/system/classes/Kohana/File.php(78): Kohana_Core::error_handler(2, 'Illegal offset ...', '/Users/saurav/S...', 78, Array)
#1 /Users/saurav/Sites/kohana/modules/kohana-restful-api/classes/Kohana/Controller/Rest.php(186): Kohana_File::mime_by_ext(NULL)
#2 /Users/saurav/Sites/kohana/application/classes/Controller/Api/v1/User.php(9): Kohana_Controller_Rest->rest_output('loggedin, saura...')
#3 /Users/saurav/Sites/kohana/system/classes/Kohana/Controller.php(84): Controller_Api_V1_User->action_hh()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/saurav/Sites/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_V1_User))
#6 /Users/saurav/Sites/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/saurav/Sites/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /Users/saurav/Sites/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /Users/saurav/Sites/kohana/system/classes/Kohana/File.php:78
2015-05-16 14:06:05 --- EMERGENCY: ErrorException [ 2 ]: Illegal offset type ~ SYSPATH/classes/Kohana/File.php [ 78 ] in /Users/saurav/Sites/kohana/system/classes/Kohana/File.php:78
2015-05-16 14:06:05 --- DEBUG: #0 /Users/saurav/Sites/kohana/system/classes/Kohana/File.php(78): Kohana_Core::error_handler(2, 'Illegal offset ...', '/Users/saurav/S...', 78, Array)
#1 /Users/saurav/Sites/kohana/modules/kohana-restful-api/classes/Kohana/Controller/Rest.php(186): Kohana_File::mime_by_ext(NULL)
#2 /Users/saurav/Sites/kohana/application/classes/Controller/Api/v1/User.php(9): Kohana_Controller_Rest->rest_output('loggedin, saura...')
#3 /Users/saurav/Sites/kohana/system/classes/Kohana/Controller.php(84): Controller_Api_V1_User->action_hh()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/saurav/Sites/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_V1_User))
#6 /Users/saurav/Sites/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/saurav/Sites/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /Users/saurav/Sites/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /Users/saurav/Sites/kohana/system/classes/Kohana/File.php:78
2015-05-16 14:07:15 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Controller_Api_V1_User::rest_output() ~ APPPATH/classes/Controller/Api/v1/User.php [ 9 ] in file:line
2015-05-16 14:07:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-16 14:08:49 --- EMERGENCY: ErrorException [ 4 ]: parse error ~ APPPATH/classes/Controller/Api/v1/User.php [ 8 ] in file:line
2015-05-16 14:08:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-16 14:09:02 --- EMERGENCY: ErrorException [ 2 ]: Illegal offset type ~ SYSPATH/classes/Kohana/File.php [ 78 ] in /Users/saurav/Sites/kohana/system/classes/Kohana/File.php:78
2015-05-16 14:09:02 --- DEBUG: #0 /Users/saurav/Sites/kohana/system/classes/Kohana/File.php(78): Kohana_Core::error_handler(2, 'Illegal offset ...', '/Users/saurav/S...', 78, Array)
#1 /Users/saurav/Sites/kohana/modules/kohana-restful-api/classes/Kohana/Controller/Rest.php(186): Kohana_File::mime_by_ext(NULL)
#2 /Users/saurav/Sites/kohana/application/classes/Controller/Api/v1/User.php(9): Kohana_Controller_Rest->rest_output('ddsdsd')
#3 /Users/saurav/Sites/kohana/system/classes/Kohana/Controller.php(84): Controller_Api_V1_User->action_hh()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/saurav/Sites/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_V1_User))
#6 /Users/saurav/Sites/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/saurav/Sites/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /Users/saurav/Sites/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /Users/saurav/Sites/kohana/system/classes/Kohana/File.php:78
2015-05-16 14:10:16 --- EMERGENCY: ErrorException [ 4 ]: parse error ~ APPPATH/classes/Controller/Api/v1/User.php [ 9 ] in file:line
2015-05-16 14:10:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-16 14:10:41 --- EMERGENCY: ErrorException [ 2 ]: Illegal offset type ~ SYSPATH/classes/Kohana/File.php [ 78 ] in /Users/saurav/Sites/kohana/system/classes/Kohana/File.php:78
2015-05-16 14:10:41 --- DEBUG: #0 /Users/saurav/Sites/kohana/system/classes/Kohana/File.php(78): Kohana_Core::error_handler(2, 'Illegal offset ...', '/Users/saurav/S...', 78, Array)
#1 /Users/saurav/Sites/kohana/modules/kohana-restful-api/classes/Kohana/Controller/Rest.php(186): Kohana_File::mime_by_ext(NULL)
#2 /Users/saurav/Sites/kohana/application/classes/Controller/Api/v1/User.php(9): Kohana_Controller_Rest->rest_output('{"test":"json"}')
#3 /Users/saurav/Sites/kohana/system/classes/Kohana/Controller.php(84): Controller_Api_V1_User->action_hh()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/saurav/Sites/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_V1_User))
#6 /Users/saurav/Sites/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/saurav/Sites/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /Users/saurav/Sites/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /Users/saurav/Sites/kohana/system/classes/Kohana/File.php:78
2015-05-16 14:23:14 --- EMERGENCY: ErrorException [ 2 ]: Illegal offset type ~ SYSPATH/classes/Kohana/File.php [ 78 ] in /Users/saurav/Sites/kohana/system/classes/Kohana/File.php:78
2015-05-16 14:23:14 --- DEBUG: #0 /Users/saurav/Sites/kohana/system/classes/Kohana/File.php(78): Kohana_Core::error_handler(2, 'Illegal offset ...', '/Users/saurav/S...', 78, Array)
#1 /Users/saurav/Sites/kohana/modules/kohana-restful-api/classes/Kohana/Controller/Rest.php(186): Kohana_File::mime_by_ext(NULL)
#2 /Users/saurav/Sites/kohana/application/classes/Controller/Api/v1/User.php(9): Kohana_Controller_Rest->rest_output('{"test":"json"}')
#3 /Users/saurav/Sites/kohana/system/classes/Kohana/Controller.php(84): Controller_Api_V1_User->action_hh()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/saurav/Sites/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_V1_User))
#6 /Users/saurav/Sites/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/saurav/Sites/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /Users/saurav/Sites/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /Users/saurav/Sites/kohana/system/classes/Kohana/File.php:78
2015-05-16 14:25:21 --- EMERGENCY: ErrorException [ 4 ]: parse error ~ APPPATH/classes/Controller/Api/v1/User.php [ 23 ] in file:line
2015-05-16 14:25:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-16 14:25:30 --- EMERGENCY: ErrorException [ 4 ]: parse error ~ APPPATH/classes/Controller/Api/v1/User.php [ 23 ] in file:line
2015-05-16 14:25:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-16 14:27:32 --- EMERGENCY: ErrorException [ 2 ]: Illegal offset type ~ SYSPATH/classes/Kohana/File.php [ 78 ] in /Users/saurav/Sites/kohana/system/classes/Kohana/File.php:78
2015-05-16 14:27:32 --- DEBUG: #0 /Users/saurav/Sites/kohana/system/classes/Kohana/File.php(78): Kohana_Core::error_handler(2, 'Illegal offset ...', '/Users/saurav/S...', 78, Array)
#1 /Users/saurav/Sites/kohana/modules/kohana-restful-api/classes/Kohana/Controller/Rest.php(186): Kohana_File::mime_by_ext(NULL)
#2 /Users/saurav/Sites/kohana/modules/kohana-restful-api/classes/Kohana/Controller/Rest.php(416): Kohana_Controller_Rest->rest_output(Array, 500)
#3 /Users/saurav/Sites/kohana/application/classes/Controller/Api/v1/User.php(42): Kohana_Controller_Rest->_error('An internal err...', 500)
#4 /Users/saurav/Sites/kohana/system/classes/Kohana/Controller.php(84): Controller_Api_V1_User->action_hh()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/saurav/Sites/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_V1_User))
#7 /Users/saurav/Sites/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/saurav/Sites/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /Users/saurav/Sites/kohana/index.php(118): Kohana_Request->execute()
#10 {main} in /Users/saurav/Sites/kohana/system/classes/Kohana/File.php:78
2015-05-16 14:28:24 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_users' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2015-05-16 14:28:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-16 14:28:25 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_users' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2015-05-16 14:28:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-16 15:14:37 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ SYSPATH/classes/Kohana/Response.php [ 160 ] in /Users/saurav/Sites/kohana/system/classes/Kohana/Response.php:160
2015-05-16 15:14:37 --- DEBUG: #0 /Users/saurav/Sites/kohana/system/classes/Kohana/Response.php(160): Kohana_Core::error_handler(8, 'Array to string...', '/Users/saurav/S...', 160, Array)
#1 /Users/saurav/Sites/kohana/application/classes/Controller/Api/v1/User.php(23): Kohana_Response->body(Array)
#2 /Users/saurav/Sites/kohana/system/classes/Kohana/Controller.php(84): Controller_Api_V1_User->action_hh()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/saurav/Sites/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_V1_User))
#5 /Users/saurav/Sites/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/saurav/Sites/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /Users/saurav/Sites/kohana/index.php(118): Kohana_Request->execute()
#8 {main} in /Users/saurav/Sites/kohana/system/classes/Kohana/Response.php:160
2015-05-16 15:15:01 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ SYSPATH/classes/Kohana/Response.php [ 160 ] in /Users/saurav/Sites/kohana/system/classes/Kohana/Response.php:160
2015-05-16 15:15:01 --- DEBUG: #0 /Users/saurav/Sites/kohana/system/classes/Kohana/Response.php(160): Kohana_Core::error_handler(8, 'Array to string...', '/Users/saurav/S...', 160, Array)
#1 /Users/saurav/Sites/kohana/application/classes/Controller/Api/v1/User.php(23): Kohana_Response->body(Array)
#2 /Users/saurav/Sites/kohana/system/classes/Kohana/Controller.php(84): Controller_Api_V1_User->action_hh()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/saurav/Sites/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_V1_User))
#5 /Users/saurav/Sites/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/saurav/Sites/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /Users/saurav/Sites/kohana/index.php(118): Kohana_Request->execute()
#8 {main} in /Users/saurav/Sites/kohana/system/classes/Kohana/Response.php:160
2015-05-16 15:15:31 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/classes/Controller/Api/v1/User.php [ 23 ] in file:line
2015-05-16 15:15:31 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'Array to string...', '/Users/saurav/S...', 23, Array)
#1 /Users/saurav/Sites/kohana/application/classes/Controller/Api/v1/User.php(23): printf('Array')
#2 /Users/saurav/Sites/kohana/system/classes/Kohana/Controller.php(84): Controller_Api_V1_User->action_hh()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/saurav/Sites/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_V1_User))
#5 /Users/saurav/Sites/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/saurav/Sites/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /Users/saurav/Sites/kohana/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2015-05-16 15:15:56 --- EMERGENCY: ErrorException [ 4 ]: parse error, expecting `','' or `';'' ~ APPPATH/classes/Controller/Api/v1/User.php [ 23 ] in file:line
2015-05-16 15:15:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-16 15:16:11 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/classes/Controller/Api/v1/User.php [ 23 ] in /Users/saurav/Sites/kohana/application/classes/Controller/Api/v1/User.php:23
2015-05-16 15:16:11 --- DEBUG: #0 /Users/saurav/Sites/kohana/application/classes/Controller/Api/v1/User.php(23): Kohana_Core::error_handler(8, 'Array to string...', '/Users/saurav/S...', 23, Array)
#1 /Users/saurav/Sites/kohana/system/classes/Kohana/Controller.php(84): Controller_Api_V1_User->action_hh()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/saurav/Sites/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_V1_User))
#4 /Users/saurav/Sites/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/saurav/Sites/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /Users/saurav/Sites/kohana/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/saurav/Sites/kohana/application/classes/Controller/Api/v1/User.php:23
2015-05-16 15:17:20 --- EMERGENCY: ErrorException [ 2 ]: Illegal offset type ~ SYSPATH/classes/Kohana/File.php [ 78 ] in /Users/saurav/Sites/kohana/system/classes/Kohana/File.php:78
2015-05-16 15:17:20 --- DEBUG: #0 /Users/saurav/Sites/kohana/system/classes/Kohana/File.php(78): Kohana_Core::error_handler(2, 'Illegal offset ...', '/Users/saurav/S...', 78, Array)
#1 /Users/saurav/Sites/kohana/modules/kohana-restful-api/classes/Kohana/Controller/Rest.php(186): Kohana_File::mime_by_ext(NULL)
#2 /Users/saurav/Sites/kohana/modules/kohana-restful-api/classes/Kohana/Controller/Rest.php(416): Kohana_Controller_Rest->rest_output(Array, 500)
#3 /Users/saurav/Sites/kohana/application/classes/Controller/Api/v1/User.php(42): Kohana_Controller_Rest->_error('An internal err...', 500)
#4 /Users/saurav/Sites/kohana/system/classes/Kohana/Controller.php(84): Controller_Api_V1_User->action_hh()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/saurav/Sites/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_V1_User))
#7 /Users/saurav/Sites/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/saurav/Sites/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /Users/saurav/Sites/kohana/index.php(118): Kohana_Request->execute()
#10 {main} in /Users/saurav/Sites/kohana/system/classes/Kohana/File.php:78
2015-05-16 15:18:18 --- EMERGENCY: ErrorException [ 2 ]: Illegal offset type ~ SYSPATH/classes/Kohana/File.php [ 78 ] in /Users/saurav/Sites/kohana/system/classes/Kohana/File.php:78
2015-05-16 15:18:18 --- DEBUG: #0 /Users/saurav/Sites/kohana/system/classes/Kohana/File.php(78): Kohana_Core::error_handler(2, 'Illegal offset ...', '/Users/saurav/S...', 78, Array)
#1 /Users/saurav/Sites/kohana/modules/kohana-restful-api/classes/Kohana/Controller/Rest.php(186): Kohana_File::mime_by_ext(NULL)
#2 /Users/saurav/Sites/kohana/modules/kohana-restful-api/classes/Kohana/Controller/Rest.php(416): Kohana_Controller_Rest->rest_output(Array, 500)
#3 /Users/saurav/Sites/kohana/application/classes/Controller/Api/v1/User.php(42): Kohana_Controller_Rest->_error('An internal err...', 500)
#4 /Users/saurav/Sites/kohana/system/classes/Kohana/Controller.php(84): Controller_Api_V1_User->action_hh()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/saurav/Sites/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_V1_User))
#7 /Users/saurav/Sites/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/saurav/Sites/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /Users/saurav/Sites/kohana/index.php(118): Kohana_Request->execute()
#10 {main} in /Users/saurav/Sites/kohana/system/classes/Kohana/File.php:78
2015-05-16 15:18:55 --- EMERGENCY: ErrorException [ 2 ]: Illegal offset type ~ SYSPATH/classes/Kohana/File.php [ 78 ] in /Users/saurav/Sites/kohana/system/classes/Kohana/File.php:78
2015-05-16 15:18:55 --- DEBUG: #0 /Users/saurav/Sites/kohana/system/classes/Kohana/File.php(78): Kohana_Core::error_handler(2, 'Illegal offset ...', '/Users/saurav/S...', 78, Array)
#1 /Users/saurav/Sites/kohana/modules/kohana-restful-api/classes/Kohana/Controller/Rest.php(186): Kohana_File::mime_by_ext(NULL)
#2 /Users/saurav/Sites/kohana/modules/kohana-restful-api/classes/Kohana/Controller/Rest.php(416): Kohana_Controller_Rest->rest_output(Array, 500)
#3 /Users/saurav/Sites/kohana/application/classes/Controller/Api/v1/User.php(42): Kohana_Controller_Rest->_error('An internal err...', 500)
#4 /Users/saurav/Sites/kohana/system/classes/Kohana/Controller.php(84): Controller_Api_V1_User->action_hh()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/saurav/Sites/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_V1_User))
#7 /Users/saurav/Sites/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/saurav/Sites/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /Users/saurav/Sites/kohana/index.php(118): Kohana_Request->execute()
#10 {main} in /Users/saurav/Sites/kohana/system/classes/Kohana/File.php:78
2015-05-16 15:21:35 --- EMERGENCY: ErrorException [ 2 ]: Illegal offset type ~ SYSPATH/classes/Kohana/File.php [ 78 ] in /Users/saurav/Sites/kohana/system/classes/Kohana/File.php:78
2015-05-16 15:21:35 --- DEBUG: #0 /Users/saurav/Sites/kohana/system/classes/Kohana/File.php(78): Kohana_Core::error_handler(2, 'Illegal offset ...', '/Users/saurav/S...', 78, Array)
#1 /Users/saurav/Sites/kohana/modules/kohana-restful-api/classes/Kohana/Controller/Rest.php(186): Kohana_File::mime_by_ext(NULL)
#2 /Users/saurav/Sites/kohana/modules/kohana-restful-api/classes/Kohana/Controller/Rest.php(416): Kohana_Controller_Rest->rest_output(Array, 500)
#3 /Users/saurav/Sites/kohana/application/classes/Controller/Api/v1/User.php(42): Kohana_Controller_Rest->_error('An internal err...', 500)
#4 /Users/saurav/Sites/kohana/system/classes/Kohana/Controller.php(84): Controller_Api_V1_User->action_create()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/saurav/Sites/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_V1_User))
#7 /Users/saurav/Sites/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/saurav/Sites/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /Users/saurav/Sites/kohana/index.php(118): Kohana_Request->execute()
#10 {main} in /Users/saurav/Sites/kohana/system/classes/Kohana/File.php:78
2015-05-16 15:23:47 --- EMERGENCY: ErrorException [ 2 ]: Illegal offset type ~ SYSPATH/classes/Kohana/File.php [ 78 ] in /Users/saurav/Sites/kohana/system/classes/Kohana/File.php:78
2015-05-16 15:23:47 --- DEBUG: #0 /Users/saurav/Sites/kohana/system/classes/Kohana/File.php(78): Kohana_Core::error_handler(2, 'Illegal offset ...', '/Users/saurav/S...', 78, Array)
#1 /Users/saurav/Sites/kohana/modules/kohana-restful-api/classes/Kohana/Controller/Rest.php(186): Kohana_File::mime_by_ext(NULL)
#2 /Users/saurav/Sites/kohana/modules/kohana-restful-api/classes/Kohana/Controller/Rest.php(416): Kohana_Controller_Rest->rest_output(Array, 500)
#3 /Users/saurav/Sites/kohana/application/classes/Controller/Api/v1/User.php(42): Kohana_Controller_Rest->_error('An internal err...', 500)
#4 /Users/saurav/Sites/kohana/system/classes/Kohana/Controller.php(84): Controller_Api_V1_User->action_create()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/saurav/Sites/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_V1_User))
#7 /Users/saurav/Sites/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/saurav/Sites/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /Users/saurav/Sites/kohana/index.php(118): Kohana_Request->execute()
#10 {main} in /Users/saurav/Sites/kohana/system/classes/Kohana/File.php:78
2015-05-16 15:27:44 --- EMERGENCY: ErrorException [ 2 ]: Illegal offset type ~ SYSPATH/classes/Kohana/File.php [ 78 ] in /Users/saurav/Sites/kohana/system/classes/Kohana/File.php:78
2015-05-16 15:27:44 --- DEBUG: #0 /Users/saurav/Sites/kohana/system/classes/Kohana/File.php(78): Kohana_Core::error_handler(2, 'Illegal offset ...', '/Users/saurav/S...', 78, Array)
#1 /Users/saurav/Sites/kohana/modules/kohana-restful-api/classes/Kohana/Controller/Rest.php(186): Kohana_File::mime_by_ext(NULL)
#2 /Users/saurav/Sites/kohana/modules/kohana-restful-api/classes/Kohana/Controller/Rest.php(416): Kohana_Controller_Rest->rest_output(Array, 500)
#3 /Users/saurav/Sites/kohana/application/classes/Controller/Api/v1/User.php(42): Kohana_Controller_Rest->_error('An internal err...', 500)
#4 /Users/saurav/Sites/kohana/system/classes/Kohana/Controller.php(84): Controller_Api_V1_User->action_create()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/saurav/Sites/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_V1_User))
#7 /Users/saurav/Sites/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/saurav/Sites/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /Users/saurav/Sites/kohana/index.php(118): Kohana_Request->execute()
#10 {main} in /Users/saurav/Sites/kohana/system/classes/Kohana/File.php:78
2015-05-16 15:28:15 --- EMERGENCY: ErrorException [ 2 ]: Illegal offset type ~ SYSPATH/classes/Kohana/File.php [ 78 ] in /Users/saurav/Sites/kohana/system/classes/Kohana/File.php:78
2015-05-16 15:28:15 --- DEBUG: #0 /Users/saurav/Sites/kohana/system/classes/Kohana/File.php(78): Kohana_Core::error_handler(2, 'Illegal offset ...', '/Users/saurav/S...', 78, Array)
#1 /Users/saurav/Sites/kohana/modules/kohana-restful-api/classes/Kohana/Controller/Rest.php(186): Kohana_File::mime_by_ext(NULL)
#2 /Users/saurav/Sites/kohana/modules/kohana-restful-api/classes/Kohana/Controller/Rest.php(416): Kohana_Controller_Rest->rest_output(Array, 500)
#3 /Users/saurav/Sites/kohana/application/classes/Controller/Api/v1/User.php(42): Kohana_Controller_Rest->_error('An internal err...', 500)
#4 /Users/saurav/Sites/kohana/system/classes/Kohana/Controller.php(84): Controller_Api_V1_User->action_create()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/saurav/Sites/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_V1_User))
#7 /Users/saurav/Sites/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/saurav/Sites/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /Users/saurav/Sites/kohana/index.php(118): Kohana_Request->execute()
#10 {main} in /Users/saurav/Sites/kohana/system/classes/Kohana/File.php:78
2015-05-16 15:28:16 --- EMERGENCY: ErrorException [ 2 ]: Illegal offset type ~ SYSPATH/classes/Kohana/File.php [ 78 ] in /Users/saurav/Sites/kohana/system/classes/Kohana/File.php:78
2015-05-16 15:28:16 --- DEBUG: #0 /Users/saurav/Sites/kohana/system/classes/Kohana/File.php(78): Kohana_Core::error_handler(2, 'Illegal offset ...', '/Users/saurav/S...', 78, Array)
#1 /Users/saurav/Sites/kohana/modules/kohana-restful-api/classes/Kohana/Controller/Rest.php(186): Kohana_File::mime_by_ext(NULL)
#2 /Users/saurav/Sites/kohana/modules/kohana-restful-api/classes/Kohana/Controller/Rest.php(416): Kohana_Controller_Rest->rest_output(Array, 500)
#3 /Users/saurav/Sites/kohana/application/classes/Controller/Api/v1/User.php(42): Kohana_Controller_Rest->_error('An internal err...', 500)
#4 /Users/saurav/Sites/kohana/system/classes/Kohana/Controller.php(84): Controller_Api_V1_User->action_create()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/saurav/Sites/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_V1_User))
#7 /Users/saurav/Sites/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/saurav/Sites/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /Users/saurav/Sites/kohana/index.php(118): Kohana_Request->execute()
#10 {main} in /Users/saurav/Sites/kohana/system/classes/Kohana/File.php:78
2015-05-16 15:28:32 --- EMERGENCY: ErrorException [ 2 ]: Illegal offset type ~ SYSPATH/classes/Kohana/File.php [ 78 ] in /Users/saurav/Sites/kohana/system/classes/Kohana/File.php:78
2015-05-16 15:28:32 --- DEBUG: #0 /Users/saurav/Sites/kohana/system/classes/Kohana/File.php(78): Kohana_Core::error_handler(2, 'Illegal offset ...', '/Users/saurav/S...', 78, Array)
#1 /Users/saurav/Sites/kohana/modules/kohana-restful-api/classes/Kohana/Controller/Rest.php(186): Kohana_File::mime_by_ext(NULL)
#2 /Users/saurav/Sites/kohana/modules/kohana-restful-api/classes/Kohana/Controller/Rest.php(416): Kohana_Controller_Rest->rest_output(Array, 500)
#3 /Users/saurav/Sites/kohana/application/classes/Controller/Api/v1/User.php(42): Kohana_Controller_Rest->_error('An internal err...', 500)
#4 /Users/saurav/Sites/kohana/system/classes/Kohana/Controller.php(84): Controller_Api_V1_User->action_create()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/saurav/Sites/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_V1_User))
#7 /Users/saurav/Sites/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/saurav/Sites/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /Users/saurav/Sites/kohana/index.php(118): Kohana_Request->execute()
#10 {main} in /Users/saurav/Sites/kohana/system/classes/Kohana/File.php:78
2015-05-16 15:29:37 --- EMERGENCY: ErrorException [ 2 ]: Illegal offset type ~ SYSPATH/classes/Kohana/File.php [ 78 ] in /Users/saurav/Sites/kohana/system/classes/Kohana/File.php:78
2015-05-16 15:29:37 --- DEBUG: #0 /Users/saurav/Sites/kohana/system/classes/Kohana/File.php(78): Kohana_Core::error_handler(2, 'Illegal offset ...', '/Users/saurav/S...', 78, Array)
#1 /Users/saurav/Sites/kohana/modules/kohana-restful-api/classes/Kohana/Controller/Rest.php(186): Kohana_File::mime_by_ext(NULL)
#2 /Users/saurav/Sites/kohana/modules/kohana-restful-api/classes/Kohana/Controller/Rest.php(416): Kohana_Controller_Rest->rest_output(Array, 500)
#3 /Users/saurav/Sites/kohana/application/classes/Controller/Api/v1/User.php(42): Kohana_Controller_Rest->_error('An internal err...', 500)
#4 /Users/saurav/Sites/kohana/system/classes/Kohana/Controller.php(84): Controller_Api_V1_User->action_create()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/saurav/Sites/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_V1_User))
#7 /Users/saurav/Sites/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/saurav/Sites/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /Users/saurav/Sites/kohana/index.php(118): Kohana_Request->execute()
#10 {main} in /Users/saurav/Sites/kohana/system/classes/Kohana/File.php:78
2015-05-16 15:29:40 --- EMERGENCY: ErrorException [ 2 ]: Illegal offset type ~ SYSPATH/classes/Kohana/File.php [ 78 ] in /Users/saurav/Sites/kohana/system/classes/Kohana/File.php:78
2015-05-16 15:29:40 --- DEBUG: #0 /Users/saurav/Sites/kohana/system/classes/Kohana/File.php(78): Kohana_Core::error_handler(2, 'Illegal offset ...', '/Users/saurav/S...', 78, Array)
#1 /Users/saurav/Sites/kohana/modules/kohana-restful-api/classes/Kohana/Controller/Rest.php(186): Kohana_File::mime_by_ext(NULL)
#2 /Users/saurav/Sites/kohana/modules/kohana-restful-api/classes/Kohana/Controller/Rest.php(416): Kohana_Controller_Rest->rest_output(Array, 500)
#3 /Users/saurav/Sites/kohana/application/classes/Controller/Api/v1/User.php(42): Kohana_Controller_Rest->_error('An internal err...', 500)
#4 /Users/saurav/Sites/kohana/system/classes/Kohana/Controller.php(84): Controller_Api_V1_User->action_create()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/saurav/Sites/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_V1_User))
#7 /Users/saurav/Sites/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/saurav/Sites/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /Users/saurav/Sites/kohana/index.php(118): Kohana_Request->execute()
#10 {main} in /Users/saurav/Sites/kohana/system/classes/Kohana/File.php:78
2015-05-16 15:31:26 --- EMERGENCY: ErrorException [ 2 ]: Illegal offset type ~ SYSPATH/classes/Kohana/File.php [ 78 ] in /Users/saurav/Sites/kohana/system/classes/Kohana/File.php:78
2015-05-16 15:31:26 --- DEBUG: #0 /Users/saurav/Sites/kohana/system/classes/Kohana/File.php(78): Kohana_Core::error_handler(2, 'Illegal offset ...', '/Users/saurav/S...', 78, Array)
#1 /Users/saurav/Sites/kohana/modules/kohana-restful-api/classes/Kohana/Controller/Rest.php(186): Kohana_File::mime_by_ext(NULL)
#2 /Users/saurav/Sites/kohana/modules/kohana-restful-api/classes/Kohana/Controller/Rest.php(416): Kohana_Controller_Rest->rest_output(Array, 500)
#3 /Users/saurav/Sites/kohana/application/classes/Controller/Api/v1/User.php(42): Kohana_Controller_Rest->_error('An internal err...', 500)
#4 /Users/saurav/Sites/kohana/system/classes/Kohana/Controller.php(84): Controller_Api_V1_User->action_create()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/saurav/Sites/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_V1_User))
#7 /Users/saurav/Sites/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/saurav/Sites/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /Users/saurav/Sites/kohana/index.php(118): Kohana_Request->execute()
#10 {main} in /Users/saurav/Sites/kohana/system/classes/Kohana/File.php:78
2015-05-16 15:34:01 --- EMERGENCY: ErrorException [ 2 ]: Illegal offset type ~ SYSPATH/classes/Kohana/File.php [ 78 ] in /Users/saurav/Sites/kohana/system/classes/Kohana/File.php:78
2015-05-16 15:34:01 --- DEBUG: #0 /Users/saurav/Sites/kohana/system/classes/Kohana/File.php(78): Kohana_Core::error_handler(2, 'Illegal offset ...', '/Users/saurav/S...', 78, Array)
#1 /Users/saurav/Sites/kohana/modules/kohana-restful-api/classes/Kohana/Controller/Rest.php(186): Kohana_File::mime_by_ext(NULL)
#2 /Users/saurav/Sites/kohana/modules/kohana-restful-api/classes/Kohana/Controller/Rest.php(416): Kohana_Controller_Rest->rest_output(Array, 500)
#3 /Users/saurav/Sites/kohana/application/classes/Controller/Api/v1/User.php(42): Kohana_Controller_Rest->_error('An internal err...', 500)
#4 /Users/saurav/Sites/kohana/system/classes/Kohana/Controller.php(84): Controller_Api_V1_User->action_create()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/saurav/Sites/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_V1_User))
#7 /Users/saurav/Sites/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/saurav/Sites/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /Users/saurav/Sites/kohana/index.php(118): Kohana_Request->execute()
#10 {main} in /Users/saurav/Sites/kohana/system/classes/Kohana/File.php:78
2015-05-16 15:34:15 --- EMERGENCY: ErrorException [ 2 ]: Illegal offset type ~ SYSPATH/classes/Kohana/File.php [ 78 ] in /Users/saurav/Sites/kohana/system/classes/Kohana/File.php:78
2015-05-16 15:34:15 --- DEBUG: #0 /Users/saurav/Sites/kohana/system/classes/Kohana/File.php(78): Kohana_Core::error_handler(2, 'Illegal offset ...', '/Users/saurav/S...', 78, Array)
#1 /Users/saurav/Sites/kohana/modules/kohana-restful-api/classes/Kohana/Controller/Rest.php(186): Kohana_File::mime_by_ext(NULL)
#2 /Users/saurav/Sites/kohana/modules/kohana-restful-api/classes/Kohana/Controller/Rest.php(416): Kohana_Controller_Rest->rest_output(Array, 500)
#3 /Users/saurav/Sites/kohana/application/classes/Controller/Api/v1/User.php(42): Kohana_Controller_Rest->_error('An internal err...', 500)
#4 /Users/saurav/Sites/kohana/system/classes/Kohana/Controller.php(84): Controller_Api_V1_User->action_create()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/saurav/Sites/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_V1_User))
#7 /Users/saurav/Sites/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/saurav/Sites/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /Users/saurav/Sites/kohana/index.php(118): Kohana_Request->execute()
#10 {main} in /Users/saurav/Sites/kohana/system/classes/Kohana/File.php:78
2015-05-16 15:34:23 --- EMERGENCY: ErrorException [ 2 ]: Illegal offset type ~ SYSPATH/classes/Kohana/File.php [ 78 ] in /Users/saurav/Sites/kohana/system/classes/Kohana/File.php:78
2015-05-16 15:34:23 --- DEBUG: #0 /Users/saurav/Sites/kohana/system/classes/Kohana/File.php(78): Kohana_Core::error_handler(2, 'Illegal offset ...', '/Users/saurav/S...', 78, Array)
#1 /Users/saurav/Sites/kohana/modules/kohana-restful-api/classes/Kohana/Controller/Rest.php(186): Kohana_File::mime_by_ext(NULL)
#2 /Users/saurav/Sites/kohana/modules/kohana-restful-api/classes/Kohana/Controller/Rest.php(416): Kohana_Controller_Rest->rest_output(Array, 500)
#3 /Users/saurav/Sites/kohana/application/classes/Controller/Api/v1/User.php(42): Kohana_Controller_Rest->_error('An internal err...', 500)
#4 /Users/saurav/Sites/kohana/system/classes/Kohana/Controller.php(84): Controller_Api_V1_User->action_create()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/saurav/Sites/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_V1_User))
#7 /Users/saurav/Sites/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/saurav/Sites/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /Users/saurav/Sites/kohana/index.php(118): Kohana_Request->execute()
#10 {main} in /Users/saurav/Sites/kohana/system/classes/Kohana/File.php:78