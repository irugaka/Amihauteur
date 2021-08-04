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

/* detailConfig.html.twig */
class __TwigTemplate_b467fc198031491d8ed072b866654400e962a352e913ba3cedf7b0a8372b5472 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "detailConfig.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "detailConfig.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "detailConfig.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container\">
            <center><h3>Liste des Config</h3></center>
                <!-- Tableau qui affiche les config -->
                <table id=\"ListeConfig\" class=\"table table-striped table-bordered table-sm \">
                    <thead>
                        <tr>
                            <!-- <th class=\"bg-warning\" style=\"color:white;\">Nom</th> -->
                            <th class=\"bg-warning\" style=\"color:white;\">Nom</th>
                            <th class=\"bg-warning\" style=\"color:white;\">Description</th>
                            <th class=\"bg-warning\" style=\"color:white;\">Reference</th>
                            <th class=\"bg-warning\" style=\"color:white;\">Remise</th>
                            <!-- <th class=\"bg-warning\" style=\"color:white;\"></th> -->
                        </tr>
                    </thead>
                    <tbody>
                            <tr>
                                <td class=\"table-light\">";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["listeConfig"]) || array_key_exists("listeConfig", $context) ? $context["listeConfig"] : (function () { throw new RuntimeError('Variable "listeConfig" does not exist.', 20, $this->source); })()), "NomConfig", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
                                <td class=\"table-light\">";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["listeConfig"]) || array_key_exists("listeConfig", $context) ? $context["listeConfig"] : (function () { throw new RuntimeError('Variable "listeConfig" does not exist.', 21, $this->source); })()), "DescriptionConfig", [], "any", false, false, false, 21), "html", null, true);
        echo "</td>
                                <td class=\"table-light\">";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["listeConfig"]) || array_key_exists("listeConfig", $context) ? $context["listeConfig"] : (function () { throw new RuntimeError('Variable "listeConfig" does not exist.', 22, $this->source); })()), "ReferenceConfig", [], "any", false, false, false, 22), "html", null, true);
        echo "</td>
                                <td class=\"table-light\">";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["listeConfig"]) || array_key_exists("listeConfig", $context) ? $context["listeConfig"] : (function () { throw new RuntimeError('Variable "listeConfig" does not exist.', 23, $this->source); })()), "RemiseConfig", [], "any", false, false, false, 23), "html", null, true);
        echo "</td>                            </tr>
                    </tbody>
                </table>
            </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "detailConfig.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 23,  94 => 22,  90 => 21,  86 => 20,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<div class=\"container\">
            <center><h3>Liste des Config</h3></center>
                <!-- Tableau qui affiche les config -->
                <table id=\"ListeConfig\" class=\"table table-striped table-bordered table-sm \">
                    <thead>
                        <tr>
                            <!-- <th class=\"bg-warning\" style=\"color:white;\">Nom</th> -->
                            <th class=\"bg-warning\" style=\"color:white;\">Nom</th>
                            <th class=\"bg-warning\" style=\"color:white;\">Description</th>
                            <th class=\"bg-warning\" style=\"color:white;\">Reference</th>
                            <th class=\"bg-warning\" style=\"color:white;\">Remise</th>
                            <!-- <th class=\"bg-warning\" style=\"color:white;\"></th> -->
                        </tr>
                    </thead>
                    <tbody>
                            <tr>
                                <td class=\"table-light\">{{ listeConfig.NomConfig}}</td>
                                <td class=\"table-light\">{{ listeConfig.DescriptionConfig }}</td>
                                <td class=\"table-light\">{{ listeConfig.ReferenceConfig }}</td>
                                <td class=\"table-light\">{{ listeConfig.RemiseConfig }}</td>                            </tr>
                    </tbody>
                </table>
            </div>
{% endblock %}
", "detailConfig.html.twig", "C:\\wamp64\\www\\Projet\\AmiHauteurApp\\templates\\detailConfig.html.twig");
    }
}
