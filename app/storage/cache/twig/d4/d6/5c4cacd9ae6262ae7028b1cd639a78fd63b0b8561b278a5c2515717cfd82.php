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
        return array (  35 => 7,  42 => 13,  32 => 6,  30 => 4,  45 => 7,  41 => 6,  37 => 5,  33 => 4,  29 => 3,  26 => 2,  20 => 1,  108 => 22,  105 => 21,  100 => 16,  93 => 9,  90 => 8,  84 => 24,  81 => 21,  78 => 19,  76 => 18,  73 => 17,  71 => 16,  68 => 15,  61 => 11,  58 => 8,  55 => 6,  53 => 5,  49 => 4,  44 => 1,  21 => 20,  14 => 7,  66 => 14,  59 => 14,  50 => 11,  47 => 10,  43 => 9,  40 => 8,  36 => 7,  31 => 4,  28 => 3,);
    }
}
