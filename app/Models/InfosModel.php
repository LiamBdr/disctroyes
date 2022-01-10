<?php

namespace App\Models;

use CodeIgniter\Model;

class InfosModel extends Model
{
    protected $table      = 'horaires';
    protected $primaryKey = 'gamer_id';

    public function recupHoraires()
    {
        $db = db_connect();
        $query = $db->query('SELECT * FROM horaires ORDER BY horaire_ordre');
        return $query->getResultArray();
    }

    public function recupAccueil()
    {
        $db = db_connect();
        $query = $db->query('SELECT * FROM accueil LIMIT 1');
        return $query->getRow();
    }
}
