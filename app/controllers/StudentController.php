<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class StudentController extends Controller 
{
    public function index() 
    {
        $data = [
            'page_title' => 'Student Information',
            'student'    => [
                'id'      => '2024-00208',
                'name'    => 'Micaella Jayne D. Ramos',
                'course'  => 'BS Information Technology',
                'year'    => '3rd Year',
                'section' => 'F5',
                'email'   => 'ramosmicaella22@gmail.com'
            ]
        ];

        // Renders app/views/student/index.php
        $this->call->view('student/index', $data);
    }

    public function profile() 
    {
        $data = [
            'page_title' => 'Student Profile',
            'student'    => [
                'id'      => '2024-00208',
                'name'    => 'MIcaella Jayne D. Ramos',
                'course'  => 'BS Information Technology',
                'year'    => '3rd Year',
                'section' => 'F5',
                'email'   => 'ramosmicaella22@gmail.com'
            ]
        ];

        // Renders app/views/student/profile.php
        $this->call->view('student/profile', $data);
    }
}