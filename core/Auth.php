<?php

require_once CORE.'/Controller.php';
require_once CORE.'/Session.php';

class Auth extends Controller
{
    protected $logged_in = false;
    protected $user_id = NULL;     
    protected $error = NULL;
    protected $message = NULL;    
	public $user = NULL;

        
    public function __construct()
	{
        parent::__construct();
        Session::init();
		
        if($userId=Session::get('userId')){
            $this->user = (new User)->getByPK($userId);
            if( $this->user != NULL ) {
                $this->logged_in = true;
                $this->user_id = $userId;
            }
		}
	}

}