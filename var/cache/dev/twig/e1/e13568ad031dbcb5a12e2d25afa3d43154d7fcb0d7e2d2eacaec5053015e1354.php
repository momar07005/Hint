<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_dbbdcb08abcafa7517aa825001ba5fc40feb09b1d154676a8e2e61d951b71e07 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6e5cfa33861e02f33f9b99a58f087ebd0bd9b1b67baf8e1661a28874302a8407 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e5cfa33861e02f33f9b99a58f087ebd0bd9b1b67baf8e1661a28874302a8407->enter($__internal_6e5cfa33861e02f33f9b99a58f087ebd0bd9b1b67baf8e1661a28874302a8407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_a13c075d1837e49a080d79dfaa52c08974a8de586d6eb46036555a210ca4f1a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a13c075d1837e49a080d79dfaa52c08974a8de586d6eb46036555a210ca4f1a6->enter($__internal_a13c075d1837e49a080d79dfaa52c08974a8de586d6eb46036555a210ca4f1a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e5cfa33861e02f33f9b99a58f087ebd0bd9b1b67baf8e1661a28874302a8407->leave($__internal_6e5cfa33861e02f33f9b99a58f087ebd0bd9b1b67baf8e1661a28874302a8407_prof);

        
        $__internal_a13c075d1837e49a080d79dfaa52c08974a8de586d6eb46036555a210ca4f1a6->leave($__internal_a13c075d1837e49a080d79dfaa52c08974a8de586d6eb46036555a210ca4f1a6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fce1e66a0d84eb02841e6a167eef53a7dced74839554c5677640ef77998644cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fce1e66a0d84eb02841e6a167eef53a7dced74839554c5677640ef77998644cc->enter($__internal_fce1e66a0d84eb02841e6a167eef53a7dced74839554c5677640ef77998644cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_007aefc2d8e6e18f95e1fc0061365759dad45e542bf76f2b003a44abea3a2098 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_007aefc2d8e6e18f95e1fc0061365759dad45e542bf76f2b003a44abea3a2098->enter($__internal_007aefc2d8e6e18f95e1fc0061365759dad45e542bf76f2b003a44abea3a2098_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "\t<div class=\"row under-header\">
\t\t<div class=\"container\">
\t\t\t<h1 class=\"title\">Se connecter</h1>
\t\t</div>
\t</div>
    ";
        // line 9
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
    <script>
        \$(function() {
            \$('.login').hide();
        });
    </script>
";
        
        $__internal_007aefc2d8e6e18f95e1fc0061365759dad45e542bf76f2b003a44abea3a2098->leave($__internal_007aefc2d8e6e18f95e1fc0061365759dad45e542bf76f2b003a44abea3a2098_prof);

        
        $__internal_fce1e66a0d84eb02841e6a167eef53a7dced74839554c5677640ef77998644cc->leave($__internal_fce1e66a0d84eb02841e6a167eef53a7dced74839554c5677640ef77998644cc_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 9,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
\t<div class=\"row under-header\">
\t\t<div class=\"container\">
\t\t\t<h1 class=\"title\">Se connecter</h1>
\t\t</div>
\t</div>
    {{ include('@FOSUser/Security/login_content.html.twig') }}
    <script>
        \$(function() {
            \$('.login').hide();
        });
    </script>
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "/Users/mac/SymfonyProjects/Hint/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
