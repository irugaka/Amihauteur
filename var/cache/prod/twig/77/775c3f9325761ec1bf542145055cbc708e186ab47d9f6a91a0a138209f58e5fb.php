<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* test.html.twig */
class __TwigTemplate_5d242472c02aa1006d22ae8e8fdace8a1c49d8a45bcf6f7bc61f93391353e38c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
<style>
img {
\twidth: 300px;
    height:auto;
}
</style>

<img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/amihauteur.png")), "html", null, true);
        echo "\" alt=\"\">

<p style=\"text-align:left\">
SIRET 519 634 232 00010
<span style=\"float:right;\">Devis DEV 20206485</span>
<br>
76000 Rouen
<span style=\"float:right;\">En date du ";
        // line 19
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d/m/Y"), "html", null, true);
        echo "</span>
<br>
<b>Votre contact : Karl GEST </b>
<br>
Tel : 07 60 34 00 41
<br>
Email : assistant@amihauteur.com
</p>
<br>
<br>

<div class=\"container\">
                <!-- Tableau qui affiche les config -->
                <table id=\"ListeConfig\" class=\"table table-striped table-bordered table-sm \">
                    <thead>
                        <tr>
                            <!-- <th class=\"bg-warning\">Nom</th> -->
                            <th>Nom/Code</th>
                            <th>Description</th>
                            <th>Qte</th>
                            <th>PU HT</th>
                            <th>TVA</th>
                            <th>Total HT</th>

                            <!-- <th class=\"bg-warning\"></th> -->
                        </tr>
                    </thead>
                    <tbody>
                    ";
        // line 47
        $context["PrixFinalCoupe"] = 0;
        // line 48
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["CoupeEchelle"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["Coupe"]) {
            // line 49
            echo "                    <tr>
                                <td class=\"table-light\">
                                ";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Coupe"], "CoupeEchelleId", [], "any", false, false, false, 51), "Libelle", [], "any", false, false, false, 51), "html", null, true);
            echo "
                                </a></td>
                                <td>Une description</td>
                                <td class=\"table-light\">";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Coupe"], "Qte", [], "any", false, false, false, 54), "html", null, true);
            echo "</td>
                                <td class=\"table-light\">";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Coupe"], "CoupeEchelleId", [], "any", false, false, false, 55), "Prix", [], "any", false, false, false, 55), "html", null, true);
            echo "</td>
                                <td class=\"table-light\"> 20 % </td>
                                <td class=\"table-light\">";
            // line 57
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Coupe"], "CoupeEchelleId", [], "any", false, false, false, 57), "Prix", [], "any", false, false, false, 57) * twig_get_attribute($this->env, $this->source, $context["Coupe"], "Qte", [], "any", false, false, false, 57)), "html", null, true);
            echo "</td>
                            </tr>
                            <tr>
                             ";
            // line 60
            $context["PrixFinalCoupe"] = (($context["PrixFinalCoupe"] ?? null) + (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Coupe"], "CoupeEchelleId", [], "any", false, false, false, 60), "Prix", [], "any", false, false, false, 60) * twig_get_attribute($this->env, $this->source, $context["Coupe"], "Qte", [], "any", false, false, false, 60)));
            // line 61
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Coupe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "                                <td class=\"table-light\">
                                ";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["Echelle"] ?? null), "echelleEntree", [], "any", false, false, false, 63), "libelleEntree", [], "any", false, false, false, 63), "html", null, true);
        echo "
                                </a></td>
                                <td class=\"table-light\">";
        // line 65
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["Echelle"] ?? null), "echelleEntree", [], "any", false, false, false, 65), "descriptionEntree", [], "any", false, false, false, 65), "html", null, true);
        echo "</td>
                                <td class=\"table-light\">1</td>
                                <td class=\"table-light\">";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["Echelle"] ?? null), "echelleEntree", [], "any", false, false, false, 67), "prixEntree", [], "any", false, false, false, 67), "html", null, true);
        echo "</td>
                                <td class=\"table-light\"> 20 % </td>
                                <td class=\"table-light\">";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["Echelle"] ?? null), "echelleEntree", [], "any", false, false, false, 69), "prixEntree", [], "any", false, false, false, 69), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <td class=\"table-light\">
                                ";
        // line 73
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["Echelle"] ?? null), "echelleSortie", [], "any", false, false, false, 73), "libelleSortie", [], "any", false, false, false, 73), "html", null, true);
        echo "
                                </a></td>
                                <td class=\"table-light\">";
        // line 75
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["Echelle"] ?? null), "echelleSortie", [], "any", false, false, false, 75), "descriptionEntree", [], "any", false, false, false, 75), "html", null, true);
        echo "</td>
                                <td class=\"table-light\">1</td>
                                <td class=\"table-light\">";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["Echelle"] ?? null), "echelleSortie", [], "any", false, false, false, 77), "prixSortie", [], "any", false, false, false, 77), "html", null, true);
        echo "</td>
                                <td class=\"table-light\"> 20 % </td>
                                <td class=\"table-light\">";
        // line 79
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["Echelle"] ?? null), "echelleSortie", [], "any", false, false, false, 79), "prixSortie", [], "any", false, false, false, 79), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                    ";
        // line 82
        $context["PrixFinal"] = 0;
        // line 83
        echo "                    ";
        $context["PrixFinalFixation"] = 0;
        // line 84
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ListeFixation"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["Fixation"]) {
            // line 85
            echo "                            <tr>
                                <td class=\"table-light\">
                                ";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Fixation"], "Fixation", [], "any", false, false, false, 87), "NomFixation", [], "any", false, false, false, 87), "html", null, true);
            echo "
                                </a></td>
                                <td class=\"table-light\">-</td>
                                <td class=\"table-light\">";
            // line 90
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Fixation"], "Qte", [], "any", false, false, false, 90), "html", null, true);
            echo "</td>
                                <td class=\"table-light\">";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Fixation"], "Fixation", [], "any", false, false, false, 91), "prixFixation", [], "any", false, false, false, 91), "html", null, true);
            echo "</td>
                                <td class=\"table-light\"> 20% </td>
                                <td class=\"table-light\"> ";
            // line 93
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Fixation"], "Fixation", [], "any", false, false, false, 93), "prixFixation", [], "any", false, false, false, 93) * twig_get_attribute($this->env, $this->source, $context["Fixation"], "Qte", [], "any", false, false, false, 93)), "html", null, true);
            echo "</td>
                            </tr>
                            ";
            // line 95
            $context["PrixFinalFixation"] = (($context["PrixFinalFixation"] ?? null) + (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Fixation"], "Fixation", [], "any", false, false, false, 95), "prixFixation", [], "any", false, false, false, 95) * twig_get_attribute($this->env, $this->source, $context["Fixation"], "Qte", [], "any", false, false, false, 95)));
            // line 96
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Fixation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "                    ";
        $context["PrixFinalAccessoire"] = 0;
        // line 98
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ListeAccessoire"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["Accessoire"]) {
            // line 99
            echo "                            <tr>
                                <td class=\"table-light\">
                                ";
            // line 101
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Accessoire"], "Accessoire", [], "any", false, false, false, 101), "nomAccessoire", [], "any", false, false, false, 101), "html", null, true);
            echo "
                                </a></td>
                                <td class=\"table-light\">- ";
            // line 103
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Accessoire"], "Accessoire", [], "any", false, false, false, 103), "refAccessoire", [], "any", false, false, false, 103), "html", null, true);
            echo "</td>
                                <td class=\"table-light\">";
            // line 104
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Accessoire"], "Qte", [], "any", false, false, false, 104), "html", null, true);
            echo "</td>
                                <td class=\"table-light\">";
            // line 105
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Accessoire"], "Accessoire", [], "any", false, false, false, 105), "prixAccessoire", [], "any", false, false, false, 105), "html", null, true);
            echo "</td>
                                <td class=\"table-light\"> 20% </td>
                                <td class=\"table-light\"> ";
            // line 107
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Accessoire"], "Accessoire", [], "any", false, false, false, 107), "prixAccessoire", [], "any", false, false, false, 107) * twig_get_attribute($this->env, $this->source, $context["Accessoire"], "Qte", [], "any", false, false, false, 107)), "html", null, true);
            echo "</td>
                            </tr>
                            ";
            // line 109
            $context["PrixFinalAccessoire"] = (($context["PrixFinalAccessoire"] ?? null) + (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Accessoire"], "Accessoire", [], "any", false, false, false, 109), "prixAccessoire", [], "any", false, false, false, 109) * twig_get_attribute($this->env, $this->source, $context["Accessoire"], "Qte", [], "any", false, false, false, 109)));
            // line 110
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Accessoire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 111
        echo "                    </tbody>
                </table>
                ";
        // line 113
        $context["PrixFinal"] = (((((($context["PrixFinal"] ?? null) + ($context["PrixFinalCoupe"] ?? null)) + ($context["PrixFinalFixation"] ?? null)) + twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["Echelle"] ?? null), "echelleEntree", [], "any", false, false, false, 113), "prixEntree", [], "any", false, false, false, 113)) + twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["Echelle"] ?? null), "echelleSortie", [], "any", false, false, false, 113), "prixSortie", [], "any", false, false, false, 113)) + ($context["PrixFinalAccessoire"] ?? null));
        // line 114
        echo "            </div>

<p style=\"text-align:right\">
<b> Prix Total HT : ";
        // line 117
        echo twig_escape_filter($this->env, ($context["PrixFinal"] ?? null), "html", null, true);
        echo " €
</p>";
    }

    public function getTemplateName()
    {
        return "test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  273 => 117,  268 => 114,  266 => 113,  262 => 111,  256 => 110,  254 => 109,  249 => 107,  244 => 105,  240 => 104,  236 => 103,  231 => 101,  227 => 99,  222 => 98,  219 => 97,  213 => 96,  211 => 95,  206 => 93,  201 => 91,  197 => 90,  191 => 87,  187 => 85,  182 => 84,  179 => 83,  177 => 82,  171 => 79,  166 => 77,  161 => 75,  156 => 73,  149 => 69,  144 => 67,  139 => 65,  134 => 63,  131 => 62,  125 => 61,  123 => 60,  117 => 57,  112 => 55,  108 => 54,  102 => 51,  98 => 49,  93 => 48,  91 => 47,  60 => 19,  50 => 12,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "test.html.twig", "C:\\wamp64\\www\\Projet\\AmiHauteurApp\\templates\\test.html.twig");
    }
}
