<?php 

namespace App\Services;

use App\Traits\RequestService;

class ProductService 
{
    use RequestService;

    public $baseUri;
    public $secret;

    public function __construct() {
        $this->baseUri = config('services.products.base_uri');
        $this->secret = config('services.products.secret');
    }

    public function fetchProducts() 
    {
        return $this->request('GET', '/api/product');
    }

    public function fetchProduct($product) 
    {
        return $this->request('GET', "/api/product/{$product}");
    }

    public function createProduct($data) 
    {
        return $this->request('POST', '/api/product', $data);
    }

    public function updateProduct($product, $data) 
    {
        return $this->request('PATCH', "/api/product/{$product}", $data);
    }

    public function deleteProduct($product) 
    {
        return $this->request('DELETE', "/api/product/{$product}");
    }
}