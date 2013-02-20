<?php

/* OpmUtilisateurBundle:Resetting:request_content.html.twig */
class __TwigTemplate_ac4e2ef923ec6bf0614dc8f8a85aec1b extends Twig_Template
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
        echo "<form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_resetting_send_email"), "html", null, true);
        echo "\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        ";
        // line 3
        if (array_key_exists("invalid_username", $context)) {
            // line 4
            echo "            <p>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.invalid_username", array("%username%" => $this->getContext($context, "invalid_username")), "FOSUserBundle"), "html", null, true);
            echo "</p>
        ";
        }
        // line 6
        echo "        <label for=\"username\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <input type=\"text\" id=\"username\" name=\"username\" />
    </div>
    <div>
        <input type=\"submit\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "OpmUtilisateurBundle:Resetting:request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 14,  61 => 15,  21 => 3,  18 => 1,  172 => 67,  154 => 63,  149 => 62,  68 => 17,  36 => 6,  119 => 41,  85 => 43,  76 => 31,  65 => 16,  209 => 84,  205 => 82,  196 => 79,  192 => 78,  189 => 77,  178 => 71,  176 => 70,  165 => 63,  161 => 64,  152 => 58,  148 => 57,  145 => 56,  141 => 55,  134 => 53,  132 => 49,  127 => 46,  123 => 44,  109 => 39,  93 => 32,  90 => 32,  54 => 14,  133 => 44,  124 => 41,  111 => 40,  80 => 25,  60 => 15,  52 => 12,  97 => 34,  95 => 45,  88 => 29,  78 => 35,  71 => 36,  25 => 4,  72 => 20,  64 => 38,  53 => 14,  34 => 10,  92 => 44,  86 => 41,  79 => 42,  19 => 2,  42 => 7,  40 => 8,  29 => 4,  26 => 3,  224 => 96,  215 => 90,  211 => 88,  204 => 84,  200 => 83,  195 => 80,  193 => 79,  190 => 78,  188 => 77,  185 => 76,  179 => 72,  177 => 71,  171 => 67,  162 => 63,  158 => 61,  156 => 60,  153 => 59,  146 => 55,  142 => 56,  137 => 51,  126 => 46,  120 => 39,  117 => 49,  103 => 47,  74 => 21,  47 => 9,  32 => 5,  24 => 11,  22 => 6,  23 => 3,  17 => 1,  69 => 20,  63 => 17,  58 => 9,  49 => 13,  43 => 15,  37 => 6,  20 => 1,  139 => 26,  131 => 48,  128 => 43,  125 => 42,  121 => 40,  115 => 39,  107 => 48,  99 => 46,  96 => 29,  91 => 33,  82 => 42,  77 => 25,  75 => 37,  57 => 15,  50 => 13,  46 => 11,  44 => 11,  39 => 10,  33 => 6,  30 => 6,  27 => 8,  135 => 50,  129 => 47,  122 => 46,  116 => 42,  113 => 38,  108 => 39,  104 => 33,  102 => 37,  94 => 33,  89 => 20,  87 => 29,  84 => 39,  81 => 24,  73 => 19,  70 => 20,  67 => 27,  62 => 24,  59 => 16,  55 => 12,  51 => 11,  48 => 8,  41 => 11,  38 => 5,  35 => 7,  31 => 6,  28 => 1,);
    }
}
