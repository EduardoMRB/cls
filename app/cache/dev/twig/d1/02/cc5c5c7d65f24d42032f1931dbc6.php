<?php

/* SonataAdminBundle:Button:create_button.html.twig */
class __TwigTemplate_d102cc5c5c7d65f24d42032f1931dbc6 extends Twig_Template
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
";
        // line 12
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "create"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "CREATE"), "method"))) {
            // line 13
            echo "    ";
            if (twig_test_empty($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "subClasses"))) {
                // line 14
                echo "        <a class=\"btn sonata-action-element\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "create"), "method"), "html", null, true);
                echo "\">
            <i class=\"icon-plus\"></i>
            ";
                // line 16
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_action_create", array(), "SonataAdminBundle"), "html", null, true);
                echo "</a>
    ";
            } else {
                // line 18
                echo "        <span class=\"btn-group sonata-action-element\">
            <a class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                <i class=\"icon-plus\"></i>
                ";
                // line 21
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_action_create", array(), "SonataAdminBundle"), "html", null, true);
                echo "
                <span class=\"caret\"></span>
            </a>
            <ul class=\"dropdown-menu\">
                ";
                // line 25
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "subclasses")));
                foreach ($context['_seq'] as $context["_key"] => $context["subclass"]) {
                    // line 26
                    echo "                    <li>
                        <a href=\"";
                    // line 27
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "create", 1 => array("subclass" => (isset($context["subclass"]) ? $context["subclass"] : $this->getContext($context, "subclass")))), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["subclass"]) ? $context["subclass"] : $this->getContext($context, "subclass")), array(), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationdomain")), "html", null, true);
                    echo "</a>
                    </li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subclass'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 30
                echo "            </ul>
        </span>
    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Button:create_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  687 => 225,  684 => 224,  679 => 219,  672 => 215,  666 => 212,  662 => 210,  660 => 209,  657 => 208,  651 => 206,  649 => 205,  646 => 204,  640 => 202,  638 => 201,  635 => 200,  629 => 198,  627 => 197,  624 => 196,  618 => 194,  616 => 193,  613 => 192,  610 => 191,  606 => 146,  600 => 145,  591 => 142,  586 => 141,  581 => 140,  578 => 139,  573 => 138,  570 => 137,  564 => 127,  560 => 126,  551 => 124,  546 => 121,  529 => 117,  525 => 116,  520 => 114,  515 => 112,  512 => 111,  505 => 110,  502 => 109,  496 => 108,  493 => 107,  485 => 105,  482 => 104,  476 => 103,  464 => 104,  462 => 103,  458 => 101,  455 => 100,  448 => 96,  442 => 95,  434 => 93,  421 => 56,  417 => 55,  412 => 53,  403 => 50,  399 => 49,  389 => 44,  383 => 43,  376 => 40,  370 => 37,  366 => 36,  356 => 32,  351 => 30,  348 => 29,  345 => 28,  339 => 22,  332 => 231,  330 => 224,  325 => 221,  323 => 191,  319 => 190,  316 => 189,  310 => 186,  289 => 176,  286 => 175,  281 => 172,  255 => 167,  244 => 162,  228 => 157,  222 => 155,  195 => 150,  180 => 132,  175 => 100,  161 => 90,  251 => 105,  233 => 98,  225 => 156,  218 => 91,  212 => 88,  198 => 80,  194 => 79,  184 => 74,  153 => 63,  134 => 55,  104 => 43,  129 => 46,  137 => 48,  90 => 34,  84 => 35,  568 => 179,  557 => 125,  553 => 176,  545 => 173,  540 => 120,  534 => 169,  532 => 118,  526 => 164,  517 => 113,  513 => 160,  507 => 159,  504 => 158,  500 => 157,  495 => 155,  488 => 106,  477 => 150,  470 => 128,  467 => 127,  463 => 133,  460 => 132,  449 => 123,  446 => 122,  441 => 105,  426 => 102,  419 => 98,  415 => 97,  410 => 96,  395 => 84,  392 => 83,  388 => 107,  386 => 95,  382 => 93,  380 => 83,  377 => 82,  369 => 136,  367 => 131,  361 => 127,  357 => 125,  352 => 121,  347 => 118,  333 => 117,  324 => 116,  307 => 185,  302 => 114,  300 => 181,  296 => 111,  291 => 177,  288 => 108,  282 => 80,  280 => 79,  275 => 170,  272 => 169,  249 => 165,  226 => 67,  223 => 66,  205 => 84,  197 => 56,  192 => 55,  186 => 54,  172 => 99,  148 => 44,  174 => 53,  114 => 47,  170 => 93,  155 => 56,  127 => 34,  124 => 51,  118 => 103,  113 => 42,  110 => 46,  53 => 22,  77 => 33,  70 => 22,  65 => 28,  160 => 48,  146 => 64,  126 => 45,  76 => 27,  23 => 13,  34 => 13,  100 => 42,  81 => 30,  58 => 25,  20 => 11,  480 => 151,  474 => 149,  469 => 158,  461 => 155,  457 => 131,  453 => 124,  444 => 149,  440 => 148,  437 => 94,  435 => 146,  430 => 103,  427 => 57,  423 => 142,  413 => 134,  409 => 132,  407 => 51,  402 => 130,  398 => 129,  393 => 46,  387 => 122,  384 => 121,  381 => 120,  379 => 41,  374 => 81,  368 => 112,  365 => 111,  362 => 110,  360 => 33,  355 => 122,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 184,  298 => 91,  294 => 178,  285 => 81,  283 => 88,  278 => 86,  268 => 85,  264 => 72,  258 => 81,  252 => 80,  247 => 78,  241 => 101,  229 => 96,  220 => 65,  214 => 61,  177 => 131,  169 => 51,  140 => 58,  132 => 108,  128 => 107,  107 => 33,  61 => 26,  273 => 96,  269 => 168,  254 => 92,  243 => 68,  240 => 86,  238 => 160,  235 => 74,  230 => 158,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 60,  204 => 154,  179 => 69,  159 => 61,  143 => 78,  135 => 53,  119 => 43,  102 => 39,  71 => 29,  67 => 40,  63 => 27,  59 => 14,  28 => 15,  93 => 35,  88 => 33,  78 => 63,  87 => 25,  44 => 18,  31 => 15,  21 => 12,  46 => 19,  25 => 12,  201 => 153,  196 => 90,  183 => 82,  171 => 61,  166 => 50,  163 => 91,  158 => 64,  156 => 66,  151 => 51,  142 => 42,  138 => 54,  136 => 75,  121 => 51,  117 => 44,  105 => 143,  91 => 29,  62 => 28,  49 => 22,  94 => 36,  89 => 67,  85 => 32,  75 => 17,  68 => 30,  56 => 25,  27 => 14,  38 => 18,  26 => 13,  24 => 13,  19 => 11,  79 => 33,  72 => 26,  69 => 59,  47 => 20,  40 => 16,  37 => 16,  22 => 12,  246 => 69,  157 => 47,  145 => 60,  139 => 76,  131 => 45,  123 => 44,  120 => 50,  115 => 43,  111 => 41,  108 => 144,  101 => 37,  98 => 36,  96 => 139,  83 => 34,  74 => 31,  66 => 24,  55 => 24,  52 => 24,  50 => 25,  43 => 21,  41 => 18,  35 => 16,  32 => 12,  29 => 14,  209 => 82,  203 => 78,  199 => 152,  193 => 149,  189 => 147,  187 => 137,  182 => 66,  176 => 64,  173 => 71,  168 => 69,  164 => 19,  162 => 57,  154 => 52,  149 => 80,  147 => 61,  144 => 49,  141 => 48,  133 => 74,  130 => 54,  125 => 44,  122 => 44,  116 => 72,  112 => 70,  109 => 69,  106 => 40,  103 => 39,  99 => 31,  95 => 36,  92 => 68,  86 => 66,  82 => 39,  80 => 64,  73 => 61,  64 => 39,  60 => 26,  57 => 27,  54 => 26,  51 => 21,  48 => 20,  45 => 16,  42 => 17,  39 => 19,  36 => 14,  33 => 16,  30 => 11,);
    }
}