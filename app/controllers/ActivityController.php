<?php
namespace app\controllers;

class ActivityController
{
    public function index()
    {
        require_once '../app/views/activities/index.php';
    }

    public function create()
    {
        require_once '../app/views/activities/create.php';
    }

    public function show($id)
    {
        require_once '../app/views/activities/show.php';
    }
}