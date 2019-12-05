<?php

class Florian_Contact_Block_Monblock extends Mage_Core_Block_Template
{
    public function methodblock()
    {
        // on initialise la variable
        $retour = '
            <table>
                <thead>
                    <th>Nom</th>
                    <th>Numéro</th>
                    <th>Adresse mail</th>
                </thead>
                <tbody>
        ';

        /* on fait une requete : aller chercher Tous les elements
        de la table florian_contact (grace à notre model florian_contact/contact
        et les trier par id_florian_contact */

        $collection = Mage::getModel('florian_contact/contact')
            ->getCollection()
            ->setOrder('name', 'asc');

        /* ensuite on parcourt le resultat de la requete et
          avec la fonction getData(), on stocke dans la variable retour
          (pour l’affichage dans le template) les données voulues */

        foreach ($collection as $data) {
            $retour .= '
                <tr>
                    <td>' . $data->getData('name') . '</td>
                    <td>' . $data->getData('telephone') . '</td>
                    <td>' . $data->getData('mail') . '</td>
                </tr>
            ';
        }

        $retour .= '
                </tbody>
            </table>
        ';

        // je renvoie un message de succes à l'utilisateur (juste pour que vous sachiez utiliser la fonction)

        // Mage::getSingleton('adminhtml/session')->addSuccess('Cool Ca marche !!');

        return $retour;
    }
}
