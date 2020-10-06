<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class Siswa extends Model
{
    protected $table = "siswa";
 
    public function getSiswa($id = false)
    {
        if($id === false){
            return $this->table('siswa')
                        // ->join('kabupaten','kabupaten.kabupaten_id','=','siswa.siswa_kabupaten_id')
                        // ->join('kecamatan','kecamatan.kecamatan_id','=','siswa.siswa_kecamatan_id')
                        ->get()
                        ->getResultArray();
        } else {
            return $this->table('siswa')
                        // ->join('kabupaten','kabupaten.kabupatan_id','=','siswa.siswa_kabupaten_id')
                        // ->join('kecamatan','kecamatan.kecamatan_id','=','siswa.siswa_kecamatan_id')
                        ->where('siswa_id', $id)
                        ->get()
                        ->getRowArray();
        }   
    } 

    public function getKabupaten($id = false)
    {
        if($id === false){
            return $this->db->table('kabupaten')
                        ->get()
                        ->getResultArray();
        } else {
            return $this->db->table('kabupaten')
                        ->where('kabupaten_id', $id)
                        ->get()
                        ->getRowArray();
        }   
    } 

    public function getKecamatan($id = false)
    {
        if($id === false){
            return $this->db->table('kecamatan')
                        ->get()
                        ->getResultArray();
        } else {
            return $this->db->table('kecamatan')
                        ->where('kecamatan_id', $id)
                        ->get()
                        ->getRowArray();
        }   
    } 

    public function insertSiswa($data)
    {
        return $this->db->table($this->table)->insert($data);
    } 

    public function updateSiswa($data, $id)
    {
        return $this->db->table($this->table)->update($data, ['siswa_id' => $id]);
    } 

    public function deleteSiswa($id)
    {
        return $this->db->table($this->table)->delete(['siswa_id' => $id]);
    } 
}