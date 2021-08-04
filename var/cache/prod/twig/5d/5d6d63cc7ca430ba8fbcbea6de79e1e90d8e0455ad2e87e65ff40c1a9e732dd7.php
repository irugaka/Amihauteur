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

/* ProgressionBar.html.twig */
class __TwigTemplate_cd7faf5dacdaa1a13bd08dfbae680d322aa701870bca89e5096bda447d0a5d75 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'progression' => [$this, 'block_progression'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('progression', $context, $blocks);
    }

    public function block_progression($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "
 <style>
#progression {
    width: 100%;
\tmargin: 0 auto;
\tpadding-bottom: 23px; /* taille de la margin top et de lataille de police de la description */
    -webkit-box-sizing: border-box;
\t-moz-box-sizing: border-box;
\tbox-sizing: border-box;
\toutline: none;
    font-family: sans-serif;
\ttext-align: center;
}
#progression > * {
\tbackground: #DEDEDE;
\tdisplay: inline-block;
\tvertical-align: middle;
}
#progression .fait + *, #progression .fait {
\tbackground: #ff7f18;
}
#progression .etape {
\tcolor: white;
\twidth: 40px;
\theight: 40px;
\tline-height: 40px;
\tfont-size: 24px;
\tborder-radius: 50%;
\t-moz-border-radius: 50%;
\t-webkit-border-radius: 50%;
\tposition: relative;
}
#progression .etape .desc {
\tcolor: grey;
\tposition: absolute;
\ttop: 100%;
\tmargin-top: 5px;
\tleft: 50%;
\tfont-size: 18px;
\tmargin-left: -75px;
\twidth: 150px;
\tline-height: 1;
}
#progression .fait .desc, #progression .fait + .etape .desc {
\tcolor: grey;
}
#progression .ligne {
\twidth: 100px;
\theight: 4px;
\tmargin: 0 3px;
}
</style>

";
        // line 55
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 55), "attributes", [], "any", false, false, false, 55), "get", [0 => "_route"], "method", false, false, false, 55), "ajout"))) {
            // line 56
            echo "        <div id=\"progression\">
\t<span class=\"etape fait\">
\t\t1<div class=\"desc\">Ajouter une configuration</div>
\t</span><span class=\"ligne\">
\t</span>
\t<span class=\"etape\">
\t\t2<div class=\"desc\">Choisir un type d'echelle</div>
\t</span><span class=\"ligne\">
\t</span><span class=\"etape\">
\t\t3<div class=\"desc\">Choix de la Hauteur</div>
\t</span><span class=\"ligne\">
\t</span><span class=\"etape\">
\t\t4<div class=\"desc\">Choix de l'Entree</div>
        </span><span class=\"ligne\">
\t</span><span class=\"etape\">
\t\t5<div class=\"desc\">Choix de la Sortie</div>
        </span><span class=\"ligne\">
\t</span><span class=\"etape\">
\t5<div class=\"desc\">Choix des fixations</div>
        </span><span class=\"ligne\">
\t</span><span class=\"etape\">
\t\t6<div class=\"desc\">Choix des Accessoire</div>
        </span><span class=\"ligne\"></span><span class=\"etape\">
\t\t7<div class=\"desc\">Generation du Devis</div>
        </span>
\t</span>
</div>
";
        }
        // line 84
        echo "    ";
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 84), "attributes", [], "any", false, false, false, 84), "get", [0 => "_route"], "method", false, false, false, 84), "ajoutEchelle"))) {
            // line 85
            echo "        <div id=\"progression\">
\t<span class=\"etape fait\">
\t\t1<div class=\"desc\"><a href=\"";
            // line 87
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajout", ["verification" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 87), "get", [0 => "valeurverification"], "method", false, false, false, 87)]), "html", null, true);
            echo "\">Ajouter une configuration</a></div>
\t</span><span class=\"ligne\">
\t</span>
\t<span class=\"etape fait\">
\t\t2<div class=\"desc\">Choisir un type d'echelle</div>
\t</span><span class=\"ligne\">
\t</span><span class=\"etape\">
\t\t3<div class=\"desc\">Choix de la Hauteur</div>
\t</span><span class=\"ligne\">
\t</span><span class=\"etape\">
\t\t4<div class=\"desc\">Choix de l'Entree</div>
        </span><span class=\"ligne\">
\t</span><span class=\"etape\">
\t\t5<div class=\"desc\">Choix de la Sortie</div>
        </span><span class=\"ligne\">
\t</span><span class=\"etape\">
\t5<div class=\"desc\">Choix des fixations</div>
        </span><span class=\"ligne\">
\t</span><span class=\"etape\">
\t\t6<div class=\"desc\">Choix des Accessoire</div>
        </span><span class=\"ligne\"></span><span class=\"etape\">
\t\t7<div class=\"desc\">Generation du Devis</div>
        </span>
\t</span>
</div>
";
        }
        // line 113
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 113), "attributes", [], "any", false, false, false, 113), "get", [0 => "_route"], "method", false, false, false, 113), "ChoixNorme"))) {
            // line 114
            $context["tab"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 114), "get", [0 => "tab"], "method", false, false, false, 114);
            // line 115
            echo "<div id=\"progression\">
\t<span class=\"etape fait\">
\t\t1<div class=\"desc\"><a href=\"";
            // line 117
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajout", ["verification" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 117), "get", [0 => "valeurverification"], "method", false, false, false, 117)]), "html", null, true);
            echo "\">Ajouter une configuration</a></div>
\t</span><span class=\"ligne\">
\t</span>
\t<span class=\"etape fait\">
\t\t2<div class=\"desc\"><a href=\"";
            // line 121
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajoutEchelle", ["id" => twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["tab"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null), "id", [], "any", false, false, false, 121)]), "html", null, true);
            echo "\">Choisir un type d'echelle</a></div>
\t</span><span class=\"ligne\">
\t</span><span class=\"etape\">
\t\t3<div class=\"desc\">Choix de la Hauteur</div>
\t</span><span class=\"ligne\">
\t</span><span class=\"etape\">
\t\t4<div class=\"desc\">Choix de l'Entree</div>
        </span><span class=\"ligne\">
\t</span><span class=\"etape\">
\t\t5<div class=\"desc\">Choix de la Sortie</div>
        </span><span class=\"ligne\">
\t</span><span class=\"etape\">
\t5<div class=\"desc\">Choix des fixations</div>
        </span><span class=\"ligne\">
\t</span><span class=\"etape\">
\t\t6<div class=\"desc\">Choix des Accessoire</div>
        </span><span class=\"ligne\"></span><span class=\"etape\">
\t\t7<div class=\"desc\">Generation du Devis</div>
        </span>
\t</span>
</div>
";
        }
        // line 143
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 143), "attributes", [], "any", false, false, false, 143), "get", [0 => "_route"], "method", false, false, false, 143), "ajoutHauteur"))) {
            // line 144
            $context["tab"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 144), "get", [0 => "tab"], "method", false, false, false, 144);
            // line 145
            echo "<div id=\"progression\">
\t<span class=\"etape fait\">
\t\t1<div class=\"desc\"><a href=\"";
            // line 147
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajout", ["verification" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 147), "get", [0 => "valeurverification"], "method", false, false, false, 147)]), "html", null, true);
            echo "\">Ajouter une configuration</a></div>
\t</span><span class=\"ligne\">
\t</span>
\t<span class=\"etape fait\">
\t\t2<div class=\"desc\"><a href=\"";
            // line 151
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajoutEchelle", ["id" => twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["tab"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[0] ?? null) : null), "id", [], "any", false, false, false, 151)]), "html", null, true);
            echo "\">Choisir un type d'echelle</a></div>
\t</span><span class=\"ligne\">
\t</span><span class=\"etape fait\">
\t\t3<div class=\"desc\">Choix de la Hauteur</div>
\t</span><span class=\"ligne\">
\t</span><span class=\"etape\">
\t\t4<div class=\"desc\">Choix de l'Entree</div>
        </span><span class=\"ligne\">
\t</span><span class=\"etape\">
\t\t5<div class=\"desc\">Choix de la Sortie</div>
        </span><span class=\"ligne\">
\t</span><span class=\"etape\">
\t5<div class=\"desc\">Choix des fixations</div>
        </span><span class=\"ligne\">
\t</span><span class=\"etape\">
\t\t6<div class=\"desc\">Choix des Accessoire</div>
        </span><span class=\"ligne\"></span><span class=\"etape\">
\t\t7<div class=\"desc\">Generation du Devis</div>
        </span>
\t</span>
</div>
";
        }
        // line 173
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 173), "attributes", [], "any", false, false, false, 173), "get", [0 => "_route"], "method", false, false, false, 173), "ajoutEntree"))) {
            // line 174
            $context["tab"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 174), "get", [0 => "tab"], "method", false, false, false, 174);
            // line 175
            echo "<div id=\"progression\">
\t<span class=\"etape fait\">
\t\t1<div class=\"desc\"><a href=\"";
            // line 177
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajout", ["verification" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 177), "get", [0 => "valeurverification"], "method", false, false, false, 177)]), "html", null, true);
            echo "\">Ajouter une configuration</a></div>
\t</span><span class=\"ligne\">
\t</span>
\t<span class=\"etape fait\">
\t\t2<div class=\"desc\"><a href=\"";
            // line 181
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajoutEchelle", ["id" => twig_get_attribute($this->env, $this->source, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["tab"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[0] ?? null) : null), "id", [], "any", false, false, false, 181)]), "html", null, true);
            echo "\">Choisir un type d'echelle</a></div>
\t</span><span class=\"ligne\">
\t</span><span class=\"etape fait\">
\t\t3<div class=\"desc\"><a href=\"";
            // line 184
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajoutHauteur", ["id" => twig_get_attribute($this->env, $this->source, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["tab"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[1] ?? null) : null), "id", [], "any", false, false, false, 184)]), "html", null, true);
            echo "\">Choix de la Hauteur</a></div>
\t</span><span class=\"ligne\">
\t</span><span class=\"etape fait\">
\t\t4<div class=\"desc\">Choix de l'Entree</div>
        </span><span class=\"ligne\">
\t</span><span class=\"etape\">
\t\t5<div class=\"desc\">Choix de la Sortie</div>
        </span><span class=\"ligne\">
\t</span><span class=\"etape\">
\t5<div class=\"desc\">Choix des fixations</div>
        </span><span class=\"ligne\">
\t</span><span class=\"etape\">
\t\t6<div class=\"desc\">Choix des Accessoire</div>
        </span><span class=\"ligne\"></span><span class=\"etape\">
\t\t7<div class=\"desc\">Generation du Devis</div>
        </span>
\t</span>
</div>
";
        }
        // line 203
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 203), "attributes", [], "any", false, false, false, 203), "get", [0 => "_route"], "method", false, false, false, 203), "ajoutSortie"))) {
            // line 204
            $context["tab"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 204), "get", [0 => "tab"], "method", false, false, false, 204);
            // line 205
            echo "<div id=\"progression\">
\t<span class=\"etape fait\">
\t\t1<div class=\"desc\"><a href=\"";
            // line 207
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajout", ["verification" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 207), "get", [0 => "valeurverification"], "method", false, false, false, 207)]), "html", null, true);
            echo "\">Ajouter une configuration</a></div>
\t</span><span class=\"ligne\">
\t</span>
\t<span class=\"etape fait\">
\t\t2<div class=\"desc\"><a href=\"";
            // line 211
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajoutEchelle", ["id" => twig_get_attribute($this->env, $this->source, (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["tab"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[0] ?? null) : null), "id", [], "any", false, false, false, 211)]), "html", null, true);
            echo "\">Choisir un type d'echelle</a></div>
\t</span><span class=\"ligne\">
\t</span><span class=\"etape fait\">
\t\t3<div class=\"desc\"><a href=\"";
            // line 214
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajoutHauteur", ["id" => twig_get_attribute($this->env, $this->source, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["tab"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[1] ?? null) : null), "id", [], "any", false, false, false, 214)]), "html", null, true);
            echo "\">Choix de la Hauteur</a></div>
\t</span><span class=\"ligne\">
\t</span><span class=\"etape fait\">
\t\t4<div class=\"desc\"><a href=\"";
            // line 217
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajoutEntree", ["id" => twig_get_attribute($this->env, $this->source, (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["tab"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[1] ?? null) : null), "id", [], "any", false, false, false, 217)]), "html", null, true);
            echo "\">Choix de l'Entree</a></div>
        </span><span class=\"ligne\">
\t</span><span class=\"etape fait\">
\t\t5<div class=\"desc\">Choix de la Sortie</div>
        </span><span class=\"ligne\">
\t</span><span class=\"etape\">
\t5<div class=\"desc\">Choix des fixations</div>
        </span><span class=\"ligne\">
\t</span><span class=\"etape\">
\t\t6<div class=\"desc\">Choix des Accessoire</div>
        </span><span class=\"ligne\"></span><span class=\"etape\">
\t\t7<div class=\"desc\">Generation du Devis</div>
        </span>
\t</span>
</div>
";
        }
        // line 233
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 233), "attributes", [], "any", false, false, false, 233), "get", [0 => "_route"], "method", false, false, false, 233), "ajoutFixation"))) {
            // line 234
            $context["tab"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 234), "get", [0 => "tab"], "method", false, false, false, 234);
            // line 235
            echo "<div id=\"progression\">
\t<span class=\"etape fait\">
\t\t1<div class=\"desc\"><a href=\"";
            // line 237
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajout", ["verification" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 237), "get", [0 => "valeurverification"], "method", false, false, false, 237)]), "html", null, true);
            echo "\">Ajouter une configuration</a></div>
\t</span><span class=\"ligne\">
\t</span>
\t<span class=\"etape fait\">
\t\t2<div class=\"desc\"><a href=\"";
            // line 241
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajoutEchelle", ["id" => twig_get_attribute($this->env, $this->source, (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["tab"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[0] ?? null) : null), "id", [], "any", false, false, false, 241)]), "html", null, true);
            echo "\">Choisir un type d'echelle</a></div>
\t</span><span class=\"ligne\">
\t</span><span class=\"etape fait\">
\t\t3<div class=\"desc\"><a href=\"";
            // line 244
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajoutHauteur", ["id" => twig_get_attribute($this->env, $this->source, (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["tab"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136[1] ?? null) : null), "id", [], "any", false, false, false, 244)]), "html", null, true);
            echo "\">Choix de la Hauteur</a></div>
\t</span><span class=\"ligne\">
\t</span><span class=\"etape fait\">
\t\t4<div class=\"desc\"><a href=\"";
            // line 247
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajoutEntree", ["id" => twig_get_attribute($this->env, $this->source, (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["tab"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386[1] ?? null) : null), "id", [], "any", false, false, false, 247)]), "html", null, true);
            echo "\">Choix de l'Entree</a></div>
        </span><span class=\"ligne\">
\t</span><span class=\"etape fait\">
\t\t5<div class=\"desc\"><a href=\"";
            // line 250
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajoutSortie", ["id" => twig_get_attribute($this->env, $this->source, (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = ($context["tab"] ?? null)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9[1] ?? null) : null), "id", [], "any", false, false, false, 250)]), "html", null, true);
            echo "\">Choix de la Sortie</a></div>
        </span><span class=\"ligne\">
\t</span><span class=\"etape fait\">
\t5<div class=\"desc\">Choix des fixations</div>
        </span><span class=\"ligne\">
\t</span><span class=\"etape\">
\t\t6<div class=\"desc\">Choix des Accessoire</div>
        </span><span class=\"ligne\"></span><span class=\"etape\">
\t\t7<div class=\"desc\">Generation du Devis</div>
        </span>
\t</span>
</div>
";
        }
        // line 263
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 263), "attributes", [], "any", false, false, false, 263), "get", [0 => "_route"], "method", false, false, false, 263), "accessoireAjout"))) {
            // line 264
            $context["tab"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 264), "get", [0 => "tab"], "method", false, false, false, 264);
            // line 265
            echo "<div id=\"progression\">
\t<span class=\"etape fait\">
\t\t1<div class=\"desc\"><a href=\"";
            // line 267
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajout", ["verification" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 267), "get", [0 => "valeurverification"], "method", false, false, false, 267)]), "html", null, true);
            echo "\">Ajouter une configuration</a></div>
\t</span><span class=\"ligne\">
\t</span>
\t<span class=\"etape fait\">
\t\t2<div class=\"desc\"><a href=\"";
            // line 271
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajoutEchelle", ["id" => twig_get_attribute($this->env, $this->source, (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = ($context["tab"] ?? null)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae[0] ?? null) : null), "id", [], "any", false, false, false, 271)]), "html", null, true);
            echo "\">Choisir un type d'echelle</a></div>
\t</span><span class=\"ligne\">
\t</span><span class=\"etape fait\">
\t\t3<div class=\"desc\"><a href=\"";
            // line 274
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajoutHauteur", ["id" => twig_get_attribute($this->env, $this->source, (($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = ($context["tab"] ?? null)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f[1] ?? null) : null), "id", [], "any", false, false, false, 274)]), "html", null, true);
            echo "\">Choix de la Hauteur</a></div>
\t</span><span class=\"ligne\">
\t</span><span class=\"etape fait\">
\t\t4<div class=\"desc\"><a href=\"";
            // line 277
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajoutEntree", ["id" => twig_get_attribute($this->env, $this->source, (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = ($context["tab"] ?? null)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40[1] ?? null) : null), "id", [], "any", false, false, false, 277)]), "html", null, true);
            echo "\">Choix de l'Entree</a></div>
        </span><span class=\"ligne\">
\t</span><span class=\"etape fait\">
\t\t5<div class=\"desc\"><a href=\"";
            // line 280
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajoutSortie", ["id" => twig_get_attribute($this->env, $this->source, (($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = ($context["tab"] ?? null)) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f[1] ?? null) : null), "id", [], "any", false, false, false, 280)]), "html", null, true);
            echo "\">Choix de la Sortie</a></div>
        </span><span class=\"ligne\">
\t</span><span class=\"etape fait\">
\t5<div class=\"desc\"><a href=\"";
            // line 283
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajoutFixation", ["id" => twig_get_attribute($this->env, $this->source, (($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = ($context["tab"] ?? null)) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760[1] ?? null) : null), "id", [], "any", false, false, false, 283)]), "html", null, true);
            echo "\">Choix des fixations</a></div>
        </span><span class=\"ligne\">
\t</span><span class=\"etape fait\">
\t\t6<div class=\"desc\">Choix des Accessoire</div>
        </span><span class=\"ligne\"></span><span class=\"etape\">
\t\t7<div class=\"desc\">Generation du Devis</div>
        </span>
\t</span>
</div>
";
        }
        // line 293
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 293), "attributes", [], "any", false, false, false, 293), "get", [0 => "_route"], "method", false, false, false, 293), "ajoutChangementVolee"))) {
            // line 294
            $context["tab"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 294), "get", [0 => "tab"], "method", false, false, false, 294);
            // line 295
            echo "<div id=\"progression\">
\t<span class=\"etape fait\">
\t\t1<div class=\"desc\"><a href=\"";
            // line 297
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajout", ["verification" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 297), "get", [0 => "valeurverification"], "method", false, false, false, 297)]), "html", null, true);
            echo "\">Ajouter une configuration</a></div>
\t</span><span class=\"ligne\">
\t</span>
\t<span class=\"etape fait\">
\t\t2<div class=\"desc\"><a href=\"";
            // line 301
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajoutEchelle", ["id" => twig_get_attribute($this->env, $this->source, (($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = ($context["tab"] ?? null)) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce[0] ?? null) : null), "id", [], "any", false, false, false, 301)]), "html", null, true);
            echo "\">Choisir un type d'echelle</a></div>
\t</span><span class=\"ligne\">
\t</span><span class=\"etape fait\">
\t\t3<div class=\"desc\"><a href=\"";
            // line 304
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajoutHauteur", ["id" => twig_get_attribute($this->env, $this->source, (($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = ($context["tab"] ?? null)) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b[1] ?? null) : null), "id", [], "any", false, false, false, 304)]), "html", null, true);
            echo "\">Choix de la Hauteur</a></div>
\t</span><span class=\"ligne\">
\t</span><span class=\"etape fait\">
\t\t4<div class=\"desc\"><a href=\"";
            // line 307
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajoutEntree", ["id" => twig_get_attribute($this->env, $this->source, (($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = ($context["tab"] ?? null)) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c[1] ?? null) : null), "id", [], "any", false, false, false, 307)]), "html", null, true);
            echo "\">Choix de l'Entree</a></div>
        </span><span class=\"ligne\">
\t</span><span class=\"etape fait\">
\t\t5<div class=\"desc\"><a href=\"";
            // line 310
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajoutSortie", ["id" => twig_get_attribute($this->env, $this->source, (($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = ($context["tab"] ?? null)) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972[1] ?? null) : null), "id", [], "any", false, false, false, 310)]), "html", null, true);
            echo "\">Choix de la Sortie</a></div>
        </span><span class=\"ligne\">
\t</span><span class=\"etape fait\">
\t5<div class=\"desc\"><a href=\"";
            // line 313
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajoutFixation", ["id" => twig_get_attribute($this->env, $this->source, (($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = ($context["tab"] ?? null)) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216[1] ?? null) : null), "id", [], "any", false, false, false, 313)]), "html", null, true);
            echo "\">Choix des fixations</a></div>
        </span><span class=\"ligne\">
\t</span><span class=\"etape fait\">
\t\t6<div class=\"desc\"><a href=\"";
            // line 316
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accessoireAjout", ["id" => twig_get_attribute($this->env, $this->source, (($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = ($context["tab"] ?? null)) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0[1] ?? null) : null), "id", [], "any", false, false, false, 316)]), "html", null, true);
            echo "\"> Choix des Accessoire</a></div>
        </span><span class=\"ligne\"></span><span class=\"etape\">
\t\t7<div class=\"desc\">Generation du Devis</div>
        </span>
\t</span>
</div>
";
        }
        // line 323
        if (((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 323), "attributes", [], "any", false, false, false, 323), "get", [0 => "_route"], "method", false, false, false, 323), "RegisterInvite")) && (0 === twig_compare(($context["verification"] ?? null), 2)))) {
            // line 324
            echo "<div id=\"progression\">
\t<span class=\"etape fait\">
\t\t1<div class=\"desc\">Ajouter une configuration</div>
\t</span><span class=\"ligne\">
\t</span>
\t<span class=\"etape fait\">
\t\t2<div class=\"desc\">Choisir un type d'echelle</div>
\t</span><span class=\"ligne\">
\t</span><span class=\"etape fait\">
\t\t3<div class=\"desc\">Choix de la Hauteur</div>
\t</span><span class=\"ligne\">
\t</span><span class=\"etape fait\">
\t\t4<div class=\"desc\">Choix de l'Entree</div>
        </span><span class=\"ligne\">
\t</span><span class=\"etape fait\">
\t\t5<div class=\"desc\">Choix de la Sortie</div>
        </span><span class=\"ligne\">
\t</span><span class=\"etape fait\">
\t5<div class=\"desc\">Choix des fixations</div>
        </span><span class=\"ligne\">
\t</span><span class=\"etape\">
\t\t6<div class=\"desc\">Choix des Accessoire</div>
        </span><span class=\"ligne\"></span><span class=\"etape fait\">
\t\t7<div class=\"desc\">Generation du Devis</div>
        </span>
\t</span>
</div>
";
        }
        // line 390
        echo "
";
    }

    public function getTemplateName()
    {
        return "ProgressionBar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  525 => 390,  495 => 324,  493 => 323,  483 => 316,  477 => 313,  471 => 310,  465 => 307,  459 => 304,  453 => 301,  446 => 297,  442 => 295,  440 => 294,  438 => 293,  425 => 283,  419 => 280,  413 => 277,  407 => 274,  401 => 271,  394 => 267,  390 => 265,  388 => 264,  386 => 263,  370 => 250,  364 => 247,  358 => 244,  352 => 241,  345 => 237,  341 => 235,  339 => 234,  337 => 233,  318 => 217,  312 => 214,  306 => 211,  299 => 207,  295 => 205,  293 => 204,  291 => 203,  269 => 184,  263 => 181,  256 => 177,  252 => 175,  250 => 174,  248 => 173,  223 => 151,  216 => 147,  212 => 145,  210 => 144,  208 => 143,  183 => 121,  176 => 117,  172 => 115,  170 => 114,  168 => 113,  139 => 87,  135 => 85,  132 => 84,  102 => 56,  100 => 55,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "ProgressionBar.html.twig", "C:\\wamp64\\www\\Projet\\AmiHauteurApp\\templates\\ProgressionBar.html.twig");
    }
}
