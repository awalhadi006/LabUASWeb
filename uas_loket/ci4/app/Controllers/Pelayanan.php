<?php

namespace App\Controllers;

use App\Models\PelayananModel;

class Pelayanan extends BaseController
{
    public function index() 
    { 
        $title = 'Halaman Pelayanan';
        $model = new PelayananModel();
        $pelayanan = $model->findAll();
        return view('/home', compact('pelayanan', 'title'));
    }

    public function view($id)
    {
        $model = new PelayananModel();
        $pelayanan = $model->where([
            'id' => $id
        ])->first();

        if (!$pelayanan)
        {
            throw PageNotFoundException::forPageNotFound();
        }

        $title = ('Halaman') . $pelayanan['nama'];
        return view('/detail', compact('pelayanan','title'));
    }

    public function admin()
    {
        $title = 'Admin Website';
        $model = new PelayananModel();
        $pelayanan = $model->findAll();
        return view('admin', compact('pelayanan', 'title'));
    }

    public function add()
    {
        $validation = \Config\Services::validation();
        $validation->setRules(['nama' => 'required']);
        $isDataValid = $validation->withRequest($this->request)->run();

        if ($isDataValid)
        {
            $pelayanan = new PelayananModel();
            $pelayanan->insert([
                'nama' => $this->request->getPost('nama'),
                'keterangan' => $this->request->getPost('keterangan'),
                'kode' => $this->request->getPost('kode'),
            ]);
            return redirect()->route('admin/admin');
        }
        $title = "Tambah Layanan";
        return view('form_add', compact('title'));
    } 

    public function edit($id) 
    {
        $pelayanan = new PelayananModel();

        // validasi data.
        $validation =  \Config\Services::validation();
        $validation->setRules(['nama' => 'required']);
        $isDataValid = $validation->withRequest($this->request)->run();

        if ($isDataValid)
        {
            $pelayanan->update($id, [
                'nama' => $this->request->getPost('nama'),
                'keterangan' => $this->request->getPost('keterangan'),
                'kode' => $this->request->getPost('kode'),
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
        $pelayanan = new PelayananModel();
        $pelayanan->delete($id);
        return redirect('admin/admin');
    } 
} 