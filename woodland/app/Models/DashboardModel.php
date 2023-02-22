<?php

namespace App\models;

use CodeIgniter\Model;

class DashboardModel extends Model {

        public function getLoggedUersData($userID) {
                $builder = $this->db->table('users');
                $builder->where('userID', $userID);
                $result = $builder->get();
                if (count($result->getResultArray()) == 1) {
                        return $result->getRow();
                } else {
                        return false;
                }
        }

}
