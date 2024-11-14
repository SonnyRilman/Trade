<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\OrderModel;

class OrderController extends Controller
{
    public function index()
    {
        $model = new OrderModel();
        $data['orders'] = $model->findAll(); // Ambil semua data pesanan
        return view('orders/index', $data);
    }

    public function create()
    {
        return view('orders/create');
    }

    public function store()
    {
        $model = new OrderModel();

        $data = [
            'customer_name' => $this->request->getPost('customer_name'),
            'total' => $this->request->getPost('total'),
            'status' => $this->request->getPost('status'),
        ];

        // Simpan data pesanan
        if ($model->insert($data)) {
            return redirect()->to('/orders')->with('success', 'Order created successfully!');
        } else {
            return redirect()->back()->with('error', 'Failed to create order.');
        }
    }
}
