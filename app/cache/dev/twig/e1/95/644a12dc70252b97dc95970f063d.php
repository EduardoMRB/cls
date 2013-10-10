<?php

/* ClsSiteBundle:Equipment:list.html.twig */
class __TwigTemplate_e195644a12dc70252b97dc95970f063d extends Twig_Template
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
        // line 1
        echo "<h2>Equipamentos</h2>
<div id=\"equipment-carousel\" class=\"carousel slide\">
  <div class=\"equipment-controls\">
    <a href=\"#equipment-carousel\" class=\"carousel-control-left arrow left-arrow\" data-slide=\"prev\"></a>
    <a href=\"#equipment-carousel\" class=\"carousel-control-right arrow right-arrow\" data-slide=\"next\"></a>
  </div>
  
  <div class=\"carousel-inner\">
    ";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["equipment"]) ? $context["equipment"] : $this->getContext($context, "equipment")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 10
            echo "    ";
            if ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "first")) {
                // line 11
                echo "      <div class=\"active item\">
        <img src=\"";
                // line 12
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "getWebPath")), "html", null, true);
                echo "\" alt=\"Equipamento cls\">
        <p>";
                // line 13
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "description"), "html", null, true);
                echo "</p>
      </div>
    ";
            } else {
                // line 16
                echo "      <div class=\"item\">
        <img src=\"";
                // line 17
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "getWebPath")), "html", null, true);
                echo "\" alt=\"Equipamento cls\">
        <p>";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "description"), "html", null, true);
                echo "</p>
      </div>
    ";
            }
            // line 21
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "ClsSiteBundle:Equipment:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 22,  75 => 21,  62 => 16,  56 => 13,  52 => 12,  49 => 11,  19 => 1,  260 => 80,  234 => 78,  229 => 77,  226 => 76,  222 => 37,  219 => 36,  215 => 34,  212 => 33,  208 => 13,  152 => 11,  147 => 7,  144 => 6,  138 => 4,  133 => 81,  131 => 76,  113 => 61,  101 => 52,  85 => 38,  83 => 36,  80 => 35,  78 => 33,  69 => 18,  65 => 17,  61 => 25,  57 => 24,  53 => 23,  46 => 10,  36 => 14,  34 => 6,  31 => 5,  24 => 1,  54 => 18,  42 => 18,  39 => 7,  32 => 4,  29 => 9,);
    }
}
