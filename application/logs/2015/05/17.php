<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-05-17 01:09:14 --- EMERGENCY: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 67 ] in /Users/saurav/Sites/kohana/modules/database/classes/Kohana/Database/MySQL.php:171
2015-05-17 01:09:14 --- DEBUG: #0 /Users/saurav/Sites/kohana/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#1 /Users/saurav/Sites/kohana/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 /Users/saurav/Sites/kohana/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('users')
#3 /Users/saurav/Sites/kohana/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#4 /Users/saurav/Sites/kohana/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#5 /Users/saurav/Sites/kohana/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#6 /Users/saurav/Sites/kohana/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#7 /Users/saurav/Sites/kohana/application/classes/Controller/Api/v1/User.php(9): Kohana_ORM::factory('user')
#8 /Users/saurav/Sites/kohana/system/classes/Kohana/Controller.php(84): Controller_Api_V1_User->action_create()
#9 [internal function]: Kohana_Controller->execute()
#10 /Users/saurav/Sites/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_V1_User))
#11 /Users/saurav/Sites/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Users/saurav/Sites/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 /Users/saurav/Sites/kohana/index.php(118): Kohana_Request->execute()
#14 {main} in /Users/saurav/Sites/kohana/modules/database/classes/Kohana/Database/MySQL.php:171
2015-05-17 01:12:33 --- EMERGENCY: ErrorException [ 4 ]: parse error, expecting `')'' ~ APPPATH/config/database.php [ 36 ] in file:line
2015-05-17 01:12:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-17 01:13:08 --- EMERGENCY: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 67 ] in /Users/saurav/Sites/kohana/modules/database/classes/Kohana/Database/MySQL.php:171
2015-05-17 01:13:08 --- DEBUG: #0 /Users/saurav/Sites/kohana/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#1 /Users/saurav/Sites/kohana/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 /Users/saurav/Sites/kohana/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('users')
#3 /Users/saurav/Sites/kohana/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#4 /Users/saurav/Sites/kohana/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#5 /Users/saurav/Sites/kohana/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#6 /Users/saurav/Sites/kohana/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#7 /Users/saurav/Sites/kohana/application/classes/Controller/Api/v1/User.php(9): Kohana_ORM::factory('user')
#8 /Users/saurav/Sites/kohana/system/classes/Kohana/Controller.php(84): Controller_Api_V1_User->action_create()
#9 [internal function]: Kohana_Controller->execute()
#10 /Users/saurav/Sites/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_V1_User))
#11 /Users/saurav/Sites/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Users/saurav/Sites/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 /Users/saurav/Sites/kohana/index.php(118): Kohana_Request->execute()
#14 {main} in /Users/saurav/Sites/kohana/modules/database/classes/Kohana/Database/MySQL.php:171
2015-05-17 01:14:04 --- EMERGENCY: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 67 ] in /Users/saurav/Sites/kohana/modules/database/classes/Kohana/Database/MySQL.php:171
2015-05-17 01:14:04 --- DEBUG: #0 /Users/saurav/Sites/kohana/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#1 /Users/saurav/Sites/kohana/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 /Users/saurav/Sites/kohana/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('users')
#3 /Users/saurav/Sites/kohana/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#4 /Users/saurav/Sites/kohana/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#5 /Users/saurav/Sites/kohana/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#6 /Users/saurav/Sites/kohana/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#7 /Users/saurav/Sites/kohana/application/classes/Controller/Api/v1/User.php(9): Kohana_ORM::factory('user')
#8 /Users/saurav/Sites/kohana/system/classes/Kohana/Controller.php(84): Controller_Api_V1_User->action_create()
#9 [internal function]: Kohana_Controller->execute()
#10 /Users/saurav/Sites/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_V1_User))
#11 /Users/saurav/Sites/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Users/saurav/Sites/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 /Users/saurav/Sites/kohana/index.php(118): Kohana_Request->execute()
#14 {main} in /Users/saurav/Sites/kohana/modules/database/classes/Kohana/Database/MySQL.php:171
2015-05-17 01:14:05 --- EMERGENCY: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 67 ] in /Users/saurav/Sites/kohana/modules/database/classes/Kohana/Database/MySQL.php:171
2015-05-17 01:14:05 --- DEBUG: #0 /Users/saurav/Sites/kohana/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#1 /Users/saurav/Sites/kohana/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 /Users/saurav/Sites/kohana/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('users')
#3 /Users/saurav/Sites/kohana/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#4 /Users/saurav/Sites/kohana/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#5 /Users/saurav/Sites/kohana/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#6 /Users/saurav/Sites/kohana/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#7 /Users/saurav/Sites/kohana/application/classes/Controller/Api/v1/User.php(9): Kohana_ORM::factory('user')
#8 /Users/saurav/Sites/kohana/system/classes/Kohana/Controller.php(84): Controller_Api_V1_User->action_create()
#9 [internal function]: Kohana_Controller->execute()
#10 /Users/saurav/Sites/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_V1_User))
#11 /Users/saurav/Sites/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Users/saurav/Sites/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 /Users/saurav/Sites/kohana/index.php(118): Kohana_Request->execute()
#14 {main} in /Users/saurav/Sites/kohana/modules/database/classes/Kohana/Database/MySQL.php:171
2015-05-17 01:25:56 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH/auth/classes/Kohana/Auth.php [ 155 ] in file:line
2015-05-17 01:25:56 --- DEBUG: #0 [internal function]: Kohana_Auth->hash('mypassword')
#1 /Users/saurav/Sites/kohana/modules/orm/classes/Kohana/ORM.php(1210): call_user_func_array(Array, Array)
#2 /Users/saurav/Sites/kohana/modules/orm/classes/Kohana/ORM.php(732): Kohana_ORM->run_filter('password', 'mypassword')
#3 /Users/saurav/Sites/kohana/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('password', 'mypassword')
#4 /Users/saurav/Sites/kohana/application/classes/Controller/Api/v1/User.php(11): Kohana_ORM->__set('password', 'mypassword')
#5 /Users/saurav/Sites/kohana/system/classes/Kohana/Controller.php(84): Controller_Api_V1_User->action_create()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/saurav/Sites/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_V1_User))
#8 /Users/saurav/Sites/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/saurav/Sites/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /Users/saurav/Sites/kohana/index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2015-05-17 01:30:11 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH/auth/classes/Kohana/Auth.php [ 155 ] in file:line
2015-05-17 01:30:11 --- DEBUG: #0 [internal function]: Kohana_Auth->hash('mypassword')
#1 /Users/saurav/Sites/kohana/modules/orm/classes/Kohana/ORM.php(1210): call_user_func_array(Array, Array)
#2 /Users/saurav/Sites/kohana/modules/orm/classes/Kohana/ORM.php(732): Kohana_ORM->run_filter('password', 'mypassword')
#3 /Users/saurav/Sites/kohana/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('password', 'mypassword')
#4 /Users/saurav/Sites/kohana/application/classes/Controller/Api/v1/User.php(11): Kohana_ORM->__set('password', 'mypassword')
#5 /Users/saurav/Sites/kohana/system/classes/Kohana/Controller.php(84): Controller_Api_V1_User->action_create()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/saurav/Sites/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_V1_User))
#8 /Users/saurav/Sites/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/saurav/Sites/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /Users/saurav/Sites/kohana/index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2015-05-17 01:31:47 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_MySQLi' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2015-05-17 01:31:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-17 01:32:05 --- EMERGENCY: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 67 ] in /Users/saurav/Sites/kohana/modules/database/classes/Kohana/Database/MySQL.php:171
2015-05-17 01:32:05 --- DEBUG: #0 /Users/saurav/Sites/kohana/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#1 /Users/saurav/Sites/kohana/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 /Users/saurav/Sites/kohana/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('users')
#3 /Users/saurav/Sites/kohana/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#4 /Users/saurav/Sites/kohana/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#5 /Users/saurav/Sites/kohana/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#6 /Users/saurav/Sites/kohana/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#7 /Users/saurav/Sites/kohana/application/classes/Controller/Api/v1/User.php(9): Kohana_ORM::factory('user')
#8 /Users/saurav/Sites/kohana/system/classes/Kohana/Controller.php(84): Controller_Api_V1_User->action_create()
#9 [internal function]: Kohana_Controller->execute()
#10 /Users/saurav/Sites/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_V1_User))
#11 /Users/saurav/Sites/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Users/saurav/Sites/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 /Users/saurav/Sites/kohana/index.php(118): Kohana_Request->execute()
#14 {main} in /Users/saurav/Sites/kohana/modules/database/classes/Kohana/Database/MySQL.php:171
2015-05-17 01:35:30 --- EMERGENCY: Kohana_Exception [ 0 ]: Database method list_columns is not supported by Kohana_Database_PDO ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 241 ] in /Users/saurav/Sites/kohana/modules/orm/classes/Kohana/ORM.php:1668
2015-05-17 01:35:30 --- DEBUG: #0 /Users/saurav/Sites/kohana/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_PDO->list_columns('users')
#1 /Users/saurav/Sites/kohana/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#2 /Users/saurav/Sites/kohana/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#3 /Users/saurav/Sites/kohana/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#4 /Users/saurav/Sites/kohana/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#5 /Users/saurav/Sites/kohana/application/classes/Controller/Api/v1/User.php(9): Kohana_ORM::factory('user')
#6 /Users/saurav/Sites/kohana/system/classes/Kohana/Controller.php(84): Controller_Api_V1_User->action_create()
#7 [internal function]: Kohana_Controller->execute()
#8 /Users/saurav/Sites/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_V1_User))
#9 /Users/saurav/Sites/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /Users/saurav/Sites/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /Users/saurav/Sites/kohana/index.php(118): Kohana_Request->execute()
#12 {main} in /Users/saurav/Sites/kohana/modules/orm/classes/Kohana/ORM.php:1668
2015-05-17 01:40:10 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_MySQLi' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2015-05-17 01:40:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-17 01:51:32 --- EMERGENCY: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 67 ] in /Users/saurav/Sites/kohana/modules/database/classes/Kohana/Database/MySQL.php:171
2015-05-17 01:51:32 --- DEBUG: #0 /Users/saurav/Sites/kohana/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#1 /Users/saurav/Sites/kohana/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 /Users/saurav/Sites/kohana/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('users')
#3 /Users/saurav/Sites/kohana/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#4 /Users/saurav/Sites/kohana/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#5 /Users/saurav/Sites/kohana/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#6 /Users/saurav/Sites/kohana/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#7 /Users/saurav/Sites/kohana/application/classes/Controller/Api/v1/User.php(9): Kohana_ORM::factory('user')
#8 /Users/saurav/Sites/kohana/system/classes/Kohana/Controller.php(84): Controller_Api_V1_User->action_create()
#9 [internal function]: Kohana_Controller->execute()
#10 /Users/saurav/Sites/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_V1_User))
#11 /Users/saurav/Sites/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Users/saurav/Sites/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 /Users/saurav/Sites/kohana/index.php(118): Kohana_Request->execute()
#14 {main} in /Users/saurav/Sites/kohana/modules/database/classes/Kohana/Database/MySQL.php:171
2015-05-17 07:33:00 --- EMERGENCY: ErrorException [ 1 ]: Class 'Kohana_Database_MySQLi' not found ~ MODPATH/database/classes/Database/MySQLi.php [ 3 ] in file:line
2015-05-17 07:33:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-17 07:35:31 --- EMERGENCY: ErrorException [ 1 ]: Class 'Kohana_Database_MySQLi' not found ~ MODPATH/database/classes/Database/MySQLi.php [ 3 ] in file:line
2015-05-17 07:35:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-17 07:36:48 --- EMERGENCY: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'mysqli' at 'MODPATH/mysqli' ~ SYSPATH/classes/Kohana/Core.php [ 579 ] in /Users/saurav/Sites/kohana/application/bootstrap.php:135
2015-05-17 07:36:48 --- DEBUG: #0 /Users/saurav/Sites/kohana/application/bootstrap.php(135): Kohana_Core::modules(Array)
#1 /Users/saurav/Sites/kohana/index.php(102): require('/Users/saurav/S...')
#2 {main} in /Users/saurav/Sites/kohana/application/bootstrap.php:135
2015-05-17 07:38:34 --- EMERGENCY: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'mysqli' at 'MODPATH/mysqli' ~ SYSPATH/classes/Kohana/Core.php [ 579 ] in /Users/saurav/Sites/kohana/application/bootstrap.php:135
2015-05-17 07:38:34 --- DEBUG: #0 /Users/saurav/Sites/kohana/application/bootstrap.php(135): Kohana_Core::modules(Array)
#1 /Users/saurav/Sites/kohana/index.php(102): require('/Users/saurav/S...')
#2 {main} in /Users/saurav/Sites/kohana/application/bootstrap.php:135
2015-05-17 07:38:35 --- EMERGENCY: Kohana_Exception [ 0 ]: Attempted to load an invalid or missing module 'mysqli' at 'MODPATH/mysqli' ~ SYSPATH/classes/Kohana/Core.php [ 579 ] in /Users/saurav/Sites/kohana/application/bootstrap.php:135
2015-05-17 07:38:35 --- DEBUG: #0 /Users/saurav/Sites/kohana/application/bootstrap.php(135): Kohana_Core::modules(Array)
#1 /Users/saurav/Sites/kohana/index.php(102): require('/Users/saurav/S...')
#2 {main} in /Users/saurav/Sites/kohana/application/bootstrap.php:135
2015-05-17 07:38:44 --- EMERGENCY: ErrorException [ 1 ]: Class 'Kohana_Database_MySQLi' not found ~ MODPATH/database/classes/Database/MySQLi.php [ 3 ] in file:line
2015-05-17 07:38:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-17 07:40:27 --- EMERGENCY: ErrorException [ 1 ]: Class 'Kohana_Database_MySQLi' not found ~ MODPATH/database/classes/Database/MySQLi.php [ 3 ] in file:line
2015-05-17 07:40:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-17 07:40:28 --- EMERGENCY: ErrorException [ 1 ]: Class 'Kohana_Database_MySQLi' not found ~ MODPATH/database/classes/Database/MySQLi.php [ 3 ] in file:line
2015-05-17 07:40:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-17 07:40:29 --- EMERGENCY: ErrorException [ 1 ]: Class 'Kohana_Database_MySQLi' not found ~ MODPATH/database/classes/Database/MySQLi.php [ 3 ] in file:line
2015-05-17 07:40:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-17 07:42:20 --- EMERGENCY: ErrorException [ 1 ]: Class 'Kohana_Database_MySQLi' not found ~ MODPATH/database/classes/Database/MySQLi.php [ 3 ] in file:line
2015-05-17 07:42:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-17 07:42:21 --- EMERGENCY: ErrorException [ 1 ]: Class 'Kohana_Database_MySQLi' not found ~ MODPATH/database/classes/Database/MySQLi.php [ 3 ] in file:line
2015-05-17 07:42:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-17 07:45:05 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH/auth/classes/Kohana/Auth.php [ 155 ] in file:line
2015-05-17 07:45:05 --- DEBUG: #0 [internal function]: Kohana_Auth->hash('mypassword')
#1 /Users/saurav/Sites/kohana/modules/orm/classes/Kohana/ORM.php(1210): call_user_func_array(Array, Array)
#2 /Users/saurav/Sites/kohana/modules/orm/classes/Kohana/ORM.php(732): Kohana_ORM->run_filter('password', 'mypassword')
#3 /Users/saurav/Sites/kohana/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('password', 'mypassword')
#4 /Users/saurav/Sites/kohana/application/classes/Controller/Api/v1/User.php(11): Kohana_ORM->__set('password', 'mypassword')
#5 /Users/saurav/Sites/kohana/system/classes/Kohana/Controller.php(84): Controller_Api_V1_User->action_create()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/saurav/Sites/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_V1_User))
#8 /Users/saurav/Sites/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/saurav/Sites/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /Users/saurav/Sites/kohana/index.php(117): Kohana_Request->execute()
#11 {main} in file:line
2015-05-17 07:45:23 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH/auth/classes/Kohana/Auth.php [ 155 ] in file:line
2015-05-17 07:45:23 --- DEBUG: #0 [internal function]: Kohana_Auth->hash('mypassword')
#1 /Users/saurav/Sites/kohana/modules/orm/classes/Kohana/ORM.php(1210): call_user_func_array(Array, Array)
#2 /Users/saurav/Sites/kohana/modules/orm/classes/Kohana/ORM.php(732): Kohana_ORM->run_filter('password', 'mypassword')
#3 /Users/saurav/Sites/kohana/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('password', 'mypassword')
#4 /Users/saurav/Sites/kohana/application/classes/Controller/Api/v1/User.php(11): Kohana_ORM->__set('password', 'mypassword')
#5 /Users/saurav/Sites/kohana/system/classes/Kohana/Controller.php(84): Controller_Api_V1_User->action_create()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/saurav/Sites/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_V1_User))
#8 /Users/saurav/Sites/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/saurav/Sites/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /Users/saurav/Sites/kohana/index.php(117): Kohana_Request->execute()
#11 {main} in file:line
2015-05-17 07:45:51 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH/auth/classes/Kohana/Auth.php [ 155 ] in file:line
2015-05-17 07:45:51 --- DEBUG: #0 [internal function]: Kohana_Auth->hash('mypassword')
#1 /Users/saurav/Sites/kohana/modules/orm/classes/Kohana/ORM.php(1210): call_user_func_array(Array, Array)
#2 /Users/saurav/Sites/kohana/modules/orm/classes/Kohana/ORM.php(732): Kohana_ORM->run_filter('password', 'mypassword')
#3 /Users/saurav/Sites/kohana/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('password', 'mypassword')
#4 /Users/saurav/Sites/kohana/application/classes/Controller/Api/v1/User.php(11): Kohana_ORM->__set('password', 'mypassword')
#5 /Users/saurav/Sites/kohana/system/classes/Kohana/Controller.php(84): Controller_Api_V1_User->action_create()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/saurav/Sites/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_V1_User))
#8 /Users/saurav/Sites/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/saurav/Sites/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /Users/saurav/Sites/kohana/index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2015-05-17 07:45:52 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH/auth/classes/Kohana/Auth.php [ 155 ] in file:line
2015-05-17 07:45:52 --- DEBUG: #0 [internal function]: Kohana_Auth->hash('mypassword')
#1 /Users/saurav/Sites/kohana/modules/orm/classes/Kohana/ORM.php(1210): call_user_func_array(Array, Array)
#2 /Users/saurav/Sites/kohana/modules/orm/classes/Kohana/ORM.php(732): Kohana_ORM->run_filter('password', 'mypassword')
#3 /Users/saurav/Sites/kohana/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('password', 'mypassword')
#4 /Users/saurav/Sites/kohana/application/classes/Controller/Api/v1/User.php(11): Kohana_ORM->__set('password', 'mypassword')
#5 /Users/saurav/Sites/kohana/system/classes/Kohana/Controller.php(84): Controller_Api_V1_User->action_create()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/saurav/Sites/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_V1_User))
#8 /Users/saurav/Sites/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/saurav/Sites/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /Users/saurav/Sites/kohana/index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2015-05-17 07:45:53 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH/auth/classes/Kohana/Auth.php [ 155 ] in file:line
2015-05-17 07:45:53 --- DEBUG: #0 [internal function]: Kohana_Auth->hash('mypassword')
#1 /Users/saurav/Sites/kohana/modules/orm/classes/Kohana/ORM.php(1210): call_user_func_array(Array, Array)
#2 /Users/saurav/Sites/kohana/modules/orm/classes/Kohana/ORM.php(732): Kohana_ORM->run_filter('password', 'mypassword')
#3 /Users/saurav/Sites/kohana/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('password', 'mypassword')
#4 /Users/saurav/Sites/kohana/application/classes/Controller/Api/v1/User.php(11): Kohana_ORM->__set('password', 'mypassword')
#5 /Users/saurav/Sites/kohana/system/classes/Kohana/Controller.php(84): Controller_Api_V1_User->action_create()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/saurav/Sites/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_V1_User))
#8 /Users/saurav/Sites/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/saurav/Sites/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /Users/saurav/Sites/kohana/index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2015-05-17 07:46:21 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH/auth/classes/Kohana/Auth.php [ 155 ] in file:line
2015-05-17 07:46:21 --- DEBUG: #0 [internal function]: Kohana_Auth->hash('mypassword')
#1 /Users/saurav/Sites/kohana/modules/orm/classes/Kohana/ORM.php(1210): call_user_func_array(Array, Array)
#2 /Users/saurav/Sites/kohana/modules/orm/classes/Kohana/ORM.php(732): Kohana_ORM->run_filter('password', 'mypassword')
#3 /Users/saurav/Sites/kohana/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('password', 'mypassword')
#4 /Users/saurav/Sites/kohana/application/classes/Controller/Api/v1/User.php(11): Kohana_ORM->__set('password', 'mypassword')
#5 /Users/saurav/Sites/kohana/system/classes/Kohana/Controller.php(84): Controller_Api_V1_User->action_create()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/saurav/Sites/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_V1_User))
#8 /Users/saurav/Sites/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/saurav/Sites/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /Users/saurav/Sites/kohana/index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2015-05-17 07:47:18 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH/auth/classes/Kohana/Auth.php [ 155 ] in file:line
2015-05-17 07:47:18 --- DEBUG: #0 [internal function]: Kohana_Auth->hash('mypassword')
#1 /Users/saurav/Sites/kohana/modules/orm/classes/Kohana/ORM.php(1210): call_user_func_array(Array, Array)
#2 /Users/saurav/Sites/kohana/modules/orm/classes/Kohana/ORM.php(732): Kohana_ORM->run_filter('password', 'mypassword')
#3 /Users/saurav/Sites/kohana/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('password', 'mypassword')
#4 /Users/saurav/Sites/kohana/application/classes/Controller/Api/v1/User.php(11): Kohana_ORM->__set('password', 'mypassword')
#5 /Users/saurav/Sites/kohana/system/classes/Kohana/Controller.php(84): Controller_Api_V1_User->action_create()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/saurav/Sites/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_V1_User))
#8 /Users/saurav/Sites/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/saurav/Sites/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /Users/saurav/Sites/kohana/index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2015-05-17 07:47:19 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH/auth/classes/Kohana/Auth.php [ 155 ] in file:line
2015-05-17 07:47:19 --- DEBUG: #0 [internal function]: Kohana_Auth->hash('mypassword')
#1 /Users/saurav/Sites/kohana/modules/orm/classes/Kohana/ORM.php(1210): call_user_func_array(Array, Array)
#2 /Users/saurav/Sites/kohana/modules/orm/classes/Kohana/ORM.php(732): Kohana_ORM->run_filter('password', 'mypassword')
#3 /Users/saurav/Sites/kohana/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('password', 'mypassword')
#4 /Users/saurav/Sites/kohana/application/classes/Controller/Api/v1/User.php(11): Kohana_ORM->__set('password', 'mypassword')
#5 /Users/saurav/Sites/kohana/system/classes/Kohana/Controller.php(84): Controller_Api_V1_User->action_create()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/saurav/Sites/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_V1_User))
#8 /Users/saurav/Sites/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/saurav/Sites/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /Users/saurav/Sites/kohana/index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2015-05-17 07:50:51 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH/auth/classes/Kohana/Auth.php [ 155 ] in file:line
2015-05-17 07:50:51 --- DEBUG: #0 [internal function]: Kohana_Auth->hash('hgfhghfhg')
#1 /Users/saurav/Sites/kohana/modules/orm/classes/Kohana/ORM.php(1210): call_user_func_array(Array, Array)
#2 /Users/saurav/Sites/kohana/modules/orm/classes/Kohana/ORM.php(732): Kohana_ORM->run_filter('password', 'hgfhghfhg')
#3 /Users/saurav/Sites/kohana/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('password', 'hgfhghfhg')
#4 /Users/saurav/Sites/kohana/application/classes/Controller/Api/v1/User.php(11): Kohana_ORM->__set('password', 'hgfhghfhg')
#5 /Users/saurav/Sites/kohana/system/classes/Kohana/Controller.php(84): Controller_Api_V1_User->action_create()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/saurav/Sites/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_V1_User))
#8 /Users/saurav/Sites/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/saurav/Sites/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /Users/saurav/Sites/kohana/index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2015-05-17 07:51:26 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH/auth/classes/Kohana/Auth.php [ 155 ] in file:line
2015-05-17 07:51:26 --- DEBUG: #0 [internal function]: Kohana_Auth->hash('hgfhghfhg')
#1 /Users/saurav/Sites/kohana/modules/orm/classes/Kohana/ORM.php(1210): call_user_func_array(Array, Array)
#2 /Users/saurav/Sites/kohana/modules/orm/classes/Kohana/ORM.php(732): Kohana_ORM->run_filter('password', 'hgfhghfhg')
#3 /Users/saurav/Sites/kohana/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('password', 'hgfhghfhg')
#4 /Users/saurav/Sites/kohana/application/classes/Controller/Api/v1/User.php(11): Kohana_ORM->__set('password', 'hgfhghfhg')
#5 /Users/saurav/Sites/kohana/system/classes/Kohana/Controller.php(84): Controller_Api_V1_User->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/saurav/Sites/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_V1_User))
#8 /Users/saurav/Sites/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/saurav/Sites/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 /Users/saurav/Sites/kohana/index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2015-05-17 08:07:43 --- EMERGENCY: ErrorException [ 4 ]: parse error ~ APPPATH/classes/Controller/Api/v1/User.php [ 29 ] in file:line
2015-05-17 08:07:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-17 15:22:37 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Controller_Api_V1_User::$rresponse ~ APPPATH/classes/Controller/Api/v1/User.php [ 54 ] in /Users/saurav/Sites/kohana/application/classes/Controller/Api/v1/User.php:54
2015-05-17 15:22:37 --- DEBUG: #0 /Users/saurav/Sites/kohana/application/classes/Controller/Api/v1/User.php(54): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/saurav/S...', 54, Array)
#1 /Users/saurav/Sites/kohana/system/classes/Kohana/Controller.php(84): Controller_Api_V1_User->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/saurav/Sites/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_V1_User))
#4 /Users/saurav/Sites/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/saurav/Sites/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /Users/saurav/Sites/kohana/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/saurav/Sites/kohana/application/classes/Controller/Api/v1/User.php:54
2015-05-17 15:23:11 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Controller_Api_V1_User::$rresponse ~ APPPATH/classes/Controller/Api/v1/User.php [ 54 ] in /Users/saurav/Sites/kohana/application/classes/Controller/Api/v1/User.php:54
2015-05-17 15:23:11 --- DEBUG: #0 /Users/saurav/Sites/kohana/application/classes/Controller/Api/v1/User.php(54): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/saurav/S...', 54, Array)
#1 /Users/saurav/Sites/kohana/system/classes/Kohana/Controller.php(84): Controller_Api_V1_User->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/saurav/Sites/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_V1_User))
#4 /Users/saurav/Sites/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/saurav/Sites/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /Users/saurav/Sites/kohana/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/saurav/Sites/kohana/application/classes/Controller/Api/v1/User.php:54
2015-05-17 15:24:28 --- EMERGENCY: ErrorException [ 4 ]: parse error ~ APPPATH/classes/Controller/Api/v1/User.php [ 54 ] in file:line
2015-05-17 15:24:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-17 16:39:42 --- EMERGENCY: ErrorException [ 4 ]: parse error ~ APPPATH/classes/Controller/Api/v1/User.php [ 21 ] in file:line
2015-05-17 16:39:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-17 16:42:03 --- EMERGENCY: ErrorException [ 4 ]: parse error ~ APPPATH/classes/Controller/Api/v1/User.php [ 21 ] in file:line
2015-05-17 16:42:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-17 16:42:23 --- EMERGENCY: ErrorException [ 4 ]: parse error ~ APPPATH/classes/Controller/Api/v1/User.php [ 27 ] in file:line
2015-05-17 16:42:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-17 16:42:50 --- EMERGENCY: ErrorException [ 4 ]: parse error ~ APPPATH/classes/Controller/Api/v1/User.php [ 27 ] in file:line
2015-05-17 16:42:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-17 16:50:59 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Controller_Api_V1_User::$params ~ APPPATH/classes/Controller/Api/v1/User.php [ 13 ] in /Users/saurav/Sites/kohana/application/classes/Controller/Api/v1/User.php:13
2015-05-17 16:50:59 --- DEBUG: #0 /Users/saurav/Sites/kohana/application/classes/Controller/Api/v1/User.php(13): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/saurav/S...', 13, Array)
#1 /Users/saurav/Sites/kohana/system/classes/Kohana/Controller.php(84): Controller_Api_V1_User->action_signup()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/saurav/Sites/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_V1_User))
#4 /Users/saurav/Sites/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/saurav/Sites/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /Users/saurav/Sites/kohana/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/saurav/Sites/kohana/application/classes/Controller/Api/v1/User.php:13
2015-05-17 16:53:36 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Controller_Api_V1_User::$_rest ~ APPPATH/classes/Controller/Api/v1/User.php [ 13 ] in /Users/saurav/Sites/kohana/application/classes/Controller/Api/v1/User.php:13
2015-05-17 16:53:36 --- DEBUG: #0 /Users/saurav/Sites/kohana/application/classes/Controller/Api/v1/User.php(13): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/saurav/S...', 13, Array)
#1 /Users/saurav/Sites/kohana/system/classes/Kohana/Controller.php(84): Controller_Api_V1_User->action_signup()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/saurav/Sites/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_V1_User))
#4 /Users/saurav/Sites/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/saurav/Sites/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /Users/saurav/Sites/kohana/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/saurav/Sites/kohana/application/classes/Controller/Api/v1/User.php:13
2015-05-17 16:58:46 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Controller_Api_V1_User::$_rest ~ APPPATH/classes/Controller/Api/v1/User.php [ 13 ] in /Users/saurav/Sites/kohana/application/classes/Controller/Api/v1/User.php:13
2015-05-17 16:58:46 --- DEBUG: #0 /Users/saurav/Sites/kohana/application/classes/Controller/Api/v1/User.php(13): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/saurav/S...', 13, Array)
#1 /Users/saurav/Sites/kohana/system/classes/Kohana/Controller.php(84): Controller_Api_V1_User->action_signup()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/saurav/Sites/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_V1_User))
#4 /Users/saurav/Sites/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/saurav/Sites/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /Users/saurav/Sites/kohana/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/saurav/Sites/kohana/application/classes/Controller/Api/v1/User.php:13
2015-05-17 17:03:27 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Controller_Api_V1_User::$_rest ~ APPPATH/classes/Controller/Api/v1/User.php [ 13 ] in /Users/saurav/Sites/kohana/application/classes/Controller/Api/v1/User.php:13
2015-05-17 17:03:27 --- DEBUG: #0 /Users/saurav/Sites/kohana/application/classes/Controller/Api/v1/User.php(13): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/saurav/S...', 13, Array)
#1 /Users/saurav/Sites/kohana/system/classes/Kohana/Controller.php(84): Controller_Api_V1_User->action_signup()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/saurav/Sites/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_V1_User))
#4 /Users/saurav/Sites/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/saurav/Sites/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /Users/saurav/Sites/kohana/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/saurav/Sites/kohana/application/classes/Controller/Api/v1/User.php:13
2015-05-17 17:03:51 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Controller_Api_V1_User::$rest ~ APPPATH/classes/Controller/Api/v1/User.php [ 13 ] in /Users/saurav/Sites/kohana/application/classes/Controller/Api/v1/User.php:13
2015-05-17 17:03:51 --- DEBUG: #0 /Users/saurav/Sites/kohana/application/classes/Controller/Api/v1/User.php(13): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/saurav/S...', 13, Array)
#1 /Users/saurav/Sites/kohana/system/classes/Kohana/Controller.php(84): Controller_Api_V1_User->action_signup()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/saurav/Sites/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_V1_User))
#4 /Users/saurav/Sites/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/saurav/Sites/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /Users/saurav/Sites/kohana/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/saurav/Sites/kohana/application/classes/Controller/Api/v1/User.php:13
2015-05-17 17:04:23 --- EMERGENCY: ErrorException [ 2 ]: Illegal offset type ~ SYSPATH/classes/Kohana/File.php [ 78 ] in /Users/saurav/Sites/kohana/system/classes/Kohana/File.php:78
2015-05-17 17:04:23 --- DEBUG: #0 /Users/saurav/Sites/kohana/system/classes/Kohana/File.php(78): Kohana_Core::error_handler(2, 'Illegal offset ...', '/Users/saurav/S...', 78, Array)
#1 /Users/saurav/Sites/kohana/modules/kohana-restful-api/classes/Kohana/Controller/Rest.php(186): Kohana_File::mime_by_ext(NULL)
#2 /Users/saurav/Sites/kohana/application/classes/Controller/Api/v1/User.php(13): Kohana_Controller_Rest->rest_output(Array)
#3 /Users/saurav/Sites/kohana/system/classes/Kohana/Controller.php(84): Controller_Api_V1_User->action_signup()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/saurav/Sites/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_V1_User))
#6 /Users/saurav/Sites/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/saurav/Sites/kohana/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /Users/saurav/Sites/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /Users/saurav/Sites/kohana/system/classes/Kohana/File.php:78