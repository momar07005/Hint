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
        $__internal_0556f748616fe247a83989f2fab2ddf61f2b7f813f9a51b8be52f9a42edaccfa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0556f748616fe247a83989f2fab2ddf61f2b7f813f9a51b8be52f9a42edaccfa->enter($__internal_0556f748616fe247a83989f2fab2ddf61f2b7f813f9a51b8be52f9a42edaccfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_98ced94a5b5b97c5116f81c612ffb5453257727a7ce1a9d112aa580ec0912962 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98ced94a5b5b97c5116f81c612ffb5453257727a7ce1a9d112aa580ec0912962->enter($__internal_98ced94a5b5b97c5116f81c612ffb5453257727a7ce1a9d112aa580ec0912962_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0556f748616fe247a83989f2fab2ddf61f2b7f813f9a51b8be52f9a42edaccfa->leave($__internal_0556f748616fe247a83989f2fab2ddf61f2b7f813f9a51b8be52f9a42edaccfa_prof);

        
        $__internal_98ced94a5b5b97c5116f81c612ffb5453257727a7ce1a9d112aa580ec0912962->leave($__internal_98ced94a5b5b97c5116f81c612ffb5453257727a7ce1a9d112aa580ec0912962_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a0996009e54eba45865bf50e7379b0c25020e38894e0548e2c4c216ad4f2a452 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0996009e54eba45865bf50e7379b0c25020e38894e0548e2c4c216ad4f2a452->enter($__internal_a0996009e54eba45865bf50e7379b0c25020e38894e0548e2c4c216ad4f2a452_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a81fb127bba368a5138741d0546c0acf37b7b968bda4d74a6bbdf5999c221802 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a81fb127bba368a5138741d0546c0acf37b7b968bda4d74a6bbdf5999c221802->enter($__internal_a81fb127bba368a5138741d0546c0acf37b7b968bda4d74a6bbdf5999c221802_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_a81fb127bba368a5138741d0546c0acf37b7b968bda4d74a6bbdf5999c221802->leave($__internal_a81fb127bba368a5138741d0546c0acf37b7b968bda4d74a6bbdf5999c221802_prof);

        
        $__internal_a0996009e54eba45865bf50e7379b0c25020e38894e0548e2c4c216ad4f2a452->leave($__internal_a0996009e54eba45865bf50e7379b0c25020e38894e0548e2c4c216ad4f2a452_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9a8894aac1560714e66a9bf8853f6d7a182f7f1cecfa2f33cd059570aca8c69a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a8894aac1560714e66a9bf8853f6d7a182f7f1cecfa2f33cd059570aca8c69a->enter($__internal_9a8894aac1560714e66a9bf8853f6d7a182f7f1cecfa2f33cd059570aca8c69a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_89ed1449a47eb012fc1f107125f9343c428ba38705830bcd873639291532be7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89ed1449a47eb012fc1f107125f9343c428ba38705830bcd873639291532be7d->enter($__internal_89ed1449a47eb012fc1f107125f9343c428ba38705830bcd873639291532be7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_89ed1449a47eb012fc1f107125f9343c428ba38705830bcd873639291532be7d->leave($__internal_89ed1449a47eb012fc1f107125f9343c428ba38705830bcd873639291532be7d_prof);

        
        $__internal_9a8894aac1560714e66a9bf8853f6d7a182f7f1cecfa2f33cd059570aca8c69a->leave($__internal_9a8894aac1560714e66a9bf8853f6d7a182f7f1cecfa2f33cd059570aca8c69a_prof);

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
