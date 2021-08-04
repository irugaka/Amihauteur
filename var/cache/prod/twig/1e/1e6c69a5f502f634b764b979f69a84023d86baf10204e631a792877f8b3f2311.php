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
class __TwigTemplate_058e51e74c2e52a9391cb8c26be316b7c17f5d446a59b7af17de67892cac6b06 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "Admin/GestionAdminIndex.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        $context['_seq'] = twig_ensure_traversable(($context["listeAccessoire"] ?? null));
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
        $context['_seq'] = twig_ensure_traversable(($context["ListeTypeEchelle"] ?? null));
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
        $context['_seq'] = twig_ensure_traversable(($context["ListeEntree"] ?? null));
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
        $context['_seq'] = twig_ensure_traversable(($context["ListeSortie"] ?? null));
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
        return array (  493 => 195,  489 => 193,  483 => 192,  475 => 189,  472 => 188,  467 => 187,  463 => 186,  459 => 185,  455 => 184,  451 => 183,  448 => 182,  440 => 179,  437 => 178,  432 => 177,  428 => 176,  424 => 175,  420 => 174,  416 => 173,  413 => 172,  410 => 171,  406 => 170,  380 => 147,  376 => 145,  370 => 144,  362 => 141,  359 => 140,  354 => 139,  350 => 138,  346 => 137,  342 => 136,  338 => 135,  335 => 134,  327 => 131,  324 => 130,  319 => 129,  315 => 128,  311 => 127,  307 => 126,  303 => 125,  300 => 124,  297 => 123,  293 => 122,  266 => 98,  262 => 96,  256 => 95,  248 => 92,  245 => 91,  240 => 90,  236 => 89,  232 => 88,  228 => 87,  225 => 86,  217 => 83,  214 => 82,  209 => 81,  205 => 80,  201 => 79,  197 => 78,  194 => 77,  191 => 76,  187 => 75,  158 => 49,  154 => 47,  148 => 46,  140 => 43,  137 => 42,  132 => 41,  128 => 40,  124 => 39,  120 => 38,  116 => 37,  113 => 36,  105 => 33,  102 => 32,  97 => 31,  93 => 30,  89 => 29,  85 => 28,  81 => 27,  78 => 26,  75 => 25,  71 => 24,  50 => 5,  46 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Admin/GestionAdminIndex.html.twig", "C:\\wamp64\\www\\Projet\\AmiHauteurApp\\templates\\Admin\\GestionAdminIndex.html.twig");
    }
}
