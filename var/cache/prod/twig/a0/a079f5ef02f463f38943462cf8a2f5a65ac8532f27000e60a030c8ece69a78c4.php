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

/* AjoutEchelle.html.twig */
class __TwigTemplate_52b088fdf885a3aab83fbe1d71a79ac7409033c901e68374df61819f82d1f0df extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "AjoutEchelle.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Choisir une echelle";
    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "
<style>
</style>
<div class=\"container\">
        <div class=\"w-75 mx-auto\">
        <div><h1>Choix de L'echelle</h1></div>
    ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["EchelleAjoutForm"] ?? null), 'form_start');
        echo "
    ";
        // line 13
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["EchelleAjoutForm"] ?? null), "Echelle_TypeEchelle", [], "any", false, false, false, 13));
        foreach ($context['_seq'] as $context["key"] => $context["type"]) {
            // line 14
            echo "    ";
            // line 15
            echo "   ";
            // line 17
            echo "      ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["type"], 'widget');
            echo "
    ";
            // line 21
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "    ";
        // line 23
        echo "    <br>
    <a styke=\"color:black\" class=\"btn bg-warning\" href=\"#\">Precedent</a>
    <button class=\"btn bg-warning\">Suivant</button>
    ";
        // line 26
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["EchelleAjoutForm"] ?? null), 'form_end');
        echo "
        </div>
    </div>

    <div>
<br>
</div>
<br>
";
    }

    // line 36
    public function block_progression($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 37
        echo twig_include($this->env, $context, "ProgressionBar.html.twig");
        echo "
<br><br>
<br><br>
";
    }

    public function getTemplateName()
    {
        return "AjoutEchelle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 37,  111 => 36,  98 => 26,  93 => 23,  91 => 22,  85 => 21,  80 => 17,  78 => 15,  76 => 14,  71 => 13,  67 => 11,  59 => 5,  55 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "AjoutEchelle.html.twig", "C:\\wamp64\\www\\Projet\\AmiHauteurApp\\templates\\AjoutEchelle.html.twig");
    }
}
