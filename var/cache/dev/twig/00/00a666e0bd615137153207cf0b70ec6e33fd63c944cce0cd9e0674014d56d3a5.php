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
class __TwigTemplate_5f2d6f5af91ed7417bfb9d1b36ff5271d976beae4445b5d307c8d4e4fbaa1ba7 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
";
        // line 6
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 7
            echo "    <p class=\"text-center\">Bonjour ! Votre Email est : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "user", [], "any", false, false, false, 7), "email", [], "any", false, false, false, 7), "html", null, true);
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
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["listeConfig"]) || array_key_exists("listeConfig", $context) ? $context["listeConfig"] : (function () { throw new RuntimeError('Variable "listeConfig" does not exist.', 28, $this->source); })()), "getConfigUser", [], "any", false, false, false, 28));
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
                $context['_seq'] = twig_ensure_traversable((isset($context["listeAdmin"]) || array_key_exists("listeAdmin", $context) ? $context["listeAdmin"] : (function () { throw new RuntimeError('Variable "listeAdmin" does not exist.', 64, $this->source); })()));
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  224 => 84,  215 => 77,  206 => 74,  200 => 73,  195 => 72,  191 => 71,  187 => 70,  183 => 69,  178 => 67,  174 => 66,  171 => 65,  167 => 64,  147 => 46,  145 => 45,  141 => 43,  135 => 39,  125 => 35,  121 => 34,  117 => 33,  112 => 31,  108 => 30,  105 => 29,  101 => 28,  81 => 10,  79 => 9,  73 => 7,  71 => 6,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}


{% block body %}

{% if is_granted('IS_AUTHENTICATED_FULLY') %}
    <p class=\"text-center\">Bonjour ! Votre Email est : {{ app.user.email }}</p>

{% if is_granted('ROLE_USER') and not is_granted('ROLE_ADMIN') %}

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
                        {% for Config in listeConfig.getConfigUser %}
                            <tr>
                                <td class=\"table-light\"><a href=\"{{ path('detailConfig', {'id': Config.id}) }}\">
                                {{ Config.NomConfig }}
                                </a></td>
                                <td class=\"table-light\">{{ Config.DescriptionConfig }}</td>
                                <td class=\"table-light\">{{ Config.ReferenceConfig }}</td>
                                <td class=\"table-light\">{{ Config.DateConfig|date('Y-m-d') }}</td>
                                <td class=\"table-light\"><a class=\"btn btn-danger btn-sm\" onclick=\"return confirm('Etes-vous sur de vouloir supprimer cette configuration ?')\" href=\"#\">Supprimer</a> <a class=\"btn btn-primary btn-sm\" href=\"#\">Modifier</a></td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
            {% endif %}


             {% if is_granted('ROLE_ADMIN') %}
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
                            <th class=\"bg-warning\" style=\"color:white;\">Remise</th>
                            <th class=\"bg-warning\" style=\"color:white;\">Actions</th>

                            <!-- <th class=\"bg-warning\" style=\"color:white;\"></th> -->
                        </tr>
                    </thead>
                    <tbody>
                        {% for Config in listeAdmin %}
                            <tr>
                                <td class=\"table-light\"><a href=\"{{ path('detailConfig', {'id': Config.id}) }}\">
                                {{ Config.NomConfig }}
                                </a></td>
                                <td class=\"table-light\">{{ Config.DescriptionConfig }}</td>
                                <td class=\"table-light\">{{ Config.ReferenceConfig }}</td>
                                <td class=\"table-light\">{{ Config.DateConfig|date('Y-m-d') }}</td>
                                <td class=\"table-light\">{% if Config.RemiseConfig is null %} Pas de Remise allouée
                                {% else %}{{ Config.RemiseConfig }} {% endif %}</td>
                                <td class=\"table-light\"><a class=\"btn btn-danger btn-sm\" onclick=\"return confirm('Etes-vous sur de vouloir supprimer cette configuration ?')\" href=\"#\">Supprimer</a> <a class=\"btn btn-primary btn-sm\" href=\"{{ path('ModifierConfig', { 'id' : Config.id }) }}\">Modifier</a></td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
            <br>
            <br>
             {% endif %}
{% endif %}

{% endblock %}





", "Index.html.twig", "C:\\wamp64\\www\\Projet\\AmiHauteurApp\\templates\\Index.html.twig");
    }
}
