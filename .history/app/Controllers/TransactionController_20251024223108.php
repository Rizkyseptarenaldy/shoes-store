<?php

namespace App\Controllers;
use App\Models\TransactionModel;
use App\Models\ProductModel;
use CodeIgniter\Controller;

class TransactionController extends Controller
{
    public function index()
    {
        $model = new TransactionModel();
        $data['transactions'] = $model->getAllTransactions();
        return view('transactions/index', $data);
    }

    public function create()
    {
        $productModel = new ProductModel();
        $data['products'] = $productModel->findAll();
        return view('transactions/create', $data);
    }

    public function store()
    {
        $model = new TransactionModel();
        $data = [
            'product_id' => $this->request->getPost('product_id'),
            'quantity' => $this->request->getPost('quantity'),
            'total_price' => $this->request->getPost('total_price'),
            'transaction_date' => $this->request->getPost('transaction_date')
        ];
        $model->insert($data);
        return redirect()->to('/transactions');
    }

    public function edit($id)
    {
        $model = new TransactionModel();
        $productModel = new ProductModel();
        $data['transaction'] = $model->find($id);
        $data['products'] = $productModel->findAll();
        return view('transactions/edit', $data);
    }

    public function update($id)
    {
        $model = new TransactionModel();
        $data = [
            'product_id' => $this->request->getPost('product_id'),
            'quantity' => $this->request->getPost('quantity'),
            'total_price' => $this->request->getPost('total_price'),
            'transaction_date' => $this->request->getPost('transaction_date')
        ];
        $model->update($id, $data);
        return redirect()->to('/transactions');
    }

    public function delete($id)
    {
        $model = new TransactionModel();
        $model->delete($id);
        return redirect()->to('/transactions');
    }
}
