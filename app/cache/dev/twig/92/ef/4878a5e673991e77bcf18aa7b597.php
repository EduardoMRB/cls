<?php

/* SonataAdminBundle:CRUD:edit_integer.html.twig */
class __TwigTemplate_92ef4878a5e673991e77bcf18aa7b597 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["field_element"]) ? $context["field_element"] : $this->getContext($context, "field_element")), 'widget', array("attr" => array("class" => "title")));
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:edit_integer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 58,  346 => 92,  343 => 91,  327 => 86,  320 => 84,  313 => 82,  304 => 79,  293 => 75,  287 => 72,  271 => 66,  265 => 64,  262 => 63,  260 => 62,  257 => 61,  216 => 25,  188 => 21,  185 => 20,  12 => 34,  97 => 37,  165 => 68,  701 => 213,  695 => 210,  692 => 209,  690 => 208,  674 => 204,  669 => 202,  654 => 199,  643 => 193,  623 => 190,  601 => 187,  596 => 186,  593 => 185,  590 => 184,  584 => 180,  580 => 178,  556 => 174,  539 => 173,  535 => 172,  530 => 171,  527 => 170,  524 => 169,  521 => 168,  518 => 167,  516 => 166,  498 => 157,  490 => 154,  486 => 134,  471 => 129,  468 => 128,  450 => 145,  439 => 140,  420 => 135,  418 => 128,  404 => 124,  371 => 113,  358 => 106,  349 => 103,  342 => 101,  336 => 99,  329 => 95,  326 => 93,  311 => 89,  297 => 84,  274 => 77,  263 => 71,  250 => 67,  236 => 63,  200 => 55,  191 => 50,  152 => 63,  344 => 97,  340 => 90,  338 => 94,  335 => 93,  321 => 91,  315 => 83,  295 => 88,  292 => 87,  277 => 68,  259 => 70,  215 => 54,  190 => 50,  181 => 72,  178 => 45,  687 => 225,  684 => 205,  679 => 219,  672 => 215,  666 => 212,  662 => 210,  660 => 209,  657 => 200,  651 => 198,  649 => 205,  646 => 204,  640 => 192,  638 => 201,  635 => 200,  629 => 198,  627 => 197,  624 => 196,  618 => 194,  616 => 193,  613 => 192,  610 => 191,  606 => 189,  600 => 145,  591 => 142,  586 => 141,  581 => 140,  578 => 177,  573 => 176,  570 => 137,  564 => 127,  560 => 126,  551 => 124,  546 => 121,  529 => 117,  525 => 116,  520 => 114,  515 => 112,  512 => 111,  505 => 110,  502 => 109,  496 => 108,  493 => 155,  485 => 105,  482 => 104,  476 => 103,  464 => 104,  462 => 103,  458 => 101,  455 => 147,  448 => 96,  442 => 95,  434 => 138,  421 => 56,  417 => 55,  412 => 53,  403 => 50,  399 => 49,  389 => 118,  383 => 43,  376 => 40,  370 => 100,  366 => 36,  356 => 32,  351 => 30,  348 => 29,  345 => 28,  339 => 100,  332 => 88,  330 => 87,  325 => 221,  323 => 191,  319 => 90,  316 => 189,  310 => 81,  289 => 81,  286 => 80,  281 => 172,  255 => 167,  244 => 162,  228 => 59,  222 => 155,  195 => 150,  180 => 104,  175 => 71,  161 => 38,  251 => 105,  233 => 62,  225 => 156,  218 => 91,  212 => 88,  198 => 80,  194 => 79,  184 => 47,  153 => 48,  134 => 55,  104 => 42,  129 => 56,  137 => 47,  90 => 18,  84 => 36,  568 => 179,  557 => 125,  553 => 176,  545 => 173,  540 => 120,  534 => 169,  532 => 118,  526 => 164,  517 => 113,  513 => 165,  507 => 159,  504 => 160,  500 => 158,  495 => 156,  488 => 106,  477 => 150,  470 => 128,  467 => 127,  463 => 133,  460 => 132,  449 => 123,  446 => 122,  441 => 141,  426 => 102,  419 => 98,  415 => 97,  410 => 96,  395 => 120,  392 => 83,  388 => 107,  386 => 95,  382 => 93,  380 => 83,  377 => 115,  369 => 136,  367 => 99,  361 => 97,  357 => 125,  352 => 94,  347 => 102,  333 => 117,  324 => 92,  307 => 87,  302 => 78,  300 => 181,  296 => 76,  291 => 82,  288 => 85,  282 => 79,  280 => 69,  275 => 170,  272 => 76,  249 => 55,  226 => 67,  223 => 27,  205 => 84,  197 => 54,  192 => 23,  186 => 54,  172 => 99,  148 => 44,  174 => 60,  114 => 50,  170 => 93,  155 => 62,  127 => 34,  124 => 49,  118 => 28,  113 => 46,  110 => 36,  53 => 24,  77 => 20,  70 => 29,  65 => 15,  160 => 59,  146 => 34,  126 => 55,  76 => 35,  23 => 12,  34 => 18,  100 => 43,  81 => 34,  58 => 22,  20 => 11,  480 => 132,  474 => 130,  469 => 158,  461 => 149,  457 => 131,  453 => 146,  444 => 142,  440 => 148,  437 => 94,  435 => 146,  430 => 103,  427 => 57,  423 => 136,  413 => 134,  409 => 127,  407 => 51,  402 => 130,  398 => 121,  393 => 119,  387 => 122,  384 => 116,  381 => 120,  379 => 41,  374 => 114,  368 => 112,  365 => 111,  362 => 110,  360 => 33,  355 => 95,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 89,  309 => 97,  305 => 184,  298 => 91,  294 => 178,  285 => 84,  283 => 70,  278 => 86,  268 => 73,  264 => 72,  258 => 81,  252 => 68,  247 => 66,  241 => 31,  229 => 96,  220 => 56,  214 => 61,  177 => 131,  169 => 58,  140 => 53,  132 => 57,  128 => 44,  107 => 48,  61 => 27,  273 => 96,  269 => 75,  254 => 60,  243 => 65,  240 => 86,  238 => 64,  235 => 74,  230 => 158,  227 => 60,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 57,  204 => 154,  179 => 69,  159 => 49,  143 => 48,  135 => 53,  119 => 39,  102 => 41,  71 => 30,  67 => 28,  63 => 31,  59 => 26,  28 => 14,  93 => 38,  88 => 37,  78 => 36,  87 => 38,  44 => 21,  31 => 16,  21 => 11,  46 => 19,  25 => 12,  201 => 153,  196 => 52,  183 => 82,  171 => 69,  166 => 57,  163 => 60,  158 => 37,  156 => 36,  151 => 51,  142 => 42,  138 => 54,  136 => 75,  121 => 52,  117 => 44,  105 => 45,  91 => 39,  62 => 27,  49 => 23,  94 => 40,  89 => 42,  85 => 37,  75 => 31,  68 => 24,  56 => 27,  27 => 3,  38 => 7,  26 => 14,  24 => 12,  19 => 11,  79 => 34,  72 => 30,  69 => 33,  47 => 25,  40 => 17,  37 => 17,  22 => 12,  246 => 54,  157 => 58,  145 => 56,  139 => 31,  131 => 45,  123 => 51,  120 => 48,  115 => 40,  111 => 41,  108 => 44,  101 => 46,  98 => 21,  96 => 44,  83 => 35,  74 => 19,  66 => 32,  55 => 18,  52 => 20,  50 => 23,  43 => 18,  41 => 23,  35 => 20,  32 => 14,  29 => 15,  209 => 24,  203 => 56,  199 => 53,  193 => 51,  189 => 147,  187 => 49,  182 => 66,  176 => 102,  173 => 42,  168 => 69,  164 => 54,  162 => 57,  154 => 52,  149 => 36,  147 => 46,  144 => 45,  141 => 57,  133 => 51,  130 => 54,  125 => 40,  122 => 44,  116 => 47,  112 => 46,  109 => 45,  106 => 35,  103 => 34,  99 => 45,  95 => 40,  92 => 43,  86 => 66,  82 => 38,  80 => 28,  73 => 34,  64 => 31,  60 => 13,  57 => 23,  54 => 26,  51 => 21,  48 => 15,  45 => 21,  42 => 20,  39 => 18,  36 => 17,  33 => 16,  30 => 15,);
    }
}
