<?php

/* HWIOAuthBundle:Connect:registration_success.html.twig */
class __TwigTemplate_4d0b116cbaa8dbdede749ac2c85899ffe1cf561df283b74d06ecb745ed0dc1a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("HWIOAuthBundle::layout.html.twig", "HWIOAuthBundle:Connect:registration_success.html.twig", 1);
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
        $__internal_107c6149f2f8c54dc2678ac7d8ad1c6ce22fc704eec575cceaaa235ce1167042 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_107c6149f2f8c54dc2678ac7d8ad1c6ce22fc704eec575cceaaa235ce1167042->enter($__internal_107c6149f2f8c54dc2678ac7d8ad1c6ce22fc704eec575cceaaa235ce1167042_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HWIOAuthBundle:Connect:registration_success.html.twig"));

        $__internal_e344eeea810c4bec9716197ced1dc9504b79d368e57ce8897a969feb773268ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e344eeea810c4bec9716197ced1dc9504b79d368e57ce8897a969feb773268ac->enter($__internal_e344eeea810c4bec9716197ced1dc9504b79d368e57ce8897a969feb773268ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HWIOAuthBundle:Connect:registration_success.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_107c6149f2f8c54dc2678ac7d8ad1c6ce22fc704eec575cceaaa235ce1167042->leave($__internal_107c6149f2f8c54dc2678ac7d8ad1c6ce22fc704eec575cceaaa235ce1167042_prof);

        
        $__internal_e344eeea810c4bec9716197ced1dc9504b79d368e57ce8897a969feb773268ac->leave($__internal_e344eeea810c4bec9716197ced1dc9504b79d368e57ce8897a969feb773268ac_prof);

    }

    // line 3
    public function block_hwi_oauth_content($context, array $blocks = array())
    {
        $__internal_9434b89e6ef7edb9123ce0d37535d0d6f9724d7d06f95f7059765ddd7a7e0b26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9434b89e6ef7edb9123ce0d37535d0d6f9724d7d06f95f7059765ddd7a7e0b26->enter($__internal_9434b89e6ef7edb9123ce0d37535d0d6f9724d7d06f95f7059765ddd7a7e0b26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

        $__internal_a73463abfc54611a26e50b70490cfe0190f2ad9e94bb14276e5b288a5c91d233 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a73463abfc54611a26e50b70490cfe0190f2ad9e94bb14276e5b288a5c91d233->enter($__internal_a73463abfc54611a26e50b70490cfe0190f2ad9e94bb14276e5b288a5c91d233_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

        // line 4
        echo "    <h3>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("header.registration_success", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "HWIOAuthBundle"), "html", null, true);
        echo "</h3>
";
        
        $__internal_a73463abfc54611a26e50b70490cfe0190f2ad9e94bb14276e5b288a5c91d233->leave($__internal_a73463abfc54611a26e50b70490cfe0190f2ad9e94bb14276e5b288a5c91d233_prof);

        
        $__internal_9434b89e6ef7edb9123ce0d37535d0d6f9724d7d06f95f7059765ddd7a7e0b26->leave($__internal_9434b89e6ef7edb9123ce0d37535d0d6f9724d7d06f95f7059765ddd7a7e0b26_prof);

    }

    public function getTemplateName()
    {
        return "HWIOAuthBundle:Connect:registration_success.html.twig";
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
    <h3>{{ 'header.registration_success' | trans({'%username%': app.user.username}, 'HWIOAuthBundle') }}</h3>
{% endblock hwi_oauth_content %}
", "HWIOAuthBundle:Connect:registration_success.html.twig", "/Users/mac/SymfonyProjects/Hint/app/Resources/HWIOAuthBundle/views/Connect/registration_success.html.twig");
    }
}
