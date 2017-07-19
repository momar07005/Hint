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
        $__internal_b9004ab2cd68be52cb9d5fc94cdf8161e1436178a3ea7da8dc34af7fc1bba483 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9004ab2cd68be52cb9d5fc94cdf8161e1436178a3ea7da8dc34af7fc1bba483->enter($__internal_b9004ab2cd68be52cb9d5fc94cdf8161e1436178a3ea7da8dc34af7fc1bba483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_78e74fdc4934b619f834f0e96bc02b516d86aadbcba91afc11edf380e5ab1f72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78e74fdc4934b619f834f0e96bc02b516d86aadbcba91afc11edf380e5ab1f72->enter($__internal_78e74fdc4934b619f834f0e96bc02b516d86aadbcba91afc11edf380e5ab1f72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_b9004ab2cd68be52cb9d5fc94cdf8161e1436178a3ea7da8dc34af7fc1bba483->leave($__internal_b9004ab2cd68be52cb9d5fc94cdf8161e1436178a3ea7da8dc34af7fc1bba483_prof);

        
        $__internal_78e74fdc4934b619f834f0e96bc02b516d86aadbcba91afc11edf380e5ab1f72->leave($__internal_78e74fdc4934b619f834f0e96bc02b516d86aadbcba91afc11edf380e5ab1f72_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_79498a7177ade545716587830c7a8c83480284a5cb4c73871deea5558b626182 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79498a7177ade545716587830c7a8c83480284a5cb4c73871deea5558b626182->enter($__internal_79498a7177ade545716587830c7a8c83480284a5cb4c73871deea5558b626182_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_26ab660c5db6c8c1c3821d696102b4ddf63e165ff5fc4fc911eb98028cb63bfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26ab660c5db6c8c1c3821d696102b4ddf63e165ff5fc4fc911eb98028cb63bfc->enter($__internal_26ab660c5db6c8c1c3821d696102b4ddf63e165ff5fc4fc911eb98028cb63bfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_26ab660c5db6c8c1c3821d696102b4ddf63e165ff5fc4fc911eb98028cb63bfc->leave($__internal_26ab660c5db6c8c1c3821d696102b4ddf63e165ff5fc4fc911eb98028cb63bfc_prof);

        
        $__internal_79498a7177ade545716587830c7a8c83480284a5cb4c73871deea5558b626182->leave($__internal_79498a7177ade545716587830c7a8c83480284a5cb4c73871deea5558b626182_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_a5eca5019dafec4a54452b6f522edff801afc8612ae5f8e40bdf733f75d1c48e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5eca5019dafec4a54452b6f522edff801afc8612ae5f8e40bdf733f75d1c48e->enter($__internal_a5eca5019dafec4a54452b6f522edff801afc8612ae5f8e40bdf733f75d1c48e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_955487a6af8d05192307c1a9da08a9ee314915e6755aff6b9863417695097335 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_955487a6af8d05192307c1a9da08a9ee314915e6755aff6b9863417695097335->enter($__internal_955487a6af8d05192307c1a9da08a9ee314915e6755aff6b9863417695097335_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_955487a6af8d05192307c1a9da08a9ee314915e6755aff6b9863417695097335->leave($__internal_955487a6af8d05192307c1a9da08a9ee314915e6755aff6b9863417695097335_prof);

        
        $__internal_a5eca5019dafec4a54452b6f522edff801afc8612ae5f8e40bdf733f75d1c48e->leave($__internal_a5eca5019dafec4a54452b6f522edff801afc8612ae5f8e40bdf733f75d1c48e_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_662d8cdf4a4b5f11f2145bf2dfbe2bf2a4fbc39007f3c17faecdd3c3a4a3660f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_662d8cdf4a4b5f11f2145bf2dfbe2bf2a4fbc39007f3c17faecdd3c3a4a3660f->enter($__internal_662d8cdf4a4b5f11f2145bf2dfbe2bf2a4fbc39007f3c17faecdd3c3a4a3660f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_cad4fdb3f7db6a0bfcfcb02391715c15ad9417f23e4d8642354980c4be4e71dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cad4fdb3f7db6a0bfcfcb02391715c15ad9417f23e4d8642354980c4be4e71dd->enter($__internal_cad4fdb3f7db6a0bfcfcb02391715c15ad9417f23e4d8642354980c4be4e71dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_cad4fdb3f7db6a0bfcfcb02391715c15ad9417f23e4d8642354980c4be4e71dd->leave($__internal_cad4fdb3f7db6a0bfcfcb02391715c15ad9417f23e4d8642354980c4be4e71dd_prof);

        
        $__internal_662d8cdf4a4b5f11f2145bf2dfbe2bf2a4fbc39007f3c17faecdd3c3a4a3660f->leave($__internal_662d8cdf4a4b5f11f2145bf2dfbe2bf2a4fbc39007f3c17faecdd3c3a4a3660f_prof);

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
