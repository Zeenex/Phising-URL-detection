
<?PHP
//database settings
$database_host          = 'localhost';
$database_username      = 'userPhs';
$database_password      = 'rootadmin@2022';
$database_name          = 'url_check';

//open mysql connection
$mysqli = new mysqli($database_host, $database_username, $database_password, $database_name);

//output error and exit if there's an error
if ($mysqli->connect_error) {
    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}

?>