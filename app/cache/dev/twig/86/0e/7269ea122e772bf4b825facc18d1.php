<?php

/* SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_to_one.html.twig */
class __TwigTemplate_860e7269ea122e772bf4b825facc18d1 extends Twig_Template
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
        if ((!$this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "hasassociationadmin"))) {
            // line 13
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('sonata_admin')->renderRelationElement((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description")), "html", null, true);
            echo "
";
        } elseif (($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "edit") == "inline")) {
            // line 15
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "associationadmin"), "formfielddescriptions"));
            foreach ($context['_seq'] as $context["_key"] => $context["field_description"]) {
                // line 16
                echo "        ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "name"), array(), "array"), 'row');
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_description'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 19
            echo "    <div id=\"field_container_";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\" class=\"field-container\">
        ";
            // line 20
            if (($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "edit") == "list")) {
                // line 21
                echo "            <span id=\"field_widget_";
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
                echo "\" class=\"field-short-description\">
                ";
                // line 22
                if ($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "admin"), "id", array(0 => $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "value")), "method")) {
                    // line 23
                    echo "                    ";
                    echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('routing')->getUrl("sonata_admin_short_object_information", array("code" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "associationadmin"), "code"), "objectId" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "associationadmin"), "id", array(0 => $this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "value")), "method"), "uniqid" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "associationadmin"), "uniqid"))), array());
                    // line 28
                    echo "                ";
                } elseif (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description", array(), "any", false, true), "options", array(), "any", false, true), "placeholder", array(), "any", true, true) && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "options"), "placeholder"))) {
                    // line 29
                    echo "                    <span class=\"inner-field-short-description\">
                        ";
                    // line 30
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "options"), "placeholder"), array(), "SonataAdminBundle"), "html", null, true);
                    echo "
                    </span>
                ";
                }
                // line 33
                echo "            </span>
            <span style=\"display: none\" >
                ";
                // line 35
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
                echo "
            </span>
        ";
            } else {
                // line 38
                echo "            <span id=\"field_widget_";
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
                echo "\" >
                ";
                // line 39
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
                echo "
            </span>
        ";
            }
            // line 42
            echo "
        <span id=\"field_actions_";
            // line 43
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\" class=\"field-actions\">
            <span class=\"btn-group\">
                ";
            // line 45
            if ((((($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "edit") == "list") && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "associationadmin"), "hasRoute", array(0 => "list"), "method")) && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "associationadmin"), "isGranted", array(0 => "LIST"), "method")) && (isset($context["btn_list"]) ? $context["btn_list"] : $this->getContext($context, "btn_list")))) {
                // line 46
                echo "                    <a  href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "associationadmin"), "generateUrl", array(0 => "list", 1 => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "getOption", array(0 => "link_parameters", 1 => array()), "method")), "method"), "html", null, true);
                echo "\"
                        onclick=\"return start_field_dialog_form_list_";
                // line 47
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
                echo "(this);\"
                        class=\"btn btn-small sonata-ba-action\"
                        title=\"";
                // line 49
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["btn_list"]) ? $context["btn_list"] : $this->getContext($context, "btn_list")), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : $this->getContext($context, "btn_catalogue"))), "html", null, true);
                echo "\"
                        >
                        <i class=\"icon-list\"></i>
                        ";
                // line 52
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["btn_list"]) ? $context["btn_list"] : $this->getContext($context, "btn_list")), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : $this->getContext($context, "btn_catalogue"))), "html", null, true);
                echo "
                    </a>
                ";
            }
            // line 55
            echo "
                ";
            // line 56
            if ((((($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "edit") != "admin") && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "associationadmin"), "hasRoute", array(0 => "create"), "method")) && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "associationadmin"), "isGranted", array(0 => "CREATE"), "method")) && (isset($context["btn_add"]) ? $context["btn_add"] : $this->getContext($context, "btn_add")))) {
                // line 57
                echo "                    <a  href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "associationadmin"), "generateUrl", array(0 => "create", 1 => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "getOption", array(0 => "link_parameters", 1 => array()), "method")), "method"), "html", null, true);
                echo "\"
                        onclick=\"return start_field_dialog_form_add_";
                // line 58
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
                echo "(this);\"
                        class=\"btn btn-small sonata-ba-action\"
                        title=\"";
                // line 60
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["btn_add"]) ? $context["btn_add"] : $this->getContext($context, "btn_add")), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : $this->getContext($context, "btn_catalogue"))), "html", null, true);
                echo "\"
                        >
                        <i class=\"icon-plus\"></i>
                        ";
                // line 63
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["btn_add"]) ? $context["btn_add"] : $this->getContext($context, "btn_add")), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : $this->getContext($context, "btn_catalogue"))), "html", null, true);
                echo "
                    </a>
                ";
            }
            // line 66
            echo "            </span>

            <span class=\"btn-group\">
                ";
            // line 69
            if ((((($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "edit") == "list") && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "associationadmin"), "hasRoute", array(0 => "list"), "method")) && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "field_description"), "associationadmin"), "isGranted", array(0 => "LIST"), "method")) && (isset($context["btn_delete"]) ? $context["btn_delete"] : $this->getContext($context, "btn_delete")))) {
                // line 70
                echo "                    <a  href=\"\"
                        onclick=\"return remove_selected_element_";
                // line 71
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
                echo "(this);\"
                        class=\"btn btn-small sonata-ba-action\"
                        title=\"";
                // line 73
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["btn_delete"]) ? $context["btn_delete"] : $this->getContext($context, "btn_delete")), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : $this->getContext($context, "btn_catalogue"))), "html", null, true);
                echo "\"
                        >
                        <i class=\"icon-off\"></i>
                        ";
                // line 76
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["btn_delete"]) ? $context["btn_delete"] : $this->getContext($context, "btn_delete")), array(), (isset($context["btn_catalogue"]) ? $context["btn_catalogue"] : $this->getContext($context, "btn_catalogue"))), "html", null, true);
                echo "
                    </a>
                ";
            }
            // line 79
            echo "            </span>
        </span>

        <div class=\"container sonata-ba-modal sonata-ba-modal-edit-one-to-one\" style=\"display: none\" id=\"field_dialog_";
            // line 82
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\">

        </div>
    </div>

    ";
            // line 87
            $this->env->loadTemplate("SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_association_script.html.twig")->display($context);
        }
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_to_one.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  306 => 140,  303 => 139,  256 => 120,  248 => 115,  242 => 112,  150 => 58,  346 => 92,  343 => 91,  327 => 86,  320 => 84,  313 => 82,  304 => 79,  293 => 75,  287 => 72,  271 => 66,  265 => 125,  262 => 63,  260 => 123,  257 => 61,  216 => 99,  188 => 21,  185 => 85,  12 => 34,  97 => 37,  165 => 76,  701 => 213,  695 => 210,  692 => 209,  690 => 208,  674 => 204,  669 => 202,  654 => 199,  643 => 193,  623 => 190,  601 => 187,  596 => 186,  593 => 185,  590 => 184,  584 => 180,  580 => 178,  556 => 174,  539 => 173,  535 => 172,  530 => 171,  527 => 170,  524 => 169,  521 => 168,  518 => 167,  516 => 166,  498 => 157,  490 => 154,  486 => 134,  471 => 129,  468 => 128,  450 => 145,  439 => 140,  420 => 135,  418 => 128,  404 => 124,  371 => 113,  358 => 106,  349 => 103,  342 => 101,  336 => 99,  329 => 95,  326 => 93,  311 => 89,  297 => 84,  274 => 128,  263 => 124,  250 => 67,  236 => 108,  200 => 55,  191 => 50,  152 => 63,  344 => 97,  340 => 90,  338 => 94,  335 => 93,  321 => 91,  315 => 83,  295 => 88,  292 => 134,  277 => 68,  259 => 70,  215 => 54,  190 => 50,  181 => 79,  178 => 45,  687 => 225,  684 => 205,  679 => 219,  672 => 215,  666 => 212,  662 => 210,  660 => 209,  657 => 200,  651 => 198,  649 => 205,  646 => 204,  640 => 192,  638 => 201,  635 => 200,  629 => 198,  627 => 197,  624 => 196,  618 => 194,  616 => 193,  613 => 192,  610 => 191,  606 => 189,  600 => 145,  591 => 142,  586 => 141,  581 => 140,  578 => 177,  573 => 176,  570 => 137,  564 => 127,  560 => 126,  551 => 124,  546 => 121,  529 => 117,  525 => 116,  520 => 114,  515 => 112,  512 => 111,  505 => 110,  502 => 109,  496 => 108,  493 => 155,  485 => 105,  482 => 104,  476 => 103,  464 => 104,  462 => 103,  458 => 101,  455 => 147,  448 => 96,  442 => 95,  434 => 138,  421 => 56,  417 => 55,  412 => 53,  403 => 50,  399 => 49,  389 => 118,  383 => 43,  376 => 40,  370 => 100,  366 => 36,  356 => 32,  351 => 30,  348 => 29,  345 => 28,  339 => 100,  332 => 88,  330 => 87,  325 => 221,  323 => 191,  319 => 90,  316 => 189,  310 => 81,  289 => 81,  286 => 132,  281 => 172,  255 => 167,  244 => 162,  228 => 59,  222 => 155,  195 => 150,  180 => 104,  175 => 76,  161 => 70,  251 => 105,  233 => 62,  225 => 156,  218 => 91,  212 => 88,  198 => 80,  194 => 87,  184 => 47,  153 => 71,  134 => 55,  104 => 49,  129 => 56,  137 => 58,  90 => 27,  84 => 38,  568 => 179,  557 => 125,  553 => 176,  545 => 173,  540 => 120,  534 => 169,  532 => 118,  526 => 164,  517 => 113,  513 => 165,  507 => 159,  504 => 160,  500 => 158,  495 => 156,  488 => 106,  477 => 150,  470 => 128,  467 => 127,  463 => 133,  460 => 132,  449 => 123,  446 => 122,  441 => 141,  426 => 102,  419 => 98,  415 => 97,  410 => 96,  395 => 120,  392 => 83,  388 => 107,  386 => 95,  382 => 93,  380 => 83,  377 => 115,  369 => 136,  367 => 99,  361 => 97,  357 => 125,  352 => 94,  347 => 102,  333 => 117,  324 => 92,  307 => 87,  302 => 78,  300 => 138,  296 => 76,  291 => 82,  288 => 85,  282 => 79,  280 => 130,  275 => 170,  272 => 76,  249 => 55,  226 => 67,  223 => 27,  205 => 84,  197 => 89,  192 => 87,  186 => 82,  172 => 99,  148 => 63,  174 => 60,  114 => 50,  170 => 78,  155 => 62,  127 => 55,  124 => 49,  118 => 28,  113 => 46,  110 => 47,  53 => 24,  77 => 27,  70 => 33,  65 => 29,  160 => 75,  146 => 34,  126 => 55,  76 => 35,  23 => 13,  34 => 15,  100 => 43,  81 => 26,  58 => 19,  20 => 11,  480 => 132,  474 => 130,  469 => 158,  461 => 149,  457 => 131,  453 => 146,  444 => 142,  440 => 148,  437 => 94,  435 => 146,  430 => 103,  427 => 57,  423 => 136,  413 => 134,  409 => 127,  407 => 51,  402 => 130,  398 => 121,  393 => 119,  387 => 122,  384 => 116,  381 => 120,  379 => 41,  374 => 114,  368 => 112,  365 => 111,  362 => 110,  360 => 33,  355 => 95,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 142,  309 => 97,  305 => 184,  298 => 91,  294 => 178,  285 => 84,  283 => 70,  278 => 86,  268 => 126,  264 => 72,  258 => 81,  252 => 68,  247 => 66,  241 => 31,  229 => 96,  220 => 56,  214 => 98,  177 => 131,  169 => 73,  140 => 53,  132 => 57,  128 => 58,  107 => 40,  61 => 27,  273 => 96,  269 => 75,  254 => 60,  243 => 65,  240 => 86,  238 => 64,  235 => 74,  230 => 105,  227 => 60,  224 => 102,  221 => 77,  219 => 100,  217 => 75,  208 => 57,  204 => 154,  179 => 69,  159 => 69,  143 => 48,  135 => 53,  119 => 39,  102 => 39,  71 => 29,  67 => 32,  63 => 22,  59 => 23,  28 => 13,  93 => 38,  88 => 33,  78 => 35,  87 => 38,  44 => 21,  31 => 14,  21 => 11,  46 => 21,  25 => 12,  201 => 153,  196 => 52,  183 => 82,  171 => 69,  166 => 57,  163 => 60,  158 => 74,  156 => 36,  151 => 51,  142 => 60,  138 => 61,  136 => 60,  121 => 52,  117 => 44,  105 => 46,  91 => 40,  62 => 28,  49 => 23,  94 => 40,  89 => 39,  85 => 30,  75 => 39,  68 => 30,  56 => 27,  27 => 16,  38 => 17,  26 => 13,  24 => 13,  19 => 11,  79 => 31,  72 => 37,  69 => 19,  47 => 19,  40 => 24,  37 => 23,  22 => 12,  246 => 54,  157 => 58,  145 => 56,  139 => 31,  131 => 45,  123 => 57,  120 => 56,  115 => 49,  111 => 40,  108 => 44,  101 => 37,  98 => 43,  96 => 42,  83 => 15,  74 => 33,  66 => 23,  55 => 22,  52 => 21,  50 => 20,  43 => 20,  41 => 25,  35 => 16,  32 => 21,  29 => 16,  209 => 95,  203 => 92,  199 => 53,  193 => 51,  189 => 147,  187 => 86,  182 => 84,  176 => 81,  173 => 42,  168 => 69,  164 => 71,  162 => 57,  154 => 66,  149 => 36,  147 => 68,  144 => 67,  141 => 66,  133 => 51,  130 => 56,  125 => 40,  122 => 44,  116 => 47,  112 => 52,  109 => 45,  106 => 35,  103 => 45,  99 => 30,  95 => 42,  92 => 45,  86 => 43,  82 => 23,  80 => 41,  73 => 24,  64 => 31,  60 => 26,  57 => 22,  54 => 25,  51 => 24,  48 => 15,  45 => 19,  42 => 18,  39 => 12,  36 => 20,  33 => 17,  30 => 15,);
    }
}
