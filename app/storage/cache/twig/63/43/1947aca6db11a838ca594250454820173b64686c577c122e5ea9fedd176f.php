<?php

/* base/incs/facebookOpenGraphTags.twig */
class __TwigTemplate_63431947aca6db11a838ca594250454820173b64686c577c122e5ea9fedd176f extends Twig_Template
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
        return array (  35 => 7,  26 => 2,  20 => 1,  144 => 44,  141 => 43,  136 => 37,  129 => 25,  126 => 24,  119 => 19,  116 => 18,  110 => 46,  107 => 43,  101 => 38,  99 => 37,  88 => 29,  84 => 27,  81 => 24,  77 => 21,  74 => 18,  58 => 4,  53 => 1,  28 => 42,  21 => 23,  14 => 17,);
    }
}
