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

/* Index.html.twig */
class __TwigTemplate_f0df3f901d5962fadd889311d1de2eab0aa19331232ac4e250c84606171c5834 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "Index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "
";
        // line 6
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 7
            echo "    <p class=\"text-center\">Bonjour ! Votre Email est : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 7), "email", [], "any", false, false, false, 7), "html", null, true);
            echo "</p>

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
                            <th class=\"bg-warning\" style=\"color:white;\">Actions</th>

                            <!-- <th class=\"bg-warning\" style=\"color:white;\"></th> -->
                        </tr>
                    </thead>
                    <tbody>
                        ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["listeConfig"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["Config"]) {
                // line 27
                echo "                            <tr>
                                <td class=\"table-light\"><a href=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detailConfig", ["id" => twig_get_attribute($this->env, $this->source, $context["Config"], "id", [], "any", false, false, false, 28)]), "html", null, true);
                echo "\">
                                ";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Config"], "NomConfig", [], "any", false, false, false, 29), "html", null, true);
                echo "
                                </a></td>
                                <td class=\"table-light\">";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Config"], "DescriptionConfig", [], "any", false, false, false, 31), "html", null, true);
                echo "</td>
                                <td class=\"table-light\">";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Config"], "ReferenceConfig", [], "any", false, false, false, 32), "html", null, true);
                echo "</td>
                                <td class=\"table-light\">";
                // line 33
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Config"], "RemiseConfig", [], "any", false, false, false, 33), "html", null, true);
                echo "</td>
                                <td class=\"table-light\"><a class=\"btn btn-danger btn-sm\" href=\"#\">Supprimer</a> <a class=\"btn btn-primary btn-sm\" href=\"#\">Modifier</a></td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Config'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "                    </tbody>
                </table>
            </div>
";
        }
    }

    public function getTemplateName()
    {
        return "Index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 37,  102 => 33,  98 => 32,  94 => 31,  89 => 29,  85 => 28,  82 => 27,  78 => 26,  55 => 7,  53 => 6,  50 => 5,  46 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Index.html.twig", "C:\\wamp64\\www\\Projet\\AmiHauteurApp\\templates\\Index.html.twig");
    }
}
