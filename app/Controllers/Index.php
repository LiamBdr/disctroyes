<?php

namespace App\Controllers;

class Index extends BaseController

{

    public function index()
    {
        $data['title'] = 'Disctroy(es) | Accueil';
        $data['meta'] = "Site officiel de l'association DiscTroy(es), club d'Ultimate Frisbee à Troyes.";
        $data['navActiv'] = 1;

        $data['css'][] = "accueil.css";

        //$data['js'][] = "jeanclaude.js";

        $info = new \App\Models\InfosModel();
        $query = $info->recupHoraires();

        $i = 0;
        foreach ($query as $horaire) {
            $data['horaires'][$i]['creneau'] = $horaire['horaire_creneau'];
            $data['horaires'][$i]['jour'] = strtoupper(trim($horaire['horaire_jour']));

            $data['horaires'][$i]['heure'] = $horaire['horaire_heure'];
            $data['horaires'][$i]['lieu'] = ucwords($horaire['horaire_lieu']);

            if ($horaire['horaire_type_lieu'] == 0) {
                $data['horaires'][$i]['type'] = 'EXT';
            } else {
                $data['horaires'][$i]['type'] = 'INT';
            }
            $i++;
        }

        $data['accueilInfos'] = $info->recupAccueil();

        echo view('common/header', $data);
        echo view('accueil_view', $data);
        echo view('common/footer');
    }
}
