<?php

/* base/incs/javascripts.twig */
class __TwigTemplate_d3e34967ddfe469023fd3533d5d77aaf7d9d357fc5dc50cebc34b5cc2ecc2265 extends Twig_Template
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
        return "base/incs/javascripts.twig";
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  35 => 7,  26 => 2,  20 => 1,  144 => 44,  141 => 43,  136 => 37,  129 => 25,  126 => 24,  119 => 19,  116 => 18,  110 => 46,  107 => 43,  101 => 38,  99 => 37,  88 => 29,  84 => 27,  81 => 24,  77 => 21,  74 => 18,  58 => 4,  53 => 1,  21 => 23,  14 => 17,  31 => 3,  28 => 42,);
    }
}
