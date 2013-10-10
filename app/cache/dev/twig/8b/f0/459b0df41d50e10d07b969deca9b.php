<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_8bf0459b0df41d50e10d07b969deca9b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <div id=\"content\">
        ";
        // line 5
        $this->env->loadTemplate("@WebProfiler/Profiler/header.html.twig")->display(array());
        // line 6
        echo "
        <div id=\"main\">
            <div class=\"clear-fix\">
                <div id=\"collector-wrapper\">
                    <div id=\"collector-content\">
                        ";
        // line 11
        $this->displayBlock('panel', $context, $blocks);
        // line 34
        echo "                    </div>
                </div>
                <div id=\"navigation\">
                    ";
        // line 37
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_search_bar"));
        echo "
                    ";
        // line 38
        $this->env->loadTemplate("@WebProfiler/Profiler/admin.html.twig")->display(array("token" => ""));
        // line 39
        echo "                </div>
            </div>
        </div>
    </div>
";
    }

    // line 11
    public function block_panel($context, array $blocks = array())
    {
        // line 12
        echo "                            ";
        if (((isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")) == "purge")) {
            // line 13
            echo "                                <h2>The profiler database was purged successfully</h2>
                                <p>
                                    <em>Now you need to browse some pages with the Symfony Profiler enabled to collect data.</em>
                                </p>
                            ";
        } elseif (((isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")) == "upload_error")) {
            // line 18
            echo "                                <h2>A problem occurred when uploading the data</h2>
                                <p>
                                    <em>No file given or the file was not uploaded successfully.</em>
                                </p>
                            ";
        } elseif (((isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")) == "already_exists")) {
            // line 23
            echo "                                <h2>A problem occurred when uploading the data</h2>
                                <p>
                                    <em>The token already exists in the database.</em>
                                </p>
                            ";
        } elseif (((isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")) == "no_token")) {
            // line 28
            echo "                                <h2>Token not found</h2>
                                <p>
                                    <em>Token \"";
            // line 30
            echo twig_escape_filter($this->env, (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "html", null, true);
            echo "\" was not found in the database.</em>
                                </p>
                            ";
        }
        // line 33
        echo "                        ";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  394 => 156,  359 => 140,  308 => 118,  276 => 102,  270 => 100,  245 => 88,  239 => 86,  237 => 85,  234 => 78,  202 => 73,  167 => 60,  681 => 404,  676 => 401,  664 => 394,  659 => 392,  650 => 388,  639 => 380,  633 => 377,  605 => 361,  595 => 354,  588 => 350,  577 => 344,  575 => 341,  567 => 337,  550 => 326,  542 => 321,  538 => 319,  531 => 312,  514 => 306,  509 => 304,  492 => 295,  481 => 290,  466 => 280,  456 => 273,  452 => 272,  445 => 267,  443 => 261,  429 => 255,  424 => 254,  422 => 250,  396 => 157,  331 => 187,  267 => 98,  253 => 148,  232 => 83,  213 => 126,  306 => 140,  303 => 139,  256 => 120,  248 => 115,  242 => 140,  150 => 64,  346 => 196,  343 => 91,  327 => 86,  320 => 84,  313 => 82,  304 => 174,  293 => 75,  287 => 72,  271 => 66,  265 => 125,  262 => 63,  260 => 80,  257 => 149,  216 => 99,  188 => 68,  185 => 65,  12 => 34,  97 => 39,  165 => 71,  701 => 213,  695 => 210,  692 => 209,  690 => 410,  674 => 397,  669 => 202,  654 => 390,  643 => 381,  623 => 373,  601 => 187,  596 => 186,  593 => 185,  590 => 184,  584 => 180,  580 => 178,  556 => 174,  539 => 173,  535 => 172,  530 => 171,  527 => 170,  524 => 169,  521 => 168,  518 => 307,  516 => 166,  498 => 157,  490 => 154,  486 => 292,  471 => 129,  468 => 128,  450 => 145,  439 => 260,  420 => 249,  418 => 128,  404 => 124,  371 => 144,  358 => 106,  349 => 103,  342 => 317,  336 => 99,  329 => 126,  326 => 185,  311 => 89,  297 => 276,  274 => 128,  263 => 124,  250 => 67,  236 => 108,  200 => 55,  191 => 69,  152 => 11,  344 => 318,  340 => 90,  338 => 94,  335 => 129,  321 => 124,  315 => 83,  295 => 275,  292 => 134,  277 => 68,  259 => 70,  215 => 34,  190 => 50,  181 => 79,  178 => 45,  687 => 225,  684 => 205,  679 => 219,  672 => 215,  666 => 212,  662 => 210,  660 => 209,  657 => 200,  651 => 198,  649 => 205,  646 => 204,  640 => 192,  638 => 201,  635 => 200,  629 => 376,  627 => 197,  624 => 196,  618 => 194,  616 => 193,  613 => 366,  610 => 191,  606 => 189,  600 => 145,  591 => 142,  586 => 141,  581 => 346,  578 => 177,  573 => 340,  570 => 137,  564 => 127,  560 => 126,  551 => 124,  546 => 121,  529 => 117,  525 => 116,  520 => 114,  515 => 112,  512 => 111,  505 => 110,  502 => 109,  496 => 108,  493 => 155,  485 => 105,  482 => 104,  476 => 103,  464 => 104,  462 => 103,  458 => 101,  455 => 147,  448 => 96,  442 => 95,  434 => 138,  421 => 56,  417 => 55,  412 => 53,  403 => 50,  399 => 158,  389 => 118,  383 => 150,  376 => 40,  370 => 100,  366 => 142,  356 => 328,  351 => 30,  348 => 136,  345 => 135,  339 => 316,  332 => 88,  330 => 87,  325 => 125,  323 => 191,  319 => 90,  316 => 189,  310 => 81,  289 => 109,  286 => 132,  281 => 172,  255 => 167,  244 => 162,  228 => 59,  222 => 37,  195 => 150,  180 => 104,  175 => 76,  161 => 70,  251 => 105,  233 => 62,  225 => 156,  218 => 77,  212 => 33,  198 => 80,  194 => 86,  184 => 47,  153 => 71,  134 => 58,  104 => 67,  129 => 56,  137 => 60,  90 => 28,  84 => 33,  568 => 179,  557 => 330,  553 => 176,  545 => 173,  540 => 120,  534 => 169,  532 => 118,  526 => 310,  517 => 113,  513 => 165,  507 => 159,  504 => 302,  500 => 158,  495 => 156,  488 => 106,  477 => 150,  470 => 128,  467 => 127,  463 => 133,  460 => 132,  449 => 123,  446 => 122,  441 => 141,  426 => 102,  419 => 98,  415 => 247,  410 => 96,  395 => 120,  392 => 83,  388 => 107,  386 => 95,  382 => 93,  380 => 83,  377 => 147,  369 => 136,  367 => 99,  361 => 208,  357 => 139,  352 => 138,  347 => 102,  333 => 117,  324 => 92,  307 => 87,  302 => 78,  300 => 138,  296 => 76,  291 => 169,  288 => 85,  282 => 79,  280 => 130,  275 => 170,  272 => 158,  249 => 89,  226 => 76,  223 => 27,  205 => 84,  197 => 119,  192 => 87,  186 => 81,  172 => 99,  148 => 63,  174 => 60,  114 => 23,  170 => 73,  155 => 55,  127 => 45,  124 => 69,  118 => 28,  113 => 61,  110 => 77,  53 => 23,  77 => 23,  70 => 26,  65 => 11,  160 => 66,  146 => 34,  126 => 51,  76 => 20,  23 => 18,  34 => 6,  100 => 40,  81 => 26,  58 => 15,  20 => 1,  480 => 132,  474 => 285,  469 => 158,  461 => 149,  457 => 131,  453 => 146,  444 => 142,  440 => 148,  437 => 94,  435 => 258,  430 => 103,  427 => 57,  423 => 136,  413 => 134,  409 => 127,  407 => 242,  402 => 130,  398 => 121,  393 => 119,  387 => 152,  384 => 116,  381 => 120,  379 => 41,  374 => 114,  368 => 112,  365 => 111,  362 => 141,  360 => 33,  355 => 95,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 177,  309 => 97,  305 => 184,  298 => 173,  294 => 111,  285 => 84,  283 => 106,  278 => 86,  268 => 126,  264 => 72,  258 => 81,  252 => 68,  247 => 66,  241 => 31,  229 => 77,  220 => 56,  214 => 75,  177 => 63,  169 => 73,  140 => 53,  132 => 57,  128 => 35,  107 => 32,  61 => 25,  273 => 101,  269 => 75,  254 => 91,  243 => 65,  240 => 86,  238 => 139,  235 => 74,  230 => 105,  227 => 80,  224 => 102,  221 => 78,  219 => 36,  217 => 75,  208 => 13,  204 => 154,  179 => 107,  159 => 69,  143 => 48,  135 => 81,  119 => 42,  102 => 33,  71 => 13,  67 => 19,  63 => 18,  59 => 17,  28 => 4,  93 => 68,  88 => 60,  78 => 18,  87 => 38,  44 => 11,  31 => 8,  21 => 12,  46 => 34,  25 => 12,  201 => 153,  196 => 71,  183 => 82,  171 => 102,  166 => 100,  163 => 60,  158 => 74,  156 => 65,  151 => 51,  142 => 50,  138 => 4,  136 => 48,  121 => 75,  117 => 47,  105 => 46,  91 => 35,  62 => 24,  49 => 11,  94 => 29,  89 => 22,  85 => 23,  75 => 28,  68 => 12,  56 => 13,  27 => 7,  38 => 6,  26 => 3,  24 => 2,  19 => 1,  79 => 29,  72 => 56,  69 => 18,  47 => 11,  40 => 8,  37 => 6,  22 => 12,  246 => 54,  157 => 58,  145 => 56,  139 => 59,  131 => 76,  123 => 50,  120 => 56,  115 => 49,  111 => 45,  108 => 47,  101 => 52,  98 => 43,  96 => 30,  83 => 30,  74 => 33,  66 => 25,  55 => 38,  52 => 12,  50 => 15,  43 => 18,  41 => 6,  35 => 5,  32 => 4,  29 => 3,  209 => 95,  203 => 122,  199 => 53,  193 => 70,  189 => 147,  187 => 86,  182 => 79,  176 => 76,  173 => 70,  168 => 69,  164 => 67,  162 => 70,  154 => 66,  149 => 36,  147 => 7,  144 => 6,  141 => 61,  133 => 81,  130 => 46,  125 => 44,  122 => 44,  116 => 47,  112 => 48,  109 => 44,  106 => 40,  103 => 45,  99 => 31,  95 => 35,  92 => 28,  86 => 29,  82 => 23,  80 => 35,  73 => 22,  64 => 25,  60 => 23,  57 => 39,  54 => 18,  51 => 37,  48 => 16,  45 => 20,  42 => 13,  39 => 7,  36 => 10,  33 => 9,  30 => 5,);
    }
}
