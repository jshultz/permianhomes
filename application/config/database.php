<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------
| DATABASE CONNECTIVITY SETTINGS
| -------------------------------------------------------------------
| This file will contain the settings needed to access your database.
|
| For complete instructions please consult the 'Database Connection'
| page of the User Guide.
|
| -------------------------------------------------------------------
| EXPLANATION OF VARIABLES
| -------------------------------------------------------------------
|
|	['hostname'] The hostname of your database server.
|	['username'] The username used to connect to the database
|	['password'] The password used to connect to the database
|	['database'] The name of the database you want to connect to
|	['dbdriver'] The database type. ie: mysql.  Currently supported:
				 mysql, mysqli, postgre, odbc, mssql, sqlite, oci8
|	['dbprefix'] You can add an optional prefix, which will be added
|				 to the table name when using the  Active Record class
|	['pconnect'] TRUE/FALSE - Whether to use a persistent connection
|	['db_debug'] TRUE/FALSE - Whether database errors should be displayed.
|	['cache_on'] TRUE/FALSE - Enables/disables query caching
|	['cachedir'] The path to the folder where cache files should be stored
|	['char_set'] The character set used in communicating with the database
|	['dbcollat'] The character collation used in communicating with the database
|				 NOTE: For MySQL and MySQLi databases, this setting is only used
| 				 as a backup if your server is running PHP < 5.2.3 or MySQL < 5.0.7
|				 (and in table creation queries made with DB Forge).
| 				 There is an incompatibility in PHP with mysql_real_escape_string() which
| 				 can make your site vulnerable to SQL injection if you are using a
| 				 multi-byte character set and are running versions lower than these.
| 				 Sites using Latin-1 or UTF-8 database character set and collation are unaffected.
|	['swap_pre'] A default table prefix that should be swapped with the dbprefix
|	['autoinit'] Whether or not to automatically initialize the database.
|	['stricton'] TRUE/FALSE - forces 'Strict Mode' connections
|							- good for ensuring strict SQL while developing
|
| The $active_group variable lets you choose which connection group to
| make active.  By default there is only one group (the 'default' group).
|
| The $active_record variables lets you determine whether or not to load
| the active record class
*/

$active_group = 'develop';
$active_record = TRUE;

$db['develop']['hostname'] = 'localhost';
$db['develop']['username'] = 'root';
$db['develop']['password'] = 'vagrant';
$db['develop']['database'] = 'permianr_permian';
$db['develop']['dbdriver'] = 'mysql';
$db['develop']['dbprefix'] = '';
$db['develop']['pconnect'] = TRUE;
$db['develop']['db_debug'] = TRUE;
$db['develop']['cache_on'] = FALSE;
$db['develop']['cachedir'] = '';
$db['develop']['char_set'] = 'utf8';
$db['develop']['dbcollat'] = 'utf8_general_ci';
$db['develop']['swap_pre'] = '';
$db['develop']['autoinit'] = TRUE;
$db['develop']['stricton'] = FALSE;


$db['home']['hostname'] = 'localhost';
$db['home']['username'] = 'root';
$db['home']['password'] = '';
$db['home']['database'] = 'permian';
$db['home']['dbdriver'] = 'mysql';
$db['home']['dbprefix'] = '';
$db['home']['pconnect'] = TRUE;
$db['home']['db_debug'] = TRUE;
$db['home']['cache_on'] = FALSE;
$db['home']['cachedir'] = '';
$db['home']['char_set'] = 'utf8';
$db['home']['dbcollat'] = 'utf8_general_ci';
$db['home']['swap_pre'] = '';
$db['home']['autoinit'] = TRUE;
$db['home']['stricton'] = FALSE;

$db['live']['hostname'] = 'localhost';
$db['live']['username'] = 'permianr_puser';
$db['live']['password'] = '[9p^2R_vT1~u';
$db['live']['database'] = 'permianr_permian';
$db['live']['dbdriver'] = 'mysql';
$db['live']['dbprefix'] = '';
$db['live']['pconnect'] = TRUE;
$db['live']['db_debug'] = TRUE;
$db['live']['cache_on'] = FALSE;
$db['live']['cachedir'] = '';
$db['live']['char_set'] = 'utf8';
$db['live']['dbcollat'] = 'utf8_general_ci';
$db['live']['swap_pre'] = '';
$db['live']['autoinit'] = TRUE;
$db['live']['stricton'] = FALSE;

/* End of file database.php */
/* Location: ./application/config/database.php */