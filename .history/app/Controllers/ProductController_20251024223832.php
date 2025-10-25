<?php

namespace App\Controllers;
use App\Models\ProductModel;
use CodeIgniter\Controller;

class ProductController extends Controller
{
    public function index()
    {
        $model = new ProductModel();
        $data['products'] = $model->findAll();
        return view('products/index', $data);
    }

    public function create()
    {
        return view('products/create');
    }

    public function store()
    {
        $model = new ProductModel();
        $data = [
            'name'  => $this->request->getPost('name'),
            'price' => $this->request->getPost('price'),
            'stock' => $this->request->getPost('stock')
        ];
        $model->insert($data);
        return redirect()->to('/products');
    }

    public function edit($id)
    {
        $model = new ProductModel();
        $data['product'] = $model->find($id);  // ✅ ini yang dikirim ke view
        return view('products/edit', $data);
    }

    public function update($id)
    {
        $model = new ProductModel();
        $data = [
            'name'  => $this->request->getPost('name'),
            'price' => $this->request->getPost('price'),
            'stock' => $this->request->getPost('stock')
        ];
        $model->update($id, $data);
        return redirect()->to('/products');
    }

    public function delete($id)
    {
        $model = new ProductModel();
        $model->delete($id);
        return redirect()->to('/products');
    }
}
