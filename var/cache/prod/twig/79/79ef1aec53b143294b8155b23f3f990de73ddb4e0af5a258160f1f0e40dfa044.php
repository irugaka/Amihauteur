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

/* ModifierConfig.html copy.twig */
class __TwigTemplate_2dd1f326c0458854c81463f58604890c99308d70b90184d8bdbe17870922b0ff extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "ModifierConfig.html copy.twig", 1);
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["ConfigAjoutForm"] ?? null), "NomConfig", [], "any", false, false, false, 13), 'row', ["label" => "Reference Chantier (Pour le Client)"]);
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
        // line 23
        if ( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 24
            echo "        ";
            twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ConfigAjoutForm"] ?? null), "RemiseConfig", [], "any", false, false, false, 24), "setRendered", [], "method", false, false, false, 24);
            // line 25
            echo "        ";
        } else {
            // line 26
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["ConfigAjoutForm"] ?? null), "RemiseConfig", [], "any", false, false, false, 26), 'row');
            echo "
        ";
        }
        // line 28
        echo "

        
        <button type=\"submit\" class=\"btn bg-warning\">Suivant</button>
    ";
        // line 32
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["ConfigAjoutForm"] ?? null), 'form_end');
        echo "
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "ModifierConfig.html copy.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 32,  100 => 28,  94 => 26,  91 => 25,  88 => 24,  86 => 23,  82 => 21,  80 => 19,  77 => 18,  75 => 16,  72 => 15,  70 => 13,  66 => 12,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ModifierConfig.html copy.twig", "C:\\wamp64\\www\\Projet\\AmiHauteurApp\\templates\\ModifierConfig.html copy.twig");
    }
}
