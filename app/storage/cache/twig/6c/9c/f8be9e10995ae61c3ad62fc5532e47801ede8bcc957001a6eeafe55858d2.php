<?php

/* partials/layouts/default/header.twig */
class __TwigTemplate_6c9cf8be9e10995ae61c3ad62fc5532e47801ede8bcc957001a6eeafe55858d2 extends Twig_Template
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
        echo "    <section id=\"header\">
        <div class=\"navbar navbar-default navbar-fixed-top\" role=\"navigation\">
            <div class=\"container-fluid\">
                <div class=\"navbar-header no-padding\">
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" style=\"display: none;\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "urlFor", array(0 => "home"), "method"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "getName", array(), "method"), "html", null, true);
        echo "</a>
                </div>
                <div class=\"navbar-collapse collapse\">
                    <div class=\"app-title width-full text-center\">
                        <h3><a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "urlFor", array(0 => "home"), "method"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "getName", array(), "method"), "html", null, true);
        echo "</a></h3>
                    </div>
                    <form class=\"navbar-form\" role=\"form\">
                        <div class=\"input-group width-full\">
                            <span class=\"input-group-addon\">#</span>
                            <input class=\"form-control width-full\" type=\"text\" placeholder=\"Digite uma #hashtag e descubra lindas fotos do Instagram\" />
                            <span class=\"input-group-btn\">
                                <button class=\"btn btn-primary\" type=\"button\">Go!</button>
                            </span>
                        </div>
                    </form>
                </div><!--/.navbar-collapse -->
            </div>
        </div>
    </section>
";
    }

    public function getTemplateName()
    {
        return "partials/layouts/default/header.twig";
    }

    public function getDebugInfo()
    {
        return array (  38 => 12,  35 => 7,  42 => 13,  32 => 6,  30 => 4,  45 => 7,  41 => 6,  37 => 5,  33 => 4,  29 => 3,  26 => 2,  20 => 1,  108 => 22,  105 => 21,  100 => 16,  93 => 9,  90 => 8,  84 => 24,  81 => 21,  78 => 19,  76 => 18,  73 => 17,  71 => 16,  68 => 15,  61 => 11,  58 => 8,  55 => 6,  53 => 5,  49 => 4,  44 => 1,  21 => 20,  14 => 7,  66 => 14,  59 => 14,  50 => 11,  47 => 16,  43 => 9,  40 => 8,  36 => 7,  31 => 4,  28 => 3,);
    }
}
