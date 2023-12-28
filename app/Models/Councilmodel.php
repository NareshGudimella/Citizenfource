<?php
namespace App\Models;
use CodeIgniter\Model;

class Councilmodel extends Model{
    protected $table      = 'Council_registration';
    protected $primaryKey = 'id';

    protected $allowedFields = ['uname', 'Email', 'houseno','street','area','ward','appartment_name','city','state','pincode','picture','Resume','religion','caste','category','referenceinfo'];

    public function savedata($data){
       
    
    $res= $this->insert($data);
    
    if ($res) {
                    return true;
                }
    else{
                    return false;
         }
        }


}