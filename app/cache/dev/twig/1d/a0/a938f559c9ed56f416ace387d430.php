<?php

/* WebProfilerBundle:Profiler:search.html.twig */
class __TwigTemplate_1da0a938f559c9ed56f416ace387d430 extends Twig_Template
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
        // line 1
        echo "<div class=\"search clearfix\" id=\"searchBar\">
    <h3>
        <img style=\"margin: 0 5px 0 0; vertical-align: middle;\" width=\"16\" height=\"16\" alt=\"Search\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAC2ElEQVR42u3XvUtbYRQG8JcggSxSiqlQoXUQUfEDnDoIEkK30ulKh0REFEOkitaIaBUU4gchQ8BBGyKGIC79B7rVxaGlm+JooYtQCq2U0oq9OX0eOBeCRXrf69DFwI9z73nPeTlJbrxXIyL/1e0AfyWueTVAEgrwGt5qLGge675e1gPUQaqxsfEgmUyerq6uft3e3v61v78vjDxnnuusYz3WTI0bDXAnHA6/Gh0d/bS7u+vu7e3JdbjOOtazDzmjAg9QF41Gy+vr6+eVSkX8Yj372I9zA8EGiEQi6bW1tfNyuSyK7/II0YEmMBodzYuHfezXmkADNAwNDX3c2dkRKpVKl4hZCIO5SvNZ1LleD/uxzz0c2w/Q0tLyAheYWywWRT0H4wPrhNjf1taWYd56gOHh4XdbW1tC+Xz+CNH4pfVCuo/9AAsLC182NzeFVlZWUojGL60X0n3sB8BFdFEoFISWlpYeIhq/tF5I97EfIJfLufgohZqbm+8jGr+0Xkj3sR9geXn5x8bGhlBHR8czROOX1gvpPvYDzM3NnWSzWaFYLPYG0fil9UK6j/0As7OzWVxMQul0+ht6nuDY/AvrWO/16j7WA/BCerC4uHiJKNTX13eid7wQzs1VzHOddV4P+n9zHwj0l5BfQ35+fl4Ix248Hj8NhUIlLPXDXeQNI8+Z5zrrvJ6BgYEzrMVxHGgAfg3hmZmZD4jiwd3ue3d393F9ff0hnwcYec4812tlMplqb2/vMepigW/H09PTUXgPEsTU1FS1p6dHhwj4QDI5ORmBHFyAXEfXK+DW5icmJqpdXV21Q9g/ko2Pj1MTvIQDOAPReKD5Jq1zwAVR/CVVOzs7OUR/oAFSqZQtB1wQz9jYWLW9vf0I2z2yHgAXWRAOuCCekZGRamtr66HtALw9B+WAC+JJJBI/rQfA081NOOCCEJ6gP1sPMDg4eFNP4Uw9vv3X7HaAq/4AszA5PJFqlwgAAAAASUVORK5CYII=\">
        Search
    </h3>
    <form action=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("_profiler_search");
        echo "\" method=\"get\">
        <label for=\"ip\">IP</label>
        <input type=\"text\" name=\"ip\" id=\"ip\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["ip"]) ? $context["ip"] : $this->getContext($context, "ip")), "html", null, true);
        echo "\">
        <div class=\"clear-fix\"></div>
        <label for=\"method\">Method</label>
        <select name=\"method\" id=\"method\">
            ";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(array(0 => "", 1 => "DELETE", 2 => "GET", 3 => "HEAD", 4 => "PATCH", 5 => "POST", 6 => "PUT"));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 13
            echo "                <option";
            echo ((((isset($context["m"]) ? $context["m"] : $this->getContext($context, "m")) == (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")))) ? (" selected=\"selected\"") : (""));
            echo ">";
            echo twig_escape_filter($this->env, (isset($context["m"]) ? $context["m"] : $this->getContext($context, "m")), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "        </select>
        <div class=\"clear-fix\"></div>
        <label for=\"url\">URL</label>
        <input type=\"text\" name=\"url\" id=\"url\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
        echo "\">
        <div class=\"clear-fix\"></div>
        <label for=\"token\">Token</label>
        <input type=\"text\" name=\"token\" id=\"token\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
        echo "\">
        <div class=\"clear-fix\"></div>
        <label for=\"start\">From</label>
        <input type=\"text\" name=\"start\" id=\"start\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["start"]) ? $context["start"] : $this->getContext($context, "start")), "html", null, true);
        echo "\">
        <div class=\"clear-fix\"></div>
        <label for=\"end\">Until</label>
        <input type=\"text\" name=\"end\" id=\"end\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["end"]) ? $context["end"] : $this->getContext($context, "end")), "html", null, true);
        echo "\">
        <div class=\"clear-fix\"></div>
        <label for=\"limit\">Limit</label>
        <select name=\"limit\" id=\"limit\">
            ";
        // line 31
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(array(0 => 10, 1 => 50, 2 => 100));
        foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
            // line 32
            echo "                <option";
            echo ((((isset($context["l"]) ? $context["l"] : $this->getContext($context, "l")) == (isset($context["limit"]) ? $context["limit"] : $this->getContext($context, "limit")))) ? (" selected=\"selected\"") : (""));
            echo ">";
            echo twig_escape_filter($this->env, (isset($context["l"]) ? $context["l"] : $this->getContext($context, "l")), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "        </select>

        <button type=\"submit\" class=\"sf-button\">
            <span class=\"border-l\">
                <span class=\"border-r\">
                    <span class=\"btn-bg\">SEARCH</span>
                </span>
            </span>
        </button>
        <div class=\"clear-fix\"></div>
    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  394 => 156,  359 => 140,  308 => 118,  276 => 102,  270 => 100,  245 => 88,  239 => 86,  237 => 85,  234 => 78,  202 => 73,  167 => 60,  681 => 404,  676 => 401,  664 => 394,  659 => 392,  650 => 388,  639 => 380,  633 => 377,  605 => 361,  595 => 354,  588 => 350,  577 => 344,  575 => 341,  567 => 337,  550 => 326,  542 => 321,  538 => 319,  531 => 312,  514 => 306,  509 => 304,  492 => 295,  481 => 290,  466 => 280,  456 => 273,  452 => 272,  445 => 267,  443 => 261,  429 => 255,  424 => 254,  422 => 250,  396 => 157,  331 => 187,  267 => 98,  253 => 148,  232 => 83,  213 => 126,  306 => 140,  303 => 139,  256 => 120,  248 => 115,  242 => 140,  150 => 64,  346 => 196,  343 => 91,  327 => 86,  320 => 84,  313 => 82,  304 => 174,  293 => 75,  287 => 72,  271 => 66,  265 => 125,  262 => 63,  260 => 80,  257 => 149,  216 => 99,  188 => 68,  185 => 65,  12 => 34,  97 => 39,  165 => 71,  701 => 213,  695 => 210,  692 => 209,  690 => 410,  674 => 397,  669 => 202,  654 => 390,  643 => 381,  623 => 373,  601 => 187,  596 => 186,  593 => 185,  590 => 184,  584 => 180,  580 => 178,  556 => 174,  539 => 173,  535 => 172,  530 => 171,  527 => 170,  524 => 169,  521 => 168,  518 => 307,  516 => 166,  498 => 157,  490 => 154,  486 => 292,  471 => 129,  468 => 128,  450 => 145,  439 => 260,  420 => 249,  418 => 128,  404 => 124,  371 => 144,  358 => 106,  349 => 103,  342 => 317,  336 => 99,  329 => 126,  326 => 185,  311 => 89,  297 => 276,  274 => 128,  263 => 124,  250 => 67,  236 => 108,  200 => 55,  191 => 69,  152 => 11,  344 => 318,  340 => 90,  338 => 94,  335 => 129,  321 => 124,  315 => 83,  295 => 275,  292 => 134,  277 => 68,  259 => 70,  215 => 34,  190 => 50,  181 => 79,  178 => 45,  687 => 225,  684 => 205,  679 => 219,  672 => 215,  666 => 212,  662 => 210,  660 => 209,  657 => 200,  651 => 198,  649 => 205,  646 => 204,  640 => 192,  638 => 201,  635 => 200,  629 => 376,  627 => 197,  624 => 196,  618 => 194,  616 => 193,  613 => 366,  610 => 191,  606 => 189,  600 => 145,  591 => 142,  586 => 141,  581 => 346,  578 => 177,  573 => 340,  570 => 137,  564 => 127,  560 => 126,  551 => 124,  546 => 121,  529 => 117,  525 => 116,  520 => 114,  515 => 112,  512 => 111,  505 => 110,  502 => 109,  496 => 108,  493 => 155,  485 => 105,  482 => 104,  476 => 103,  464 => 104,  462 => 103,  458 => 101,  455 => 147,  448 => 96,  442 => 95,  434 => 138,  421 => 56,  417 => 55,  412 => 53,  403 => 50,  399 => 158,  389 => 118,  383 => 150,  376 => 40,  370 => 100,  366 => 142,  356 => 328,  351 => 30,  348 => 136,  345 => 135,  339 => 316,  332 => 88,  330 => 87,  325 => 125,  323 => 191,  319 => 90,  316 => 189,  310 => 81,  289 => 109,  286 => 132,  281 => 172,  255 => 167,  244 => 162,  228 => 59,  222 => 37,  195 => 150,  180 => 104,  175 => 76,  161 => 70,  251 => 105,  233 => 62,  225 => 156,  218 => 77,  212 => 33,  198 => 80,  194 => 86,  184 => 47,  153 => 71,  134 => 58,  104 => 67,  129 => 56,  137 => 60,  90 => 37,  84 => 27,  568 => 179,  557 => 330,  553 => 176,  545 => 173,  540 => 120,  534 => 169,  532 => 118,  526 => 310,  517 => 113,  513 => 165,  507 => 159,  504 => 302,  500 => 158,  495 => 156,  488 => 106,  477 => 150,  470 => 128,  467 => 127,  463 => 133,  460 => 132,  449 => 123,  446 => 122,  441 => 141,  426 => 102,  419 => 98,  415 => 247,  410 => 96,  395 => 120,  392 => 83,  388 => 107,  386 => 95,  382 => 93,  380 => 83,  377 => 147,  369 => 136,  367 => 99,  361 => 208,  357 => 139,  352 => 138,  347 => 102,  333 => 117,  324 => 92,  307 => 87,  302 => 78,  300 => 138,  296 => 76,  291 => 169,  288 => 85,  282 => 79,  280 => 130,  275 => 170,  272 => 158,  249 => 89,  226 => 76,  223 => 27,  205 => 84,  197 => 119,  192 => 87,  186 => 81,  172 => 99,  148 => 63,  174 => 60,  114 => 23,  170 => 73,  155 => 55,  127 => 45,  124 => 69,  118 => 28,  113 => 61,  110 => 77,  53 => 15,  77 => 23,  70 => 24,  65 => 11,  160 => 66,  146 => 34,  126 => 51,  76 => 27,  23 => 18,  34 => 6,  100 => 40,  81 => 26,  58 => 18,  20 => 1,  480 => 132,  474 => 285,  469 => 158,  461 => 149,  457 => 131,  453 => 146,  444 => 142,  440 => 148,  437 => 94,  435 => 258,  430 => 103,  427 => 57,  423 => 136,  413 => 134,  409 => 127,  407 => 242,  402 => 130,  398 => 121,  393 => 119,  387 => 152,  384 => 116,  381 => 120,  379 => 41,  374 => 114,  368 => 112,  365 => 111,  362 => 141,  360 => 33,  355 => 95,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 177,  309 => 97,  305 => 184,  298 => 173,  294 => 111,  285 => 84,  283 => 106,  278 => 86,  268 => 126,  264 => 72,  258 => 81,  252 => 68,  247 => 66,  241 => 31,  229 => 77,  220 => 56,  214 => 75,  177 => 63,  169 => 73,  140 => 53,  132 => 57,  128 => 35,  107 => 32,  61 => 23,  273 => 101,  269 => 75,  254 => 91,  243 => 65,  240 => 86,  238 => 139,  235 => 74,  230 => 105,  227 => 80,  224 => 102,  221 => 78,  219 => 36,  217 => 75,  208 => 13,  204 => 154,  179 => 107,  159 => 69,  143 => 48,  135 => 81,  119 => 42,  102 => 33,  71 => 23,  67 => 22,  63 => 21,  59 => 22,  28 => 3,  93 => 38,  88 => 60,  78 => 18,  87 => 32,  44 => 11,  31 => 8,  21 => 2,  46 => 13,  25 => 12,  201 => 153,  196 => 71,  183 => 82,  171 => 102,  166 => 100,  163 => 60,  158 => 74,  156 => 65,  151 => 51,  142 => 50,  138 => 4,  136 => 48,  121 => 75,  117 => 47,  105 => 46,  91 => 35,  62 => 24,  49 => 11,  94 => 29,  89 => 30,  85 => 23,  75 => 24,  68 => 12,  56 => 16,  27 => 7,  38 => 12,  26 => 6,  24 => 3,  19 => 1,  79 => 29,  72 => 27,  69 => 26,  47 => 11,  40 => 8,  37 => 7,  22 => 2,  246 => 54,  157 => 58,  145 => 56,  139 => 59,  131 => 76,  123 => 50,  120 => 56,  115 => 49,  111 => 45,  108 => 47,  101 => 43,  98 => 34,  96 => 30,  83 => 31,  74 => 33,  66 => 25,  55 => 38,  52 => 12,  50 => 18,  43 => 18,  41 => 6,  35 => 5,  32 => 7,  29 => 3,  209 => 95,  203 => 122,  199 => 53,  193 => 70,  189 => 147,  187 => 86,  182 => 79,  176 => 76,  173 => 70,  168 => 69,  164 => 67,  162 => 70,  154 => 66,  149 => 36,  147 => 7,  144 => 6,  141 => 61,  133 => 81,  130 => 46,  125 => 44,  122 => 44,  116 => 47,  112 => 48,  109 => 44,  106 => 40,  103 => 45,  99 => 31,  95 => 34,  92 => 28,  86 => 29,  82 => 23,  80 => 29,  73 => 22,  64 => 21,  60 => 23,  57 => 20,  54 => 19,  51 => 37,  48 => 16,  45 => 20,  42 => 13,  39 => 10,  36 => 7,  33 => 6,  30 => 5,);
    }
}
