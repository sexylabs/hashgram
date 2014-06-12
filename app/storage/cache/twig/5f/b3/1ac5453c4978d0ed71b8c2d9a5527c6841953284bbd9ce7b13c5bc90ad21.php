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
        return array (  30 => 4,  31 => 3,  26 => 2,  20 => 1,  194 => 34,  191 => 33,  183 => 29,  178 => 26,  170 => 23,  163 => 14,  160 => 13,  152 => 10,  144 => 7,  138 => 36,  135 => 33,  131 => 30,  128 => 29,  125 => 27,  123 => 26,  119 => 24,  116 => 23,  108 => 17,  105 => 16,  102 => 13,  99 => 11,  96 => 10,  93 => 8,  90 => 7,  85 => 4,  80 => 1,  49 => 32,  42 => 28,  35 => 7,  28 => 12,  21 => 9,  14 => 6,);
    }
}
