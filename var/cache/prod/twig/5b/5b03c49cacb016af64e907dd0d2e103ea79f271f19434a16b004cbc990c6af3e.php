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

/* Admin/GestionAdminModifierTypeEchelle.html.twig */
class __TwigTemplate_8d9518112dfd386ea65ce5dd1bd036b37ef58a042c4053e0340a1684cfb4f058 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "Admin/GestionAdminModifierTypeEchelle.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        if ((0 === twig_compare(($context["id"] ?? null), 0))) {
            // line 5
            echo "Ajouter un accessoire
";
        } else {
            // line 7
            echo "Modifier un Accessoire
";
        }
    }

    // line 11
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "<div class=\"container\">
    
        <div class=\"w-75 mx-auto\">
        <div><h1>";
        // line 15
        if ((0 === twig_compare(($context["id"] ?? null), 0))) {
            echo "Ajouter un Type d'Echelle";
        } else {
            echo " Modifier un type d'Echelle";
        }
        echo "</h1></div>
    ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["AjoutTypeEchelleForm"] ?? null), 'form_start');
        echo "
        ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["AjoutTypeEchelleForm"] ?? null), "libelleTypeEchelle", [], "any", false, false, false, 17), 'row');
        echo "
        ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["AjoutTypeEchelleForm"] ?? null), "prix", [], "any", false, false, false, 18), 'row');
        echo "
        ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["AjoutTypeEchelleForm"] ?? null), "Commercialise", [], "any", false, false, false, 19), 'row');
        echo "
        <button class=\"btn bg-warning\">Valider</button>
    ";
        // line 21
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["AjoutTypeEchelleForm"] ?? null), 'form_end');
        echo "
    
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "Admin/GestionAdminModifierTypeEchelle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 21,  92 => 19,  88 => 18,  84 => 17,  80 => 16,  72 => 15,  67 => 12,  63 => 11,  57 => 7,  53 => 5,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Admin/GestionAdminModifierTypeEchelle.html.twig", "C:\\wamp64\\www\\Projet\\AmiHauteurApp\\templates\\Admin\\GestionAdminModifierTypeEchelle.html.twig");
    }
}
