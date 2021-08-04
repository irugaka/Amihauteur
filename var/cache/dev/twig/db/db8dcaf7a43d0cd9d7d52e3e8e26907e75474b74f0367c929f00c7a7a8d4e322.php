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

/* ModifierConfig.html copy.twig */
class __TwigTemplate_a1e0fd87164a6004d7a0ad20da49b1b299257acb7f2ece5e9ee3f961bf706867 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ModifierConfig.html copy.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ModifierConfig.html copy.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "ModifierConfig.html copy.twig", 1);
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

        echo "Ajouter une configuration";
        
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
        echo "
    
    <div class=\"container\">
    
        <div class=\"w-75 mx-auto\">
        <div><h1>Ajout d'une configuration</h1></div>
    ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["ConfigAjoutForm"]) || array_key_exists("ConfigAjoutForm", $context) ? $context["ConfigAjoutForm"] : (function () { throw new RuntimeError('Variable "ConfigAjoutForm" does not exist.', 12, $this->source); })()), 'form_start');
        echo "
        ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["ConfigAjoutForm"]) || array_key_exists("ConfigAjoutForm", $context) ? $context["ConfigAjoutForm"] : (function () { throw new RuntimeError('Variable "ConfigAjoutForm" does not exist.', 13, $this->source); })()), "NomConfig", [], "any", false, false, false, 13), 'row', ["label" => "Reference Chantier (Pour le Client)"]);
        // line 15
        echo "
        ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["ConfigAjoutForm"]) || array_key_exists("ConfigAjoutForm", $context) ? $context["ConfigAjoutForm"] : (function () { throw new RuntimeError('Variable "ConfigAjoutForm" does not exist.', 16, $this->source); })()), "ReferenceConfig", [], "any", false, false, false, 16), 'row', ["label" => "Reference de la configuration"]);
        // line 18
        echo "
        ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["ConfigAjoutForm"]) || array_key_exists("ConfigAjoutForm", $context) ? $context["ConfigAjoutForm"] : (function () { throw new RuntimeError('Variable "ConfigAjoutForm" does not exist.', 19, $this->source); })()), "DescriptionConfig", [], "any", false, false, false, 19), 'row', ["label" => "Description"]);
        // line 21
        echo "

        ";
        // line 23
        if ( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 24
            echo "        ";
            twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ConfigAjoutForm"]) || array_key_exists("ConfigAjoutForm", $context) ? $context["ConfigAjoutForm"] : (function () { throw new RuntimeError('Variable "ConfigAjoutForm" does not exist.', 24, $this->source); })()), "RemiseConfig", [], "any", false, false, false, 24), "setRendered", [], "method", false, false, false, 24);
            // line 25
            echo "        ";
        } else {
            // line 26
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["ConfigAjoutForm"]) || array_key_exists("ConfigAjoutForm", $context) ? $context["ConfigAjoutForm"] : (function () { throw new RuntimeError('Variable "ConfigAjoutForm" does not exist.', 26, $this->source); })()), "RemiseConfig", [], "any", false, false, false, 26), 'row');
            echo "
        ";
        }
        // line 28
        echo "

        
        <button type=\"submit\" class=\"btn bg-warning\">Suivant</button>
    ";
        // line 32
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["ConfigAjoutForm"]) || array_key_exists("ConfigAjoutForm", $context) ? $context["ConfigAjoutForm"] : (function () { throw new RuntimeError('Variable "ConfigAjoutForm" does not exist.', 32, $this->source); })()), 'form_end');
        echo "
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "ModifierConfig.html copy.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 32,  130 => 28,  124 => 26,  121 => 25,  118 => 24,  116 => 23,  112 => 21,  110 => 19,  107 => 18,  105 => 16,  102 => 15,  100 => 13,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Ajouter une configuration{% endblock %}

{% block body %}

    
    <div class=\"container\">
    
        <div class=\"w-75 mx-auto\">
        <div><h1>Ajout d'une configuration</h1></div>
    {{ form_start(ConfigAjoutForm) }}
        {{ form_row(ConfigAjoutForm.NomConfig, {
            label: 'Reference Chantier (Pour le Client)'
        }) }}
        {{ form_row(ConfigAjoutForm.ReferenceConfig, {
            label: 'Reference de la configuration'
        }) }}
        {{ form_row(ConfigAjoutForm.DescriptionConfig, {
            label: 'Description'
        }) }}

        {% if not is_granted('ROLE_ADMIN') %}
        {% do ConfigAjoutForm.RemiseConfig.setRendered() %}
        {% else %}
        {{ form_row(ConfigAjoutForm.RemiseConfig) }}
        {% endif %}


        
        <button type=\"submit\" class=\"btn bg-warning\">Suivant</button>
    {{ form_end(ConfigAjoutForm) }}
        </div>
    </div>
{% endblock %}", "ModifierConfig.html copy.twig", "C:\\wamp64\\www\\Projet\\AmiHauteurApp\\templates\\ModifierConfig.html copy.twig");
    }
}
