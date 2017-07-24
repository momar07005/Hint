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
        $__internal_c71d466c645879ba4b33f773c928b4df25ca5ae7a4fc9c5e2f0742b6448d24d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c71d466c645879ba4b33f773c928b4df25ca5ae7a4fc9c5e2f0742b6448d24d9->enter($__internal_c71d466c645879ba4b33f773c928b4df25ca5ae7a4fc9c5e2f0742b6448d24d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_849e8b90816b1e4b9ae3482d4f8fbecf81cf8a93be67d659d692ffe1c1fb1240 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_849e8b90816b1e4b9ae3482d4f8fbecf81cf8a93be67d659d692ffe1c1fb1240->enter($__internal_849e8b90816b1e4b9ae3482d4f8fbecf81cf8a93be67d659d692ffe1c1fb1240_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_c71d466c645879ba4b33f773c928b4df25ca5ae7a4fc9c5e2f0742b6448d24d9->leave($__internal_c71d466c645879ba4b33f773c928b4df25ca5ae7a4fc9c5e2f0742b6448d24d9_prof);

        
        $__internal_849e8b90816b1e4b9ae3482d4f8fbecf81cf8a93be67d659d692ffe1c1fb1240->leave($__internal_849e8b90816b1e4b9ae3482d4f8fbecf81cf8a93be67d659d692ffe1c1fb1240_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_4ab97dd58a228b0b647170451f97eca43468ebcb04a6ba071419e0e6d0443f9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ab97dd58a228b0b647170451f97eca43468ebcb04a6ba071419e0e6d0443f9e->enter($__internal_4ab97dd58a228b0b647170451f97eca43468ebcb04a6ba071419e0e6d0443f9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_66c5ac8ed7fa1edaf322c9ca5af3da45dcb3a7e8489fba989cfbd7e215bb25ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66c5ac8ed7fa1edaf322c9ca5af3da45dcb3a7e8489fba989cfbd7e215bb25ab->enter($__internal_66c5ac8ed7fa1edaf322c9ca5af3da45dcb3a7e8489fba989cfbd7e215bb25ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_66c5ac8ed7fa1edaf322c9ca5af3da45dcb3a7e8489fba989cfbd7e215bb25ab->leave($__internal_66c5ac8ed7fa1edaf322c9ca5af3da45dcb3a7e8489fba989cfbd7e215bb25ab_prof);

        
        $__internal_4ab97dd58a228b0b647170451f97eca43468ebcb04a6ba071419e0e6d0443f9e->leave($__internal_4ab97dd58a228b0b647170451f97eca43468ebcb04a6ba071419e0e6d0443f9e_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_02fe882997a1f1e8e7a68a58ab4dd0a87016a9aece7bcbb9e36aec46a8efa66c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02fe882997a1f1e8e7a68a58ab4dd0a87016a9aece7bcbb9e36aec46a8efa66c->enter($__internal_02fe882997a1f1e8e7a68a58ab4dd0a87016a9aece7bcbb9e36aec46a8efa66c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_d6d57e3cbb7a7e7c0f05020f942e4e57138cf6e0e51607682a084f1431ca65f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6d57e3cbb7a7e7c0f05020f942e4e57138cf6e0e51607682a084f1431ca65f3->enter($__internal_d6d57e3cbb7a7e7c0f05020f942e4e57138cf6e0e51607682a084f1431ca65f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_d6d57e3cbb7a7e7c0f05020f942e4e57138cf6e0e51607682a084f1431ca65f3->leave($__internal_d6d57e3cbb7a7e7c0f05020f942e4e57138cf6e0e51607682a084f1431ca65f3_prof);

        
        $__internal_02fe882997a1f1e8e7a68a58ab4dd0a87016a9aece7bcbb9e36aec46a8efa66c->leave($__internal_02fe882997a1f1e8e7a68a58ab4dd0a87016a9aece7bcbb9e36aec46a8efa66c_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_84bcac84bca9c3d16ce0c13cccfd055e1e371988969399ff1d962629e02253f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84bcac84bca9c3d16ce0c13cccfd055e1e371988969399ff1d962629e02253f9->enter($__internal_84bcac84bca9c3d16ce0c13cccfd055e1e371988969399ff1d962629e02253f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_08ba617eccc9fa6a92ef8b44c540c79d8c74cce188178b1b29046cb0afd403e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08ba617eccc9fa6a92ef8b44c540c79d8c74cce188178b1b29046cb0afd403e1->enter($__internal_08ba617eccc9fa6a92ef8b44c540c79d8c74cce188178b1b29046cb0afd403e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_08ba617eccc9fa6a92ef8b44c540c79d8c74cce188178b1b29046cb0afd403e1->leave($__internal_08ba617eccc9fa6a92ef8b44c540c79d8c74cce188178b1b29046cb0afd403e1_prof);

        
        $__internal_84bcac84bca9c3d16ce0c13cccfd055e1e371988969399ff1d962629e02253f9->leave($__internal_84bcac84bca9c3d16ce0c13cccfd055e1e371988969399ff1d962629e02253f9_prof);

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
