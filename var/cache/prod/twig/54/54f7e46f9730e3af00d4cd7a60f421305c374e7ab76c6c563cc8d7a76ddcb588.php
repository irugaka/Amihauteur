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

/* ChangementVoleeAjout.html.twig */
class __TwigTemplate_d753f1bbdba31451ed73a6804d54e2b0de1c789b41b0ff5f22eac4d75f734a4e extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "ChangementVoleeAjout.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Choisir d(u/es) changement(s) de Volee";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "

<div class=\"container\">
    
        <div class=\"w-75 mx-auto\">
        <div><h1>Choix d(u/es) changement(s) de Volee</h1></div>
    ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["ChangementVoleeAjoutForm"] ?? null), 'form_start');
        echo "
        ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["ChangementVoleeAjoutForm"] ?? null), "mesureChangement", [], "any", false, false, false, 13), 'row');
        echo "

        <a styke=\"color:black\" class=\"text-dark btn bg-warning\" href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">Precedent</a>
        <button type=\"submit\" class=\"btn bg-warning\">Suivant</button>
    ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["ChangementVoleeAjoutForm"] ?? null), 'form_end');
        echo "
    
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "ChangementVoleeAjout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 17,  75 => 15,  70 => 13,  66 => 12,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ChangementVoleeAjout.html.twig", "C:\\wamp64\\www\\Projet\\AmiHauteurApp\\templates\\ChangementVoleeAjout.html.twig");
    }
}
