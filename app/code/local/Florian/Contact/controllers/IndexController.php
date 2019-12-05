<?php

class Florian_Contact_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        $this->loadLayout();
        $this->renderLayout();
    }

    public function mamethodeAction()
    {
        echo 'test de mon module.';
    }

    public function saveAction()
    {
        //on recuperes les données envoyées en POST
        $name = '' . $this->getRequest()->getPost('name');
        $telephone = '' . $this->getRequest()->getPost('telephone');
        $mail = '' . $this->getRequest()->getPost('mail');


        //on verifie que les champs ne sont pas vide
        if (!empty($name) && !empty($telephone) && !empty($mail)) {
            //on cree notre objet et on l'enregistre en base
            $contact = Mage::getModel('florian_contact/contact');
            $contact->setName($name);
            $contact->setTelephone($telephone);
            $contact->setMail($mail);
            $contact->save();
        }

        //on redirige l’utilisateur vers la méthode index du controller indexController
        //de notre module films
        $this->_redirect('contact');
    }
}