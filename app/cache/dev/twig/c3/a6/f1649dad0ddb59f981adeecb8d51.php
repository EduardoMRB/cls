<?php

/* SonataNewsBundle:Admin:inner_row_comment.html.twig */
class __TwigTemplate_c3a6f1649dad0ddb59f981adeecb8d51 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataAdminBundle:CRUD:base_list_flat_inner_row.html.twig");

        $this->blocks = array(
            'row' => array($this, 'block_row'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list_flat_inner_row.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_row($context, array $blocks = array())
    {
        // line 15
        echo "
    ";
        // line 16
        if (($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getStatusCode", array(), "method") == "valid")) {
            // line 17
            echo "        <span class=\"label label-success\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getStatusCode", array(), "method"), "html", null, true);
            echo "</span>
    ";
        } elseif (($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getStatusCode", array(), "method") == "invalid")) {
            // line 19
            echo "        <span class=\"label label-important\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getStatusCode", array(), "method"), "html", null, true);
            echo "</span>
    ";
        } elseif (($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getStatusCode", array(), "method") == "moderate")) {
            // line 21
            echo "        <span class=\"label label-warning\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getStatusCode", array(), "method"), "html", null, true);
            echo "</span>
    ";
        } else {
            // line 23
            echo "        <span class=\"label\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getStatusCode", array(), "method"), "html", null, true);
            echo "</span>
    ";
        }
        // line 25
        echo "
    ";
        // line 26
        echo $this->env->getExtension('sonata_admin')->renderListElement((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list"), "name", array(), "array"));
        echo " -
    ";
        // line 27
        echo $this->env->getExtension('sonata_admin')->renderListElement((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list"), "url", array(), "array"));
        echo " -
    ";
        // line 28
        echo $this->env->getExtension('sonata_admin')->renderListElement((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list"), "email", array(), "array"));
        echo " <br />

    <small>
        ";
        // line 31
        echo $this->env->getExtension('sonata_admin')->renderListElement((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "list"), "message", array(), "array"));
        echo "
    </small>

";
    }

    public function getTemplateName()
    {
        return "SonataNewsBundle:Admin:inner_row_comment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 60,  155 => 56,  127 => 48,  124 => 52,  118 => 44,  113 => 42,  110 => 44,  53 => 31,  77 => 31,  70 => 32,  65 => 17,  160 => 58,  146 => 64,  126 => 56,  76 => 36,  23 => 15,  34 => 16,  100 => 27,  81 => 34,  58 => 30,  20 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 52,  132 => 59,  128 => 49,  107 => 36,  61 => 31,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 40,  71 => 28,  67 => 27,  63 => 26,  59 => 22,  28 => 14,  93 => 29,  88 => 35,  78 => 19,  87 => 25,  44 => 18,  31 => 15,  21 => 12,  46 => 24,  25 => 14,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 57,  156 => 66,  151 => 63,  142 => 53,  138 => 54,  136 => 50,  121 => 51,  117 => 44,  105 => 40,  91 => 41,  62 => 30,  49 => 24,  94 => 28,  89 => 37,  85 => 38,  75 => 17,  68 => 22,  56 => 28,  27 => 16,  38 => 21,  26 => 2,  24 => 16,  19 => 2,  79 => 18,  72 => 26,  69 => 25,  47 => 28,  40 => 17,  37 => 20,  22 => 14,  246 => 90,  157 => 21,  145 => 54,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 46,  111 => 37,  108 => 43,  101 => 32,  98 => 31,  96 => 43,  83 => 25,  74 => 14,  66 => 31,  55 => 21,  52 => 27,  50 => 30,  43 => 23,  41 => 23,  35 => 20,  32 => 15,  29 => 18,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 61,  168 => 72,  164 => 59,  162 => 57,  154 => 20,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 55,  125 => 44,  122 => 55,  116 => 52,  112 => 51,  109 => 34,  106 => 37,  103 => 28,  99 => 31,  95 => 35,  92 => 36,  86 => 40,  82 => 39,  80 => 41,  73 => 19,  64 => 33,  60 => 25,  57 => 34,  54 => 23,  51 => 20,  48 => 21,  45 => 9,  42 => 19,  39 => 6,  36 => 17,  33 => 18,  30 => 1,);
    }
}