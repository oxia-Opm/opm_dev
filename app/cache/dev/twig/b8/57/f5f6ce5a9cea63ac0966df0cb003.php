<?php

/* OpmTestBundle:Test:_liste.html.twig */
class __TwigTemplate_b857f5f6ce5a9cea63ac0966df0cb003 extends Twig_Template
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
        echo "
<script>
  function ajaxPagination(p,varSort) 
  {
    if(varSort!='' )
    {
      gVarSort=varSort;
      gSensSort=!gSensSort;
    }
    var p=p;
    \$(\"#divListUser\").css({ opacity: 0.5 });
    \$(\".loading\").show();
      \$.ajax({
      type: \"POST\",
      url: \"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("opm_test_ajax_list_user"), "html", null, true);
        echo "\",
      data:\"page=\"+p+\"&varSort=\"+gVarSort+\"&sensSort=\"+gSensSort,
      cache: false,
      success: function(data){
        \$('#divListUser').html(data);
        \$(\".loading\").hide();
        \$(\"#divListUser\").css({ opacity: 1 });
        \$(\".img_arrow_list\").hide();
        if(gSensSort)
        {
          \$(\"#arrow_\"+varSort).attr(\"src\",\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/OpmTest/images/arrow_down.png"), "html", null, true);
        echo "\");
        }else
        {
          \$(\"#arrow_\"+varSort).attr(\"src\",\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/OpmTest/images/arrow_up.png"), "html", null, true);
        echo "\");
        }
        \$(\"#arrow_\"+varSort).show();
      }
    });
    
  }
</script>

<div align=\"right\" style=\"margin-right:400px\"><a href=\"javascript:void(0)\" onclick=\"refresh()\" >";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.list.refresh", array(), "FOSUserBundle"), "html", null, true);
        echo "</a></div>
<img src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/OpmTest/images/loading.gif"), "html", null, true);
        echo "\" style=\"display:none;widh:40px; index:2000; position: absolute\"  class=\"loading\" >
<table class=\"tab_list\">
      <tr><th><img class=\"img_arrow_list\"  id=\"arrow_nom\"><a href=\"javascript:void(0)\" onClick=\"ajaxPagination(1,'nom') \" style=\"color:#000\"> ";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.list.name", array(), "FOSUserBundle"), "html", null, true);
        echo "</a></th><th><img class=\"img_arrow_list\"  id=\"arrow_prenom\" src=\"\"><a href=\"javascript:void(0)\" onClick=\"ajaxPagination(1,'prenom') \" style=\"color:#000\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.list.first_name", array(), "FOSUserBundle"), "html", null, true);
        echo "</a></th>
        <th><img class=\"img_arrow_list\"  id=\"arrow_age\" src=\"\"><a href=\"javascript:void(0)\" onClick=\"ajaxPagination(1,'age')\" style=\"color:#000\" >";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.list.birth", array(), "FOSUserBundle"), "html", null, true);
        echo "</a></th><th>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.list.update", array(), "FOSUserBundle"), "html", null, true);
        echo "</th><th>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.list.delete", array(), "FOSUserBundle"), "html", null, true);
        echo "</th></tr>
    ";
        // line 43
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "users"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 44
            echo "      <tr>
      <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "nom"), "html", null, true);
            echo "</td>
      <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "prenom"), "html", null, true);
            echo "</td>
      <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "age"), "html", null, true);
            echo "</td>
      <td align=\"center\"><a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("test_edit_user", array("id" => $this->getAttribute($this->getContext($context, "user"), "id"))), "html", null, true);
            echo "\" ><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/OpmTest/images/edit.png"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.list.update", array(), "FOSUserBundle"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.list.update", array(), "FOSUserBundle"), "html", null, true);
            echo "\"/></a></td>
      <td align=\"center\"><a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("test_drop_user", array("id" => $this->getAttribute($this->getContext($context, "user"), "id"))), "html", null, true);
            echo "\" onclick=\"return confirm('";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.list.drop_msg", array(), "FOSUserBundle"), "html", null, true);
            echo "');\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/OpmTest/images/drop.png"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.list.delete", array(), "FOSUserBundle"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.list.delete", array(), "FOSUserBundle"), "html", null, true);
            echo "\"/></a></td>
      </tr>
   
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 53
            echo "      
      <tr><td colspan=\"5\" align=\"center\">Aucun User n'a été trouvé. </td></tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 56
        echo "      
       
</table>
 <div class=\"pagination\">
    \t<ul>
    \t\t";
        // line 62
        echo "                ";
        if (($this->getContext($context, "nb_pages") > 1)) {
            // line 63
            echo "                  ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, $this->getContext($context, "nb_pages")));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 64
                echo "                          <li";
                if (($this->getContext($context, "p") == $this->getContext($context, "page"))) {
                    echo " class=\"active\"";
                }
                echo ">
                            <a href=\"javascript:void(0)\" onclick=\"ajaxPagination('";
                // line 65
                echo twig_escape_filter($this->env, $this->getContext($context, "p"), "html", null, true);
                echo "','','')\">";
                echo twig_escape_filter($this->env, $this->getContext($context, "p"), "html", null, true);
                echo "</a>
                          </li>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 68
            echo "                ";
        }
        // line 69
        echo "    \t</ul>
    </div>  ";
    }

    public function getTemplateName()
    {
        return "OpmTestBundle:Test:_liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 69,  175 => 68,  164 => 65,  157 => 64,  152 => 63,  149 => 62,  142 => 56,  134 => 53,  117 => 49,  107 => 48,  103 => 47,  99 => 46,  95 => 45,  92 => 44,  87 => 43,  79 => 42,  73 => 41,  68 => 39,  64 => 38,  52 => 29,  46 => 26,  33 => 16,  17 => 2,);
    }
}
