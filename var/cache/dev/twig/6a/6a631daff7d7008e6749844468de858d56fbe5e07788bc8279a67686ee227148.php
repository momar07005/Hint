<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_c766aa05b951bad8871f2968c82e1e6b76f35a4df12989b729d2850ed6c20232 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fb88dce7c741e4ed3f1916807076fbe0dd22a5114b79a23c0d02531bba81335f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb88dce7c741e4ed3f1916807076fbe0dd22a5114b79a23c0d02531bba81335f->enter($__internal_fb88dce7c741e4ed3f1916807076fbe0dd22a5114b79a23c0d02531bba81335f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_0f0f333683f5ecfe6b0ee0eb875eecdda8cebcb62bc3e73e95e4575990a860b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f0f333683f5ecfe6b0ee0eb875eecdda8cebcb62bc3e73e95e4575990a860b2->enter($__internal_0f0f333683f5ecfe6b0ee0eb875eecdda8cebcb62bc3e73e95e4575990a860b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb88dce7c741e4ed3f1916807076fbe0dd22a5114b79a23c0d02531bba81335f->leave($__internal_fb88dce7c741e4ed3f1916807076fbe0dd22a5114b79a23c0d02531bba81335f_prof);

        
        $__internal_0f0f333683f5ecfe6b0ee0eb875eecdda8cebcb62bc3e73e95e4575990a860b2->leave($__internal_0f0f333683f5ecfe6b0ee0eb875eecdda8cebcb62bc3e73e95e4575990a860b2_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_6fdc20928b301f91ececa29fb5be1108ac45d661ced963b0515c4c4a4bb35d70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fdc20928b301f91ececa29fb5be1108ac45d661ced963b0515c4c4a4bb35d70->enter($__internal_6fdc20928b301f91ececa29fb5be1108ac45d661ced963b0515c4c4a4bb35d70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_972e8ce6c0934f1c694c6eb90ff193caaa7358f87d284d00a2360a484fd5d908 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_972e8ce6c0934f1c694c6eb90ff193caaa7358f87d284d00a2360a484fd5d908->enter($__internal_972e8ce6c0934f1c694c6eb90ff193caaa7358f87d284d00a2360a484fd5d908_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_972e8ce6c0934f1c694c6eb90ff193caaa7358f87d284d00a2360a484fd5d908->leave($__internal_972e8ce6c0934f1c694c6eb90ff193caaa7358f87d284d00a2360a484fd5d908_prof);

        
        $__internal_6fdc20928b301f91ececa29fb5be1108ac45d661ced963b0515c4c4a4bb35d70->leave($__internal_6fdc20928b301f91ececa29fb5be1108ac45d661ced963b0515c4c4a4bb35d70_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_946f07b2425057f8ee0516d441f7a82f2f73b61505a72bd9c313da93118ffb4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_946f07b2425057f8ee0516d441f7a82f2f73b61505a72bd9c313da93118ffb4f->enter($__internal_946f07b2425057f8ee0516d441f7a82f2f73b61505a72bd9c313da93118ffb4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_cce0c0611a47d18f1fad07ea25d7bc0587300987267fd28a13dea0c0f725dde8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cce0c0611a47d18f1fad07ea25d7bc0587300987267fd28a13dea0c0f725dde8->enter($__internal_cce0c0611a47d18f1fad07ea25d7bc0587300987267fd28a13dea0c0f725dde8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_cce0c0611a47d18f1fad07ea25d7bc0587300987267fd28a13dea0c0f725dde8->leave($__internal_cce0c0611a47d18f1fad07ea25d7bc0587300987267fd28a13dea0c0f725dde8_prof);

        
        $__internal_946f07b2425057f8ee0516d441f7a82f2f73b61505a72bd9c313da93118ffb4f->leave($__internal_946f07b2425057f8ee0516d441f7a82f2f73b61505a72bd9c313da93118ffb4f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/Users/mac/SymfonyProjects/Hint/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
