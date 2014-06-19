<?php

/* base/incs/header.twig */
class __TwigTemplate_286e9a7a664c9dcf4ef4770beeb90589d0fc046dadd199200dde63274f7ce04e extends Twig_Template
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
        return array (  26 => 2,  20 => 1,  181 => 41,  178 => 40,  170 => 36,  165 => 33,  157 => 30,  150 => 21,  147 => 20,  139 => 17,  133 => 43,  130 => 40,  126 => 37,  123 => 36,  120 => 34,  118 => 33,  114 => 31,  111 => 30,  103 => 24,  100 => 23,  97 => 20,  94 => 18,  91 => 17,  76 => 4,  71 => 1,  42 => 39,  35 => 7,  21 => 19,  14 => 16,  31 => 3,  28 => 29,);
    }
}
