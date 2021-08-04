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

/* ChoixNorme.html.twig */
class __TwigTemplate_b21d5d33ed3e79e9e18e45d1fc425dfb8d62b98b3c73eba2e480b49c2de808da extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ChoixNorme.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ChoixNorme.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "ChoixNorme.html.twig", 1);
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

        echo "Choisir une Norme";
        
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
        <div><h1>Choix de la norme</h1></div>
    ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["NormeAjoutForm"]) || array_key_exists("NormeAjoutForm", $context) ? $context["NormeAjoutForm"] : (function () { throw new RuntimeError('Variable "NormeAjoutForm" does not exist.', 12, $this->source); })()), 'form_start');
        echo "
    <table class=\"table table-striped table-bordered table-sm \">
    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["NormeAjoutForm"]) || array_key_exists("NormeAjoutForm", $context) ? $context["NormeAjoutForm"] : (function () { throw new RuntimeError('Variable "NormeAjoutForm" does not exist.', 14, $this->source); })()), "echelleNorme", [], "any", false, false, false, 14));
        foreach ($context['_seq'] as $context["key"] => $context["type"]) {
            // line 15
            echo "    ";
            $context["attr"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["NormeAjoutForm"]) || array_key_exists("NormeAjoutForm", $context) ? $context["NormeAjoutForm"] : (function () { throw new RuntimeError('Variable "NormeAjoutForm" does not exist.', 15, $this->source); })()), "echelleNorme", [], "any", false, false, false, 15), "vars", [], "any", false, false, false, 15), "choices", [], "any", false, false, false, 15), $context["key"], [], "array", false, false, false, 15), "data", [], "any", false, false, false, 15), "ImageUrl", [], "any", false, false, false, 15);
            // line 16
            echo "    <tr>
      <td>
      ";
            // line 18
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["type"], 'widget');
            echo "
      </td>
    <td style=\"width:auto\"><img src=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 20, $this->source); })())), "html", null, true);
            echo "\">
    <br>
    ";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["NormeAjoutForm"]) || array_key_exists("NormeAjoutForm", $context) ? $context["NormeAjoutForm"] : (function () { throw new RuntimeError('Variable "NormeAjoutForm" does not exist.', 22, $this->source); })()), "echelleNorme", [], "any", false, false, false, 22), "vars", [], "any", false, false, false, 22), "choices", [], "any", false, false, false, 22), $context["key"], [], "array", false, false, false, 22), "data", [], "any", false, false, false, 22), "descriptionNorme", [], "any", false, false, false, 22), "html", null, true);
            echo "</td>
    
     </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "   
    </table>
        <a styke=\"color:black\" class=\"text-dark btn bg-warning\" href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">Precedent</a>
        <button class=\"btn bg-warning\">Suivant</button>
    ";
        // line 30
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["NormeAjoutForm"]) || array_key_exists("NormeAjoutForm", $context) ? $context["NormeAjoutForm"] : (function () { throw new RuntimeError('Variable "NormeAjoutForm" does not exist.', 30, $this->source); })()), 'form_end');
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

    // line 40
    public function block_progression($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "progression"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "progression"));

        // line 41
        echo twig_include($this->env, $context, "ProgressionBar.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "ChoixNorme.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 41,  161 => 40,  142 => 30,  137 => 28,  133 => 26,  123 => 22,  118 => 20,  113 => 18,  109 => 16,  106 => 15,  102 => 14,  97 => 12,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Choisir une Norme{% endblock %}

{% block body %}


<div class=\"container\">
    
        <div class=\"w-75 mx-auto\">
        <div><h1>Choix de la norme</h1></div>
    {{ form_start(NormeAjoutForm) }}
    <table class=\"table table-striped table-bordered table-sm \">
    {% for key, type in NormeAjoutForm.echelleNorme %}
    {% set attr = NormeAjoutForm.echelleNorme.vars.choices[key].data.ImageUrl %}
    <tr>
      <td>
      {{ form_widget(type) }}
      </td>
    <td style=\"width:auto\"><img src=\"{{ asset(attr) }}\">
    <br>
    {{ NormeAjoutForm.echelleNorme.vars.choices[key].data.descriptionNorme }}</td>
    
     </tr>
    {% endfor %}
   
    </table>
        <a styke=\"color:black\" class=\"text-dark btn bg-warning\" href=\"{{ path('index') }}\">Precedent</a>
        <button class=\"btn bg-warning\">Suivant</button>
    {{ form_end(NormeAjoutForm) }}
    
        </div>
    </div>
<div>
<br>
</div>
<br>
{% endblock %}

{% block progression %}
{{ include('ProgressionBar.html.twig') }}
{% endblock %}", "ChoixNorme.html.twig", "C:\\wamp64\\www\\Projet\\AmiHauteurApp\\templates\\ChoixNorme.html.twig");
    }
}
