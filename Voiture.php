<?php

class Voiture 
{
    
    private $_plaque;
    private $_annee;
    private $_kilometrage;
    private $_marque;
    private $_modele;
    private $_couleur;
    private $_poids;

    public function __construct($plaque, $annee, $kilometrage, $marque, $modele, $couleur, $poids)
    {

        $this->_plaque = $plaque;
        $this->_annee = $annee;
        $this->_kilometrage = $kilometrage;
        $this->_marque = $marque;
        $this->_modele = $modele;
        $this->_couleur = $couleur;
        $this->_poids = $poids;

    }

    public function getPlaque()
    {
        return $this->_plaque;
    }

    public function getAnnee()
    {
        return $this->_annee;
    }

    public function getKilometrage()
    {
        return $this->_kilometrage;
    }

    public function getMarque()
    {
        return $this->_marque;
    }

    public function getModele()
    {
        return $this->_modele;
    }

    public function getCouleur()
    {
        return $this->_couleur;
    }

    public function getPoids()
    {
        return floatval($this->_poids) . ' Tonnes';
    }

    public function getReserved()
    {
        return strtolower($this->_marque) == 'audi' ? 'Réservée' : 'Libre'; 
    }

    public function getType()
    {
        return floatval($this->_poids) > 3.5 ? 'Utilitaire' : 'Particulière';
    }

    public function getCountry()
    {
        if (strtolower(substr($this->_plaque, 0, 2)) == 'be') {
            $country = 'Belgique';
        } else if (strtolower(substr($this->_plaque, 0, 2)) == 'fr') {
            $country = 'France';
        } else if (strtolower(substr($this->_plaque, 0, 2)) == 'de') {
            $country = 'Allemagne';
        } else {
            $country = 'Autre';
        } 

        return $country;
    }

    public function getUsure()
    {
        if($this->_kilometrage < 100000) {
            $usure = 'low';
        } else if ($this->_kilometrage >= 100000 && $this->_kilometrage <= 200000) {
            $usure = 'middle';
        } else {
            $usure = 'high';
        }

        return $usure;
    }

    public function getAge()
    {
        return strftime('%Y') - $this->_annee;
    }

    public function rouler()
    {
        return $this->_kilometrage += 100000;
    }

    public function display()
    {
        echo '    
        <table style="border: 1px solid black; padding: 10px; margin-bottom: 10px;">
            <tbody style="">
                <tr>
                    <td style="padding-right: 8px; border-right: 2px solid black;">
                        <img style="height: 140px;" src="img/' . strtolower($this->getMarque()) . '-' . strtolower($this->getModele()) . '-' . strtolower($this->getAnnee()) . '.jpg">
                    </td>
                    <td>
                        <table style="font-family: Muli,sans-serif;">
                            <tbody>
                                <tr>
                                    <td style="font-weight: 600; padding-left: 6px; padding-bottom: 10px;">' . $this->getMarque() . ' ' . $this->getModele() . '</td>
                                </tr>
                                <tr>
                                    <td style="padding-left: 6px;">Année : ' . $this->getAnnee() . '</td>
                                    <td style="padding-left: 14px;">Kilomètrage : ' . $this->getKilometrage() . 'km</td>
                                </tr>
                                <tr>
                                    <td style="padding-left: 6px;">Couleur : ' . $this->getCouleur() . '</td>
                                    <td style="padding-left: 14px;">Poids : ' . $this->getPoids() . '</td>
                                </tr>
                                <tr>
                                    <td style="padding-left: 6px;">Acheté en : ' . $this->getCountry() . '</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>';
    }

}