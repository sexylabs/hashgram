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
        return array (  30 => 4,  45 => 7,  41 => 6,  37 => 5,  33 => 4,  29 => 3,  26 => 2,  20 => 1,  108 => 22,  105 => 21,  100 => 16,  93 => 9,  90 => 8,  84 => 24,  81 => 21,  78 => 19,  76 => 18,  73 => 17,  71 => 16,  68 => 15,  61 => 11,  58 => 8,  55 => 6,  53 => 5,  49 => 4,  44 => 1,  21 => 20,  14 => 7,  66 => 14,  59 => 14,  50 => 11,  47 => 10,  43 => 9,  40 => 8,  36 => 7,  31 => 4,  28 => 3,);
    }
}
