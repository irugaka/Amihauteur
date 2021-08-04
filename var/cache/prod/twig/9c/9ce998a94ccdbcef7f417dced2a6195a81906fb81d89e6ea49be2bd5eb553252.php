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

/* AccessoireAjout.html.twig */
class __TwigTemplate_fe5ae2ac458f7555aa926ce3f56af41a1f76f52a7653ea776da783dcdcb18041 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "AccessoireAjout.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Choisir des accessoires";
    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "

<div class=\"container\">
        <div class=\"w-75 mx-auto\">
        <div><h1>Choix des Accessoires</h1></div>
    ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["Form"] ?? null), 'form_start');
        echo "
    <table>
            <tr>
                <td>
                    <ul class=\"accessories\" data-prototype=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["Form"] ?? null), "EchelleAccessoire", [], "any", false, false, false, 16), "vars", [], "any", false, false, false, 16), "prototype", [], "any", false, false, false, 16), 'widget'), "html_attr");
        echo "\">
                        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Form"] ?? null), "EchelleAccessoire", [], "any", false, false, false, 17));
        foreach ($context['_seq'] as $context["_key"] => $context["accessory"]) {
            // line 18
            echo "                            <li>
                                <table>
                                    <tr>
                                        <td>";
            // line 21
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["accessory"], "Accessoire", [], "any", false, false, false, 21), 'label');
            echo "</td>
                                        <td>";
            // line 22
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["accessory"], "Accessoire", [], "any", false, false, false, 22), 'widget');
            echo "</td>
                                        <td>";
            // line 23
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["accessory"], "Accessoire", [], "any", false, false, false, 23), 'errors');
            echo "</td>
                                    <tr>
                                    <tr>
                                        <td>";
            // line 26
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["accessory"], "Qte", [], "any", false, false, false, 26), 'label');
            echo "</td>
                                        <td>";
            // line 27
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["accessory"], "Qte", [], "any", false, false, false, 27), 'widget');
            echo "</td>
                                        <td>";
            // line 28
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["accessory"], "Qte", [], "any", false, false, false, 28), 'errors');
            echo "</td>
                                    <tr>
                                </table>
                            </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['accessory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "                    </ul>
                </td>
            </tr>
            <tr>
                <td><button class=\"text-dark btn bg-warning\" type=\"submit\">Suivant</button></td>
                <td><button type=\"button\" class=\"add_item_link text-dark btn bg-warning\" data-collection-holder-class=\"accessories\">+</button></td>
            </tr>
        </table>
    ";
        // line 41
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["Form"] ?? null), 'form_end');
        echo "

    
    
        </div>
    </div>

";
    }

    // line 50
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 51
        echo "    <script>
        \$(document).ready(function() {
            const \$accessoriessCollectionHolder = \$('ul.accessories');
            \$accessoriessCollectionHolder.data('index', \$accessoriessCollectionHolder.find('input').length);
            \$('body').on('click', '.add_item_link', function(e) {
                var \$accessoriessCollectionHolder = \$(e.currentTarget).data('collectionHolderClass');
                addFormToCollection(\$accessoriessCollectionHolder);
            });
            \$accessoriessCollectionHolder.find('li').each(function() {
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
        function addTagFormDeleteLink(\$accessoryFormLi) {
            const \$removeFormButton = \$('<button class=\"text-dark btn bg-warning\" type=\"button\">-</button>');
            \$accessoryFormLi.append(\$removeFormButton);
            \$removeFormButton.on('click', function() {
                \$accessoryFormLi.remove();
            });
        }
    </script>
";
    }

    // line 84
    public function block_progression($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 85
        echo twig_include($this->env, $context, "ProgressionBar.html.twig");
        echo "
";
    }

    public function getTemplateName()
    {
        return "AccessoireAjout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 85,  181 => 84,  146 => 51,  142 => 50,  130 => 41,  120 => 33,  109 => 28,  105 => 27,  101 => 26,  95 => 23,  91 => 22,  87 => 21,  82 => 18,  78 => 17,  74 => 16,  67 => 12,  60 => 7,  56 => 6,  49 => 4,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "AccessoireAjout.html.twig", "C:\\wamp64\\www\\Projet\\AmiHauteurApp\\templates\\AccessoireAjout.html.twig");
    }
}
