<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class StudentMiddleware implements Middleware
{
    /**
     * Run the middleware check before the controller action.
     */
    public function run()
    {
        // Start session if not already active
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        // Check if the user is authorized to view the profile page
        if (!isset($_SESSION['student_access']) || $_SESSION['student_access'] !== true) {
            // Redirect unauthorized access back to the main student page
            redirect('student');
            exit();
        }
    }
}