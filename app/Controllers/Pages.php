<?php

namespace App\Controllers;

use App\Models\BlogModel;

class Pages extends BaseController
{
    public function index()
    {
        $model = new BlogModel();
        $data['news'] = $model->getPosts();
        echo view('template/header', $data);
        echo view('pages/home');
        echo view('template/footer');
    }
    function showme($page = 'home'){

        // if ( ! is_file(APPPATH.'/Views/pages/'.$page. 'php')) {
        //     throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        // }


        echo view('template/header');
        echo view('pages/'.$page);
        echo view('template/footer');

    }

    





}