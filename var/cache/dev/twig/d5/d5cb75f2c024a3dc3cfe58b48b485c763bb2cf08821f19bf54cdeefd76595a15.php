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

/* ConfigAjout.html.twig */
class __TwigTemplate_2b59dd1f4635eca5c67dff18457dad7161bf5b357c1c9f3e6debeefe7aa6ffc9 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ConfigAjout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ConfigAjout.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "ConfigAjout.html.twig", 1);
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
<div>
<br>
</div>
<br>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 41
    public function block_progression($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "progression"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "progression"));

        // line 42
        echo twig_include($this->env, $context, "ProgressionBar.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "ConfigAjout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 42,  155 => 41,  137 => 32,  131 => 28,  125 => 26,  122 => 25,  119 => 24,  117 => 23,  113 => 21,  111 => 19,  108 => 18,  106 => 16,  103 => 15,  101 => 13,  97 => 12,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
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
<div>
<br>
</div>
<br>
{% endblock %}

{% block progression %}
{{ include('ProgressionBar.html.twig') }}
{% endblock %}


", "ConfigAjout.html.twig", "C:\\wamp64\\www\\Projet\\AmiHauteurApp\\templates\\ConfigAjout.html.twig");
    }
}
