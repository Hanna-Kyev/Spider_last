<?php

require_once MODELS.'/User.php';
require_once CORE.'/Controller.php';
// require_once MODELS.'/Order.php';
// require_once MODELS.'/Product.php';
// require_once CORE.'/Helper.php';
// require_once CORE.'/Auth.php';

class ProfileController extends Controller
{
    // public function __construct()
    // {
    //     parent::__construct();
    // }
     
    public function index()
    {
        return true;
        
        // if (!$this->user) {
        //     header('Location: /#login');
        // }
        // $title = 'Личный кабинет ';
        // $user = $this->user;
        // $this->view->render('profile/index', compact('title', 'user'));
    }


    /*public function ordersList()
    {
        if (!$this->user) {
            header('Location: /#login');
        }
        $orders = Order::getOrdersListByUserId($this->user->id);
        $title = 'Личный кабинет ';
        $subtitle = 'Ваши заказы ';
        $user = $this->user;
        $this->view->render('profile/orders', compact('user', 'orders', 'title', 'subtitle'));
    }

    public function orderView($vars)
    {
        if (!$this->user) {
            header('Location: /#login');
        }

        extract($vars);
        list($orders, $order) = $this->getOrder($id);
        $products = [];

        foreach ($orders as $ord){
            $item = Product::getProduct($ord['id']);
            array_push($products, [
                "id"=>$ord['id'],
                "amount"=>$ord['amount'],
                'name' => $item->name,
                'price' => $item->price,
                'picture' => $item->picture
            ]);
        }
        $title = 'Ваш заказ #'.$id;
        $user = $this->user;
        $this->view->render('profile/order', compact('user', 'order', 'title',  'products'));
    }
    
    private function getOrder($id)
    {
        if (!$this->user) {
            header('Location: /#login');
        }

        $order = Order::getUserOrderById($id);
        return [json_decode($order->products, true), $order];
    }

    public function checkOrder($vars)
    {
        if (!$this->user) {
            header('Location: /#login');
        }

        extract($vars);
        list($orders, $order) = $this->getOrder($id);
        $products = [];
        $total = 0;
        foreach ($orders as $ord){
            $item = Product::getProduct($ord['id']);
            $total += $ord['amount']*$item->price;
        }
        $title = 'Product Order Form';
        $user = $this->user;
        $this->view->render('profile/checkout', compact('title', 'user', 'total', 'order'), 'check');
    }*/
    
}