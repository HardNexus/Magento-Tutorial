<?php

class Florian_Contact_Model_Contact extends Mage_Core_Model_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('florian_contact/contact');
    }
}
