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

/* HauteurAjout.html.twig */
class __TwigTemplate_526b4762e14bf2cd4c7316e9b8a9c9387f9cf56821308b5325426e2bc7774b25 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "HauteurAjout.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Choisir une Hauteur";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "

<div class=\"container\">
    
        <div class=\"w-75 mx-auto\">
        <div><h1>Choix de la hauteur</h1></div>
    ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["HauteurAjoutForm"] ?? null), 'form_start');
        echo "
        ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["HauteurAjoutForm"] ?? null), "AFranchirHauteur", [], "any", false, false, false, 13), 'row', ["label" => "Hauteur souhaitée"]);
        // line 15
        echo "

        <a styke=\"color:black\" class=\"text-dark btn bg-warning\" href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">Precedent</a>
        <button type=\"submit\" class=\"btn bg-warning\">Suivant</button>
    ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["HauteurAjoutForm"] ?? null), 'form_end');
        echo "
    
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "HauteurAjout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 19,  76 => 17,  72 => 15,  70 => 13,  66 => 12,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "HauteurAjout.html.twig", "C:\\wamp64\\www\\Projet\\AmiHauteurApp\\templates\\HauteurAjout.html.twig");
    }
}
