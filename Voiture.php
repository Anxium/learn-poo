<?php

class Voiture 
{
    
    private $plaque = null;
    private $annee = null;
    private $kilometrage = null;
    private $marque = null;
    private $modele = null;
    private $couleur = null;
    private $poids = null;

    public function __construct($plaque, $annee, $kilometrage, $marque, $modele, $couleur, $poids)
    {

        $this->plaque = $plaque;
        $this->annee = $annee;
        $this->kilometrage = $kilometrage;
        $this->marque = $marque;
        $this->modele = $modele;
        $this->couleur = $couleur;
        $this->poids = $poids;

    }

    public function getPlaque()
    {
        return $this->plaque;
    }

    public function getAnnee()
    {
        return $this->annee;
    }

    public function getKilometrage()
    {
        return $this->kilometrage;
    }

    public function getMarque()
    {
        return $this->marque;
    }

    public function getModele()
    {
        return $this->modele;
    }

    public function getCouleur()
    {
        return $this->couleur;
    }

    public function getPoids()
    {
        return floatval($this->poids) . ' Tonnes';
    }

    public function getReserved()
    {
        return strtolower($this->marque) == 'audi' ? 'Réservée' : 'Libre'; 
    }

    public function getType()
    {
        return floatval($this->poids) > 3.5 ? 'Utilitaire' : 'Particulière';
    }

    public function getCountry()
    {
        if (strtolower(substr($this->plaque, 0, 2)) == 'be') {
            $country = 'Belgique';
        } elseif (strtolower(substr($this->plaque, 0, 2)) == 'fr') {
            $country = 'France';
        } elseif (strtolower(substr($this->plaque, 0, 2)) == 'de') {
            $country = 'Allemagne';
        } else {
            $country = 'Autre';
        } 

        return $country;
    }

    public function getUsure()
    {
        if($this->kilometrage < 100000) {
            $usure = 'low';
        } else if ($this->kilometrage >= 100000 && $this->kilometrage <= 200000) {
            $usure = 'middle';
        } else {
            $usure = 'high';
        }

        return $usure;
    }

    public function getAge()
    {
        return strftime('%Y') - $this->annee;
    }

    public function rouler()
    {
        return $this->kilometrage += 100000;
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