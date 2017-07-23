<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_99de65678d3e0e9604278d2b94bc840211fdecc14dc4a30f967cc73b2e6289ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a064f67ce4110b2177880c326ac60d04f1d52f85e7f5ea34b77897cfad35ce6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a064f67ce4110b2177880c326ac60d04f1d52f85e7f5ea34b77897cfad35ce6b->enter($__internal_a064f67ce4110b2177880c326ac60d04f1d52f85e7f5ea34b77897cfad35ce6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_98be18739a67216d1413e6c0ea943ab77c887b04e8e8949539c0a999b9c24a84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98be18739a67216d1413e6c0ea943ab77c887b04e8e8949539c0a999b9c24a84->enter($__internal_98be18739a67216d1413e6c0ea943ab77c887b04e8e8949539c0a999b9c24a84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a064f67ce4110b2177880c326ac60d04f1d52f85e7f5ea34b77897cfad35ce6b->leave($__internal_a064f67ce4110b2177880c326ac60d04f1d52f85e7f5ea34b77897cfad35ce6b_prof);

        
        $__internal_98be18739a67216d1413e6c0ea943ab77c887b04e8e8949539c0a999b9c24a84->leave($__internal_98be18739a67216d1413e6c0ea943ab77c887b04e8e8949539c0a999b9c24a84_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b36933ebb7bf1f383c971be31f244a0cdc5197eedd7d128c707aa4643712e40c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b36933ebb7bf1f383c971be31f244a0cdc5197eedd7d128c707aa4643712e40c->enter($__internal_b36933ebb7bf1f383c971be31f244a0cdc5197eedd7d128c707aa4643712e40c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_afe15f65cf93ef11db13454522ffabd798d4847b23f82988ea9f808803feaed0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afe15f65cf93ef11db13454522ffabd798d4847b23f82988ea9f808803feaed0->enter($__internal_afe15f65cf93ef11db13454522ffabd798d4847b23f82988ea9f808803feaed0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_afe15f65cf93ef11db13454522ffabd798d4847b23f82988ea9f808803feaed0->leave($__internal_afe15f65cf93ef11db13454522ffabd798d4847b23f82988ea9f808803feaed0_prof);

        
        $__internal_b36933ebb7bf1f383c971be31f244a0cdc5197eedd7d128c707aa4643712e40c->leave($__internal_b36933ebb7bf1f383c971be31f244a0cdc5197eedd7d128c707aa4643712e40c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:confirmed.html.twig", "C:\\Hint\\app/Resources/FOSUserBundle/views/Registration/confirmed.html.twig");
    }
}
