<?php

/* SensioDistributionBundle:Configurator:form.html.twig */
class __TwigTemplate_272298406cc0bc55a0e7910b9d81673d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("form_div_layout.html.twig");

        $this->blocks = array(
            'form_rows' => array($this, 'block_form_rows'),
            'form_row' => array($this, 'block_form_row'),
            'form_label' => array($this, 'block_form_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_form_rows($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"symfony-form-errors\">
        ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
    </div>
    ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 8
            echo "        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["child"]) ? $context["child"] : $this->getContext($context, "child")), 'row');
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 12
    public function block_form_row($context, array $blocks = array())
    {
        // line 13
        echo "    <div class=\"symfony-form-row\">
        ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        echo "
        <div class=\"symfony-form-field\">
            ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
            <div class=\"symfony-form-errors\">
                ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
            </div>
        </div>
    </div>
";
    }

    // line 24
    public function block_form_label($context, array $blocks = array())
    {
        // line 25
        echo "    ";
        if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
            // line 26
            echo "        ";
            $context["label"] = call_user_func_array($this->env->getFilter('humanize')->getCallable(), array((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))));
            // line 27
            echo "    ";
        }
        // line 28
        echo "    <label for=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\">
        ";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))), "html", null, true);
        echo "
        ";
        // line 30
        if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
            // line 31
            echo "            <span class=\"symfony-form-required\" title=\"This field is required\">*</span>
        ";
        }
        // line 33
        echo "    </label>
";
    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  431 => 189,  408 => 176,  401 => 172,  373 => 156,  207 => 75,  318 => 111,  231 => 83,  378 => 157,  363 => 126,  353 => 121,  334 => 141,  328 => 139,  290 => 119,  210 => 77,  806 => 488,  803 => 487,  792 => 485,  788 => 484,  784 => 482,  771 => 481,  745 => 476,  742 => 475,  723 => 473,  706 => 472,  702 => 470,  698 => 469,  694 => 468,  686 => 466,  682 => 465,  678 => 464,  675 => 463,  673 => 462,  656 => 461,  645 => 460,  630 => 455,  625 => 453,  621 => 452,  602 => 449,  565 => 414,  547 => 411,  394 => 168,  359 => 140,  308 => 118,  276 => 111,  270 => 102,  245 => 88,  239 => 86,  237 => 85,  234 => 78,  202 => 77,  167 => 60,  681 => 404,  676 => 401,  664 => 394,  659 => 392,  650 => 388,  639 => 380,  633 => 377,  605 => 361,  595 => 354,  588 => 350,  577 => 344,  575 => 341,  567 => 337,  550 => 326,  542 => 321,  538 => 319,  531 => 312,  514 => 306,  509 => 304,  492 => 295,  481 => 290,  466 => 280,  456 => 273,  452 => 272,  445 => 267,  443 => 261,  429 => 188,  424 => 254,  422 => 184,  396 => 157,  331 => 140,  267 => 101,  253 => 100,  232 => 88,  213 => 78,  306 => 107,  303 => 122,  256 => 96,  248 => 94,  242 => 140,  150 => 55,  346 => 196,  343 => 146,  327 => 114,  320 => 127,  313 => 82,  304 => 174,  293 => 120,  287 => 72,  271 => 66,  265 => 96,  262 => 98,  260 => 80,  257 => 149,  216 => 79,  188 => 90,  185 => 66,  12 => 34,  97 => 39,  165 => 60,  701 => 213,  695 => 210,  692 => 209,  690 => 467,  674 => 397,  669 => 202,  654 => 390,  643 => 381,  623 => 373,  601 => 187,  596 => 186,  593 => 185,  590 => 184,  584 => 180,  580 => 178,  556 => 174,  539 => 173,  535 => 172,  530 => 410,  527 => 409,  524 => 169,  521 => 168,  518 => 307,  516 => 166,  498 => 157,  490 => 154,  486 => 292,  471 => 129,  468 => 128,  450 => 145,  439 => 195,  420 => 249,  418 => 128,  404 => 124,  371 => 156,  358 => 151,  349 => 103,  342 => 137,  336 => 99,  329 => 131,  326 => 138,  311 => 89,  297 => 104,  274 => 97,  263 => 95,  250 => 67,  236 => 108,  200 => 72,  191 => 67,  152 => 46,  344 => 119,  340 => 145,  338 => 135,  335 => 134,  321 => 112,  315 => 125,  295 => 275,  292 => 134,  277 => 68,  259 => 103,  215 => 34,  190 => 76,  181 => 65,  178 => 66,  687 => 225,  684 => 205,  679 => 219,  672 => 215,  666 => 212,  662 => 210,  660 => 209,  657 => 200,  651 => 198,  649 => 205,  646 => 204,  640 => 192,  638 => 201,  635 => 200,  629 => 376,  627 => 197,  624 => 196,  618 => 451,  616 => 450,  613 => 366,  610 => 191,  606 => 189,  600 => 145,  591 => 142,  586 => 141,  581 => 346,  578 => 177,  573 => 340,  570 => 137,  564 => 127,  560 => 126,  551 => 124,  546 => 121,  529 => 117,  525 => 408,  520 => 406,  515 => 404,  512 => 111,  505 => 110,  502 => 109,  496 => 108,  493 => 155,  485 => 105,  482 => 104,  476 => 103,  464 => 104,  462 => 202,  458 => 101,  455 => 147,  448 => 96,  442 => 95,  434 => 138,  421 => 56,  417 => 55,  412 => 53,  403 => 50,  399 => 158,  389 => 160,  383 => 150,  376 => 40,  370 => 100,  366 => 142,  356 => 328,  351 => 141,  348 => 140,  345 => 147,  339 => 316,  332 => 116,  330 => 87,  325 => 129,  323 => 128,  319 => 90,  316 => 189,  310 => 81,  289 => 113,  286 => 112,  281 => 114,  255 => 93,  244 => 136,  228 => 59,  222 => 83,  195 => 150,  180 => 104,  175 => 65,  161 => 63,  251 => 105,  233 => 87,  225 => 156,  218 => 77,  212 => 78,  198 => 80,  194 => 70,  184 => 63,  153 => 56,  134 => 54,  104 => 31,  129 => 56,  137 => 60,  90 => 27,  84 => 25,  568 => 179,  557 => 330,  553 => 176,  545 => 173,  540 => 120,  534 => 169,  532 => 118,  526 => 310,  517 => 113,  513 => 165,  507 => 159,  504 => 302,  500 => 158,  495 => 156,  488 => 106,  477 => 150,  470 => 128,  467 => 127,  463 => 133,  460 => 132,  449 => 198,  446 => 197,  441 => 196,  426 => 102,  419 => 98,  415 => 180,  410 => 96,  395 => 120,  392 => 83,  388 => 107,  386 => 159,  382 => 93,  380 => 160,  377 => 147,  369 => 136,  367 => 155,  361 => 146,  357 => 123,  352 => 138,  347 => 102,  333 => 117,  324 => 113,  307 => 128,  302 => 125,  300 => 121,  296 => 121,  291 => 102,  288 => 101,  282 => 79,  280 => 130,  275 => 105,  272 => 158,  249 => 89,  226 => 84,  223 => 27,  205 => 84,  197 => 71,  192 => 87,  186 => 81,  172 => 64,  148 => 63,  174 => 65,  114 => 23,  170 => 56,  155 => 47,  127 => 35,  124 => 69,  118 => 49,  113 => 40,  110 => 77,  53 => 17,  77 => 25,  70 => 19,  65 => 22,  160 => 66,  146 => 34,  126 => 51,  76 => 31,  23 => 18,  34 => 5,  100 => 36,  81 => 24,  58 => 14,  20 => 1,  480 => 132,  474 => 285,  469 => 158,  461 => 149,  457 => 131,  453 => 199,  444 => 142,  440 => 148,  437 => 94,  435 => 258,  430 => 103,  427 => 57,  423 => 136,  413 => 134,  409 => 127,  407 => 242,  402 => 130,  398 => 121,  393 => 119,  387 => 164,  384 => 116,  381 => 120,  379 => 41,  374 => 114,  368 => 112,  365 => 111,  362 => 141,  360 => 33,  355 => 143,  341 => 118,  337 => 103,  322 => 101,  314 => 99,  312 => 124,  309 => 108,  305 => 184,  298 => 120,  294 => 111,  285 => 84,  283 => 100,  278 => 106,  268 => 126,  264 => 72,  258 => 94,  252 => 68,  247 => 66,  241 => 90,  229 => 85,  220 => 81,  214 => 75,  177 => 63,  169 => 73,  140 => 58,  132 => 57,  128 => 35,  107 => 32,  61 => 15,  273 => 101,  269 => 107,  254 => 91,  243 => 92,  240 => 86,  238 => 139,  235 => 85,  230 => 105,  227 => 86,  224 => 81,  221 => 78,  219 => 36,  217 => 75,  208 => 76,  204 => 154,  179 => 107,  159 => 69,  143 => 51,  135 => 81,  119 => 40,  102 => 30,  71 => 23,  67 => 16,  63 => 18,  59 => 13,  28 => 6,  93 => 28,  88 => 25,  78 => 18,  87 => 26,  44 => 10,  31 => 4,  21 => 2,  46 => 13,  25 => 12,  201 => 153,  196 => 92,  183 => 82,  171 => 102,  166 => 54,  163 => 53,  158 => 62,  156 => 58,  151 => 59,  142 => 50,  138 => 4,  136 => 48,  121 => 50,  117 => 39,  105 => 34,  91 => 34,  62 => 14,  49 => 14,  94 => 21,  89 => 30,  85 => 24,  75 => 19,  68 => 30,  56 => 12,  27 => 3,  38 => 7,  26 => 6,  24 => 3,  19 => 1,  79 => 21,  72 => 18,  69 => 17,  47 => 15,  40 => 11,  37 => 7,  22 => 2,  246 => 93,  157 => 58,  145 => 52,  139 => 49,  131 => 45,  123 => 42,  120 => 31,  115 => 49,  111 => 47,  108 => 33,  101 => 31,  98 => 29,  96 => 35,  83 => 33,  74 => 33,  66 => 25,  55 => 16,  52 => 12,  50 => 16,  43 => 12,  41 => 7,  35 => 6,  32 => 5,  29 => 3,  209 => 95,  203 => 73,  199 => 93,  193 => 70,  189 => 66,  187 => 75,  182 => 87,  176 => 63,  173 => 85,  168 => 61,  164 => 67,  162 => 59,  154 => 60,  149 => 36,  147 => 54,  144 => 42,  141 => 51,  133 => 81,  130 => 46,  125 => 51,  122 => 41,  116 => 39,  112 => 36,  109 => 35,  106 => 51,  103 => 45,  99 => 31,  95 => 34,  92 => 27,  86 => 29,  82 => 19,  80 => 32,  73 => 23,  64 => 23,  60 => 20,  57 => 19,  54 => 19,  51 => 13,  48 => 16,  45 => 8,  42 => 7,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
