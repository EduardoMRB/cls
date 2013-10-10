<?php

/* IvoryCKEditorBundle:Form:ckeditor_widget.html.twig */
class __TwigTemplate_9a162ff83a2fca732c94a28b814abe8e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'ckeditor_widget' => array($this, 'block_ckeditor_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('ckeditor_widget', $context, $blocks);
    }

    public function block_ckeditor_widget($context, array $blocks = array())
    {
        // line 2
        echo "    <textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"));
        echo "</textarea>

    ";
        // line 4
        if ((isset($context["enable"]) ? $context["enable"] : $this->getContext($context, "enable"))) {
            // line 5
            echo "        <script type=\"text/javascript\">
            var CKEDITOR_BASEPATH = '";
            // line 6
            echo twig_escape_filter($this->env, (isset($context["base_path"]) ? $context["base_path"] : $this->getContext($context, "base_path")), "html", null, true);
            echo "';
        </script>

        <script type=\"text/javascript\" src=\"";
            // line 9
            echo twig_escape_filter($this->env, (isset($context["js_path"]) ? $context["js_path"] : $this->getContext($context, "js_path")), "html", null, true);
            echo "\"></script>

        <script type=\"text/javascript\">
            if (CKEDITOR.instances['";
            // line 12
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "']) {
                delete CKEDITOR.instances['";
            // line 13
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "'];
            }

            ";
            // line 16
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["plugins"]) ? $context["plugins"] : $this->getContext($context, "plugins")));
            foreach ($context['_seq'] as $context["plugin_name"] => $context["plugin"]) {
                // line 17
                echo "                CKEDITOR.plugins.addExternal('";
                echo twig_escape_filter($this->env, (isset($context["plugin_name"]) ? $context["plugin_name"] : $this->getContext($context, "plugin_name")), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "path"), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["plugin"]) ? $context["plugin"] : $this->getContext($context, "plugin")), "filename"), "html", null, true);
                echo "');
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['plugin_name'], $context['plugin'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "
            CKEDITOR.replace('";
            // line 20
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "', ";
            echo (isset($context["config"]) ? $context["config"] : $this->getContext($context, "config"));
            echo ");
        </script>
    ";
        }
    }

    public function getTemplateName()
    {
        return "IvoryCKEditorBundle:Form:ckeditor_widget.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  81 => 20,  78 => 19,  65 => 17,  61 => 16,  51 => 12,  45 => 9,  36 => 5,  34 => 4,  26 => 2,  20 => 1,  95 => 35,  86 => 29,  77 => 23,  73 => 22,  67 => 19,  63 => 18,  59 => 17,  55 => 13,  50 => 14,  42 => 8,  39 => 6,  32 => 4,  29 => 3,);
    }
}
