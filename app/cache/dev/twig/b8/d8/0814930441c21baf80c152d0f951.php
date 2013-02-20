<?php

/* FOSUserBundle::form.html.twig */
class __TwigTemplate_b8d80814930441c21baf80c152d0f951 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field_label' => array($this, 'block_field_label'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
";
        // line 2
        $this->displayBlock('field_label', $context, $blocks);
    }

    public function block_field_label($context, array $blocks = array())
    {
        // line 3
        ob_start();
        // line 4
        echo "    <label for=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getContext($context, "id"), array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "FOSUserBundle::form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  21 => 2,  18 => 1,  73 => 19,  68 => 17,  60 => 15,  53 => 14,  49 => 13,  41 => 11,  34 => 10,  27 => 3,  19 => 2,  17 => 1,  29 => 4,  26 => 3,);
    }
}
