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
class __TwigTemplate_ee93f8d2d0277bf0dfd9b3fad1764b7e46a70dd11537f0cc15c2b9e0b6f9d08c extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "detailConfig.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["listeConfig"] ?? null), "NomConfig", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
                                <td class=\"table-light\">";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["listeConfig"] ?? null), "DescriptionConfig", [], "any", false, false, false, 21), "html", null, true);
        echo "</td>
                                <td class=\"table-light\">";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["listeConfig"] ?? null), "ReferenceConfig", [], "any", false, false, false, 22), "html", null, true);
        echo "</td>
                                <td class=\"table-light\">";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["listeConfig"] ?? null), "RemiseConfig", [], "any", false, false, false, 23), "html", null, true);
        echo "</td>                            </tr>
                    </tbody>
                </table>
            </div>
";
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
        return array (  80 => 23,  76 => 22,  72 => 21,  68 => 20,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "detailConfig.html.twig", "C:\\wamp64\\www\\Projet\\AmiHauteurApp\\templates\\detailConfig.html.twig");
    }
}
