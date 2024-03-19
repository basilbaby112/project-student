<?php

namespace App\Models;

use CodeIgniter\Model;

class StudentMarksModel extends Model
{
    protected $table = 'student_marks';
    protected $primaryKey = 'id';
    protected $allowedFields = ['student_id', 'month', 'marks'];

    public function getAllStudents()
    {
        return $this->findAll();
    }
}
