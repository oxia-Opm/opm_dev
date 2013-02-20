<?php

/* OpmTestBundle::layout.html.twig */
class __TwigTemplate_4a343bb8f29855d81862fb9c0a0dfde7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html>
    <head>
      
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
       <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/OpmTest/css/main.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
        <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/OpmTest/css/smoothness/jquery-ui-1.9.2.custom.min.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
        <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/OpmTest/css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
        <script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/OpmTest/js/jquery-1.8.3.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/OpmTest/js/jquery-ui-1.9.2.custom.js"), "html", null, true);
        echo "\"></script>
        <title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <style>
    td{
        border: 1px #ccc solid;
        }
        th{
        border: 1px #ccc solid;
        
        }
        table{
          border-collapse:collapse;
          }
        </style>
    </head>
    <body>
      <div id=\"connexion\" align=\"right\">
    ";
        // line 26
        $this->env->loadTemplate("OpmUtilisateurBundle::connexion.html.twig")->display($context);
        // line 27
        echo "</div>
        <div id=\"header\" >
          <div style=\"margin-left:200px\"><img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/OpmTest/images/logo.gif"), "html", null, true);
        echo "\" alt=\"Oxia\" /></div>
          <div align=\"center\">
            ";
        // line 31
        $this->displayBlock('content_header', $context, $blocks);
        // line 35
        echo "          </div>
        </div>
        
        <div id=\"content\" align=\"center\">
            ";
        // line 39
        $this->displayBlock('content', $context, $blocks);
        // line 41
        echo "        </div>
    </body>
</html>
";
    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        echo "My App";
    }

    // line 31
    public function block_content_header($context, array $blocks = array())
    {
        echo "                
                <ul id=\"menu\">                  
                </ul>
            ";
    }

    // line 39
    public function block_content($context, array $blocks = array())
    {
        // line 40
        echo "            ";
    }

    public function getTemplateName()
    {
        return "OpmTestBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 40,  108 => 39,  99 => 31,  86 => 41,  84 => 39,  78 => 35,  76 => 31,  71 => 29,  67 => 27,  46 => 10,  34 => 7,  30 => 6,  26 => 5,  20 => 1,  28 => 4,  93 => 10,  87 => 29,  80 => 25,  72 => 20,  65 => 26,  61 => 15,  55 => 12,  51 => 11,  47 => 9,  42 => 9,  38 => 8,  36 => 7,  33 => 6,  27 => 2,);
    }
}
