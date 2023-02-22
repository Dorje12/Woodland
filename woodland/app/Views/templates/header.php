<!DOCTYPE html>
<html lang="en">
        <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <meta name="description" content="Woodlands college university is a very best place to">
                <link rel="icon" type="image/x-icon" href="<?= base_url('public/favicon.png') ?>">
                <link rel="stylesheet" href="<?= base_url('public/styles/index.css') ?>">

                <?php if ($page_css !== 'null'): ?>
                        <link rel="stylesheet" href="<?= base_url('public/styles'); ?>/<?= $page_css ?>">
                <?php endif; ?>


                <title><?= $page_title ?></title>
        </head>
        <body>
                <main>
                        <div class="big-wrapper light">

                                <header>
                                        <div class="container">
                                                <div class="logo">
                                                        <a href="<?= base_url(); ?>"><img src="<?= base_url('public/woodland_logo.png'); ?>" alt="Logo" /></a>
                                                </div>
                                                <div class="links">
                                                        <ul>
                                                                <li><a href="<?= base_url('courses'); ?>">Courses</a></li>
                                                                <li><a href="<?= base_url('about'); ?>">About</a></li>
                                                                <li><a href="<?= base_url('contact'); ?>">Contact</a></li>
                                                                <li><a href="<?= base_url('community'); ?>">Community</a></li>
                                                                <?php if (session()->has('logged_user')) : ?>
                                                                        <li><a href="<?= base_url('dashboard'); ?>">Dashboard</a></li>
                                                                <?php else: ?>
                                                                        <li><a href="<?= base_url('auth'); ?>">Login</a></li>
                                                                <?php endif; ?>
                                                                
                                                        </ul>
                                                </div>
                                                <div class="overlay"></div>
                                                <div class="hamburger-menu">
                                                        <div class="bar"></div>
                                                </div>
                                        </div>
                                </header>

                        </div>
                </main>