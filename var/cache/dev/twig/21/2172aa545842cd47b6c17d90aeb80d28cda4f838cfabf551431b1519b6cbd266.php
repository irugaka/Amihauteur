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

/* Formulaire.html.twig */
class __TwigTemplate_81608f3ea49b0cddb0f48ac9f59add7b699ee4cf27031ae57a50929a178ad934 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'bouton' => [$this, 'block_bouton'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Formulaire.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Formulaire.html.twig"));

        // line 1
        echo "

";
        // line 3
        $this->displayBlock('bouton', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_bouton($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bouton"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bouton"));

        // line 4
        echo "<!doctype html>
<html lang=\"en\">
<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <title>jQuery UI Tabs - Default functionality</title>
  <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
  <link rel=\"stylesheet\" href=\"/resources/demos/style.css\">
  <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
  <script src=\"https://code.jquery.com/jquery-1.12.4.js\"></script>
  <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
  <script>
  \$( function() {
    \$( \"#tabs\" ).tabs();
  } );
  </script>
</head>
<body>




 <div id=\"tabs\" classe=\"d-flex justify-content-center\">
  <ul>
    <li><a href=\"#tabs-1\">Normes</a></li>
    <li><a href=\"#tabs-2\">Hauteur Echelle</a></li>
    <li><a href=\"#tabs-3\">Sortie Echelle</a></li>
    <li><a href=\"#tabs-4\">Sortie Echelle</a></li>
    <li><a href=\"#tabs-5\">Sortie Echelle</a></li>
    <li><a href=\"#tabs-6\">Sortie Echelle</a></li>
    <li><a href=\"#tabs-7\">Sortie Echelle</a></li>
  </ul>


<div class=\"p-2\" id=\"tabs-1\">
    ";
        // line 39
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), 'form_start');
        echo "
    <div class=\"form-group\">
        ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), 'errors');
        echo "
    </div>

    <div class=\"form-group\">
    <div>
            ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "name", [], "any", false, false, false, 46), 'label', ["label" => "Hauteur"]);
        echo "
            ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "name", [], "any", false, false, false, 47), 'widget');
        echo "
    </div>
    <div>
            ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "name", [], "any", false, false, false, 50), 'label', ["label" => "Autre Longueur"]);
        echo "
            ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "price", [], "any", false, false, false, 51), 'widget');
        echo "
        </div>
    </div>
";
        // line 54
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), 'form_end');
        echo "
</div>



<div id=\"tabs-2\">
    <p>Onglet de test des Echelles</p>
</div>
<div id=\"tabs-3\">
    <p>Onglet de test des Sorties</p>
</div>
<div class=\"p-2\" id=\"tabs-4\">
<p>Une autre option 1</p>
</div>
<div class=\"p-2\" id=\"tabs-5\">
<p>Une autre option 2</p>
</div>
<div class=\"p-2\" id=\"tabs-6\">
<p>Une autre option 3</p>
</div>
<div class=\"p-2\" id=\"tabs-7\">
<p>Une autre option 4</p>
</div>
</div>
 
</body>
</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Formulaire.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  137 => 54,  131 => 51,  127 => 50,  121 => 47,  117 => 46,  109 => 41,  104 => 39,  67 => 4,  48 => 3,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("

{% block bouton %}
<!doctype html>
<html lang=\"en\">
<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <title>jQuery UI Tabs - Default functionality</title>
  <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
  <link rel=\"stylesheet\" href=\"/resources/demos/style.css\">
  <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
  <script src=\"https://code.jquery.com/jquery-1.12.4.js\"></script>
  <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
  <script>
  \$( function() {
    \$( \"#tabs\" ).tabs();
  } );
  </script>
</head>
<body>




 <div id=\"tabs\" classe=\"d-flex justify-content-center\">
  <ul>
    <li><a href=\"#tabs-1\">Normes</a></li>
    <li><a href=\"#tabs-2\">Hauteur Echelle</a></li>
    <li><a href=\"#tabs-3\">Sortie Echelle</a></li>
    <li><a href=\"#tabs-4\">Sortie Echelle</a></li>
    <li><a href=\"#tabs-5\">Sortie Echelle</a></li>
    <li><a href=\"#tabs-6\">Sortie Echelle</a></li>
    <li><a href=\"#tabs-7\">Sortie Echelle</a></li>
  </ul>


<div class=\"p-2\" id=\"tabs-1\">
    {{ form_start(form) }}
    <div class=\"form-group\">
        {{ form_errors(form) }}
    </div>

    <div class=\"form-group\">
    <div>
            {{ form_label(form.name, 'Hauteur') }}
            {{ form_widget(form.name) }}
    </div>
    <div>
            {{ form_label(form.name, 'Autre Longueur') }}
            {{ form_widget(form.price) }}
        </div>
    </div>
{{ form_end(form) }}
</div>



<div id=\"tabs-2\">
    <p>Onglet de test des Echelles</p>
</div>
<div id=\"tabs-3\">
    <p>Onglet de test des Sorties</p>
</div>
<div class=\"p-2\" id=\"tabs-4\">
<p>Une autre option 1</p>
</div>
<div class=\"p-2\" id=\"tabs-5\">
<p>Une autre option 2</p>
</div>
<div class=\"p-2\" id=\"tabs-6\">
<p>Une autre option 3</p>
</div>
<div class=\"p-2\" id=\"tabs-7\">
<p>Une autre option 4</p>
</div>
</div>
 
</body>
</html>
{% endblock %}", "Formulaire.html.twig", "C:\\wamp64\\www\\Projet\\AmiHauteurApp\\templates\\Formulaire.html.twig");
    }
}
