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

/* SortieAjout.html.twig */
class __TwigTemplate_9bf411abf88ce205d52de8938a42fa4d766d32b7ffb3ce5720f33382142544b1 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "SortieAjout.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Choisir une Sortie";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "

<div class=\"container\">
    
        <div class=\"w-75 mx-auto\">
        <div><h1>Choix de la sortie</h1></div>
    ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["SortieAjoutForm"] ?? null), 'form_start');
        echo "
      ";
        // line 14
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["SortieAjoutForm"] ?? null), "echelleSortie", [], "any", false, false, false, 14));
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
        echo "
        <a styke=\"color:black\" class=\"text-dark btn bg-warning\" href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">Precedent</a>
        <button type=\"submit\" class=\"btn bg-warning\">Suivant</button>
    ";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["SortieAjoutForm"] ?? null), 'form_end');
        echo "
    
        </div>
    </div>
<div>
<br>
</div>
<br>
";
    }

    // line 38
    public function block_progression($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 39
        echo twig_include($this->env, $context, "ProgressionBar.html.twig");
        echo "
";
    }

    public function getTemplateName()
    {
        return "SortieAjout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 39,  115 => 38,  102 => 28,  97 => 26,  94 => 25,  91 => 23,  85 => 22,  80 => 18,  78 => 16,  76 => 15,  71 => 14,  67 => 12,  59 => 6,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "SortieAjout.html.twig", "C:\\wamp64\\www\\Projet\\AmiHauteurApp\\templates\\SortieAjout.html.twig");
    }
}
