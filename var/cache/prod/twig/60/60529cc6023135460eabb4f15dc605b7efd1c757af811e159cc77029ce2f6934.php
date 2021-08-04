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

/* Admin/GestionAdminModifierEntree.html.twig */
class __TwigTemplate_a4e2029a16e98ba60184aaf071648167e55deb19be734cc2f753bdc6ca566cb2 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "Admin/GestionAdminModifierEntree.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        if ((0 === twig_compare(($context["id"] ?? null), 0))) {
            // line 5
            echo "Ajouter une Entree
";
        } else {
            // line 7
            echo "Modifier une Entree
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
            echo "Ajouter une Entree";
        } else {
            echo " Modifier une Entree";
        }
        echo "</h1></div>
    ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["AjoutEntreeForm"] ?? null), 'form_start');
        echo "
        ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["AjoutEntreeForm"] ?? null), "libelleEntree", [], "any", false, false, false, 17), 'row');
        echo "
        ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["AjoutEntreeForm"] ?? null), "referenceEntree", [], "any", false, false, false, 18), 'row');
        echo "
        ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["AjoutEntreeForm"] ?? null), "prixEntree", [], "any", false, false, false, 19), 'row');
        echo "
        ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["AjoutEntreeForm"] ?? null), "descriptionEntree", [], "any", false, false, false, 20), 'row');
        echo "
        ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["AjoutEntreeForm"] ?? null), "Commercialise", [], "any", false, false, false, 21), 'row');
        echo "
        <button class=\"btn bg-warning\">Valider</button>
    ";
        // line 23
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["AjoutEntreeForm"] ?? null), 'form_end');
        echo "
    
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "Admin/GestionAdminModifierEntree.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 23,  100 => 21,  96 => 20,  92 => 19,  88 => 18,  84 => 17,  80 => 16,  72 => 15,  67 => 12,  63 => 11,  57 => 7,  53 => 5,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Admin/GestionAdminModifierEntree.html.twig", "C:\\wamp64\\www\\Projet\\AmiHauteurApp\\templates\\Admin\\GestionAdminModifierEntree.html.twig");
    }
}
