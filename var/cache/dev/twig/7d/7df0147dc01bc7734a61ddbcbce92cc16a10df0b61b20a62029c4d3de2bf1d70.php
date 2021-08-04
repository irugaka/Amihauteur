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
class __TwigTemplate_99ab1c8e96879a1fe77379269be7f76edc5cbfd5eae958e562365b41920441bf extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/GestionAdminModifierTypeEchelle.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/GestionAdminModifierTypeEchelle.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Admin/GestionAdminModifierTypeEchelle.html.twig", 1);
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
            echo "Ajouter un accessoire
";
        } else {
            // line 7
            echo "Modifier un Accessoire
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
            echo "Ajouter un Type d'Echelle";
        } else {
            echo " Modifier un type d'Echelle";
        }
        echo "</h1></div>
    ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["AjoutTypeEchelleForm"]) || array_key_exists("AjoutTypeEchelleForm", $context) ? $context["AjoutTypeEchelleForm"] : (function () { throw new RuntimeError('Variable "AjoutTypeEchelleForm" does not exist.', 16, $this->source); })()), 'form_start');
        echo "
        ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["AjoutTypeEchelleForm"]) || array_key_exists("AjoutTypeEchelleForm", $context) ? $context["AjoutTypeEchelleForm"] : (function () { throw new RuntimeError('Variable "AjoutTypeEchelleForm" does not exist.', 17, $this->source); })()), "libelleTypeEchelle", [], "any", false, false, false, 17), 'row');
        echo "
        ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["AjoutTypeEchelleForm"]) || array_key_exists("AjoutTypeEchelleForm", $context) ? $context["AjoutTypeEchelleForm"] : (function () { throw new RuntimeError('Variable "AjoutTypeEchelleForm" does not exist.', 18, $this->source); })()), "prix", [], "any", false, false, false, 18), 'row');
        echo "
        ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["AjoutTypeEchelleForm"]) || array_key_exists("AjoutTypeEchelleForm", $context) ? $context["AjoutTypeEchelleForm"] : (function () { throw new RuntimeError('Variable "AjoutTypeEchelleForm" does not exist.', 19, $this->source); })()), "Commercialise", [], "any", false, false, false, 19), 'row');
        echo "
        <button class=\"btn bg-warning\">Valider</button>
    ";
        // line 21
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["AjoutTypeEchelleForm"]) || array_key_exists("AjoutTypeEchelleForm", $context) ? $context["AjoutTypeEchelleForm"] : (function () { throw new RuntimeError('Variable "AjoutTypeEchelleForm" does not exist.', 21, $this->source); })()), 'form_end');
        echo "
    
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  127 => 21,  122 => 19,  118 => 18,  114 => 17,  110 => 16,  102 => 15,  97 => 12,  87 => 11,  75 => 7,  71 => 5,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
{% if id == 0 %}
Ajouter un accessoire
{% else %}
Modifier un Accessoire
{% endif %}
{% endblock %}

{% block body %}
<div class=\"container\">
    
        <div class=\"w-75 mx-auto\">
        <div><h1>{% if id == 0 %}Ajouter un Type d'Echelle{% else %} Modifier un type d'Echelle{% endif %}</h1></div>
    {{ form_start(AjoutTypeEchelleForm) }}
        {{ form_row(AjoutTypeEchelleForm.libelleTypeEchelle) }}
        {{ form_row(AjoutTypeEchelleForm.prix) }}
        {{ form_row(AjoutTypeEchelleForm.Commercialise) }}
        <button class=\"btn bg-warning\">Valider</button>
    {{ form_end(AjoutTypeEchelleForm) }}
    
        </div>
    </div>
{% endblock %}", "Admin/GestionAdminModifierTypeEchelle.html.twig", "C:\\wamp64\\www\\Projet\\AmiHauteurApp\\templates\\Admin\\GestionAdminModifierTypeEchelle.html.twig");
    }
}
