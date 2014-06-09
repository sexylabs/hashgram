<?php

/* partials/layouts/default/facebookOpenGraphTags.twig */
class __TwigTemplate_d4d65c4cacd9ae6262ae7028b1cd639a78fd63b0b8561b278a5c2515717cfd82 extends Twig_Template
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
        return "partials/layouts/default/facebookOpenGraphTags.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 2,  20 => 1,  194 => 34,  191 => 33,  183 => 29,  178 => 26,  170 => 23,  163 => 14,  160 => 13,  152 => 10,  144 => 7,  138 => 36,  135 => 33,  131 => 30,  128 => 29,  125 => 27,  123 => 26,  119 => 24,  116 => 23,  108 => 17,  105 => 16,  102 => 13,  99 => 11,  96 => 10,  93 => 8,  90 => 7,  85 => 4,  80 => 1,  49 => 32,  42 => 28,  35 => 7,  28 => 12,  21 => 9,  14 => 6,);
    }
}
