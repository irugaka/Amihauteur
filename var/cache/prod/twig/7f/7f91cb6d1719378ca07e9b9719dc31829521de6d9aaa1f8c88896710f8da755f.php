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

/* base.html.twig */
class __TwigTemplate_7b4a97cf7deb2c4c4bda2a6a1552920ea71de05cf74c556d57479568fbb2ecde extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
            'progression' => [$this, 'block_progression'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "

<!DOCTYPE html>
<html>
<head>
 <meta charset=\"utf-8\">
 <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

 ";
        // line 10
        echo " <title>";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

 ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 20
        echo "
 ";
        // line 21
        $this->displayBlock('javascripts', $context, $blocks);
        // line 24
        echo "</head>
<!-- on définit la couleur de fond -->
<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
<ul class=\"navbar-nav mr-auto\">
<li class=\"nav-item active\">
<img class=\"logo align-top align-middle align-bottom\" src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/amihauteur.png"), "html", null, true);
        echo "\" alt=\"Ami-hauteur logo\" style=\"width=60%; height:auto\">
";
        // line 30
        if ( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 31
            echo "  <a class=\"navbar-brand\" alt\"\" href=\" ";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo " \">Accueil</a>
  ";
        }
        // line 33
        echo "  ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 34
            echo "  <a class=\"navbar-brand\" href=\" ";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
            echo " \">Accueil</a>
  ";
        }
        // line 36
        echo "  ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 37
            echo "  <a class=\"navbar-brand\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajout", ["verification" => 1]);
            echo "\">Ajouter</a>
  ";
        }
        // line 39
        echo "  ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 40
            echo "     <a class=\"navbar-brand\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("GestionAdmin");
            echo "\">Gerer le site (Admin)</a>
";
        }
        // line 42
        echo "  </li>
  </ul>
  ";
        // line 44
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 45
            echo "  <p style=\"font-size:1.2em;\" class=\"navbar-brand my-2 my-sm-0 align-top align-middle align-bottom\">Bienvenue, <span style=\"color:red;\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 45), "prenom", [], "any", false, false, false, 45), "html", null, true);
            echo "</span></p> <a class=\"navbar-brand my-2 my-sm-0\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "\">Deconnexion</a>
  ";
        }
        // line 47
        echo "  <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\"></span>
  </button>

  <style>

body
{
  margin-bottom:100px;
}

.btn.bg-warning {
  background-color: #ff7f18 !important;
  color: black;
}
.text-dark,
.btn.bg-warning:active,
.btn.bg-warning:hover,
.btn.bg-warning:focus {
  background-color: #FF5100 !important;
}

.navbar
{
  background-color: #e3e3e3 !important;
  margin-bottom:20px;
}

.logo
{
  
}

footer
{
  background-color:#e3e3e3;
}

.navbar-brand
{
  font-size:1.5em;
}


  </style>



  ";
        // line 96
        echo "    ";
        // line 97
        echo "      ";
        // line 98
        echo "
      ";
        // line 100
        echo "    ";
        // line 101
        echo "  ";
        // line 102
        echo "</nav>
        <!-- Création du bloc \"body\" sans contenu par défautn-->
        ";
        // line 104
        $this->displayBlock('body', $context, $blocks);
        // line 107
        echo "
    ";
        // line 108
        $this->displayBlock('progression', $context, $blocks);
        // line 110
        echo "

<footer id=\"footer\" class=\"footer-1 fixed-bottom\">
<div class=\"footer-copyright\">
<div class=\"container\">
<div class=\"row\">
<div class=\"col-md-12 text-center\">
<p>Site developpé par Ami-Hauteur</p>
</div>
</div>
</div>
</div>
</footer>
";
    }

    // line 10
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Configurateur";
    }

    // line 12
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
<link href=\"sticky-footer.css\" rel=\"stylesheet\">

 ";
    }

    // line 21
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo " <script src=\"https://code.jquery.com/jquery-3.1.1.min.js\" integrity=\"sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=\" crossorigin=\"anonymous\"></script>
 ";
    }

    // line 104
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 105
        echo "
        ";
    }

    // line 108
    public function block_progression($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 109
        echo "    ";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 109,  253 => 108,  248 => 105,  244 => 104,  239 => 22,  235 => 21,  225 => 13,  221 => 12,  214 => 10,  197 => 110,  195 => 108,  192 => 107,  190 => 104,  186 => 102,  184 => 101,  182 => 100,  179 => 98,  177 => 97,  175 => 96,  125 => 47,  117 => 45,  115 => 44,  111 => 42,  105 => 40,  102 => 39,  96 => 37,  93 => 36,  87 => 34,  84 => 33,  78 => 31,  76 => 30,  72 => 29,  65 => 24,  63 => 21,  60 => 20,  58 => 12,  52 => 10,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "C:\\wamp64\\www\\Projet\\AmiHauteurApp\\templates\\base.html.twig");
    }
}
