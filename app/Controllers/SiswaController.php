<?php 
 
namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\Siswa;
 
class SiswaController extends Controller
{
 
    public function __construct() {
 
        $this->siswa = new Siswa();
    }
 
    public function index()
    {   
        $data['siswa'] = $this->siswa->getSiswa();

        // dd($data);

        echo view('siswa/index', $data);
    } 

    public function create()
    {
        $data['kabupaten'] = $this->siswa->getKabupaten();
        $data['kecamatan'] = $this->siswa->getKecamatan();

        return view('siswa/create', $data);
    }

    public function store()
    {
        $name = $this->request->getPost('siswa_name');
        $alamat = $this->request->getPost('siswa_alamat');
        $kabupatenId = $this->request->getPost('kabupaten_id');
        $kecamatanId = $this->request->getPost('kecamatan_id');

        $data = [
            'siswa_name' => $name,
            'siswa_alamat' => $alamat,
            'siswa_kabupaten_id' => $kabupatenId,
            'siswa_kecamatan_id' => $kecamatanId,
        ];

        $simpan = $this->siswa->insertSiswa($data);
    
        if($simpan)
        {
            session()->setFlashdata('success', 'data berhasil disimpan');
            
            return redirect()->to(base_url('siswa')); 
        }
        
    } 

    public function edit($id)
    {
        $data['siswa'] = $this->siswa->getSiswa($id);
        $data['kabupaten'] = $this->siswa->getKabupaten();
        $data['kecamatan'] = $this->siswa->getKecamatan();

        // dd($data);
        
        return view('siswa/edit', $data);
    }

    public function update($id)
    {
        $name = $this->request->getPost('siswa_name');
        $alamat = $this->request->getPost('siswa_alamat');
        $kabupatenId = $this->request->getPost('kabupaten_id');
        $kecamatanId = $this->request->getPost('kecamatan_id');

        $data = [
            'siswa_name' => $name,
            'siswa_alamat' => $alamat,
            'siswa_kabupaten_id' => $kabupatenId,
            'siswa_kecamatan_id' => $kecamatanId,
        ];
    
        $ubah = $this->siswa->updateSiswa($data, $id);
        
        if($ubah)
        {
            session()->setFlashdata('info', 'data berhasil dirubah');

            return redirect()->to(base_url('siswa')); 
        }
    } 

    public function delete($id)
    {
       $hapus = $this->siswa->deleteSiswa($id);
    
        if($hapus)
        {
            session()->setFlashdata('warning', 'data berhasil dihapus');

            return redirect()->to(base_url('siswa'));
        }
    } 
}