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
        // line 20
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
        // line 11
        echo "</head>

<body>
    ";
        // line 14
        $this->env->loadTemplate("partials/layouts/default/header.twig")->display($context);
        // line 15
        echo "
    ";
        // line 16
        $this->displayBlock('content', $context, $blocks);
        // line 17
        echo "
    ";
        // line 18
        $this->env->loadTemplate("partials/layouts/default/footer.twig")->display($context);
        // line 19
        echo "
    ";
        // line 21
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 24
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
    ";
    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
    }

    // line 21
    public function block_javascripts($context, array $blocks = array())
    {
        // line 22
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
        return array (  108 => 22,  105 => 21,  100 => 16,  93 => 9,  90 => 8,  84 => 24,  81 => 21,  78 => 19,  76 => 18,  73 => 17,  71 => 16,  68 => 15,  61 => 11,  58 => 8,  55 => 6,  53 => 5,  49 => 4,  44 => 1,  21 => 20,  14 => 7,  66 => 14,  59 => 14,  50 => 11,  47 => 10,  43 => 9,  40 => 8,  36 => 7,  31 => 4,  28 => 3,);
    }
}
