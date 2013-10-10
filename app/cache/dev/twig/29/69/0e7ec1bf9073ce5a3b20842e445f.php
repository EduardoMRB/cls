<?php

/* ClsSiteBundle:Contact:index.html.twig */
class __TwigTemplate_29690e7ec1bf9073ce5a3b20842e445f extends Twig_Template
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
      <h1>Contato</h1>
      <p>Para contactar a CLS, você pode optar por várias possibilidades. Para contato imediato através do site, utilize o formuĺário abaixo. Os suportes móveis estão ao lado.</p>

      <div class=\"fields fields-left\">
        <strong>Cláudio Leandro</strong> (Diretor)<br />
        Cel +55 24 999942-6493<br />
        Nextel *55 98*1255<br />
        Tel +55 24 3350-6769<br />
        claudio.silva@clsmontagens.com.br<br /><br />
        Av. Dos Mineiros, 107 Belmonte<br />
        Volta Redonda/RJ - CEP:27273-200<br />
        <iframe style=\"margin-top: 10px;\" width=\"260\" height=\"110\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" src=\"https://maps.google.com.br/maps?f=q&amp;source=s_q&amp;hl=pt&amp;geocode=&amp;q=Av.+Dos+Mineiros,+107+Belmonte&amp;aq=&amp;sll=-15.45443,-55.842543&amp;sspn=1.07875,1.660309&amp;ie=UTF8&amp;hq=&amp;hnear=Av.+Mineiros,+107+-+Belmonte,+Volta+Redonda+-+Rio+de+Janeiro,+27210-580&amp;t=m&amp;ll=-22.514856,-44.129505&amp;spn=0.008722,0.02223&amp;z=14&amp;iwloc=A&amp;output=embed\"></iframe><br /><small><a target=\"_blank\" href=\"https://maps.google.com.br/maps?f=q&amp;source=embed&amp;hl=pt&amp;geocode=&amp;q=Av.+Dos+Mineiros,+107+Belmonte&amp;aq=&amp;sll=-15.45443,-55.842543&amp;sspn=1.07875,1.660309&amp;ie=UTF8&amp;hq=&amp;hnear=Av.+Mineiros,+107+-+Belmonte,+Volta+Redonda+-+Rio+de+Janeiro,+27210-580&amp;t=m&amp;ll=-22.514856,-44.129505&amp;spn=0.008722,0.02223&amp;z=14&amp;iwloc=A\" style=\"color:#0000FF;text-align:left\">Ver mapa maior</a></small>
      </div>
      <div class=\"fields\">
        <form action=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("cls_contact_send");
        echo "\" method=\"POST\" class=\"form-cls\">
          ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'widget', array("attr" => array("placeholder" => "Nome")));
        echo "
          ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'widget', array("attr" => array("placeholder" => "Email")));
        echo "
          ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "message"), 'widget', array("attr" => array("placeholder" => "Mensagem")));
        echo "
          ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
          <input type=\"submit\" value=\"Enviar\">
        </form>
      </div>
      <div class=\"form-errors\">";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "</div>
    </section>

    <section class=\"equipment inner\">
      ";
        // line 37
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getUrl("cls_equipment_list"));
        echo "
    </section>
  </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "ClsSiteBundle:Contact:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 37,  84 => 33,  77 => 29,  73 => 28,  69 => 27,  65 => 26,  61 => 25,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
