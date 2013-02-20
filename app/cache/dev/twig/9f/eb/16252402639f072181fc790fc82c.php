<?php

/* AcmeDemoBundle:Secured:hello.html.twig */
class __TwigTemplate_9feb16252402639f072181fc790fc82c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle:Secured:layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle:Secured:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        $context["code"] = $this->env->getExtension('demo')->getCode($this);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, ("Hello " . $this->getContext($context, "name")), "html", null, true);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <h1>Hello ";
        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
        echo "!</h1>

    <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_demo_secured_hello_admin", array("name" => $this->getContext($context, "name"))), "html", null, true);
        echo "\">Hello resource secured for <strong>admin</strong> only.</a>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Secured:hello.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 40,  114 => 30,  56 => 14,  61 => 23,  21 => 1,  18 => 1,  172 => 67,  154 => 63,  149 => 62,  68 => 17,  36 => 6,  119 => 41,  85 => 43,  76 => 31,  65 => 16,  209 => 84,  205 => 82,  196 => 79,  192 => 78,  189 => 77,  178 => 71,  176 => 70,  165 => 63,  161 => 64,  152 => 58,  148 => 57,  145 => 56,  141 => 55,  134 => 53,  132 => 49,  127 => 46,  123 => 30,  109 => 39,  93 => 32,  90 => 45,  54 => 14,  133 => 39,  124 => 41,  111 => 29,  80 => 25,  60 => 15,  52 => 12,  97 => 34,  95 => 47,  88 => 29,  78 => 35,  71 => 36,  25 => 4,  72 => 20,  64 => 24,  53 => 14,  34 => 5,  92 => 44,  86 => 41,  79 => 39,  19 => 2,  42 => 7,  40 => 7,  29 => 3,  26 => 3,  224 => 96,  215 => 90,  211 => 88,  204 => 84,  200 => 83,  195 => 80,  193 => 79,  190 => 78,  188 => 77,  185 => 76,  179 => 72,  177 => 71,  171 => 67,  162 => 63,  158 => 61,  156 => 60,  153 => 59,  146 => 55,  142 => 56,  137 => 51,  126 => 31,  120 => 39,  117 => 49,  103 => 47,  74 => 21,  47 => 10,  32 => 5,  24 => 11,  22 => 6,  23 => 3,  17 => 1,  69 => 20,  63 => 17,  58 => 9,  49 => 13,  43 => 8,  37 => 6,  20 => 1,  139 => 26,  131 => 48,  128 => 43,  125 => 42,  121 => 40,  115 => 39,  107 => 48,  99 => 46,  96 => 29,  91 => 33,  82 => 42,  77 => 25,  75 => 37,  57 => 13,  50 => 10,  46 => 9,  44 => 8,  39 => 10,  33 => 5,  30 => 6,  27 => 5,  135 => 50,  129 => 47,  122 => 46,  116 => 33,  113 => 38,  108 => 28,  104 => 33,  102 => 6,  94 => 33,  89 => 20,  87 => 44,  84 => 39,  81 => 41,  73 => 28,  70 => 27,  67 => 27,  62 => 24,  59 => 22,  55 => 12,  51 => 11,  48 => 8,  41 => 7,  38 => 6,  35 => 5,  31 => 6,  28 => 3,);
    }
}
