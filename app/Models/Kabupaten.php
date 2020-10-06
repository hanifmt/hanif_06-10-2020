<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class Kabupaten extends Model
{
    protected $table = "kabupaten";
 
    public function getKabupaten($id = false)
    {
        if($id === false){
            return $this->table('kabupaten')
                        ->get()
                        ->getResultArray();
        } else {
            return $this->table('kabupaten')
                        ->where('kabupaten_id', $id)
                        ->get()
                        ->getRowArray();
        }   
    } 

    public function insertKabupaten($data)
    {
        return $this->db->table($this->table)->insert($data);
    } 

    public function updateKabupaten($data, $id)
    {
        return $this->db->table($this->table)->update($data, ['kabupaten_id' => $id]);
    } 

    public function deleteKabupaten($id)
    {
        return $this->db->table($this->table)->delete(['kabupaten_id' => $id]);
    } 
}