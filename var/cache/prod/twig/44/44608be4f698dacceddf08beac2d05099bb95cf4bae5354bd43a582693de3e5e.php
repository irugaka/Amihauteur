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

/* ConfigAjout.html.twig */
class __TwigTemplate_1d09452a68223fb3263cf012683cf90c20ccfca2e0c5bb4bba81bdb72a8fc221 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "ConfigAjout.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Ajouter une configuration";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
    
    <div class=\"container\">
    
        <div class=\"w-75 mx-auto\">
        <div><h1>Ajout d'une configuration</h1></div>
    ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["ConfigAjoutForm"] ?? null), 'form_start');
        echo "
        ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["ConfigAjoutForm"] ?? null), "NomConfig", [], "any", false, false, false, 13), 'row', ["label" => "Nom de la configuration"]);
        // line 15
        echo "
        ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["ConfigAjoutForm"] ?? null), "ReferenceConfig", [], "any", false, false, false, 16), 'row', ["label" => "Reference de la configuration"]);
        // line 18
        echo "
        ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["ConfigAjoutForm"] ?? null), "DescriptionConfig", [], "any", false, false, false, 19), 'row', ["label" => "Description"]);
        // line 21
        echo "
        ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["ConfigAjoutForm"] ?? null), "RemiseConfig", [], "any", false, false, false, 22), 'row', ["label" => "Remise"]);
        // line 24
        echo "

        <button type=\"submit\" class=\"btn bg-warning\">Suivant</button>
    ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["ConfigAjoutForm"] ?? null), 'form_end');
        echo "
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "ConfigAjout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 27,  87 => 24,  85 => 22,  82 => 21,  80 => 19,  77 => 18,  75 => 16,  72 => 15,  70 => 13,  66 => 12,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ConfigAjout.html.twig", "C:\\wamp64\\www\\Projet\\AmiHauteurApp\\templates\\ConfigAjout.html.twig");
    }
}
