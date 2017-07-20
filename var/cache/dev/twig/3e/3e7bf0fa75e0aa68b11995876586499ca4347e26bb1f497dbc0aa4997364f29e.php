<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_181dfcf4c6b1e5d6973710c21b7646263dd4d27dfab2a2e02cb54a8c5a6171a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_afbeed981c1553a0d6844c08d1dfb348907cdd553819d967f9be544f32795aac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afbeed981c1553a0d6844c08d1dfb348907cdd553819d967f9be544f32795aac->enter($__internal_afbeed981c1553a0d6844c08d1dfb348907cdd553819d967f9be544f32795aac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_6eee719837f0129a4029bf542a0658edbe74187d3d71f7bc060ff631ffb6cecb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6eee719837f0129a4029bf542a0658edbe74187d3d71f7bc060ff631ffb6cecb->enter($__internal_6eee719837f0129a4029bf542a0658edbe74187d3d71f7bc060ff631ffb6cecb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_afbeed981c1553a0d6844c08d1dfb348907cdd553819d967f9be544f32795aac->leave($__internal_afbeed981c1553a0d6844c08d1dfb348907cdd553819d967f9be544f32795aac_prof);

        
        $__internal_6eee719837f0129a4029bf542a0658edbe74187d3d71f7bc060ff631ffb6cecb->leave($__internal_6eee719837f0129a4029bf542a0658edbe74187d3d71f7bc060ff631ffb6cecb_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_e01e8b980810cd60cf8a10b6a46466afdf71b661c13a8c691c7dd9e2ee9e6f12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e01e8b980810cd60cf8a10b6a46466afdf71b661c13a8c691c7dd9e2ee9e6f12->enter($__internal_e01e8b980810cd60cf8a10b6a46466afdf71b661c13a8c691c7dd9e2ee9e6f12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6a6881c90df414dae494398d83b71cc92446780fba80c52a2059a21a86e71ef3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a6881c90df414dae494398d83b71cc92446780fba80c52a2059a21a86e71ef3->enter($__internal_6a6881c90df414dae494398d83b71cc92446780fba80c52a2059a21a86e71ef3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_6a6881c90df414dae494398d83b71cc92446780fba80c52a2059a21a86e71ef3->leave($__internal_6a6881c90df414dae494398d83b71cc92446780fba80c52a2059a21a86e71ef3_prof);

        
        $__internal_e01e8b980810cd60cf8a10b6a46466afdf71b661c13a8c691c7dd9e2ee9e6f12->leave($__internal_e01e8b980810cd60cf8a10b6a46466afdf71b661c13a8c691c7dd9e2ee9e6f12_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/Users/mac/SymfonyProjects/Hint/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
