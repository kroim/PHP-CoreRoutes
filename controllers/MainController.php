<?php
include "./views/main/home.php";
include "./views/main/about.php";
include "./views/main/contact.php";

class MainController
{
    public function __construct()
    {
    }

    public function home()
    {
        echo "Home Page";
    }
    public function about()
    {
        echo "About Page";
    }
    public function contact()
    {
        echo "Contact Page";
    }
}
