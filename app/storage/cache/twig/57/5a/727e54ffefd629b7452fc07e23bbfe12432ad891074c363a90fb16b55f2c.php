<?php

/* base/components/flash.twig */
class __TwigTemplate_575a727e54ffefd629b7452fc07e23bbfe12432ad891074c363a90fb16b55f2c extends Twig_Template
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
        $context["__internal_3e1a5ab9bc882276e1977fe707c78199158f2945d7065b0d0ebd4535806e5bf8"] = $this->env->loadTemplate("macros/bootstrap.twig");
        // line 2
        if ($this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "success")) {
            // line 3
            echo "    ";
            echo $context["__internal_3e1a5ab9bc882276e1977fe707c78199158f2945d7065b0d0ebd4535806e5bf8"]->getalert($this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "success"), "success");
            echo "
";
        }
        // line 5
        if ($this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "error")) {
            // line 6
            echo "    ";
            echo $context["__internal_3e1a5ab9bc882276e1977fe707c78199158f2945d7065b0d0ebd4535806e5bf8"]->getalert($this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "error"), "danger");
            echo "
";
        }
        // line 8
        if ($this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "warning")) {
            // line 9
            echo "    ";
            echo $context["__internal_3e1a5ab9bc882276e1977fe707c78199158f2945d7065b0d0ebd4535806e5bf8"]->getalert($this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "warning"), "warning");
            echo "
";
        }
        // line 11
        if ($this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "info")) {
            // line 12
            echo "    ";
            echo $context["__internal_3e1a5ab9bc882276e1977fe707c78199158f2945d7065b0d0ebd4535806e5bf8"]->getalert($this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "info"), "info");
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
        return array (  47 => 12,  45 => 11,  39 => 9,  37 => 8,  31 => 6,  29 => 5,  23 => 3,  21 => 2,  19 => 1,);
    }
}
