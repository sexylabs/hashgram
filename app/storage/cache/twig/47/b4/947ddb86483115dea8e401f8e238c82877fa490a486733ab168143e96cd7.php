<?php

/* base/stylesheets.twig */
class __TwigTemplate_47b4947ddb86483115dea8e401f8e238c82877fa490a486733ab168143e96cd7 extends Twig_Template
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
        echo "
\t<link rel=\"stylesheet\" href=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["assetUri"]) ? $context["assetUri"] : null), "html", null, true);
        echo "/css/bootstrap.min.css\">
        <link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["assetUri"]) ? $context["assetUri"] : null), "html", null, true);
        echo "/css/bootstrap-responsive.min.css\">

";
    }

    public function getTemplateName()
    {
        return "base/stylesheets.twig";
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  29 => 3,  26 => 2,  20 => 1,  252 => 127,  249 => 126,  206 => 71,  203 => 70,  195 => 62,  192 => 61,  188 => 52,  182 => 50,  180 => 49,  172 => 45,  169 => 44,  153 => 15,  150 => 14,  143 => 129,  140 => 126,  124 => 111,  121 => 70,  118 => 69,  115 => 68,  113 => 67,  109 => 65,  106 => 61,  97 => 53,  95 => 44,  75 => 26,  73 => 14,  70 => 13,  61 => 6,  21 => 60,  14 => 12,  107 => 50,  98 => 47,  92 => 46,  88 => 45,  85 => 44,  81 => 43,  65 => 30,  54 => 1,  44 => 15,  31 => 4,  28 => 125,);
    }
}
