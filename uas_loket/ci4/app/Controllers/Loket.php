<?php

namespace App\Controllers;

use App\Models\LoketModel;

class Loket extends BaseController
{

    public function loket()
    {
        $title = 'Admin Website';
        $model = new LoketModel();
        $loket = $model->findAll();
        return view('admin_loket', compact('loket', 'title'));
    }

    public function add()
    {
        $validation = \Config\Services::validation();
        $validation->setRules(['pelayanan_id' => 'required']);
        $isDataValid = $validation->withRequest($this->request)->run();

        if ($isDataValid)
        {
            $loket = new LoketModel();
            $loket->insert([
                'nama' => $this->request->getPost('nama'),
                'keterangan' => $this->request->getPost('keterangan'),
                'layanan_id' => $this->request->getPost('layanan_id'),
            ]);
            return redirect()->route('admin/admin_loket');
        }
        $title = "Tambah Loket";
        return view('form_add_loket', compact('title'));
    } 

    public function edit($id) 
    {
        $loket = new LoketModel();

        // validasi data.
        $validation =  \Config\Services::validation();
        $validation->setRules(['pelayanan_id' => 'required']);
        $isDataValid = $validation->withRequest($this->request)->run();

        if ($isDataValid)
        {
            $loket->update($id, [
                'nama' => $this->request->getPost('nama'),
                'keterangan' => $this->request->getPost('keterangan'),
                'pelayanan_id' => $this->request->getPost('pelayanan_id'),
            ]);
            return redirect('admin/admin');
        }

        // ambil data lama
        $data = $pelayanan->where('id', $id)->first();
        $title = "Ubah Pelayanan";
        return view('form_edit', compact('title', 'data'));
    } 

    public function delete($id) 
    {
        $loket = new LoketModel();
        $loket->delete($id);
        return redirect('');
    } 
} 