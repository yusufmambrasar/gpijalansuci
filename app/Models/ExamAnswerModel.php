<?php 

namespace App\Models;
use CodeIgniter\Model;

class ExamAnswerModel extends Model
{
    protected $table = 'exam_answers';
    protected $primaryKey = 'exam_answer_id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = [
        'exam_student_id',
        'period_id',
        'exam_id',
        'exam_session_id',
        'question_id',
        'operator_id',
        'student_id',
        'created_at',
        'model_id',
        'sequence',
        'choice',
        'essay',
        'status_id',
    ];

}