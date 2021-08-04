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

/* Logintest.html.twig */
class __TwigTemplate_b2cfbfddd546571aab846da24a8eb1a0f20026d83ae0703077bd4bdb8b8e6b41 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "Logintest.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "Connexion
";
    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "    <main>
        <br>

            <div class=\"p-2\" id=\"tabs-1\">
    ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
    <div class=\"form-group\">
        ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
    </div>

    <div class=\"form-group\">
    <div>
            ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "NomUtilisateur", [], "any", false, false, false, 19), 'label', ["label" => "Nom"]);
        echo "
            ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "NomUtilisateur", [], "any", false, false, false, 20), 'widget');
        echo "
    </div>
    <div>
            ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "EmailUtilisateur", [], "any", false, false, false, 23), 'label', ["label" => "Email"]);
        echo "
            ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "EmailUtilisateur", [], "any", false, false, false, 24), 'widget');
        echo "
        </div>
        <div>
            ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "MdpUtilisateur", [], "any", false, false, false, 27), 'label', ["label" => "Mot de passe"]);
        echo "
            ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "MdpUtilisateur", [], "any", false, false, false, 28), 'widget');
        echo "
        </div>
                <div>
            ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "RoleUtilisateur", [], "any", false, false, false, 31), 'label', ["label" => "Role"]);
        echo "
            ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "RoleUtilisateur", [], "any", false, false, false, 32), 'widget');
        echo "
        </div>
    </div>
    <html>
  <center><head>
  </head>
  <body>
    <form action=\"?\" method=\"POST\">
      <div class=\"g-recaptcha\" data-sitekey=\"your_site_key\"></div>
      <br/>
      <input type=\"submit\" value=\"Submit\" class=\"btn-primary\">
    </form>
  </body>
  </center>
</html>
";
        // line 47
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
</div>




    </main>
";
    }

    public function getTemplateName()
    {
        return "Logintest.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 47,  113 => 32,  109 => 31,  103 => 28,  99 => 27,  93 => 24,  89 => 23,  83 => 20,  79 => 19,  71 => 14,  66 => 12,  60 => 8,  56 => 7,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Logintest.html.twig", "C:\\wamp64\\www\\Projet\\AmiHauteurApp\\templates\\Logintest.html.twig");
    }
}
