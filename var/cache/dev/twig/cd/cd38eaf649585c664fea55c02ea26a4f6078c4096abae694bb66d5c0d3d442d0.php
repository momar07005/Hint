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
        $__internal_41ddec378ae8cfcd5f992a231b6e3671533b7e4f54a7809aa0382931f0c3db1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41ddec378ae8cfcd5f992a231b6e3671533b7e4f54a7809aa0382931f0c3db1c->enter($__internal_41ddec378ae8cfcd5f992a231b6e3671533b7e4f54a7809aa0382931f0c3db1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_34705482fd7d6aedea27f2efe67a27074710f5e1d74b5f87c3f60fbdb542c0f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34705482fd7d6aedea27f2efe67a27074710f5e1d74b5f87c3f60fbdb542c0f0->enter($__internal_34705482fd7d6aedea27f2efe67a27074710f5e1d74b5f87c3f60fbdb542c0f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_41ddec378ae8cfcd5f992a231b6e3671533b7e4f54a7809aa0382931f0c3db1c->leave($__internal_41ddec378ae8cfcd5f992a231b6e3671533b7e4f54a7809aa0382931f0c3db1c_prof);

        
        $__internal_34705482fd7d6aedea27f2efe67a27074710f5e1d74b5f87c3f60fbdb542c0f0->leave($__internal_34705482fd7d6aedea27f2efe67a27074710f5e1d74b5f87c3f60fbdb542c0f0_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_dbc6652a97b2965703482c8d128d30d4bcb2d963efe8c6c22366aff5bc6c798c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dbc6652a97b2965703482c8d128d30d4bcb2d963efe8c6c22366aff5bc6c798c->enter($__internal_dbc6652a97b2965703482c8d128d30d4bcb2d963efe8c6c22366aff5bc6c798c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_b8ccbfb15da30acd93b7111a8dc7e7c21bcdc4e51e26d3a7767aadd5fb17413e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8ccbfb15da30acd93b7111a8dc7e7c21bcdc4e51e26d3a7767aadd5fb17413e->enter($__internal_b8ccbfb15da30acd93b7111a8dc7e7c21bcdc4e51e26d3a7767aadd5fb17413e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_b8ccbfb15da30acd93b7111a8dc7e7c21bcdc4e51e26d3a7767aadd5fb17413e->leave($__internal_b8ccbfb15da30acd93b7111a8dc7e7c21bcdc4e51e26d3a7767aadd5fb17413e_prof);

        
        $__internal_dbc6652a97b2965703482c8d128d30d4bcb2d963efe8c6c22366aff5bc6c798c->leave($__internal_dbc6652a97b2965703482c8d128d30d4bcb2d963efe8c6c22366aff5bc6c798c_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_34249ba2d61e7efdc9f7c9e46332bf2027b42e0952a7dcb550a9e6db63df0b5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34249ba2d61e7efdc9f7c9e46332bf2027b42e0952a7dcb550a9e6db63df0b5f->enter($__internal_34249ba2d61e7efdc9f7c9e46332bf2027b42e0952a7dcb550a9e6db63df0b5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_bfce71577d1490bc25e3d41a7b893f2c880a95f18b88ad0638fffd5d82add27b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfce71577d1490bc25e3d41a7b893f2c880a95f18b88ad0638fffd5d82add27b->enter($__internal_bfce71577d1490bc25e3d41a7b893f2c880a95f18b88ad0638fffd5d82add27b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_bfce71577d1490bc25e3d41a7b893f2c880a95f18b88ad0638fffd5d82add27b->leave($__internal_bfce71577d1490bc25e3d41a7b893f2c880a95f18b88ad0638fffd5d82add27b_prof);

        
        $__internal_34249ba2d61e7efdc9f7c9e46332bf2027b42e0952a7dcb550a9e6db63df0b5f->leave($__internal_34249ba2d61e7efdc9f7c9e46332bf2027b42e0952a7dcb550a9e6db63df0b5f_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_c838a0d23fa5dac015098e1a340ec41f5e6b0fc882a47fe478dc3f407307c157 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c838a0d23fa5dac015098e1a340ec41f5e6b0fc882a47fe478dc3f407307c157->enter($__internal_c838a0d23fa5dac015098e1a340ec41f5e6b0fc882a47fe478dc3f407307c157_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_d31a1a5a9aadb25705e12db6a613a77c95476556717234b808ed27fc76f2a171 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d31a1a5a9aadb25705e12db6a613a77c95476556717234b808ed27fc76f2a171->enter($__internal_d31a1a5a9aadb25705e12db6a613a77c95476556717234b808ed27fc76f2a171_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_d31a1a5a9aadb25705e12db6a613a77c95476556717234b808ed27fc76f2a171->leave($__internal_d31a1a5a9aadb25705e12db6a613a77c95476556717234b808ed27fc76f2a171_prof);

        
        $__internal_c838a0d23fa5dac015098e1a340ec41f5e6b0fc882a47fe478dc3f407307c157->leave($__internal_c838a0d23fa5dac015098e1a340ec41f5e6b0fc882a47fe478dc3f407307c157_prof);

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
