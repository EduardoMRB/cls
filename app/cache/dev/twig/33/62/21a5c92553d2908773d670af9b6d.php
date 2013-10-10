<?php

/* SonataAdminBundle:Pager:base_results.html.twig */
class __TwigTemplate_336221a5c92553d2908773d670af9b6d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'num_pages' => array($this, 'block_num_pages'),
            'num_results' => array($this, 'block_num_results'),
            'max_per_page' => array($this, 'block_max_per_page'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('num_pages', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('num_results', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('max_per_page', $context, $blocks);
    }

    // line 12
    public function block_num_pages($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), "pager"), "page"), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), "pager"), "lastpage"), "html", null, true);
        echo "
    &nbsp;-&nbsp;
";
    }

    // line 17
    public function block_num_results($context, array $blocks = array())
    {
        // line 18
        echo "    ";
        echo $this->env->getExtension('translator')->getTranslator()->transChoice("list_results_count", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), "pager"), "nbresults"), array("%count%" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), "pager"), "nbresults")), "SonataAdminBundle");
        // line 19
        echo "    &nbsp;-&nbsp;
";
    }

    // line 22
    public function block_max_per_page($context, array $blocks = array())
    {
        // line 23
        echo "    <label class=\"control-label\" for=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid"), "html", null, true);
        echo "_per_page\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("label_per_page", array(), "SonataAdminBundle");
        echo "</label>
    <select class=\"per-page small\" id=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid"), "html", null, true);
        echo "_per_page\" style=\"width: auto; height: auto\">
        ";
        // line 25
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getperpageoptions"));
        foreach ($context['_seq'] as $context["_key"] => $context["per_page"]) {
            // line 26
            echo "            <option ";
            if (((isset($context["per_page"]) ? $context["per_page"] : $this->getContext($context, "per_page")) == $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), "pager"), "maxperpage"))) {
                echo "selected=\"selected\"";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => array("filter" => twig_array_merge($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "datagrid"), "values"), array("_page" => 1, "_per_page" => (isset($context["per_page"]) ? $context["per_page"] : $this->getContext($context, "per_page")))))), "method"), "html", null, true);
            echo "\">
                ";
            // line 27
            echo twig_escape_filter($this->env, (isset($context["per_page"]) ? $context["per_page"] : $this->getContext($context, "per_page")), "html", null, true);
            echo "
            </option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['per_page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "    </select>
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Pager:base_results.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  150 => 58,  346 => 92,  343 => 91,  327 => 86,  320 => 84,  313 => 82,  304 => 79,  293 => 75,  287 => 72,  271 => 66,  265 => 64,  262 => 63,  260 => 62,  257 => 61,  216 => 25,  188 => 21,  185 => 20,  12 => 34,  97 => 37,  165 => 68,  701 => 213,  695 => 210,  692 => 209,  690 => 208,  674 => 204,  669 => 202,  654 => 199,  643 => 193,  623 => 190,  601 => 187,  596 => 186,  593 => 185,  590 => 184,  584 => 180,  580 => 178,  556 => 174,  539 => 173,  535 => 172,  530 => 171,  527 => 170,  524 => 169,  521 => 168,  518 => 167,  516 => 166,  498 => 157,  490 => 154,  486 => 134,  471 => 129,  468 => 128,  450 => 145,  439 => 140,  420 => 135,  418 => 128,  404 => 124,  371 => 113,  358 => 106,  349 => 103,  342 => 101,  336 => 99,  329 => 95,  326 => 93,  311 => 89,  297 => 84,  274 => 77,  263 => 71,  250 => 67,  236 => 63,  200 => 55,  191 => 50,  152 => 63,  344 => 97,  340 => 90,  338 => 94,  335 => 93,  321 => 91,  315 => 83,  295 => 88,  292 => 87,  277 => 68,  259 => 70,  215 => 54,  190 => 50,  181 => 72,  178 => 45,  687 => 225,  684 => 205,  679 => 219,  672 => 215,  666 => 212,  662 => 210,  660 => 209,  657 => 200,  651 => 198,  649 => 205,  646 => 204,  640 => 192,  638 => 201,  635 => 200,  629 => 198,  627 => 197,  624 => 196,  618 => 194,  616 => 193,  613 => 192,  610 => 191,  606 => 189,  600 => 145,  591 => 142,  586 => 141,  581 => 140,  578 => 177,  573 => 176,  570 => 137,  564 => 127,  560 => 126,  551 => 124,  546 => 121,  529 => 117,  525 => 116,  520 => 114,  515 => 112,  512 => 111,  505 => 110,  502 => 109,  496 => 108,  493 => 155,  485 => 105,  482 => 104,  476 => 103,  464 => 104,  462 => 103,  458 => 101,  455 => 147,  448 => 96,  442 => 95,  434 => 138,  421 => 56,  417 => 55,  412 => 53,  403 => 50,  399 => 49,  389 => 118,  383 => 43,  376 => 40,  370 => 100,  366 => 36,  356 => 32,  351 => 30,  348 => 29,  345 => 28,  339 => 100,  332 => 88,  330 => 87,  325 => 221,  323 => 191,  319 => 90,  316 => 189,  310 => 81,  289 => 81,  286 => 80,  281 => 172,  255 => 167,  244 => 162,  228 => 59,  222 => 155,  195 => 150,  180 => 104,  175 => 71,  161 => 38,  251 => 105,  233 => 62,  225 => 156,  218 => 91,  212 => 88,  198 => 80,  194 => 79,  184 => 47,  153 => 48,  134 => 55,  104 => 42,  129 => 56,  137 => 47,  90 => 27,  84 => 36,  568 => 179,  557 => 125,  553 => 176,  545 => 173,  540 => 120,  534 => 169,  532 => 118,  526 => 164,  517 => 113,  513 => 165,  507 => 159,  504 => 160,  500 => 158,  495 => 156,  488 => 106,  477 => 150,  470 => 128,  467 => 127,  463 => 133,  460 => 132,  449 => 123,  446 => 122,  441 => 141,  426 => 102,  419 => 98,  415 => 97,  410 => 96,  395 => 120,  392 => 83,  388 => 107,  386 => 95,  382 => 93,  380 => 83,  377 => 115,  369 => 136,  367 => 99,  361 => 97,  357 => 125,  352 => 94,  347 => 102,  333 => 117,  324 => 92,  307 => 87,  302 => 78,  300 => 181,  296 => 76,  291 => 82,  288 => 85,  282 => 79,  280 => 69,  275 => 170,  272 => 76,  249 => 55,  226 => 67,  223 => 27,  205 => 84,  197 => 54,  192 => 23,  186 => 54,  172 => 99,  148 => 44,  174 => 60,  114 => 50,  170 => 93,  155 => 62,  127 => 34,  124 => 49,  118 => 28,  113 => 46,  110 => 36,  53 => 24,  77 => 25,  70 => 29,  65 => 15,  160 => 59,  146 => 34,  126 => 55,  76 => 35,  23 => 13,  34 => 15,  100 => 43,  81 => 26,  58 => 19,  20 => 11,  480 => 132,  474 => 130,  469 => 158,  461 => 149,  457 => 131,  453 => 146,  444 => 142,  440 => 148,  437 => 94,  435 => 146,  430 => 103,  427 => 57,  423 => 136,  413 => 134,  409 => 127,  407 => 51,  402 => 130,  398 => 121,  393 => 119,  387 => 122,  384 => 116,  381 => 120,  379 => 41,  374 => 114,  368 => 112,  365 => 111,  362 => 110,  360 => 33,  355 => 95,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 89,  309 => 97,  305 => 184,  298 => 91,  294 => 178,  285 => 84,  283 => 70,  278 => 86,  268 => 73,  264 => 72,  258 => 81,  252 => 68,  247 => 66,  241 => 31,  229 => 96,  220 => 56,  214 => 61,  177 => 131,  169 => 58,  140 => 53,  132 => 44,  128 => 44,  107 => 40,  61 => 27,  273 => 96,  269 => 75,  254 => 60,  243 => 65,  240 => 86,  238 => 64,  235 => 74,  230 => 158,  227 => 60,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 57,  204 => 154,  179 => 69,  159 => 49,  143 => 48,  135 => 53,  119 => 39,  102 => 39,  71 => 29,  67 => 30,  63 => 22,  59 => 29,  28 => 14,  93 => 38,  88 => 33,  78 => 35,  87 => 38,  44 => 21,  31 => 17,  21 => 11,  46 => 19,  25 => 12,  201 => 153,  196 => 52,  183 => 82,  171 => 69,  166 => 57,  163 => 60,  158 => 37,  156 => 36,  151 => 51,  142 => 42,  138 => 54,  136 => 75,  121 => 52,  117 => 44,  105 => 26,  91 => 40,  62 => 28,  49 => 23,  94 => 40,  89 => 17,  85 => 32,  75 => 21,  68 => 31,  56 => 27,  27 => 16,  38 => 18,  26 => 13,  24 => 13,  19 => 11,  79 => 31,  72 => 19,  69 => 19,  47 => 19,  40 => 24,  37 => 23,  22 => 11,  246 => 54,  157 => 58,  145 => 56,  139 => 31,  131 => 45,  123 => 51,  120 => 48,  115 => 40,  111 => 40,  108 => 44,  101 => 37,  98 => 36,  96 => 42,  83 => 15,  74 => 19,  66 => 23,  55 => 18,  52 => 17,  50 => 23,  43 => 26,  41 => 25,  35 => 22,  32 => 21,  29 => 16,  209 => 24,  203 => 56,  199 => 53,  193 => 51,  189 => 147,  187 => 49,  182 => 66,  176 => 102,  173 => 42,  168 => 69,  164 => 54,  162 => 57,  154 => 52,  149 => 36,  147 => 46,  144 => 45,  141 => 57,  133 => 51,  130 => 54,  125 => 40,  122 => 44,  116 => 47,  112 => 46,  109 => 45,  106 => 35,  103 => 38,  99 => 30,  95 => 19,  92 => 28,  86 => 25,  82 => 23,  80 => 25,  73 => 24,  64 => 31,  60 => 26,  57 => 15,  54 => 26,  51 => 14,  48 => 15,  45 => 26,  42 => 13,  39 => 12,  36 => 20,  33 => 17,  30 => 17,);
    }
}
