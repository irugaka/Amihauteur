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
class __TwigTemplate_fb43fdf33c7f2933e1874c5ed5431815d1d14404f0014d0d2209ae9f428a35fd extends Template
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

";
            // line 9
            if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER") &&  !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
                // line 10
                echo "
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
                            <th class=\"bg-warning\" style=\"color:white;\">Date</th>
                            <th class=\"bg-warning\" style=\"color:white;\">Actions</th>

                            <!-- <th class=\"bg-warning\" style=\"color:white;\"></th> -->
                        </tr>
                    </thead>
                    <tbody>
                        ";
                // line 28
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["listeConfig"] ?? null), "getConfigUser", [], "any", false, false, false, 28));
                foreach ($context['_seq'] as $context["_key"] => $context["Config"]) {
                    // line 29
                    echo "                            <tr>
                                <td class=\"table-light\"><a href=\"";
                    // line 30
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detailConfig", ["id" => twig_get_attribute($this->env, $this->source, $context["Config"], "id", [], "any", false, false, false, 30)]), "html", null, true);
                    echo "\">
                                ";
                    // line 31
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Config"], "NomConfig", [], "any", false, false, false, 31), "html", null, true);
                    echo "
                                </a></td>
                                <td class=\"table-light\">";
                    // line 33
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Config"], "DescriptionConfig", [], "any", false, false, false, 33), "html", null, true);
                    echo "</td>
                                <td class=\"table-light\">";
                    // line 34
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Config"], "ReferenceConfig", [], "any", false, false, false, 34), "html", null, true);
                    echo "</td>
                                <td class=\"table-light\">";
                    // line 35
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Config"], "DateConfig", [], "any", false, false, false, 35), "Y-m-d"), "html", null, true);
                    echo "</td>
                                <td class=\"table-light\"><a class=\"btn btn-danger btn-sm\" onclick=\"return confirm('Etes-vous sur de vouloir supprimer cette configuration ?')\" href=\"#\">Supprimer</a> <a class=\"btn btn-primary btn-sm\" href=\"#\">Modifier</a></td>
                            </tr>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Config'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 39
                echo "                    </tbody>
                </table>
            </div>
            ";
            }
            // line 43
            echo "

             ";
            // line 45
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 46
                echo "                    <div class=\"container\">
            <center><h3>Liste des Config</h3></center>
                <!-- Tableau qui affiche les config -->
                <table id=\"ListeConfig\" class=\"table table-striped table-bordered table-sm \">
                    <thead>
                        <tr>
                            <!-- <th class=\"bg-warning\" style=\"color:white;\">Nom</th> -->
                            <th class=\"bg-warning\" style=\"color:white;\">Nom</th>
                            <th class=\"bg-warning\" style=\"color:white;\">Description</th>
                            <th class=\"bg-warning\" style=\"color:white;\">Reference</th>
                            <th class=\"bg-warning\" style=\"color:white;\">Date</th>
                            <th class=\"bg-warning\" style=\"color:white;\">Remise</th>
                            <th class=\"bg-warning\" style=\"color:white;\">Actions</th>

                            <!-- <th class=\"bg-warning\" style=\"color:white;\"></th> -->
                        </tr>
                    </thead>
                    <tbody>
                        ";
                // line 64
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["listeAdmin"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["Config"]) {
                    // line 65
                    echo "                            <tr>
                                <td class=\"table-light\"><a href=\"";
                    // line 66
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("detailConfig", ["id" => twig_get_attribute($this->env, $this->source, $context["Config"], "id", [], "any", false, false, false, 66)]), "html", null, true);
                    echo "\">
                                ";
                    // line 67
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Config"], "NomConfig", [], "any", false, false, false, 67), "html", null, true);
                    echo "
                                </a></td>
                                <td class=\"table-light\">";
                    // line 69
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Config"], "DescriptionConfig", [], "any", false, false, false, 69), "html", null, true);
                    echo "</td>
                                <td class=\"table-light\">";
                    // line 70
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Config"], "ReferenceConfig", [], "any", false, false, false, 70), "html", null, true);
                    echo "</td>
                                <td class=\"table-light\">";
                    // line 71
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Config"], "DateConfig", [], "any", false, false, false, 71), "Y-m-d"), "html", null, true);
                    echo "</td>
                                <td class=\"table-light\">";
                    // line 72
                    if ((null === twig_get_attribute($this->env, $this->source, $context["Config"], "RemiseConfig", [], "any", false, false, false, 72))) {
                        echo " Pas de Remise allouée
                                ";
                    } else {
                        // line 73
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Config"], "RemiseConfig", [], "any", false, false, false, 73), "html", null, true);
                        echo " ";
                    }
                    echo "</td>
                                <td class=\"table-light\"><a class=\"btn btn-danger btn-sm\" onclick=\"return confirm('Etes-vous sur de vouloir supprimer cette configuration ?')\" href=\"#\">Supprimer</a> <a class=\"btn btn-primary btn-sm\" href=\"";
                    // line 74
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ModifierConfig", ["id" => twig_get_attribute($this->env, $this->source, $context["Config"], "id", [], "any", false, false, false, 74)]), "html", null, true);
                    echo "\">Modifier</a></td>
                            </tr>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Config'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 77
                echo "                    </tbody>
                </table>
            </div>
            <br>
            <br>
             ";
            }
        }
        // line 84
        echo "
";
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
        return array (  206 => 84,  197 => 77,  188 => 74,  182 => 73,  177 => 72,  173 => 71,  169 => 70,  165 => 69,  160 => 67,  156 => 66,  153 => 65,  149 => 64,  129 => 46,  127 => 45,  123 => 43,  117 => 39,  107 => 35,  103 => 34,  99 => 33,  94 => 31,  90 => 30,  87 => 29,  83 => 28,  63 => 10,  61 => 9,  55 => 7,  53 => 6,  50 => 5,  46 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Index.html.twig", "C:\\wamp64\\www\\Projet\\AmiHauteurApp\\templates\\Index.html.twig");
    }
}
