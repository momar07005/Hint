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
        $__internal_ab605cc4af65c506620001cb3c8b5154cb943960f155dab45ba0c2a7f6a2312a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab605cc4af65c506620001cb3c8b5154cb943960f155dab45ba0c2a7f6a2312a->enter($__internal_ab605cc4af65c506620001cb3c8b5154cb943960f155dab45ba0c2a7f6a2312a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_2e0b25d36d64fe7f3814edcc9aa0ef6eebd94665a65987a5dc66679f7b5849b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e0b25d36d64fe7f3814edcc9aa0ef6eebd94665a65987a5dc66679f7b5849b2->enter($__internal_2e0b25d36d64fe7f3814edcc9aa0ef6eebd94665a65987a5dc66679f7b5849b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_ab605cc4af65c506620001cb3c8b5154cb943960f155dab45ba0c2a7f6a2312a->leave($__internal_ab605cc4af65c506620001cb3c8b5154cb943960f155dab45ba0c2a7f6a2312a_prof);

        
        $__internal_2e0b25d36d64fe7f3814edcc9aa0ef6eebd94665a65987a5dc66679f7b5849b2->leave($__internal_2e0b25d36d64fe7f3814edcc9aa0ef6eebd94665a65987a5dc66679f7b5849b2_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_c396847a9399ba733ce4f3a550bad81c636e2dbb288ba629d561c703133f7c86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c396847a9399ba733ce4f3a550bad81c636e2dbb288ba629d561c703133f7c86->enter($__internal_c396847a9399ba733ce4f3a550bad81c636e2dbb288ba629d561c703133f7c86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_242720d3170d079677ac3fd1e2fb31cfa11d4d1d8e8e89850bea3d348e50e409 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_242720d3170d079677ac3fd1e2fb31cfa11d4d1d8e8e89850bea3d348e50e409->enter($__internal_242720d3170d079677ac3fd1e2fb31cfa11d4d1d8e8e89850bea3d348e50e409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_242720d3170d079677ac3fd1e2fb31cfa11d4d1d8e8e89850bea3d348e50e409->leave($__internal_242720d3170d079677ac3fd1e2fb31cfa11d4d1d8e8e89850bea3d348e50e409_prof);

        
        $__internal_c396847a9399ba733ce4f3a550bad81c636e2dbb288ba629d561c703133f7c86->leave($__internal_c396847a9399ba733ce4f3a550bad81c636e2dbb288ba629d561c703133f7c86_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_485bd8f6a939675189b0367682b8e0852e4fdabd214dfdc5ca58289ebcc3b3f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_485bd8f6a939675189b0367682b8e0852e4fdabd214dfdc5ca58289ebcc3b3f3->enter($__internal_485bd8f6a939675189b0367682b8e0852e4fdabd214dfdc5ca58289ebcc3b3f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_43041002608fe5532bf90434f471f9478037631e80a856047fa7231a741d404b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43041002608fe5532bf90434f471f9478037631e80a856047fa7231a741d404b->enter($__internal_43041002608fe5532bf90434f471f9478037631e80a856047fa7231a741d404b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_43041002608fe5532bf90434f471f9478037631e80a856047fa7231a741d404b->leave($__internal_43041002608fe5532bf90434f471f9478037631e80a856047fa7231a741d404b_prof);

        
        $__internal_485bd8f6a939675189b0367682b8e0852e4fdabd214dfdc5ca58289ebcc3b3f3->leave($__internal_485bd8f6a939675189b0367682b8e0852e4fdabd214dfdc5ca58289ebcc3b3f3_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_bd50169f1fb6b87aef3c2e25d5c56beb030cd61aad7bbf06371613af4659eea2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd50169f1fb6b87aef3c2e25d5c56beb030cd61aad7bbf06371613af4659eea2->enter($__internal_bd50169f1fb6b87aef3c2e25d5c56beb030cd61aad7bbf06371613af4659eea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_bc45838c68d2c4b92b71994e8421af0da8e8ef5e9a15ca4c73fc06625c8b58ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc45838c68d2c4b92b71994e8421af0da8e8ef5e9a15ca4c73fc06625c8b58ee->enter($__internal_bc45838c68d2c4b92b71994e8421af0da8e8ef5e9a15ca4c73fc06625c8b58ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_bc45838c68d2c4b92b71994e8421af0da8e8ef5e9a15ca4c73fc06625c8b58ee->leave($__internal_bc45838c68d2c4b92b71994e8421af0da8e8ef5e9a15ca4c73fc06625c8b58ee_prof);

        
        $__internal_bd50169f1fb6b87aef3c2e25d5c56beb030cd61aad7bbf06371613af4659eea2->leave($__internal_bd50169f1fb6b87aef3c2e25d5c56beb030cd61aad7bbf06371613af4659eea2_prof);

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
", "FOSUserBundle:Registration:email.txt.twig", "/Users/mac/SymfonyProjects/Hint/app/Resources/FOSUserBundle/views/Registration/email.txt.twig");
    }
}
