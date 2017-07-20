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
        $__internal_f213cfa1ac4f456ad9aa4db80ee38c4ce4db87b471790b586d58f0859b96351c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f213cfa1ac4f456ad9aa4db80ee38c4ce4db87b471790b586d58f0859b96351c->enter($__internal_f213cfa1ac4f456ad9aa4db80ee38c4ce4db87b471790b586d58f0859b96351c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_e7e80b94cac382f59bed381bbf817eeeb3833562fc5531b92026a63ca656173d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7e80b94cac382f59bed381bbf817eeeb3833562fc5531b92026a63ca656173d->enter($__internal_e7e80b94cac382f59bed381bbf817eeeb3833562fc5531b92026a63ca656173d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_f213cfa1ac4f456ad9aa4db80ee38c4ce4db87b471790b586d58f0859b96351c->leave($__internal_f213cfa1ac4f456ad9aa4db80ee38c4ce4db87b471790b586d58f0859b96351c_prof);

        
        $__internal_e7e80b94cac382f59bed381bbf817eeeb3833562fc5531b92026a63ca656173d->leave($__internal_e7e80b94cac382f59bed381bbf817eeeb3833562fc5531b92026a63ca656173d_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_382c3a3be0ca2055405d130bbcf5b6ddf5a599c16431fefaff73f72d625f13cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_382c3a3be0ca2055405d130bbcf5b6ddf5a599c16431fefaff73f72d625f13cb->enter($__internal_382c3a3be0ca2055405d130bbcf5b6ddf5a599c16431fefaff73f72d625f13cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_ec7820cfc41b08fb4a2475b07aada6da17f842c5983fcf6049496a8338ee3b7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec7820cfc41b08fb4a2475b07aada6da17f842c5983fcf6049496a8338ee3b7d->enter($__internal_ec7820cfc41b08fb4a2475b07aada6da17f842c5983fcf6049496a8338ee3b7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_ec7820cfc41b08fb4a2475b07aada6da17f842c5983fcf6049496a8338ee3b7d->leave($__internal_ec7820cfc41b08fb4a2475b07aada6da17f842c5983fcf6049496a8338ee3b7d_prof);

        
        $__internal_382c3a3be0ca2055405d130bbcf5b6ddf5a599c16431fefaff73f72d625f13cb->leave($__internal_382c3a3be0ca2055405d130bbcf5b6ddf5a599c16431fefaff73f72d625f13cb_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_8ad56906fa3ee51a70ca486eb1bc5ae6a1d164a5255ab6f7e757ab2116b9b80a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ad56906fa3ee51a70ca486eb1bc5ae6a1d164a5255ab6f7e757ab2116b9b80a->enter($__internal_8ad56906fa3ee51a70ca486eb1bc5ae6a1d164a5255ab6f7e757ab2116b9b80a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_d97b8564ee7834b0968c4120ff94de1191a16bdf96ba914059f768e3db2c32c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d97b8564ee7834b0968c4120ff94de1191a16bdf96ba914059f768e3db2c32c0->enter($__internal_d97b8564ee7834b0968c4120ff94de1191a16bdf96ba914059f768e3db2c32c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_d97b8564ee7834b0968c4120ff94de1191a16bdf96ba914059f768e3db2c32c0->leave($__internal_d97b8564ee7834b0968c4120ff94de1191a16bdf96ba914059f768e3db2c32c0_prof);

        
        $__internal_8ad56906fa3ee51a70ca486eb1bc5ae6a1d164a5255ab6f7e757ab2116b9b80a->leave($__internal_8ad56906fa3ee51a70ca486eb1bc5ae6a1d164a5255ab6f7e757ab2116b9b80a_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_e889f88feb5a7f81bc0a7c73ff9a5ba4a96e0bddbc9fdb3b5f5f0cefb98f4126 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e889f88feb5a7f81bc0a7c73ff9a5ba4a96e0bddbc9fdb3b5f5f0cefb98f4126->enter($__internal_e889f88feb5a7f81bc0a7c73ff9a5ba4a96e0bddbc9fdb3b5f5f0cefb98f4126_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_e025d40008b65abc28c401952740cc199c245e3efa907fb76e0084ac1a5c1f0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e025d40008b65abc28c401952740cc199c245e3efa907fb76e0084ac1a5c1f0c->enter($__internal_e025d40008b65abc28c401952740cc199c245e3efa907fb76e0084ac1a5c1f0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_e025d40008b65abc28c401952740cc199c245e3efa907fb76e0084ac1a5c1f0c->leave($__internal_e025d40008b65abc28c401952740cc199c245e3efa907fb76e0084ac1a5c1f0c_prof);

        
        $__internal_e889f88feb5a7f81bc0a7c73ff9a5ba4a96e0bddbc9fdb3b5f5f0cefb98f4126->leave($__internal_e889f88feb5a7f81bc0a7c73ff9a5ba4a96e0bddbc9fdb3b5f5f0cefb98f4126_prof);

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
", "FOSUserBundle:Resetting:email.txt.twig", "/Users/mac/SymfonyProjects/Hint/app/Resources/FOSUserBundle/views/Resetting/email.txt.twig");
    }
}
