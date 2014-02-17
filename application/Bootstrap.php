<?php

error_reporting(E_ALL | E_STRICT);
ini_set('display_startup_errors',1);
ini_set('display_errors',1);

date_default_timezone_get('Asia/Calcutta');

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{

    /*protected function _initDoctype() {
        $this->bootstrap('view');
        $view = $this->getResource('view');
        $view->doctype('XHTML1_STRICT');
    }*/
    /*protect function _initAutoload() {
        $modelLoader  = new Zend_Application_Module_Autoloader(
            array(
                'namespace' => '',
                'basePath' => APPLICATION_PATH
            )
        );
    return $modelLoader;
    }*/
    /*protect function _initDatabase() {
    $params = array ('host' => '127.0.0.1',
        'username' => 'root',
        'password' => '',
        'dbname' => 'Zend');
    $db = Zend_Db::factory('PDO_MYSQL', $params);
    }*/
    /*public function _initSetup($configSection = 'development')
    {
        $rootDir = dirname(dirname(__FILE__));
        define('ROOT_DIR', $rootDir);
        //phpinfo();
        set_include_path(get_include_path()
            . PATH_SEPARATOR . ROOT_DIR . '/library/'
            . PATH_SEPARATOR . ROOT_DIR . '/application/models/'
        );
        //phpinfo();
        require_once 'Zend/Loader/Autoloader.php';
        $loader = Zend_Loader_Autoloader::getInstance();
        $loader->registerNamespace('App_');
        //include 'Zend/Loader.php';
        //Zend_Loader::registerAutoload();

        // Load configuration
        Zend_Registry::set('configSection', $configSection);
        $config = new Zend_Config_Ini(ROOT_DIR.'/application/config.ini', 'dev',false);
        Zend_Registry::set('config', $config);
        date_default_timezone_set($config->date_default_timezone);

        $db = Zend_Db::factory($config->db);
        Zend_Db_Table_Abstract::setDefaultAdapter($db);
        Zend_Registry::set('db', $db);

    }*/

   /* public function configureFrontController()
    {
        $frontController = Zend_Controller_Front::getInstance();
        $frontController->setControllerDirectory(ROOT_DIR . '/application/controllers');
        echo "running the configure";
    }*/

   /* public function runApp()
    {
        // setup front controller
        $this->configureFrontController();

        // run!
        $frontController = Zend_Controller_Front::getInstance();
        $frontController->dispatch();
        echo "running the App";
        $frontController = Zend_Controller_Front::getInstance();
        $frontController->throwExceptions(false);
        $frontController->setControllerDirectory(ROOT_DIR . '/application/controllers');

        $frontController->registerPlugin(new News_Controller_Plugin_ActionSetup());
        $frontController->registerPlugin(new News_Controller_Plugin_ViewSetup(), 98);

        // setup the layout
        Zend_Layout::startMvc(array(
            'layoutPath' => ROOT_DIR . '/application/views/layouts',
        ));

        // run!
        try {
            $frontController->dispatch();
        } catch (Exception $exception) {
            // an exception has occurred after the ErrorController's postdispatch() has run
            if(Zend_Registry::get('config')->debug == 1) {
                $msg = $exception->getMessage();
                $trace = $exception->getTraceAsString();
                echo "<div>Error: $msg<p><pre>$trace</pre></p></div>";
            } else {
                try {
                    $logFile = Zend_Registry::get('config')->logFiles->error;
                    $log = new Zend_Log(new Zend_Log_Writer_Stream($logFile));
                    $log->debug($exception->getMessage() . "\n" .  $exception->getTraceAsString() . "\n-----------------------------");
                } catch (Exception $e) {
                    // can't log it - display error message
                    die("<p>An error occurred with logging an error!");
                }
            }
        }
    }*/



}

