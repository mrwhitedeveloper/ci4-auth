<?php

namespace App\Models;

use CodeIgniter\Model;

class UserResetPasswordModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'reset_passwords';
    protected $primaryKey       = 'reset_password_id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [ "user_email", "activation_id", "agent", "client_ip", "created_at"];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function checkActivationDetails($email, $activation_id)
    {
        $this->select('reset_password_id');
        $this->where('email', $email);
        $this->where('activation_id', $activation_id);
        $query = $this->get();
        return $query->getNumRows();
    }
    public function createUserPassword($email=''){
        $this->delete('reset_password', array('email' => $email));
    }
}
