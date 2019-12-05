<?php

class Pfay_Films_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        $this->loadLayout();
        $this->renderLayout();
    }

    public function mamethodeAction()
    {
        echo 'test mamethode';
    }

    public function saveAction()
    {
        //on recuperes les données envoyées en POST
        $name = '' . $this->getRequest()->getPost('name');


        //on verifie que les champs ne sont pas vide
        if (!empty($name)) {
            //on cree notre objet et on l'enregistre en base
            $contact = Mage::getModel('pfay_films/film');
            $contact->setData('name', $name);
            $contact->save();
        }

        //on redirige l’utilisateur vers la méthode index du controller indexController
        //de notre module films
        $this->_redirect('films/index/index');
    }
}
