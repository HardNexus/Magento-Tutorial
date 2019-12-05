<?php

class Florian_Contact_Adminhtml_ContactController extends Mage_Adminhtml_Controller_Action
{
    public function indexAction()
    {
        $this->loadLayout();
        $this->renderLayout();

        if ($this->getRequest()->isPost()) {
            $name = $this->getRequest()->getPost('name');
            $telephone = $this->getRequest()->getPost('telephone');
            $mail = $this->getRequest()->getPost('mail');
            if (!is_null($name) && !is_null($telephone) && !is_null($mail)) {
                $contact = Mage::getModel('florian_contact/contact');
                $contact->setName($name);
                $contact->setTelephone($telephone);
                $contact->setMail($mail);
                $contact->save();
                Mage::getSingleton('adminhtml/session')->addSuccess('Contact ajouté avec succès.');
                $this->_redirect('adminhtml/contact/index');
            }
        }
    }
}
