<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class Kecamatan extends Model
{
    protected $table = "kecamatan";
 
    public function getKecamatan($id = false)
    {
        if($id === false){
            return $this->table('kecamatan')
                        // ->join('kabupaten','kabupaten.kabupaten_id','=','kecamatan.kecamatan_kabupaten_id')
                        ->get()
                        ->getResultArray();
        } else {
            return $this->table('kecamatan')
                        // ->join('kabupaten','kabupaten.kabupatan_id','=','kecamatan.kecamatan_kabupaten_id')
                        ->where('kecamatan_id', $id)
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

    public function insertKecamatan($data)
    {
        return $this->db->table($this->table)->insert($data);
    } 

    public function updateKecamatan($data, $id)
    {
        return $this->db->table($this->table)->update($data, ['kecamatan_id' => $id]);
    } 

    public function deleteKecamatan($id)
    {
        return $this->db->table($this->table)->delete(['kecamatan_id' => $id]);
    } 
}