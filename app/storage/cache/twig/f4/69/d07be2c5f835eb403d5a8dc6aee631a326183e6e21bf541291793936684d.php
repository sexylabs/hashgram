<?php

/* layouts/default.html.twig */
class __TwigTemplate_f469d07be2c5f835eb403d5a8dc6aee631a326183e6e21bf541291793936684d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->env->loadTemplate("partials/layouts/default/stylesheets.twig");
        // line 7
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."partials/layouts/default/stylesheets.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $_trait_1 = $this->env->loadTemplate("partials/layouts/default/javascripts.twig");
        // line 23
        if (!$_trait_1->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."partials/layouts/default/javascripts.twig".'" cannot be used as a trait.');
        }
        $_trait_1_blocks = $_trait_1->getBlocks();

        $this->traits = array_merge(
            $_trait_0_blocks,
            $_trait_1_blocks
        );

        $this->blocks = array_merge(
            $this->traits,
            array(
                'stylesheets' => array($this, 'block_stylesheets'),
                'content' => array($this, 'block_content'),
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
    ";
        // line 5
        $this->env->loadTemplate("partials/layouts/default/head.twig")->display($context);
        // line 6
        echo "
    ";
        // line 8
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "</head>

<body>
    ";
        // line 17
        $this->env->loadTemplate("partials/layouts/default/header.twig")->display($context);
        // line 18
        echo "
    ";
        // line 19
        $this->displayBlock('content', $context, $blocks);
        // line 20
        echo "
    ";
        // line 21
        $this->env->loadTemplate("partials/layouts/default/footer.twig")->display($context);
        // line 22
        echo "
    ";
        // line 24
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 27
        echo "</body>

</html>";
    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 9
        echo "        ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
        <style type=\"text/css\">
            body {margin-top: 51px; }
        </style>
    ";
    }

    // line 19
    public function block_content($context, array $blocks = array())
    {
    }

    // line 24
    public function block_javascripts($context, array $blocks = array())
    {
        // line 25
        echo "        ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "layouts/default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 25,  108 => 24,  103 => 19,  93 => 9,  90 => 8,  84 => 27,  81 => 24,  78 => 22,  76 => 21,  73 => 20,  71 => 19,  68 => 18,  66 => 17,  61 => 14,  55 => 6,  53 => 5,  44 => 1,  21 => 23,  14 => 7,  65 => 15,  58 => 8,  49 => 4,  46 => 9,  42 => 8,  39 => 7,  35 => 6,  31 => 4,  28 => 3,);
    }
}
