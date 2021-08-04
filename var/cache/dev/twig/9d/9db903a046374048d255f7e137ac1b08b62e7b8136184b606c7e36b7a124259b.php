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

/* Admin/GestionAdminIndex.html.twig */
class __TwigTemplate_09683e92bd5660043e705a54f51053b576b5d63af9da5cad3aeac46af8335d4b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/GestionAdminIndex.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Admin/GestionAdminIndex.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "Admin/GestionAdminIndex.html.twig", 1);
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

    <div class=\"container\">
            <center><h3>Liste des Accessoires du Site</h3></center>
                <!-- Tableau qui affiche les config -->
                <table id=\"ListeConfig\" class=\"table table-striped table-bordered table-sm \">
                    <thead>
                        <tr>
                            <!-- <th class=\"bg-warning\" style=\"color:white;\">Nom</th> -->
                            <th class=\"bg-warning\" style=\"color:white;\">Nom</th>
                            <th class=\"bg-warning\" style=\"color:white;\">Reference</th>
                            <th class=\"bg-warning\" style=\"color:white;\">Prix</th>
                            <th class=\"bg-warning\" style=\"color:white;\">Commercialisé</th>
                            <th class=\"bg-warning\" style=\"color:white;\">Action</th>

                            <!-- <th class=\"bg-warning\" style=\"color:white;\"></th> -->
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listeAccessoire"]) || array_key_exists("listeAccessoire", $context) ? $context["listeAccessoire"] : (function () { throw new RuntimeError('Variable "listeAccessoire" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["Accessoire"]) {
            // line 25
            echo "                         ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["Accessoire"], "Commercialise", [], "any", false, false, false, 25), false))) {
                // line 26
                echo "                            <tr>
                                <td style=\"background-color:#ff7c7c\" class=\"table-light\">";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Accessoire"], "nomAccessoire", [], "any", false, false, false, 27), "html", null, true);
                echo "</td>
                                <td style=\"background-color:#ff7c7c\" class=\"table-light\">";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Accessoire"], "refAccessoire", [], "any", false, false, false, 28), "html", null, true);
                echo "</td>
                                <td style=\"background-color:#ff7c7c\" class=\"table-light\">";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Accessoire"], "prixAccessoire", [], "any", false, false, false, 29), "html", null, true);
                echo "</td>
                                <td style=\"background-color:#ff7c7c\" class=\"table-light\">";
                // line 30
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["Accessoire"], "Commercialise", [], "any", false, false, false, 30), true))) {
                    echo "Oui";
                }
                // line 31
                echo "                                ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["Accessoire"], "Commercialise", [], "any", false, false, false, 31), false))) {
                    echo "Non";
                }
                // line 32
                echo "                                </td>
                                <td style=\"background-color:#ff7c7c\" class=\"table-light\"><a class=\"btn btn-success btn-sm\" href=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("AdminCommercialiseAccessoire", ["id" => twig_get_attribute($this->env, $this->source, $context["Accessoire"], "id", [], "any", false, false, false, 33)]), "html", null, true);
                echo "\">Commercialiser</a> <a class=\"btn btn-primary btn-sm\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("AdminModifierAccessoire", ["id" => twig_get_attribute($this->env, $this->source, $context["Accessoire"], "id", [], "any", false, false, false, 33)]), "html", null, true);
                echo "\">Modifier</a></td>
                            </tr>
                            ";
            } else {
                // line 36
                echo "                            <tr>
                                <td class=\"table-light\">";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Accessoire"], "nomAccessoire", [], "any", false, false, false, 37), "html", null, true);
                echo "</td>
                                <td class=\"table-light\">";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Accessoire"], "refAccessoire", [], "any", false, false, false, 38), "html", null, true);
                echo "</td>
                                <td class=\"table-light\">";
                // line 39
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Accessoire"], "prixAccessoire", [], "any", false, false, false, 39), "html", null, true);
                echo "</td>
                                <td class=\"table-light\">";
                // line 40
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["Accessoire"], "Commercialise", [], "any", false, false, false, 40), true))) {
                    echo "Oui";
                }
                // line 41
                echo "                                ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["Accessoire"], "Commercialise", [], "any", false, false, false, 41), false))) {
                    echo "Non";
                }
                // line 42
                echo "                                </td>
                                <td class=\"table-light\"><a class=\"btn btn-danger btn-sm\" href=\"";
                // line 43
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("AdminSupprimerAccessoire", ["id" => twig_get_attribute($this->env, $this->source, $context["Accessoire"], "id", [], "any", false, false, false, 43)]), "html", null, true);
                echo "\">De-Commercialiser</a> <a class=\"btn btn-primary btn-sm\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("AdminModifierAccessoire", ["id" => twig_get_attribute($this->env, $this->source, $context["Accessoire"], "id", [], "any", false, false, false, 43)]), "html", null, true);
                echo "\">Modifier</a></td>
                            </tr>
                            ";
            }
            // line 46
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Accessoire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "                    </tbody>
                </table>
                <a class=\"btn btn-primary btn-sm\" href=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("AdminAjouterAccessoire");
        echo "\">Ajouter un Accessoire</a>
            </div>









            <div class=\"container\">
            <center><h3>Liste des Types d'echelle</h3></center>
                <!-- Tableau qui affiche les config -->
                <table id=\"ListeConfig\" class=\"table table-striped table-bordered table-sm \">
                    <thead>
                        <tr>
                            <!-- <th class=\"bg-warning\" style=\"color:white;\">Nom</th> -->
                            <th class=\"bg-warning\" style=\"color:white;\">Libelle</th>
                            <th class=\"bg-warning\" style=\"color:white;\">Prix</th>
                            <th class=\"bg-warning\" style=\"color:white;\">Commercialise</th>
                            <th class=\"bg-warning\" style=\"color:white;\">Action</th>
                            <!-- <th class=\"bg-warning\" style=\"color:white;\"></th> -->
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ListeTypeEchelle"]) || array_key_exists("ListeTypeEchelle", $context) ? $context["ListeTypeEchelle"] : (function () { throw new RuntimeError('Variable "ListeTypeEchelle" does not exist.', 75, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["Echelle"]) {
            // line 76
            echo "                        ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["Echelle"], "Commercialise", [], "any", false, false, false, 76), false))) {
                // line 77
                echo "                            <tr>
                                <td style=\"background-color:#ff7c7c\" class=\"table-light\">";
                // line 78
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Echelle"], "libelleTypeEchelle", [], "any", false, false, false, 78), "html", null, true);
                echo "</td>
                                <td style=\"background-color:#ff7c7c\" class=\"table-light\">";
                // line 79
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Echelle"], "prix", [], "any", false, false, false, 79), "html", null, true);
                echo "</td>
                                <td style=\"background-color:#ff7c7c\" class=\"table-light\">";
                // line 80
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["Echelle"], "Commercialise", [], "any", false, false, false, 80), true))) {
                    echo "Oui";
                }
                // line 81
                echo "                                ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["Echelle"], "Commercialise", [], "any", false, false, false, 81), false))) {
                    echo "Non";
                }
                // line 82
                echo "                                </td>
                                <td style=\"background-color:#ff7c7c\" class=\"table-light\"><a class=\"btn btn-success btn-sm\" href=\"";
                // line 83
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("AdminCommercialiseTypeEchelle", ["id" => twig_get_attribute($this->env, $this->source, $context["Echelle"], "id", [], "any", false, false, false, 83)]), "html", null, true);
                echo "\">Commercialiser</a> <a class=\"btn btn-primary btn-sm\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("AdminModifierAccessoire", ["id" => twig_get_attribute($this->env, $this->source, $context["Echelle"], "id", [], "any", false, false, false, 83)]), "html", null, true);
                echo "\">Modifier</a></td>
                            </tr>
                            ";
            } else {
                // line 86
                echo "                             <tr>
                                <td class=\"table-light\">";
                // line 87
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Echelle"], "libelleTypeEchelle", [], "any", false, false, false, 87), "html", null, true);
                echo "</td>
                                <td class=\"table-light\">";
                // line 88
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Echelle"], "prix", [], "any", false, false, false, 88), "html", null, true);
                echo "</td>
                                <td class=\"table-light\">";
                // line 89
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["Echelle"], "Commercialise", [], "any", false, false, false, 89), true))) {
                    echo "Oui";
                }
                // line 90
                echo "                                ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["Echelle"], "Commercialise", [], "any", false, false, false, 90), false))) {
                    echo "Non";
                }
                // line 91
                echo "                                </td>
                                <td class=\"table-light\"><a class=\"btn btn-danger btn-sm\" href=\"";
                // line 92
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("AdminSupprimerTypeEchelle", ["id" => twig_get_attribute($this->env, $this->source, $context["Echelle"], "id", [], "any", false, false, false, 92)]), "html", null, true);
                echo "\">De-Commercialiser</a> <a class=\"btn btn-primary btn-sm\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("AdminModifierTypeEchelle", ["id" => twig_get_attribute($this->env, $this->source, $context["Echelle"], "id", [], "any", false, false, false, 92)]), "html", null, true);
                echo "\">Modifier</a></td>
                            </tr>
                            ";
            }
            // line 95
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Echelle'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "                    </tbody>
                </table>
                <a class=\"btn btn-primary btn-sm\" href=\"";
        // line 98
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("AdminAjouterTypeEchelle");
        echo "\">Ajouter un Type d'echelle</a>
            </div>






            <div class=\"container\">
            <center><h3>Liste des Entrees</h3></center>
                <!-- Tableau qui affiche les config -->
                <table id=\"ListeConfig\" class=\"table table-striped table-bordered table-sm \">
                    <thead>
                        <tr>
                            <!-- <th class=\"bg-warning\" style=\"color:white;\">Nom</th> -->
                            <th class=\"bg-warning\" style=\"color:white;\">Libelle</th>
                            <th class=\"bg-warning\" style=\"color:white;\">Reference</th>
                            <th class=\"bg-warning\" style=\"color:white;\">Prix</th>
                            <th class=\"bg-warning\" style=\"color:white;\">Commercialise</th>
                            <th class=\"bg-warning\" style=\"color:white;\">Action</th>
                            <!-- <th class=\"bg-warning\" style=\"color:white;\"></th> -->
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 122
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ListeEntree"]) || array_key_exists("ListeEntree", $context) ? $context["ListeEntree"] : (function () { throw new RuntimeError('Variable "ListeEntree" does not exist.', 122, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["Entree"]) {
            // line 123
            echo "                        ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["Entree"], "Commercialise", [], "any", false, false, false, 123), false))) {
                // line 124
                echo "                            <tr>
                                <td style=\"background-color:#ff7c7c\" class=\"table-light\">";
                // line 125
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Entree"], "libelleEntree", [], "any", false, false, false, 125), "html", null, true);
                echo "</td>
                                <td style=\"background-color:#ff7c7c\" class=\"table-light\">";
                // line 126
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Entree"], "referenceEntree", [], "any", false, false, false, 126), "html", null, true);
                echo "</td>
                                <td style=\"background-color:#ff7c7c\" class=\"table-light\">";
                // line 127
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Entree"], "prixEntree", [], "any", false, false, false, 127), "html", null, true);
                echo "</td>
                                <td style=\"background-color:#ff7c7c\" class=\"table-light\">";
                // line 128
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["Entree"], "Commercialise", [], "any", false, false, false, 128), true))) {
                    echo "Oui";
                }
                // line 129
                echo "                                ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["Entree"], "Commercialise", [], "any", false, false, false, 129), false))) {
                    echo "Non";
                }
                // line 130
                echo "                                </td>
                                <td style=\"background-color:#ff7c7c\" class=\"table-light\"><a class=\"btn btn-success btn-sm\" href=\"";
                // line 131
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("AdminCommercialiseEntree", ["id" => twig_get_attribute($this->env, $this->source, $context["Entree"], "id", [], "any", false, false, false, 131)]), "html", null, true);
                echo "\">Commercialiser</a> <a class=\"btn btn-primary btn-sm\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("AdminModifierEntree", ["id" => twig_get_attribute($this->env, $this->source, $context["Entree"], "id", [], "any", false, false, false, 131)]), "html", null, true);
                echo "\">Modifier</a></td>
                            </tr>
                            ";
            } else {
                // line 134
                echo "                            <tr>
                                <td class=\"table-light\">";
                // line 135
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Entree"], "libelleEntree", [], "any", false, false, false, 135), "html", null, true);
                echo "</td>
                                <td class=\"table-light\">";
                // line 136
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Entree"], "referenceEntree", [], "any", false, false, false, 136), "html", null, true);
                echo "</td>
                                <td class=\"table-light\">";
                // line 137
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Entree"], "prixEntree", [], "any", false, false, false, 137), "html", null, true);
                echo "</td>
                                <td class=\"table-light\">";
                // line 138
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["Entree"], "Commercialise", [], "any", false, false, false, 138), true))) {
                    echo "Oui";
                }
                // line 139
                echo "                                ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["Entree"], "Commercialise", [], "any", false, false, false, 139), false))) {
                    echo "Non";
                }
                // line 140
                echo "                                </td>
                                <td class=\"table-light\"><a class=\"btn btn-danger btn-sm\" href=\"";
                // line 141
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("AdminSupprimerEntree", ["id" => twig_get_attribute($this->env, $this->source, $context["Entree"], "id", [], "any", false, false, false, 141)]), "html", null, true);
                echo "\">De-Commercialiser</a> <a class=\"btn btn-primary btn-sm\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("AdminModifierEntree", ["id" => twig_get_attribute($this->env, $this->source, $context["Entree"], "id", [], "any", false, false, false, 141)]), "html", null, true);
                echo "\">Modifier</a></td>
                            </tr>
                            ";
            }
            // line 144
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Entree'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 145
        echo "                    </tbody>
                </table>
                <a class=\"btn btn-primary btn-sm\" href=\"";
        // line 147
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("AdminAjouterEntree");
        echo "\">Ajouter une Entree</a>
            </div>





            <div class=\"container\">
            <center><h3>Liste des Sorties</h3></center>
                <!-- Tableau qui affiche les config -->
                <table id=\"ListeConfig\" class=\"table table-striped table-bordered table-sm \">
                    <thead>
                        <tr>
                            <!-- <th class=\"bg-warning\" style=\"color:white;\">Nom</th> -->
                            <th class=\"bg-warning\" style=\"color:white;\">Libelle</th>
                            <th class=\"bg-warning\" style=\"color:white;\">Reference</th>
                            <th class=\"bg-warning\" style=\"color:white;\">Prix</th>
                            <th class=\"bg-warning\" style=\"color:white;\">Commercialise</th>
                            <th class=\"bg-warning\" style=\"color:white;\">Action</th>
                            <!-- <th class=\"bg-warning\" style=\"color:white;\"></th> -->
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 170
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ListeSortie"]) || array_key_exists("ListeSortie", $context) ? $context["ListeSortie"] : (function () { throw new RuntimeError('Variable "ListeSortie" does not exist.', 170, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["Sortie"]) {
            // line 171
            echo "                        ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["Sortie"], "Commercialise", [], "any", false, false, false, 171), false))) {
                // line 172
                echo "                            <tr>
                                <td style=\"background-color:#ff7c7c\" class=\"table-light\">";
                // line 173
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Sortie"], "libelleSortie", [], "any", false, false, false, 173), "html", null, true);
                echo "</td>
                                <td style=\"background-color:#ff7c7c\" class=\"table-light\">";
                // line 174
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Sortie"], "referenceSortie", [], "any", false, false, false, 174), "html", null, true);
                echo "</td>
                                <td style=\"background-color:#ff7c7c\" class=\"table-light\">";
                // line 175
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Sortie"], "prixSortie", [], "any", false, false, false, 175), "html", null, true);
                echo "</td>
                                <td style=\"background-color:#ff7c7c\" class=\"table-light\">";
                // line 176
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["Sortie"], "Commercialise", [], "any", false, false, false, 176), true))) {
                    echo "Oui";
                }
                // line 177
                echo "                                ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["Sortie"], "Commercialise", [], "any", false, false, false, 177), false))) {
                    echo "Non";
                }
                // line 178
                echo "                                </td>
                                <td style=\"background-color:#ff7c7c\" class=\"table-light\"><a class=\"btn btn-success btn-sm\" href=\"";
                // line 179
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("AdminCommercialiseSortie", ["id" => twig_get_attribute($this->env, $this->source, $context["Sortie"], "id", [], "any", false, false, false, 179)]), "html", null, true);
                echo "\">Commercialiser</a> <a class=\"btn btn-primary btn-sm\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("AdminModifierSortie", ["id" => twig_get_attribute($this->env, $this->source, $context["Sortie"], "id", [], "any", false, false, false, 179)]), "html", null, true);
                echo "\">Modifier</a></td>
                            </tr>
                            ";
            } else {
                // line 182
                echo "                            <tr>
                                <td class=\"table-light\">";
                // line 183
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Sortie"], "libelleSortie", [], "any", false, false, false, 183), "html", null, true);
                echo "</td>
                                <td class=\"table-light\">";
                // line 184
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Sortie"], "referenceSortie", [], "any", false, false, false, 184), "html", null, true);
                echo "</td>
                                <td class=\"table-light\">";
                // line 185
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Sortie"], "prixSortie", [], "any", false, false, false, 185), "html", null, true);
                echo "</td>
                                <td class=\"table-light\">";
                // line 186
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["Sortie"], "Commercialise", [], "any", false, false, false, 186), true))) {
                    echo "Oui";
                }
                // line 187
                echo "                                ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["Sortie"], "Commercialise", [], "any", false, false, false, 187), false))) {
                    echo "Non";
                }
                // line 188
                echo "                                </td>
                                <td class=\"table-light\"><a class=\"btn btn-danger btn-sm\" href=\"";
                // line 189
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("AdminSupprimerSortie", ["id" => twig_get_attribute($this->env, $this->source, $context["Sortie"], "id", [], "any", false, false, false, 189)]), "html", null, true);
                echo "\">De-Commercialiser</a> <a class=\"btn btn-primary btn-sm\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("AdminModifierSortie", ["id" => twig_get_attribute($this->env, $this->source, $context["Sortie"], "id", [], "any", false, false, false, 189)]), "html", null, true);
                echo "\">Modifier</a></td>
                            </tr>
                            ";
            }
            // line 192
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Sortie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 193
        echo "                    </tbody>
                </table>
                <a class=\"btn btn-primary btn-sm\" href=\"";
        // line 195
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("AdminAjouterSortie");
        echo "\">Ajouter une Sortie</a>
            </div>
            <br>
            <br>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Admin/GestionAdminIndex.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  511 => 195,  507 => 193,  501 => 192,  493 => 189,  490 => 188,  485 => 187,  481 => 186,  477 => 185,  473 => 184,  469 => 183,  466 => 182,  458 => 179,  455 => 178,  450 => 177,  446 => 176,  442 => 175,  438 => 174,  434 => 173,  431 => 172,  428 => 171,  424 => 170,  398 => 147,  394 => 145,  388 => 144,  380 => 141,  377 => 140,  372 => 139,  368 => 138,  364 => 137,  360 => 136,  356 => 135,  353 => 134,  345 => 131,  342 => 130,  337 => 129,  333 => 128,  329 => 127,  325 => 126,  321 => 125,  318 => 124,  315 => 123,  311 => 122,  284 => 98,  280 => 96,  274 => 95,  266 => 92,  263 => 91,  258 => 90,  254 => 89,  250 => 88,  246 => 87,  243 => 86,  235 => 83,  232 => 82,  227 => 81,  223 => 80,  219 => 79,  215 => 78,  212 => 77,  209 => 76,  205 => 75,  176 => 49,  172 => 47,  166 => 46,  158 => 43,  155 => 42,  150 => 41,  146 => 40,  142 => 39,  138 => 38,  134 => 37,  131 => 36,  123 => 33,  120 => 32,  115 => 31,  111 => 30,  107 => 29,  103 => 28,  99 => 27,  96 => 26,  93 => 25,  89 => 24,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}


{% block body %}


    <div class=\"container\">
            <center><h3>Liste des Accessoires du Site</h3></center>
                <!-- Tableau qui affiche les config -->
                <table id=\"ListeConfig\" class=\"table table-striped table-bordered table-sm \">
                    <thead>
                        <tr>
                            <!-- <th class=\"bg-warning\" style=\"color:white;\">Nom</th> -->
                            <th class=\"bg-warning\" style=\"color:white;\">Nom</th>
                            <th class=\"bg-warning\" style=\"color:white;\">Reference</th>
                            <th class=\"bg-warning\" style=\"color:white;\">Prix</th>
                            <th class=\"bg-warning\" style=\"color:white;\">Commercialisé</th>
                            <th class=\"bg-warning\" style=\"color:white;\">Action</th>

                            <!-- <th class=\"bg-warning\" style=\"color:white;\"></th> -->
                        </tr>
                    </thead>
                    <tbody>
                        {% for Accessoire in listeAccessoire %}
                         {% if Accessoire.Commercialise == false %}
                            <tr>
                                <td style=\"background-color:#ff7c7c\" class=\"table-light\">{{ Accessoire.nomAccessoire }}</td>
                                <td style=\"background-color:#ff7c7c\" class=\"table-light\">{{ Accessoire.refAccessoire }}</td>
                                <td style=\"background-color:#ff7c7c\" class=\"table-light\">{{ Accessoire.prixAccessoire }}</td>
                                <td style=\"background-color:#ff7c7c\" class=\"table-light\">{% if Accessoire.Commercialise == true %}Oui{% endif %}
                                {% if Accessoire.Commercialise == false %}Non{% endif %}
                                </td>
                                <td style=\"background-color:#ff7c7c\" class=\"table-light\"><a class=\"btn btn-success btn-sm\" href=\"{{ path('AdminCommercialiseAccessoire', { 'id' : Accessoire.id }) }}\">Commercialiser</a> <a class=\"btn btn-primary btn-sm\" href=\"{{ path('AdminModifierAccessoire', { 'id' : Accessoire.id }) }}\">Modifier</a></td>
                            </tr>
                            {% else %}
                            <tr>
                                <td class=\"table-light\">{{ Accessoire.nomAccessoire }}</td>
                                <td class=\"table-light\">{{ Accessoire.refAccessoire }}</td>
                                <td class=\"table-light\">{{ Accessoire.prixAccessoire }}</td>
                                <td class=\"table-light\">{% if Accessoire.Commercialise == true %}Oui{% endif %}
                                {% if Accessoire.Commercialise == false %}Non{% endif %}
                                </td>
                                <td class=\"table-light\"><a class=\"btn btn-danger btn-sm\" href=\"{{ path('AdminSupprimerAccessoire', { 'id' : Accessoire.id }) }}\">De-Commercialiser</a> <a class=\"btn btn-primary btn-sm\" href=\"{{ path('AdminModifierAccessoire', { 'id' : Accessoire.id }) }}\">Modifier</a></td>
                            </tr>
                            {% endif %}
                        {% endfor %}
                    </tbody>
                </table>
                <a class=\"btn btn-primary btn-sm\" href=\"{{ path('AdminAjouterAccessoire') }}\">Ajouter un Accessoire</a>
            </div>









            <div class=\"container\">
            <center><h3>Liste des Types d'echelle</h3></center>
                <!-- Tableau qui affiche les config -->
                <table id=\"ListeConfig\" class=\"table table-striped table-bordered table-sm \">
                    <thead>
                        <tr>
                            <!-- <th class=\"bg-warning\" style=\"color:white;\">Nom</th> -->
                            <th class=\"bg-warning\" style=\"color:white;\">Libelle</th>
                            <th class=\"bg-warning\" style=\"color:white;\">Prix</th>
                            <th class=\"bg-warning\" style=\"color:white;\">Commercialise</th>
                            <th class=\"bg-warning\" style=\"color:white;\">Action</th>
                            <!-- <th class=\"bg-warning\" style=\"color:white;\"></th> -->
                        </tr>
                    </thead>
                    <tbody>
                        {% for Echelle in ListeTypeEchelle %}
                        {% if Echelle.Commercialise == false %}
                            <tr>
                                <td style=\"background-color:#ff7c7c\" class=\"table-light\">{{ Echelle.libelleTypeEchelle }}</td>
                                <td style=\"background-color:#ff7c7c\" class=\"table-light\">{{ Echelle.prix }}</td>
                                <td style=\"background-color:#ff7c7c\" class=\"table-light\">{% if Echelle.Commercialise == true %}Oui{% endif %}
                                {% if Echelle.Commercialise == false %}Non{% endif %}
                                </td>
                                <td style=\"background-color:#ff7c7c\" class=\"table-light\"><a class=\"btn btn-success btn-sm\" href=\"{{ path('AdminCommercialiseTypeEchelle', { 'id' : Echelle.id }) }}\">Commercialiser</a> <a class=\"btn btn-primary btn-sm\" href=\"{{ path('AdminModifierAccessoire', { 'id' : Echelle.id }) }}\">Modifier</a></td>
                            </tr>
                            {% else %}
                             <tr>
                                <td class=\"table-light\">{{ Echelle.libelleTypeEchelle }}</td>
                                <td class=\"table-light\">{{ Echelle.prix }}</td>
                                <td class=\"table-light\">{% if Echelle.Commercialise == true %}Oui{% endif %}
                                {% if Echelle.Commercialise == false %}Non{% endif %}
                                </td>
                                <td class=\"table-light\"><a class=\"btn btn-danger btn-sm\" href=\"{{ path('AdminSupprimerTypeEchelle', { 'id' : Echelle.id }) }}\">De-Commercialiser</a> <a class=\"btn btn-primary btn-sm\" href=\"{{ path('AdminModifierTypeEchelle', { 'id' : Echelle.id }) }}\">Modifier</a></td>
                            </tr>
                            {% endif %}
                        {% endfor %}
                    </tbody>
                </table>
                <a class=\"btn btn-primary btn-sm\" href=\"{{ path('AdminAjouterTypeEchelle') }}\">Ajouter un Type d'echelle</a>
            </div>






            <div class=\"container\">
            <center><h3>Liste des Entrees</h3></center>
                <!-- Tableau qui affiche les config -->
                <table id=\"ListeConfig\" class=\"table table-striped table-bordered table-sm \">
                    <thead>
                        <tr>
                            <!-- <th class=\"bg-warning\" style=\"color:white;\">Nom</th> -->
                            <th class=\"bg-warning\" style=\"color:white;\">Libelle</th>
                            <th class=\"bg-warning\" style=\"color:white;\">Reference</th>
                            <th class=\"bg-warning\" style=\"color:white;\">Prix</th>
                            <th class=\"bg-warning\" style=\"color:white;\">Commercialise</th>
                            <th class=\"bg-warning\" style=\"color:white;\">Action</th>
                            <!-- <th class=\"bg-warning\" style=\"color:white;\"></th> -->
                        </tr>
                    </thead>
                    <tbody>
                        {% for Entree in ListeEntree %}
                        {% if Entree.Commercialise == false %}
                            <tr>
                                <td style=\"background-color:#ff7c7c\" class=\"table-light\">{{ Entree.libelleEntree }}</td>
                                <td style=\"background-color:#ff7c7c\" class=\"table-light\">{{ Entree.referenceEntree }}</td>
                                <td style=\"background-color:#ff7c7c\" class=\"table-light\">{{ Entree.prixEntree }}</td>
                                <td style=\"background-color:#ff7c7c\" class=\"table-light\">{% if Entree.Commercialise == true %}Oui{% endif %}
                                {% if Entree.Commercialise == false %}Non{% endif %}
                                </td>
                                <td style=\"background-color:#ff7c7c\" class=\"table-light\"><a class=\"btn btn-success btn-sm\" href=\"{{ path('AdminCommercialiseEntree', { 'id' : Entree.id }) }}\">Commercialiser</a> <a class=\"btn btn-primary btn-sm\" href=\"{{ path('AdminModifierEntree', { 'id' : Entree.id }) }}\">Modifier</a></td>
                            </tr>
                            {% else %}
                            <tr>
                                <td class=\"table-light\">{{ Entree.libelleEntree }}</td>
                                <td class=\"table-light\">{{ Entree.referenceEntree }}</td>
                                <td class=\"table-light\">{{ Entree.prixEntree }}</td>
                                <td class=\"table-light\">{% if Entree.Commercialise == true %}Oui{% endif %}
                                {% if Entree.Commercialise == false %}Non{% endif %}
                                </td>
                                <td class=\"table-light\"><a class=\"btn btn-danger btn-sm\" href=\"{{ path('AdminSupprimerEntree', { 'id' : Entree.id }) }}\">De-Commercialiser</a> <a class=\"btn btn-primary btn-sm\" href=\"{{ path('AdminModifierEntree', { 'id' : Entree.id }) }}\">Modifier</a></td>
                            </tr>
                            {% endif %}
                        {% endfor %}
                    </tbody>
                </table>
                <a class=\"btn btn-primary btn-sm\" href=\"{{ path('AdminAjouterEntree') }}\">Ajouter une Entree</a>
            </div>





            <div class=\"container\">
            <center><h3>Liste des Sorties</h3></center>
                <!-- Tableau qui affiche les config -->
                <table id=\"ListeConfig\" class=\"table table-striped table-bordered table-sm \">
                    <thead>
                        <tr>
                            <!-- <th class=\"bg-warning\" style=\"color:white;\">Nom</th> -->
                            <th class=\"bg-warning\" style=\"color:white;\">Libelle</th>
                            <th class=\"bg-warning\" style=\"color:white;\">Reference</th>
                            <th class=\"bg-warning\" style=\"color:white;\">Prix</th>
                            <th class=\"bg-warning\" style=\"color:white;\">Commercialise</th>
                            <th class=\"bg-warning\" style=\"color:white;\">Action</th>
                            <!-- <th class=\"bg-warning\" style=\"color:white;\"></th> -->
                        </tr>
                    </thead>
                    <tbody>
                        {% for Sortie in ListeSortie %}
                        {% if Sortie.Commercialise == false %}
                            <tr>
                                <td style=\"background-color:#ff7c7c\" class=\"table-light\">{{ Sortie.libelleSortie }}</td>
                                <td style=\"background-color:#ff7c7c\" class=\"table-light\">{{ Sortie.referenceSortie }}</td>
                                <td style=\"background-color:#ff7c7c\" class=\"table-light\">{{ Sortie.prixSortie }}</td>
                                <td style=\"background-color:#ff7c7c\" class=\"table-light\">{% if Sortie.Commercialise == true %}Oui{% endif %}
                                {% if Sortie.Commercialise == false %}Non{% endif %}
                                </td>
                                <td style=\"background-color:#ff7c7c\" class=\"table-light\"><a class=\"btn btn-success btn-sm\" href=\"{{ path('AdminCommercialiseSortie', { 'id' : Sortie.id }) }}\">Commercialiser</a> <a class=\"btn btn-primary btn-sm\" href=\"{{ path('AdminModifierSortie', { 'id' : Sortie.id }) }}\">Modifier</a></td>
                            </tr>
                            {% else %}
                            <tr>
                                <td class=\"table-light\">{{ Sortie.libelleSortie }}</td>
                                <td class=\"table-light\">{{ Sortie.referenceSortie }}</td>
                                <td class=\"table-light\">{{ Sortie.prixSortie }}</td>
                                <td class=\"table-light\">{% if Sortie.Commercialise == true %}Oui{% endif %}
                                {% if Sortie.Commercialise == false %}Non{% endif %}
                                </td>
                                <td class=\"table-light\"><a class=\"btn btn-danger btn-sm\" href=\"{{ path('AdminSupprimerSortie', { 'id' : Sortie.id }) }}\">De-Commercialiser</a> <a class=\"btn btn-primary btn-sm\" href=\"{{ path('AdminModifierSortie', { 'id' : Sortie.id }) }}\">Modifier</a></td>
                            </tr>
                            {% endif %}
                        {% endfor %}
                    </tbody>
                </table>
                <a class=\"btn btn-primary btn-sm\" href=\"{{ path('AdminAjouterSortie') }}\">Ajouter une Sortie</a>
            </div>
            <br>
            <br>

{% endblock %}", "Admin/GestionAdminIndex.html.twig", "C:\\wamp64\\www\\Projet\\AmiHauteurApp\\templates\\Admin\\GestionAdminIndex.html.twig");
    }
}
