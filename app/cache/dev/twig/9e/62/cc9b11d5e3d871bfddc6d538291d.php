<?php

/* OpmTestBundle:Test:ajout.html.twig */
class __TwigTemplate_9e62cc9b11d5e3d871bfddc6d538291d extends Twig_Template
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Nouveau User";
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        echo " 
<h3 style=\"color:red\" align=\"center\">Nouveau User</h3>
  
</style>
<form action=\"\" method=\"POST\" id=\"user_form\">
        ";
        // line 9
        echo $this->env->getExtension('form')->renderErrors($this->getContext($context, "form"));
        echo "
    <table>
      <tr>
        <td> ";
        // line 12
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "nom"), ($this->env->getExtension('translator')->trans("user.list.name", array(), "FOSUserBundle") . ":"));
        echo "</td>
        <td class=\"td_form_user\"> ";
        // line 13
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "form"), "nom"));
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "nom"));
        echo "</td>
      </tr>
       <tr>
        <td> ";
        // line 16
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "nom"), ($this->env->getExtension('translator')->trans("user.list.first_name", array(), "FOSUserBundle") . ":"));
        echo "</td>
        <td class=\"td_form_user\"> ";
        // line 17
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "form"), "prenom"));
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "prenom"));
        echo "</td>
      </tr>
       <tr>
        <td> ";
        // line 20
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "age"));
        echo "</td>
        <td class=\"td_form_user\"> ";
        // line 21
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "form"), "age"));
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "age"));
        echo "</td>
      </tr>
      <tr>
        <td> ";
        // line 24
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "login"));
        echo "</td>
        <td class=\"td_form_user\"> ";
        // line 25
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "form"), "login"));
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "login"));
        echo "</td>
      </tr>
      <tr>
        <td> ";
        // line 28
        echo $this->env->getExtension('form')->renderLabel($this->getAttribute($this->getContext($context, "form"), "pwd"));
        echo "</td>
        <td class=\"td_form_user\"> ";
        // line 29
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "form"), "pwd"));
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "pwd"));
        echo "</td>
      </tr>
      <tr>
        <td>Grade:</td>
        <td class=\"td_form_user\"> ";
        // line 33
        echo $this->env->getExtension('form')->renderErrors($this->getAttribute($this->getContext($context, "form"), "Fonction"));
        echo $this->env->getExtension('form')->renderWidget($this->getAttribute($this->getContext($context, "form"), "Fonction"));
        echo "</td>
      </tr>
      
      </table>

        ";
        // line 38
        echo $this->env->getExtension('form')->renderRest($this->getContext($context, "form"));
        echo "
      <input type=\"submit\" value=\"Envoyer\" class=\"btn\" />
    </form>
    <a href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("opm_test_list_user"), "html", null, true);
        echo "\">List</a>
     <script>
\t\$(function() {
\t\t\$( \"#opm_testbundle_userstype_age\" ).datepicker({
\t\t\tdateFormat: \"dd-mm-yy\"
\t\t});
\t});
\t</script>
";
    }

    public function getTemplateName()
    {
        return "OpmTestBundle:Test:ajout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 41,  113 => 38,  104 => 33,  96 => 29,  92 => 28,  85 => 25,  81 => 24,  74 => 21,  70 => 20,  63 => 17,  59 => 16,  52 => 13,  48 => 12,  42 => 9,  33 => 4,  27 => 3,);
    }
}
