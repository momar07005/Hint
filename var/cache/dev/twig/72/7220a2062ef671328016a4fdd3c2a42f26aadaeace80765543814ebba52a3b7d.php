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
        $__internal_9c75413aa42a82187d0104781f95da96a770f71d86851d39474c76128861e097 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c75413aa42a82187d0104781f95da96a770f71d86851d39474c76128861e097->enter($__internal_9c75413aa42a82187d0104781f95da96a770f71d86851d39474c76128861e097_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HWIOAuthBundle:Connect:registration_success.html.twig"));

        $__internal_bb38a02071d0ef6ab7c26e5cf3ee24f2cc8bb81b5c04448a3a5ff8db354593a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb38a02071d0ef6ab7c26e5cf3ee24f2cc8bb81b5c04448a3a5ff8db354593a1->enter($__internal_bb38a02071d0ef6ab7c26e5cf3ee24f2cc8bb81b5c04448a3a5ff8db354593a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HWIOAuthBundle:Connect:registration_success.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c75413aa42a82187d0104781f95da96a770f71d86851d39474c76128861e097->leave($__internal_9c75413aa42a82187d0104781f95da96a770f71d86851d39474c76128861e097_prof);

        
        $__internal_bb38a02071d0ef6ab7c26e5cf3ee24f2cc8bb81b5c04448a3a5ff8db354593a1->leave($__internal_bb38a02071d0ef6ab7c26e5cf3ee24f2cc8bb81b5c04448a3a5ff8db354593a1_prof);

    }

    // line 3
    public function block_hwi_oauth_content($context, array $blocks = array())
    {
        $__internal_7091d91b214e3140b04dc229ae79f27cb959b18f33568f58a5609fe3f3d5388a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7091d91b214e3140b04dc229ae79f27cb959b18f33568f58a5609fe3f3d5388a->enter($__internal_7091d91b214e3140b04dc229ae79f27cb959b18f33568f58a5609fe3f3d5388a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

        $__internal_7327251701a34f14f58c6eb68dc9cf33cfe0fd4eb0a0f8774ff6c1b85d111782 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7327251701a34f14f58c6eb68dc9cf33cfe0fd4eb0a0f8774ff6c1b85d111782->enter($__internal_7327251701a34f14f58c6eb68dc9cf33cfe0fd4eb0a0f8774ff6c1b85d111782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

        // line 4
        echo "    <h3>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("header.registration_success", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "HWIOAuthBundle"), "html", null, true);
        echo "</h3>
";
        
        $__internal_7327251701a34f14f58c6eb68dc9cf33cfe0fd4eb0a0f8774ff6c1b85d111782->leave($__internal_7327251701a34f14f58c6eb68dc9cf33cfe0fd4eb0a0f8774ff6c1b85d111782_prof);

        
        $__internal_7091d91b214e3140b04dc229ae79f27cb959b18f33568f58a5609fe3f3d5388a->leave($__internal_7091d91b214e3140b04dc229ae79f27cb959b18f33568f58a5609fe3f3d5388a_prof);

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
", "HWIOAuthBundle:Connect:registration_success.html.twig", "C:\\Hint\\app/Resources/HWIOAuthBundle/views/Connect/registration_success.html.twig");
    }
}
