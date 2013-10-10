<?php

/* ClsSiteBundle:Estimate:index.html.twig */
class __TwigTemplate_8f880156eb518de7effedddecae5d00e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("ClsSiteBundle::layout.html.twig");

        $this->blocks = array(
            'image_separator' => array($this, 'block_image_separator'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ClsSiteBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_image_separator($context, array $blocks = array())
    {
        // line 4
        echo "  <img class=\"img-separator\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/clssite/images/maincall_2.jpg"), "html", null, true);
        echo "\" alt=\"Projetos de alta qualidade industrial\">
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "<section class=\"content\">
  <div class=\"default-block center clearfix content-wrapper\">
    <section class=\"subitem inner\">
      <h1>Orçamento</h1>
      <p>Obrigado por confiar em nosso trabalho! O objetivo do questionário é ajudar-nos a conhecer o seu projeto. E com isso gerar um orçamento coerente.</p>

      <form class=\"form-cls\" action=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("cls_estimate_create");
        echo "\" method=\"POST\" enctype=\"multipart/form-data\">
        <div class=\"fields fields-left\">
          ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'widget', array("attr" => array("placeholder" => "Nome")));
        echo "
          ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'widget', array("attr" => array("placeholder" => "Email")));
        echo "
          ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone"), 'widget', array("attr" => array("placeholder" => "Telefone")));
        echo "
          ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file"), 'widget', array("attr" => array("placeholder" => "Anexo")));
        echo "
        </div>
        <div class=\"fields\">
          ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description"), 'widget', array("attr" => array("placeholder" => "Descrição/Observação")));
        echo "
          ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
          <input type=\"submit\" value=\"Enviar\" >
        </div>
      </form>

      <div class=\"form-errors\">
        ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
      </div>
    </section>

    <section class=\"equipment inner\">
      ";
        // line 34
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getUrl("cls_equipment_list"));
        echo "
    </section>
  </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "ClsSiteBundle:Estimate:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 34,  86 => 29,  77 => 23,  73 => 22,  67 => 19,  63 => 18,  59 => 17,  55 => 16,  50 => 14,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
