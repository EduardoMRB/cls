<?php

/* SonataMediaBundle:Form:media_widgets.html.twig */
class __TwigTemplate_fe51aa8b996d632467314bc4f8d8e787 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sonata_media_type_widget' => array($this, 'block_sonata_media_type_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('sonata_media_type_widget', $context, $blocks);
    }

    public function block_sonata_media_type_widget($context, array $blocks = array())
    {
        // line 2
        echo "    <div class=\"span3 pull-left\">
        ";
        // line 3
        if ((!twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))))) {
            // line 4
            echo "            <div class=\"pull-left\" style=\"margin-right: 5px\">
                ";
            // line 5
            echo $this->env->getExtension('sonata_media')->thumbnail((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "admin", array("class" => "img-polaroid media-object"));
            // line 6
            echo "            </div>

            ";
            // line 8
            if ((array_key_exists("sonata_admin_enabled", $context) && (isset($context["sonata_admin_enabled"]) ? $context["sonata_admin_enabled"] : $this->getContext($context, "sonata_admin_enabled")))) {
                // line 9
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("admin_sonata_media_media_edit", array("id" => $this->getAttribute((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "id"))), "html", null, true);
                echo "\"><strong>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "name"), "html", null, true);
                echo "</strong></a>
            ";
            } else {
                // line 11
                echo "                <strong>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "name"), "html", null, true);
                echo "</strong>
            ";
            }
            // line 13
            echo "             <br />
            <span type=\"label\">";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "providerName"), array(), "SonataMediaBundle"), "html", null, true);
            echo "</span> ~ ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "context"), "html", null, true);
            echo "
        ";
        } else {
            // line 16
            echo "            <div class=\"pull-left\" style=\"margin-right: 5px\">
                <img src=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonatamedia/grey.png"), "html", null, true);
            echo "\" class=\"img-polaroid media-object\" style=\"width: 85px; height: 85px\"/>
            </div>
            <strong>";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("no_linked_media", array(), "SonataMediaBundle"), "html", null, true);
            echo "</strong> <br />
            <span type=\"label\">";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars"), "provider", array(), "array"), array(), "SonataMediaBundle"), "html", null, true);
            echo " ~ ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars"), "context", array(), "array"), array(), "SonataMediaBundle"), "html", null, true);
            echo "<span>
        ";
        }
        // line 22
        echo "    </div>

    <div class=\"span3 pull-left\">
        ";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_media", array(), "SonataMediaBundle"), "html", null, true);
        echo "
        ";
        // line 26
        $this->displayBlock("form_widget", $context, $blocks);
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataMediaBundle:Form:media_widgets.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  90 => 25,  84 => 27,  568 => 179,  557 => 177,  553 => 176,  545 => 173,  540 => 171,  534 => 169,  532 => 168,  526 => 164,  517 => 161,  513 => 160,  507 => 159,  504 => 158,  500 => 157,  495 => 155,  488 => 153,  477 => 150,  470 => 135,  467 => 134,  463 => 133,  460 => 132,  449 => 123,  446 => 122,  441 => 105,  426 => 102,  419 => 98,  415 => 97,  410 => 96,  395 => 84,  392 => 83,  388 => 107,  386 => 95,  382 => 93,  380 => 83,  377 => 82,  369 => 136,  367 => 131,  361 => 127,  357 => 125,  352 => 121,  347 => 118,  333 => 117,  324 => 116,  307 => 115,  302 => 114,  300 => 113,  296 => 111,  291 => 109,  288 => 108,  282 => 80,  280 => 79,  275 => 77,  272 => 76,  249 => 70,  226 => 67,  223 => 66,  205 => 59,  197 => 56,  192 => 55,  186 => 54,  172 => 52,  148 => 44,  174 => 53,  114 => 102,  170 => 22,  155 => 56,  127 => 34,  124 => 52,  118 => 103,  113 => 42,  110 => 44,  53 => 31,  77 => 31,  70 => 22,  65 => 25,  160 => 48,  146 => 64,  126 => 56,  76 => 36,  23 => 12,  34 => 5,  100 => 94,  81 => 30,  58 => 30,  20 => 1,  480 => 151,  474 => 149,  469 => 158,  461 => 155,  457 => 131,  453 => 124,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 103,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 95,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 81,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 122,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 81,  283 => 88,  278 => 86,  268 => 85,  264 => 72,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 65,  214 => 61,  177 => 65,  169 => 51,  140 => 41,  132 => 108,  128 => 107,  107 => 33,  61 => 31,  273 => 96,  269 => 75,  254 => 92,  243 => 68,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 60,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 31,  102 => 142,  71 => 28,  67 => 27,  63 => 23,  59 => 14,  28 => 13,  93 => 138,  88 => 74,  78 => 20,  87 => 25,  44 => 18,  31 => 4,  21 => 12,  46 => 20,  25 => 13,  201 => 57,  196 => 90,  183 => 82,  171 => 61,  166 => 50,  163 => 49,  158 => 57,  156 => 66,  151 => 45,  142 => 42,  138 => 54,  136 => 39,  121 => 51,  117 => 44,  105 => 143,  91 => 29,  62 => 24,  49 => 23,  94 => 26,  89 => 37,  85 => 22,  75 => 17,  68 => 26,  56 => 13,  27 => 16,  38 => 15,  26 => 2,  24 => 13,  19 => 11,  79 => 18,  72 => 26,  69 => 17,  47 => 22,  40 => 8,  37 => 14,  22 => 12,  246 => 69,  157 => 47,  145 => 43,  139 => 45,  131 => 52,  123 => 33,  120 => 40,  115 => 46,  111 => 37,  108 => 144,  101 => 32,  98 => 140,  96 => 139,  83 => 64,  74 => 19,  66 => 16,  55 => 21,  52 => 24,  50 => 11,  43 => 16,  41 => 19,  35 => 17,  32 => 15,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 61,  168 => 72,  164 => 19,  162 => 57,  154 => 46,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 35,  125 => 44,  122 => 104,  116 => 30,  112 => 51,  109 => 34,  106 => 37,  103 => 32,  99 => 31,  95 => 30,  92 => 36,  86 => 65,  82 => 39,  80 => 41,  73 => 27,  64 => 21,  60 => 19,  57 => 20,  54 => 19,  51 => 18,  48 => 17,  45 => 16,  42 => 9,  39 => 18,  36 => 6,  33 => 18,  30 => 1,);
    }
}
