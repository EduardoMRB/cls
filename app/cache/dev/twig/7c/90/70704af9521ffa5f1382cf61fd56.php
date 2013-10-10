<?php

/* SonataMediaBundle:Block:block_gallery.html.twig */
class __TwigTemplate_7c9070704af9521ffa5f1382cf61fd56 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataBlockBundle:Block:block_base.html.twig");

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataBlockBundle:Block:block_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_block($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "format")) {
            // line 15
            echo "        ";
            if ($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "title")) {
                // line 16
                echo "            <h3 class=\"sonata-media-block-media-title\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "title"), "html", null, true);
                echo "</h3>
        ";
            }
            // line 18
            echo "
        <div class=\"sonata-media-block-gallery-container\">
            <div id=\"sonata-media-block-gallery-";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "id"), "html", null, true);
            echo "\" class=\"nivoGallery\">
                <ul>
                    ";
            // line 22
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 23
                echo "                        <li data-type=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), "type"), "html", null, true);
                echo "\" data-title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), "title"), "html", null, true);
                echo "\" data-caption=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), "caption"), "html", null, true);
                echo "\">
                            ";
                // line 24
                if (($this->getAttribute((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), "type") == "image")) {
                    // line 25
                    echo "                                ";
                    echo $this->env->getExtension('sonata_media')->media($this->getAttribute((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), "media"), $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "format"), array());
                    // line 26
                    echo "                            ";
                } elseif (($this->getAttribute((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), "type") == "video")) {
                    // line 27
                    echo "                                ";
                    echo $this->env->getExtension('sonata_media')->media($this->getAttribute((isset($context["element"]) ? $context["element"] : $this->getContext($context, "element")), "media"), $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "format"), array());
                    // line 28
                    echo "                            ";
                }
                // line 29
                echo "                        </li>
                    ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 31
                echo "                        ";
                // line 32
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "                </ul>
            </div>
        </div>

        <script type=\"text/javascript\">
            jQuery(document).ready(function() {
                jQuery('#sonata-media-block-gallery-";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "id"), "html", null, true);
            echo "').nivoGallery({
                     pauseTime:     ";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "pauseTime"), "html", null, true);
            echo ",
                     animSpeed:     ";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "animSpeed"), "html", null, true);
            echo ",
                     effect:        'fade',
                     startPaused:   ";
            // line 43
            if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "startPaused") == 1)) {
                echo "true";
            } else {
                echo "false";
            }
            echo ",
                     directionNav:  ";
            // line 44
            if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "directionNav") == 1)) {
                echo "true";
            } else {
                echo "false";
            }
            echo ",
                     progressBar:   ";
            // line 45
            if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "progressBar") == 1)) {
                echo "true";
            } else {
                echo "false";
            }
            // line 46
            echo "                });
            });
        </script>
    ";
        }
    }

    public function getTemplateName()
    {
        return "SonataMediaBundle:Block:block_gallery.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 46,  90 => 25,  84 => 27,  568 => 179,  557 => 177,  553 => 176,  545 => 173,  540 => 171,  534 => 169,  532 => 168,  526 => 164,  517 => 161,  513 => 160,  507 => 159,  504 => 158,  500 => 157,  495 => 155,  488 => 153,  477 => 150,  470 => 135,  467 => 134,  463 => 133,  460 => 132,  449 => 123,  446 => 122,  441 => 105,  426 => 102,  419 => 98,  415 => 97,  410 => 96,  395 => 84,  392 => 83,  388 => 107,  386 => 95,  382 => 93,  380 => 83,  377 => 82,  369 => 136,  367 => 131,  361 => 127,  357 => 125,  352 => 121,  347 => 118,  333 => 117,  324 => 116,  307 => 115,  302 => 114,  300 => 113,  296 => 111,  291 => 109,  288 => 108,  282 => 80,  280 => 79,  275 => 77,  272 => 76,  249 => 70,  226 => 67,  223 => 66,  205 => 59,  197 => 56,  192 => 55,  186 => 54,  172 => 52,  148 => 44,  174 => 53,  114 => 102,  170 => 22,  155 => 56,  127 => 34,  124 => 52,  118 => 103,  113 => 42,  110 => 41,  53 => 31,  77 => 28,  70 => 22,  65 => 25,  160 => 48,  146 => 64,  126 => 56,  76 => 36,  23 => 12,  34 => 15,  100 => 94,  81 => 30,  58 => 30,  20 => 1,  480 => 151,  474 => 149,  469 => 158,  461 => 155,  457 => 131,  453 => 124,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 103,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 95,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 81,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 122,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 81,  283 => 88,  278 => 86,  268 => 85,  264 => 72,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 65,  214 => 61,  177 => 65,  169 => 51,  140 => 41,  132 => 108,  128 => 107,  107 => 33,  61 => 31,  273 => 96,  269 => 75,  254 => 92,  243 => 68,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 60,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 31,  102 => 39,  71 => 26,  67 => 30,  63 => 28,  59 => 14,  28 => 13,  93 => 138,  88 => 32,  78 => 20,  87 => 25,  44 => 20,  31 => 14,  21 => 12,  46 => 21,  25 => 13,  201 => 57,  196 => 90,  183 => 82,  171 => 61,  166 => 50,  163 => 49,  158 => 57,  156 => 66,  151 => 45,  142 => 42,  138 => 54,  136 => 39,  121 => 51,  117 => 44,  105 => 143,  91 => 29,  62 => 24,  49 => 23,  94 => 33,  89 => 37,  85 => 22,  75 => 17,  68 => 25,  56 => 13,  27 => 16,  38 => 18,  26 => 13,  24 => 13,  19 => 11,  79 => 18,  72 => 26,  69 => 17,  47 => 20,  40 => 19,  37 => 16,  22 => 12,  246 => 69,  157 => 47,  145 => 43,  139 => 45,  131 => 45,  123 => 44,  120 => 40,  115 => 43,  111 => 37,  108 => 144,  101 => 32,  98 => 140,  96 => 139,  83 => 64,  74 => 27,  66 => 24,  55 => 25,  52 => 22,  50 => 22,  43 => 18,  41 => 19,  35 => 17,  32 => 15,  29 => 14,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 61,  168 => 72,  164 => 19,  162 => 57,  154 => 46,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 35,  125 => 44,  122 => 104,  116 => 30,  112 => 51,  109 => 34,  106 => 40,  103 => 32,  99 => 31,  95 => 30,  92 => 36,  86 => 31,  82 => 39,  80 => 29,  73 => 27,  64 => 21,  60 => 19,  57 => 23,  54 => 19,  51 => 23,  48 => 22,  45 => 16,  42 => 19,  39 => 18,  36 => 6,  33 => 18,  30 => 1,);
    }
}
