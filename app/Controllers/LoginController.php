<?php

require_once MODELS.'/User.php';
require_once CORE.'/Session.php';
require_once CORE.'/Auth.php';


class LoginController extends Auth
{
    // private $email;
   
	// private $cookie_prefix = '';
	    
    // public function __construct()
	// {
    //     parent::__construct();
    //     Session::init();
    // }
    

    private function checkUser($email, $password){
        $sql = "SELECT * FROM users WHERE email = '$email'";
        $user = (new User)->getBySql($sql);
        if (!$user) {
            return false;
        } else {
            if (password_verify($password, $user->password)) {
                return $user->id;
            } else {
                return false;
            }
        }
    }

    
    public function login()
	{
        if ($this->logged_in === true) {
            $this->redirector->redirect('/profile'); 
        }
        $userId = $this->checkUser($this->request->data['email'], $this->request->data['password']);
        
        if ($userId === false) {
            $this->error = "Not valid User. Please try else!";
            Session::set('error', $this->error);
            $this->redirector->redirect('/#login');                      
        } else {
            $this->user = (new User)->getByPK($userId);
            $this->logged_in = true;
            $this->message = "You Are Logged";
            Session::set('message', $this->message);
            Session::set('userId', $this->user->id);
            setcookie('Logged', $this->logged_in); 
            $this->redirector->redirect('/profile');
                         
            // $remember_me = $this->request->data['remember_me'] ? 1:0;
            // if($remember_me && !isset($_COOKIE[$this->cookie_prefix.'ID'])){
            //     setcookie($this->cookie_prefix.'ID', $this->user->id, TIME_NOW + COOKIE_TIMEOUT, ''); 
            //     setcookie($this->cookie_prefix.'UserEmail', $this->user->email, TIME_NOW + COOKIE_TIMEOUT, ''); 
            // }
            
        }
	}
        
    function logout()
	{
        // if( isset($_COOKIE[$this->cookie_prefix.'ID']) )
		// {	
		// 	setcookie( $this->cookie_prefix.'ID', '', TIME_NOW - 3600 );	
		// 	setcookie( $this->cookie_prefix.'UserEmail', '', TIME_NOW - 3600 ); 
        //     setcookie($this->cookie_prefix.'Logged', '', TIME_NOW - 3600); 
		// }
        Session::destroy('userId');
        $this->logged_in = FALSE;
        setcookie('Logged', $this->logged_in, time() - 3600);
        $this->redirector->redirect("/"); 
    }
}