<?php

require_once CORE.'/Controller.php';
require_once MODELS.'/User.php';
require_once MODELS.'/Role.php';

class UserController extends Controller
{
    private $options = [
        'cost' => 12,
    ];

    public function index()
    {
        $users = (new User)->all();
        $title = 'User List';
        $this->view->render('admin/users/index', compact('users', 'title'), 'admin');
    }

    public function create()
    {
        $title = 'Create User';
        $roles = (new Role)->all();
        $this->view->render('admin/users/create', compact('title', 'roles'), 'admin');
    }

    public function store()
    {
        $hash = password_hash($this->request->data['password'], PASSWORD_BCRYPT, $this->options);
        (new User())->save(["name"=>$this->request->data['name'], 'password'=>$hash,'email'=>$this->request->data['email'], 
        'role_id'=>$this->request->data['role_id']]);
        $this->redirector->redirect('/admin/users');
    }

    public function show($vars)
    {
        extract($vars);
        $title = 'User Detail';
        $role = (new User())-> getByPK($id);
        $this->view->render('admin/users/show', compact('title', 'roles'), 'admin');
    }


    public function edit($vars)
    {
        extract($vars);
        $user = (new User())->getByPK($id);
        $roles = (new Role)->all();
        $title = 'Edit User';
        $this->view->render('admin/users/edit', compact('title', 'user', 'roles'), 'admin');
    }

    public function update()
    {
        $hash = password_hash($this->request->data['password'], PASSWORD_BCRYPT, $this->options);
        $status = $this->request->data['status'] ? 1:0;
        (new User)->update($this->request->data['id'], ["name"=>$this->request->data['name'], 'password'=>$hash,'email'=>$this->request->data['email'], 'role_id'=>$this->request->data['role_id'], 'status'=>$status]);
        $this->redirector->redirect('/admin/users');
    }

    public function delete($vars)
    {
        extract($vars);
        if (isset($_POST['submit'])) {
            (new User)->destroy($id);
            $this->redirector->redirect('/admin/users');
        } elseif (isset($_POST['reset'])) {
            $this->redirector->redirect('/admin/users');
        }
        $title = 'Delete User ';
        $user = (new User)->getByPK($id);
        $this->view->render('admin/users/delete', compact('title', 'user'), 'admin');
    }

}