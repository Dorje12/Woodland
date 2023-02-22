<?php

namespace App\models;

use CodeIgniter\Model;
use Config\Database;

class UsersModel extends Model {



        public function getUsersList() {
                $db = Database::connect();
                $query = $db->query('select * from WUC_users');
                $result = $query->getResult();

                if (count($result) > 0) {
                        return $result;
                } else {
                        return false;
                }
        }



        public function verifyUserID($userID) {
                $builder = $this->db->table('users');
                $builder->select('userID, user_status, user_password, role');
                $builder->where('userID', $userID);
                $result = $builder->get();

                if (count($result->getResultArray()) == 1) {
                        return $result->getRowArray();
                } else {
                        return false;
                }
        }

        public function checkUID($userID) {
                $builder = $this->db->table('users');
                $builder->select('userID');
                $builder->where('userID', $userID);
                $result = $builder->get();

                if (count($result->getResultArray()) == 1) {
                        return $result->getRowArray();
                } else {
                        return false;
                }
        }

        public function getUserRole($userID){
                $builder = $this->db->table('users');
                $builder->select('role');
                $builder->where('userID', $userID);
                $result = $builder->get();

                if (count($result->getResultArray()) == 1) {
                        return $result->getRowArray();
                } else {
                        return false;
                }
        }
        
       public function addUser($formData) {
           $builder = $this->db->table('users');
           $builder->insert($formData);

           if ($this->db->affectedRows() == 1) {
                return true;
           }else{
                return false;
           }

       }

       public function editUserData($data, $editId){
        $builder = $this->db->table('users');
        $builder->where('userID', $editId);
        $builder->update($data);

        if ($this->db->affectedRows() == 1) {
                return true;
           }else{
                return false;
           }
       }

       public function delete_user($id) {
           $builder = $this->db->table('users');
           $builder->delete(['userID' => $id]);

           if ($this->db->affectedRows() == 1) {
                return true;
           }else{
                return false;
           }
       }

}
