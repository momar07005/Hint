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
        $__internal_7a57a5a280b05da93c4d4a9bb64afa80dcd4adc68d3ed9f734582c79a3e4e74a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a57a5a280b05da93c4d4a9bb64afa80dcd4adc68d3ed9f734582c79a3e4e74a->enter($__internal_7a57a5a280b05da93c4d4a9bb64afa80dcd4adc68d3ed9f734582c79a3e4e74a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_912e323e4b65e681aed20a58c0e39865c13a8515196b0fe21c409b5e6c64e46a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_912e323e4b65e681aed20a58c0e39865c13a8515196b0fe21c409b5e6c64e46a->enter($__internal_912e323e4b65e681aed20a58c0e39865c13a8515196b0fe21c409b5e6c64e46a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_7a57a5a280b05da93c4d4a9bb64afa80dcd4adc68d3ed9f734582c79a3e4e74a->leave($__internal_7a57a5a280b05da93c4d4a9bb64afa80dcd4adc68d3ed9f734582c79a3e4e74a_prof);

        
        $__internal_912e323e4b65e681aed20a58c0e39865c13a8515196b0fe21c409b5e6c64e46a->leave($__internal_912e323e4b65e681aed20a58c0e39865c13a8515196b0fe21c409b5e6c64e46a_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_2906e97592b5c5c79278cfafbadd300d332c0e10a2fb3a9fafba10ecb4edc5a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2906e97592b5c5c79278cfafbadd300d332c0e10a2fb3a9fafba10ecb4edc5a4->enter($__internal_2906e97592b5c5c79278cfafbadd300d332c0e10a2fb3a9fafba10ecb4edc5a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_b9a60f5524eca31f4250f37e63ea26ddb0ff978948f488d156d62d3aadd94c00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9a60f5524eca31f4250f37e63ea26ddb0ff978948f488d156d62d3aadd94c00->enter($__internal_b9a60f5524eca31f4250f37e63ea26ddb0ff978948f488d156d62d3aadd94c00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_b9a60f5524eca31f4250f37e63ea26ddb0ff978948f488d156d62d3aadd94c00->leave($__internal_b9a60f5524eca31f4250f37e63ea26ddb0ff978948f488d156d62d3aadd94c00_prof);

        
        $__internal_2906e97592b5c5c79278cfafbadd300d332c0e10a2fb3a9fafba10ecb4edc5a4->leave($__internal_2906e97592b5c5c79278cfafbadd300d332c0e10a2fb3a9fafba10ecb4edc5a4_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_b904d4c40305026e59a9de459191c5be3ef5929d742dd88eaa3264bc79453683 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b904d4c40305026e59a9de459191c5be3ef5929d742dd88eaa3264bc79453683->enter($__internal_b904d4c40305026e59a9de459191c5be3ef5929d742dd88eaa3264bc79453683_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_b97286ea80afa0392205e86aa40188b0a91851c23a4bb50a99e14b5b64f9a83b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b97286ea80afa0392205e86aa40188b0a91851c23a4bb50a99e14b5b64f9a83b->enter($__internal_b97286ea80afa0392205e86aa40188b0a91851c23a4bb50a99e14b5b64f9a83b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_b97286ea80afa0392205e86aa40188b0a91851c23a4bb50a99e14b5b64f9a83b->leave($__internal_b97286ea80afa0392205e86aa40188b0a91851c23a4bb50a99e14b5b64f9a83b_prof);

        
        $__internal_b904d4c40305026e59a9de459191c5be3ef5929d742dd88eaa3264bc79453683->leave($__internal_b904d4c40305026e59a9de459191c5be3ef5929d742dd88eaa3264bc79453683_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_711d352eb278bb64eb1c9712df076d87adc7e7866494fd83645afbddbb583daa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_711d352eb278bb64eb1c9712df076d87adc7e7866494fd83645afbddbb583daa->enter($__internal_711d352eb278bb64eb1c9712df076d87adc7e7866494fd83645afbddbb583daa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_f0cf36137257bb3ca28835c5f034bcbd3bac080f68f4d8cb64c7a537e0b7b2a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0cf36137257bb3ca28835c5f034bcbd3bac080f68f4d8cb64c7a537e0b7b2a5->enter($__internal_f0cf36137257bb3ca28835c5f034bcbd3bac080f68f4d8cb64c7a537e0b7b2a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_f0cf36137257bb3ca28835c5f034bcbd3bac080f68f4d8cb64c7a537e0b7b2a5->leave($__internal_f0cf36137257bb3ca28835c5f034bcbd3bac080f68f4d8cb64c7a537e0b7b2a5_prof);

        
        $__internal_711d352eb278bb64eb1c9712df076d87adc7e7866494fd83645afbddbb583daa->leave($__internal_711d352eb278bb64eb1c9712df076d87adc7e7866494fd83645afbddbb583daa_prof);

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
