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
        $__internal_d80b88c9b6a9a9a2f4abb693f08922ede7ce4b2918a950f74492dff098f61319 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d80b88c9b6a9a9a2f4abb693f08922ede7ce4b2918a950f74492dff098f61319->enter($__internal_d80b88c9b6a9a9a2f4abb693f08922ede7ce4b2918a950f74492dff098f61319_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_16b377b7d5255474027ab8066d58d1f9ebd7999fdbf9c875aed41bffd48233bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16b377b7d5255474027ab8066d58d1f9ebd7999fdbf9c875aed41bffd48233bc->enter($__internal_16b377b7d5255474027ab8066d58d1f9ebd7999fdbf9c875aed41bffd48233bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_d80b88c9b6a9a9a2f4abb693f08922ede7ce4b2918a950f74492dff098f61319->leave($__internal_d80b88c9b6a9a9a2f4abb693f08922ede7ce4b2918a950f74492dff098f61319_prof);

        
        $__internal_16b377b7d5255474027ab8066d58d1f9ebd7999fdbf9c875aed41bffd48233bc->leave($__internal_16b377b7d5255474027ab8066d58d1f9ebd7999fdbf9c875aed41bffd48233bc_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_ea5df90ec2fedab06f8245e020d3a51b622aece316cd43a5f0030cc19767fb08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea5df90ec2fedab06f8245e020d3a51b622aece316cd43a5f0030cc19767fb08->enter($__internal_ea5df90ec2fedab06f8245e020d3a51b622aece316cd43a5f0030cc19767fb08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_ee2b29cbe2c13a7a363a75370773404d9a19874f90302e08407ec5de1cb5094c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee2b29cbe2c13a7a363a75370773404d9a19874f90302e08407ec5de1cb5094c->enter($__internal_ee2b29cbe2c13a7a363a75370773404d9a19874f90302e08407ec5de1cb5094c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_ee2b29cbe2c13a7a363a75370773404d9a19874f90302e08407ec5de1cb5094c->leave($__internal_ee2b29cbe2c13a7a363a75370773404d9a19874f90302e08407ec5de1cb5094c_prof);

        
        $__internal_ea5df90ec2fedab06f8245e020d3a51b622aece316cd43a5f0030cc19767fb08->leave($__internal_ea5df90ec2fedab06f8245e020d3a51b622aece316cd43a5f0030cc19767fb08_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_a73825334f3aae2e6ae0028c7034d963a1571e45f56b77bb158201297df93ba7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a73825334f3aae2e6ae0028c7034d963a1571e45f56b77bb158201297df93ba7->enter($__internal_a73825334f3aae2e6ae0028c7034d963a1571e45f56b77bb158201297df93ba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_ce1a752574ed98a43c4df11fb877c6f056d8660b5d00f43f36275975c289b974 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce1a752574ed98a43c4df11fb877c6f056d8660b5d00f43f36275975c289b974->enter($__internal_ce1a752574ed98a43c4df11fb877c6f056d8660b5d00f43f36275975c289b974_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_ce1a752574ed98a43c4df11fb877c6f056d8660b5d00f43f36275975c289b974->leave($__internal_ce1a752574ed98a43c4df11fb877c6f056d8660b5d00f43f36275975c289b974_prof);

        
        $__internal_a73825334f3aae2e6ae0028c7034d963a1571e45f56b77bb158201297df93ba7->leave($__internal_a73825334f3aae2e6ae0028c7034d963a1571e45f56b77bb158201297df93ba7_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_aba35ee1a79d3c541a9f6f738dee9a6bb46ec2b19ada73066f735e525705c3be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aba35ee1a79d3c541a9f6f738dee9a6bb46ec2b19ada73066f735e525705c3be->enter($__internal_aba35ee1a79d3c541a9f6f738dee9a6bb46ec2b19ada73066f735e525705c3be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_7d691c64326007384d33310019b0151e3a088b7457162b8880a1e3243c287027 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d691c64326007384d33310019b0151e3a088b7457162b8880a1e3243c287027->enter($__internal_7d691c64326007384d33310019b0151e3a088b7457162b8880a1e3243c287027_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_7d691c64326007384d33310019b0151e3a088b7457162b8880a1e3243c287027->leave($__internal_7d691c64326007384d33310019b0151e3a088b7457162b8880a1e3243c287027_prof);

        
        $__internal_aba35ee1a79d3c541a9f6f738dee9a6bb46ec2b19ada73066f735e525705c3be->leave($__internal_aba35ee1a79d3c541a9f6f738dee9a6bb46ec2b19ada73066f735e525705c3be_prof);

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
