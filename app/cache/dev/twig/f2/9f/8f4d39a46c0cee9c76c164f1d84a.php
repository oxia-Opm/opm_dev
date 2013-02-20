<?php

/* OpmTestBundle:Test:index.html.twig */
class __TwigTemplate_f29f8f4d39a46c0cee9c76c164f1d84a extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.list.title", array(), "FOSUserBundle"), "html", null, true);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "  <script>
      var gVarSort='';///global variable de tri 
      var gSensSort=true;// global sens de tri \"true=sens desc\"
    \$(document).ready(function()
    {

      setInterval(\"refresh()\",120000);
    });
  function refresh(){
    \$(\"#divListUser\").css({ opacity: 0.5 });
    \$(\".loading\").show();
    \$.ajax({
      type: \"POST\",
      url: \"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("opm_test_ajax_list_user"), "html", null, true);
        echo "\",
      data:\"page=1\",
      cache: false,
      success: function(data){
        \$('#divListUser').html(data);
        \$(\".loading\").hide();
        \$(\"#divListUser\").css({ opacity: 1 });
      }
    });
  }
  </script>
  <style>
    .img_arrow_list
    {
      display:none;
    }
</style>
<h3 style=\"color:red\" align=\"center\">";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.list.title", array(), "FOSUserBundle"), "html", null, true);
        echo "</h3>
<span style=\"color:green\">";
        // line 37
        echo twig_escape_filter($this->env, $this->getContext($context, "message"), "html", null, true);
        echo "</span>
<div id=\"divListUser\">
     ";
        // line 39
        $this->env->loadTemplate("OpmTestBundle:Test:_liste.html.twig")->display(array_merge($context, array("users" => $this->getContext($context, "users"), "page" => $this->getContext($context, "page"), "nb_pages" => $this->getContext($context, "nb_pages"))));
        // line 42
        echo "</div>
<a href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("test_add_user"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.list.add_user", array(), "FOSUserBundle"), "html", null, true);
        echo "</a>

";
    }

    public function getTemplateName()
    {
        return "OpmTestBundle:Test:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 43,  82 => 42,  80 => 39,  75 => 37,  71 => 36,  51 => 19,  36 => 6,  33 => 5,  27 => 4,);
    }
}
