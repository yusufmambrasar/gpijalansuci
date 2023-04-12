<?php 

namespace App\Models;
use CodeIgniter\Model;

class ExamAttendanceModel extends Model
{
    protected $table = 'exam_attendances';
    protected $primaryKey = 'exam_attendance_id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = [
        'operator_id',
        'exam_session_id',
        'student_id',
        'token',
        'status_attendance_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

}