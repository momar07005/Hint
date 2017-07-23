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
        $__internal_7fe9041c9041a813c17f20acbfdcc066b4e60f1195fad2835f4be33202414ade = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fe9041c9041a813c17f20acbfdcc066b4e60f1195fad2835f4be33202414ade->enter($__internal_7fe9041c9041a813c17f20acbfdcc066b4e60f1195fad2835f4be33202414ade_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_ca4d516f5b545d49538e9a714ce7e7afd72b9b491dbb11793db9cdf1cb6bbc24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca4d516f5b545d49538e9a714ce7e7afd72b9b491dbb11793db9cdf1cb6bbc24->enter($__internal_ca4d516f5b545d49538e9a714ce7e7afd72b9b491dbb11793db9cdf1cb6bbc24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_7fe9041c9041a813c17f20acbfdcc066b4e60f1195fad2835f4be33202414ade->leave($__internal_7fe9041c9041a813c17f20acbfdcc066b4e60f1195fad2835f4be33202414ade_prof);

        
        $__internal_ca4d516f5b545d49538e9a714ce7e7afd72b9b491dbb11793db9cdf1cb6bbc24->leave($__internal_ca4d516f5b545d49538e9a714ce7e7afd72b9b491dbb11793db9cdf1cb6bbc24_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_03c5495533c477849ec07acea8fbd7f1365b58243ee55cee2db10936d8d2b1f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03c5495533c477849ec07acea8fbd7f1365b58243ee55cee2db10936d8d2b1f9->enter($__internal_03c5495533c477849ec07acea8fbd7f1365b58243ee55cee2db10936d8d2b1f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_303709acffc70f82aa3e981606fe391e2b3b81d19ac63f623f00b23e0a15c9fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_303709acffc70f82aa3e981606fe391e2b3b81d19ac63f623f00b23e0a15c9fe->enter($__internal_303709acffc70f82aa3e981606fe391e2b3b81d19ac63f623f00b23e0a15c9fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_303709acffc70f82aa3e981606fe391e2b3b81d19ac63f623f00b23e0a15c9fe->leave($__internal_303709acffc70f82aa3e981606fe391e2b3b81d19ac63f623f00b23e0a15c9fe_prof);

        
        $__internal_03c5495533c477849ec07acea8fbd7f1365b58243ee55cee2db10936d8d2b1f9->leave($__internal_03c5495533c477849ec07acea8fbd7f1365b58243ee55cee2db10936d8d2b1f9_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_e952e57f99f1dc6ac39bc204fc589d10adce6fca43ce5c2c64c487d81e27b07e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e952e57f99f1dc6ac39bc204fc589d10adce6fca43ce5c2c64c487d81e27b07e->enter($__internal_e952e57f99f1dc6ac39bc204fc589d10adce6fca43ce5c2c64c487d81e27b07e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_9bf2a439a131fafd337862d6aa33b0f037458fee01d4ecb3692000c2eeae2b8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bf2a439a131fafd337862d6aa33b0f037458fee01d4ecb3692000c2eeae2b8f->enter($__internal_9bf2a439a131fafd337862d6aa33b0f037458fee01d4ecb3692000c2eeae2b8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_9bf2a439a131fafd337862d6aa33b0f037458fee01d4ecb3692000c2eeae2b8f->leave($__internal_9bf2a439a131fafd337862d6aa33b0f037458fee01d4ecb3692000c2eeae2b8f_prof);

        
        $__internal_e952e57f99f1dc6ac39bc204fc589d10adce6fca43ce5c2c64c487d81e27b07e->leave($__internal_e952e57f99f1dc6ac39bc204fc589d10adce6fca43ce5c2c64c487d81e27b07e_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_6692e62207ed70632bdc06dca62331e6b2f3739a5a94ab123653034640050a02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6692e62207ed70632bdc06dca62331e6b2f3739a5a94ab123653034640050a02->enter($__internal_6692e62207ed70632bdc06dca62331e6b2f3739a5a94ab123653034640050a02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_3ff15668f010e7178723eb8ff8252e61c10cc90c69683f1cd84e955d84b4603b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ff15668f010e7178723eb8ff8252e61c10cc90c69683f1cd84e955d84b4603b->enter($__internal_3ff15668f010e7178723eb8ff8252e61c10cc90c69683f1cd84e955d84b4603b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_3ff15668f010e7178723eb8ff8252e61c10cc90c69683f1cd84e955d84b4603b->leave($__internal_3ff15668f010e7178723eb8ff8252e61c10cc90c69683f1cd84e955d84b4603b_prof);

        
        $__internal_6692e62207ed70632bdc06dca62331e6b2f3739a5a94ab123653034640050a02->leave($__internal_6692e62207ed70632bdc06dca62331e6b2f3739a5a94ab123653034640050a02_prof);

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
