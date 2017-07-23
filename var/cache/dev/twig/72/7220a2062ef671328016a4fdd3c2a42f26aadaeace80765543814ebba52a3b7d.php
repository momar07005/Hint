<?php

/* HWIOAuthBundle:Connect:registration_success.html.twig */
class __TwigTemplate_4d0b116cbaa8dbdede749ac2c85899ffe1cf561df283b74d06ecb745ed0dc1a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("HWIOAuthBundle::layout.html.twig", "HWIOAuthBundle:Connect:registration_success.html.twig", 1);
        $this->blocks = array(
            'hwi_oauth_content' => array($this, 'block_hwi_oauth_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "HWIOAuthBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dbc078bc56b67b8ba1c38a5720834a96dbc03ec6b3aa68852e3373e2a45728b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbc078bc56b67b8ba1c38a5720834a96dbc03ec6b3aa68852e3373e2a45728b4->enter($__internal_dbc078bc56b67b8ba1c38a5720834a96dbc03ec6b3aa68852e3373e2a45728b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HWIOAuthBundle:Connect:registration_success.html.twig"));

        $__internal_71a639a6042b9f487d32801deb97432dc52535b2e672555e294d1cc4e69559a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71a639a6042b9f487d32801deb97432dc52535b2e672555e294d1cc4e69559a6->enter($__internal_71a639a6042b9f487d32801deb97432dc52535b2e672555e294d1cc4e69559a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HWIOAuthBundle:Connect:registration_success.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dbc078bc56b67b8ba1c38a5720834a96dbc03ec6b3aa68852e3373e2a45728b4->leave($__internal_dbc078bc56b67b8ba1c38a5720834a96dbc03ec6b3aa68852e3373e2a45728b4_prof);

        
        $__internal_71a639a6042b9f487d32801deb97432dc52535b2e672555e294d1cc4e69559a6->leave($__internal_71a639a6042b9f487d32801deb97432dc52535b2e672555e294d1cc4e69559a6_prof);

    }

    // line 3
    public function block_hwi_oauth_content($context, array $blocks = array())
    {
        $__internal_e332e8cef3b887b20c1c6c0448aad00895ad1a76e857866cdf462fa5672b14e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e332e8cef3b887b20c1c6c0448aad00895ad1a76e857866cdf462fa5672b14e2->enter($__internal_e332e8cef3b887b20c1c6c0448aad00895ad1a76e857866cdf462fa5672b14e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

        $__internal_79aadc40434fc01b9b648897e291553c25a2691f85cf4e4e7f2dbb9b061785a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79aadc40434fc01b9b648897e291553c25a2691f85cf4e4e7f2dbb9b061785a7->enter($__internal_79aadc40434fc01b9b648897e291553c25a2691f85cf4e4e7f2dbb9b061785a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

        // line 4
        echo "    <h3>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("header.registration_success", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "HWIOAuthBundle"), "html", null, true);
        echo "</h3>
";
        
        $__internal_79aadc40434fc01b9b648897e291553c25a2691f85cf4e4e7f2dbb9b061785a7->leave($__internal_79aadc40434fc01b9b648897e291553c25a2691f85cf4e4e7f2dbb9b061785a7_prof);

        
        $__internal_e332e8cef3b887b20c1c6c0448aad00895ad1a76e857866cdf462fa5672b14e2->leave($__internal_e332e8cef3b887b20c1c6c0448aad00895ad1a76e857866cdf462fa5672b14e2_prof);

    }

    public function getTemplateName()
    {
        return "HWIOAuthBundle:Connect:registration_success.html.twig";
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
        return new Twig_Source("{% extends 'HWIOAuthBundle::layout.html.twig' %}

{% block hwi_oauth_content %}
    <h3>{{ 'header.registration_success' | trans({'%username%': app.user.username}, 'HWIOAuthBundle') }}</h3>
{% endblock hwi_oauth_content %}
", "HWIOAuthBundle:Connect:registration_success.html.twig", "C:\\Hint\\app/Resources/HWIOAuthBundle/views/Connect/registration_success.html.twig");
    }
}
