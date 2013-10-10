<?php

/* SonataMediaBundle:Media:view.html.twig */
class __TwigTemplate_d96690c3b908bde8f0c6d9913e14157e extends Twig_Template
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
<h1>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["media"]) ? $context["media"] : $this->getContext($context, "media")), "name"), "html", null, true);
        echo "</h1>

<div>
    ";
        // line 15
        echo $this->env->getExtension('sonata_media')->media((isset($context["media"]) ? $context["media"] : $this->getContext($context, "media")), (isset($context["format"]) ? $context["format"] : $this->getContext($context, "format")), array());
        // line 16
        echo "</div>

<h2>Information</h2>
<ul>
    <li>Size : ";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["media"]) ? $context["media"] : $this->getContext($context, "media")), "size"), "html", null, true);
        echo "</li>
    <li>Width : ";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["media"]) ? $context["media"] : $this->getContext($context, "media")), "width"), "html", null, true);
        echo "</li>
    <li>Height : ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["media"]) ? $context["media"] : $this->getContext($context, "media")), "height"), "html", null, true);
        echo "</li>
    <li>Content Type : ";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["media"]) ? $context["media"] : $this->getContext($context, "media")), "contenttype"), "html", null, true);
        echo "</li>
    <li>Copyright : ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["media"]) ? $context["media"] : $this->getContext($context, "media")), "copyright"), "html", null, true);
        echo "</li>
    <li>Author name : ";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["media"]) ? $context["media"] : $this->getContext($context, "media")), "authorname"), "html", null, true);
        echo "</li>
    <li>CDN : ";
        // line 26
        if ($this->getAttribute((isset($context["media"]) ? $context["media"] : $this->getContext($context, "media")), "cdnisflushable")) {
            echo "to be flushed";
        } else {
            echo " last flush at ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["media"]) ? $context["media"] : $this->getContext($context, "media")), "cdnflushat")), "html", null, true);
            echo " ";
        }
        echo "</li>
</ul>

<h2>Formats</h2>
<ul>
    <li><a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("sonata_media_view", array("id" => $this->env->getExtension('sonata_admin')->getUrlsafeIdentifier((isset($context["media"]) ? $context["media"] : $this->getContext($context, "media"))), "format" => "reference")), "html", null, true);
        echo "\">reference</a></li>

    ";
        // line 33
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["formats"]) ? $context["formats"] : $this->getContext($context, "formats")));
        foreach ($context['_seq'] as $context["name"] => $context["format"]) {
            // line 34
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("sonata_media_view", array("id" => $this->env->getExtension('sonata_admin')->getUrlsafeIdentifier((isset($context["media"]) ? $context["media"] : $this->getContext($context, "media"))), "format" => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['format'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "SonataMediaBundle:Media:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  251 => 105,  233 => 98,  225 => 95,  218 => 91,  212 => 88,  198 => 80,  194 => 79,  184 => 74,  153 => 63,  134 => 55,  104 => 43,  129 => 46,  137 => 48,  90 => 34,  84 => 35,  568 => 179,  557 => 177,  553 => 176,  545 => 173,  540 => 171,  534 => 169,  532 => 168,  526 => 164,  517 => 161,  513 => 160,  507 => 159,  504 => 158,  500 => 157,  495 => 155,  488 => 153,  477 => 150,  470 => 135,  467 => 134,  463 => 133,  460 => 132,  449 => 123,  446 => 122,  441 => 105,  426 => 102,  419 => 98,  415 => 97,  410 => 96,  395 => 84,  392 => 83,  388 => 107,  386 => 95,  382 => 93,  380 => 83,  377 => 82,  369 => 136,  367 => 131,  361 => 127,  357 => 125,  352 => 121,  347 => 118,  333 => 117,  324 => 116,  307 => 115,  302 => 114,  300 => 113,  296 => 111,  291 => 109,  288 => 108,  282 => 80,  280 => 79,  275 => 77,  272 => 76,  249 => 70,  226 => 67,  223 => 66,  205 => 84,  197 => 56,  192 => 55,  186 => 54,  172 => 52,  148 => 44,  174 => 53,  114 => 47,  170 => 22,  155 => 56,  127 => 34,  124 => 51,  118 => 103,  113 => 42,  110 => 46,  53 => 22,  77 => 33,  70 => 22,  65 => 28,  160 => 48,  146 => 64,  126 => 45,  76 => 27,  23 => 13,  34 => 16,  100 => 42,  81 => 30,  58 => 25,  20 => 11,  480 => 151,  474 => 149,  469 => 158,  461 => 155,  457 => 131,  453 => 124,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 103,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 95,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 81,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 122,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 81,  283 => 88,  278 => 86,  268 => 85,  264 => 72,  258 => 81,  252 => 80,  247 => 78,  241 => 101,  229 => 96,  220 => 65,  214 => 61,  177 => 72,  169 => 51,  140 => 58,  132 => 108,  128 => 107,  107 => 33,  61 => 26,  273 => 96,  269 => 75,  254 => 92,  243 => 68,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 60,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 43,  102 => 39,  71 => 29,  67 => 30,  63 => 27,  59 => 14,  28 => 15,  93 => 35,  88 => 33,  78 => 20,  87 => 25,  44 => 22,  31 => 15,  21 => 12,  46 => 21,  25 => 12,  201 => 57,  196 => 90,  183 => 82,  171 => 61,  166 => 50,  163 => 66,  158 => 64,  156 => 66,  151 => 51,  142 => 42,  138 => 54,  136 => 39,  121 => 51,  117 => 44,  105 => 143,  91 => 29,  62 => 24,  49 => 22,  94 => 36,  89 => 37,  85 => 32,  75 => 17,  68 => 25,  56 => 25,  27 => 14,  38 => 17,  26 => 13,  24 => 13,  19 => 11,  79 => 33,  72 => 26,  69 => 30,  47 => 20,  40 => 21,  37 => 16,  22 => 12,  246 => 69,  157 => 47,  145 => 60,  139 => 45,  131 => 45,  123 => 44,  120 => 50,  115 => 43,  111 => 41,  108 => 144,  101 => 37,  98 => 36,  96 => 139,  83 => 34,  74 => 31,  66 => 24,  55 => 24,  52 => 24,  50 => 22,  43 => 20,  41 => 18,  35 => 16,  32 => 16,  29 => 14,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 71,  168 => 69,  164 => 19,  162 => 57,  154 => 52,  149 => 51,  147 => 61,  144 => 49,  141 => 48,  133 => 55,  130 => 54,  125 => 44,  122 => 44,  116 => 30,  112 => 51,  109 => 39,  106 => 40,  103 => 39,  99 => 31,  95 => 36,  92 => 36,  86 => 31,  82 => 39,  80 => 34,  73 => 27,  64 => 21,  60 => 26,  57 => 24,  54 => 19,  51 => 21,  48 => 23,  45 => 16,  42 => 19,  39 => 19,  36 => 20,  33 => 18,  30 => 16,);
    }
}
