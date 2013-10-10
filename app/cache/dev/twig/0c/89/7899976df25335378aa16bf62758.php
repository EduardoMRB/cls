<?php

/* SonataMediaBundle:Provider:view_dailymotion.html.twig */
class __TwigTemplate_0c897899976df25335378aa16bf62758 extends Twig_Template
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
        // line 11
        echo "
<object width=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "width"), "html", null, true);
        echo "\" height=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "height"), "html", null, true);
        echo "\">
    <param name=\"movie\" value=\"//www.dailymotion.com/swf/video/";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["media"]) ? $context["media"] : $this->getContext($context, "media")), "providerreference"), "html", null, true);
        echo "?";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "player_parameters"), "html", null, true);
        echo "\"></param>
    <param name=\"allowFullScreen\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "allowFullScreen"), "html", null, true);
        echo "\"></param>
    <param name=\"allowScriptAccess\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "allowScriptAccess"), "html", null, true);
        echo "\"></param>

    <embed
        type=\"application/x-shockwave-flash\"
        src=\"//www.dailymotion.com/swf/video/";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["media"]) ? $context["media"] : $this->getContext($context, "media")), "providerreference"), "html", null, true);
        echo "?";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "player_parameters"), "html", null, true);
        echo "\"
        width=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "width"), "html", null, true);
        echo "\"
        height=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "height"), "html", null, true);
        echo "\"
        allowfullscreen=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "allowFullScreen"), "html", null, true);
        echo "\"
        allowscriptaccess=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "allowScriptAccess"), "html", null, true);
        echo "\">
    </embed>
</object>
";
    }

    public function getTemplateName()
    {
        return "SonataMediaBundle:Provider:view_dailymotion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  568 => 179,  557 => 177,  553 => 176,  545 => 173,  540 => 171,  534 => 169,  532 => 168,  526 => 164,  517 => 161,  513 => 160,  507 => 159,  504 => 158,  500 => 157,  495 => 155,  488 => 153,  477 => 150,  470 => 135,  467 => 134,  463 => 133,  460 => 132,  449 => 123,  446 => 122,  441 => 105,  426 => 102,  419 => 98,  415 => 97,  410 => 96,  395 => 84,  392 => 83,  388 => 107,  386 => 95,  382 => 93,  380 => 83,  377 => 82,  369 => 136,  367 => 131,  361 => 127,  357 => 125,  352 => 121,  347 => 118,  333 => 117,  324 => 116,  307 => 115,  302 => 114,  300 => 113,  296 => 111,  291 => 109,  288 => 108,  282 => 80,  280 => 79,  275 => 77,  272 => 76,  249 => 70,  226 => 67,  223 => 66,  205 => 59,  197 => 56,  192 => 55,  186 => 54,  172 => 52,  148 => 44,  174 => 53,  114 => 102,  170 => 22,  155 => 56,  127 => 34,  124 => 52,  118 => 103,  113 => 42,  110 => 44,  53 => 31,  77 => 31,  70 => 32,  65 => 25,  160 => 48,  146 => 64,  126 => 56,  76 => 36,  23 => 12,  34 => 14,  100 => 94,  81 => 30,  58 => 30,  20 => 11,  480 => 151,  474 => 149,  469 => 158,  461 => 155,  457 => 131,  453 => 124,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 103,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 95,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 81,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 122,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 81,  283 => 88,  278 => 86,  268 => 85,  264 => 72,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 65,  214 => 61,  177 => 65,  169 => 51,  140 => 41,  132 => 108,  128 => 107,  107 => 36,  61 => 31,  273 => 96,  269 => 75,  254 => 92,  243 => 68,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 60,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 31,  102 => 142,  71 => 28,  67 => 27,  63 => 23,  59 => 22,  28 => 13,  93 => 138,  88 => 74,  78 => 29,  87 => 25,  44 => 18,  31 => 15,  21 => 12,  46 => 20,  25 => 13,  201 => 57,  196 => 90,  183 => 82,  171 => 61,  166 => 50,  163 => 49,  158 => 57,  156 => 66,  151 => 45,  142 => 42,  138 => 54,  136 => 39,  121 => 51,  117 => 44,  105 => 143,  91 => 75,  62 => 24,  49 => 23,  94 => 28,  89 => 37,  85 => 38,  75 => 17,  68 => 26,  56 => 22,  27 => 16,  38 => 15,  26 => 2,  24 => 14,  19 => 11,  79 => 18,  72 => 26,  69 => 25,  47 => 22,  40 => 15,  37 => 14,  22 => 12,  246 => 69,  157 => 47,  145 => 43,  139 => 45,  131 => 52,  123 => 33,  120 => 40,  115 => 46,  111 => 37,  108 => 144,  101 => 32,  98 => 140,  96 => 139,  83 => 64,  74 => 14,  66 => 31,  55 => 21,  52 => 24,  50 => 20,  43 => 16,  41 => 19,  35 => 17,  32 => 15,  29 => 25,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 61,  168 => 72,  164 => 19,  162 => 57,  154 => 46,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 35,  125 => 44,  122 => 104,  116 => 30,  112 => 51,  109 => 34,  106 => 37,  103 => 28,  99 => 31,  95 => 35,  92 => 36,  86 => 65,  82 => 39,  80 => 41,  73 => 27,  64 => 33,  60 => 19,  57 => 34,  54 => 22,  51 => 20,  48 => 21,  45 => 19,  42 => 18,  39 => 18,  36 => 17,  33 => 18,  30 => 1,);
    }
}