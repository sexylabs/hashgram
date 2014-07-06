<?php

/* templates/home/index.html.twig */
class __TwigTemplate_af5f98bae6a9be29603ab1923005a05a225a342a3c84b3ae93c168ceb89e1e9d extends Twig_Template
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
    <div class=\"container-fluid\">
        ";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groupedPhotos"]) ? $context["groupedPhotos"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["photos"]) {
            // line 7
            echo "            <div class=\"row\">
                ";
            // line 8
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["photos"]) ? $context["photos"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["photo"]) {
                // line 9
                echo "                    <div class=\"col-xs-3 no-padding\">
                        <img src=\"";
                // line 10
                echo twig_escape_filter($this->env, (isset($context["photo"]) ? $context["photo"] : null), "html", null, true);
                echo "\" class=\"img-responsive\" />
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['photo'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['photos'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "    </div> <!-- /container -->

";
    }

    public function getTemplateName()
    {
        return "templates/home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 15,  58 => 13,  49 => 10,  46 => 9,  42 => 8,  39 => 7,  35 => 6,  31 => 4,  28 => 3,);
    }
}
