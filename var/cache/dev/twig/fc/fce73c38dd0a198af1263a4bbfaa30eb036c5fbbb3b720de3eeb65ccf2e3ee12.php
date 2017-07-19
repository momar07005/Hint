<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_2155ff6232b76b6050d333f37dab911dd9cf5efd7d685be626f78f11c66efb0b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_57e29d3f546145e7f3a0f659070c169ec480c5e491176b968a37599526b920d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57e29d3f546145e7f3a0f659070c169ec480c5e491176b968a37599526b920d7->enter($__internal_57e29d3f546145e7f3a0f659070c169ec480c5e491176b968a37599526b920d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_7c8364c4ff17960d76e732586c2b9f145ac9e860a63567dbc3d19d04d320627b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c8364c4ff17960d76e732586c2b9f145ac9e860a63567dbc3d19d04d320627b->enter($__internal_7c8364c4ff17960d76e732586c2b9f145ac9e860a63567dbc3d19d04d320627b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57e29d3f546145e7f3a0f659070c169ec480c5e491176b968a37599526b920d7->leave($__internal_57e29d3f546145e7f3a0f659070c169ec480c5e491176b968a37599526b920d7_prof);

        
        $__internal_7c8364c4ff17960d76e732586c2b9f145ac9e860a63567dbc3d19d04d320627b->leave($__internal_7c8364c4ff17960d76e732586c2b9f145ac9e860a63567dbc3d19d04d320627b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_60198de0260f266671975a24580b6f50358c24c4227008e7e875367dd2ee877e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60198de0260f266671975a24580b6f50358c24c4227008e7e875367dd2ee877e->enter($__internal_60198de0260f266671975a24580b6f50358c24c4227008e7e875367dd2ee877e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7bb03e8b272e0779b8e60a30c1c7da38b473fc2cedcc93c6c249c4aa38eba059 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bb03e8b272e0779b8e60a30c1c7da38b473fc2cedcc93c6c249c4aa38eba059->enter($__internal_7bb03e8b272e0779b8e60a30c1c7da38b473fc2cedcc93c6c249c4aa38eba059_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_7bb03e8b272e0779b8e60a30c1c7da38b473fc2cedcc93c6c249c4aa38eba059->leave($__internal_7bb03e8b272e0779b8e60a30c1c7da38b473fc2cedcc93c6c249c4aa38eba059_prof);

        
        $__internal_60198de0260f266671975a24580b6f50358c24c4227008e7e875367dd2ee877e->leave($__internal_60198de0260f266671975a24580b6f50358c24c4227008e7e875367dd2ee877e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_fd09027358ff7bf1b78243fcedfcf9384ea33fbeea884db132fdb8bc346a28de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd09027358ff7bf1b78243fcedfcf9384ea33fbeea884db132fdb8bc346a28de->enter($__internal_fd09027358ff7bf1b78243fcedfcf9384ea33fbeea884db132fdb8bc346a28de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bc6c40158f37a1e88795f7fb7405290f6850da10257a6fa6da3ceab38e8d13e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc6c40158f37a1e88795f7fb7405290f6850da10257a6fa6da3ceab38e8d13e2->enter($__internal_bc6c40158f37a1e88795f7fb7405290f6850da10257a6fa6da3ceab38e8d13e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_bc6c40158f37a1e88795f7fb7405290f6850da10257a6fa6da3ceab38e8d13e2->leave($__internal_bc6c40158f37a1e88795f7fb7405290f6850da10257a6fa6da3ceab38e8d13e2_prof);

        
        $__internal_fd09027358ff7bf1b78243fcedfcf9384ea33fbeea884db132fdb8bc346a28de->leave($__internal_fd09027358ff7bf1b78243fcedfcf9384ea33fbeea884db132fdb8bc346a28de_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/Users/mac/SymfonyProjects/Hint/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
