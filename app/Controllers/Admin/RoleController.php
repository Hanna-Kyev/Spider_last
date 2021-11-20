<?php

require_once CORE.'/Controller.php';
require_once MODELS.'/Role.php';


class RoleController extends Controller
{
    
    public function index()
    {
        $title = 'Roles List Page ';
        $roles = (new Role)->all();     
        $this->view->render('admin/roles/index', compact('title', 'roles'), 'admin');
        
    }

    public function create()
    {
        $title = 'Add New Role';
        $this->view->render('admin/roles/create', compact('title'), 'admin');
    }

    public function store()
    {
        (new Role)->save(["name"=>$this->request->data['name']]);
        $this->redirector->redirect("/admin/roles");
    }

    public function show($vars)
    {
        extract($vars);
        $title = 'Role Detail';
        $role = (new Role)-> getByPK($id);
        $this->view->render('admin/roles/show', compact('title', 'role'), 'admin');
    }


    public function edit($vars)
    {
        extract($vars);
        $role = (new Role)->getByPK($id);
        $title = 'Edit Role';
        $this->view->render('admin/roles/edit', compact('title', 'role'), 'admin');
    }

    public function update()
    {
        (new Role)->update($this->request->data['id'], ["name"=>$this->request->data['name']]);
        $this->redirector->redirect('/admin/roles');
    }

    public function delete($vars)
    {
        extract($vars);
        if (isset($_POST['submit'])) {
            (new Role)->destroy($id);
            $this->redirector->redirect('/admin/roles');
        } elseif (isset($_POST['reset'])) {
            $this->redirector->redirect('/admin/roles');
        }
        $title = 'Delete Role';
        $role = (new Role)->getByPK($id);
        $this->view->render('admin/roles/delete', compact('title', 'role'), 'admin');
    }

}