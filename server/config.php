<?  error_reporting(E_ERROR | E_WARNING | E_PARSE);
    ini_set('display_errors', 1);
    //error_reporting(E_ALL);
    
    ini_set('date.timezone', 'Europe/Berlin');
    
    header("Cache-Control: no-cache, must-revalidate");
    header("Content-type: text/html; charset=utf-8");
    header("Pragma: no-cache");
    
    define("DB_HOST",            "localhost");
    //define("DB_HOST",            "ns357093.ip-91-121-145.eu");

    define("DB_USER",            "KADOURESHET");
    define("DB_PASS",            "margalith99");
    define("DB_NAME",            "KADOURESHET");
    
    define("ROOT_DIR",          "");
    define("ROOT",              "/home/tennisde/www/");

    function __autoload($class_name) {  
        if(is_file(ROOT.'api/class/'.$class_name.'.api.php'))
            require_once ROOT.'api/class/'.$class_name.'.api.php';
        else
            require_once ROOT.'class/'.$class_name.'.class.php';
    }

    $startTime = db_object::getTime();
    session_start(); 
   
    if($_SESSION["MEMBER_ID"])
    {
        $member = new member(intval($_SESSION["MEMBER_ID"]));
    }

    $language = new language(DEFAULT_LANGUAGE);
    $language->getDico();
?>