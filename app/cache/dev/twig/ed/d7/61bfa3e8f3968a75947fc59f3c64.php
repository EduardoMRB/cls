<?php

/* SonataBlockBundle:Block:block_base.html.twig */
class __TwigTemplate_edd761bfa3e8f3968a75947fc59f3c64 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "<div id=\"cms-block-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "id"), "html", null, true);
        echo "\" class=\"cms-block cms-block-element\">
    ";
        // line 12
        $this->displayBlock('block', $context, $blocks);
        // line 13
        echo "</div>
";
    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        echo "EMPTY CONTENT";
    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 12,  27 => 13,  25 => 12,  20 => 11,  181 => 72,  175 => 71,  171 => 69,  165 => 68,  155 => 62,  141 => 57,  137 => 55,  126 => 52,  123 => 51,  114 => 47,  112 => 46,  108 => 44,  104 => 42,  102 => 41,  96 => 39,  93 => 38,  84 => 33,  80 => 31,  77 => 30,  73 => 29,  64 => 25,  62 => 24,  59 => 23,  49 => 21,  43 => 20,  40 => 19,  36 => 18,  31 => 15,  159 => 64,  153 => 61,  147 => 59,  144 => 58,  140 => 44,  132 => 43,  129 => 42,  125 => 40,  119 => 50,  113 => 37,  110 => 36,  106 => 35,  103 => 34,  101 => 33,  97 => 31,  91 => 37,  85 => 28,  82 => 27,  78 => 26,  70 => 25,  67 => 26,  61 => 23,  58 => 22,  55 => 21,  52 => 22,  47 => 19,  45 => 18,  42 => 17,  39 => 16,  34 => 15,  28 => 14,);
    }
}
