<?php

/* base/incs/footer.twig */
class __TwigTemplate_a46dfb77508c348fe9e3102e766da426ee0856b9f1e0a97ff618d63fd07d60c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('footer', $context, $blocks);
    }

    public function block_footer($context, array $blocks = array())
    {
        // line 2
        echo "    [FOOTER]
";
    }

    public function getTemplateName()
    {
        return "base/incs/footer.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 2,  20 => 1,  181 => 41,  178 => 40,  170 => 36,  165 => 33,  157 => 30,  150 => 21,  147 => 20,  139 => 17,  133 => 43,  130 => 40,  126 => 37,  123 => 36,  120 => 34,  118 => 33,  114 => 31,  111 => 30,  103 => 24,  100 => 23,  97 => 20,  94 => 18,  91 => 17,  76 => 4,  71 => 1,  42 => 39,  35 => 7,  21 => 19,  14 => 16,  31 => 3,  28 => 29,);
    }
}