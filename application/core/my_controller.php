<?php 

class MY_Controller extends CI_Controller 
{
    function __construct()
    {
        parent::__construct();
        if (!isset($_SESSION)) session_start();
    }
}

class Public_Controller extends MY_Controller 
{
    function __construct()
    {
        parent::__construct();
    }
}

class Admin_Controller extends MY_Controller 
{
    function __construct()
    {
        parent::__construct();

        if ($_SESSION['logged_in']['ofh_user_type'] <> "admin")  
        {
            redirect(base_url());
        }
    }
}

class User_Controller extends MY_Controller 
{
    function __construct()
    {
        parent::__construct();

        if (($_SESSION['logged_in']['ofh_user_type'] <> 'staff') && ($_SESSION['logged_in']['ofh_user_type'] <> 'admin'))
        {
            redirect(base_url());
        }
    }
}
 ?>