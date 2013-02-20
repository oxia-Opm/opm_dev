<?php

/* CoreSphereConsoleBundle:Console:command_list.json.twig */
class __TwigTemplate_316aeca3cff837b816bba22b94310c09 extends Twig_Template
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
        echo twig_jsonencode_filter(twig_get_array_keys_filter($this->getContext($context, "commands")));
        echo "
";
    }

    public function getTemplateName()
    {
        return "CoreSphereConsoleBundle:Console:command_list.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  17 => 1,  67 => 11,  62 => 10,  57 => 6,  45 => 12,  42 => 11,  40 => 10,  33 => 7,  27 => 5,  21 => 1,  51 => 5,  48 => 15,  41 => 11,  37 => 9,  31 => 6,  28 => 3,  136 => 49,  130 => 45,  126 => 44,  122 => 43,  118 => 42,  114 => 41,  109 => 39,  105 => 38,  101 => 37,  97 => 35,  91 => 31,  87 => 30,  84 => 29,  65 => 15,  59 => 14,  52 => 11,  49 => 10,  43 => 7,  38 => 6,  35 => 5,  29 => 3,);
    }
}
