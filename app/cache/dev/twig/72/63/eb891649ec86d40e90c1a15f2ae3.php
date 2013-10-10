<?php

/* ClsSiteBundle:Home:index.html.twig */
class __TwigTemplate_7263eb891649ec86d40e90c1a15f2ae3 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/clssite/images/maincall_1.jpg"), "html", null, true);
        echo "\" alt=\"Projetos de alta qualidade industrial\" />
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "  <section class=\"content\">
    <div class=\"home-section-block center clearfix\">
      <div class=\"portrait-wrapper\">
        <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("cls_institutional");
        echo "\">
          <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/clssite/images/historia.png"), "html", null, true);
        echo "\" alt=\"Nossa história\" class=\"portrait-img\">
          <div class=\"portrait-text\"><span>Veja nossa história.</span></div>
        </a>
      </div>
      <div class=\"portrait-wrapper middle\">
        <a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("cls_services");
        echo "\">
          <img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/clssite/images/servicos.png"), "html", null, true);
        echo "\" alt=\"Nossos serviços\" class=\"portrait-img\">
          <div class=\"portrait-text\"><span>Conheça nossos serviços.</span></div>
        </a>
      </div>
      <div class=\"portrait-wrapper\">
        <a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("cls_estimate");
        echo "\">
          <img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/clssite/images/orcamento.png"), "html", null, true);
        echo "\" alt=\"Peça seu orçamento\" class=\"portrait-img\">
          <div class=\"portrait-text\"><span>Faça já seu orçamento.</span></div>
        </a>
      </div>
    </div>
  </section>
";
    }

    public function getTemplateName()
    {
        return "ClsSiteBundle:Home:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 24,  71 => 23,  63 => 18,  59 => 17,  51 => 12,  47 => 11,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
