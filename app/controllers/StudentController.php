<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class StudentController extends Controller {

    public function index() {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        $data = [
            'student_id' => 'MCC2024-00208',
            'name'       => 'Micaella Jayne Ramos',
            'course'     => 'BSIT',
            'year'       => '3rd Year College',
            'section'    => 'F5',
            'email'      => 'ramosmicaella22@gmail.com'
        ];

        $this->call->view('student', $data);
    }

    public function profile() {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        $data = [
            'student_id'  => 'MCC2024-00208',
            'name'        => 'Micaella Jayne Ramos',
            'course'      => 'BSIT',
            'year'        => '3rd Year College',
            'section'     => 'F5',
            'email'       => 'ramosmicaella22@gmail.com',
            'sex'         => 'Female',
            'birthday'    => 'July 22, 2006',
            'age'         => '19 years old',
            'contact'     => '09944660256',
            'address'     => 'Calapan City, Oriental Mindoro',
            'elementary'  => 'Sta. Isabel Elementary School',
            'highschool'  => 'Jose D. Udasco Mangangan 1 National High School',
        ];

        $this->call->view('student_profile', $data);
    }
}