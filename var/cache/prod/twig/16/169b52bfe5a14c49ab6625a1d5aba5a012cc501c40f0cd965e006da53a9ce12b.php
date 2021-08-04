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

/* EntreeAjout.html.twig */
class __TwigTemplate_bd2092b001bcb88961ee7c753f56a75baf97bb01cb2f178f4913ebc2ec914900 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "EntreeAjout.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Choisir une Entree";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "

<div class=\"container\">
    
        <div class=\"w-75 mx-auto\">
        <div><h1>Choix de l'entrée</h1></div>
    ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["EntreeAjoutForm"] ?? null), 'form_start');
        echo "
    ";
        // line 14
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["EntreeAjoutForm"] ?? null), "echelleEntree", [], "any", false, false, false, 14));
        foreach ($context['_seq'] as $context["key"] => $context["type"]) {
            // line 15
            echo "    ";
            // line 16
            echo "    ";
            // line 18
            echo "      ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["type"], 'widget');
            echo "
      ";
            // line 22
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "   
    ";
        // line 25
        echo "        <a styke=\"color:black\" class=\"text-dark btn bg-warning\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">Precedent</a>
        <button type=\"submit\" class=\"btn bg-warning\">Suivant</button>
    ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["EntreeAjoutForm"] ?? null), 'form_end');
        echo "
    
        </div>
    </div>
<div>
<br>
</div>
<br>
";
    }

    // line 37
    public function block_progression($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 38
        echo twig_include($this->env, $context, "ProgressionBar.html.twig");
        echo "
";
    }

    public function getTemplateName()
    {
        return "EntreeAjout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 38,  113 => 37,  100 => 27,  94 => 25,  91 => 23,  85 => 22,  80 => 18,  78 => 16,  76 => 15,  71 => 14,  67 => 12,  59 => 6,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "EntreeAjout.html.twig", "C:\\wamp64\\www\\Projet\\AmiHauteurApp\\templates\\EntreeAjout.html.twig");
    }
}
