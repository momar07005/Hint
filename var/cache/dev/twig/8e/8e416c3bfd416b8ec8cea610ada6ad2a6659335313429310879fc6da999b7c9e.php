<?php

/* HWIOAuthBundle:Connect:connect_success.html.twig */
class __TwigTemplate_64091ed9345dcbb5ffd8719db98f5bb178f6fe9c6e13a32d79bd1de93b6f7169 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("HWIOAuthBundle::layout.html.twig", "HWIOAuthBundle:Connect:connect_success.html.twig", 1);
        $this->blocks = array(
            'hwi_oauth_content' => array($this, 'block_hwi_oauth_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "HWIOAuthBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_07460d2b54d088db9092d13e73ec33b7355bda0fa636982f9c7d5aff9297df87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07460d2b54d088db9092d13e73ec33b7355bda0fa636982f9c7d5aff9297df87->enter($__internal_07460d2b54d088db9092d13e73ec33b7355bda0fa636982f9c7d5aff9297df87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HWIOAuthBundle:Connect:connect_success.html.twig"));

        $__internal_d3882c5fa2bbc88e77b74b4e2dac87693d9cf2de205f5e6f27bed65d0c5c4fe4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3882c5fa2bbc88e77b74b4e2dac87693d9cf2de205f5e6f27bed65d0c5c4fe4->enter($__internal_d3882c5fa2bbc88e77b74b4e2dac87693d9cf2de205f5e6f27bed65d0c5c4fe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HWIOAuthBundle:Connect:connect_success.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_07460d2b54d088db9092d13e73ec33b7355bda0fa636982f9c7d5aff9297df87->leave($__internal_07460d2b54d088db9092d13e73ec33b7355bda0fa636982f9c7d5aff9297df87_prof);

        
        $__internal_d3882c5fa2bbc88e77b74b4e2dac87693d9cf2de205f5e6f27bed65d0c5c4fe4->leave($__internal_d3882c5fa2bbc88e77b74b4e2dac87693d9cf2de205f5e6f27bed65d0c5c4fe4_prof);

    }

    // line 3
    public function block_hwi_oauth_content($context, array $blocks = array())
    {
        $__internal_8d425d82f7edfa2c1e56b184a0f5d7f93e946fd1c4217f11833dcbf773aac9bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d425d82f7edfa2c1e56b184a0f5d7f93e946fd1c4217f11833dcbf773aac9bf->enter($__internal_8d425d82f7edfa2c1e56b184a0f5d7f93e946fd1c4217f11833dcbf773aac9bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

        $__internal_9366e4aa76f376e01cb7cd5ed0cd0d078a3f675f4ea7e6ffcdda42ddc5dcdda1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9366e4aa76f376e01cb7cd5ed0cd0d078a3f675f4ea7e6ffcdda42ddc5dcdda1->enter($__internal_9366e4aa76f376e01cb7cd5ed0cd0d078a3f675f4ea7e6ffcdda42ddc5dcdda1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

        // line 4
        echo "    <h3>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("header.success", array("%name%" => $this->getAttribute((isset($context["userInformation"]) ? $context["userInformation"] : $this->getContext($context, "userInformation")), "realName", array())), "HWIOAuthBundle"), "html", null, true);
        echo "</h3>
";
        
        $__internal_9366e4aa76f376e01cb7cd5ed0cd0d078a3f675f4ea7e6ffcdda42ddc5dcdda1->leave($__internal_9366e4aa76f376e01cb7cd5ed0cd0d078a3f675f4ea7e6ffcdda42ddc5dcdda1_prof);

        
        $__internal_8d425d82f7edfa2c1e56b184a0f5d7f93e946fd1c4217f11833dcbf773aac9bf->leave($__internal_8d425d82f7edfa2c1e56b184a0f5d7f93e946fd1c4217f11833dcbf773aac9bf_prof);

    }

    public function getTemplateName()
    {
        return "HWIOAuthBundle:Connect:connect_success.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'HWIOAuthBundle::layout.html.twig' %}

{% block hwi_oauth_content %}
    <h3>{{ 'header.success' | trans({'%name%': userInformation.realName}, 'HWIOAuthBundle') }}</h3>
{% endblock hwi_oauth_content %}
", "HWIOAuthBundle:Connect:connect_success.html.twig", "C:\\Hint\\app/Resources/HWIOAuthBundle/views/Connect/connect_success.html.twig");
    }
}
