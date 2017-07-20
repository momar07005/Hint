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
        $__internal_8dff8f191c6d82326cb03bf173cadc3ff5e1d7cc43ecec4955cfa59de24768dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8dff8f191c6d82326cb03bf173cadc3ff5e1d7cc43ecec4955cfa59de24768dc->enter($__internal_8dff8f191c6d82326cb03bf173cadc3ff5e1d7cc43ecec4955cfa59de24768dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_201a847f083977d93e12ad1d7bdd5532e29844faf01a837360888cfc1b951cc4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_201a847f083977d93e12ad1d7bdd5532e29844faf01a837360888cfc1b951cc4->enter($__internal_201a847f083977d93e12ad1d7bdd5532e29844faf01a837360888cfc1b951cc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8dff8f191c6d82326cb03bf173cadc3ff5e1d7cc43ecec4955cfa59de24768dc->leave($__internal_8dff8f191c6d82326cb03bf173cadc3ff5e1d7cc43ecec4955cfa59de24768dc_prof);

        
        $__internal_201a847f083977d93e12ad1d7bdd5532e29844faf01a837360888cfc1b951cc4->leave($__internal_201a847f083977d93e12ad1d7bdd5532e29844faf01a837360888cfc1b951cc4_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_1a93390992712819ffd56d15e26b804cec78f61bbcdf534dd5dc338d6137bbc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a93390992712819ffd56d15e26b804cec78f61bbcdf534dd5dc338d6137bbc4->enter($__internal_1a93390992712819ffd56d15e26b804cec78f61bbcdf534dd5dc338d6137bbc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_710740668f85362a22c2d2218a2df43b943802a090abf503d2feb42aee6d4506 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_710740668f85362a22c2d2218a2df43b943802a090abf503d2feb42aee6d4506->enter($__internal_710740668f85362a22c2d2218a2df43b943802a090abf503d2feb42aee6d4506_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_710740668f85362a22c2d2218a2df43b943802a090abf503d2feb42aee6d4506->leave($__internal_710740668f85362a22c2d2218a2df43b943802a090abf503d2feb42aee6d4506_prof);

        
        $__internal_1a93390992712819ffd56d15e26b804cec78f61bbcdf534dd5dc338d6137bbc4->leave($__internal_1a93390992712819ffd56d15e26b804cec78f61bbcdf534dd5dc338d6137bbc4_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a81621b87d6f6f31aa4e9a0353fcc1704fa642384f2e7da690d107b591f57894 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a81621b87d6f6f31aa4e9a0353fcc1704fa642384f2e7da690d107b591f57894->enter($__internal_a81621b87d6f6f31aa4e9a0353fcc1704fa642384f2e7da690d107b591f57894_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_a333cd8275017a0f54d022d41c79c91eb1591cd6cfde64eacc2dc76033ba2cf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a333cd8275017a0f54d022d41c79c91eb1591cd6cfde64eacc2dc76033ba2cf8->enter($__internal_a333cd8275017a0f54d022d41c79c91eb1591cd6cfde64eacc2dc76033ba2cf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_a333cd8275017a0f54d022d41c79c91eb1591cd6cfde64eacc2dc76033ba2cf8->leave($__internal_a333cd8275017a0f54d022d41c79c91eb1591cd6cfde64eacc2dc76033ba2cf8_prof);

        
        $__internal_a81621b87d6f6f31aa4e9a0353fcc1704fa642384f2e7da690d107b591f57894->leave($__internal_a81621b87d6f6f31aa4e9a0353fcc1704fa642384f2e7da690d107b591f57894_prof);

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
