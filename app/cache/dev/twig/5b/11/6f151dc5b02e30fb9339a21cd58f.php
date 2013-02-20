<?php

/* OpmUtilisateurBundle::connexion.html.twig */
class __TwigTemplate_5b116f151dc5b02e30fb9339a21cd58f extends Twig_Template
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
        // line 2
        echo "<div>
  <a href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("opm_traduction", array("langue" => "fr")), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/OpmTest/images/fr.png"), "html", null, true);
        echo "\"></a>
   <a href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("opm_traduction", array("langue" => "en")), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/OpmTest/images/en.png"), "html", null, true);
        echo "\"></a>
";
        // line 5
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 6
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_profile_show"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "username")), "html", null, true);
            echo "</a> |
    <a href=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_logout"), "html", null, true);
            echo "\">
       
       ";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
    </a>
    ";
        }
        // line 12
        echo "</div>

";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "getFlashes", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["flash"]) {
            // line 15
            echo "<div class=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "flash"), "html", null, true);
            echo "\">
    ";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "key"), array(), "FOSUserBundle"), "html", null, true);
            echo "
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['flash'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
    }

    public function getTemplateName()
    {
        return "OpmUtilisateurBundle::connexion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 15,  56 => 14,  52 => 12,  41 => 7,  32 => 5,  17 => 2,  111 => 40,  108 => 39,  99 => 31,  86 => 41,  84 => 39,  78 => 35,  76 => 31,  71 => 29,  67 => 27,  46 => 9,  34 => 6,  30 => 6,  26 => 4,  20 => 3,  28 => 4,  93 => 10,  87 => 29,  80 => 25,  72 => 20,  65 => 16,  61 => 15,  55 => 12,  51 => 11,  47 => 9,  42 => 9,  38 => 8,  36 => 7,  33 => 6,  27 => 2,);
    }
}
