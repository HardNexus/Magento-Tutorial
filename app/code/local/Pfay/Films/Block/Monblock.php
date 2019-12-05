<?php

class Pfay_Films_Block_Monblock extends Mage_Core_Block_Template
{
    public function methodblock()
    {
        //on initialise la variable
        $retour = '';

        /* on fait une requete : aller chercher Tous les elements
        de la table pfay_films (grace à notre model pfay_films/film
        et les trier par id_pfay_films */

        $collection = Mage::getModel('pfay_films/film')
            ->getCollection()
            ->setOrder('id_pfay_films', 'asc');

        /* ensuite on parcourt le resultat de la requete et
          avec la fonction getData(), on stocke dans la variable retour
          (pour l’affichage dans le template) les données voulues */

        foreach ($collection as $data) {

            $retour .= $data->getData('name') . '<br />';
        }

        //je renvoie un message de succes à l'utilisateur (juste pour que vous sachiez utiliser la fonction)

        return $retour;
    }
}
