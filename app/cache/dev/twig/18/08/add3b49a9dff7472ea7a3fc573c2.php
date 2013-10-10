<?php

/* SonataMediaBundle:MediaAdmin:list.html.twig */
class __TwigTemplate_1808add3b49a9dff7472ea7a3fc573c2 extends Twig_Template
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

    // line 15
    public function block_preview($context, array $blocks = array())
    {
        // line 16
        echo "
    <ul class=\"nav nav-pills\">
        <li><a><strong>";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.select_context", array(), "SonataMediaBundle"), "html", null, true);
        echo "</strong></a></li>
        ";
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["media_pool"]) ? $context["media_pool"] : $this->getContext($context, "media_pool")), "contexts"));
        foreach ($context['_seq'] as $context["name"] => $context["context"]) {
            // line 20
            echo "            ";
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "providers")) == 0)) {
                // line 21
                echo "                ";
                $context["urlParams"] = array("context" => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
                // line 22
                echo "            ";
            } else {
                // line 23
                echo "                ";
                $context["urlParams"] = array("context" => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "provider" => $this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "providers"), 0, array(), "array"));
                // line 24
                echo "            ";
            }
            // line 25
            echo "
            ";
            // line 26
            if (((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")) == $this->getAttribute((isset($context["persistent_parameters"]) ? $context["persistent_parameters"] : $this->getContext($context, "persistent_parameters")), "context"))) {
                // line 27
                echo "                <li class=\"active\"><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => (isset($context["urlParams"]) ? $context["urlParams"] : $this->getContext($context, "urlParams"))), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), array(), "SonataMediaBundle"), "html", null, true);
                echo "</a></li>
            ";
            } else {
                // line 29
                echo "                <li><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => (isset($context["urlParams"]) ? $context["urlParams"] : $this->getContext($context, "urlParams"))), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), array(), "SonataMediaBundle"), "html", null, true);
                echo "</a></li>
            ";
            }
            // line 31
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['context'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "
        ";
        // line 33
        $context["providers"] = $this->getAttribute((isset($context["media_pool"]) ? $context["media_pool"] : $this->getContext($context, "media_pool")), "getProviderNamesByContext", array(0 => $this->getAttribute((isset($context["persistent_parameters"]) ? $context["persistent_parameters"] : $this->getContext($context, "persistent_parameters")), "context")), "method");
        // line 34
        echo "
        ";
        // line 35
        if ((twig_length_filter($this->env, (isset($context["providers"]) ? $context["providers"] : $this->getContext($context, "providers"))) > 1)) {
            // line 36
            echo "            <li><a><strong>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.select_provider", array(), "SonataMediaBundle"), "html", null, true);
            echo "</strong></a></li>

            ";
            // line 38
            if ((!$this->getAttribute((isset($context["persistent_parameters"]) ? $context["persistent_parameters"] : $this->getContext($context, "persistent_parameters")), "provider"))) {
                // line 39
                echo "                <li class=\"active\"><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => array("context" => $this->getAttribute((isset($context["persistent_parameters"]) ? $context["persistent_parameters"] : $this->getContext($context, "persistent_parameters")), "context"), "provider" => null)), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link.all_providers", array(), "SonataMediaBundle"), "html", null, true);
                echo "</a></li>
            ";
            } else {
                // line 41
                echo "                <li><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => array("context" => $this->getAttribute((isset($context["persistent_parameters"]) ? $context["persistent_parameters"] : $this->getContext($context, "persistent_parameters")), "context"), "provider" => null)), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link.all_providers", array(), "SonataMediaBundle"), "html", null, true);
                echo "</a></li>
            ";
            }
            // line 43
            echo "
            ";
            // line 44
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["providers"]) ? $context["providers"] : $this->getContext($context, "providers")));
            foreach ($context['_seq'] as $context["_key"] => $context["provider_name"]) {
                // line 45
                echo "                ";
                if (($this->getAttribute((isset($context["persistent_parameters"]) ? $context["persistent_parameters"] : $this->getContext($context, "persistent_parameters")), "provider") == (isset($context["provider_name"]) ? $context["provider_name"] : $this->getContext($context, "provider_name")))) {
                    // line 46
                    echo "                    <li class=\"active\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => array("context" => $this->getAttribute((isset($context["persistent_parameters"]) ? $context["persistent_parameters"] : $this->getContext($context, "persistent_parameters")), "context"), "provider" => (isset($context["provider_name"]) ? $context["provider_name"] : $this->getContext($context, "provider_name")))), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["provider_name"]) ? $context["provider_name"] : $this->getContext($context, "provider_name")), array(), "SonataMediaBundle"), "html", null, true);
                    echo "</a></li>
                ";
                } else {
                    // line 48
                    echo "                    <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => array("context" => $this->getAttribute((isset($context["persistent_parameters"]) ? $context["persistent_parameters"] : $this->getContext($context, "persistent_parameters")), "context"), "provider" => (isset($context["provider_name"]) ? $context["provider_name"] : $this->getContext($context, "provider_name")))), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["provider_name"]) ? $context["provider_name"] : $this->getContext($context, "provider_name")), array(), "SonataMediaBundle"), "html", null, true);
                    echo "</a></li>
                ";
                }
                // line 50
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['provider_name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "        ";
        }
        // line 52
        echo "    </ul>

";
    }

    public function getTemplateName()
    {
        return "SonataMediaBundle:MediaAdmin:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 46,  137 => 48,  90 => 34,  84 => 27,  568 => 179,  557 => 177,  553 => 176,  545 => 173,  540 => 171,  534 => 169,  532 => 168,  526 => 164,  517 => 161,  513 => 160,  507 => 159,  504 => 158,  500 => 157,  495 => 155,  488 => 153,  477 => 150,  470 => 135,  467 => 134,  463 => 133,  460 => 132,  449 => 123,  446 => 122,  441 => 105,  426 => 102,  419 => 98,  415 => 97,  410 => 96,  395 => 84,  392 => 83,  388 => 107,  386 => 95,  382 => 93,  380 => 83,  377 => 82,  369 => 136,  367 => 131,  361 => 127,  357 => 125,  352 => 121,  347 => 118,  333 => 117,  324 => 116,  307 => 115,  302 => 114,  300 => 113,  296 => 111,  291 => 109,  288 => 108,  282 => 80,  280 => 79,  275 => 77,  272 => 76,  249 => 70,  226 => 67,  223 => 66,  205 => 59,  197 => 56,  192 => 55,  186 => 54,  172 => 52,  148 => 44,  174 => 53,  114 => 102,  170 => 22,  155 => 56,  127 => 34,  124 => 52,  118 => 103,  113 => 42,  110 => 41,  53 => 31,  77 => 28,  70 => 22,  65 => 23,  160 => 48,  146 => 64,  126 => 45,  76 => 36,  23 => 13,  34 => 16,  100 => 94,  81 => 30,  58 => 25,  20 => 11,  480 => 151,  474 => 149,  469 => 158,  461 => 155,  457 => 131,  453 => 124,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 103,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 95,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 81,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 122,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 81,  283 => 88,  278 => 86,  268 => 85,  264 => 72,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 65,  214 => 61,  177 => 65,  169 => 51,  140 => 41,  132 => 108,  128 => 107,  107 => 33,  61 => 26,  273 => 96,  269 => 75,  254 => 92,  243 => 68,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 60,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 43,  102 => 39,  71 => 29,  67 => 30,  63 => 27,  59 => 14,  28 => 15,  93 => 35,  88 => 33,  78 => 20,  87 => 25,  44 => 21,  31 => 16,  21 => 12,  46 => 21,  25 => 12,  201 => 57,  196 => 90,  183 => 82,  171 => 61,  166 => 50,  163 => 49,  158 => 57,  156 => 66,  151 => 51,  142 => 42,  138 => 54,  136 => 39,  121 => 51,  117 => 44,  105 => 143,  91 => 29,  62 => 24,  49 => 22,  94 => 33,  89 => 37,  85 => 32,  75 => 17,  68 => 25,  56 => 21,  27 => 14,  38 => 17,  26 => 13,  24 => 13,  19 => 11,  79 => 31,  72 => 26,  69 => 17,  47 => 20,  40 => 19,  37 => 16,  22 => 12,  246 => 69,  157 => 47,  145 => 50,  139 => 45,  131 => 45,  123 => 44,  120 => 40,  115 => 43,  111 => 41,  108 => 144,  101 => 38,  98 => 140,  96 => 139,  83 => 64,  74 => 27,  66 => 24,  55 => 24,  52 => 23,  50 => 22,  43 => 20,  41 => 18,  35 => 18,  32 => 16,  29 => 14,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 61,  168 => 72,  164 => 19,  162 => 57,  154 => 52,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 35,  125 => 44,  122 => 44,  116 => 30,  112 => 51,  109 => 34,  106 => 40,  103 => 39,  99 => 31,  95 => 36,  92 => 36,  86 => 31,  82 => 39,  80 => 29,  73 => 27,  64 => 21,  60 => 19,  57 => 23,  54 => 19,  51 => 23,  48 => 22,  45 => 16,  42 => 19,  39 => 19,  36 => 17,  33 => 18,  30 => 1,);
    }
}
