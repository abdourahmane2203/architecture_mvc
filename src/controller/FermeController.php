<?php
/**
 * Created by PhpStorm.
 * User: Diallo
 * Date: 10/04/2019
 * Time: 14:42
 */
use config\Controller;
use src\model\FermeDao;
use src\model\FermesDao;
class FermeController extends Controller
{
    public function addF() {
        if(isset($_POST['add'])) {
            extract($_POST);
            $fermeDao = new FermesDao();
            $ferme = new Ferme();
            $ferme->setNom($nom);
            $result = $fermeDao->insert($ferme);
            $data = ['result'=> $result, 'nom'=> $nom];
            return $this->view->load("ferme/add", $result);
        }
        else {
            return $this->view->load("fermes/add");
        }
    }
    public function getAll() {
        $fermeDao = new FermesDao();
        $fermes =  $fermeDao->findAll();
        $this->view->assign('fermes','fsdhfksjdfdsf');
        $this->view->assign('resutl','fsdhfksjdfdsf');
        return $this->view->load("ferme/getAll");
    }

}