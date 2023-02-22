<?php

namespace App\Controllers;

class Home extends BaseController {

        public function index() {
                $data = [
                    'page_title' => 'Woodlands University College',
                    'page_css' => 'home.css',
                ];

                echo view('templates/header', $data);
                echo view('home');
                echo view('templates/footer');
        }

        public function contact() {
                helper('form');
                $data = [
                    'page_title' => 'Contact Us | Woodlands University College',
                    'page_css' => 'contact.css',
                ];

                echo view('templates/header', $data);
                echo view('pages/contact');
                echo view('templates/footer');
        }

        public function courses() {
                $data = [
                    'page_title' => 'Courses|Woodlands University College',
                    'page_css' => 'courses.css',
                ];

                echo view('templates/header', $data);
                 echo view('pages/courses');
                echo view('templates/footer');
        }

        public function about() {
                $data = [
                    'page_title' => 'About | Woodlands University College',
                    'page_css' => 'about.css',
                ];

                echo view('templates/header', $data);
              echo view('pages/about');
                echo view('templates/footer');
        }

        public function community() {
                $data = [
                    'page_title' => 'About | Woodlands University College',
                    'page_css' => 'contact.css',
                ];

                echo view('templates/header', $data);
//              echo view('pages/contact');
                echo view('templates/footer');
        }

        public function footer(){
                $data = [
                        'page_css' => 'footer.css',
                ];
        }

}
