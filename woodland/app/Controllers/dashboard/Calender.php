<?php

namespace App\Controllers\dashboard;

use App\Controllers\BaseController;
use App\models\DashboardModel;

class Calender extends BaseController {

        public $dashModel;

        public function __construct() {
                $this->dashModel = new DashboardModel();
        }

        public function index() {
                $userID = session()->get('logged_user');
                $data['userData'] = $this->dashModel->getLoggedUersData($userID);
                echo view('dashboard/template/header', $data);
        }

}
