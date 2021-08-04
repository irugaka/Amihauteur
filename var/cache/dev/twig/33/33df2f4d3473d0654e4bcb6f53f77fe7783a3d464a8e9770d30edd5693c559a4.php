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

/* AjoutFixation.html.twig */
class __TwigTemplate_74c550f5fb95e06ae8226f60430ce12dd589b7a6056e7fa82cdb17107b86d704 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AjoutFixation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "AjoutFixation.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "AjoutFixation.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Choisir des accessoires";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "

<div class=\"container\">
        <div class=\"w-75 mx-auto\">
        <div><h1>Choix des Fixations</h1></div>
    ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["Form"]) || array_key_exists("Form", $context) ? $context["Form"] : (function () { throw new RuntimeError('Variable "Form" does not exist.', 12, $this->source); })()), 'form_start');
        echo "
    <table>
            <tr>
                <td>
                    <ul class=\"fixation\" data-prototype=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["Form"]) || array_key_exists("Form", $context) ? $context["Form"] : (function () { throw new RuntimeError('Variable "Form" does not exist.', 16, $this->source); })()), "EchelleFixation", [], "any", false, false, false, 16), "vars", [], "any", false, false, false, 16), "prototype", [], "any", false, false, false, 16), 'widget'), "html_attr");
        echo "\">
                        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Form"]) || array_key_exists("Form", $context) ? $context["Form"] : (function () { throw new RuntimeError('Variable "Form" does not exist.', 17, $this->source); })()), "EchelleFixation", [], "any", false, false, false, 17));
        foreach ($context['_seq'] as $context["_key"] => $context["fixation"]) {
            // line 18
            echo "                            <li>
                                <table>
                                    <tr>
                                        <td>";
            // line 21
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["fixation"], "Fixation", [], "any", false, false, false, 21), 'label');
            echo "</td>
                                        <td>";
            // line 22
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["fixation"], "Fixation", [], "any", false, false, false, 22), 'widget');
            echo "</td>
                                        <td>";
            // line 23
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["fixation"], "Fixation", [], "any", false, false, false, 23), 'errors');
            echo "</td>
                                    <tr>
                                    <tr>
                                        <td>";
            // line 26
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["fixation"], "Qte", [], "any", false, false, false, 26), 'label');
            echo "</td>
                                        <td>";
            // line 27
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["fixation"], "Qte", [], "any", false, false, false, 27), 'widget');
            echo "</td>
                                        <td>";
            // line 28
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["fixation"], "Qte", [], "any", false, false, false, 28), 'errors');
            echo "</td>
                                    <tr>
                                </table>
                            </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fixation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "                    </ul>
                </td>
            </tr>
            <tr>
                <td><button class=\"text-dark btn bg-warning\" type=\"submit\">Créer</button></td>
                <td><button type=\"button\" class=\"add_item_link text-dark btn bg-warning\" data-collection-holder-class=\"fixation\">Ajouter Fixation</button></td>
            </tr>
        </table>
    ";
        // line 41
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["Form"]) || array_key_exists("Form", $context) ? $context["Form"] : (function () { throw new RuntimeError('Variable "Form" does not exist.', 41, $this->source); })()), 'form_end');
        echo "

    
    
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 50
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 51
        echo "    <script>
        \$(document).ready(function() {
            const \$fixationsCollectionHolder = \$('ul.fixation');
            \$fixationsCollectionHolder.data('index', \$fixationsCollectionHolder.find('input').length);

            \$('body').on('click', '.add_item_link', function(e) {
                var \$fixationssCollectionHolder = \$(e.currentTarget).data('collectionHolderClass');
                addFormToCollection(\$fixationssCollectionHolder);
                
            });

            \$fixationsCollectionHolder.find('li').each(function() {
                addTagFormDeleteLink(\$(this));
            });
        });

        function addFormToCollection(\$collectionHolderClass) {
            const \$collectionHolder = \$('.' + \$collectionHolderClass);
            const prototype = \$collectionHolder.data('prototype');
            const index = \$collectionHolder.data('index');
            let newForm = prototype;
            newForm = newForm.replace(/__name__/g, index);
            \$collectionHolder.data('index', index + 1);
            const \$newFormLi = \$('<li></li>').append(newForm);
            \$collectionHolder.append(\$newFormLi);
            addTagFormDeleteLink(\$newFormLi);
        }

        function addTagFormDeleteLink(\$fixationFormLi) {
            const \$removeFormButton = \$('<button class=\"text-dark btn bg-warning\" type=\"button\">Delete this Accessory</button>');
            \$fixationFormLi.append(\$removeFormButton);

            \$removeFormButton.on('click', function() {
                \$fixationFormLi.remove();
            });
        }
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 89
    public function block_progression($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "progression"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "progression"));

        // line 90
        echo twig_include($this->env, $context, "ProgressionBar.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "AjoutFixation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 90,  235 => 89,  188 => 51,  178 => 50,  160 => 41,  150 => 33,  139 => 28,  135 => 27,  131 => 26,  125 => 23,  121 => 22,  117 => 21,  112 => 18,  108 => 17,  104 => 16,  97 => 12,  90 => 7,  80 => 6,  61 => 4,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block title %}Choisir des accessoires{% endblock %}

{% block body %}


<div class=\"container\">
        <div class=\"w-75 mx-auto\">
        <div><h1>Choix des Fixations</h1></div>
    {{ form_start(Form) }}
    <table>
            <tr>
                <td>
                    <ul class=\"fixation\" data-prototype=\"{{ form_widget(Form.EchelleFixation.vars.prototype)|e('html_attr') }}\">
                        {% for fixation in Form.EchelleFixation %}
                            <li>
                                <table>
                                    <tr>
                                        <td>{{ form_label(fixation.Fixation) }}</td>
                                        <td>{{ form_widget(fixation.Fixation) }}</td>
                                        <td>{{ form_errors(fixation.Fixation) }}</td>
                                    <tr>
                                    <tr>
                                        <td>{{ form_label(fixation.Qte) }}</td>
                                        <td>{{ form_widget(fixation.Qte) }}</td>
                                        <td>{{ form_errors(fixation.Qte) }}</td>
                                    <tr>
                                </table>
                            </li>
                        {% endfor %}
                    </ul>
                </td>
            </tr>
            <tr>
                <td><button class=\"text-dark btn bg-warning\" type=\"submit\">Créer</button></td>
                <td><button type=\"button\" class=\"add_item_link text-dark btn bg-warning\" data-collection-holder-class=\"fixation\">Ajouter Fixation</button></td>
            </tr>
        </table>
    {{ form_end(Form) }}

    
    
        </div>
    </div>

{% endblock %}

{% block javascripts %}
    <script>
        \$(document).ready(function() {
            const \$fixationsCollectionHolder = \$('ul.fixation');
            \$fixationsCollectionHolder.data('index', \$fixationsCollectionHolder.find('input').length);

            \$('body').on('click', '.add_item_link', function(e) {
                var \$fixationssCollectionHolder = \$(e.currentTarget).data('collectionHolderClass');
                addFormToCollection(\$fixationssCollectionHolder);
                
            });

            \$fixationsCollectionHolder.find('li').each(function() {
                addTagFormDeleteLink(\$(this));
            });
        });

        function addFormToCollection(\$collectionHolderClass) {
            const \$collectionHolder = \$('.' + \$collectionHolderClass);
            const prototype = \$collectionHolder.data('prototype');
            const index = \$collectionHolder.data('index');
            let newForm = prototype;
            newForm = newForm.replace(/__name__/g, index);
            \$collectionHolder.data('index', index + 1);
            const \$newFormLi = \$('<li></li>').append(newForm);
            \$collectionHolder.append(\$newFormLi);
            addTagFormDeleteLink(\$newFormLi);
        }

        function addTagFormDeleteLink(\$fixationFormLi) {
            const \$removeFormButton = \$('<button class=\"text-dark btn bg-warning\" type=\"button\">Delete this Accessory</button>');
            \$fixationFormLi.append(\$removeFormButton);

            \$removeFormButton.on('click', function() {
                \$fixationFormLi.remove();
            });
        }
    </script>
{% endblock %}
{% block progression %}
{{ include('ProgressionBar.html.twig') }}
{% endblock %}", "AjoutFixation.html.twig", "C:\\wamp64\\www\\Projet\\AmiHauteurApp\\templates\\AjoutFixation.html.twig");
    }
}
