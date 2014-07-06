<?php

/* templates/home/index.html */
class __TwigTemplate_980ada722f59dc14e53f6d6ad7df963e50a50951590098b3b7f6047c4e3047bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layouts/default.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layouts/default.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
    <section id=\"main-content\">
        <div class=\"container-fluid\">
            ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groupedPhotos"]) ? $context["groupedPhotos"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["photos"]) {
            // line 8
            echo "                <div class=\"row\">
                    ";
            // line 9
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["photos"]) ? $context["photos"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["photo"]) {
                // line 10
                echo "                        <div class=\"col-xs-3 no-padding\">
                            <img src=\"";
                // line 11
                echo twig_escape_filter($this->env, (isset($context["photo"]) ? $context["photo"] : null), "html", null, true);
                echo "\" class=\"img-responsive\" />
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['photo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['photos'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "        </div> <!-- /container -->
    </section>
";
    }

    public function getTemplateName()
    {
        return "templates/home/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 16,  59 => 14,  50 => 11,  47 => 10,  43 => 9,  40 => 8,  36 => 7,  31 => 4,  28 => 3,);
    }
}
