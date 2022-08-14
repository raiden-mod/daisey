<?php 
class Pages extends Controller {
    private $db;
    public function __construct(){
        $this->db = new Database;
        $this->userModel = $this->model('Home_products');
    }
    public function index(){
        $products = $this->userModel->findAllProducts();
        $data = [  
            'title' => 'Daizey - Skin Care Products',
            'keywords' => 'skin care products and routine (Exfoliating Serum,Face eye mask,Body Moisturizer,Black Soap,Body Serum Lotion,Eye mask)',
            'description' => 'This is daizey online ecommerce store for sales skin care products and routine . Exfoliating Serum, Face eye mask, Body Moisturizer, Black Soap,  Body Serum Lotion, Eye mask',
            'products' => $products
        ];
        
        $this->view('index', $data);
    }
}