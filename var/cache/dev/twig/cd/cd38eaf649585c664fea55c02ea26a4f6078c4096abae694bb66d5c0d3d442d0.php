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
        $__internal_3491a5e8b1d4f6390603ed58ad9685c5393b81e9e442cbb27a0318c3c37d0567 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3491a5e8b1d4f6390603ed58ad9685c5393b81e9e442cbb27a0318c3c37d0567->enter($__internal_3491a5e8b1d4f6390603ed58ad9685c5393b81e9e442cbb27a0318c3c37d0567_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_748a89dd1b74f9a97e67e1160effd88dd8bd0abaecae18e464aeb6de16a43b15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_748a89dd1b74f9a97e67e1160effd88dd8bd0abaecae18e464aeb6de16a43b15->enter($__internal_748a89dd1b74f9a97e67e1160effd88dd8bd0abaecae18e464aeb6de16a43b15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_3491a5e8b1d4f6390603ed58ad9685c5393b81e9e442cbb27a0318c3c37d0567->leave($__internal_3491a5e8b1d4f6390603ed58ad9685c5393b81e9e442cbb27a0318c3c37d0567_prof);

        
        $__internal_748a89dd1b74f9a97e67e1160effd88dd8bd0abaecae18e464aeb6de16a43b15->leave($__internal_748a89dd1b74f9a97e67e1160effd88dd8bd0abaecae18e464aeb6de16a43b15_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_3e6760714d6f7ebf292caedc936d693f3242ddf2662c7b10dcdf232b0c850b1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e6760714d6f7ebf292caedc936d693f3242ddf2662c7b10dcdf232b0c850b1e->enter($__internal_3e6760714d6f7ebf292caedc936d693f3242ddf2662c7b10dcdf232b0c850b1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_88d97df0558f5b66b3022e3817deb7cfa4428a1b28b02a0728a0a65960c4f39b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88d97df0558f5b66b3022e3817deb7cfa4428a1b28b02a0728a0a65960c4f39b->enter($__internal_88d97df0558f5b66b3022e3817deb7cfa4428a1b28b02a0728a0a65960c4f39b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_88d97df0558f5b66b3022e3817deb7cfa4428a1b28b02a0728a0a65960c4f39b->leave($__internal_88d97df0558f5b66b3022e3817deb7cfa4428a1b28b02a0728a0a65960c4f39b_prof);

        
        $__internal_3e6760714d6f7ebf292caedc936d693f3242ddf2662c7b10dcdf232b0c850b1e->leave($__internal_3e6760714d6f7ebf292caedc936d693f3242ddf2662c7b10dcdf232b0c850b1e_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_476ebf98b8b7c6b9a37d9bc24b092be6e6ac0777a2a44be006ccc3e032e4e4a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_476ebf98b8b7c6b9a37d9bc24b092be6e6ac0777a2a44be006ccc3e032e4e4a3->enter($__internal_476ebf98b8b7c6b9a37d9bc24b092be6e6ac0777a2a44be006ccc3e032e4e4a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_d5a469cf222406b935da1417723a272edb07c38cebcc62ccaae7045cdac21bcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5a469cf222406b935da1417723a272edb07c38cebcc62ccaae7045cdac21bcd->enter($__internal_d5a469cf222406b935da1417723a272edb07c38cebcc62ccaae7045cdac21bcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_d5a469cf222406b935da1417723a272edb07c38cebcc62ccaae7045cdac21bcd->leave($__internal_d5a469cf222406b935da1417723a272edb07c38cebcc62ccaae7045cdac21bcd_prof);

        
        $__internal_476ebf98b8b7c6b9a37d9bc24b092be6e6ac0777a2a44be006ccc3e032e4e4a3->leave($__internal_476ebf98b8b7c6b9a37d9bc24b092be6e6ac0777a2a44be006ccc3e032e4e4a3_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_a699e1837a1a7a373b5abd1dcac9b8a39a56349a7dc0fc7928def43035dacf3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a699e1837a1a7a373b5abd1dcac9b8a39a56349a7dc0fc7928def43035dacf3d->enter($__internal_a699e1837a1a7a373b5abd1dcac9b8a39a56349a7dc0fc7928def43035dacf3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_b48494f686726736f28ce615d5ab6cde02d0b7454e870846a7ecb48c0247c365 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b48494f686726736f28ce615d5ab6cde02d0b7454e870846a7ecb48c0247c365->enter($__internal_b48494f686726736f28ce615d5ab6cde02d0b7454e870846a7ecb48c0247c365_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_b48494f686726736f28ce615d5ab6cde02d0b7454e870846a7ecb48c0247c365->leave($__internal_b48494f686726736f28ce615d5ab6cde02d0b7454e870846a7ecb48c0247c365_prof);

        
        $__internal_a699e1837a1a7a373b5abd1dcac9b8a39a56349a7dc0fc7928def43035dacf3d->leave($__internal_a699e1837a1a7a373b5abd1dcac9b8a39a56349a7dc0fc7928def43035dacf3d_prof);

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
