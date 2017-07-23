<?php

/* HWIOAuthBundle::layout.html.twig */
class __TwigTemplate_72566889ca6acda8c7e69f86e85d239f29278819048d37cdf38d902687da1b13 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("default/index.html.twig", "HWIOAuthBundle::layout.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'hwi_oauth_content' => array($this, 'block_hwi_oauth_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "default/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a83505c96f0126de10c2cb6c068283da22898116a21f7d3cbb73f2c4f11dc63a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a83505c96f0126de10c2cb6c068283da22898116a21f7d3cbb73f2c4f11dc63a->enter($__internal_a83505c96f0126de10c2cb6c068283da22898116a21f7d3cbb73f2c4f11dc63a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HWIOAuthBundle::layout.html.twig"));

        $__internal_4eb6717a298061d97467e2eafe3e7c8a8979150bf23ef64f9d43674856cfbfdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4eb6717a298061d97467e2eafe3e7c8a8979150bf23ef64f9d43674856cfbfdf->enter($__internal_4eb6717a298061d97467e2eafe3e7c8a8979150bf23ef64f9d43674856cfbfdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HWIOAuthBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a83505c96f0126de10c2cb6c068283da22898116a21f7d3cbb73f2c4f11dc63a->leave($__internal_a83505c96f0126de10c2cb6c068283da22898116a21f7d3cbb73f2c4f11dc63a_prof);

        
        $__internal_4eb6717a298061d97467e2eafe3e7c8a8979150bf23ef64f9d43674856cfbfdf->leave($__internal_4eb6717a298061d97467e2eafe3e7c8a8979150bf23ef64f9d43674856cfbfdf_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_9c08feadc7fc0194bd13ac4d4a3a1d81be57407d39a4692b6043798c6ac118b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c08feadc7fc0194bd13ac4d4a3a1d81be57407d39a4692b6043798c6ac118b7->enter($__internal_9c08feadc7fc0194bd13ac4d4a3a1d81be57407d39a4692b6043798c6ac118b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_51f601b03b49f562f3cad2e5e654f4b9daf33774674d3c17535fd31b648fa4a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51f601b03b49f562f3cad2e5e654f4b9daf33774674d3c17535fd31b648fa4a4->enter($__internal_51f601b03b49f562f3cad2e5e654f4b9daf33774674d3c17535fd31b648fa4a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "        <div>
            ";
        // line 5
        $this->displayBlock('hwi_oauth_content', $context, $blocks);
        // line 7
        echo "        </div>
";
        
        $__internal_51f601b03b49f562f3cad2e5e654f4b9daf33774674d3c17535fd31b648fa4a4->leave($__internal_51f601b03b49f562f3cad2e5e654f4b9daf33774674d3c17535fd31b648fa4a4_prof);

        
        $__internal_9c08feadc7fc0194bd13ac4d4a3a1d81be57407d39a4692b6043798c6ac118b7->leave($__internal_9c08feadc7fc0194bd13ac4d4a3a1d81be57407d39a4692b6043798c6ac118b7_prof);

    }

    // line 5
    public function block_hwi_oauth_content($context, array $blocks = array())
    {
        $__internal_1b1e1b44eed3354b1e04982e608763d1cf9f09f41db08dffd4b768ec30c2dfef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b1e1b44eed3354b1e04982e608763d1cf9f09f41db08dffd4b768ec30c2dfef->enter($__internal_1b1e1b44eed3354b1e04982e608763d1cf9f09f41db08dffd4b768ec30c2dfef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

        $__internal_5bbc95e92ae0dedae24c12b62fc0a9c31173d1f5fb83233fb3b01d3e61d9cade = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bbc95e92ae0dedae24c12b62fc0a9c31173d1f5fb83233fb3b01d3e61d9cade->enter($__internal_5bbc95e92ae0dedae24c12b62fc0a9c31173d1f5fb83233fb3b01d3e61d9cade_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

        // line 6
        echo "            ";
        
        $__internal_5bbc95e92ae0dedae24c12b62fc0a9c31173d1f5fb83233fb3b01d3e61d9cade->leave($__internal_5bbc95e92ae0dedae24c12b62fc0a9c31173d1f5fb83233fb3b01d3e61d9cade_prof);

        
        $__internal_1b1e1b44eed3354b1e04982e608763d1cf9f09f41db08dffd4b768ec30c2dfef->leave($__internal_1b1e1b44eed3354b1e04982e608763d1cf9f09f41db08dffd4b768ec30c2dfef_prof);

    }

    public function getTemplateName()
    {
        return "HWIOAuthBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 6,  66 => 5,  55 => 7,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'default/index.html.twig' %}

{% block content %}
        <div>
            {% block hwi_oauth_content %}
            {% endblock hwi_oauth_content %}
        </div>
{% endblock %}", "HWIOAuthBundle::layout.html.twig", "C:\\Hint\\app/Resources/HWIOAuthBundle/views/layout.html.twig");
    }
}
