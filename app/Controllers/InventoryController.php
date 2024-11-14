<?php

namespace App\Controllers;

use App\Models\InventoryModel;

class InventoryController extends BaseController
{
    public function index()
    {
        $model = new InventoryModel();
        $data['inventory'] = $model->findAll();  // Ambil semua data inventaris

        return view('inventory', $data);  // Tampilkan data ke halaman 'inventory.php'
    }

    // Fungsi untuk menambah inventaris baru
    public function add()
    {
        return view('add_inventory');  // Form untuk menambah inventaris baru
    }

    // Fungsi untuk menyimpan inventaris baru
    public function save()
    {
        $model = new InventoryModel();
        $model->save([
            'name' => $this->request->getVar('name'),
            'artist' => $this->request->getVar('artist'),
            'stock' => $this->request->getVar('stock'),
            'price' => $this->request->getVar('price'),
            'status' => $this->request->getVar('status'),
        ]);

        return redirect()->to('/inventory');
    }
}
