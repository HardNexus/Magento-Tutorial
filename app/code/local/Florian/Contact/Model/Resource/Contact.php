<?php

class Florian_Contact_Model_Resource_Contact extends Mage_Core_Model_Resource_Db_Abstract
{
    public function _construct()
    {
        $this->_init('florian_contact/contact', 'id_florian_contact');
    }
}
