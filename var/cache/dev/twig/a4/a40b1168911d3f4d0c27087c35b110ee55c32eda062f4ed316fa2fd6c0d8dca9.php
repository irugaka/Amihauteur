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
class __TwigTemplate_6b32a102205c332df004e4e106bafe8b78badafb4225aaac6679e92fccaa5f50 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "user", [], "any", false, false, false, 45), "prenom", [], "any", false, false, false, 45), "html", null, true);
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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 10
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Configurateur";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
<link href=\"sticky-footer.css\" rel=\"stylesheet\">

 ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 21
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 22
        echo " <script src=\"https://code.jquery.com/jquery-3.1.1.min.js\" integrity=\"sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=\" crossorigin=\"anonymous\"></script>
 ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 104
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 105
        echo "
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 108
    public function block_progression($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "progression"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "progression"));

        // line 109
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  323 => 109,  313 => 108,  302 => 105,  292 => 104,  281 => 22,  271 => 21,  255 => 13,  245 => 12,  226 => 10,  203 => 110,  201 => 108,  198 => 107,  196 => 104,  192 => 102,  190 => 101,  188 => 100,  185 => 98,  183 => 97,  181 => 96,  131 => 47,  123 => 45,  121 => 44,  117 => 42,  111 => 40,  108 => 39,  102 => 37,  99 => 36,  93 => 34,  90 => 33,  84 => 31,  82 => 30,  78 => 29,  71 => 24,  69 => 21,  66 => 20,  64 => 12,  58 => 10,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("

<!DOCTYPE html>
<html>
<head>
 <meta charset=\"utf-8\">
 <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

 {# Création du bloc \"title\" avec \"Plateforme\" comme contenu par défaut #}
 <title>{% block title %}Configurateur{% endblock %}</title>

 {% block stylesheets %}
<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js\"></script>
<link href=\"sticky-footer.css\" rel=\"stylesheet\">

 {% endblock %}

 {% block javascripts %}
 <script src=\"https://code.jquery.com/jquery-3.1.1.min.js\" integrity=\"sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=\" crossorigin=\"anonymous\"></script>
 {%  endblock %}
</head>
<!-- on définit la couleur de fond -->
<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
<ul class=\"navbar-nav mr-auto\">
<li class=\"nav-item active\">
<img class=\"logo align-top align-middle align-bottom\" src=\"{{ asset('build/img/amihauteur.png') }}\" alt=\"Ami-hauteur logo\" style=\"width=60%; height:auto\">
{% if not is_granted('IS_AUTHENTICATED_REMEMBERED') %}
  <a class=\"navbar-brand\" alt\"\" href=\" {{ path('logout') }} \">Accueil</a>
  {% endif %}
  {% if is_granted('IS_AUTHENTICATED_FULLY') %}
  <a class=\"navbar-brand\" href=\" {{ path('index') }} \">Accueil</a>
  {% endif %}
  {% if is_granted('IS_AUTHENTICATED_FULLY') %}
  <a class=\"navbar-brand\" href=\"{{ path('ajout', { 'verification' : 1 }) }}\">Ajouter</a>
  {% endif %}
  {% if is_granted('ROLE_ADMIN') %}
     <a class=\"navbar-brand\" href=\"{{ path('GestionAdmin') }}\">Gerer le site (Admin)</a>
{% endif %}
  </li>
  </ul>
  {% if is_granted('IS_AUTHENTICATED_FULLY') %}
  <p style=\"font-size:1.2em;\" class=\"navbar-brand my-2 my-sm-0 align-top align-middle align-bottom\">Bienvenue, <span style=\"color:red;\">{{ app.user.prenom }}</span></p> <a class=\"navbar-brand my-2 my-sm-0\" href=\"{{ path('logout') }}\">Deconnexion</a>
  {% endif %}
  <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
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



  {# <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\"> #}
    {# <ul class=\"navbar-nav mr-auto\"> #}
      {# <li class=\"nav-item active\"> #}

      {# </li> #}
    {# </ul> #}
  {# </div> #}
</nav>
        <!-- Création du bloc \"body\" sans contenu par défautn-->
        {% block body %}

        {% endblock %}

    {% block progression %}
    {% endblock %}


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
", "base.html.twig", "C:\\wamp64\\www\\Projet\\Amihauteur-a4a336473f991efbaf24c4a457d0149096e43176\\templates\\base.html.twig");
    }
}
