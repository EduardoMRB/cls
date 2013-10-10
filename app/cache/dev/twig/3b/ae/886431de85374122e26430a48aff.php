<?php

/* SonataFormatterBundle:Form:formatter.html.twig */
class __TwigTemplate_3bae886431de85374122e26430a48aff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sonata_formatter_type_widget' => array($this, 'block_sonata_formatter_type_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('sonata_formatter_type_widget', $context, $blocks);
    }

    public function block_sonata_formatter_type_widget($context, array $blocks = array())
    {
        // line 2
        echo "
    <div style=\"margin-bottom: 5px;\">
        ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children"), (isset($context["format_field"]) ? $context["format_field"] : $this->getContext($context, "format_field")), array(), "array"), 'widget');
        echo "
        <i>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("please_select_format_method", array(), "SonataFormatterBundle"), "html", null, true);
        echo "</i>
    </div>

    ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children"), (isset($context["source_field"]) ? $context["source_field"] : $this->getContext($context, "source_field")), array(), "array"), 'widget');
        echo "

    <script>
        var ";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["source_id"]) ? $context["source_id"] : $this->getContext($context, "source_id")), "html", null, true);
        echo "_rich_instance = false;

        jQuery(document).ready(function() {

            // This code requires CKEDITOR and jQuery MarkItUp
            if (typeof CKEDITOR === 'undefined' || jQuery().markItUp == undefined) {
                return;
            }

            jQuery('#";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children"), (isset($context["format_field"]) ? $context["format_field"] : $this->getContext($context, "format_field")), array(), "array"), "vars"), "id"), "html", null, true);
        echo "').change(function() {
                var elms = jQuery('#";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children"), (isset($context["source_field"]) ? $context["source_field"] : $this->getContext($context, "source_field")), array(), "array"), "vars"), "id"), "html", null, true);
        echo "');
                elms.markItUpRemove();
                if (";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["source_id"]) ? $context["source_id"] : $this->getContext($context, "source_id")), "html", null, true);
        echo "_rich_instance) {
                    ";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["source_id"]) ? $context["source_id"] : $this->getContext($context, "source_id")), "html", null, true);
        echo "_rich_instance.destroy();
                }

                var val = jQuery(this).val();
                var appendClass = val;
                switch(val) {
                    case 'textile':
                        elms.markItUp(markitup_sonataTextileSettings);
                        break;
                    case 'markdown':
                        elms.markItUp(markitup_sonataMarkdownSettings);
                        break;
                    case 'bbcode':
                        elms.markItUp(markitup_sonataBBCodeSettings);
                        break;
                    case 'rawhtml':
                        elms.markItUp(markitup_sonataHtmlSettings);
                        appendClass = 'html';
                        break;
                    case 'richhtml':
                        ";
        // line 44
        echo twig_escape_filter($this->env, (isset($context["source_id"]) ? $context["source_id"] : $this->getContext($context, "source_id")), "html", null, true);
        echo "_rich_instance = CKEDITOR.replace('";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children"), (isset($context["source_field"]) ? $context["source_field"] : $this->getContext($context, "source_field")), array(), "array"), "vars"), "id"), "html", null, true);
        echo "', {
                            toolbar: [
                                [ 'Bold','Italic','Underline',
                                  '-', 'Cut','Copy','Paste','PasteText','PasteFromWord',
                                  '-','Undo','Redo',
                                  '-', 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote',
                                  '-', 'Image', 'Link','Unlink'
                                ], [
                                  'Maximize', 'Source'
                                ]
                            ]
                        });
                }

                var parent = elms.parents('div.markItUp');

                if (parent) {
                    for (name in ['textile', 'markdown', 'bbcode', 'rawhtml', 'richhtml', 'rawhtml']) {
                        parent.removeClass(name)
                    }

                    parent.addClass(appendClass);
                }
            });

            jQuery('#";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children"), (isset($context["format_field"]) ? $context["format_field"] : $this->getContext($context, "format_field")), array(), "array"), "vars"), "id"), "html", null, true);
        echo "').trigger('change');
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "SonataFormatterBundle:Form:formatter.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  124 => 69,  94 => 44,  71 => 24,  62 => 21,  58 => 20,  46 => 11,  30 => 4,  54 => 12,  40 => 8,  35 => 5,  31 => 4,  28 => 3,  81 => 20,  78 => 19,  65 => 17,  61 => 16,  51 => 12,  45 => 9,  36 => 5,  34 => 5,  26 => 2,  20 => 1,  95 => 35,  86 => 29,  77 => 23,  73 => 22,  67 => 23,  63 => 14,  59 => 17,  55 => 13,  50 => 11,  42 => 8,  39 => 6,  32 => 4,  29 => 3,);
    }
}
