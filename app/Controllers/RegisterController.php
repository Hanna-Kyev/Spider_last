<?php
require_once CORE.'/Auth.php';
require_once MODELS.'/User.php';

class RegisterController extends Auth
{
    private $option = [
        'cost' => 12,
    ];
    
    public function register(){

        if ($this->is_valid_password($this->request->data['password'], $this->request->data['confirmpassword'])){

            $hash = password_hash($this->request->data['password'], PASSWORD_BCRYPT, $this->option);
            list($name) = explode('@', $this->request->data['email']);

            $first_name = $this->request->data['first_name'] ?? $name; 
            $last_name = $this->request->data['last_name'] ?? $name;
            $phone_number = $this->request->data['phone_number'] ?? '';

            (new User())->save(["name"=>$name,'email'=>$this->request->data['email'],'password'=>$hash,
            'first_name'=>$first_name,'last_name'=>$last_name,'phone_number'=>$phone_number]);

            $this->redirector->redirect('/#login');
        } else {
            $this->error = "Your passwords do not match. Please type carefully.";            
            $this->redirector->redirect('/#register');
        }
    }

    private function is_valid_password($password, $confirmpassword){
        if($password!=$confirmpassword){
            return false;
        }
        return true;
    }
}

