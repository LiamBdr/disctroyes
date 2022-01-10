<?php

namespace App\Controllers;

class Articles extends BaseController

{

    public function index()
    {
        $data['title'] = 'Disctroy(es) | Articles';
        $data['meta'] = "Retrouvez l'ensemble des articles concernant l'association DiscTroy(es)";
        $data['navActiv'] = 1;

        //$data['css'][] = "accueil.css";
        //$data['js'][] = "jeanclaude.js";

        echo view('common/header', $data);
        echo view('accueil_view', $data);
        echo view('common/footer');
    }
}
