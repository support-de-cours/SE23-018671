<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <header class="site-header">
        <div class="brand">Logo</div>
        <nav>
            <ul>
                <li><a href="<?= url('homepage') ?>">Home</a></li>
                <li><a href="<?= url('book:index') ?>">Our books</a></li>
                <li><a href="<?= url('about') ?>">About us</a></li>
            </ul>
        </nav>
    </header>

    <div class="site-content">