<?php 

namespace App\Models;
use CodeIgniter\Model;

class ExamSessionModel extends Model
{
    protected $table = 'exam_sessions';
    protected $primaryKey = 'exam_session_id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = [
        'exam_session_id',
        'operator_id',
        'token',
        'status_id',
        'created_at',
        'updated_at',
    ];

}