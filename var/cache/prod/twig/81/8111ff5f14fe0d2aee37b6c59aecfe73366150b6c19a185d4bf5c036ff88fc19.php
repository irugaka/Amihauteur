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

/* Tableauconfig.html.twig */
class __TwigTemplate_b76ba29bf745cc136881865eb6bbe6691755cee75bdc4ec6b3586cc895ab2e54 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'tableauconfig' => [$this, 'block_tableauconfig'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('tableauconfig', $context, $blocks);
    }

    public function block_tableauconfig($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "<table class=\"table table-sm table-dark\">
  <thead>
    <tr>
      <th scope=\"col\">#</th>
      <th scope=\"col\">First</th>
      <th scope=\"col\">Last</th>
      <th scope=\"col\">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope=\"row\">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope=\"row\">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope=\"row\">3</th>
      <td colspan=\"2\">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "Tableauconfig.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Tableauconfig.html.twig", "C:\\wamp64\\www\\Projet\\AmiHauteurApp\\templates\\Tableauconfig.html.twig");
    }
}
