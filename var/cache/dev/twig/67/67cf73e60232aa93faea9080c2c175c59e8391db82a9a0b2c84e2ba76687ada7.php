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
        $__internal_bb99158fcb8ce6a7e9aeac70101508425ffb5ed4d5c97d29530ab2acb41d7952 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb99158fcb8ce6a7e9aeac70101508425ffb5ed4d5c97d29530ab2acb41d7952->enter($__internal_bb99158fcb8ce6a7e9aeac70101508425ffb5ed4d5c97d29530ab2acb41d7952_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_8f38e1fb50634f1bba1d4f8eac5bb344fb0a7d8b30c56d48776d12901c085d59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f38e1fb50634f1bba1d4f8eac5bb344fb0a7d8b30c56d48776d12901c085d59->enter($__internal_8f38e1fb50634f1bba1d4f8eac5bb344fb0a7d8b30c56d48776d12901c085d59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb99158fcb8ce6a7e9aeac70101508425ffb5ed4d5c97d29530ab2acb41d7952->leave($__internal_bb99158fcb8ce6a7e9aeac70101508425ffb5ed4d5c97d29530ab2acb41d7952_prof);

        
        $__internal_8f38e1fb50634f1bba1d4f8eac5bb344fb0a7d8b30c56d48776d12901c085d59->leave($__internal_8f38e1fb50634f1bba1d4f8eac5bb344fb0a7d8b30c56d48776d12901c085d59_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c8cb3e2d726698ada39659a3c22dc65ea263e08652ee2829d9aa12c3a5154e4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8cb3e2d726698ada39659a3c22dc65ea263e08652ee2829d9aa12c3a5154e4b->enter($__internal_c8cb3e2d726698ada39659a3c22dc65ea263e08652ee2829d9aa12c3a5154e4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f534cbfe74b61fbc7e31363a88be5ad141d712b974c40931b64505fc3491fbfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f534cbfe74b61fbc7e31363a88be5ad141d712b974c40931b64505fc3491fbfd->enter($__internal_f534cbfe74b61fbc7e31363a88be5ad141d712b974c40931b64505fc3491fbfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_f534cbfe74b61fbc7e31363a88be5ad141d712b974c40931b64505fc3491fbfd->leave($__internal_f534cbfe74b61fbc7e31363a88be5ad141d712b974c40931b64505fc3491fbfd_prof);

        
        $__internal_c8cb3e2d726698ada39659a3c22dc65ea263e08652ee2829d9aa12c3a5154e4b->leave($__internal_c8cb3e2d726698ada39659a3c22dc65ea263e08652ee2829d9aa12c3a5154e4b_prof);

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
