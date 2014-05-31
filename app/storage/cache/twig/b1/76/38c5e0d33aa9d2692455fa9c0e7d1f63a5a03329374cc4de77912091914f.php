<?php

/* base/sidebar.twig */
class __TwigTemplate_b17638c5e0d33aa9d2692455fa9c0e7d1f63a5a03329374cc4de77912091914f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('sidebar', $context, $blocks);
    }

    public function block_sidebar($context, array $blocks = array())
    {
        // line 2
        echo "\t<div class=\"well sidebar-nav\">
            <ul class=\"nav nav-list\">
            \t<li class=\"nav-header\">Documentation</li>
\t          ";
        // line 5
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pmenu"]) ? $context["pmenu"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            echo " 
\t          \t<li ";
            // line 6
            echo (($this->getAttribute((isset($context["link"]) ? $context["link"] : null), "active")) ? ("class=\"active\"") : (""));
            echo "><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["link"]) ? $context["link"] : null), "url"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["link"]) ? $context["link"] : null), "desc"), "html", null, true);
            echo "</a></li>
\t          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "            </ul>
        </div><!--/.well -->
        
        <div class=\"well sidebar-nav\">
            <ul class=\"nav nav-list\">
            \t<li class=\"nav-header\">Installation</li>
\t          ";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["smenu"]) ? $context["smenu"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            echo " 
\t          \t<li ";
            // line 15
            echo (($this->getAttribute((isset($context["link"]) ? $context["link"] : null), "active")) ? ("class=\"active\"") : (""));
            echo "><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["link"]) ? $context["link"] : null), "url"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["link"]) ? $context["link"] : null), "desc"), "html", null, true);
            echo "</a></li>
\t          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "            </ul>
        </div><!--/.well -->
";
    }

    public function getTemplateName()
    {
        return "base/sidebar.twig";
    }

    public function getDebugInfo()
    {
        return array (  63 => 15,  57 => 14,  49 => 8,  37 => 6,  33 => 4,  29 => 3,  26 => 2,  20 => 1,  252 => 127,  249 => 126,  206 => 71,  203 => 70,  195 => 62,  192 => 61,  188 => 52,  182 => 50,  180 => 49,  172 => 45,  169 => 44,  153 => 15,  150 => 14,  143 => 129,  140 => 126,  124 => 111,  121 => 70,  118 => 69,  115 => 68,  113 => 67,  109 => 65,  106 => 61,  97 => 53,  95 => 44,  75 => 17,  73 => 14,  70 => 13,  61 => 6,  21 => 60,  14 => 12,  107 => 50,  98 => 47,  92 => 46,  88 => 45,  85 => 44,  81 => 43,  65 => 30,  54 => 1,  44 => 15,  31 => 5,  28 => 125,);
    }
}
