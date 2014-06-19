<?php

/* macros/bootstrap.twig */
class __TwigTemplate_f74aa145596b6832bb82bed004ff1c78dfcf9d4bb87a791fad2fea9ebc2ad2fd extends Twig_Template
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
        // line 10
        echo "
";
        // line 17
        echo "
";
    }

    // line 2
    public function getalert($_message = null, $_type = null, $_style = null)
    {
        $context = $this->env->mergeGlobals(array(
            "message" => $_message,
            "type" => $_type,
            "style" => $_style,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 3
            echo "\t";
            if (((isset($context["message"]) ? $context["message"] : null) != "")) {
                // line 4
                echo "\t\t<div class=\"alert alert-";
                echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "success")) : ("success")), "html", null, true);
                echo " alert-block\">
            <a class=\"close\" data-dismiss=\"alert\">×</a>
\t\t    ";
                // line 6
                echo (isset($context["message"]) ? $context["message"] : null);
                echo "
\t\t</div>
\t";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 11
    public function getlabel($_message = null, $_type = null)
    {
        $context = $this->env->mergeGlobals(array(
            "message" => $_message,
            "type" => $_type,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 12
            echo "\t";
            if (((isset($context["message"]) ? $context["message"] : null) == "")) {
                // line 13
                echo "\t";
            } else {
                // line 14
                echo "\t<span class=\"label label-";
                echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
                echo "\">";
                echo (isset($context["message"]) ? $context["message"] : null);
                echo "</span>
\t";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 18
    public function getbtn($_message = null, $_type = null, $_attributes = null, $_element = null, $_size = null)
    {
        $context = $this->env->mergeGlobals(array(
            "message" => $_message,
            "type" => $_type,
            "attributes" => $_attributes,
            "element" => $_element,
            "size" => $_size,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 19
            echo "\t<";
            echo twig_escape_filter($this->env, (isset($context["element"]) ? $context["element"] : null), "html", null, true);
            echo " class=\"btn btn-";
            echo twig_escape_filter($this->env, (isset($context["size"]) ? $context["size"] : null), "html", null, true);
            echo " btn-";
            echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, ((array_key_exists("attributes", $context)) ? (_twig_default_filter((isset($context["attributes"]) ? $context["attributes"] : null), "")) : ("")), "html", null, true);
            echo ">";
            echo (isset($context["message"]) ? $context["message"] : null);
            echo "</";
            echo twig_escape_filter($this->env, (isset($context["element"]) ? $context["element"] : null), "html", null, true);
            echo ">
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "macros/bootstrap.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 19,  99 => 18,  82 => 14,  79 => 13,  76 => 12,  64 => 11,  49 => 6,  43 => 4,  40 => 3,  27 => 2,  22 => 17,  47 => 18,  45 => 17,  33 => 7,  30 => 6,  28 => 5,  24 => 4,  19 => 10,);
    }
}
