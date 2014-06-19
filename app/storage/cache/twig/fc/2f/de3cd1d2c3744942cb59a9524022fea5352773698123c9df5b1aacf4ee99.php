<?php

/* partials/layouts/default/footer.twig */
class __TwigTemplate_fc2fde3cd1d2c3744942cb59a9524022fea5352773698123c9df5b1aacf4ee99 extends Twig_Template
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
        return "partials/layouts/default/footer.twig";
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  26 => 2,  20 => 1,  194 => 34,  191 => 33,  183 => 29,  178 => 26,  170 => 23,  163 => 14,  160 => 13,  152 => 10,  144 => 7,  138 => 36,  135 => 33,  131 => 30,  128 => 29,  125 => 27,  123 => 26,  119 => 24,  116 => 23,  108 => 17,  105 => 16,  102 => 13,  99 => 11,  96 => 10,  93 => 8,  90 => 7,  85 => 4,  80 => 1,  49 => 32,  42 => 28,  35 => 7,  28 => 12,  21 => 9,  14 => 6,);
    }
}
