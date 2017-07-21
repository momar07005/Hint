<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_83ad927c07cda423e60913f8bb5d1b7b3530e697302005ab74e8980fdbc93dd0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0076b92854a6cd003ccfcb5cf9184b115299711dc1a39a0db9be2b9dc62f4dfa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0076b92854a6cd003ccfcb5cf9184b115299711dc1a39a0db9be2b9dc62f4dfa->enter($__internal_0076b92854a6cd003ccfcb5cf9184b115299711dc1a39a0db9be2b9dc62f4dfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_9701f34d38478d246f4d12da94092159e64069bd287b46666a1ed1c5ebf6ba9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9701f34d38478d246f4d12da94092159e64069bd287b46666a1ed1c5ebf6ba9c->enter($__internal_9701f34d38478d246f4d12da94092159e64069bd287b46666a1ed1c5ebf6ba9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0076b92854a6cd003ccfcb5cf9184b115299711dc1a39a0db9be2b9dc62f4dfa->leave($__internal_0076b92854a6cd003ccfcb5cf9184b115299711dc1a39a0db9be2b9dc62f4dfa_prof);

        
        $__internal_9701f34d38478d246f4d12da94092159e64069bd287b46666a1ed1c5ebf6ba9c->leave($__internal_9701f34d38478d246f4d12da94092159e64069bd287b46666a1ed1c5ebf6ba9c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b49f64f784481069f09ca432576517fb6d5ba153c5efb05ac2ae58651ffd388e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b49f64f784481069f09ca432576517fb6d5ba153c5efb05ac2ae58651ffd388e->enter($__internal_b49f64f784481069f09ca432576517fb6d5ba153c5efb05ac2ae58651ffd388e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_0e46531e04e3aa7db3bac66937f6b12c72fc6cb90ed2c0e43373e78d372a3ef4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e46531e04e3aa7db3bac66937f6b12c72fc6cb90ed2c0e43373e78d372a3ef4->enter($__internal_0e46531e04e3aa7db3bac66937f6b12c72fc6cb90ed2c0e43373e78d372a3ef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0e46531e04e3aa7db3bac66937f6b12c72fc6cb90ed2c0e43373e78d372a3ef4->leave($__internal_0e46531e04e3aa7db3bac66937f6b12c72fc6cb90ed2c0e43373e78d372a3ef4_prof);

        
        $__internal_b49f64f784481069f09ca432576517fb6d5ba153c5efb05ac2ae58651ffd388e->leave($__internal_b49f64f784481069f09ca432576517fb6d5ba153c5efb05ac2ae58651ffd388e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_991e00887ad2746655708d1a6c845c6bd8eecf515b0bcc036f915f8595d977cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_991e00887ad2746655708d1a6c845c6bd8eecf515b0bcc036f915f8595d977cb->enter($__internal_991e00887ad2746655708d1a6c845c6bd8eecf515b0bcc036f915f8595d977cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_80ca507538f7b7e61e24f1dcf2294224aa6b749b7b64b3c3c5553db36bf5c72a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80ca507538f7b7e61e24f1dcf2294224aa6b749b7b64b3c3c5553db36bf5c72a->enter($__internal_80ca507538f7b7e61e24f1dcf2294224aa6b749b7b64b3c3c5553db36bf5c72a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_80ca507538f7b7e61e24f1dcf2294224aa6b749b7b64b3c3c5553db36bf5c72a->leave($__internal_80ca507538f7b7e61e24f1dcf2294224aa6b749b7b64b3c3c5553db36bf5c72a_prof);

        
        $__internal_991e00887ad2746655708d1a6c845c6bd8eecf515b0bcc036f915f8595d977cb->leave($__internal_991e00887ad2746655708d1a6c845c6bd8eecf515b0bcc036f915f8595d977cb_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_83d3df633607dae524b9acf24aa8ae1e5918246b7cef1b32180e31def52882b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83d3df633607dae524b9acf24aa8ae1e5918246b7cef1b32180e31def52882b9->enter($__internal_83d3df633607dae524b9acf24aa8ae1e5918246b7cef1b32180e31def52882b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e5428b5dfe23012dab15027dc3d01720b8f9bbe937a3d7516decc520df57fa26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5428b5dfe23012dab15027dc3d01720b8f9bbe937a3d7516decc520df57fa26->enter($__internal_e5428b5dfe23012dab15027dc3d01720b8f9bbe937a3d7516decc520df57fa26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e5428b5dfe23012dab15027dc3d01720b8f9bbe937a3d7516decc520df57fa26->leave($__internal_e5428b5dfe23012dab15027dc3d01720b8f9bbe937a3d7516decc520df57fa26_prof);

        
        $__internal_83d3df633607dae524b9acf24aa8ae1e5918246b7cef1b32180e31def52882b9->leave($__internal_83d3df633607dae524b9acf24aa8ae1e5918246b7cef1b32180e31def52882b9_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/Users/mac/SymfonyProjects/Hint/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
