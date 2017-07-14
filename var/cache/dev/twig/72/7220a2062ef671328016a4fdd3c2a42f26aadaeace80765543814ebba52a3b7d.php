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
        $__internal_1a63259d7f3a8002c4c7bc01bce50e75c3fc347744a495e5301a8fd5542658b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a63259d7f3a8002c4c7bc01bce50e75c3fc347744a495e5301a8fd5542658b5->enter($__internal_1a63259d7f3a8002c4c7bc01bce50e75c3fc347744a495e5301a8fd5542658b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HWIOAuthBundle:Connect:registration_success.html.twig"));

        $__internal_a46c4793f8db00a459abbc2120b7dd06cd3eca72cccede768e8e395f62637344 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a46c4793f8db00a459abbc2120b7dd06cd3eca72cccede768e8e395f62637344->enter($__internal_a46c4793f8db00a459abbc2120b7dd06cd3eca72cccede768e8e395f62637344_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HWIOAuthBundle:Connect:registration_success.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a63259d7f3a8002c4c7bc01bce50e75c3fc347744a495e5301a8fd5542658b5->leave($__internal_1a63259d7f3a8002c4c7bc01bce50e75c3fc347744a495e5301a8fd5542658b5_prof);

        
        $__internal_a46c4793f8db00a459abbc2120b7dd06cd3eca72cccede768e8e395f62637344->leave($__internal_a46c4793f8db00a459abbc2120b7dd06cd3eca72cccede768e8e395f62637344_prof);

    }

    // line 3
    public function block_hwi_oauth_content($context, array $blocks = array())
    {
        $__internal_099348b31cba2abcfc3a831b37758ccb940d95289d85e04976647b4d60f27192 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_099348b31cba2abcfc3a831b37758ccb940d95289d85e04976647b4d60f27192->enter($__internal_099348b31cba2abcfc3a831b37758ccb940d95289d85e04976647b4d60f27192_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

        $__internal_3a99e9ee9f706547289210ba7e5c6bed7b93135a174e766138fb2660cd9d70c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a99e9ee9f706547289210ba7e5c6bed7b93135a174e766138fb2660cd9d70c5->enter($__internal_3a99e9ee9f706547289210ba7e5c6bed7b93135a174e766138fb2660cd9d70c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

        // line 4
        echo "    <h3>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("header.registration_success", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "HWIOAuthBundle"), "html", null, true);
        echo "</h3>
";
        
        $__internal_3a99e9ee9f706547289210ba7e5c6bed7b93135a174e766138fb2660cd9d70c5->leave($__internal_3a99e9ee9f706547289210ba7e5c6bed7b93135a174e766138fb2660cd9d70c5_prof);

        
        $__internal_099348b31cba2abcfc3a831b37758ccb940d95289d85e04976647b4d60f27192->leave($__internal_099348b31cba2abcfc3a831b37758ccb940d95289d85e04976647b4d60f27192_prof);

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
", "HWIOAuthBundle:Connect:registration_success.html.twig", "/Users/mac/SymfonyProjects/Hint/app/Resources/HWIOAuthBundle/views/Connect/registration_success.html.twig");
    }
}
