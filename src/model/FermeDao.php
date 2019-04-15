<?php

/**
 * Created by PhpStorm.
 * User: Diallo
 * Date: 03/04/2019
 * Time: 16:10
 */
namespace src\model;
use config\Model;
use src\entities\Ferme;

class FermesDao extends Model
{

    public function insert(Ferme $ferme) {

        //$ferme->setNom($nom);
        $sql = "INSERT INTO ferme (nom, date_creation) VALUES (:nom, :date_creation)";
        $stm = $this->db->prepare($sql);
        $stm->bindValue(':nom', $ferme->getNom());
        $stm->bindValue(':date_creation', date("Ymd"));
        $stm->execute();
        if($stm) {
            return $result = "Réussi";
        }
        else {
            return $result = "Echec d'insertion";
        }
    }

    public function findAll() {
        $sql = "SELECT * FROM ferme";
        $exe = $this->db->query($sql);
        if($exe) {
            $fermes = [];
            while($donnee = $exe->fetch()) {
                $fermes [] = $donnee;
            }
            return $fermes;
        }
    }
}