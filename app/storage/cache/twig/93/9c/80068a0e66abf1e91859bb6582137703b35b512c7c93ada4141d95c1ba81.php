<?php

/* partials/layouts/default/stylesheets.twig */
class __TwigTemplate_939c80068a0e66abf1e91859bb6582137703b35b512c7c93ada4141d95c1ba81 extends Twig_Template
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
    <link rel=\"stylesheet\" href=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["assetUri"]) ? $context["assetUri"] : null), "html", null, true);
        echo "/libs/bootstrap/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["assetUri"]) ? $context["assetUri"] : null), "html", null, true);
        echo "/assets/global/css/library.css\">

";
    }

    public function getTemplateName()
    {
        return "partials/layouts/default/stylesheets.twig";
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  29 => 3,  26 => 2,  20 => 1,  111 => 25,  108 => 24,  103 => 19,  93 => 9,  90 => 8,  84 => 27,  81 => 24,  78 => 22,  76 => 21,  73 => 20,  71 => 19,  68 => 18,  66 => 17,  61 => 14,  55 => 6,  53 => 5,  44 => 1,  21 => 23,  14 => 7,  65 => 15,  58 => 8,  49 => 4,  46 => 9,  42 => 8,  39 => 7,  35 => 6,  31 => 4,  28 => 3,);
    }
}
