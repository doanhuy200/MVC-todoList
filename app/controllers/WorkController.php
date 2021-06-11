<?php

namespace app\controllers;

require 'core/helpers.php';

use app\models\Work;

class WorkController
{
    public function index()
    {
        $works = Work::all();

        return view('works/index', compact("works"));
    }

    public static function store()
    {
        $data = [
            'name'       => $_POST['name'],
            'start_date' => $_POST['start_date'],
            'end_date'   => $_POST['end_date'],
            'status'     => $_POST['status'],
        ];
        Work::insert($data);

        return redirect('/');
    }

    public static function delete()
    {
        Work::delete($_POST['id']);

        return redirect('/');
    }

    public static function show()
    {
        $work = Work::allById($_GET['id'])[0];

        return view("works/show", compact("work"));
    }

    public static function edit()
    {
        $data = [
            'name'       => $_POST['name'],
            'start_date' => $_POST['start_date'],
            'end_date'   => $_POST['end_date'],
            'status'     => $_POST['status'],
        ];
        Work::updateById($data, $_POST['id']);

        return redirect('/');
    }
}

