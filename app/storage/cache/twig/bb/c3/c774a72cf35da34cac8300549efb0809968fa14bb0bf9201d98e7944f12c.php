<?php

/* base/incs/header.twig */
class __TwigTemplate_bbc3c774a72cf35da34cac8300549efb0809968fa14bb0bf9201d98e7944f12c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header' => array($this, 'block_header'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('header', $context, $blocks);
    }

    public function block_header($context, array $blocks = array())
    {
        // line 2
        echo "    [HEADER]
";
    }

    public function getTemplateName()
    {
        return "base/incs/header.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 2,  20 => 1,);
    }
}
