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
class __TwigTemplate_17072cfa2da9c8bee75e6274cc98aba4d4daadd402cdfac46235e396a02ed628 extends Template
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
        // line 1
        echo "

";
        // line 3
        $this->displayBlock('bouton', $context, $blocks);
    }

    public function block_bouton($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
    <div class=\"form-group\">
        ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
    </div>

    <div class=\"form-group\">
    <div>
            ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 46), 'label', ["label" => "Hauteur"]);
        echo "
            ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 47), 'widget');
        echo "
    </div>
    <div>
            ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 50), 'label', ["label" => "Autre Longueur"]);
        echo "
            ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "price", [], "any", false, false, false, 51), 'widget');
        echo "
        </div>
    </div>
";
        // line 54
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
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
    }

    public function getTemplateName()
    {
        return "Formulaire.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  119 => 54,  113 => 51,  109 => 50,  103 => 47,  99 => 46,  91 => 41,  86 => 39,  49 => 4,  42 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Formulaire.html.twig", "C:\\wamp64\\www\\Projet\\AmiHauteurApp\\templates\\Formulaire.html.twig");
    }
}
