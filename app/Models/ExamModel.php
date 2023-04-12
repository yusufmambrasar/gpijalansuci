<?php 

namespace App\Models;
use CodeIgniter\Model;

class ExamModel extends Model
{
    protected $table = 'exams';
    protected $primaryKey = 'exam_id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = [
        'exam_id',
        'period_id',
        'name',
        'duration',
        'major_id',
        'level_id',
        'religion_id',
        'status_id',
    ];

}