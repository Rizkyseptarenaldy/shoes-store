<?php

namespace App\Controllers\Api;

use App\Controllers\BaseController;
use App\Models\ProductModel;
use CodeIgniter\HTTP\ResponseInterface;

class ProductController extends BaseController
{
    public function index()
    {
        $model = new ProductModel();
        $data = $model->findAll();
        return $this->response->setJSON($data);
    }

    public function show($id)
    {
        $model = new ProductModel();
        $data = $model->find($id);

        if (!$data) {
            return $this->response->setStatusCode(ResponseInterface::HTTP_NOT_FOUND)
                ->setJSON(['message' => 'Product not found']);
        }

        return $this->response->setJSON($data);
    }

    public function create()
    {
        $model = new ProductModel();

        $data = [
            'name' => $this->request->getPost('name'),
            'price' => $this->request->getPost('price'),
            'stock' => $this->request->getPost('stock'),
        ];

        $model->insert($data);
        return $this->response->setJSON(['message' => 'Product created successfully']);
    }

    public function update($id)
    {
        $model = new ProductModel();
        $input = $this->request->getJSON(true);

        if (!$model->find($id)) {
            return $this->response->setStatusCode(ResponseInterface::HTTP_NOT_FOUND)
                ->setJSON(['message' => 'Product not found']);
        }

        $model->update($id, $input);
        return $this->response->setJSON(['message' => 'Product updated']);
    }

    public function delete($id)
    {
        $model = new ProductModel();
        if (!$model->find($id)) {
            return $this->response->setStatusCode(ResponseInterface::HTTP_NOT_FOUND)
                ->setJSON(['message' => 'Product not found']);
        }

        $model->delete($id);
        return $this->response->setJSON(['message' => 'Product deleted']);
    }
}
