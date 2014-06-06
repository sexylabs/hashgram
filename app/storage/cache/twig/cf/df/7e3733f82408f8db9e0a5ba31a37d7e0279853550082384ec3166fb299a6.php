<?php

/* base/fluid.html.twig */
class __TwigTemplate_cfdf7e3733f82408f8db9e0a5ba31a37d7e0279853550082384ec3166fb299a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->env->loadTemplate("base/stylesheets.twig");
        // line 11
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."base/stylesheets.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $_trait_1 = $this->env->loadTemplate("base/sidebar.twig");
        // line 59
        if (!$_trait_1->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."base/sidebar.twig".'" cannot be used as a trait.');
        }
        $_trait_1_blocks = $_trait_1->getBlocks();

        $_trait_2 = $this->env->loadTemplate("base/javascripts.twig");
        // line 124
        if (!$_trait_2->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."base/javascripts.twig".'" cannot be used as a trait.');
        }
        $_trait_2_blocks = $_trait_2->getBlocks();

        $this->traits = array_merge(
            $_trait_0_blocks,
            $_trait_1_blocks,
            $_trait_2_blocks
        );

        $this->blocks = array_merge(
            $this->traits,
            array(
                'stylesheets' => array($this, 'block_stylesheets'),
                'navbar' => array($this, 'block_navbar'),
                'sidebar' => array($this, 'block_sidebar'),
                'content' => array($this, 'block_content'),
                'javascripts' => array($this, 'block_javascripts'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <title>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "getName", array(), "method"), "html", null, true);
        echo "</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <!-- Le styles -->
 ";
        // line 12
        echo "    
    ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 25
        echo "
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel=\"shortcut icon\" href=\"../assets/ico/favicon.ico\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"../assets/ico/apple-touch-icon-114-precomposed.png\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"../assets/ico/apple-touch-icon-72-precomposed.png\">
    <link rel=\"apple-touch-icon-precomposed\" href=\"../assets/ico/apple-touch-icon-57-precomposed.png\">
  </head>

  <body>

    <div class=\"navbar navbar-fixed-top\">
      <div class=\"navbar-inner\">
        <div class=\"container-fluid\">
          ";
        // line 43
        $this->displayBlock('navbar', $context, $blocks);
        // line 52
        echo "        </div>
      </div>
    </div>

    <div class=\"container-fluid\">
      <div class=\"row-fluid\">
        <div class=\"span3\">
\t\t";
        // line 60
        echo "          ";
        $this->displayBlock('sidebar', $context, $blocks);
        // line 64
        echo "        </div><!--/span-->
        <div class=\"span9\">
        ";
        // line 66
        if ((isset($context["flash"]) ? $context["flash"] : null)) {
            // line 67
            echo "        \t";
            $this->env->loadTemplate("base/components/flash.twig")->display($context);
            // line 68
            echo "        ";
        }
        // line 69
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 110
        echo "        </div><!--/span-->
      </div><!--/row-->

      <hr>

      <footer>
        <p>&copy; Company 2012</p>
      </footer>

    </div><!--/.fluid-container-->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    ";
        // line 125
        echo "\t";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 128
        echo "
  </body>
</html>
";
    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 14
        echo "    \t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t\t <style type=\"text/css\">
\t      body {
\t        padding-top: 60px;
\t        padding-bottom: 40px;
\t      }
\t      .sidebar-nav {
\t        padding: 9px 0;
\t      }
\t    </style>
    ";
    }

    // line 43
    public function block_navbar($context, array $blocks = array())
    {
        // line 44
        echo "\t          <a class=\"brand\" href=\"#\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "getName", array(), "method"), "html", null, true);
        echo "</a>
\t          <ul class=\"nav\">
\t            <li class=\"active\"><a href=\"#\"><i class=\"icon icon-white icon-home\"></i> Home</a></li>
\t          </ul>
\t          ";
        // line 48
        if ((isset($context["currentUser"]) ? $context["currentUser"] : null)) {
            // line 49
            echo "\t          \t<p class=\"pull-right\">Logged in as <a href=\"#\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "getFullName", array(), "method"), "html", null, true);
            echo "</a></p>
\t          ";
        }
        // line 51
        echo "        ";
    }

    // line 60
    public function block_sidebar($context, array $blocks = array())
    {
        // line 61
        echo "        \t";
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "
        
       \t";
    }

    // line 69
    public function block_content($context, array $blocks = array())
    {
        // line 70
        echo "          <div class=\"hero-unit\">
            <h1>Hello, world!</h1>
            <p>This is a template for a simple marketing or informational website. It includes a large callout called the hero unit and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
            <p><a class=\"btn btn-primary btn-large\">Learn more &raquo;</a></p>
          </div>
          <div class=\"row-fluid\">
            <div class=\"span4\">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class=\"btn\" href=\"#\">View details &raquo;</a></p>
            </div><!--/span-->
            <div class=\"span4\">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class=\"btn\" href=\"#\">View details &raquo;</a></p>
            </div><!--/span-->
            <div class=\"span4\">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class=\"btn\" href=\"#\">View details &raquo;</a></p>
            </div><!--/span-->
          </div><!--/row-->
          <div class=\"row-fluid\">
            <div class=\"span4\">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class=\"btn\" href=\"#\">View details &raquo;</a></p>
            </div><!--/span-->
            <div class=\"span4\">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class=\"btn\" href=\"#\">View details &raquo;</a></p>
            </div><!--/span-->
            <div class=\"span4\">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class=\"btn\" href=\"#\">View details &raquo;</a></p>
            </div><!--/span-->
          </div><!--/row-->
          ";
    }

    // line 125
    public function block_javascripts($context, array $blocks = array())
    {
        // line 126
        echo "\t\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "base/fluid.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  251 => 126,  248 => 125,  205 => 70,  202 => 69,  194 => 61,  191 => 60,  187 => 51,  181 => 49,  179 => 48,  171 => 44,  168 => 43,  152 => 14,  149 => 13,  142 => 128,  139 => 125,  123 => 110,  120 => 69,  117 => 68,  114 => 67,  112 => 66,  108 => 64,  105 => 60,  96 => 52,  94 => 43,  74 => 25,  72 => 13,  69 => 12,  60 => 5,  54 => 1,  28 => 124,  21 => 59,  14 => 11,);
    }
}
