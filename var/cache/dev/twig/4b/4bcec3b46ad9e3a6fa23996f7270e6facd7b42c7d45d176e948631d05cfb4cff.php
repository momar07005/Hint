<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_83ad927c07cda423e60913f8bb5d1b7b3530e697302005ab74e8980fdbc93dd0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_9d499af049cd5aa57934fb41db17afe60c4c5d05fb9f8e601d012f4251657f72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d499af049cd5aa57934fb41db17afe60c4c5d05fb9f8e601d012f4251657f72->enter($__internal_9d499af049cd5aa57934fb41db17afe60c4c5d05fb9f8e601d012f4251657f72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_dd2b9f6eae8dcf8aecdce6f46186a9f86578f11dd9ddf75f129fd2014092df00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd2b9f6eae8dcf8aecdce6f46186a9f86578f11dd9ddf75f129fd2014092df00->enter($__internal_dd2b9f6eae8dcf8aecdce6f46186a9f86578f11dd9ddf75f129fd2014092df00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d499af049cd5aa57934fb41db17afe60c4c5d05fb9f8e601d012f4251657f72->leave($__internal_9d499af049cd5aa57934fb41db17afe60c4c5d05fb9f8e601d012f4251657f72_prof);

        
        $__internal_dd2b9f6eae8dcf8aecdce6f46186a9f86578f11dd9ddf75f129fd2014092df00->leave($__internal_dd2b9f6eae8dcf8aecdce6f46186a9f86578f11dd9ddf75f129fd2014092df00_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_bba4a0b6eddaf7800a14c7dbbe573259976b99f2a76fc2a3a817fd990db8c717 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bba4a0b6eddaf7800a14c7dbbe573259976b99f2a76fc2a3a817fd990db8c717->enter($__internal_bba4a0b6eddaf7800a14c7dbbe573259976b99f2a76fc2a3a817fd990db8c717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_4892355916d1ecf50ca6c8f6050c67ce868e87abdaf84332348a9ee60ed2c48c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4892355916d1ecf50ca6c8f6050c67ce868e87abdaf84332348a9ee60ed2c48c->enter($__internal_4892355916d1ecf50ca6c8f6050c67ce868e87abdaf84332348a9ee60ed2c48c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4892355916d1ecf50ca6c8f6050c67ce868e87abdaf84332348a9ee60ed2c48c->leave($__internal_4892355916d1ecf50ca6c8f6050c67ce868e87abdaf84332348a9ee60ed2c48c_prof);

        
        $__internal_bba4a0b6eddaf7800a14c7dbbe573259976b99f2a76fc2a3a817fd990db8c717->leave($__internal_bba4a0b6eddaf7800a14c7dbbe573259976b99f2a76fc2a3a817fd990db8c717_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b070870a5bbf3fb9b584637fdffadebc78678c9a98c3b341d8a6423627247330 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b070870a5bbf3fb9b584637fdffadebc78678c9a98c3b341d8a6423627247330->enter($__internal_b070870a5bbf3fb9b584637fdffadebc78678c9a98c3b341d8a6423627247330_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5b6177f8b045d1d70b53829a51e6c7eeb75b5d027e5b2d8d2982494432bc74ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b6177f8b045d1d70b53829a51e6c7eeb75b5d027e5b2d8d2982494432bc74ee->enter($__internal_5b6177f8b045d1d70b53829a51e6c7eeb75b5d027e5b2d8d2982494432bc74ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5b6177f8b045d1d70b53829a51e6c7eeb75b5d027e5b2d8d2982494432bc74ee->leave($__internal_5b6177f8b045d1d70b53829a51e6c7eeb75b5d027e5b2d8d2982494432bc74ee_prof);

        
        $__internal_b070870a5bbf3fb9b584637fdffadebc78678c9a98c3b341d8a6423627247330->leave($__internal_b070870a5bbf3fb9b584637fdffadebc78678c9a98c3b341d8a6423627247330_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a1181bb298ca7cd9f20baef9769c3591e1b0808200962c7155522585ca7535e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1181bb298ca7cd9f20baef9769c3591e1b0808200962c7155522585ca7535e6->enter($__internal_a1181bb298ca7cd9f20baef9769c3591e1b0808200962c7155522585ca7535e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b8239eec215a12685f91ea44d99f001be29a9e3af67d773b2355eacb217cc43b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8239eec215a12685f91ea44d99f001be29a9e3af67d773b2355eacb217cc43b->enter($__internal_b8239eec215a12685f91ea44d99f001be29a9e3af67d773b2355eacb217cc43b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b8239eec215a12685f91ea44d99f001be29a9e3af67d773b2355eacb217cc43b->leave($__internal_b8239eec215a12685f91ea44d99f001be29a9e3af67d773b2355eacb217cc43b_prof);

        
        $__internal_a1181bb298ca7cd9f20baef9769c3591e1b0808200962c7155522585ca7535e6->leave($__internal_a1181bb298ca7cd9f20baef9769c3591e1b0808200962c7155522585ca7535e6_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
", "@WebProfiler/Collector/router.html.twig", "/Users/mac/SymfonyProjects/Hint/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
