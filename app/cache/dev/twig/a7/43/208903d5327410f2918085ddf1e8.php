<?php

/* SonataNewsBundle:Mail:comment_notification.txt.twig */
class __TwigTemplate_a743208903d5327410f2918085ddf1e8 extends Twig_Template
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
        // line 2
        echo $this->env->getExtension('translator')->trans("mail_title_comment_notification", array("%post_title%" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "title"), "%blog_title%" => $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "title"), "%comment_message%" => $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "message"), "%comment_email%" => $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "email"), "%comment_url%" => $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "url"), "%comment_name%" => $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "name"), "%post_url%" => $this->env->getExtension('routing')->getUrl("sonata_news_view", array("permalink" => $this->getAttribute($this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "permalinkGenerator"), "generate", array(0 => (isset($context["post"]) ? $context["post"] : $this->getContext($context, "post"))), "method")), true), "%comment_invalid_link%" => $this->env->getExtension('routing')->getUrl("sonata_news_comment_moderation", array("commentId" => $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "id"), "hash" => (isset($context["hash"]) ? $context["hash"] : $this->getContext($context, "hash")), "status" => 0), true), "%comment_valid_link%" => $this->env->getExtension('routing')->getUrl("sonata_news_comment_moderation", array("commentId" => $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "id"), "hash" => (isset($context["hash"]) ? $context["hash"] : $this->getContext($context, "hash")), "status" => 1), true)), "SonataNewsBundle");
        // line 12
        echo "
";
    }

    public function getTemplateName()
    {
        return "SonataNewsBundle:Mail:comment_notification.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 60,  155 => 56,  127 => 48,  124 => 52,  118 => 44,  113 => 42,  110 => 44,  53 => 31,  77 => 33,  70 => 32,  65 => 17,  160 => 58,  146 => 64,  126 => 56,  76 => 36,  23 => 15,  34 => 19,  100 => 27,  81 => 34,  58 => 30,  20 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 52,  132 => 59,  128 => 49,  107 => 36,  61 => 31,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 40,  71 => 17,  67 => 18,  63 => 23,  59 => 22,  28 => 17,  93 => 29,  88 => 35,  78 => 19,  87 => 25,  44 => 18,  31 => 20,  21 => 12,  46 => 24,  25 => 14,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 57,  156 => 66,  151 => 63,  142 => 53,  138 => 54,  136 => 50,  121 => 51,  117 => 44,  105 => 40,  91 => 41,  62 => 30,  49 => 24,  94 => 28,  89 => 37,  85 => 38,  75 => 17,  68 => 22,  56 => 28,  27 => 16,  38 => 21,  26 => 2,  24 => 16,  19 => 2,  79 => 18,  72 => 26,  69 => 25,  47 => 28,  40 => 17,  37 => 20,  22 => 14,  246 => 90,  157 => 21,  145 => 54,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 46,  111 => 37,  108 => 43,  101 => 32,  98 => 31,  96 => 43,  83 => 25,  74 => 14,  66 => 31,  55 => 21,  52 => 27,  50 => 30,  43 => 23,  41 => 23,  35 => 20,  32 => 15,  29 => 18,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 61,  168 => 72,  164 => 59,  162 => 57,  154 => 20,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 55,  125 => 44,  122 => 55,  116 => 52,  112 => 51,  109 => 34,  106 => 37,  103 => 28,  99 => 31,  95 => 35,  92 => 36,  86 => 40,  82 => 39,  80 => 41,  73 => 19,  64 => 33,  60 => 17,  57 => 34,  54 => 14,  51 => 20,  48 => 11,  45 => 9,  42 => 8,  39 => 6,  36 => 16,  33 => 18,  30 => 1,);
    }
}
