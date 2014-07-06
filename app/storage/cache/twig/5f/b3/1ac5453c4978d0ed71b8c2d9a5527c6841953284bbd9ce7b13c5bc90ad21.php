<?php

/* partials/layouts/default/javascripts.twig */
class __TwigTemplate_5fb31ac5453c4978d0ed71b8c2d9a5527c6841953284bbd9ce7b13c5bc90ad21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('javascripts', $context, $blocks);
    }

    public function block_javascripts($context, array $blocks = array())
    {
        // line 2
        echo "
    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script type=\"application/javascript\" src=\"";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["assetUri"]) ? $context["assetUri"] : null), "html", null, true);
        echo "/libs/bootstrap/js/bootstrap.min.js\"></script>

";
    }

    public function getTemplateName()
    {
        return "partials/layouts/default/javascripts.twig";
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  29 => 3,  26 => 2,  20 => 1,  137 => 51,  134 => 50,  129 => 45,  122 => 9,  119 => 8,  113 => 53,  110 => 50,  107 => 48,  105 => 47,  102 => 46,  100 => 45,  97 => 44,  95 => 43,  61 => 11,  58 => 8,  55 => 6,  53 => 5,  49 => 4,  44 => 1,  21 => 49,  14 => 7,  31 => 4,  28 => 3,);
    }
}
