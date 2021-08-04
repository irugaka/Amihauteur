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
class __TwigTemplate_92dc15873c932631fa80253cd3f688bea274fa1c356674502e55a3206bcfc059 extends Template
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
            'progression' => [$this, 'block_progression'],
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
<div>
<br>
</div>
<br>
";
    }

    // line 41
    public function block_progression($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 42
        echo twig_include($this->env, $context, "ProgressionBar.html.twig");
        echo "
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
        return array (  123 => 42,  119 => 41,  107 => 32,  101 => 28,  95 => 26,  92 => 25,  89 => 24,  87 => 23,  83 => 21,  81 => 19,  78 => 18,  76 => 16,  73 => 15,  71 => 13,  67 => 12,  59 => 6,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ConfigAjout.html.twig", "C:\\wamp64\\www\\Projet\\AmiHauteurApp\\templates\\ConfigAjout.html.twig");
    }
}
