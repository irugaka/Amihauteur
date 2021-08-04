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
class __TwigTemplate_33e8e92d38861ad76779306f585f0fb1c737b9dcbada0695da8182f43ec63ed3 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "test.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "test.html.twig"));

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
        $context['_seq'] = twig_ensure_traversable((isset($context["CoupeEchelle"]) || array_key_exists("CoupeEchelle", $context) ? $context["CoupeEchelle"] : (function () { throw new RuntimeError('Variable "CoupeEchelle" does not exist.', 48, $this->source); })()));
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
            $context["PrixFinalCoupe"] = ((isset($context["PrixFinalCoupe"]) || array_key_exists("PrixFinalCoupe", $context) ? $context["PrixFinalCoupe"] : (function () { throw new RuntimeError('Variable "PrixFinalCoupe" does not exist.', 60, $this->source); })()) + (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Coupe"], "CoupeEchelleId", [], "any", false, false, false, 60), "Prix", [], "any", false, false, false, 60) * twig_get_attribute($this->env, $this->source, $context["Coupe"], "Qte", [], "any", false, false, false, 60)));
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["Echelle"]) || array_key_exists("Echelle", $context) ? $context["Echelle"] : (function () { throw new RuntimeError('Variable "Echelle" does not exist.', 63, $this->source); })()), "echelleEntree", [], "any", false, false, false, 63), "libelleEntree", [], "any", false, false, false, 63), "html", null, true);
        echo "
                                </a></td>
                                <td class=\"table-light\">";
        // line 65
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["Echelle"]) || array_key_exists("Echelle", $context) ? $context["Echelle"] : (function () { throw new RuntimeError('Variable "Echelle" does not exist.', 65, $this->source); })()), "echelleEntree", [], "any", false, false, false, 65), "descriptionEntree", [], "any", false, false, false, 65), "html", null, true);
        echo "</td>
                                <td class=\"table-light\">1</td>
                                <td class=\"table-light\">";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["Echelle"]) || array_key_exists("Echelle", $context) ? $context["Echelle"] : (function () { throw new RuntimeError('Variable "Echelle" does not exist.', 67, $this->source); })()), "echelleEntree", [], "any", false, false, false, 67), "prixEntree", [], "any", false, false, false, 67), "html", null, true);
        echo "</td>
                                <td class=\"table-light\"> 20 % </td>
                                <td class=\"table-light\">";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["Echelle"]) || array_key_exists("Echelle", $context) ? $context["Echelle"] : (function () { throw new RuntimeError('Variable "Echelle" does not exist.', 69, $this->source); })()), "echelleEntree", [], "any", false, false, false, 69), "prixEntree", [], "any", false, false, false, 69), "html", null, true);
        echo "</td>
                            </tr>
                            <tr>
                                <td class=\"table-light\">
                                ";
        // line 73
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["Echelle"]) || array_key_exists("Echelle", $context) ? $context["Echelle"] : (function () { throw new RuntimeError('Variable "Echelle" does not exist.', 73, $this->source); })()), "echelleSortie", [], "any", false, false, false, 73), "libelleSortie", [], "any", false, false, false, 73), "html", null, true);
        echo "
                                </a></td>
                                <td class=\"table-light\">";
        // line 75
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["Echelle"]) || array_key_exists("Echelle", $context) ? $context["Echelle"] : (function () { throw new RuntimeError('Variable "Echelle" does not exist.', 75, $this->source); })()), "echelleSortie", [], "any", false, false, false, 75), "descriptionEntree", [], "any", false, false, false, 75), "html", null, true);
        echo "</td>
                                <td class=\"table-light\">1</td>
                                <td class=\"table-light\">";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["Echelle"]) || array_key_exists("Echelle", $context) ? $context["Echelle"] : (function () { throw new RuntimeError('Variable "Echelle" does not exist.', 77, $this->source); })()), "echelleSortie", [], "any", false, false, false, 77), "prixSortie", [], "any", false, false, false, 77), "html", null, true);
        echo "</td>
                                <td class=\"table-light\"> 20 % </td>
                                <td class=\"table-light\">";
        // line 79
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["Echelle"]) || array_key_exists("Echelle", $context) ? $context["Echelle"] : (function () { throw new RuntimeError('Variable "Echelle" does not exist.', 79, $this->source); })()), "echelleSortie", [], "any", false, false, false, 79), "prixSortie", [], "any", false, false, false, 79), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable((isset($context["ListeFixation"]) || array_key_exists("ListeFixation", $context) ? $context["ListeFixation"] : (function () { throw new RuntimeError('Variable "ListeFixation" does not exist.', 84, $this->source); })()));
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
            $context["PrixFinalFixation"] = ((isset($context["PrixFinalFixation"]) || array_key_exists("PrixFinalFixation", $context) ? $context["PrixFinalFixation"] : (function () { throw new RuntimeError('Variable "PrixFinalFixation" does not exist.', 95, $this->source); })()) + (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Fixation"], "Fixation", [], "any", false, false, false, 95), "prixFixation", [], "any", false, false, false, 95) * twig_get_attribute($this->env, $this->source, $context["Fixation"], "Qte", [], "any", false, false, false, 95)));
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
        $context['_seq'] = twig_ensure_traversable((isset($context["ListeAccessoire"]) || array_key_exists("ListeAccessoire", $context) ? $context["ListeAccessoire"] : (function () { throw new RuntimeError('Variable "ListeAccessoire" does not exist.', 98, $this->source); })()));
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
            $context["PrixFinalAccessoire"] = ((isset($context["PrixFinalAccessoire"]) || array_key_exists("PrixFinalAccessoire", $context) ? $context["PrixFinalAccessoire"] : (function () { throw new RuntimeError('Variable "PrixFinalAccessoire" does not exist.', 109, $this->source); })()) + (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Accessoire"], "Accessoire", [], "any", false, false, false, 109), "prixAccessoire", [], "any", false, false, false, 109) * twig_get_attribute($this->env, $this->source, $context["Accessoire"], "Qte", [], "any", false, false, false, 109)));
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
        $context["PrixFinal"] = ((((((isset($context["PrixFinal"]) || array_key_exists("PrixFinal", $context) ? $context["PrixFinal"] : (function () { throw new RuntimeError('Variable "PrixFinal" does not exist.', 113, $this->source); })()) + (isset($context["PrixFinalCoupe"]) || array_key_exists("PrixFinalCoupe", $context) ? $context["PrixFinalCoupe"] : (function () { throw new RuntimeError('Variable "PrixFinalCoupe" does not exist.', 113, $this->source); })())) + (isset($context["PrixFinalFixation"]) || array_key_exists("PrixFinalFixation", $context) ? $context["PrixFinalFixation"] : (function () { throw new RuntimeError('Variable "PrixFinalFixation" does not exist.', 113, $this->source); })())) + twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["Echelle"]) || array_key_exists("Echelle", $context) ? $context["Echelle"] : (function () { throw new RuntimeError('Variable "Echelle" does not exist.', 113, $this->source); })()), "echelleEntree", [], "any", false, false, false, 113), "prixEntree", [], "any", false, false, false, 113)) + twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["Echelle"]) || array_key_exists("Echelle", $context) ? $context["Echelle"] : (function () { throw new RuntimeError('Variable "Echelle" does not exist.', 113, $this->source); })()), "echelleSortie", [], "any", false, false, false, 113), "prixSortie", [], "any", false, false, false, 113)) + (isset($context["PrixFinalAccessoire"]) || array_key_exists("PrixFinalAccessoire", $context) ? $context["PrixFinalAccessoire"] : (function () { throw new RuntimeError('Variable "PrixFinalAccessoire" does not exist.', 113, $this->source); })()));
        // line 114
        echo "            </div>

<p style=\"text-align:right\">
<b> Prix Total HT : ";
        // line 117
        echo twig_escape_filter($this->env, (isset($context["PrixFinal"]) || array_key_exists("PrixFinal", $context) ? $context["PrixFinal"] : (function () { throw new RuntimeError('Variable "PrixFinal" does not exist.', 117, $this->source); })()), "html", null, true);
        echo " €
</p>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  279 => 117,  274 => 114,  272 => 113,  268 => 111,  262 => 110,  260 => 109,  255 => 107,  250 => 105,  246 => 104,  242 => 103,  237 => 101,  233 => 99,  228 => 98,  225 => 97,  219 => 96,  217 => 95,  212 => 93,  207 => 91,  203 => 90,  197 => 87,  193 => 85,  188 => 84,  185 => 83,  183 => 82,  177 => 79,  172 => 77,  167 => 75,  162 => 73,  155 => 69,  150 => 67,  145 => 65,  140 => 63,  137 => 62,  131 => 61,  129 => 60,  123 => 57,  118 => 55,  114 => 54,  108 => 51,  104 => 49,  99 => 48,  97 => 47,  66 => 19,  56 => 12,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
<style>
img {
\twidth: 300px;
    height:auto;
}
</style>

<img src=\"{{ absolute_url(asset('build/img/amihauteur.png')) }}\" alt=\"\">

<p style=\"text-align:left\">
SIRET 519 634 232 00010
<span style=\"float:right;\">Devis DEV 20206485</span>
<br>
76000 Rouen
<span style=\"float:right;\">En date du {{ \"now\"|date(\"d/m/Y\") }}</span>
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
                    {% set PrixFinalCoupe = 0 %}
                    {% for Coupe in CoupeEchelle %}
                    <tr>
                                <td class=\"table-light\">
                                {{ Coupe.CoupeEchelleId.Libelle }}
                                </a></td>
                                <td>Une description</td>
                                <td class=\"table-light\">{{ Coupe.Qte}}</td>
                                <td class=\"table-light\">{{ Coupe.CoupeEchelleId.Prix }}</td>
                                <td class=\"table-light\"> 20 % </td>
                                <td class=\"table-light\">{{ Coupe.CoupeEchelleId.Prix * Coupe.Qte}}</td>
                            </tr>
                            <tr>
                             {% set PrixFinalCoupe = PrixFinalCoupe + Coupe.CoupeEchelleId.Prix * Coupe.Qte %}
                            {% endfor %}
                                <td class=\"table-light\">
                                {{ Echelle.echelleEntree.libelleEntree }}
                                </a></td>
                                <td class=\"table-light\">{{ Echelle.echelleEntree.descriptionEntree }}</td>
                                <td class=\"table-light\">1</td>
                                <td class=\"table-light\">{{ Echelle.echelleEntree.prixEntree }}</td>
                                <td class=\"table-light\"> 20 % </td>
                                <td class=\"table-light\">{{ Echelle.echelleEntree.prixEntree }}</td>
                            </tr>
                            <tr>
                                <td class=\"table-light\">
                                {{ Echelle.echelleSortie.libelleSortie }}
                                </a></td>
                                <td class=\"table-light\">{{ Echelle.echelleSortie.descriptionEntree }}</td>
                                <td class=\"table-light\">1</td>
                                <td class=\"table-light\">{{ Echelle.echelleSortie.prixSortie }}</td>
                                <td class=\"table-light\"> 20 % </td>
                                <td class=\"table-light\">{{ Echelle.echelleSortie.prixSortie }}</td>
                            </tr>
                            <tr>
                    {% set PrixFinal = 0 %}
                    {% set PrixFinalFixation = 0 %}
                    {% for Fixation in ListeFixation %}
                            <tr>
                                <td class=\"table-light\">
                                {{ Fixation.Fixation.NomFixation }}
                                </a></td>
                                <td class=\"table-light\">-</td>
                                <td class=\"table-light\">{{ Fixation.Qte }}</td>
                                <td class=\"table-light\">{{ Fixation.Fixation.prixFixation }}</td>
                                <td class=\"table-light\"> 20% </td>
                                <td class=\"table-light\"> {{ Fixation.Fixation.prixFixation * Fixation.Qte }}</td>
                            </tr>
                            {% set PrixFinalFixation = PrixFinalFixation + (Fixation.Fixation.prixFixation * Fixation.Qte) %}
                            {% endfor %}
                    {% set PrixFinalAccessoire = 0 %}
                    {% for Accessoire in ListeAccessoire %}
                            <tr>
                                <td class=\"table-light\">
                                {{ Accessoire.Accessoire.nomAccessoire }}
                                </a></td>
                                <td class=\"table-light\">- {{ Accessoire.Accessoire.refAccessoire }}</td>
                                <td class=\"table-light\">{{ Accessoire.Qte }}</td>
                                <td class=\"table-light\">{{ Accessoire.Accessoire.prixAccessoire }}</td>
                                <td class=\"table-light\"> 20% </td>
                                <td class=\"table-light\"> {{ Accessoire.Accessoire.prixAccessoire * Accessoire.Qte }}</td>
                            </tr>
                            {% set PrixFinalAccessoire = PrixFinalAccessoire + (Accessoire.Accessoire.prixAccessoire * Accessoire.Qte) %}
                            {% endfor %}
                    </tbody>
                </table>
                {% set PrixFinal = PrixFinal + PrixFinalCoupe + PrixFinalFixation + Echelle.echelleEntree.prixEntree + Echelle.echelleSortie.prixSortie + PrixFinalAccessoire %}
            </div>

<p style=\"text-align:right\">
<b> Prix Total HT : {{ PrixFinal }} €
</p>", "test.html.twig", "C:\\wamp64\\www\\Projet\\AmiHauteurApp\\templates\\test.html.twig");
    }
}
