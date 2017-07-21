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
        $__internal_df1a4a3fb1afc84737485bbe8b6b2c7668476d477382a5428b1ba80188b3d8d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df1a4a3fb1afc84737485bbe8b6b2c7668476d477382a5428b1ba80188b3d8d5->enter($__internal_df1a4a3fb1afc84737485bbe8b6b2c7668476d477382a5428b1ba80188b3d8d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_59dd4877b0c308bbb3d138dd7f0edd15ac283cab1eb36f7b05b49bbfad2c938e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59dd4877b0c308bbb3d138dd7f0edd15ac283cab1eb36f7b05b49bbfad2c938e->enter($__internal_59dd4877b0c308bbb3d138dd7f0edd15ac283cab1eb36f7b05b49bbfad2c938e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_df1a4a3fb1afc84737485bbe8b6b2c7668476d477382a5428b1ba80188b3d8d5->leave($__internal_df1a4a3fb1afc84737485bbe8b6b2c7668476d477382a5428b1ba80188b3d8d5_prof);

        
        $__internal_59dd4877b0c308bbb3d138dd7f0edd15ac283cab1eb36f7b05b49bbfad2c938e->leave($__internal_59dd4877b0c308bbb3d138dd7f0edd15ac283cab1eb36f7b05b49bbfad2c938e_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_1e01124f0d50badda9e4646c75eea38dcd4784efcd1500101a35c35d3450cab6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e01124f0d50badda9e4646c75eea38dcd4784efcd1500101a35c35d3450cab6->enter($__internal_1e01124f0d50badda9e4646c75eea38dcd4784efcd1500101a35c35d3450cab6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_c5084f42810330015de7cd57d2df18e572f2b2d7c592f77ad88558c08d8ccdea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5084f42810330015de7cd57d2df18e572f2b2d7c592f77ad88558c08d8ccdea->enter($__internal_c5084f42810330015de7cd57d2df18e572f2b2d7c592f77ad88558c08d8ccdea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_c5084f42810330015de7cd57d2df18e572f2b2d7c592f77ad88558c08d8ccdea->leave($__internal_c5084f42810330015de7cd57d2df18e572f2b2d7c592f77ad88558c08d8ccdea_prof);

        
        $__internal_1e01124f0d50badda9e4646c75eea38dcd4784efcd1500101a35c35d3450cab6->leave($__internal_1e01124f0d50badda9e4646c75eea38dcd4784efcd1500101a35c35d3450cab6_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_8e260ecadb0880ac32c63ea5381fcdfb759d2f85f78d49358bfb5f97dca96f7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e260ecadb0880ac32c63ea5381fcdfb759d2f85f78d49358bfb5f97dca96f7d->enter($__internal_8e260ecadb0880ac32c63ea5381fcdfb759d2f85f78d49358bfb5f97dca96f7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_0ce24424c15059aa0f63ccba3151385f53743aa3bb9a5824e756f557e2876c5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ce24424c15059aa0f63ccba3151385f53743aa3bb9a5824e756f557e2876c5f->enter($__internal_0ce24424c15059aa0f63ccba3151385f53743aa3bb9a5824e756f557e2876c5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_0ce24424c15059aa0f63ccba3151385f53743aa3bb9a5824e756f557e2876c5f->leave($__internal_0ce24424c15059aa0f63ccba3151385f53743aa3bb9a5824e756f557e2876c5f_prof);

        
        $__internal_8e260ecadb0880ac32c63ea5381fcdfb759d2f85f78d49358bfb5f97dca96f7d->leave($__internal_8e260ecadb0880ac32c63ea5381fcdfb759d2f85f78d49358bfb5f97dca96f7d_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_db9ba4f7f65dcc46f5a4635c4e3b52b852cf97ba4781cfa591094eff5aa20630 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db9ba4f7f65dcc46f5a4635c4e3b52b852cf97ba4781cfa591094eff5aa20630->enter($__internal_db9ba4f7f65dcc46f5a4635c4e3b52b852cf97ba4781cfa591094eff5aa20630_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_0c1ebb5ec6f34c236b6fe26b928e6a4a31a3561355d123fc457f8b540b6af8aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c1ebb5ec6f34c236b6fe26b928e6a4a31a3561355d123fc457f8b540b6af8aa->enter($__internal_0c1ebb5ec6f34c236b6fe26b928e6a4a31a3561355d123fc457f8b540b6af8aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_0c1ebb5ec6f34c236b6fe26b928e6a4a31a3561355d123fc457f8b540b6af8aa->leave($__internal_0c1ebb5ec6f34c236b6fe26b928e6a4a31a3561355d123fc457f8b540b6af8aa_prof);

        
        $__internal_db9ba4f7f65dcc46f5a4635c4e3b52b852cf97ba4781cfa591094eff5aa20630->leave($__internal_db9ba4f7f65dcc46f5a4635c4e3b52b852cf97ba4781cfa591094eff5aa20630_prof);

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
