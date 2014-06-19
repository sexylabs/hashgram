<?php

/* layouts/default.html.twig */
class __TwigTemplate_f469d07be2c5f835eb403d5a8dc6aee631a326183e6e21bf541291793936684d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->env->loadTemplate("partials/layouts/default/stylesheets.twig");
        // line 8
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."partials/layouts/default/stylesheets.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $_trait_1 = $this->env->loadTemplate("partials/layouts/default/javascripts.twig");
        // line 21
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
        // line 6
        $this->env->loadTemplate("partials/layouts/default/head.twig")->display($context);
        // line 7
        echo "
    ";
        // line 9
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "</head>

<body>
    ";
        // line 15
        $this->env->loadTemplate("partials/layouts/default/header.twig")->display($context);
        // line 16
        echo "
    ";
        // line 17
        $this->displayBlock('content', $context, $blocks);
        // line 18
        echo "
    ";
        // line 19
        $this->env->loadTemplate("partials/layouts/default/footer.twig")->display($context);
        // line 20
        echo "
    ";
        // line 22
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 25
        echo "</body>

</html>";
    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 10
        echo "        ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
    }

    // line 22
    public function block_javascripts($context, array $blocks = array())
    {
        // line 23
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
        return array (  109 => 23,  106 => 22,  101 => 17,  94 => 10,  91 => 9,  85 => 25,  82 => 22,  79 => 20,  77 => 19,  74 => 18,  72 => 17,  69 => 16,  67 => 15,  62 => 12,  59 => 9,  56 => 7,  54 => 6,  49 => 4,  44 => 1,  21 => 21,  14 => 8,);
    }
}
