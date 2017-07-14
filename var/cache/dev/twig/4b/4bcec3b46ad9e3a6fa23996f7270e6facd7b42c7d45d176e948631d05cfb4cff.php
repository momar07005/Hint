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
        $__internal_38b114642ec196cdc5822259b14e77a20beb290d081add6a7ba267e37b117c15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38b114642ec196cdc5822259b14e77a20beb290d081add6a7ba267e37b117c15->enter($__internal_38b114642ec196cdc5822259b14e77a20beb290d081add6a7ba267e37b117c15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_4ea95bc7d3138c183acf68fc9f9936cc53314fcdaea55f7cbed942357798b33b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ea95bc7d3138c183acf68fc9f9936cc53314fcdaea55f7cbed942357798b33b->enter($__internal_4ea95bc7d3138c183acf68fc9f9936cc53314fcdaea55f7cbed942357798b33b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38b114642ec196cdc5822259b14e77a20beb290d081add6a7ba267e37b117c15->leave($__internal_38b114642ec196cdc5822259b14e77a20beb290d081add6a7ba267e37b117c15_prof);

        
        $__internal_4ea95bc7d3138c183acf68fc9f9936cc53314fcdaea55f7cbed942357798b33b->leave($__internal_4ea95bc7d3138c183acf68fc9f9936cc53314fcdaea55f7cbed942357798b33b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4da7eb170869e5f49597dc84e89a00200ae5392a89521048dd267a4078067f4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4da7eb170869e5f49597dc84e89a00200ae5392a89521048dd267a4078067f4e->enter($__internal_4da7eb170869e5f49597dc84e89a00200ae5392a89521048dd267a4078067f4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c428a562ffe75108c1ea772ab374ad98bbe11f2c23026354a1122335ee47788d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c428a562ffe75108c1ea772ab374ad98bbe11f2c23026354a1122335ee47788d->enter($__internal_c428a562ffe75108c1ea772ab374ad98bbe11f2c23026354a1122335ee47788d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c428a562ffe75108c1ea772ab374ad98bbe11f2c23026354a1122335ee47788d->leave($__internal_c428a562ffe75108c1ea772ab374ad98bbe11f2c23026354a1122335ee47788d_prof);

        
        $__internal_4da7eb170869e5f49597dc84e89a00200ae5392a89521048dd267a4078067f4e->leave($__internal_4da7eb170869e5f49597dc84e89a00200ae5392a89521048dd267a4078067f4e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7f9d5b5671010b189310d036fa61ed0244127693b1ac964f3abf13268bd5dcf6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f9d5b5671010b189310d036fa61ed0244127693b1ac964f3abf13268bd5dcf6->enter($__internal_7f9d5b5671010b189310d036fa61ed0244127693b1ac964f3abf13268bd5dcf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6aae59d56ddb57ea8e3ef38789ace78b03c6c154d2aed3959a29835c05484112 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6aae59d56ddb57ea8e3ef38789ace78b03c6c154d2aed3959a29835c05484112->enter($__internal_6aae59d56ddb57ea8e3ef38789ace78b03c6c154d2aed3959a29835c05484112_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6aae59d56ddb57ea8e3ef38789ace78b03c6c154d2aed3959a29835c05484112->leave($__internal_6aae59d56ddb57ea8e3ef38789ace78b03c6c154d2aed3959a29835c05484112_prof);

        
        $__internal_7f9d5b5671010b189310d036fa61ed0244127693b1ac964f3abf13268bd5dcf6->leave($__internal_7f9d5b5671010b189310d036fa61ed0244127693b1ac964f3abf13268bd5dcf6_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_121f990fc2d8a334d7f615b93be0a69e7c0f2cbe872c90a9af3db6941533db72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_121f990fc2d8a334d7f615b93be0a69e7c0f2cbe872c90a9af3db6941533db72->enter($__internal_121f990fc2d8a334d7f615b93be0a69e7c0f2cbe872c90a9af3db6941533db72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_07e1d76680b58c9a5d3de5547e039d9321561d16850284cdff3d68fda2c1d18f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07e1d76680b58c9a5d3de5547e039d9321561d16850284cdff3d68fda2c1d18f->enter($__internal_07e1d76680b58c9a5d3de5547e039d9321561d16850284cdff3d68fda2c1d18f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_07e1d76680b58c9a5d3de5547e039d9321561d16850284cdff3d68fda2c1d18f->leave($__internal_07e1d76680b58c9a5d3de5547e039d9321561d16850284cdff3d68fda2c1d18f_prof);

        
        $__internal_121f990fc2d8a334d7f615b93be0a69e7c0f2cbe872c90a9af3db6941533db72->leave($__internal_121f990fc2d8a334d7f615b93be0a69e7c0f2cbe872c90a9af3db6941533db72_prof);

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
