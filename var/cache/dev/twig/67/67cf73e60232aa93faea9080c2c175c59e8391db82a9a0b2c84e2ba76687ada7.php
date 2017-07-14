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
        $__internal_d08a7c3a7bda6d068d82242b3a77efa478e407f4a9a14f315317cf6991367aa0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d08a7c3a7bda6d068d82242b3a77efa478e407f4a9a14f315317cf6991367aa0->enter($__internal_d08a7c3a7bda6d068d82242b3a77efa478e407f4a9a14f315317cf6991367aa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_31777453521c9cd42bf5e526523c64995c16f688e0cebba56dcb98f248f1358c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31777453521c9cd42bf5e526523c64995c16f688e0cebba56dcb98f248f1358c->enter($__internal_31777453521c9cd42bf5e526523c64995c16f688e0cebba56dcb98f248f1358c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d08a7c3a7bda6d068d82242b3a77efa478e407f4a9a14f315317cf6991367aa0->leave($__internal_d08a7c3a7bda6d068d82242b3a77efa478e407f4a9a14f315317cf6991367aa0_prof);

        
        $__internal_31777453521c9cd42bf5e526523c64995c16f688e0cebba56dcb98f248f1358c->leave($__internal_31777453521c9cd42bf5e526523c64995c16f688e0cebba56dcb98f248f1358c_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e489ce82b7cbbe9c2665d118ee9eb3039ed396663ddbe469ce79d9929d93798c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e489ce82b7cbbe9c2665d118ee9eb3039ed396663ddbe469ce79d9929d93798c->enter($__internal_e489ce82b7cbbe9c2665d118ee9eb3039ed396663ddbe469ce79d9929d93798c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f620b813f538f90256b019f48d2a93cc93fab58433edb2b5b6900299536df1a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f620b813f538f90256b019f48d2a93cc93fab58433edb2b5b6900299536df1a8->enter($__internal_f620b813f538f90256b019f48d2a93cc93fab58433edb2b5b6900299536df1a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_f620b813f538f90256b019f48d2a93cc93fab58433edb2b5b6900299536df1a8->leave($__internal_f620b813f538f90256b019f48d2a93cc93fab58433edb2b5b6900299536df1a8_prof);

        
        $__internal_e489ce82b7cbbe9c2665d118ee9eb3039ed396663ddbe469ce79d9929d93798c->leave($__internal_e489ce82b7cbbe9c2665d118ee9eb3039ed396663ddbe469ce79d9929d93798c_prof);

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
", "FOSUserBundle:Registration:confirmed.html.twig", "/Users/mac/SymfonyProjects/Hint/app/Resources/FOSUserBundle/views/Registration/confirmed.html.twig");
    }
}
