<?php

/* CoreSphereConsoleBundle:Console:index.html.twig */
class __TwigTemplate_de8c0e04fd0bd5b5507ed714f4d430fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("CoreSphereConsoleBundle:Console:layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CoreSphereConsoleBundle:Console:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("coresphere_console.headline.index"), "html", null, true);
    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coresphereconsole/css/console.css"), "html", null, true);
        echo "\" type=\"text/css\" />
";
    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        // line 11
        echo "    <h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("coresphere_console.headline.index"), "html", null, true);
        echo "</h1>
    <div id=\"coresphere_consolebundle_console\" class=\"console\">
        <div class=\"console_info_bar\">
            ";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("coresphere_console.working_directory"), "html", null, true);
        echo ": <strong>";
        echo twig_escape_filter($this->env, $this->getContext($context, "working_dir"), "html", null, true);
        echo "</strong>
            <span class=\"console_env_info\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("coresphere_console.environment"), "html", null, true);
        echo ": <strong>";
        echo twig_escape_filter($this->env, $this->getContext($context, "environment"), "html", null, true);
        echo "</strong></span>
        </div>
        <div class=\"console_log_container\">
            <ol class=\"console_log\">

            </ol>
        </div>
        <div class=\"console_prompt\">
            <div contenteditable=\"true\" class=\"console_input\"></div>
        </div>
        <div class=\"console_suggestions\"></div>
    </div>
";
    }

    // line 29
    public function block_javascripts($context, array $blocks = array())
    {
        // line 30
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/coresphereconsole/js/console.js"), "html", null, true);
        echo "\"></script>
<script>
    jQuery(function () {
        ";
        // line 35
        echo "        var coresphere_console = new CoreSphereConsole(
            jQuery(\"#coresphere_consolebundle_console\"), {
            \"commands\" : ";
        // line 37
        $this->env->loadTemplate("CoreSphereConsoleBundle:Console:command_list.json.twig")->display($context);
        echo ",
            \"post_path\" : \"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("console_exec"), "js", null, true);
        echo "\",
            \"environment\" : \"";
        // line 39
        echo twig_escape_filter($this->env, $this->getContext($context, "environment"), "js", null, true);
        echo "\",
            \"lang\" : {
                \"loading\" : \"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("coresphere_console.loading"), "js", null, true);
        echo "\",
                \"suggestion_head\" : \"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("coresphere_console.suggestion_head"), "js", null, true);
        echo "\",
                \"environment\" : \"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("coresphere_console.environment"), "js", null, true);
        echo "\",
                \"empty_response\" : \"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("coresphere_console.empty_response"), "js", null, true);
        echo "\",
                \"welcome_message\" : \"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("coresphere_console.welcome_message", array("%command%" => "<code class=\"console_command\">list</code>")), "js", null, true);
        echo "\"
            }
        });
        ";
        // line 49
        echo "    });
</script>
";
    }

    public function getTemplateName()
    {
        return "CoreSphereConsoleBundle:Console:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 49,  130 => 45,  126 => 44,  122 => 43,  118 => 42,  114 => 41,  109 => 39,  105 => 38,  101 => 37,  97 => 35,  91 => 31,  87 => 30,  84 => 29,  65 => 15,  59 => 14,  52 => 11,  49 => 10,  43 => 7,  38 => 6,  35 => 5,  29 => 3,);
    }
}
