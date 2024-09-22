<?php

namespace App\Http\Controllers\Blog\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Blog\Admin\AdminBaseController;
use App\Repositories\Admin\MainRepository;
use App\Repositories\Admin\OrderRepository;
use App\Repositories\Admin\ProductRepository;
use MetaTag;



class MainController extends AdminBaseController
{

    private $orderRepository;
    private $productRepository;

    public function __construct()
    {
        parent::__construct();

        $this->orderRepository = app(OrderRepository::class);
        $this->productRepository = app(ProductRepository::class);
    }

    public function index()
    {
        $countOrders = MainRepository::getCountOrders();
        $countUsers = MainRepository::getCountUsers();
        $countProducts = MainRepository::getCountProducts();
        $countCategories = MainRepository::getCountCategories();

        $perpage = 4;
        $last_orders = $this->orderRepository->getAllOrders($perpage);
        $last_products = $this->productRepository->getLastProducts($perpage);

        MetaTag::setTags(['title' => 'Admin panel']);

        return view('blog.admin.main.index', compact(
            'countOrders',
            'countUsers',
            'countProducts',
            'countCategories',
            'last_orders',
            'last_products'
        ));
    }
}
