<?php

/* ::default/index.html.twig */
class __TwigTemplate_acbe26b6b6c0217319c6c3e5fcdf5e5d7a6ce51059223e5fa099ef242a10861e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "::default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ebabd13fd488b3b9816f6f411858311e4796e86ae4be19a52a1a75016f09641d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebabd13fd488b3b9816f6f411858311e4796e86ae4be19a52a1a75016f09641d->enter($__internal_ebabd13fd488b3b9816f6f411858311e4796e86ae4be19a52a1a75016f09641d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::default/index.html.twig"));

        $__internal_181564341faafab99bc0e0c9569fbd802e9f658460e9c5147084043435240681 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_181564341faafab99bc0e0c9569fbd802e9f658460e9c5147084043435240681->enter($__internal_181564341faafab99bc0e0c9569fbd802e9f658460e9c5147084043435240681_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ebabd13fd488b3b9816f6f411858311e4796e86ae4be19a52a1a75016f09641d->leave($__internal_ebabd13fd488b3b9816f6f411858311e4796e86ae4be19a52a1a75016f09641d_prof);

        
        $__internal_181564341faafab99bc0e0c9569fbd802e9f658460e9c5147084043435240681->leave($__internal_181564341faafab99bc0e0c9569fbd802e9f658460e9c5147084043435240681_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_89a1cf3c22132a2b19a073688c67a51df9a17e047a5cf98a19c08fbb58d148fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89a1cf3c22132a2b19a073688c67a51df9a17e047a5cf98a19c08fbb58d148fe->enter($__internal_89a1cf3c22132a2b19a073688c67a51df9a17e047a5cf98a19c08fbb58d148fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5e3f93e1275a4b0b8cd8393c37e5dbd31835d39a97383ee84dc1845592d36893 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e3f93e1275a4b0b8cd8393c37e5dbd31835d39a97383ee84dc1845592d36893->enter($__internal_5e3f93e1275a4b0b8cd8393c37e5dbd31835d39a97383ee84dc1845592d36893_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <div class=\"container-fluid\">
    </div>
";
        
        $__internal_5e3f93e1275a4b0b8cd8393c37e5dbd31835d39a97383ee84dc1845592d36893->leave($__internal_5e3f93e1275a4b0b8cd8393c37e5dbd31835d39a97383ee84dc1845592d36893_prof);

        
        $__internal_89a1cf3c22132a2b19a073688c67a51df9a17e047a5cf98a19c08fbb58d148fe->leave($__internal_89a1cf3c22132a2b19a073688c67a51df9a17e047a5cf98a19c08fbb58d148fe_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2a430de6f1cce11649d9986890805fb7bc3222220ed7550a6fb8a284d345e2c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a430de6f1cce11649d9986890805fb7bc3222220ed7550a6fb8a284d345e2c4->enter($__internal_2a430de6f1cce11649d9986890805fb7bc3222220ed7550a6fb8a284d345e2c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_4d1fe64f7a75eaf556123e94820a64b09327960d3c0663d2cb81fc11f54bed98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d1fe64f7a75eaf556123e94820a64b09327960d3c0663d2cb81fc11f54bed98->enter($__internal_4d1fe64f7a75eaf556123e94820a64b09327960d3c0663d2cb81fc11f54bed98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "
";
        
        $__internal_4d1fe64f7a75eaf556123e94820a64b09327960d3c0663d2cb81fc11f54bed98->leave($__internal_4d1fe64f7a75eaf556123e94820a64b09327960d3c0663d2cb81fc11f54bed98_prof);

        
        $__internal_2a430de6f1cce11649d9986890805fb7bc3222220ed7550a6fb8a284d345e2c4->leave($__internal_2a430de6f1cce11649d9986890805fb7bc3222220ed7550a6fb8a284d345e2c4_prof);

    }

    public function getTemplateName()
    {
        return "::default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 10,  62 => 9,  50 => 5,  41 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}


{% block body %}
    <div class=\"container-fluid\">
    </div>
{% endblock %}

{% block stylesheets %}

{% endblock %}
", "::default/index.html.twig", "/Users/mac/SymfonyProjects/Hint/app/Resources/views/default/index.html.twig");
    }
}
