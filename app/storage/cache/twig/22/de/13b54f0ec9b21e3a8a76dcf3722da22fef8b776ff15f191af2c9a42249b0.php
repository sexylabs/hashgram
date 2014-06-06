<?php

/* base/incs/stylesheets.twig */
class __TwigTemplate_22de13b54f0ec9b21e3a8a76dcf3722da22fef8b776ff15f191af2c9a42249b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('stylesheets', $context, $blocks);
    }

    public function block_stylesheets($context, array $blocks = array())
    {
        // line 2
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, (isset($context["assetUri"]) ? $context["assetUri"] : null), "html", null, true);
        echo "/libs/bootstrap/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["assetUri"]) ? $context["assetUri"] : null), "html", null, true);
        echo "/libs/bootstrap/css/bootstrap-theme.min.css\">
";
    }

    public function getTemplateName()
    {
        return "base/incs/stylesheets.twig";
    }

    public function getDebugInfo()
    {
        return array (  35 => 7,  26 => 2,  20 => 1,  144 => 44,  141 => 43,  136 => 37,  129 => 25,  126 => 24,  119 => 19,  116 => 18,  110 => 46,  107 => 43,  101 => 38,  99 => 37,  88 => 29,  84 => 27,  81 => 24,  77 => 21,  74 => 18,  58 => 4,  53 => 1,  21 => 23,  14 => 17,  31 => 3,  28 => 42,);
    }
}
