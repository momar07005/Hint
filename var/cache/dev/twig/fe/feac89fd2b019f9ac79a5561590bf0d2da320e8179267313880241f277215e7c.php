<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_54674d6fa466e81942e3584e3ca63a3d697def45995263ed4bb3355e57797204 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b788d01fe5f115b443cd8a18e819433d954a68b8fa53b2eb025dbc9cef75b1fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b788d01fe5f115b443cd8a18e819433d954a68b8fa53b2eb025dbc9cef75b1fb->enter($__internal_b788d01fe5f115b443cd8a18e819433d954a68b8fa53b2eb025dbc9cef75b1fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_204f663927198c0deb3dc89e3a14c6668a9d00dcc38b58053a29d74a42252074 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_204f663927198c0deb3dc89e3a14c6668a9d00dcc38b58053a29d74a42252074->enter($__internal_204f663927198c0deb3dc89e3a14c6668a9d00dcc38b58053a29d74a42252074_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_b788d01fe5f115b443cd8a18e819433d954a68b8fa53b2eb025dbc9cef75b1fb->leave($__internal_b788d01fe5f115b443cd8a18e819433d954a68b8fa53b2eb025dbc9cef75b1fb_prof);

        
        $__internal_204f663927198c0deb3dc89e3a14c6668a9d00dcc38b58053a29d74a42252074->leave($__internal_204f663927198c0deb3dc89e3a14c6668a9d00dcc38b58053a29d74a42252074_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_7eaad3dd09ab2128356f4fa93b55b8e2bf54617d254591e3fde3bec2b49153bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7eaad3dd09ab2128356f4fa93b55b8e2bf54617d254591e3fde3bec2b49153bb->enter($__internal_7eaad3dd09ab2128356f4fa93b55b8e2bf54617d254591e3fde3bec2b49153bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_c5894cd0c3193936120798d8e35b6cf9cb785fd3bc9b97e80592355e79e875b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5894cd0c3193936120798d8e35b6cf9cb785fd3bc9b97e80592355e79e875b7->enter($__internal_c5894cd0c3193936120798d8e35b6cf9cb785fd3bc9b97e80592355e79e875b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_c5894cd0c3193936120798d8e35b6cf9cb785fd3bc9b97e80592355e79e875b7->leave($__internal_c5894cd0c3193936120798d8e35b6cf9cb785fd3bc9b97e80592355e79e875b7_prof);

        
        $__internal_7eaad3dd09ab2128356f4fa93b55b8e2bf54617d254591e3fde3bec2b49153bb->leave($__internal_7eaad3dd09ab2128356f4fa93b55b8e2bf54617d254591e3fde3bec2b49153bb_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_96c0cb046d42179f84acda04ffc60f4c5c25815021beb8399dfecac346231769 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96c0cb046d42179f84acda04ffc60f4c5c25815021beb8399dfecac346231769->enter($__internal_96c0cb046d42179f84acda04ffc60f4c5c25815021beb8399dfecac346231769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_ba7939e8b04cb971f0dd498d89a56a00731fb296d0f3e6cc7125af2968141d30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba7939e8b04cb971f0dd498d89a56a00731fb296d0f3e6cc7125af2968141d30->enter($__internal_ba7939e8b04cb971f0dd498d89a56a00731fb296d0f3e6cc7125af2968141d30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_ba7939e8b04cb971f0dd498d89a56a00731fb296d0f3e6cc7125af2968141d30->leave($__internal_ba7939e8b04cb971f0dd498d89a56a00731fb296d0f3e6cc7125af2968141d30_prof);

        
        $__internal_96c0cb046d42179f84acda04ffc60f4c5c25815021beb8399dfecac346231769->leave($__internal_96c0cb046d42179f84acda04ffc60f4c5c25815021beb8399dfecac346231769_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_57964240aa11fd2d86f634ea1784cacdd28944b729d8c11eb398fabc42d808f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57964240aa11fd2d86f634ea1784cacdd28944b729d8c11eb398fabc42d808f5->enter($__internal_57964240aa11fd2d86f634ea1784cacdd28944b729d8c11eb398fabc42d808f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_0425d2979402470f49f62bf6f1ad19fcfeb27567395d16ff00eb3193d62ec14f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0425d2979402470f49f62bf6f1ad19fcfeb27567395d16ff00eb3193d62ec14f->enter($__internal_0425d2979402470f49f62bf6f1ad19fcfeb27567395d16ff00eb3193d62ec14f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_0425d2979402470f49f62bf6f1ad19fcfeb27567395d16ff00eb3193d62ec14f->leave($__internal_0425d2979402470f49f62bf6f1ad19fcfeb27567395d16ff00eb3193d62ec14f_prof);

        
        $__internal_57964240aa11fd2d86f634ea1784cacdd28944b729d8c11eb398fabc42d808f5->leave($__internal_57964240aa11fd2d86f634ea1784cacdd28944b729d8c11eb398fabc42d808f5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "C:\\Hint\\app/Resources/FOSUserBundle/views/Resetting/email.txt.twig");
    }
}
