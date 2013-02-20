<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_f63d875688b927d47c60594a520e9cb9 extends Twig_Template
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
        echo "</br>
<style>
#form_login label {
  font-weight: bold;
  }
</style>
<form action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_registration_register"), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
        echo " method=\"POST\" class=\"fos_user_registration_register\" id=\"form_login\">
 <br/>
   <div><span>";
        // line 10
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "username"));
        echo "</span> ";
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "form"), "username"));
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "username"));
        echo "</div>
   <div><span>";
        // line 11
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "email"));
        echo "</span> ";
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "form"), "email"));
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "email"));
        echo "</div>
   
";
        // line 13
        echo $this->env->getExtension('form')->renderRest($this->getContext($context, "form"));
        echo "
   <!--<div><span>";
        // line 14
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "plainPassword"), "first"));
        echo "</span> ";
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "plainPassword"), "first"));
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "plainPassword"), "first"));
        echo "</div>
    <div><span>";
        // line 15
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "plainPassword"), "second"));
        echo "</span> ";
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "plainPassword"), "second"));
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getAttribute($this->getContext($context, "form"), "plainPassword"), "second"));
        echo "</div>--->
   <div>
        <input type=\"submit\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" class=\"btn\"/>
    </div>
   <a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_logout"), "html", null, true);
        echo "\" style=\"margin-left:300px\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
        echo " </a>
           
</form>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 19,  68 => 17,  60 => 15,  53 => 14,  49 => 13,  41 => 11,  34 => 10,  27 => 8,  19 => 2,  17 => 1,  29 => 4,  26 => 3,);
    }
}
