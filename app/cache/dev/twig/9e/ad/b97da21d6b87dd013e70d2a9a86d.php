<?php

/* SonataUserBundle:Admin/Core:user_block.html.twig */
class __TwigTemplate_9eadb97da21d6b87dd013e70d2a9a86d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'user_block' => array($this, 'block_user_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('user_block', $context, $blocks);
    }

    public function block_user_block($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user")) {
            // line 3
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "html", null, true);
            echo "

        ";
            // line 5
            if (($this->env->getExtension('security')->isGranted("ROLE_PREVIOUS_ADMIN") && $this->getAttribute((isset($context["sonata_user"]) ? $context["sonata_user"] : $this->getContext($context, "sonata_user")), "impersonating"))) {
                // line 6
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl($this->getAttribute($this->getAttribute((isset($context["sonata_user"]) ? $context["sonata_user"] : $this->getContext($context, "sonata_user")), "impersonating"), "route"), twig_array_merge($this->getAttribute($this->getAttribute((isset($context["sonata_user"]) ? $context["sonata_user"] : $this->getContext($context, "sonata_user")), "impersonating"), "parameters"), array("_switch_user" => "_exit"))), "html", null, true);
                echo "\">(exit)</a>
        ";
            }
            // line 8
            echo "
        - <a href=\"";
            // line 9
            echo $this->env->getExtension('routing')->getUrl("sonata_user_admin_security_logout");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user_block_logout", array(), "SonataUserBundle"), "html", null, true);
            echo "</a>
    ";
        }
    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Admin/Core:user_block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 8,  35 => 5,  20 => 1,  687 => 225,  684 => 224,  679 => 219,  672 => 215,  666 => 212,  662 => 210,  660 => 209,  657 => 208,  651 => 206,  649 => 205,  646 => 204,  640 => 202,  638 => 201,  635 => 200,  629 => 198,  627 => 197,  624 => 196,  618 => 194,  616 => 193,  613 => 192,  610 => 191,  606 => 146,  600 => 145,  591 => 142,  586 => 141,  581 => 140,  578 => 139,  573 => 138,  570 => 137,  564 => 127,  560 => 126,  557 => 125,  551 => 124,  546 => 121,  540 => 120,  532 => 118,  529 => 117,  525 => 116,  520 => 114,  517 => 113,  515 => 112,  512 => 111,  505 => 110,  502 => 109,  496 => 108,  493 => 107,  488 => 106,  485 => 105,  482 => 104,  476 => 103,  470 => 128,  467 => 127,  464 => 104,  462 => 103,  458 => 101,  455 => 100,  448 => 96,  442 => 95,  437 => 94,  434 => 93,  427 => 57,  421 => 56,  417 => 55,  412 => 53,  407 => 51,  403 => 50,  399 => 49,  393 => 46,  389 => 44,  383 => 43,  379 => 41,  376 => 40,  370 => 37,  366 => 36,  360 => 33,  356 => 32,  351 => 30,  348 => 29,  345 => 28,  339 => 22,  332 => 231,  330 => 224,  325 => 221,  323 => 191,  319 => 190,  316 => 189,  310 => 186,  307 => 185,  305 => 184,  300 => 181,  294 => 178,  291 => 177,  289 => 176,  286 => 175,  281 => 172,  275 => 170,  272 => 169,  269 => 168,  255 => 167,  249 => 165,  244 => 162,  238 => 160,  230 => 158,  228 => 157,  225 => 156,  222 => 155,  204 => 154,  201 => 153,  199 => 152,  195 => 150,  193 => 149,  189 => 147,  187 => 137,  180 => 132,  177 => 131,  175 => 100,  172 => 99,  170 => 93,  163 => 91,  161 => 90,  149 => 80,  143 => 78,  139 => 76,  136 => 75,  133 => 74,  116 => 72,  112 => 70,  109 => 69,  92 => 68,  86 => 66,  80 => 64,  78 => 63,  67 => 40,  64 => 39,  62 => 28,  53 => 22,  44 => 18,  40 => 16,  36 => 14,  34 => 13,  30 => 11,  77 => 18,  73 => 61,  69 => 59,  65 => 15,  59 => 13,  56 => 12,  50 => 21,  46 => 9,  42 => 17,  38 => 15,  89 => 67,  81 => 19,  68 => 22,  60 => 17,  54 => 14,  48 => 20,  45 => 10,  39 => 8,  37 => 6,  32 => 12,  29 => 3,  26 => 2,);
    }
}
