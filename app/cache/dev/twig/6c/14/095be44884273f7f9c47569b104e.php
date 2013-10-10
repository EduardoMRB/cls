<?php

/* ClsSiteBundle::layout.html.twig */
class __TwigTemplate_6c14095be44884273f7f9c47569b104e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'image_separator' => array($this, 'block_image_separator'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"pt_BR\">
  <head>
    ";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        // line 5
        echo "    <meta charset=\"utf-8\">
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "  </head>
  <body>
    <header>
      <div class=\"header-wrapper default-block center\">
        <a class=\"logo-anchor\" href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("cls_home");
        echo "\">
          <img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/clssite/images/marca.jpg"), "html", null, true);
        echo "\" alt=\"CLS Montagens industriais\" class=\"logo\">
        </a>
        <nav class=\"main-menu\">
          <ul class=\"menu-ul\">
            <li><a class=\"first\" href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("cls_home");
        echo "\">Home</a></li>
            <li><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("cls_institutional");
        echo "\" rel=\"empresa\">Empresa</a></li>
            <li><a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("cls_services");
        echo "\" rel=\"servicos\">Serviços</a></li>
            <li><a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("cls_estimate");
        echo "\" rel=\"orcamento\">Orçamento</a></li>
            <li><a class=\"last\" href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("cls_contact");
        echo "\" rel=\"fale-conosco\">Contato</a></li>
          </ul>
        </nav>
      </div>
    </header>

    ";
        // line 33
        $this->displayBlock('image_separator', $context, $blocks);
        // line 35
        echo "
    ";
        // line 36
        $this->displayBlock('content', $context, $blocks);
        // line 38
        echo "
    <footer>
      <section class=\"upper-footer\">
        <div class=\"upper-footer-content default-block center clearfix\">
          <div class=\"upper-item first\">
            <h3>Depoimentos</h3>
            <div class=\"footer-arrow-wrapper\">
              <span class=\"arrow left-arrow\"></span>
              <span class=\"arrow right-arrow\"></span>
            </div>
            <p>“Simply dummy text of the printing 
typesetting industry. Lorem Ipsum has 
been the industry”  <strong>Steve Jobs</strong></p>
          </div>
          <img class=\"image-left\" src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/clssite/images/filete.jpg"), "html", null, true);
        echo "\">
          <div class=\"upper-item middle\">
            <h3>Clientes</h3>
            <div class=\"footer-arrow-wrapper\">
              <span class=\"arrow left-arrow\"></span>
              <span class=\"arrow right-arrow\"></span>
            </div>
            <img src=\"\" alt=\"\">
          </div>
          <img class=\"image-left\" src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/clssite/images/filete.jpg"), "html", null, true);
        echo "\">
          <div class=\"upper-item last\">
            <h3>Webmail</h3>
            <a href=\"#\">Link para webmail</a>
          </div>
        </div>
      </section>

      <section class=\"lower-footer\">
        <div class=\"default-block center clearfix\">
          <p class=\"footer-text left\">Todos os direitos reservados</p>
          <p class=\"footer-text right\">Av. Dos Mineiros, 107 Belmonte Volta Redonda/RJ - CEP 27273-200</p>
        </div>
      </section>
    </footer>
    ";
        // line 76
        $this->displayBlock('javascripts', $context, $blocks);
        // line 81
        echo "  </body>
</html>";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "<title>CLS Montagens Industriais</title>";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "      ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "905c18b_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_905c18b_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/905c18b_part_1_footer_1.css");
            // line 11
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\">
      ";
            // asset "905c18b_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_905c18b_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/905c18b_part_1_form_2.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\">
      ";
            // asset "905c18b_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_905c18b_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/905c18b_part_1_home_3.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\">
      ";
            // asset "905c18b_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_905c18b_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/905c18b_part_1_menu_4.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\">
      ";
            // asset "905c18b_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_905c18b_4") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/905c18b_part_1_normalize_5.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\">
      ";
            // asset "905c18b_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_905c18b_5") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/905c18b_part_1_style_6.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\">
      ";
            // asset "905c18b_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_905c18b_6") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/905c18b_part_2_bootstrap-responsive.min_1.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\">
      ";
            // asset "905c18b_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_905c18b_7") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/905c18b_part_2_bootstrap.min_2.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\">
      ";
        } else {
            // asset "905c18b"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_905c18b") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/905c18b.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\">
      ";
        }
        unset($context["asset_url"]);
        // line 13
        echo "    ";
    }

    // line 33
    public function block_image_separator($context, array $blocks = array())
    {
        // line 34
        echo "    ";
    }

    // line 36
    public function block_content($context, array $blocks = array())
    {
        // line 37
        echo "    ";
    }

    // line 76
    public function block_javascripts($context, array $blocks = array())
    {
        // line 77
        echo "      ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "f93eecd_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_f93eecd_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/compiled/compiled_part_1_ajquery-2.0.3.min_1.js");
            // line 78
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
      ";
            // asset "f93eecd_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_f93eecd_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/compiled/compiled_part_1_bootstrap.min_2.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
      ";
            // asset "f93eecd_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_f93eecd_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/compiled/compiled_part_1_menu_3.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
      ";
        } else {
            // asset "f93eecd"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_f93eecd") : $this->env->getExtension('assets')->getAssetUrl("_controller/compiled/compiled.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
      ";
        }
        unset($context["asset_url"]);
        // line 80
        echo "    ";
    }

    public function getTemplateName()
    {
        return "ClsSiteBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  260 => 80,  234 => 78,  229 => 77,  226 => 76,  222 => 37,  219 => 36,  215 => 34,  212 => 33,  208 => 13,  152 => 11,  147 => 7,  144 => 6,  138 => 4,  133 => 81,  131 => 76,  113 => 61,  101 => 52,  85 => 38,  83 => 36,  80 => 35,  78 => 33,  69 => 27,  65 => 26,  61 => 25,  57 => 24,  53 => 23,  46 => 19,  36 => 14,  34 => 6,  31 => 5,  24 => 1,  54 => 18,  42 => 18,  39 => 7,  32 => 4,  29 => 4,);
    }
}
