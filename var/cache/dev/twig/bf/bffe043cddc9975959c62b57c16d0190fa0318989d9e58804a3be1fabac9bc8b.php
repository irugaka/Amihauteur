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

/* test3.html.twig */
class __TwigTemplate_39757b1ae17b302ed2ba2a7d1ed312a0a9309a610a6f636be8807aded6ddd186 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "test3.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "test3.html.twig"));

        // line 1
        echo "<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>

<style>

img {

    width: auto;
\theight: 1500px;
    border-width : 3px;
    border-color : black;
    border-style : solid;
    display: block;
    margin-right : auto;
    margin-left : auto;
    margin-top : auto;
    margin-bottom : auto;
}
.contenant {
  position: relative;
  text-align: center;
  color: black;
}

.texte_centrer {
  position: absolute;
  top: 750px;
  left: 300px;
  transform: translate(-50%, -50%);
}

.texte2
{
    position: absolute;
  top: 600px;
  left: 450px;
  transform: translate(-50%, -50%);
}

.texte3
{
    position: absolute;
  top: 1050px;
  left: 760px;
  transform: translate(-50%, -50%);
}

.HauteurMax
{
    font-size:2em;
    position: absolute;
  top: 900px;
  left: 75px;
  transform: translate(-50%, -50%);
}
</style>

<div class=\"contenant\">
    <img src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/EchellePlan.jpg")), "html", null, true);
        echo "\" alt=\"\">
  <div class=\"texte_centrer\">3500</div>
  <div class=\"texte2\">3500</div>
  <div class=\"texte3\">3500</div>
  <div class=\"HauteurMax\">";
        // line 65
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["Echelle"]) || array_key_exists("Echelle", $context) ? $context["Echelle"] : (function () { throw new RuntimeError('Variable "Echelle" does not exist.', 65, $this->source); })()), "echelleHauteur", [], "any", false, false, false, 65), "afranchirHauteur", [], "any", false, false, false, 65), "html", null, true);
        echo "
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "test3.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 65,  105 => 61,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>

<style>

img {

    width: auto;
\theight: 1500px;
    border-width : 3px;
    border-color : black;
    border-style : solid;
    display: block;
    margin-right : auto;
    margin-left : auto;
    margin-top : auto;
    margin-bottom : auto;
}
.contenant {
  position: relative;
  text-align: center;
  color: black;
}

.texte_centrer {
  position: absolute;
  top: 750px;
  left: 300px;
  transform: translate(-50%, -50%);
}

.texte2
{
    position: absolute;
  top: 600px;
  left: 450px;
  transform: translate(-50%, -50%);
}

.texte3
{
    position: absolute;
  top: 1050px;
  left: 760px;
  transform: translate(-50%, -50%);
}

.HauteurMax
{
    font-size:2em;
    position: absolute;
  top: 900px;
  left: 75px;
  transform: translate(-50%, -50%);
}
</style>

<div class=\"contenant\">
    <img src=\"{{ absolute_url(asset('build/img/EchellePlan.jpg')) }}\" alt=\"\">
  <div class=\"texte_centrer\">3500</div>
  <div class=\"texte2\">3500</div>
  <div class=\"texte3\">3500</div>
  <div class=\"HauteurMax\">{{ Echelle.echelleHauteur.afranchirHauteur }}
</div>", "test3.html.twig", "C:\\wamp64\\www\\Projet\\AmiHauteurApp\\templates\\test3.html.twig");
    }
}
