<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}

class StudentMiddleware
{
    public function handle(Closure $next)
    {
        if (!empty($_SESSION['student_access'])) {
            unset($_SESSION['student_access']);
            return $next();
        }

        $_SESSION['student_access_message'] = 'Please verify your name before opening the student profile.';
        header('Location: ' . site_url('student'));
        exit;
    }
}