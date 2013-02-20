<?php

/* CoreSphereConsoleBundle:Console:layout.html.twig */
class __TwigTemplate_a93d6e6d0cb74e7f601167899b64faf3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_javascripts($context, array $blocks = array())
    {
        // line 4
        echo "  ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

  ";
        // line 9
        echo "  <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js\"></script>
  <script>
    window.jQuery || document.write(\"<script src=\\\"";
        // line 11
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coresphereconsole/js/jquery-1.8.2.min.js"), "js"), "html", null, true);
        echo "\\\"><\\/script>\");
  </script>
";
    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        // line 16
        echo "    ";
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "CoreSphereConsoleBundle:Console:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 16,  48 => 15,  41 => 11,  37 => 9,  31 => 4,  28 => 3,  136 => 49,  130 => 45,  126 => 44,  122 => 43,  118 => 42,  114 => 41,  109 => 39,  105 => 38,  101 => 37,  97 => 35,  91 => 31,  87 => 30,  84 => 29,  65 => 15,  59 => 14,  52 => 11,  49 => 10,  43 => 7,  38 => 6,  35 => 5,  29 => 3,);
    }
}
