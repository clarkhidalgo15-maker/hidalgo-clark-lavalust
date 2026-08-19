<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}

class StudentController extends Controller
{
    private function student_data()
    {
        return [
            'student_id' => 'MCC2024-00199',
            'name' => 'Clark Denver F. Hidalgo',
            'course' => 'BS Information Technology',
            'year' => '3rd Year',
            'section' => '3F4',
            'email' => 'hidalgoclark 50@gmail.com',
            'address' => 'Poblacion, Baco, Oriental Mindoro',
            'contact' => '+63 948 540 7913',
            'facebook' => 'https://www.facebook.com/share/1ECC1BTbi7/'
        ];
    }

    public function index()
    {
        $data = $this->student_data();
        $data['access_message'] = $_SESSION['student_access_message'] ?? null;
        unset($_SESSION['student_access_message']);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $viewer_name = trim($_POST['viewer_name'] ?? '');

            if (strcasecmp($viewer_name, $data['name']) === 0) {
                $_SESSION['student_access'] = true;
                header('Location: ' . site_url('student/profile'));
                exit;
            }

            $data['access_message'] = 'Access denied. Enter the student name exactly as shown.';
        }

        $this->call->view('student/home', $data);
    }

    public function profile()
    {
        $this->call->view('student/profile', $this->student_data());
    }
}