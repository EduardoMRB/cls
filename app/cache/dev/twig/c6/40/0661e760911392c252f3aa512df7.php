<?php

/* ClsSiteBundle:Services:index.html.twig */
class __TwigTemplate_c6400661e760911392c252f3aa512df7 extends Twig_Template
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
        echo "\" alt=\"Projetos de alta qualidade industrial\" />
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "<section class=\"content\">
  <div class=\"default-block center clearfix content-wrapper\">
    <section class=\"subitem inner\">
      <h1>Serviços</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, corporis minima porro labore itaque maiores distinctio. Assumenda, tempora, cum, voluptatem culpa est alias maxime dignissimos quibusdam iure obcaecati facere facilis!</p>

      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, amet, odit accusantium cupiditate enim iusto sed totam excepturi minus iure temporibus sit quisquam ipsam asperiores quo eligendi ratione recusandae velit!</p>
    </section>

    <section class=\"equipment inner\">
      ";
        // line 18
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getUrl("cls_equipment_list"));
        echo "
    </section>
  </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "ClsSiteBundle:Services:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 18,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
