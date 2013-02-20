<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_918cd4679637266a6e3f9f7496aadd07 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FOSUserBundle::layout.html.twig");

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 4
        $this->env->loadTemplate("FOSUserBundle:Group:edit_content.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 2,  18 => 1,  172 => 67,  154 => 63,  149 => 62,  68 => 39,  36 => 6,  119 => 41,  85 => 43,  76 => 31,  65 => 26,  209 => 84,  205 => 82,  196 => 79,  192 => 78,  189 => 77,  178 => 71,  176 => 70,  165 => 63,  161 => 64,  152 => 58,  148 => 57,  145 => 56,  141 => 55,  134 => 53,  132 => 49,  127 => 46,  123 => 44,  109 => 39,  93 => 10,  90 => 32,  54 => 14,  133 => 44,  124 => 41,  111 => 40,  80 => 39,  60 => 16,  52 => 29,  97 => 34,  95 => 45,  88 => 29,  78 => 35,  71 => 36,  25 => 4,  72 => 16,  64 => 38,  53 => 13,  34 => 7,  92 => 44,  86 => 41,  79 => 42,  19 => 2,  42 => 9,  40 => 7,  29 => 4,  26 => 3,  224 => 96,  215 => 90,  211 => 88,  204 => 84,  200 => 83,  195 => 80,  193 => 79,  190 => 78,  188 => 77,  185 => 76,  179 => 72,  177 => 71,  171 => 67,  162 => 63,  158 => 61,  156 => 60,  153 => 59,  146 => 55,  142 => 56,  137 => 51,  126 => 46,  120 => 39,  117 => 49,  103 => 47,  74 => 21,  47 => 19,  32 => 11,  24 => 3,  22 => 3,  23 => 3,  17 => 2,  69 => 20,  63 => 17,  58 => 9,  49 => 11,  43 => 15,  37 => 8,  20 => 1,  139 => 26,  131 => 48,  128 => 43,  125 => 42,  121 => 40,  115 => 39,  107 => 48,  99 => 46,  96 => 29,  91 => 33,  82 => 42,  77 => 25,  75 => 37,  57 => 15,  50 => 13,  46 => 26,  44 => 11,  39 => 9,  33 => 16,  30 => 6,  27 => 3,  135 => 50,  129 => 47,  122 => 46,  116 => 42,  113 => 38,  108 => 39,  104 => 33,  102 => 37,  94 => 33,  89 => 20,  87 => 43,  84 => 39,  81 => 24,  73 => 41,  70 => 20,  67 => 27,  62 => 24,  59 => 16,  55 => 14,  51 => 19,  48 => 12,  41 => 9,  38 => 8,  35 => 7,  31 => 4,  28 => 3,);
    }
}
