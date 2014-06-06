<?php

/* base/default.html.twig */
class __TwigTemplate_f2df168cc1490a0f32f7aaca32a40ffa08fded36b722fff5bef33ef7c01bb0b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->env->loadTemplate("base/incs/facebookOpenGraphTags.twig");
        // line 16
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."base/incs/facebookOpenGraphTags.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $_trait_1 = $this->env->loadTemplate("base/incs/stylesheets.twig");
        // line 19
        if (!$_trait_1->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."base/incs/stylesheets.twig".'" cannot be used as a trait.');
        }
        $_trait_1_blocks = $_trait_1->getBlocks();

        $_trait_2 = $this->env->loadTemplate("base/incs/header.twig");
        // line 29
        if (!$_trait_2->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."base/incs/header.twig".'" cannot be used as a trait.');
        }
        $_trait_2_blocks = $_trait_2->getBlocks();

        $_trait_3 = $this->env->loadTemplate("base/incs/footer.twig");
        // line 35
        if (!$_trait_3->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."base/incs/footer.twig".'" cannot be used as a trait.');
        }
        $_trait_3_blocks = $_trait_3->getBlocks();

        $_trait_4 = $this->env->loadTemplate("base/incs/javascripts.twig");
        // line 39
        if (!$_trait_4->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."base/incs/javascripts.twig".'" cannot be used as a trait.');
        }
        $_trait_4_blocks = $_trait_4->getBlocks();

        $this->traits = array_merge(
            $_trait_0_blocks,
            $_trait_1_blocks,
            $_trait_2_blocks,
            $_trait_3_blocks,
            $_trait_4_blocks
        );

        $this->blocks = array_merge(
            $this->traits,
            array(
                'facebookOpenGraphTags' => array($this, 'block_facebookOpenGraphTags'),
                'stylesheets' => array($this, 'block_stylesheets'),
                'header' => array($this, 'block_header'),
                'content' => array($this, 'block_content'),
                'footer' => array($this, 'block_footer'),
                'javascripts' => array($this, 'block_javascripts'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"pt-br\">
<head>
    <title>";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "getName", array(), "method"), "html", null, true);
        echo "</title>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"Adriano Fialho & Victor Martinez\">

    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
    <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->

    ";
        // line 17
        echo "    ";
        $this->displayBlock('facebookOpenGraphTags', $context, $blocks);
        // line 18
        echo "
    ";
        // line 20
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 23
        echo "
    <link rel=\"shortcut icon\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["assetUri"]) ? $context["assetUri"] : null), "html", null, true);
        echo "/assets/global/ico/favicon.ico\">
</head>

<body>

    ";
        // line 30
        echo "    ";
        $this->displayBlock('header', $context, $blocks);
        // line 31
        echo "
    <!-- Content -->
    ";
        // line 33
        $this->displayBlock('content', $context, $blocks);
        // line 34
        echo "
    ";
        // line 36
        echo "    ";
        $this->displayBlock('footer', $context, $blocks);
        // line 37
        echo "
    <!-- Javascripts -->
    ";
        // line 40
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 43
        echo "</body>

</html>";
    }

    // line 17
    public function block_facebookOpenGraphTags($context, array $blocks = array())
    {
        echo " ";
        $this->displayParentBlock("facebookOpenGraphTags", $context, $blocks);
        echo " ";
    }

    // line 20
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 21
        echo "        ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
    }

    // line 30
    public function block_header($context, array $blocks = array())
    {
        echo " ";
        $this->displayParentBlock("header", $context, $blocks);
        echo " ";
    }

    // line 33
    public function block_content($context, array $blocks = array())
    {
    }

    // line 36
    public function block_footer($context, array $blocks = array())
    {
        echo " ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo " ";
    }

    // line 40
    public function block_javascripts($context, array $blocks = array())
    {
        // line 41
        echo "        ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "base/default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 41,  178 => 40,  170 => 36,  165 => 33,  157 => 30,  150 => 21,  147 => 20,  139 => 17,  133 => 43,  130 => 40,  126 => 37,  123 => 36,  120 => 34,  118 => 33,  114 => 31,  111 => 30,  103 => 24,  100 => 23,  97 => 20,  94 => 18,  91 => 17,  76 => 4,  71 => 1,  42 => 39,  35 => 35,  28 => 29,  21 => 19,  14 => 16,);
    }
}
