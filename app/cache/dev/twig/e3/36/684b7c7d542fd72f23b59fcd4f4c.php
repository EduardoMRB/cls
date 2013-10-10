<?php

/* SonataNewsBundle:Post:archive.rss.twig */
class __TwigTemplate_e336684b7c7d542fd72f23b59fcd4f4c extends Twig_Template
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
        echo "<?xml version=\"1.0\" ?>
<rss version=\"2.0\">
    <channel>
        <title>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "title"), "html", null, true);
        if ((isset($context["tag"]) ? $context["tag"] : $this->getContext($context, "tag"))) {
            echo " : ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tag"]) ? $context["tag"] : $this->getContext($context, "tag")), "name"), "html", null, true);
        }
        echo "</title>
        <link>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "link"), "html", null, true);
        echo "</link>
        <description>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "description"), "html", null, true);
        echo "</description>
        ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "getResults", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 18
            echo "             <item>
                  <title>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "title"), "html", null, true);
            echo "</title>
                  <link>";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("sonata_news_view", array("permalink" => $this->env->getExtension('sonata_news')->generatePermalink((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post"))))), "html", null, true);
            echo "</link>
                  <description><![CDATA[ ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "abstract"), "html", null, true);
            echo " ]]></description>
                  <pubDate>";
            // line 22
            echo $this->env->getExtension('sonata_intl_datetime')->formatDatetime($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "publicationDateStart"), "eee, MM LLL yyyy HH:mm:ss zzz");
            echo "</pubDate>
                  <gui>";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("sonata_news_view", array("permalink" => $this->env->getExtension('sonata_news')->generatePermalink((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post"))))), "html", null, true);
            echo "</gui>
             </item>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "    </channel>
</rss>
";
    }

    public function getTemplateName()
    {
        return "SonataNewsBundle:Post:archive.rss.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 36,  70 => 33,  65 => 17,  160 => 23,  146 => 64,  126 => 56,  76 => 36,  23 => 15,  34 => 19,  100 => 27,  81 => 37,  58 => 18,  20 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 59,  128 => 49,  107 => 36,  61 => 31,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 47,  71 => 17,  67 => 18,  63 => 23,  59 => 22,  28 => 14,  93 => 29,  88 => 6,  78 => 19,  87 => 25,  44 => 18,  31 => 19,  21 => 2,  46 => 24,  25 => 14,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 63,  138 => 54,  136 => 60,  121 => 46,  117 => 44,  105 => 40,  91 => 41,  62 => 30,  49 => 20,  94 => 28,  89 => 37,  85 => 38,  75 => 17,  68 => 22,  56 => 28,  27 => 16,  38 => 21,  26 => 2,  24 => 14,  19 => 11,  79 => 18,  72 => 26,  69 => 25,  47 => 19,  40 => 17,  37 => 21,  22 => 14,  246 => 90,  157 => 21,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 31,  96 => 43,  83 => 25,  74 => 14,  66 => 31,  55 => 21,  52 => 27,  50 => 30,  43 => 8,  41 => 23,  35 => 20,  32 => 15,  29 => 18,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 20,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 55,  116 => 52,  112 => 51,  109 => 34,  106 => 48,  103 => 28,  99 => 31,  95 => 28,  92 => 43,  86 => 40,  82 => 39,  80 => 41,  73 => 19,  64 => 14,  60 => 17,  57 => 34,  54 => 14,  51 => 20,  48 => 11,  45 => 9,  42 => 8,  39 => 6,  36 => 16,  33 => 3,  30 => 1,);
    }
}
