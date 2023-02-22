<?php

namespace App\Controllers;

use App\models\DashboardModel;

class Index extends BaseController {

        public $dashModel;

        public function __construct() {
                $this->dashModel = new DashboardModel();
        }

        public function index() {

                if (!session()->has('logged_user')) {
                        return redirect()->to(base_url('auth'));
                }

                $userID = session()->get('logged_user');

                $data['userData'] = $this->dashModel->getLoggedUersData($userID);
                echo view('dashboard/template/header', $data);
                return view('dashboard/dashboard');
        }

        public function logout() {
                session()->remove('logged_user');

                session()->destroy();
                return redirect()->to('auth');
        }

}
