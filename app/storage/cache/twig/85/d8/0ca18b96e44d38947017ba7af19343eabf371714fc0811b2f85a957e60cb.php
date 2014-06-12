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
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"Adriano Fialho & Victor Martinez\">
    <link rel=\"shortcut icon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["assetUri"]) ? $context["assetUri"] : null), "html", null, true);
        echo "/assets/global/ico/favicon.ico\">

    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
    <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->

    ";
        // line 14
        $this->env->loadTemplate("partials/layouts/default/facebookOpenGraphTags.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "partials/layouts/default/head.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 14,  33 => 7,  26 => 2,  20 => 1,  110 => 24,  107 => 23,  102 => 18,  95 => 10,  92 => 9,  86 => 26,  83 => 23,  80 => 21,  78 => 20,  75 => 19,  73 => 18,  70 => 17,  68 => 16,  62 => 12,  59 => 9,  56 => 7,  54 => 6,  49 => 4,  44 => 1,  21 => 22,  14 => 8,);
    }
}
