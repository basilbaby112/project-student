<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\StudentModel;
use App\Models\StudentMarksModel;

class Marks extends Controller
{
    public function index()
    {
        $studentModel = new StudentModel();

        $data['students'] = $studentModel->findAll();

        return view('layouts/header')
        .view('layouts/sidebar')
        .view('student_marks_form',$data)
        .view('layouts/footer');
    }

    public function submit()
    {
        // Load the StudentMarksModel
        $model = new StudentMarksModel();

        // Initialize an empty array to store marks data
        $marks = [];

        // Get student ID from the form (assuming it's submitted as 'student_id')
        $studentId = $this->request->getPost('student');

        // Validate student ID
        if (!$studentId) {
            // Handle the case when student ID is not provided
            return redirect()->to(base_url('marks'))->with('error', 'Student is required.');
        }

        if ($model->where('student_id', $studentId)->countAllResults() > 0) {
            // Handle the case when the student ID already exists
            return redirect()->to(base_url('marks'))->with('error', 'Student ID already exists.');
        }

        // Loop through each month to get marks data
        foreach (range(1, 12) as $month) {
            // Get marks for the current month from the form
            $marks[] = [
                'student_id' => $studentId,
                'month' => date('F', mktime(0, 0, 0, $month, 1)),
                'marks' => $this->request->getPost(strtolower(date('M', mktime(0, 0, 0, $month, 1))))
            ];
        }

        // Insert or update marks data in the database
        try {
            $model->insertBatch($marks);
            // Redirect with success message
            return redirect()->to(base_url('marks'))->with('success', 'Marks added successfully.');
        } catch (\Exception $e) {
            // Handle database errors
            log_message('error', 'Error inserting marks: ' . $e->getMessage());
            return redirect()->to(base_url('marks'))->with('error', 'Failed to add marks. Please try again.');
        }
    }

    public function dataVisual($id){

        $model = new StudentMarksModel();

        $marksData = $model->where('student_id', $id)->findAll();

        // Format marks data for chart
        $chartData = [];
        foreach ($marksData as $data) {
            $chartData[] = [
                'x' => $data['month'], // Month on x-axis
                'y' => (int)$data['marks'] // Marks on y-axis
            ];
        }

        // Pass the formatted marks data to the view
        return view('marks_view', ['chartData' => $chartData]);

    }

    public function showStudents(){

        $studentModel = new StudentModel();

        $data['students'] = $studentModel->findAll();

        return view('layouts/header')
        .view('layouts/sidebar')
        .view('students_view',$data)
        .view('layouts/footer');

    }

}
