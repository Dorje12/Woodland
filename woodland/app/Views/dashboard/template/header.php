<!DOCTYPE html>

<html>
        <head>
                <meta charset="UTF-8">
                <title>Dashboard | Woodlands University College</title>
                <link rel="stylesheet" href="<?= base_url('public/styles/dashboard.css') ?>"/>
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
        </head>
        <body>
                <div class="main_wrapper">

                        <aside>
                                <div class="side_menu_container sub_wrapper">
                                        <div class="logo">

                                        </div>

                                        <div>

                                                <a href="<?= base_url('dashboard/profile'); ?>" class="side_menu" href=""><div class="user_profile">
                                                                <img width="50px" src="<?= base_url('public/images/dashboard/profile/pimage1.png'); ?>" alt="user image">
                                                        </div>
                                                        <div>
                                                                <h3><?= $userData->user_first_name . " " . $userData->user_last_name; ?></h3>
                                                                <p>UID: <?= $userData->userID; ?></p>
                                                        </div>
                                                </a>

                                        </div>
                                        <div class="nav_url">

                                                <a href="<?= base_url('dashboard'); ?>"><i class="fa-solid fa-house"></i>Dashboard</a>
                                                <a href="<?= base_url('dashboard/courses'); ?>"><i class="fa-solid fa-book-open"></i>Courses</a>
                                                <a href="<?= base_url('dashboard/attendance'); ?>"><i class="fa-solid fa-fingerprint"></i>Attendance</a>
                                                <a href="<?= base_url('dashboard/calender'); ?>"><i class="fa-solid fa-calendar-days"></i>Calander</a>
                                                <a href="<?= base_url('dashboard/time_table'); ?>"><i class="fa-solid fa-stopwatch"></i>Time table</a>
                                                <a href="<?= base_url('dashboard/results'); ?>"><i class="fa-solid fa-file-invoice"></i>Result</a>
                                                <a href="<?= base_url('dashboard/users'); ?>"><i class="fa-solid fa-user"></i>Users</a>
                                                <a href="<?= base_url('dashboard/modules'); ?>"><i class="fa-solid fa-book-open"></i>Modules</a>
                                                <a href="<?= base_url('Index/logout'); ?>"><i class="fa-solid fa-right-from-bracket"></i>Logout</a>
                                              
                                        </div>



                                </div>
                        </aside>