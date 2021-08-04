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
class __TwigTemplate_ff2d16debd645d19df96f604d4d5e6ab69e582af8ae0c454f66d5a9a1d538d25 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ProgressionBar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ProgressionBar.html.twig"));

        // line 1
        $this->displayBlock('progression', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_progression($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "progression"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "progression"));

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
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 55, $this->source); })()), "request", [], "any", false, false, false, 55), "attributes", [], "any", false, false, false, 55), "get", [0 => "_route"], "method", false, false, false, 55), "ajout"))) {
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
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 84, $this->source); })()), "request", [], "any", false, false, false, 84), "attributes", [], "any", false, false, false, 84), "get", [0 => "_route"], "method", false, false, false, 84), "ajoutEchelle"))) {
            // line 85
            echo "        <div id=\"progression\">
\t<span class=\"etape fait\">
\t\t1<div class=\"desc\"><a href=\"";
            // line 87
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajout", ["verification" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 87, $this->source); })()), "session", [], "any", false, false, false, 87), "get", [0 => "valeurverification"], "method", false, false, false, 87)]), "html", null, true);
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
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 113, $this->source); })()), "request", [], "any", false, false, false, 113), "attributes", [], "any", false, false, false, 113), "get", [0 => "_route"], "method", false, false, false, 113), "ChoixNorme"))) {
            // line 114
            $context["tab"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 114, $this->source); })()), "session", [], "any", false, false, false, 114), "get", [0 => "tab"], "method", false, false, false, 114);
            // line 115
            echo "<div id=\"progression\">
\t<span class=\"etape fait\">
\t\t1<div class=\"desc\"><a href=\"";
            // line 117
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajout", ["verification" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 117, $this->source); })()), "session", [], "any", false, false, false, 117), "get", [0 => "valeurverification"], "method", false, false, false, 117)]), "html", null, true);
            echo "\">Ajouter une configuration</a></div>
\t</span><span class=\"ligne\">
\t</span>
\t<span class=\"etape fait\">
\t\t2<div class=\"desc\"><a href=\"";
            // line 121
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajoutEchelle", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["tab"]) || array_key_exists("tab", $context) ? $context["tab"] : (function () { throw new RuntimeError('Variable "tab" does not exist.', 121, $this->source); })()), 0, [], "array", false, false, false, 121), "id", [], "any", false, false, false, 121)]), "html", null, true);
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
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 143, $this->source); })()), "request", [], "any", false, false, false, 143), "attributes", [], "any", false, false, false, 143), "get", [0 => "_route"], "method", false, false, false, 143), "ajoutHauteur"))) {
            // line 144
            $context["tab"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 144, $this->source); })()), "session", [], "any", false, false, false, 144), "get", [0 => "tab"], "method", false, false, false, 144);
            // line 145
            echo "<div id=\"progression\">
\t<span class=\"etape fait\">
\t\t1<div class=\"desc\"><a href=\"";
            // line 147
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajout", ["verification" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 147, $this->source); })()), "session", [], "any", false, false, false, 147), "get", [0 => "valeurverification"], "method", false, false, false, 147)]), "html", null, true);
            echo "\">Ajouter une configuration</a></div>
\t</span><span class=\"ligne\">
\t</span>
\t<span class=\"etape fait\">
\t\t2<div class=\"desc\"><a href=\"";
            // line 151
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajoutEchelle", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["tab"]) || array_key_exists("tab", $context) ? $context["tab"] : (function () { throw new RuntimeError('Variable "tab" does not exist.', 151, $this->source); })()), 0, [], "array", false, false, false, 151), "id", [], "any", false, false, false, 151)]), "html", null, true);
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
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 173, $this->source); })()), "request", [], "any", false, false, false, 173), "attributes", [], "any", false, false, false, 173), "get", [0 => "_route"], "method", false, false, false, 173), "ajoutEntree"))) {
            // line 174
            $context["tab"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 174, $this->source); })()), "session", [], "any", false, false, false, 174), "get", [0 => "tab"], "method", false, false, false, 174);
            // line 175
            echo "<div id=\"progression\">
\t<span class=\"etape fait\">
\t\t1<div class=\"desc\"><a href=\"";
            // line 177
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajout", ["verification" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 177, $this->source); })()), "session", [], "any", false, false, false, 177), "get", [0 => "valeurverification"], "method", false, false, false, 177)]), "html", null, true);
            echo "\">Ajouter une configuration</a></div>
\t</span><span class=\"ligne\">
\t</span>
\t<span class=\"etape fait\">
\t\t2<div class=\"desc\"><a href=\"";
            // line 181
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajoutEchelle", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["tab"]) || array_key_exists("tab", $context) ? $context["tab"] : (function () { throw new RuntimeError('Variable "tab" does not exist.', 181, $this->source); })()), 0, [], "array", false, false, false, 181), "id", [], "any", false, false, false, 181)]), "html", null, true);
            echo "\">Choisir un type d'echelle</a></div>
\t</span><span class=\"ligne\">
\t</span><span class=\"etape fait\">
\t\t3<div class=\"desc\"><a href=\"";
            // line 184
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajoutHauteur", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["tab"]) || array_key_exists("tab", $context) ? $context["tab"] : (function () { throw new RuntimeError('Variable "tab" does not exist.', 184, $this->source); })()), 1, [], "array", false, false, false, 184), "id", [], "any", false, false, false, 184)]), "html", null, true);
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
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 203, $this->source); })()), "request", [], "any", false, false, false, 203), "attributes", [], "any", false, false, false, 203), "get", [0 => "_route"], "method", false, false, false, 203), "ajoutSortie"))) {
            // line 204
            $context["tab"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 204, $this->source); })()), "session", [], "any", false, false, false, 204), "get", [0 => "tab"], "method", false, false, false, 204);
            // line 205
            echo "<div id=\"progression\">
\t<span class=\"etape fait\">
\t\t1<div class=\"desc\"><a href=\"";
            // line 207
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajout", ["verification" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 207, $this->source); })()), "session", [], "any", false, false, false, 207), "get", [0 => "valeurverification"], "method", false, false, false, 207)]), "html", null, true);
            echo "\">Ajouter une configuration</a></div>
\t</span><span class=\"ligne\">
\t</span>
\t<span class=\"etape fait\">
\t\t2<div class=\"desc\"><a href=\"";
            // line 211
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajoutEchelle", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["tab"]) || array_key_exists("tab", $context) ? $context["tab"] : (function () { throw new RuntimeError('Variable "tab" does not exist.', 211, $this->source); })()), 0, [], "array", false, false, false, 211), "id", [], "any", false, false, false, 211)]), "html", null, true);
            echo "\">Choisir un type d'echelle</a></div>
\t</span><span class=\"ligne\">
\t</span><span class=\"etape fait\">
\t\t3<div class=\"desc\"><a href=\"";
            // line 214
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajoutHauteur", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["tab"]) || array_key_exists("tab", $context) ? $context["tab"] : (function () { throw new RuntimeError('Variable "tab" does not exist.', 214, $this->source); })()), 1, [], "array", false, false, false, 214), "id", [], "any", false, false, false, 214)]), "html", null, true);
            echo "\">Choix de la Hauteur</a></div>
\t</span><span class=\"ligne\">
\t</span><span class=\"etape fait\">
\t\t4<div class=\"desc\"><a href=\"";
            // line 217
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajoutEntree", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["tab"]) || array_key_exists("tab", $context) ? $context["tab"] : (function () { throw new RuntimeError('Variable "tab" does not exist.', 217, $this->source); })()), 1, [], "array", false, false, false, 217), "id", [], "any", false, false, false, 217)]), "html", null, true);
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
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 233, $this->source); })()), "request", [], "any", false, false, false, 233), "attributes", [], "any", false, false, false, 233), "get", [0 => "_route"], "method", false, false, false, 233), "ajoutFixation"))) {
            // line 234
            $context["tab"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 234, $this->source); })()), "session", [], "any", false, false, false, 234), "get", [0 => "tab"], "method", false, false, false, 234);
            // line 235
            echo "<div id=\"progression\">
\t<span class=\"etape fait\">
\t\t1<div class=\"desc\"><a href=\"";
            // line 237
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajout", ["verification" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 237, $this->source); })()), "session", [], "any", false, false, false, 237), "get", [0 => "valeurverification"], "method", false, false, false, 237)]), "html", null, true);
            echo "\">Ajouter une configuration</a></div>
\t</span><span class=\"ligne\">
\t</span>
\t<span class=\"etape fait\">
\t\t2<div class=\"desc\"><a href=\"";
            // line 241
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajoutEchelle", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["tab"]) || array_key_exists("tab", $context) ? $context["tab"] : (function () { throw new RuntimeError('Variable "tab" does not exist.', 241, $this->source); })()), 0, [], "array", false, false, false, 241), "id", [], "any", false, false, false, 241)]), "html", null, true);
            echo "\">Choisir un type d'echelle</a></div>
\t</span><span class=\"ligne\">
\t</span><span class=\"etape fait\">
\t\t3<div class=\"desc\"><a href=\"";
            // line 244
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajoutHauteur", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["tab"]) || array_key_exists("tab", $context) ? $context["tab"] : (function () { throw new RuntimeError('Variable "tab" does not exist.', 244, $this->source); })()), 1, [], "array", false, false, false, 244), "id", [], "any", false, false, false, 244)]), "html", null, true);
            echo "\">Choix de la Hauteur</a></div>
\t</span><span class=\"ligne\">
\t</span><span class=\"etape fait\">
\t\t4<div class=\"desc\"><a href=\"";
            // line 247
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajoutEntree", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["tab"]) || array_key_exists("tab", $context) ? $context["tab"] : (function () { throw new RuntimeError('Variable "tab" does not exist.', 247, $this->source); })()), 1, [], "array", false, false, false, 247), "id", [], "any", false, false, false, 247)]), "html", null, true);
            echo "\">Choix de l'Entree</a></div>
        </span><span class=\"ligne\">
\t</span><span class=\"etape fait\">
\t\t5<div class=\"desc\"><a href=\"";
            // line 250
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajoutSortie", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["tab"]) || array_key_exists("tab", $context) ? $context["tab"] : (function () { throw new RuntimeError('Variable "tab" does not exist.', 250, $this->source); })()), 1, [], "array", false, false, false, 250), "id", [], "any", false, false, false, 250)]), "html", null, true);
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
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 263, $this->source); })()), "request", [], "any", false, false, false, 263), "attributes", [], "any", false, false, false, 263), "get", [0 => "_route"], "method", false, false, false, 263), "accessoireAjout"))) {
            // line 264
            $context["tab"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 264, $this->source); })()), "session", [], "any", false, false, false, 264), "get", [0 => "tab"], "method", false, false, false, 264);
            // line 265
            echo "<div id=\"progression\">
\t<span class=\"etape fait\">
\t\t1<div class=\"desc\"><a href=\"";
            // line 267
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajout", ["verification" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 267, $this->source); })()), "session", [], "any", false, false, false, 267), "get", [0 => "valeurverification"], "method", false, false, false, 267)]), "html", null, true);
            echo "\">Ajouter une configuration</a></div>
\t</span><span class=\"ligne\">
\t</span>
\t<span class=\"etape fait\">
\t\t2<div class=\"desc\"><a href=\"";
            // line 271
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajoutEchelle", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["tab"]) || array_key_exists("tab", $context) ? $context["tab"] : (function () { throw new RuntimeError('Variable "tab" does not exist.', 271, $this->source); })()), 0, [], "array", false, false, false, 271), "id", [], "any", false, false, false, 271)]), "html", null, true);
            echo "\">Choisir un type d'echelle</a></div>
\t</span><span class=\"ligne\">
\t</span><span class=\"etape fait\">
\t\t3<div class=\"desc\"><a href=\"";
            // line 274
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajoutHauteur", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["tab"]) || array_key_exists("tab", $context) ? $context["tab"] : (function () { throw new RuntimeError('Variable "tab" does not exist.', 274, $this->source); })()), 1, [], "array", false, false, false, 274), "id", [], "any", false, false, false, 274)]), "html", null, true);
            echo "\">Choix de la Hauteur</a></div>
\t</span><span class=\"ligne\">
\t</span><span class=\"etape fait\">
\t\t4<div class=\"desc\"><a href=\"";
            // line 277
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajoutEntree", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["tab"]) || array_key_exists("tab", $context) ? $context["tab"] : (function () { throw new RuntimeError('Variable "tab" does not exist.', 277, $this->source); })()), 1, [], "array", false, false, false, 277), "id", [], "any", false, false, false, 277)]), "html", null, true);
            echo "\">Choix de l'Entree</a></div>
        </span><span class=\"ligne\">
\t</span><span class=\"etape fait\">
\t\t5<div class=\"desc\"><a href=\"";
            // line 280
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajoutSortie", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["tab"]) || array_key_exists("tab", $context) ? $context["tab"] : (function () { throw new RuntimeError('Variable "tab" does not exist.', 280, $this->source); })()), 1, [], "array", false, false, false, 280), "id", [], "any", false, false, false, 280)]), "html", null, true);
            echo "\">Choix de la Sortie</a></div>
        </span><span class=\"ligne\">
\t</span><span class=\"etape fait\">
\t5<div class=\"desc\"><a href=\"";
            // line 283
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajoutFixation", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["tab"]) || array_key_exists("tab", $context) ? $context["tab"] : (function () { throw new RuntimeError('Variable "tab" does not exist.', 283, $this->source); })()), 1, [], "array", false, false, false, 283), "id", [], "any", false, false, false, 283)]), "html", null, true);
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
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 293, $this->source); })()), "request", [], "any", false, false, false, 293), "attributes", [], "any", false, false, false, 293), "get", [0 => "_route"], "method", false, false, false, 293), "ajoutChangementVolee"))) {
            // line 294
            $context["tab"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 294, $this->source); })()), "session", [], "any", false, false, false, 294), "get", [0 => "tab"], "method", false, false, false, 294);
            // line 295
            echo "<div id=\"progression\">
\t<span class=\"etape fait\">
\t\t1<div class=\"desc\"><a href=\"";
            // line 297
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajout", ["verification" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 297, $this->source); })()), "session", [], "any", false, false, false, 297), "get", [0 => "valeurverification"], "method", false, false, false, 297)]), "html", null, true);
            echo "\">Ajouter une configuration</a></div>
\t</span><span class=\"ligne\">
\t</span>
\t<span class=\"etape fait\">
\t\t2<div class=\"desc\"><a href=\"";
            // line 301
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajoutEchelle", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["tab"]) || array_key_exists("tab", $context) ? $context["tab"] : (function () { throw new RuntimeError('Variable "tab" does not exist.', 301, $this->source); })()), 0, [], "array", false, false, false, 301), "id", [], "any", false, false, false, 301)]), "html", null, true);
            echo "\">Choisir un type d'echelle</a></div>
\t</span><span class=\"ligne\">
\t</span><span class=\"etape fait\">
\t\t3<div class=\"desc\"><a href=\"";
            // line 304
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajoutHauteur", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["tab"]) || array_key_exists("tab", $context) ? $context["tab"] : (function () { throw new RuntimeError('Variable "tab" does not exist.', 304, $this->source); })()), 1, [], "array", false, false, false, 304), "id", [], "any", false, false, false, 304)]), "html", null, true);
            echo "\">Choix de la Hauteur</a></div>
\t</span><span class=\"ligne\">
\t</span><span class=\"etape fait\">
\t\t4<div class=\"desc\"><a href=\"";
            // line 307
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajoutEntree", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["tab"]) || array_key_exists("tab", $context) ? $context["tab"] : (function () { throw new RuntimeError('Variable "tab" does not exist.', 307, $this->source); })()), 1, [], "array", false, false, false, 307), "id", [], "any", false, false, false, 307)]), "html", null, true);
            echo "\">Choix de l'Entree</a></div>
        </span><span class=\"ligne\">
\t</span><span class=\"etape fait\">
\t\t5<div class=\"desc\"><a href=\"";
            // line 310
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajoutSortie", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["tab"]) || array_key_exists("tab", $context) ? $context["tab"] : (function () { throw new RuntimeError('Variable "tab" does not exist.', 310, $this->source); })()), 1, [], "array", false, false, false, 310), "id", [], "any", false, false, false, 310)]), "html", null, true);
            echo "\">Choix de la Sortie</a></div>
        </span><span class=\"ligne\">
\t</span><span class=\"etape fait\">
\t5<div class=\"desc\"><a href=\"";
            // line 313
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajoutFixation", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["tab"]) || array_key_exists("tab", $context) ? $context["tab"] : (function () { throw new RuntimeError('Variable "tab" does not exist.', 313, $this->source); })()), 1, [], "array", false, false, false, 313), "id", [], "any", false, false, false, 313)]), "html", null, true);
            echo "\">Choix des fixations</a></div>
        </span><span class=\"ligne\">
\t</span><span class=\"etape fait\">
\t\t6<div class=\"desc\"><a href=\"";
            // line 316
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accessoireAjout", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["tab"]) || array_key_exists("tab", $context) ? $context["tab"] : (function () { throw new RuntimeError('Variable "tab" does not exist.', 316, $this->source); })()), 1, [], "array", false, false, false, 316), "id", [], "any", false, false, false, 316)]), "html", null, true);
            echo "\"> Choix des Accessoire</a></div>
        </span><span class=\"ligne\"></span><span class=\"etape\">
\t\t7<div class=\"desc\">Generation du Devis</div>
        </span>
\t</span>
</div>
";
        }
        // line 323
        if (((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 323, $this->source); })()), "request", [], "any", false, false, false, 323), "attributes", [], "any", false, false, false, 323), "get", [0 => "_route"], "method", false, false, false, 323), "RegisterInvite")) && (0 === twig_compare((isset($context["verification"]) || array_key_exists("verification", $context) ? $context["verification"] : (function () { throw new RuntimeError('Variable "verification" does not exist.', 323, $this->source); })()), 2)))) {
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "ProgressionBar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  543 => 390,  513 => 324,  511 => 323,  501 => 316,  495 => 313,  489 => 310,  483 => 307,  477 => 304,  471 => 301,  464 => 297,  460 => 295,  458 => 294,  456 => 293,  443 => 283,  437 => 280,  431 => 277,  425 => 274,  419 => 271,  412 => 267,  408 => 265,  406 => 264,  404 => 263,  388 => 250,  382 => 247,  376 => 244,  370 => 241,  363 => 237,  359 => 235,  357 => 234,  355 => 233,  336 => 217,  330 => 214,  324 => 211,  317 => 207,  313 => 205,  311 => 204,  309 => 203,  287 => 184,  281 => 181,  274 => 177,  270 => 175,  268 => 174,  266 => 173,  241 => 151,  234 => 147,  230 => 145,  228 => 144,  226 => 143,  201 => 121,  194 => 117,  190 => 115,  188 => 114,  186 => 113,  157 => 87,  153 => 85,  150 => 84,  120 => 56,  118 => 55,  63 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block progression %}

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

{% if app.request.attributes.get('_route') == 'ajout' %}
        <div id=\"progression\">
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
{% endif %}
    {% if app.request.attributes.get('_route') == 'ajoutEchelle' %}
        <div id=\"progression\">
\t<span class=\"etape fait\">
\t\t1<div class=\"desc\"><a href=\"{{ path('ajout', { 'verification' : app.session.get('valeurverification') }) }}\">Ajouter une configuration</a></div>
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
{% endif %}
{% if app.request.attributes.get('_route') == 'ChoixNorme' %}
{% set tab = app.session.get('tab') %}
<div id=\"progression\">
\t<span class=\"etape fait\">
\t\t1<div class=\"desc\"><a href=\"{{ path('ajout', { 'verification' : app.session.get('valeurverification') }) }}\">Ajouter une configuration</a></div>
\t</span><span class=\"ligne\">
\t</span>
\t<span class=\"etape fait\">
\t\t2<div class=\"desc\"><a href=\"{{ path('ajoutEchelle', {id : tab[0].id }) }}\">Choisir un type d'echelle</a></div>
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
{% endif %}
{% if app.request.attributes.get('_route') == 'ajoutHauteur' %}
{% set tab = app.session.get('tab') %}
<div id=\"progression\">
\t<span class=\"etape fait\">
\t\t1<div class=\"desc\"><a href=\"{{ path('ajout', { 'verification' : app.session.get('valeurverification') }) }}\">Ajouter une configuration</a></div>
\t</span><span class=\"ligne\">
\t</span>
\t<span class=\"etape fait\">
\t\t2<div class=\"desc\"><a href=\"{{ path('ajoutEchelle', {id : tab[0].id }) }}\">Choisir un type d'echelle</a></div>
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
{% endif %}
{% if app.request.attributes.get('_route') == 'ajoutEntree' %}
{% set tab = app.session.get('tab') %}
<div id=\"progression\">
\t<span class=\"etape fait\">
\t\t1<div class=\"desc\"><a href=\"{{ path('ajout', { 'verification' : app.session.get('valeurverification') }) }}\">Ajouter une configuration</a></div>
\t</span><span class=\"ligne\">
\t</span>
\t<span class=\"etape fait\">
\t\t2<div class=\"desc\"><a href=\"{{ path('ajoutEchelle', {id : tab[0].id }) }}\">Choisir un type d'echelle</a></div>
\t</span><span class=\"ligne\">
\t</span><span class=\"etape fait\">
\t\t3<div class=\"desc\"><a href=\"{{ path('ajoutHauteur', {id : tab[1].id }) }}\">Choix de la Hauteur</a></div>
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
{% endif %}
{% if app.request.attributes.get('_route') == 'ajoutSortie' %}
{% set tab = app.session.get('tab') %}
<div id=\"progression\">
\t<span class=\"etape fait\">
\t\t1<div class=\"desc\"><a href=\"{{ path('ajout', { 'verification' : app.session.get('valeurverification') }) }}\">Ajouter une configuration</a></div>
\t</span><span class=\"ligne\">
\t</span>
\t<span class=\"etape fait\">
\t\t2<div class=\"desc\"><a href=\"{{ path('ajoutEchelle', {id : tab[0].id }) }}\">Choisir un type d'echelle</a></div>
\t</span><span class=\"ligne\">
\t</span><span class=\"etape fait\">
\t\t3<div class=\"desc\"><a href=\"{{ path('ajoutHauteur', {id : tab[1].id }) }}\">Choix de la Hauteur</a></div>
\t</span><span class=\"ligne\">
\t</span><span class=\"etape fait\">
\t\t4<div class=\"desc\"><a href=\"{{ path('ajoutEntree', {id : tab[1].id }) }}\">Choix de l'Entree</a></div>
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
{% endif %}
{% if app.request.attributes.get('_route') == 'ajoutFixation' %}
{% set tab = app.session.get('tab') %}
<div id=\"progression\">
\t<span class=\"etape fait\">
\t\t1<div class=\"desc\"><a href=\"{{ path('ajout', { 'verification' : app.session.get('valeurverification') }) }}\">Ajouter une configuration</a></div>
\t</span><span class=\"ligne\">
\t</span>
\t<span class=\"etape fait\">
\t\t2<div class=\"desc\"><a href=\"{{ path('ajoutEchelle', {id : tab[0].id }) }}\">Choisir un type d'echelle</a></div>
\t</span><span class=\"ligne\">
\t</span><span class=\"etape fait\">
\t\t3<div class=\"desc\"><a href=\"{{ path('ajoutHauteur', {id : tab[1].id }) }}\">Choix de la Hauteur</a></div>
\t</span><span class=\"ligne\">
\t</span><span class=\"etape fait\">
\t\t4<div class=\"desc\"><a href=\"{{ path('ajoutEntree', {id : tab[1].id }) }}\">Choix de l'Entree</a></div>
        </span><span class=\"ligne\">
\t</span><span class=\"etape fait\">
\t\t5<div class=\"desc\"><a href=\"{{ path('ajoutSortie', {id : tab[1].id }) }}\">Choix de la Sortie</a></div>
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
{% endif %}
{% if app.request.attributes.get('_route') == 'accessoireAjout' %}
{% set tab = app.session.get('tab') %}
<div id=\"progression\">
\t<span class=\"etape fait\">
\t\t1<div class=\"desc\"><a href=\"{{ path('ajout', { 'verification' : app.session.get('valeurverification') }) }}\">Ajouter une configuration</a></div>
\t</span><span class=\"ligne\">
\t</span>
\t<span class=\"etape fait\">
\t\t2<div class=\"desc\"><a href=\"{{ path('ajoutEchelle', {id : tab[0].id }) }}\">Choisir un type d'echelle</a></div>
\t</span><span class=\"ligne\">
\t</span><span class=\"etape fait\">
\t\t3<div class=\"desc\"><a href=\"{{ path('ajoutHauteur', {id : tab[1].id }) }}\">Choix de la Hauteur</a></div>
\t</span><span class=\"ligne\">
\t</span><span class=\"etape fait\">
\t\t4<div class=\"desc\"><a href=\"{{ path('ajoutEntree', {id : tab[1].id }) }}\">Choix de l'Entree</a></div>
        </span><span class=\"ligne\">
\t</span><span class=\"etape fait\">
\t\t5<div class=\"desc\"><a href=\"{{ path('ajoutSortie', {id : tab[1].id }) }}\">Choix de la Sortie</a></div>
        </span><span class=\"ligne\">
\t</span><span class=\"etape fait\">
\t5<div class=\"desc\"><a href=\"{{ path('ajoutFixation', {id : tab[1].id }) }}\">Choix des fixations</a></div>
        </span><span class=\"ligne\">
\t</span><span class=\"etape fait\">
\t\t6<div class=\"desc\">Choix des Accessoire</div>
        </span><span class=\"ligne\"></span><span class=\"etape\">
\t\t7<div class=\"desc\">Generation du Devis</div>
        </span>
\t</span>
</div>
{% endif %}
{% if app.request.attributes.get('_route') == 'ajoutChangementVolee' %}
{% set tab = app.session.get('tab') %}
<div id=\"progression\">
\t<span class=\"etape fait\">
\t\t1<div class=\"desc\"><a href=\"{{ path('ajout', { 'verification' : app.session.get('valeurverification') }) }}\">Ajouter une configuration</a></div>
\t</span><span class=\"ligne\">
\t</span>
\t<span class=\"etape fait\">
\t\t2<div class=\"desc\"><a href=\"{{ path('ajoutEchelle', {id : tab[0].id }) }}\">Choisir un type d'echelle</a></div>
\t</span><span class=\"ligne\">
\t</span><span class=\"etape fait\">
\t\t3<div class=\"desc\"><a href=\"{{ path('ajoutHauteur', {id : tab[1].id }) }}\">Choix de la Hauteur</a></div>
\t</span><span class=\"ligne\">
\t</span><span class=\"etape fait\">
\t\t4<div class=\"desc\"><a href=\"{{ path('ajoutEntree', {id : tab[1].id }) }}\">Choix de l'Entree</a></div>
        </span><span class=\"ligne\">
\t</span><span class=\"etape fait\">
\t\t5<div class=\"desc\"><a href=\"{{ path('ajoutSortie', {id : tab[1].id }) }}\">Choix de la Sortie</a></div>
        </span><span class=\"ligne\">
\t</span><span class=\"etape fait\">
\t5<div class=\"desc\"><a href=\"{{ path('ajoutFixation', {id : tab[1].id }) }}\">Choix des fixations</a></div>
        </span><span class=\"ligne\">
\t</span><span class=\"etape fait\">
\t\t6<div class=\"desc\"><a href=\"{{ path('accessoireAjout', {id : tab[1].id }) }}\"> Choix des Accessoire</a></div>
        </span><span class=\"ligne\"></span><span class=\"etape\">
\t\t7<div class=\"desc\">Generation du Devis</div>
        </span>
\t</span>
</div>
{% endif %}
{% if app.request.attributes.get('_route') == 'RegisterInvite' and verification == 2 %}
<div id=\"progression\">
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
{% endif %}
{# {% autoescape false %} 
{% if app.request.attributes.get('_route') == 'ajout' %}
{% set attr = Progression(1) %}
{{ attr|raw }}
{% endif %}
{% if app.request.attributes.get('_route') == 'ajoutEchelle' %}
{% set attr = Progression(2) %}
{{ attr|raw }}
{% endif %}
{% if app.request.attributes.get('_route') == 'ChoixNorme' %}
{% set attr = Progression(3) %}
{{ attr|raw }}
{% endif %}
{% if app.request.attributes.get('_route') == 'ajoutHauteur' %}
{% set attr = Progression(4) %}
{{ attr|raw }}
{% endif %}
{% if app.request.attributes.get('_route') == 'ajoutEntree' %}
{% set attr = Progression(5) %}
{{ attr|raw }}
{% endif %}
{% if app.request.attributes.get('_route') == 'ajoutSortie' %}
{% set attr = Progression(6) %}
{{ attr|raw }}
{% endif %}
{% if app.request.attributes.get('_route') == 'accessoireAjout' %}
{% set attr = Progression(7) %}
{{ attr|raw }}
{% endif %}
{% if app.request.attributes.get('_route') == 'ajoutChangementVolee' %}
{% set attr = Progression(8) %}
{{ attr|raw }}
{% endif %}
{% if app.request.attributes.get('_route') == 'RegisterInvite' and verification == 2 %}
{% set attr = Progression(0) %}
{{ attr|raw }}
{% endif %}
{% endautoescape %} #}

{% endblock %}", "ProgressionBar.html.twig", "C:\\wamp64\\www\\Projet\\AmiHauteurApp\\templates\\ProgressionBar.html.twig");
    }
}
