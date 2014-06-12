<?php

/* layouts/error.html.twig */
class __TwigTemplate_330ef7887b1296ac073d24746710cb6cc8785d1574ec8e057c0d04e63b1c2ed3 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"pt-br\">
<head>
    <title>";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "getName", array(), "method"), "html", null, true);
        echo " | Error</title>
    ";
        // line 5
        $this->env->loadTemplate("partials/layouts/default/head.twig")->display($context);
        // line 6
        echo "    ";
        $this->env->loadTemplate("partials/layouts/default/stylesheets.twig")->display($context);
        // line 7
        echo "    <style type=\"text/css\">
        body{ margin-top: 15px; }
    </style>
</head>

<body>

    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                ";
        // line 17
        $this->env->loadTemplate("base/components/flash.twig")->display($context);
        // line 18
        echo "            </div>
        </div>
    </div>

</body>

</html>";
    }

    public function getTemplateName()
    {
        return "layouts/error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 18,  45 => 17,  33 => 7,  30 => 6,  28 => 5,  24 => 4,  19 => 1,);
    }
}
