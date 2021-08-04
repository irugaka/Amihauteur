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

/* Admin/GestionAdminModifierAccessoire.html.twig */
class __TwigTemplate_87383ea934b943efc149069abf8d167f505f92ef460b8a84bbe8187119f216c3 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/GestionAdminModifierAccessoire.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/GestionAdminModifierAccessoire.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Admin/GestionAdminModifierAccessoire.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Modifier un accessoire";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"container\">
    
        <div class=\"w-75 mx-auto\">
        <div><h1>Modifier l'accessoire</h1></div>
    ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["AjoutAccessoireForm"]) || array_key_exists("AjoutAccessoireForm", $context) ? $context["AjoutAccessoireForm"] : (function () { throw new RuntimeError('Variable "AjoutAccessoireForm" does not exist.', 10, $this->source); })()), 'form_start');
        echo "
        ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["AjoutAccessoireForm"]) || array_key_exists("AjoutAccessoireForm", $context) ? $context["AjoutAccessoireForm"] : (function () { throw new RuntimeError('Variable "AjoutAccessoireForm" does not exist.', 11, $this->source); })()), "nomAccessoire", [], "any", false, false, false, 11), 'row');
        echo "
        ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["AjoutAccessoireForm"]) || array_key_exists("AjoutAccessoireForm", $context) ? $context["AjoutAccessoireForm"] : (function () { throw new RuntimeError('Variable "AjoutAccessoireForm" does not exist.', 12, $this->source); })()), "refAccessoire", [], "any", false, false, false, 12), 'row');
        echo "
        ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["AjoutAccessoireForm"]) || array_key_exists("AjoutAccessoireForm", $context) ? $context["AjoutAccessoireForm"] : (function () { throw new RuntimeError('Variable "AjoutAccessoireForm" does not exist.', 13, $this->source); })()), "prixAccessoire", [], "any", false, false, false, 13), 'row');
        echo "
        ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["AjoutAccessoireForm"]) || array_key_exists("AjoutAccessoireForm", $context) ? $context["AjoutAccessoireForm"] : (function () { throw new RuntimeError('Variable "AjoutAccessoireForm" does not exist.', 14, $this->source); })()), "Commercialise", [], "any", false, false, false, 14), 'row');
        echo "
        <a styke=\"color:black\" class=\"text-dark btn bg-warning\" href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">Precedent</a>
        <button class=\"btn bg-warning\">Valider</button>
    ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["AjoutAccessoireForm"]) || array_key_exists("AjoutAccessoireForm", $context) ? $context["AjoutAccessoireForm"] : (function () { throw new RuntimeError('Variable "AjoutAccessoireForm" does not exist.', 17, $this->source); })()), 'form_end');
        echo "
    
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Admin/GestionAdminModifierAccessoire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 17,  114 => 15,  110 => 14,  106 => 13,  102 => 12,  98 => 11,  94 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Modifier un accessoire{% endblock %}

{% block body %}
<div class=\"container\">
    
        <div class=\"w-75 mx-auto\">
        <div><h1>Modifier l'accessoire</h1></div>
    {{ form_start(AjoutAccessoireForm) }}
        {{ form_row(AjoutAccessoireForm.nomAccessoire) }}
        {{ form_row(AjoutAccessoireForm.refAccessoire) }}
        {{ form_row(AjoutAccessoireForm.prixAccessoire) }}
        {{ form_row(AjoutAccessoireForm.Commercialise) }}
        <a styke=\"color:black\" class=\"text-dark btn bg-warning\" href=\"{{ path('index') }}\">Precedent</a>
        <button class=\"btn bg-warning\">Valider</button>
    {{ form_end(AjoutAccessoireForm) }}
    
        </div>
    </div>
{% endblock %}", "Admin/GestionAdminModifierAccessoire.html.twig", "C:\\wamp64\\www\\Projet\\AmiHauteurApp\\templates\\Admin\\GestionAdminModifierAccessoire.html.twig");
    }
}
