<?php

/* SonataNewsBundle:Post:archive.html.twig */
class __TwigTemplate_cbfdf194f0b0abb1d0c4a8b5db61412f extends Twig_Template
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
        // line 13
        echo "
<h1>";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_archive", array(), "SonataNewsBundle"), "html", null, true);
        echo "</h1>

<div class=\"sonata-blog-post-list\">
    ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "getResults", array(), "method"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 18
            echo "        <div class=\"sonata-blog-post-container\">
            <div class=\"sonata-blog-post-date-container\">
                ";
            // line 20
            echo $this->env->getExtension('sonata_intl_datetime')->formatDate($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "publicationDateStart"));
            echo "
            </div>
            <h2 class=\"sonata-blog-post-title\">
                <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("sonata_news_view", array("permalink" => $this->env->getExtension('sonata_news')->generatePermalink((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post"))))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "title"), "html", null, true);
            echo "</a>
                <span class=\"sonata-blog-post-author\">";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("archive_author", array("%author%" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "author")), "SonataNewsBundle"), "html", null, true);
            echo "</span>
            </h2>
            <div class=\"sonata-blog-post-information\">

                <div class=\"sonata-blog-post-tag-container\">
                    <div class=\"sonata-blog-post-tag-title\">
                        ";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->transchoice("published_under", twig_length_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "tags")), array(), "SonataNewsBundle"), "html", null, true);
            echo "
                    </div>
                    <div class=\"sonata-blog-post-tag-list\">
                        ";
            // line 33
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "tags"));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 34
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("sonata_news_tag", array("tag" => $this->getAttribute((isset($context["tag"]) ? $context["tag"] : $this->getContext($context, "tag")), "slug"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tag"]) ? $context["tag"] : $this->getContext($context, "tag")), "name"), "html", null, true);
                echo "</a>
                            ";
                // line 35
                if ((!$this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "last"))) {
                    echo ", ";
                }
                // line 36
                echo "                        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "                    </div>
                </div>
            </div>

            <div class=\"sonata-blog-post-abtract\">
                ";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "abstract"), "html", null, true);
            echo "
            </div>
            <span class=\"sonata-blog-post-comments-count\">";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("comments_count", array("%comments_count%" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "commentsCount")), "SonataNewsBundle"), "html", null, true);
            echo "</span>
        </div>

    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 48
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("no_post_found", array(), "SonataNewsBundle"), "html", null, true);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "
    <div class=\"sonata-blog-post-pagination\">
        ";
        // line 52
        if ($this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "haveToPaginate", array(), "method")) {
            // line 53
            echo "            ";
            if (($this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "page") != $this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "previouspage"))) {
                // line 54
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["route_parameters"]) ? $context["route_parameters"] : $this->getContext($context, "route_parameters")), array("page" => $this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "previouspage")))), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_previous_page", array(), "SonataNewsBundle"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_previous_page", array(), "SonataNewsBundle"), "html", null, true);
                echo "</a>
            ";
            }
            // line 56
            echo "
            ";
            // line 57
            if (($this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "page") != $this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "nextpage"))) {
                // line 58
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), twig_array_merge((isset($context["route_parameters"]) ? $context["route_parameters"] : $this->getContext($context, "route_parameters")), array("page" => $this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "nextpage")))), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_next_page", array(), "SonataNewsBundle"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_next_page", array(), "SonataNewsBundle"), "html", null, true);
                echo "</a>
            ";
            }
            // line 60
            echo "        ";
        }
        // line 61
        echo "    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "SonataNewsBundle:Post:archive.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 60,  155 => 56,  127 => 48,  124 => 52,  118 => 44,  113 => 42,  110 => 44,  53 => 31,  77 => 33,  70 => 32,  65 => 17,  160 => 58,  146 => 64,  126 => 56,  76 => 36,  23 => 15,  34 => 19,  100 => 27,  81 => 34,  58 => 30,  20 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 52,  132 => 59,  128 => 49,  107 => 36,  61 => 31,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 40,  71 => 17,  67 => 18,  63 => 23,  59 => 22,  28 => 17,  93 => 29,  88 => 35,  78 => 19,  87 => 25,  44 => 18,  31 => 20,  21 => 2,  46 => 24,  25 => 14,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 57,  156 => 66,  151 => 63,  142 => 53,  138 => 54,  136 => 50,  121 => 51,  117 => 44,  105 => 40,  91 => 41,  62 => 30,  49 => 24,  94 => 28,  89 => 37,  85 => 38,  75 => 17,  68 => 22,  56 => 28,  27 => 16,  38 => 21,  26 => 2,  24 => 16,  19 => 13,  79 => 18,  72 => 26,  69 => 25,  47 => 28,  40 => 17,  37 => 20,  22 => 14,  246 => 90,  157 => 21,  145 => 54,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 46,  111 => 37,  108 => 43,  101 => 32,  98 => 31,  96 => 43,  83 => 25,  74 => 14,  66 => 31,  55 => 21,  52 => 27,  50 => 30,  43 => 23,  41 => 23,  35 => 20,  32 => 15,  29 => 18,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 61,  168 => 72,  164 => 59,  162 => 57,  154 => 20,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 55,  125 => 44,  122 => 55,  116 => 52,  112 => 51,  109 => 34,  106 => 37,  103 => 28,  99 => 31,  95 => 35,  92 => 36,  86 => 40,  82 => 39,  80 => 41,  73 => 19,  64 => 33,  60 => 17,  57 => 34,  54 => 14,  51 => 20,  48 => 11,  45 => 9,  42 => 8,  39 => 6,  36 => 16,  33 => 18,  30 => 1,);
    }
}
