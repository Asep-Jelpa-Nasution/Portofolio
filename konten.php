<?php
if (isset($_GET['page'])) {
    $page = $_GET['page'];

    switch ($page) {
        case 'home':
            include "includes/home.php";
            break;
        
        case 'about':
            include "includes/about.php";
            break;

        case 'contact':
            include "includes/contact.php";
            break;

        case 'tabel':
            include "includes/datatables.php";
            break;
        
        case 'form':
            include "includes/form.php";
            break;

        case 'something':
            include "includes/something.php";
            break;

        default:
            include "indludes/404.php";

    }
} else {
    include "includes/home.php";
}