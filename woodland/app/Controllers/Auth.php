<?php

namespace App\Controllers;

use App\models\UsersModel;
use App\models\CourseModel;

class Auth extends BaseController {

        public $userModel;
        public $session;
        public $courseModel;
        public $moduleModel;

        public function __construct() {
                helper('form');
                $this->userModel = new UsersModel();
                $this->session = session();
                $this->courseModel = new CourseModel();
                $this->session = session();
                $this->moduleModel = session();
                


//                if (session('logged_user')) {
//                        return redirect()->to('dashboard');
//                }
        }

        public function index() {
                if (session()->has('logged_user')) {
                        return redirect()->to(base_url('dashboard'));
                }

                $data = [
                    'page_title' => 'Login | Woodlands University College',
                    'page_css' => 'login.css',
                ];

                if ($this->request->getMethod() == 'post') {

                        $rules = [
                            'userID' => 'required',
                            'password' => 'required|min_length[6]|max_length[16]',
                        ];

                        if ($this->validate($rules)) {

//                                user input data
                                $userID = $this->request->getVar('userID');
                                $password = $this->request->getVar('password');

//                                     user database data
                                $userData = $this->userModel->verifyUserID($userID);

                                if ($userData) {
                                        if (password_verify($password, $userData['user_password'])) {
                                                if ($userData['user_status'] == 'active') {
                                                        $this->session->set('logged_user', $userData['userID']);
                                                        return redirect()->to('dashboard');
                                                } else {
                                                        $this->session->setTempdata('error', 'Sorry! User not active please contact administrator', 3);
                                                        return redirect()->to(current_url());
                                                }
                                        } else {
                                                $this->session->setTempdata('error', 'Sorry! UserID or Password Doesnot match', 3);
                                                return redirect()->to(current_url());
                                        }
                                } else {
                                        $this->session->setTempdata('error', 'sorry! No User ID Found.', 3);
                                        return redirect()->to(current_url());
                                }
                        } else {
                                $data['validation'] = $this->validator;
                        }
                }

                echo view('templates/header', $data);
                echo view('templates/login');
                echo view('templates/footer');
        }

        public function reset_password() {
                $data = [
                    'page_title' => 'Reset Password | Woodlands University College',
                    'page_css' => 'null',
                ];

                echo view('templates/header', $data);
                echo view('templates/resetPassword');
                echo view('templates/footer');
        }

        public function hash_password($value) {
                $hashPassword = password_hash($value, PASSWORD_DEFAULT);
                return $hashPassword;
        }

        public function _remap($method, $param1 = null, $param2 = null) {
                if (method_exists($this, $method)) {
                        return $this->$method($param1, $param2);
                } else {
                        echo view('templates/404');
                }
        }

}
