<?php 
 
namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\Kecamatan;
 
class KecamatanController extends Controller
{
 
    public function __construct() {
 
        $this->kecamatan = new Kecamatan();
    }
 
    public function index()
    {   
        $data['kecamatan'] = $this->kecamatan->getKecamatan();

        // dd($data);

        echo view('kecamatan/index', $data);
    } 

    public function create()
    {
        $data['kabupaten'] = $this->kecamatan->getKabupaten();

        return view('kecamatan/create', $data);
    }

    public function store()
    {

        $name = $this->request->getPost('kecamatan_name');
        $kabupatenId = $this->request->getPost('kabupaten_id');

        $data = [
            'kecamatan_name' => $name,
            'kecamatan_kabupaten_id' => $kabupatenId,
        ];

        $simpan = $this->kecamatan->insertKecamatan($data);
    
        if($simpan)
        {
            session()->setFlashdata('success', 'data berhasil disimpan');
            
            return redirect()->to(base_url('kecamatan')); 
        }
        
    } 

    public function edit($id)
    {
        $data['kecamatan'] = $this->kecamatan->getKecamatan($id);
        $data['kabupaten'] = $this->kecamatan->getKabupaten();

        // dd($data);
        
        return view('kecamatan/edit', $data);
    }

    public function update($id)
    {
        $name = $this->request->getPost('kecamatan_name');
        $kabupatenId = $this->request->getPost('kabupaten_id');

        $data = [
            'kecamatan_name' => $name,
            'kecamatan_kabupaten_id' => $kabupatenId,
        ];
    
        $ubah = $this->kecamatan->updateKecamatan($data, $id);
        
        if($ubah)
        {
            session()->setFlashdata('info', 'data berhasil dirubah');

            return redirect()->to(base_url('kecamatan')); 
        }
    } 

    public function delete($id)
    {
       $hapus = $this->kecamatan->deleteKecamatan($id);
    
        if($hapus)
        {
            session()->setFlashdata('warning', 'data berhasil dihapus');

            return redirect()->to(base_url('kecamatan'));
        }
    } 
}