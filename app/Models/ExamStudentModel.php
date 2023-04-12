<?php 

namespace App\Models;
use CodeIgniter\Model;

class ExamStudentModel extends Model
{
    protected $table = 'exam_students';
    protected $primaryKey = 'exam_student_id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = [
        'period_id',
        'exam_id',
        'exam_session_id',
        'exam_attendance_id',
        'operator_id',
        'student_id',
        'started_at',
        'ended_at',
        'status_exam_id',
        'token',
    ];

}