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
        $__internal_4bc02f22f8c1d25e3f3ae8aabb4ca48c950f146bbde7854b4bcb20e4d67f0bd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bc02f22f8c1d25e3f3ae8aabb4ca48c950f146bbde7854b4bcb20e4d67f0bd6->enter($__internal_4bc02f22f8c1d25e3f3ae8aabb4ca48c950f146bbde7854b4bcb20e4d67f0bd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_1f38494efd071ac3b363c039d6f3464e0a7878d218df4d6105bc0ba9feba58e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f38494efd071ac3b363c039d6f3464e0a7878d218df4d6105bc0ba9feba58e9->enter($__internal_1f38494efd071ac3b363c039d6f3464e0a7878d218df4d6105bc0ba9feba58e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4bc02f22f8c1d25e3f3ae8aabb4ca48c950f146bbde7854b4bcb20e4d67f0bd6->leave($__internal_4bc02f22f8c1d25e3f3ae8aabb4ca48c950f146bbde7854b4bcb20e4d67f0bd6_prof);

        
        $__internal_1f38494efd071ac3b363c039d6f3464e0a7878d218df4d6105bc0ba9feba58e9->leave($__internal_1f38494efd071ac3b363c039d6f3464e0a7878d218df4d6105bc0ba9feba58e9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_49ca1a72e22b69df87529fd3167f16ac2e9ee3b767ae27a68e7d231cc3d259a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49ca1a72e22b69df87529fd3167f16ac2e9ee3b767ae27a68e7d231cc3d259a7->enter($__internal_49ca1a72e22b69df87529fd3167f16ac2e9ee3b767ae27a68e7d231cc3d259a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_f8d6c6df55026debec7b6996aae5b7d070ff37683fb56c7475c3b9c0e710daf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8d6c6df55026debec7b6996aae5b7d070ff37683fb56c7475c3b9c0e710daf5->enter($__internal_f8d6c6df55026debec7b6996aae5b7d070ff37683fb56c7475c3b9c0e710daf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f8d6c6df55026debec7b6996aae5b7d070ff37683fb56c7475c3b9c0e710daf5->leave($__internal_f8d6c6df55026debec7b6996aae5b7d070ff37683fb56c7475c3b9c0e710daf5_prof);

        
        $__internal_49ca1a72e22b69df87529fd3167f16ac2e9ee3b767ae27a68e7d231cc3d259a7->leave($__internal_49ca1a72e22b69df87529fd3167f16ac2e9ee3b767ae27a68e7d231cc3d259a7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b2ce2814763469d6a5c3937abfb47a21d0e0ad9f613f22d3ff1b994c3dc75b78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2ce2814763469d6a5c3937abfb47a21d0e0ad9f613f22d3ff1b994c3dc75b78->enter($__internal_b2ce2814763469d6a5c3937abfb47a21d0e0ad9f613f22d3ff1b994c3dc75b78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d1a08b95e5137cef7e131e2301bbf02cd1f7f3e56caf1feec5698095e933b1bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1a08b95e5137cef7e131e2301bbf02cd1f7f3e56caf1feec5698095e933b1bd->enter($__internal_d1a08b95e5137cef7e131e2301bbf02cd1f7f3e56caf1feec5698095e933b1bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d1a08b95e5137cef7e131e2301bbf02cd1f7f3e56caf1feec5698095e933b1bd->leave($__internal_d1a08b95e5137cef7e131e2301bbf02cd1f7f3e56caf1feec5698095e933b1bd_prof);

        
        $__internal_b2ce2814763469d6a5c3937abfb47a21d0e0ad9f613f22d3ff1b994c3dc75b78->leave($__internal_b2ce2814763469d6a5c3937abfb47a21d0e0ad9f613f22d3ff1b994c3dc75b78_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e4a180ab53fef43c010d0a0172e7465b32aed14d11018be40e79c3416d47c124 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4a180ab53fef43c010d0a0172e7465b32aed14d11018be40e79c3416d47c124->enter($__internal_e4a180ab53fef43c010d0a0172e7465b32aed14d11018be40e79c3416d47c124_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_580e7f80db032120395ba1f80daefb02e4468e6c4febfd75685bcb691348470a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_580e7f80db032120395ba1f80daefb02e4468e6c4febfd75685bcb691348470a->enter($__internal_580e7f80db032120395ba1f80daefb02e4468e6c4febfd75685bcb691348470a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_580e7f80db032120395ba1f80daefb02e4468e6c4febfd75685bcb691348470a->leave($__internal_580e7f80db032120395ba1f80daefb02e4468e6c4febfd75685bcb691348470a_prof);

        
        $__internal_e4a180ab53fef43c010d0a0172e7465b32aed14d11018be40e79c3416d47c124->leave($__internal_e4a180ab53fef43c010d0a0172e7465b32aed14d11018be40e79c3416d47c124_prof);

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
