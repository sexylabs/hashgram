<?php

/* base/incs/facebookOpenGraphTags.twig */
class __TwigTemplate_0d425966584c7397659ce89761c9e0224381df94251d9005ee12f46709ca76d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'facebookOpenGraphTags' => array($this, 'block_facebookOpenGraphTags'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('facebookOpenGraphTags', $context, $blocks);
    }

    public function block_facebookOpenGraphTags($context, array $blocks = array())
    {
        // line 2
        echo "    <meta property=\"og:site_name\" content=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "getName", array(), "method"), "html", null, true);
        echo "\" />
    <meta property=\"og:title\" content=\"Hashgram - Beautiful photos from Instagram\" />
    <meta property=\"og:type\" content=\"site\" />
    <meta property=\"og:url\" content=\"http://dev.afialho.com\" />
    <meta property=\"og:description\" content=\"As melhores fotos do Instagram\" />
    <meta property=\"og:image\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["assetUri"]) ? $context["assetUri"] : null), "html", null, true);
        echo "/assets/img/hashgram-share-default-og-image.png\" />
";
    }

    public function getTemplateName()
    {
        return "base/incs/facebookOpenGraphTags.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 2,  20 => 1,  181 => 41,  178 => 40,  170 => 36,  165 => 33,  157 => 30,  150 => 21,  147 => 20,  139 => 17,  133 => 43,  130 => 40,  126 => 37,  123 => 36,  120 => 34,  118 => 33,  114 => 31,  111 => 30,  103 => 24,  100 => 23,  97 => 20,  94 => 18,  91 => 17,  76 => 4,  71 => 1,  42 => 39,  35 => 7,  21 => 19,  14 => 16,  31 => 4,  28 => 29,);
    }
}
