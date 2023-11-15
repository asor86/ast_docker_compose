<?
define("BX_USE_MYSQLI", true);
define("DBPersistent", false);
$DBType = "mysql";

//$DBHost = "10.0.0.105";
//$DBLogin = "bitrix0";
//$DBPassword = "6eiJ{29?4weAGedk[1DN";
//$DBName = "sitemanager";

$DBHost = "ast_db";
$DBLogin = "bitrix";
$DBPassword = "123";
$DBName = "bitrix";



$DBDebug = true;
$DBDebugToFile = false;
define("MYSQL_TABLE_TYPE", "INNODB");
$_SERVER["SERVER_PORT"] = "443";

define("DELAY_DB_CONNECT", true);
define("CACHED_b_file", 3600);
define("CACHED_b_file_bucket_size", 10);
define("CACHED_b_lang", 3600);
define("CACHED_b_option", 3600);
define("CACHED_b_lang_domain", 3600);
define("CACHED_b_site_template", 3600);
define("CACHED_b_event", 3600);
define("CACHED_b_agent", 3660);
define("CACHED_menu", 3600);

define("BX_UTF", true);
define("BX_FILE_PERMISSIONS", 0644);
define("BX_DIR_PERMISSIONS", 0755);
@umask(~(BX_FILE_PERMISSIONS|BX_DIR_PERMISSIONS)&0777);
@ini_set("memory_limit", "512M");
define("BX_DISABLE_INDEX_PAGE", true);

if(!(defined("CHK_EVENT") && CHK_EVENT===true))
   define("BX_CRONTAB_SUPPORT", true);

/*
//include_once($_SERVER['DOCUMENT_ROOT'] . '/local/php_interface/include/redirect.php');

include_once('/home/bitrix/www/vendor/autoload.php');

$client = new MongoDB\Client("mongodb://mongo-root:Ag90IaFWr@co-ast-ru-mongodb-master:27017,co-ast-ru-mongodb-slave:27017/?replicaSet=ast-cluster&readPreference=primary&serverSelectionTimeoutMS=5000&connectTimeoutMS=10000&authSource=admin&authMechanism=SCRAM-SHA-256");
$collection = $client->redirects->redirects;


if(!empty($_SERVER['DOCUMENT_URI'])){
    $url = $_SERVER['DOCUMENT_URI'];
}

if(!empty($_SERVER['REDIRECT_URL'])){
    $url = $_SERVER['REDIRECT_URL'];
}

if(!empty($_SERVER['REQUEST_URI'])){
    $url = $_SERVER['REQUEST_URI'];
}

if(!empty($url)){
    $document = $collection->findOne(['from' => $url]);
}


if (empty($document)) {
    $document = $collection->findOne(['from' => substr($url, 0, -1)]);
}

if (!empty($document)) {
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: " . $document->to);
}

?>
*/