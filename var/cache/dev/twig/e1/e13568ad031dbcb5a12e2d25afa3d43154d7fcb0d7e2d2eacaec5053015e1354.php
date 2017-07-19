<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_dbbdcb08abcafa7517aa825001ba5fc40feb09b1d154676a8e2e61d951b71e07 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_14d7fe32627cf8c3aa3e88da687245f0e56c6a0c01e8857347d47e016f1ad612 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14d7fe32627cf8c3aa3e88da687245f0e56c6a0c01e8857347d47e016f1ad612->enter($__internal_14d7fe32627cf8c3aa3e88da687245f0e56c6a0c01e8857347d47e016f1ad612_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_e503daa44870f0a4a63d8660902e6c38fdcffd27e162e699221d777147ed31d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e503daa44870f0a4a63d8660902e6c38fdcffd27e162e699221d777147ed31d2->enter($__internal_e503daa44870f0a4a63d8660902e6c38fdcffd27e162e699221d777147ed31d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_14d7fe32627cf8c3aa3e88da687245f0e56c6a0c01e8857347d47e016f1ad612->leave($__internal_14d7fe32627cf8c3aa3e88da687245f0e56c6a0c01e8857347d47e016f1ad612_prof);

        
        $__internal_e503daa44870f0a4a63d8660902e6c38fdcffd27e162e699221d777147ed31d2->leave($__internal_e503daa44870f0a4a63d8660902e6c38fdcffd27e162e699221d777147ed31d2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6052951ded35e67d43fc4401d678be64a4458f1c7ab541c8506e6cde90f02240 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6052951ded35e67d43fc4401d678be64a4458f1c7ab541c8506e6cde90f02240->enter($__internal_6052951ded35e67d43fc4401d678be64a4458f1c7ab541c8506e6cde90f02240_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_5b5525fb951b3ea75102aa98c1c8064f34c070290855a6478fbbec0c78ac38cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b5525fb951b3ea75102aa98c1c8064f34c070290855a6478fbbec0c78ac38cf->enter($__internal_5b5525fb951b3ea75102aa98c1c8064f34c070290855a6478fbbec0c78ac38cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
    <script>
        \$(function() {
            \$('.login').hide();
        });
    </script>
";
        
        $__internal_5b5525fb951b3ea75102aa98c1c8064f34c070290855a6478fbbec0c78ac38cf->leave($__internal_5b5525fb951b3ea75102aa98c1c8064f34c070290855a6478fbbec0c78ac38cf_prof);

        
        $__internal_6052951ded35e67d43fc4401d678be64a4458f1c7ab541c8506e6cde90f02240->leave($__internal_6052951ded35e67d43fc4401d678be64a4458f1c7ab541c8506e6cde90f02240_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
    <script>
        \$(function() {
            \$('.login').hide();
        });
    </script>
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "/Users/mac/SymfonyProjects/Hint/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
