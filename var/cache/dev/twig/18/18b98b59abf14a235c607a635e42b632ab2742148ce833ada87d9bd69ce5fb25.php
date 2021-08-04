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

/* Admin/GestionAdminModifierSortie.html.twig */
class __TwigTemplate_0c3e497ff3a26b33f7df6bd05b67af6192d60d7583205c8cfa1599f68cdd0c4c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/GestionAdminModifierSortie.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/GestionAdminModifierSortie.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Admin/GestionAdminModifierSortie.html.twig", 1);
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
            echo "Ajouter une Sortie
";
        } else {
            // line 7
            echo "Modifier une Sortie
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
            echo "Ajouter une Sortie";
        } else {
            echo " Modifier une Sortie";
        }
        echo "</h1></div>
    ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["AjoutSortieForm"]) || array_key_exists("AjoutSortieForm", $context) ? $context["AjoutSortieForm"] : (function () { throw new RuntimeError('Variable "AjoutSortieForm" does not exist.', 16, $this->source); })()), 'form_start');
        echo "
        ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["AjoutSortieForm"]) || array_key_exists("AjoutSortieForm", $context) ? $context["AjoutSortieForm"] : (function () { throw new RuntimeError('Variable "AjoutSortieForm" does not exist.', 17, $this->source); })()), "libelleSortie", [], "any", false, false, false, 17), 'row');
        echo "
        ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["AjoutSortieForm"]) || array_key_exists("AjoutSortieForm", $context) ? $context["AjoutSortieForm"] : (function () { throw new RuntimeError('Variable "AjoutSortieForm" does not exist.', 18, $this->source); })()), "referenceSortie", [], "any", false, false, false, 18), 'row');
        echo "
        ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["AjoutSortieForm"]) || array_key_exists("AjoutSortieForm", $context) ? $context["AjoutSortieForm"] : (function () { throw new RuntimeError('Variable "AjoutSortieForm" does not exist.', 19, $this->source); })()), "prixSortie", [], "any", false, false, false, 19), 'row');
        echo "
        ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["AjoutSortieForm"]) || array_key_exists("AjoutSortieForm", $context) ? $context["AjoutSortieForm"] : (function () { throw new RuntimeError('Variable "AjoutSortieForm" does not exist.', 20, $this->source); })()), "descriptionEntree", [], "any", false, false, false, 20), 'row');
        echo "
        ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["AjoutSortieForm"]) || array_key_exists("AjoutSortieForm", $context) ? $context["AjoutSortieForm"] : (function () { throw new RuntimeError('Variable "AjoutSortieForm" does not exist.', 21, $this->source); })()), "Commercialise", [], "any", false, false, false, 21), 'row');
        echo "
        <button class=\"btn bg-warning\">Valider</button>
    ";
        // line 23
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["AjoutSortieForm"]) || array_key_exists("AjoutSortieForm", $context) ? $context["AjoutSortieForm"] : (function () { throw new RuntimeError('Variable "AjoutSortieForm" does not exist.', 23, $this->source); })()), 'form_end');
        echo "
    
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Admin/GestionAdminModifierSortie.html.twig";
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
Ajouter une Sortie
{% else %}
Modifier une Sortie
{% endif %}
{% endblock %}

{% block body %}
<div class=\"container\">
    
        <div class=\"w-75 mx-auto\">
        <div><h1>{% if id == 0 %}Ajouter une Sortie{% else %} Modifier une Sortie{% endif %}</h1></div>
    {{ form_start(AjoutSortieForm) }}
        {{ form_row(AjoutSortieForm.libelleSortie) }}
        {{ form_row(AjoutSortieForm.referenceSortie) }}
        {{ form_row(AjoutSortieForm.prixSortie) }}
        {{ form_row(AjoutSortieForm.descriptionEntree) }}
        {{ form_row(AjoutSortieForm.Commercialise) }}
        <button class=\"btn bg-warning\">Valider</button>
    {{ form_end(AjoutSortieForm) }}
    
        </div>
    </div>
{% endblock %}", "Admin/GestionAdminModifierSortie.html.twig", "C:\\wamp64\\www\\Projet\\AmiHauteurApp\\templates\\Admin\\GestionAdminModifierSortie.html.twig");
    }
}
