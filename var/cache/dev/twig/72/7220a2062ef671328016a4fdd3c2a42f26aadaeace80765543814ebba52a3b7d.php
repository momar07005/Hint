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
        $__internal_a3cc1e976868e99c085413cc4f272a307707b8ad6d16086d2c254c4c8ee3a72e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3cc1e976868e99c085413cc4f272a307707b8ad6d16086d2c254c4c8ee3a72e->enter($__internal_a3cc1e976868e99c085413cc4f272a307707b8ad6d16086d2c254c4c8ee3a72e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HWIOAuthBundle:Connect:registration_success.html.twig"));

        $__internal_8fc4d41fafef8ac0e80fd9777ce2f73f47bdb08e6779ac21820176c297550635 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fc4d41fafef8ac0e80fd9777ce2f73f47bdb08e6779ac21820176c297550635->enter($__internal_8fc4d41fafef8ac0e80fd9777ce2f73f47bdb08e6779ac21820176c297550635_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HWIOAuthBundle:Connect:registration_success.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3cc1e976868e99c085413cc4f272a307707b8ad6d16086d2c254c4c8ee3a72e->leave($__internal_a3cc1e976868e99c085413cc4f272a307707b8ad6d16086d2c254c4c8ee3a72e_prof);

        
        $__internal_8fc4d41fafef8ac0e80fd9777ce2f73f47bdb08e6779ac21820176c297550635->leave($__internal_8fc4d41fafef8ac0e80fd9777ce2f73f47bdb08e6779ac21820176c297550635_prof);

    }

    // line 3
    public function block_hwi_oauth_content($context, array $blocks = array())
    {
        $__internal_e146fababe409f3c0aed37212a00e4e947be9849fc3a9490331a460da80e3a13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e146fababe409f3c0aed37212a00e4e947be9849fc3a9490331a460da80e3a13->enter($__internal_e146fababe409f3c0aed37212a00e4e947be9849fc3a9490331a460da80e3a13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

        $__internal_d3305da1d755240a444b4dd0cc61185b986f138267bc64516889f674239feacc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3305da1d755240a444b4dd0cc61185b986f138267bc64516889f674239feacc->enter($__internal_d3305da1d755240a444b4dd0cc61185b986f138267bc64516889f674239feacc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

        // line 4
        echo "    <h3>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("header.registration_success", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "HWIOAuthBundle"), "html", null, true);
        echo "</h3>
";
        
        $__internal_d3305da1d755240a444b4dd0cc61185b986f138267bc64516889f674239feacc->leave($__internal_d3305da1d755240a444b4dd0cc61185b986f138267bc64516889f674239feacc_prof);

        
        $__internal_e146fababe409f3c0aed37212a00e4e947be9849fc3a9490331a460da80e3a13->leave($__internal_e146fababe409f3c0aed37212a00e4e947be9849fc3a9490331a460da80e3a13_prof);

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
