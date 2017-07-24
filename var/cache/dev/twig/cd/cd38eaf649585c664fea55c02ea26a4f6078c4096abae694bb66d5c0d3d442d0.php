<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_a247b88ab501c00c5d9f5b61df81bf79525204d3f4578d30b34207a2a53883c5 extends Twig_Template
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
        $__internal_574227b1c9d18ab16fb3c17e6f489ff70b7b1121ec2ba09ce86fcbcf00649eaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_574227b1c9d18ab16fb3c17e6f489ff70b7b1121ec2ba09ce86fcbcf00649eaf->enter($__internal_574227b1c9d18ab16fb3c17e6f489ff70b7b1121ec2ba09ce86fcbcf00649eaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_2e7546fe3a66b67674072fc5f3e40df36c0e9b6c39a4a4067dedf915cf7c9071 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e7546fe3a66b67674072fc5f3e40df36c0e9b6c39a4a4067dedf915cf7c9071->enter($__internal_2e7546fe3a66b67674072fc5f3e40df36c0e9b6c39a4a4067dedf915cf7c9071_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_574227b1c9d18ab16fb3c17e6f489ff70b7b1121ec2ba09ce86fcbcf00649eaf->leave($__internal_574227b1c9d18ab16fb3c17e6f489ff70b7b1121ec2ba09ce86fcbcf00649eaf_prof);

        
        $__internal_2e7546fe3a66b67674072fc5f3e40df36c0e9b6c39a4a4067dedf915cf7c9071->leave($__internal_2e7546fe3a66b67674072fc5f3e40df36c0e9b6c39a4a4067dedf915cf7c9071_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_de8baab0c7358bdf789fbe1eb91fa4d5645eab43e4580af29e4936494aa05f62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de8baab0c7358bdf789fbe1eb91fa4d5645eab43e4580af29e4936494aa05f62->enter($__internal_de8baab0c7358bdf789fbe1eb91fa4d5645eab43e4580af29e4936494aa05f62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_03d20bfa10675d3ba57dbbb4c6dc7cc0b97f4e2c4cd4dc222a2f62c7613fcdac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03d20bfa10675d3ba57dbbb4c6dc7cc0b97f4e2c4cd4dc222a2f62c7613fcdac->enter($__internal_03d20bfa10675d3ba57dbbb4c6dc7cc0b97f4e2c4cd4dc222a2f62c7613fcdac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_03d20bfa10675d3ba57dbbb4c6dc7cc0b97f4e2c4cd4dc222a2f62c7613fcdac->leave($__internal_03d20bfa10675d3ba57dbbb4c6dc7cc0b97f4e2c4cd4dc222a2f62c7613fcdac_prof);

        
        $__internal_de8baab0c7358bdf789fbe1eb91fa4d5645eab43e4580af29e4936494aa05f62->leave($__internal_de8baab0c7358bdf789fbe1eb91fa4d5645eab43e4580af29e4936494aa05f62_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_8b917e06039682a86ae48f5d62552025f8d1e157e4b40f8d8df5a27816b01743 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b917e06039682a86ae48f5d62552025f8d1e157e4b40f8d8df5a27816b01743->enter($__internal_8b917e06039682a86ae48f5d62552025f8d1e157e4b40f8d8df5a27816b01743_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_0aab728bbaebdffb68d2afa960fb8c8e56b278d38d4a60b3acf799865c6a6088 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0aab728bbaebdffb68d2afa960fb8c8e56b278d38d4a60b3acf799865c6a6088->enter($__internal_0aab728bbaebdffb68d2afa960fb8c8e56b278d38d4a60b3acf799865c6a6088_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_0aab728bbaebdffb68d2afa960fb8c8e56b278d38d4a60b3acf799865c6a6088->leave($__internal_0aab728bbaebdffb68d2afa960fb8c8e56b278d38d4a60b3acf799865c6a6088_prof);

        
        $__internal_8b917e06039682a86ae48f5d62552025f8d1e157e4b40f8d8df5a27816b01743->leave($__internal_8b917e06039682a86ae48f5d62552025f8d1e157e4b40f8d8df5a27816b01743_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_424246e88abae01b5df426628a5cab0d17248239572a63439aca05b1067983ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_424246e88abae01b5df426628a5cab0d17248239572a63439aca05b1067983ab->enter($__internal_424246e88abae01b5df426628a5cab0d17248239572a63439aca05b1067983ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_911c3e311639890a1897ffc53dcfb5069908d4c3cd97a73430a1b55916e1cb93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_911c3e311639890a1897ffc53dcfb5069908d4c3cd97a73430a1b55916e1cb93->enter($__internal_911c3e311639890a1897ffc53dcfb5069908d4c3cd97a73430a1b55916e1cb93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_911c3e311639890a1897ffc53dcfb5069908d4c3cd97a73430a1b55916e1cb93->leave($__internal_911c3e311639890a1897ffc53dcfb5069908d4c3cd97a73430a1b55916e1cb93_prof);

        
        $__internal_424246e88abae01b5df426628a5cab0d17248239572a63439aca05b1067983ab->leave($__internal_424246e88abae01b5df426628a5cab0d17248239572a63439aca05b1067983ab_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
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
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "C:\\Hint\\app/Resources/FOSUserBundle/views/Registration/email.txt.twig");
    }
}
