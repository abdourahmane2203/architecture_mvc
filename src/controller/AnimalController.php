<?php
/**
 * Created by PhpStorm.
 * User: Diallo
 * Date: 12/04/2019
 * Time: 09:19
 */
use config\Controller;
class AnimalController extends Controller
{
    public function add() {
        $this->view->assign("test", "Valeur à tester");
        $this->view->load("animal/add");
    }
}