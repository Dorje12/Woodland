<?php

namespace App\Controllers\dashboard;

use App\models\DashboardModel;
use App\models\UsersModel;
use App\Controllers\BaseController;

class Users extends BaseController {

    public $dashModel;
    public $userModel;
    public $session;

    public function __construct() {
        $this->dashModel = new DashboardModel();
        $this->userModel = new UsersModel();
        $this->session = session();
    }

    public function index() {
        $data = [];
        $userID = session()->get('logged_user');
        $data['userData'] = $this->dashModel->getLoggedUersData($userID);

        $data['usersData'] = $this->userModel->getUsersList();

        echo view('dashboard/template/header', $data);
        echo view('dashboard/users', $data);
    }

    public function add_user() {
        helper('form');
        $userID = session()->get('logged_user');
        $data = [];
        $data['validation'] = null;
        $data['userData'] = $this->dashModel->getLoggedUersData($userID);
        
        if ($this->request->getMethod() == 'post') {

            $rules = [
                'password' => 'required',
                'userFirstName' => 'required',
                'userLstName' => 'required',
                'userId' => 'required',
                'emailId' => 'required',
                'mobile' => 'required',
                'birthDate' => 'required',
                'gender' => 'required',
                'role' => 'required',
                
            ];

            if ($this->validate($rules)) {

                $activeData;

                if ($this->request->getVar('user_status') == 'active') {
                        $activeData = "active";
                    }else{
                        $activeData = "inactive";
                    }

                $formData = [
                    'user_first_name' => $this->request->getVar('userFirstName'),
                    'user_last_name' => $this->request->getVar('userLstName'),
                    'userID' => $this->request->getVar('userId'),
                    'user_email' => $this->request->getVar('emailId'),
                    'user_mobile' => $this->request->getVar('mobile'),
                    'user_birthdate' => $this->request->getVar('birthDate'),
                    'user_gender' => $this->request->getVar('gender'),
                    'user_password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                    'role' => $this->request->getVar('role'),
                    'user_status' => $activeData
                    
                ];
             
                   
                if ($formData) {
                    
                    $userData = $this->userModel->getUserRole($userID);
                    $checkUID = $this->userModel->checkUID($this->request->getVar('userId'));

                if ($userData['role'] === 'Admin') {
                    if (!$checkUID) {

                        $submittedData = $this->userModel->addUser($formData);

                     if ($submittedData) {
                        $this->session->setTempdata('error', 'User added succesfully', 3);
                        return redirect()->to('/dashboard/users');
                     }

                    } else{
                        $this->session->setTempdata('error', 'Duplicate UID please enter Unique UID', 3);
                     }


                }else{
                    $this->session->setTempdata('error', 'Access denied Contact admin!', 3);
                     return redirect()->to(current_url());
                }
                }  
            } else {
                $data['validation'] = $this->validator;
            }

            
        }

        $data['userData'] = $this->dashModel->getLoggedUersData($userID);
        echo view('dashboard/template/header', $data);
        echo view('dashboard/addUser', $data);
    }

     public function edit_user($editId){
        helper('form');
        $userID = session()->get('logged_user');

        $data = [];
        $data['validation'] = null;

        $data['userData'] = $this->dashModel->getLoggedUersData($editId);


        if ($this->request->getMethod() == 'post') {

            $rules = [
                'userFirstName' => 'required',
                'userLstName' => 'required',
                'userId' => 'required',
                'emailId' => 'required',
                'mobile' => 'required',
                'birthDate' => 'required',
                'gender' => 'required',
                'role' => 'required',
                
            ];

            if ($this->validate($rules)) {

                $activeData;

                if ($this->request->getVar('user_status') == 'active') {
                        $activeData = "active";
                    }else{
                        $activeData = "inactive";
                    }

                $formData = [
                    'user_first_name' => $this->request->getVar('userFirstName'),
                    'user_last_name' => $this->request->getVar('userLstName'),
                    'userID' => $this->request->getVar('userId'),
                    'user_email' => $this->request->getVar('emailId'),
                    'user_mobile' => $this->request->getVar('mobile'),
                    'user_birthdate' => $this->request->getVar('birthDate'),
                    'user_gender' => $this->request->getVar('gender'),
                    'role' => $this->request->getVar('role'),
                    'user_status' => $activeData
                    
                ];
                   
                if ($formData) {
                    
                    $userData = $this->userModel->getUserRole($userID);

                if ($userData['role'] == 'Admin') {
                    
                        $submittedData = $this->userModel->editUserData($formData, $editId);
                     if ($submittedData) {
                        $this->session->setTempdata('error', 'User updated', 3);
                        return redirect()->to('/dashboard/users');
                     }

                }else{
                    $this->session->setTempdata('error', 'Access denied Contact admin!', 3);
                     return redirect()->to(current_url());
                }
                }  
            } else {
                $data['validation'] = $this->validator;
            }

            
        }

        echo view('dashboard/template/header', $data);

        echo view('dashboard/editUser', $data);
        }


    public function delete_user($id){

        $userID = session()->get('logged_user');
        $result  = $this->userModel->delete_user($id);

        if($result){
            return redirect()->to('/dashboard/users');
            $this->session->setTempdata('error', 'User deleted succesfully', 3);
        }else{
            $this->session->setTempdata('error', 'Unable to delete user', 3);
        }
    }

}
