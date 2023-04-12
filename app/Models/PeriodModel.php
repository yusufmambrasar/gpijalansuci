<?php 

namespace App\Models;
use CodeIgniter\Model;

class PeriodModel extends Model
{
    protected $table = 'periods';
    protected $primaryKey = 'period_id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = [
        'period_id',
        'name',
        'status_id',
    ];

}