<?php

/* OpmUtilisateurBundle:Profile:edit_content.html.twig */
class __TwigTemplate_f833833f0b0b2d10ac3ae011650dd78e extends Twig_Template
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
        // line 1
        echo $this->env->getExtension('form')->setTheme($this->getContext($context, "form"), array($this->getContext($context, "theme"), ));
        // line 2
        echo "
<form action=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_profile_edit"), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
        echo " method=\"POST\" class=\"fos_user_profile_edit\">
    ";
        // line 4
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "form"));
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "OpmUtilisateurBundle:Profile:edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 14,  61 => 15,  21 => 3,  18 => 1,  172 => 67,  154 => 63,  149 => 62,  68 => 39,  36 => 4,  119 => 41,  85 => 43,  76 => 31,  65 => 16,  209 => 84,  205 => 82,  196 => 79,  192 => 78,  189 => 77,  178 => 71,  176 => 70,  165 => 63,  161 => 64,  152 => 58,  148 => 57,  145 => 56,  141 => 55,  134 => 53,  132 => 49,  127 => 46,  123 => 44,  109 => 39,  93 => 32,  90 => 32,  54 => 14,  133 => 44,  124 => 41,  111 => 40,  80 => 25,  60 => 15,  52 => 12,  97 => 34,  95 => 45,  88 => 29,  78 => 35,  71 => 36,  25 => 4,  72 => 20,  64 => 38,  53 => 13,  34 => 6,  92 => 44,  86 => 41,  79 => 42,  19 => 2,  42 => 7,  40 => 7,  29 => 4,  26 => 3,  224 => 96,  215 => 90,  211 => 88,  204 => 84,  200 => 83,  195 => 80,  193 => 79,  190 => 78,  188 => 77,  185 => 76,  179 => 72,  177 => 71,  171 => 67,  162 => 63,  158 => 61,  156 => 60,  153 => 59,  146 => 55,  142 => 56,  137 => 51,  126 => 46,  120 => 39,  117 => 49,  103 => 47,  74 => 21,  47 => 9,  32 => 5,  24 => 3,  22 => 3,  23 => 3,  17 => 1,  69 => 20,  63 => 17,  58 => 9,  49 => 11,  43 => 15,  37 => 8,  20 => 3,  139 => 26,  131 => 48,  128 => 43,  125 => 42,  121 => 40,  115 => 39,  107 => 48,  99 => 46,  96 => 29,  91 => 33,  82 => 42,  77 => 25,  75 => 37,  57 => 15,  50 => 13,  46 => 9,  44 => 11,  39 => 9,  33 => 6,  30 => 6,  27 => 2,  135 => 50,  129 => 47,  122 => 46,  116 => 42,  113 => 38,  108 => 39,  104 => 33,  102 => 37,  94 => 33,  89 => 20,  87 => 29,  84 => 39,  81 => 24,  73 => 41,  70 => 20,  67 => 27,  62 => 24,  59 => 16,  55 => 12,  51 => 11,  48 => 12,  41 => 7,  38 => 5,  35 => 7,  31 => 5,  28 => 4,);
    }
}
