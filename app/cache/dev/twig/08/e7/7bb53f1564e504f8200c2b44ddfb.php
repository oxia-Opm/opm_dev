<?php

/* OpmTestBundle:Test:mail.html.twig */
class __TwigTemplate_08e77bb53f1564e504f8200c2b44ddfb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("OpmTestBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OpmTestBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Liste des Utlilisateurs";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<div style=\"color:red\"> test mail</div>
<img src=\"http://www.opm.local.com/bundles/OpmTest/images/logo.gif\"/>
";
    }

    public function getTemplateName()
    {
        return "OpmTestBundle:Test:mail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 6,  119 => 41,  85 => 43,  76 => 31,  65 => 26,  209 => 84,  205 => 82,  196 => 79,  192 => 78,  189 => 77,  178 => 71,  176 => 70,  165 => 63,  161 => 61,  152 => 58,  148 => 57,  145 => 56,  141 => 55,  134 => 50,  132 => 49,  127 => 46,  123 => 44,  109 => 39,  93 => 10,  90 => 32,  54 => 14,  133 => 44,  124 => 41,  111 => 40,  80 => 39,  60 => 16,  52 => 13,  97 => 34,  95 => 21,  88 => 29,  78 => 35,  71 => 36,  25 => 4,  72 => 16,  64 => 15,  53 => 13,  34 => 7,  92 => 28,  86 => 41,  79 => 40,  19 => 2,  42 => 9,  40 => 7,  29 => 5,  26 => 5,  224 => 96,  215 => 90,  211 => 88,  204 => 84,  200 => 83,  195 => 80,  193 => 79,  190 => 78,  188 => 77,  185 => 76,  179 => 72,  177 => 71,  171 => 67,  162 => 63,  158 => 61,  156 => 60,  153 => 59,  146 => 55,  142 => 54,  137 => 51,  126 => 46,  120 => 39,  117 => 44,  103 => 36,  74 => 21,  47 => 19,  32 => 11,  24 => 3,  22 => 3,  23 => 3,  17 => 1,  69 => 20,  63 => 17,  58 => 9,  49 => 11,  43 => 15,  37 => 8,  20 => 1,  139 => 26,  131 => 48,  128 => 43,  125 => 42,  121 => 40,  115 => 39,  107 => 36,  99 => 31,  96 => 29,  91 => 33,  82 => 42,  77 => 25,  75 => 37,  57 => 15,  50 => 13,  46 => 10,  44 => 11,  39 => 9,  33 => 5,  30 => 6,  27 => 4,  135 => 50,  129 => 47,  122 => 46,  116 => 42,  113 => 38,  108 => 39,  104 => 33,  102 => 37,  94 => 33,  89 => 20,  87 => 32,  84 => 39,  81 => 24,  73 => 21,  70 => 20,  67 => 27,  62 => 24,  59 => 16,  55 => 14,  51 => 19,  48 => 12,  41 => 9,  38 => 8,  35 => 7,  31 => 4,  28 => 3,);
    }
}
