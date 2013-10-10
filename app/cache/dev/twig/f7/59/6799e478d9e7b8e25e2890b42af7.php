<?php

/* SonataMediaBundle:GalleryAdmin:list.html.twig */
class __TwigTemplate_f7596799e478d9e7b8e25e2890b42af7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SonataAdminBundle:CRUD:base_list.html.twig");

        $this->blocks = array(
            'preview' => array($this, 'block_preview'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_preview($context, array $blocks = array())
    {
        // line 15
        echo "
    <ul class=\"nav nav-pills\">
        <li><a><strong>";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.select_context", array(), "SonataMediaBundle"), "html", null, true);
        echo "</strong></a></li>
        ";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["media_pool"]) ? $context["media_pool"] : $this->getContext($context, "media_pool")), "contexts"));
        foreach ($context['_seq'] as $context["name"] => $context["context"]) {
            // line 19
            echo "            ";
            if (((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")) == $this->getAttribute((isset($context["persistent_parameters"]) ? $context["persistent_parameters"] : $this->getContext($context, "persistent_parameters")), "context"))) {
                // line 20
                echo "                <li class=\"active\"><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => array("context" => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), array(), "SonataMediaBundle"), "html", null, true);
                echo "</a></li>
            ";
            } else {
                // line 22
                echo "                <li><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => array("context" => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), array(), "SonataMediaBundle"), "html", null, true);
                echo "</a></li>
            ";
            }
            // line 24
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['context'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "    </ul>

";
    }

    public function getTemplateName()
    {
        return "SonataMediaBundle:GalleryAdmin:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 23,  114 => 102,  170 => 22,  155 => 56,  127 => 48,  124 => 52,  118 => 103,  113 => 42,  110 => 44,  53 => 31,  77 => 31,  70 => 32,  65 => 17,  160 => 18,  146 => 64,  126 => 56,  76 => 36,  23 => 12,  34 => 17,  100 => 94,  81 => 34,  58 => 30,  20 => 11,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 52,  132 => 108,  128 => 107,  107 => 36,  61 => 31,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 40,  71 => 28,  67 => 27,  63 => 26,  59 => 22,  28 => 14,  93 => 29,  88 => 35,  78 => 19,  87 => 25,  44 => 18,  31 => 15,  21 => 12,  46 => 20,  25 => 13,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 57,  156 => 66,  151 => 63,  142 => 53,  138 => 54,  136 => 109,  121 => 51,  117 => 44,  105 => 40,  91 => 41,  62 => 24,  49 => 23,  94 => 28,  89 => 37,  85 => 38,  75 => 17,  68 => 25,  56 => 28,  27 => 16,  38 => 21,  26 => 2,  24 => 16,  19 => 2,  79 => 18,  72 => 26,  69 => 25,  47 => 22,  40 => 17,  37 => 18,  22 => 14,  246 => 90,  157 => 17,  145 => 54,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 46,  111 => 37,  108 => 99,  101 => 32,  98 => 31,  96 => 43,  83 => 25,  74 => 14,  66 => 31,  55 => 21,  52 => 24,  50 => 30,  43 => 19,  41 => 19,  35 => 17,  32 => 15,  29 => 25,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 61,  168 => 72,  164 => 19,  162 => 57,  154 => 16,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 55,  125 => 44,  122 => 104,  116 => 52,  112 => 51,  109 => 34,  106 => 37,  103 => 28,  99 => 31,  95 => 35,  92 => 36,  86 => 40,  82 => 39,  80 => 41,  73 => 19,  64 => 33,  60 => 19,  57 => 34,  54 => 22,  51 => 20,  48 => 21,  45 => 9,  42 => 19,  39 => 18,  36 => 17,  33 => 18,  30 => 1,);
    }
}
