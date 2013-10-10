<?php

/* SensioDistributionBundle:Configurator:final.html.twig */
class __TwigTemplate_1c6cb2843868557a7888991f0a8cad1d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SensioDistributionBundle::Configurator/layout.html.twig");

        $this->blocks = array(
            'content_class' => array($this, 'block_content_class'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content_class($context, array $blocks = array())
    {
        echo "config_done";
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "    <div class=\"step\">
        <h1>Well done!</h1>
        ";
        // line 7
        if ((isset($context["is_writable"]) ? $context["is_writable"] : $this->getContext($context, "is_writable"))) {
            // line 8
            echo "        <h2>Your distribution is configured!</h2>
        ";
        } else {
            // line 10
            echo "        <h2 class=\"configure-error\">Your distribution is almost configured but...</h2>
        ";
        }
        // line 12
        echo "        <h3>
            <span>
                ";
        // line 14
        if ((isset($context["is_writable"]) ? $context["is_writable"] : $this->getContext($context, "is_writable"))) {
            // line 15
            echo "                    Your parameters.yml file has been overwritten with these parameters (in <em>";
            echo twig_escape_filter($this->env, (isset($context["yml_path"]) ? $context["yml_path"] : $this->getContext($context, "yml_path")), "html", null, true);
            echo "</em>):
                ";
        } else {
            // line 17
            echo "                    Your parameters.yml file is not writeable! Here are the parameters you can copy and paste in <em>";
            echo twig_escape_filter($this->env, (isset($context["yml_path"]) ? $context["yml_path"] : $this->getContext($context, "yml_path")), "html", null, true);
            echo "</em>:
                ";
        }
        // line 19
        echo "            </span>
        </h3>

        <textarea class=\"symfony-configuration\">";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "html", null, true);
        echo "</textarea>

        ";
        // line 24
        if ((isset($context["welcome_url"]) ? $context["welcome_url"] : $this->getContext($context, "welcome_url"))) {
            // line 25
            echo "            <ul>
                <li><a href=\"";
            // line 26
            echo twig_escape_filter($this->env, (isset($context["welcome_url"]) ? $context["welcome_url"] : $this->getContext($context, "welcome_url")), "html", null, true);
            echo "\">Go to the Welcome page</a></li>
            </ul>
        ";
        }
        // line 29
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator:final.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1361 => 391,  1352 => 390,  1350 => 389,  1347 => 388,  1331 => 384,  1324 => 383,  1322 => 382,  1319 => 381,  1296 => 377,  1271 => 376,  1269 => 375,  1266 => 374,  1254 => 369,  1249 => 368,  1247 => 367,  1244 => 366,  1235 => 360,  1229 => 358,  1226 => 357,  1221 => 356,  1219 => 355,  1216 => 354,  1209 => 349,  1200 => 347,  1196 => 346,  1193 => 345,  1190 => 344,  1188 => 343,  1185 => 342,  1177 => 338,  1175 => 337,  1172 => 336,  1166 => 332,  1160 => 330,  1157 => 329,  1155 => 328,  1152 => 327,  1143 => 322,  1141 => 321,  1118 => 320,  1115 => 319,  1112 => 318,  1109 => 317,  1106 => 316,  1103 => 315,  1100 => 314,  1098 => 313,  1095 => 312,  1088 => 308,  1084 => 307,  1079 => 306,  1077 => 305,  1074 => 304,  1067 => 299,  1064 => 298,  1056 => 293,  1053 => 292,  1051 => 291,  1048 => 290,  1040 => 285,  1036 => 284,  1032 => 283,  1029 => 282,  1027 => 281,  1024 => 280,  1016 => 276,  1014 => 272,  1012 => 271,  1009 => 270,  1004 => 266,  982 => 261,  979 => 260,  976 => 259,  973 => 258,  970 => 257,  967 => 256,  964 => 255,  961 => 254,  958 => 253,  955 => 252,  952 => 251,  950 => 250,  947 => 249,  939 => 243,  936 => 242,  934 => 241,  931 => 240,  923 => 236,  920 => 235,  918 => 234,  915 => 233,  903 => 229,  900 => 228,  897 => 227,  894 => 226,  892 => 225,  889 => 224,  881 => 220,  878 => 219,  876 => 218,  873 => 217,  865 => 213,  862 => 212,  860 => 211,  857 => 210,  849 => 206,  846 => 205,  844 => 204,  841 => 203,  833 => 199,  830 => 198,  828 => 197,  825 => 196,  817 => 192,  814 => 191,  812 => 190,  809 => 189,  801 => 185,  798 => 184,  796 => 183,  793 => 182,  785 => 178,  783 => 177,  780 => 176,  772 => 172,  769 => 171,  767 => 170,  764 => 169,  756 => 165,  753 => 164,  751 => 163,  749 => 162,  746 => 161,  739 => 156,  729 => 155,  724 => 154,  721 => 153,  715 => 151,  712 => 150,  710 => 149,  707 => 148,  699 => 142,  697 => 141,  696 => 140,  689 => 137,  683 => 135,  680 => 134,  658 => 124,  619 => 113,  617 => 112,  614 => 111,  598 => 107,  576 => 101,  555 => 95,  503 => 81,  501 => 80,  478 => 74,  459 => 69,  433 => 60,  428 => 59,  414 => 52,  405 => 49,  400 => 47,  390 => 43,  385 => 41,  350 => 26,  299 => 8,  266 => 366,  431 => 189,  408 => 50,  401 => 172,  373 => 156,  207 => 269,  318 => 111,  231 => 83,  378 => 157,  363 => 32,  353 => 121,  334 => 141,  328 => 139,  290 => 5,  210 => 270,  806 => 488,  803 => 487,  792 => 485,  788 => 484,  784 => 482,  771 => 481,  745 => 476,  742 => 475,  723 => 473,  706 => 472,  702 => 470,  698 => 469,  694 => 138,  686 => 466,  682 => 465,  678 => 133,  675 => 132,  673 => 462,  656 => 461,  645 => 460,  630 => 455,  625 => 453,  621 => 452,  602 => 449,  565 => 414,  547 => 93,  394 => 168,  359 => 140,  308 => 13,  276 => 381,  270 => 102,  245 => 335,  239 => 86,  237 => 85,  234 => 78,  202 => 266,  167 => 60,  681 => 404,  676 => 401,  664 => 394,  659 => 392,  650 => 388,  639 => 380,  633 => 377,  605 => 361,  595 => 354,  588 => 350,  577 => 344,  575 => 341,  567 => 337,  550 => 94,  542 => 321,  538 => 319,  531 => 312,  514 => 306,  509 => 83,  492 => 295,  481 => 290,  466 => 280,  456 => 68,  452 => 272,  445 => 267,  443 => 261,  429 => 188,  424 => 254,  422 => 184,  396 => 157,  331 => 140,  267 => 101,  253 => 342,  232 => 88,  213 => 78,  306 => 107,  303 => 122,  256 => 96,  248 => 336,  242 => 140,  150 => 55,  346 => 196,  343 => 146,  327 => 114,  320 => 127,  313 => 15,  304 => 174,  293 => 6,  287 => 72,  271 => 374,  265 => 96,  262 => 98,  260 => 363,  257 => 149,  216 => 79,  188 => 90,  185 => 66,  12 => 34,  97 => 39,  165 => 60,  701 => 213,  695 => 139,  692 => 209,  690 => 467,  674 => 397,  669 => 202,  654 => 123,  643 => 120,  623 => 373,  601 => 187,  596 => 106,  593 => 105,  590 => 184,  584 => 180,  580 => 178,  556 => 174,  539 => 173,  535 => 172,  530 => 410,  527 => 91,  524 => 90,  521 => 168,  518 => 307,  516 => 166,  498 => 157,  490 => 77,  486 => 292,  471 => 129,  468 => 128,  450 => 64,  439 => 195,  420 => 249,  418 => 128,  404 => 124,  371 => 35,  358 => 151,  349 => 103,  342 => 23,  336 => 99,  329 => 131,  326 => 138,  311 => 14,  297 => 104,  274 => 97,  263 => 365,  250 => 341,  236 => 108,  200 => 72,  191 => 246,  152 => 46,  344 => 24,  340 => 145,  338 => 135,  335 => 21,  321 => 112,  315 => 125,  295 => 275,  292 => 134,  277 => 68,  259 => 103,  215 => 280,  190 => 76,  181 => 232,  178 => 66,  687 => 225,  684 => 205,  679 => 219,  672 => 215,  666 => 126,  662 => 125,  660 => 209,  657 => 200,  651 => 198,  649 => 122,  646 => 204,  640 => 119,  638 => 118,  635 => 117,  629 => 376,  627 => 197,  624 => 196,  618 => 451,  616 => 450,  613 => 366,  610 => 191,  606 => 189,  600 => 145,  591 => 142,  586 => 141,  581 => 346,  578 => 177,  573 => 340,  570 => 137,  564 => 99,  560 => 126,  551 => 124,  546 => 121,  529 => 92,  525 => 408,  520 => 406,  515 => 85,  512 => 84,  505 => 110,  502 => 109,  496 => 79,  493 => 78,  485 => 105,  482 => 104,  476 => 103,  464 => 71,  462 => 202,  458 => 101,  455 => 147,  448 => 96,  442 => 62,  434 => 138,  421 => 56,  417 => 55,  412 => 53,  403 => 48,  399 => 158,  389 => 160,  383 => 150,  376 => 40,  370 => 100,  366 => 33,  356 => 328,  351 => 141,  348 => 140,  345 => 147,  339 => 316,  332 => 20,  330 => 87,  325 => 129,  323 => 128,  319 => 90,  316 => 16,  310 => 81,  289 => 113,  286 => 112,  281 => 388,  255 => 353,  244 => 136,  228 => 59,  222 => 297,  195 => 150,  180 => 104,  175 => 65,  161 => 202,  251 => 105,  233 => 304,  225 => 298,  218 => 77,  212 => 279,  198 => 80,  194 => 248,  184 => 233,  153 => 56,  134 => 161,  104 => 90,  129 => 148,  137 => 60,  90 => 27,  84 => 41,  568 => 179,  557 => 96,  553 => 176,  545 => 173,  540 => 120,  534 => 169,  532 => 118,  526 => 310,  517 => 113,  513 => 165,  507 => 159,  504 => 302,  500 => 158,  495 => 156,  488 => 106,  477 => 150,  470 => 73,  467 => 72,  463 => 133,  460 => 132,  449 => 198,  446 => 197,  441 => 196,  426 => 58,  419 => 98,  415 => 180,  410 => 96,  395 => 120,  392 => 83,  388 => 42,  386 => 159,  382 => 93,  380 => 160,  377 => 37,  369 => 136,  367 => 155,  361 => 146,  357 => 123,  352 => 138,  347 => 102,  333 => 117,  324 => 113,  307 => 128,  302 => 125,  300 => 121,  296 => 121,  291 => 102,  288 => 4,  282 => 79,  280 => 130,  275 => 105,  272 => 158,  249 => 89,  226 => 84,  223 => 27,  205 => 84,  197 => 249,  192 => 87,  186 => 239,  172 => 64,  148 => 63,  174 => 217,  114 => 111,  170 => 56,  155 => 47,  127 => 35,  124 => 132,  118 => 49,  113 => 40,  110 => 38,  53 => 11,  77 => 25,  70 => 19,  65 => 17,  160 => 66,  146 => 181,  126 => 147,  76 => 31,  23 => 18,  34 => 4,  100 => 36,  81 => 30,  58 => 15,  20 => 1,  480 => 75,  474 => 285,  469 => 158,  461 => 70,  457 => 131,  453 => 199,  444 => 142,  440 => 148,  437 => 61,  435 => 258,  430 => 103,  427 => 57,  423 => 57,  413 => 134,  409 => 127,  407 => 242,  402 => 130,  398 => 121,  393 => 119,  387 => 164,  384 => 116,  381 => 120,  379 => 41,  374 => 36,  368 => 34,  365 => 111,  362 => 141,  360 => 33,  355 => 27,  341 => 118,  337 => 22,  322 => 101,  314 => 99,  312 => 124,  309 => 108,  305 => 184,  298 => 120,  294 => 111,  285 => 3,  283 => 100,  278 => 387,  268 => 373,  264 => 72,  258 => 354,  252 => 68,  247 => 66,  241 => 90,  229 => 85,  220 => 290,  214 => 75,  177 => 63,  169 => 210,  140 => 58,  132 => 57,  128 => 35,  107 => 37,  61 => 2,  273 => 380,  269 => 107,  254 => 91,  243 => 327,  240 => 326,  238 => 312,  235 => 311,  230 => 303,  227 => 301,  224 => 81,  221 => 78,  219 => 36,  217 => 289,  208 => 76,  204 => 267,  179 => 224,  159 => 196,  143 => 51,  135 => 81,  119 => 117,  102 => 30,  71 => 19,  67 => 18,  63 => 18,  59 => 17,  28 => 3,  93 => 28,  88 => 28,  78 => 24,  87 => 26,  44 => 8,  31 => 3,  21 => 2,  46 => 13,  25 => 12,  201 => 153,  196 => 92,  183 => 82,  171 => 216,  166 => 209,  163 => 53,  158 => 62,  156 => 195,  151 => 188,  142 => 50,  138 => 4,  136 => 168,  121 => 131,  117 => 39,  105 => 34,  91 => 29,  62 => 16,  49 => 12,  94 => 57,  89 => 35,  85 => 26,  75 => 22,  68 => 20,  56 => 14,  27 => 3,  38 => 5,  26 => 6,  24 => 3,  19 => 1,  79 => 32,  72 => 21,  69 => 21,  47 => 10,  40 => 11,  37 => 7,  22 => 2,  246 => 93,  157 => 58,  145 => 52,  139 => 169,  131 => 160,  123 => 42,  120 => 31,  115 => 40,  111 => 110,  108 => 33,  101 => 33,  98 => 29,  96 => 67,  83 => 33,  74 => 22,  66 => 12,  55 => 12,  52 => 12,  50 => 10,  43 => 12,  41 => 7,  35 => 4,  32 => 5,  29 => 3,  209 => 95,  203 => 73,  199 => 265,  193 => 70,  189 => 240,  187 => 75,  182 => 87,  176 => 223,  173 => 85,  168 => 61,  164 => 203,  162 => 59,  154 => 189,  149 => 182,  147 => 54,  144 => 176,  141 => 175,  133 => 81,  130 => 46,  125 => 51,  122 => 41,  116 => 116,  112 => 39,  109 => 105,  106 => 104,  103 => 45,  99 => 68,  95 => 34,  92 => 31,  86 => 46,  82 => 25,  80 => 24,  73 => 23,  64 => 17,  60 => 20,  57 => 19,  54 => 15,  51 => 13,  48 => 10,  45 => 9,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
