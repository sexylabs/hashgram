<?php

/* base/javascripts.twig */
class __TwigTemplate_ebfd33d41ab1ad463d3fb09182f13413a632c38f48c23839f2fe5cba25c3e201 extends Twig_Template
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
        return "base/javascripts.twig";
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  63 => 15,  57 => 14,  49 => 8,  37 => 6,  33 => 4,  29 => 3,  26 => 2,  20 => 1,  252 => 127,  249 => 126,  206 => 71,  203 => 70,  195 => 62,  192 => 61,  188 => 52,  182 => 50,  180 => 49,  172 => 45,  169 => 44,  153 => 15,  150 => 14,  143 => 129,  140 => 126,  124 => 111,  121 => 70,  118 => 69,  115 => 68,  113 => 67,  109 => 65,  106 => 61,  97 => 53,  95 => 44,  75 => 17,  73 => 14,  70 => 13,  61 => 6,  21 => 60,  14 => 12,  107 => 50,  98 => 47,  92 => 46,  88 => 45,  85 => 44,  81 => 43,  65 => 30,  54 => 1,  44 => 15,  31 => 5,  28 => 125,);
    }
}
