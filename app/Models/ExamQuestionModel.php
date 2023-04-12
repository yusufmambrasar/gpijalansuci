<?php 

namespace App\Models;
use CodeIgniter\Model;

class ExamQuestionModel extends Model
{
    protected $table = 'exam_questions';
    protected $primaryKey = 'exam_question_id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = [
        'exam_question_id',
        'exam_id',
        'subject_id',
        'question_id',
        'sequence',
    ];

}