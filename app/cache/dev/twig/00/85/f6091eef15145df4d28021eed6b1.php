<?php

/* CoreSphereConsoleBundle:Console:result.json.twig */
class __TwigTemplate_0085f6091eef15145df4d28021eed6b1 extends Twig_Template
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
        echo "{
    \"command\" : ";
        // line 3
        echo twig_jsonencode_filter(twig_escape_filter($this->env, $this->getContext($context, "input")));
        echo ",
    \"output\" : ";
        // line 4
        echo twig_jsonencode_filter($this->getContext($context, "output"));
        echo ",
    \"environment\": ";
        // line 5
        echo twig_jsonencode_filter(twig_escape_filter($this->env, $this->getContext($context, "environment")));
        echo "
}
";
    }

    public function getTemplateName()
    {
        return "CoreSphereConsoleBundle:Console:result.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 5,  24 => 4,  20 => 3,  17 => 2,);
    }
}
