<?php

/* base/components/flash.twig */
class __TwigTemplate_877f0bc8de2506abd88a019bb046bc60bdef8e855390cafe6370e0a7d9a26de1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["__internal_44b808b9b45bcc4700d342091698244e2b1a662eced263617c9d43a84af98cd7"] = $this->env->loadTemplate("macros/bootstrap.twig");
        // line 2
        if ($this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "success")) {
            // line 3
            echo "\t";
            echo $context["__internal_44b808b9b45bcc4700d342091698244e2b1a662eced263617c9d43a84af98cd7"]->getalert($this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "success"), "success");
            echo "
";
        }
        // line 5
        if ($this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "error")) {
            // line 6
            echo "\t";
            echo $context["__internal_44b808b9b45bcc4700d342091698244e2b1a662eced263617c9d43a84af98cd7"]->getalert($this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "error"), "error");
            echo "
";
        }
        // line 8
        if ($this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "warning")) {
            // line 9
            echo "\t";
            echo $context["__internal_44b808b9b45bcc4700d342091698244e2b1a662eced263617c9d43a84af98cd7"]->getalert($this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "warning"), "warning");
            echo "
";
        }
        // line 11
        if ($this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "info")) {
            // line 12
            echo "\t";
            echo $context["__internal_44b808b9b45bcc4700d342091698244e2b1a662eced263617c9d43a84af98cd7"]->getalert($this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "info"), "info");
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "base/components/flash.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 12,  45 => 11,  39 => 9,  23 => 3,  19 => 1,  30 => 4,  63 => 15,  57 => 14,  49 => 8,  37 => 8,  33 => 4,  29 => 5,  26 => 2,  20 => 1,  252 => 127,  249 => 126,  206 => 71,  203 => 70,  195 => 62,  192 => 61,  188 => 52,  182 => 50,  180 => 49,  172 => 45,  169 => 44,  153 => 15,  150 => 14,  143 => 129,  140 => 126,  124 => 111,  121 => 70,  118 => 69,  115 => 68,  113 => 67,  109 => 65,  106 => 61,  97 => 53,  95 => 44,  75 => 17,  73 => 14,  70 => 13,  61 => 6,  21 => 2,  14 => 12,  107 => 50,  98 => 47,  92 => 46,  88 => 45,  85 => 44,  81 => 43,  65 => 30,  54 => 1,  44 => 15,  31 => 6,  28 => 125,);
    }
}
