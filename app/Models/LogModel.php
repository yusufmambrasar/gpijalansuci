<?php 

namespace App\Models;
use CodeIgniter\Model;

class LogModel extends Model
{
    protected $table = 'logs';
    protected $primaryKey = 'log_id';

    protected $useAutoIncrement = true;

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = [
        'log_id',
        'auth_id',
        'user_id',
        'name',
        'message',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

}