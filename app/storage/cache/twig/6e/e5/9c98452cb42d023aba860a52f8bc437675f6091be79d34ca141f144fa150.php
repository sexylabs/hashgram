<?php

/* base/incs/javascripts.twig */
class __TwigTemplate_6ee59c98452cb42d023aba860a52f8bc437675f6091be79d34ca141f144fa150 extends Twig_Template
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
        return array (  30 => 4,  26 => 2,  20 => 1,  181 => 41,  178 => 40,  170 => 36,  165 => 33,  157 => 30,  150 => 21,  147 => 20,  139 => 17,  133 => 43,  130 => 40,  126 => 37,  123 => 36,  120 => 34,  118 => 33,  114 => 31,  111 => 30,  103 => 24,  100 => 23,  97 => 20,  94 => 18,  91 => 17,  76 => 4,  71 => 1,  42 => 39,  35 => 7,  21 => 19,  14 => 16,  31 => 3,  28 => 29,);
    }
}
