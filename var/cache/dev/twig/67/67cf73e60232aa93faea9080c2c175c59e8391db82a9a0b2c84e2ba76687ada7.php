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
        $__internal_7a8d26439d4c3ea3ec88d427fe882996f0c286630f6fb60846f675d840b089da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a8d26439d4c3ea3ec88d427fe882996f0c286630f6fb60846f675d840b089da->enter($__internal_7a8d26439d4c3ea3ec88d427fe882996f0c286630f6fb60846f675d840b089da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_73852e4559849b2ebfad2c8014786a32ec98ceab588b847eec7f8b99ae6fd961 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73852e4559849b2ebfad2c8014786a32ec98ceab588b847eec7f8b99ae6fd961->enter($__internal_73852e4559849b2ebfad2c8014786a32ec98ceab588b847eec7f8b99ae6fd961_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a8d26439d4c3ea3ec88d427fe882996f0c286630f6fb60846f675d840b089da->leave($__internal_7a8d26439d4c3ea3ec88d427fe882996f0c286630f6fb60846f675d840b089da_prof);

        
        $__internal_73852e4559849b2ebfad2c8014786a32ec98ceab588b847eec7f8b99ae6fd961->leave($__internal_73852e4559849b2ebfad2c8014786a32ec98ceab588b847eec7f8b99ae6fd961_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_87dd2b978e5beb3afe60baba685c2877e7e00d486595223287867ec6dfadd60d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87dd2b978e5beb3afe60baba685c2877e7e00d486595223287867ec6dfadd60d->enter($__internal_87dd2b978e5beb3afe60baba685c2877e7e00d486595223287867ec6dfadd60d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_cc9c65f8114f048109290021bacb29546add2d2a32a9b0d2d415fcaf08fa87f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc9c65f8114f048109290021bacb29546add2d2a32a9b0d2d415fcaf08fa87f6->enter($__internal_cc9c65f8114f048109290021bacb29546add2d2a32a9b0d2d415fcaf08fa87f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_cc9c65f8114f048109290021bacb29546add2d2a32a9b0d2d415fcaf08fa87f6->leave($__internal_cc9c65f8114f048109290021bacb29546add2d2a32a9b0d2d415fcaf08fa87f6_prof);

        
        $__internal_87dd2b978e5beb3afe60baba685c2877e7e00d486595223287867ec6dfadd60d->leave($__internal_87dd2b978e5beb3afe60baba685c2877e7e00d486595223287867ec6dfadd60d_prof);

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
