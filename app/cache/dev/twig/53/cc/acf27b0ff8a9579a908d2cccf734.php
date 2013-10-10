<?php

/* SonataAdminBundle::standard_layout.html.twig */
class __TwigTemplate_53ccacf27b0ff8a9579a908d2cccf734 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'html_attributes' => array($this, 'block_html_attributes'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'logo' => array($this, 'block_logo'),
            'sonata_nav_menu' => array($this, 'block_sonata_nav_menu'),
            'top_bar_before_nav' => array($this, 'block_top_bar_before_nav'),
            'sonata_top_bar_nav' => array($this, 'block_sonata_top_bar_nav'),
            'top_bar_after_nav' => array($this, 'block_top_bar_after_nav'),
            'notice' => array($this, 'block_notice'),
            'sonata_admin_content' => array($this, 'block_sonata_admin_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        $context["_preview"] = $this->renderBlock("preview", $context, $blocks);
        // line 12
        $context["_form"] = $this->renderBlock("form", $context, $blocks);
        // line 13
        $context["_show"] = $this->renderBlock("show", $context, $blocks);
        // line 14
        $context["_list_table"] = $this->renderBlock("list_table", $context, $blocks);
        // line 15
        $context["_list_filters"] = $this->renderBlock("list_filters", $context, $blocks);
        // line 16
        $context["_side_menu"] = $this->renderBlock("side_menu", $context, $blocks);
        // line 17
        $context["_content"] = $this->renderBlock("content", $context, $blocks);
        // line 18
        $context["_title"] = $this->renderBlock("title", $context, $blocks);
        // line 19
        $context["_breadcrumb"] = $this->renderBlock("breadcrumb", $context, $blocks);
        // line 20
        $context["_actions"] = $this->renderBlock("actions", $context, $blocks);
        // line 21
        echo "<!DOCTYPE html>
<html ";
        // line 22
        $this->displayBlock('html_attributes', $context, $blocks);
        echo ">
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />

        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

        ";
        // line 28
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 39
        echo "
        ";
        // line 40
        $this->displayBlock('javascripts', $context, $blocks);
        // line 59
        echo "
        <title>
            ";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Admin", array(), "SonataAdminBundle"), "html", null, true);
        echo "

            ";
        // line 63
        if ((!twig_test_empty((isset($context["_title"]) ? $context["_title"] : $this->getContext($context, "_title"))))) {
            // line 64
            echo "                ";
            echo (isset($context["_title"]) ? $context["_title"] : $this->getContext($context, "_title"));
            echo "
            ";
        } else {
            // line 66
            echo "                ";
            if (array_key_exists("action", $context)) {
                // line 67
                echo "                    -
                    ";
                // line 68
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "breadcrumbs", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"));
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
                foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                    // line 69
                    echo "                        ";
                    if ((!$this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "first"))) {
                        // line 70
                        echo "                            &gt;
                        ";
                    }
                    // line 72
                    echo "                        ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "label"), "html", null, true);
                    echo "
                    ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 74
                echo "                ";
            }
            // line 75
            echo "            ";
        }
        // line 76
        echo "        </title>
    </head>
    <body class=\"sonata-bc ";
        // line 78
        if (twig_test_empty((isset($context["_side_menu"]) ? $context["_side_menu"] : $this->getContext($context, "_side_menu")))) {
            echo "sonata-ba-no-side-menu";
        }
        echo "\">
        ";
        // line 80
        echo "
        <div class=\"navbar navbar-fixed-top\">
            <div class=\"navbar-inner\">
                <div class=\"container-fluid\">
                    <a class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </a>

                    ";
        // line 90
        if (array_key_exists("admin_pool", $context)) {
            // line 91
            echo "                        <div class=\"navbar-text pull-right\">";
            $template = $this->env->resolveTemplate($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getTemplate", array(0 => "user_block"), "method"));
            $template->display($context);
            echo "</div>

                        ";
            // line 93
            $this->displayBlock('logo', $context, $blocks);
            // line 99
            echo "
                        ";
            // line 100
            $this->displayBlock('sonata_nav_menu', $context, $blocks);
            // line 131
            echo "                    ";
        }
        // line 132
        echo "                </div>
            </div>
        </div>

        <div class=\"container-fluid\">
            ";
        // line 137
        $this->displayBlock('notice', $context, $blocks);
        // line 147
        echo "
            <div class=\"row-fluid\">
                ";
        // line 149
        if (((!twig_test_empty((isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : $this->getContext($context, "_breadcrumb")))) || array_key_exists("action", $context))) {
            // line 150
            echo "                    <div class=\"span6\">
                        <ul class=\"breadcrumb\">
                            ";
            // line 152
            if (twig_test_empty((isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : $this->getContext($context, "_breadcrumb")))) {
                // line 153
                echo "                                ";
                if (array_key_exists("action", $context)) {
                    // line 154
                    echo "                                    ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "breadcrumbs", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                        // line 155
                        echo "                                        ";
                        if ((!$this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "last"))) {
                            // line 156
                            echo "                                            <li>
                                                ";
                            // line 157
                            if ((!twig_test_empty($this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "uri")))) {
                                // line 158
                                echo "                                                    <a href=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "uri"), "html", null, true);
                                echo "\">";
                                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "label"), "html", null, true);
                                echo "</a>
                                                ";
                            } else {
                                // line 160
                                echo "                                                    ";
                                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "label"), "html", null, true);
                                echo "
                                                ";
                            }
                            // line 162
                            echo "                                                <span class=\"divider\">/</span>
                                            </li>
                                        ";
                        } else {
                            // line 165
                            echo "                                            <li class=\"active\">";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "label"), "html", null, true);
                            echo "</li>
                                        ";
                        }
                        // line 167
                        echo "                                    ";
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 168
                    echo "                                ";
                }
                // line 169
                echo "                            ";
            } else {
                // line 170
                echo "                                ";
                echo (isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : $this->getContext($context, "_breadcrumb"));
                echo "
                            ";
            }
            // line 172
            echo "                        </ul>
                    </div>
                ";
        }
        // line 175
        echo "
                ";
        // line 176
        if ((!twig_test_empty((isset($context["_actions"]) ? $context["_actions"] : $this->getContext($context, "_actions"))))) {
            // line 177
            echo "                    <div class=\"span4 offset2\">
                        ";
            // line 178
            echo (isset($context["_actions"]) ? $context["_actions"] : $this->getContext($context, "_actions"));
            echo "
                    </div>
                ";
        }
        // line 181
        echo "            </div>

            <div class=\"row-fluid\">
                ";
        // line 184
        if ((!twig_test_empty((isset($context["_side_menu"]) ? $context["_side_menu"] : $this->getContext($context, "_side_menu"))))) {
            // line 185
            echo "                    <div class=\"sidebar span2\">
                        <div class=\"well sonata-ba-side-menu\" style=\"padding: 8px 0;\">";
            // line 186
            echo (isset($context["_side_menu"]) ? $context["_side_menu"] : $this->getContext($context, "_side_menu"));
            echo "</div>
                    </div>
                ";
        }
        // line 189
        echo "
                <div class=\"content ";
        // line 190
        echo (((!twig_test_empty((isset($context["_side_menu"]) ? $context["_side_menu"] : $this->getContext($context, "_side_menu"))))) ? (" span10") : ("span12"));
        echo "\">
                    ";
        // line 191
        $this->displayBlock('sonata_admin_content', $context, $blocks);
        // line 221
        echo "                </div>
            </div>

            ";
        // line 224
        $this->displayBlock('footer', $context, $blocks);
        // line 231
        echo "        </div>
    </body>
</html>
";
    }

    // line 22
    public function block_html_attributes($context, array $blocks = array())
    {
        echo "class=\"no-js\"";
    }

    // line 28
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 29
        echo "            <!-- jQuery code -->
            <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonatajquery/themes/flick/jquery-ui-1.8.16.custom.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />

            <link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\"  />
            <link rel=\"stylesheet\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/bootstrap/css/bootstrap-responsive.min.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />

            <!-- base application asset -->
            <link rel=\"stylesheet\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/css/layout.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
            <link rel=\"stylesheet\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/css/colors.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
        ";
    }

    // line 40
    public function block_javascripts($context, array $blocks = array())
    {
        // line 41
        echo "            <script type=\"text/javascript\">
                window.SONATA_CONFIG = {
                    CONFIRM_EXIT: ";
        // line 43
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "confirm_exit"), "method"))) {
            echo "true";
        } else {
            echo "false";
        }
        // line 44
        echo "                };
                window.SONATA_TRANSLATIONS = {
                    CONFIRM_EXIT:  '";
        // line 46
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("confirm_exit", array(), "SonataAdminBundle"), "js"), "html", null, true);
        echo "'
               };
            </script>
            <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonatajquery/jquery-1.8.3.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonatajquery/jquery-ui-1.8.23.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonatajquery/jquery-ui-i18n.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

            <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

            <script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/jquery/jquery.form.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
            ";
        // line 56
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "confirm_exit"), "method"))) {
            echo "<script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/jquery/jquery.confirmExit.js"), "html", null, true);
            echo "\" type=\"text/javascript\"></script>";
        }
        // line 57
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/base.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        ";
    }

    // line 93
    public function block_logo($context, array $blocks = array())
    {
        // line 94
        echo "                            <a href=\"";
        echo $this->env->getExtension('routing')->getUrl("sonata_admin_dashboard");
        echo "\" class=\"brand\">
                                <img src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "titlelogo")), "html", null, true);
        echo "\"  alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "title"), "html", null, true);
        echo "\" />
                                ";
        // line 96
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "title"), "html", null, true);
        echo "
                            </a>
                        ";
    }

    // line 100
    public function block_sonata_nav_menu($context, array $blocks = array())
    {
        // line 101
        echo "                            <div class=\"nav-collapse\">
                                <ul class=\"nav\">
                                    ";
        // line 103
        $this->displayBlock('top_bar_before_nav', $context, $blocks);
        // line 104
        echo "                                    ";
        $this->displayBlock('sonata_top_bar_nav', $context, $blocks);
        // line 127
        echo "                                    ";
        $this->displayBlock('top_bar_after_nav', $context, $blocks);
        // line 128
        echo "                                </ul>
                            </div>
                        ";
    }

    // line 103
    public function block_top_bar_before_nav($context, array $blocks = array())
    {
        echo " ";
    }

    // line 104
    public function block_sonata_top_bar_nav($context, array $blocks = array())
    {
        // line 105
        echo "                                        ";
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security"), "token") && $this->env->getExtension('security')->isGranted("ROLE_SONATA_ADMIN"))) {
            // line 106
            echo "                                            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "dashboardgroups"));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 107
                echo "                                                ";
                $context["display"] = (twig_test_empty($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "roles")) || $this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN"));
                // line 108
                echo "                                                ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "roles"));
                foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                    if ((!(isset($context["display"]) ? $context["display"] : $this->getContext($context, "display")))) {
                        // line 109
                        echo "                                                    ";
                        $context["display"] = $this->env->getExtension('security')->isGranted((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")));
                        // line 110
                        echo "                                                ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 111
                echo "
                                                ";
                // line 112
                if ((isset($context["display"]) ? $context["display"] : $this->getContext($context, "display"))) {
                    // line 113
                    echo "                                                <li class=\"dropdown\">
                                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
                    // line 114
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "label"), array(), $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "label_catalogue")), "html", null, true);
                    echo " <span class=\"caret\"></span></a>
                                                    <ul class=\"dropdown-menu\">
                                                        ";
                    // line 116
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "items"));
                    foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                        // line 117
                        echo "                                                            ";
                        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "list"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "LIST"), "method"))) {
                            // line 118
                            echo "                                                                <li><a href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list"), "method"), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "label"), array(), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationdomain")), "html", null, true);
                            echo "</a></li>
                                                            ";
                        }
                        // line 120
                        echo "                                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 121
                    echo "                                                    </ul>
                                                </li>
                                                ";
                }
                // line 124
                echo "                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 125
            echo "                                        ";
        }
        // line 126
        echo "                                    ";
    }

    // line 127
    public function block_top_bar_after_nav($context, array $blocks = array())
    {
        echo " ";
    }

    // line 137
    public function block_notice($context, array $blocks = array())
    {
        // line 138
        echo "                ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(array(0 => "success", 1 => "error", 2 => "info", 3 => "warning"));
        foreach ($context['_seq'] as $context["_key"] => $context["notice_level"]) {
            // line 139
            echo "                    ";
            $context["session_var"] = ("sonata_flash_" . (isset($context["notice_level"]) ? $context["notice_level"] : $this->getContext($context, "notice_level")));
            // line 140
            echo "                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => (isset($context["session_var"]) ? $context["session_var"] : $this->getContext($context, "session_var"))), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["flash"]) {
                // line 141
                echo "                        <div class=\"alert ";
                echo twig_escape_filter($this->env, ("alert-" . (isset($context["notice_level"]) ? $context["notice_level"] : $this->getContext($context, "notice_level"))), "html", null, true);
                echo "\">
                            ";
                // line 142
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["flash"]) ? $context["flash"] : $this->getContext($context, "flash")), array(), "SonataAdminBundle"), "html", null, true);
                echo "
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 145
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notice_level'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 146
        echo "            ";
    }

    // line 191
    public function block_sonata_admin_content($context, array $blocks = array())
    {
        // line 192
        echo "
                        ";
        // line 193
        if ((!twig_test_empty((isset($context["_preview"]) ? $context["_preview"] : $this->getContext($context, "_preview"))))) {
            // line 194
            echo "                            <div class=\"sonata-ba-preview\">";
            echo (isset($context["_preview"]) ? $context["_preview"] : $this->getContext($context, "_preview"));
            echo "</div>
                        ";
        }
        // line 196
        echo "
                        ";
        // line 197
        if ((!twig_test_empty((isset($context["_content"]) ? $context["_content"] : $this->getContext($context, "_content"))))) {
            // line 198
            echo "                            <div class=\"sonata-ba-content\">";
            echo (isset($context["_content"]) ? $context["_content"] : $this->getContext($context, "_content"));
            echo "</div>
                        ";
        }
        // line 200
        echo "
                        ";
        // line 201
        if ((!twig_test_empty((isset($context["_show"]) ? $context["_show"] : $this->getContext($context, "_show"))))) {
            // line 202
            echo "                            <div class=\"sonata-ba-show\">";
            echo (isset($context["_show"]) ? $context["_show"] : $this->getContext($context, "_show"));
            echo "</div>
                        ";
        }
        // line 204
        echo "
                        ";
        // line 205
        if ((!twig_test_empty((isset($context["_form"]) ? $context["_form"] : $this->getContext($context, "_form"))))) {
            // line 206
            echo "                            <div class=\"sonata-ba-form\">";
            echo (isset($context["_form"]) ? $context["_form"] : $this->getContext($context, "_form"));
            echo "</div>
                        ";
        }
        // line 208
        echo "
                        ";
        // line 209
        if (((!twig_test_empty((isset($context["_list_table"]) ? $context["_list_table"] : $this->getContext($context, "_list_table")))) || (!twig_test_empty((isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters")))))) {
            // line 210
            echo "                            <div class=\"row-fluid\">
                                <div class=\"sonata-ba-list span10\">
                                    ";
            // line 212
            echo (isset($context["_list_table"]) ? $context["_list_table"] : $this->getContext($context, "_list_table"));
            echo "
                                </div>
                                <div class=\"sonata-ba-filter span2\">
                                    ";
            // line 215
            echo (isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters"));
            echo "
                                </div>
                            </div>
                        ";
        }
        // line 219
        echo "
                    ";
    }

    // line 224
    public function block_footer($context, array $blocks = array())
    {
        // line 225
        echo "                <div class=\"row-fluid\">
                    <div class=\"span2 offset10 pull-right\">
                        <span class=\"label\"><a href=\"http://sonata-project.org\" rel=\"noreferrer\" style=\"text-decoration: none; color: black\">Sonata Project</a></span>
                    </div>
                </div>
            ";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::standard_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  687 => 225,  684 => 224,  679 => 219,  672 => 215,  666 => 212,  662 => 210,  660 => 209,  657 => 208,  651 => 206,  649 => 205,  646 => 204,  640 => 202,  638 => 201,  635 => 200,  629 => 198,  627 => 197,  624 => 196,  618 => 194,  616 => 193,  613 => 192,  610 => 191,  606 => 146,  600 => 145,  591 => 142,  586 => 141,  581 => 140,  578 => 139,  573 => 138,  570 => 137,  564 => 127,  560 => 126,  557 => 125,  551 => 124,  546 => 121,  540 => 120,  532 => 118,  529 => 117,  525 => 116,  520 => 114,  517 => 113,  515 => 112,  512 => 111,  505 => 110,  502 => 109,  496 => 108,  493 => 107,  488 => 106,  485 => 105,  482 => 104,  476 => 103,  470 => 128,  467 => 127,  464 => 104,  462 => 103,  458 => 101,  455 => 100,  448 => 96,  442 => 95,  437 => 94,  434 => 93,  427 => 57,  421 => 56,  417 => 55,  412 => 53,  407 => 51,  403 => 50,  399 => 49,  393 => 46,  389 => 44,  383 => 43,  379 => 41,  376 => 40,  370 => 37,  366 => 36,  360 => 33,  356 => 32,  351 => 30,  348 => 29,  345 => 28,  339 => 22,  332 => 231,  330 => 224,  325 => 221,  323 => 191,  319 => 190,  316 => 189,  310 => 186,  307 => 185,  305 => 184,  300 => 181,  294 => 178,  291 => 177,  289 => 176,  286 => 175,  281 => 172,  275 => 170,  272 => 169,  269 => 168,  255 => 167,  249 => 165,  244 => 162,  238 => 160,  230 => 158,  228 => 157,  225 => 156,  222 => 155,  204 => 154,  201 => 153,  199 => 152,  195 => 150,  193 => 149,  189 => 147,  187 => 137,  180 => 132,  177 => 131,  175 => 100,  172 => 99,  170 => 93,  163 => 91,  161 => 90,  149 => 80,  143 => 78,  139 => 76,  136 => 75,  133 => 74,  116 => 72,  112 => 70,  109 => 69,  92 => 68,  86 => 66,  80 => 64,  78 => 63,  67 => 40,  64 => 39,  62 => 28,  53 => 22,  44 => 18,  40 => 16,  36 => 14,  34 => 13,  30 => 11,  77 => 18,  73 => 61,  69 => 59,  65 => 15,  59 => 13,  56 => 12,  50 => 21,  46 => 19,  42 => 17,  38 => 15,  89 => 67,  81 => 19,  68 => 22,  60 => 17,  54 => 14,  48 => 20,  45 => 10,  39 => 8,  37 => 7,  32 => 12,  29 => 3,  26 => 3,);
    }
}
