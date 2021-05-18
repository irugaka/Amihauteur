<?php

namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;
use Twig\Markup;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class AppExtension extends AbstractExtension
{
    public function getFunctions()
    {
        return [
            new TwigFunction('Progression', [$this, 'getProgressionBar']),
        ];
        /*. (($number >= 2) ? "<a href=\"path('ajout'))\">Test</a>" : "") .*/
    }

    public function getProgressionBar(int $number)
    {

        return "<div id=\"progression\"><span class=\"etape" . (($number >= 1) ? " fait" : "") ."\">1<div class=\"desc\">" . "Ajouter une configuration" . (($number >= 2) ? "</a>" : "") . "</div></span><span class=\"ligne\"></span>
        <span class=\"etape"  . (($number >= 2) ? " fait" : "") ."\">2<div class=\"desc\">Choisir un type d'echelle</div></span><span class=\"ligne\"></span>
	    <span class=\"etape"  . (($number >= 3) ? " fait" : "") ."\">3<div class=\"desc\">Choisir une norme</div></span><span class=\"ligne\"></span>
        <span class=\"etape"  . (($number >= 4) ? " fait" : "") ."\">4<div class=\"desc\">Choix de la Hauteur</div></span><span class=\"ligne\"></span>
        <span class=\"etape"  . (($number >= 5) ? " fait" : "") . "\">5<div class=\"desc\">Choix de l'Entree</div></span><span class=\"ligne\"></span>
        <span class=\"etape"  . (($number >= 6) ? " fait" : "") . "\">6<div class=\"desc\">Choix de la Sortie</div></span><span class=\"ligne\"></span>
        <span class=\"etape"  . (($number >= 7) ? " fait" : "") . "\">7<div class=\"desc\">Choix des Accessoire</div></span><span class=\"ligne\"></span>
        <span class=\"etape"  . (($number >= 8) ? " fait" : "") . "\">8<div class=\"desc\">Choix du Changement de volée</div></span><span class=\"ligne\"></span>
        <span class=\"etape"  . (($number == 0) ? " fait" : "") . "\">9<div class=\"desc\">Generation du Devis</div></span></span></div>";

    }
}