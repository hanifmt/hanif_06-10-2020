<?php 
 
namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\Kabupaten;
 
class KabupatenController extends Controller
{
 
    public function __construct() {
 
        $this->kabupaten = new Kabupaten();
    }
 
    public function index()
    {
        $data['kabupaten'] = $this->kabupaten->getKabupaten();
        echo view('kabupaten/index', $data);
    } 

    public function create()
    {
        return view('kabupaten/create');
    }

    public function store()
    {
        $name = $this->request->getPost('kabupaten_name');

        $data = [
            'kabupaten_name' => $name,
        ];
    
        $simpan = $this->kabupaten->insertKabupaten($data);
    
        if($simpan)
        {
            session()->setFlashdata('success', 'data berhasil disimpan');
            
            return redirect()->to(base_url('kabupaten')); 
        }
        
    } 

    public function edit($id)
    {
        $data['kabupaten'] = $this->kabupaten->getKabupaten($id);
        
        return view('kabupaten/edit', $data);
    } 

    public function update($id)
    {
        $name = $this->request->getPost('kabupaten_name');
    
        $data = [
            'kabupaten_name' => $name,
        ];
    
        $ubah = $this->kabupaten->updateKabupaten($data, $id);
        
        if($ubah)
        {
            session()->setFlashdata('info', 'data berhasil dirubah');

            return redirect()->to(base_url('kabupaten')); 
        }
    } 

    public function delete($id)
    {
       $hapus = $this->kabupaten->deleteKabupaten($id);
    
        if($hapus)
        {
            session()->setFlashdata('warning', 'data berhasil dihapus');

            return redirect()->to(base_url('kabupaten'));
        }
    } 
}