<?php 

namespace App\Models;
use CodeIgniter\Model;

class QuestionModel extends Model
{
    protected $table = 'questions';
    protected $primaryKey = 'question_id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = [
        'question_id',
        'subject_id',
        'model_id',
        'question',
        'guide',
        'answer_a',
        'answer_b',
        'answer_c',
        'answer_d',
        'answer_e',
        'answer',
        'score',
    ];

}