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
class __TwigTemplate_0477f5dcc8c29b97979d56ec9ecdd021336523c8ca7a3820e4f632151bc92e84 extends Template
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
            'body' => [$this, 'block_body'],
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
        // line 18
        echo "</head>
<!-- on définit la couleur de fond -->
<body class=\"background\">
<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
<ul class=\"navbar-nav mr-auto\">
<li class=\"nav-item active\">
<img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("build/img/amihauteur.png"), "html", null, true);
        echo "\" alt=\"Ami-hauteur logo\" width=8%>
  ";
        // line 25
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 26
            echo "  <a class=\"navbar-brand\" href=\" ";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
            echo " \">Accueil</a>
  ";
        }
        // line 28
        echo "  ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 29
            echo "  <a class=\"navbar-brand\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajout");
            echo "\">Ajouter</a>
  ";
        }
        // line 31
        echo "  ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 32
            echo "  <a class=\"navbar-brand\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "\">Deconnexion</a>
  ";
        }
        // line 34
        echo "  </li>
  </ul>
  <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\"></span>
  </button>

  ";
        // line 41
        echo "    ";
        // line 42
        echo "      ";
        // line 43
        echo "
      ";
        // line 45
        echo "    ";
        // line 46
        echo "  ";
        // line 47
        echo "</nav>
        <!-- Création du bloc \"body\" sans contenu par défautn-->
        ";
        // line 49
        $this->displayBlock('body', $context, $blocks);
        // line 52
        echo "        
    <div>
    <footer>
    <center><p>Site développé par Ami-Hauteur</p></center>
    </footer>


</body>
</html>";
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
<script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
 ";
    }

    // line 49
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 50
        echo "
        ";
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
        return array (  156 => 50,  152 => 49,  144 => 13,  140 => 12,  133 => 10,  121 => 52,  119 => 49,  115 => 47,  113 => 46,  111 => 45,  108 => 43,  106 => 42,  104 => 41,  96 => 34,  90 => 32,  87 => 31,  81 => 29,  78 => 28,  72 => 26,  70 => 25,  66 => 24,  58 => 18,  56 => 12,  50 => 10,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "C:\\wamp64\\www\\Projet\\AmiHauteurApp\\templates\\base.html.twig");
    }
}
