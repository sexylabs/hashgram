<?php

/* partials/layouts/default/head.twig */
class __TwigTemplate_85d80ca18b96e44d38947017ba7af19343eabf371714fc0811b2f85a957e60cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('head', $context, $blocks);
    }

    public function block_head($context, array $blocks = array())
    {
        // line 2
        echo "    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"Instagram photos by hashtags\">
    <link rel=\"shortcut icon\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["assetUri"]) ? $context["assetUri"] : null), "html", null, true);
        echo "/assets/global/ico/favicon.ico\">

    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
    <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->

    ";
        // line 13
        $this->env->loadTemplate("partials/layouts/default/facebookOpenGraphTags.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "partials/layouts/default/head.twig";
    }

    public function getDebugInfo()
    {
        return array (  42 => 13,  32 => 6,  30 => 4,  29 => 3,  26 => 2,  20 => 1,  137 => 51,  134 => 50,  129 => 45,  122 => 9,  119 => 8,  113 => 53,  110 => 50,  107 => 48,  105 => 47,  102 => 46,  100 => 45,  97 => 44,  95 => 43,  61 => 11,  58 => 8,  55 => 6,  53 => 5,  49 => 4,  44 => 1,  21 => 49,  14 => 7,  31 => 4,  28 => 3,);
    }
}
