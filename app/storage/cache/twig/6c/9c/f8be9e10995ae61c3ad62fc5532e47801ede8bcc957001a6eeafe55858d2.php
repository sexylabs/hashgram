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
        echo "    <div class=\"navbar navbar-default navbar-fixed-top\" role=\"navigation\">
        <div class=\"container-fluid\">
            <div class=\"navbar-header col-xs-8 no-padding\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <form class=\"navbar-form no-padding\" role=\"form\">
                    <div class=\"input-group width-full\">
                        <span class=\"input-group-addon\">#</span>
                        <input class=\"form-control width-full\" type=\"text\" placeholder=\"Digite uma #hashtag e descubra lindas fotos do Instagram\" />
                        <span class=\"input-group-btn\">
                            <button class=\"btn btn-primary\" type=\"button\">Go!</button>
                        </span>
                    </div>
                </form>
            </div>
            <div class=\"navbar-collapse collapse\">
                <a class=\"navbar-brand pull-right no-padding-right\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "urlFor", array(0 => "home"), "method"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "getName", array(), "method"), "html", null, true);
        echo "</a>
            </div><!--/.navbar-collapse -->
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "partials/layouts/default/header.twig";
    }

    public function getDebugInfo()
    {
        return array (  48 => 22,  26 => 2,  20 => 1,);
    }
}
