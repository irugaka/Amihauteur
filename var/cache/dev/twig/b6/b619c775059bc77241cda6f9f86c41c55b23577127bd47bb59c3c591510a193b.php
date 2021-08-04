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
class __TwigTemplate_3878c98e77848a2fe1620d3bc86854c534c9b7611dbaee82072510238a48d5a8 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/GestionAdminModifierEntree.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/GestionAdminModifierEntree.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Admin/GestionAdminModifierEntree.html.twig", 1);
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

        // line 4
        if ((0 === twig_compare((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 4, $this->source); })()), 0))) {
            // line 5
            echo "Ajouter une Entree
";
        } else {
            // line 7
            echo "Modifier une Entree
";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "<div class=\"container\">
    
        <div class=\"w-75 mx-auto\">
        <div><h1>";
        // line 15
        if ((0 === twig_compare((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 15, $this->source); })()), 0))) {
            echo "Ajouter une Entree";
        } else {
            echo " Modifier une Entree";
        }
        echo "</h1></div>
    ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["AjoutEntreeForm"]) || array_key_exists("AjoutEntreeForm", $context) ? $context["AjoutEntreeForm"] : (function () { throw new RuntimeError('Variable "AjoutEntreeForm" does not exist.', 16, $this->source); })()), 'form_start');
        echo "
        ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["AjoutEntreeForm"]) || array_key_exists("AjoutEntreeForm", $context) ? $context["AjoutEntreeForm"] : (function () { throw new RuntimeError('Variable "AjoutEntreeForm" does not exist.', 17, $this->source); })()), "libelleEntree", [], "any", false, false, false, 17), 'row');
        echo "
        ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["AjoutEntreeForm"]) || array_key_exists("AjoutEntreeForm", $context) ? $context["AjoutEntreeForm"] : (function () { throw new RuntimeError('Variable "AjoutEntreeForm" does not exist.', 18, $this->source); })()), "referenceEntree", [], "any", false, false, false, 18), 'row');
        echo "
        ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["AjoutEntreeForm"]) || array_key_exists("AjoutEntreeForm", $context) ? $context["AjoutEntreeForm"] : (function () { throw new RuntimeError('Variable "AjoutEntreeForm" does not exist.', 19, $this->source); })()), "prixEntree", [], "any", false, false, false, 19), 'row');
        echo "
        ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["AjoutEntreeForm"]) || array_key_exists("AjoutEntreeForm", $context) ? $context["AjoutEntreeForm"] : (function () { throw new RuntimeError('Variable "AjoutEntreeForm" does not exist.', 20, $this->source); })()), "descriptionEntree", [], "any", false, false, false, 20), 'row');
        echo "
        ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["AjoutEntreeForm"]) || array_key_exists("AjoutEntreeForm", $context) ? $context["AjoutEntreeForm"] : (function () { throw new RuntimeError('Variable "AjoutEntreeForm" does not exist.', 21, $this->source); })()), "Commercialise", [], "any", false, false, false, 21), 'row');
        echo "
        <button class=\"btn bg-warning\">Valider</button>
    ";
        // line 23
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["AjoutEntreeForm"]) || array_key_exists("AjoutEntreeForm", $context) ? $context["AjoutEntreeForm"] : (function () { throw new RuntimeError('Variable "AjoutEntreeForm" does not exist.', 23, $this->source); })()), 'form_end');
        echo "
    
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  135 => 23,  130 => 21,  126 => 20,  122 => 19,  118 => 18,  114 => 17,  110 => 16,  102 => 15,  97 => 12,  87 => 11,  75 => 7,  71 => 5,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
{% if id == 0 %}
Ajouter une Entree
{% else %}
Modifier une Entree
{% endif %}
{% endblock %}

{% block body %}
<div class=\"container\">
    
        <div class=\"w-75 mx-auto\">
        <div><h1>{% if id == 0 %}Ajouter une Entree{% else %} Modifier une Entree{% endif %}</h1></div>
    {{ form_start(AjoutEntreeForm) }}
        {{ form_row(AjoutEntreeForm.libelleEntree) }}
        {{ form_row(AjoutEntreeForm.referenceEntree) }}
        {{ form_row(AjoutEntreeForm.prixEntree) }}
        {{ form_row(AjoutEntreeForm.descriptionEntree) }}
        {{ form_row(AjoutEntreeForm.Commercialise) }}
        <button class=\"btn bg-warning\">Valider</button>
    {{ form_end(AjoutEntreeForm) }}
    
        </div>
    </div>
{% endblock %}", "Admin/GestionAdminModifierEntree.html.twig", "C:\\wamp64\\www\\Projet\\AmiHauteurApp\\templates\\Admin\\GestionAdminModifierEntree.html.twig");
    }
}
