<?php

namespace App\Models;

use CodeIgniter\Model;

class m_mahasiswa extends Model
{
    protected $table = 'loker';
    protected $primaryKey = 'id';

    function getData()
    {
        $db = \Config\Database::connect();
        $loker = $db->query("SELECT * FROM loker");
        return $loker->getResultArray();
    }

    function insertData($id, $no_loker, $waktu)
    {
        $db = \Config\Database::connect();
        $sql = "INSERT INTO loker VALUES ('$id', '$no_loker', '$waktu')";
        $this->db->query($sql);
    }

    function deleteData($id)
    {
        $db = \Config\Database::connect();
        $loker = "DELETE FROM loker WHERE id = '$id' ";
        return $loker;
    }

    function updateData($id, $no_loker, $waktu)
    {
        $this->db->query("UPDATE loker SET no_loker='$no_loker', waktu ='$waktu' WHERE id= '$id'");
    }
}
