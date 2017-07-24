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
        $__internal_65158c780ecaaf119db87198153e091157d25e34448e6afedbbd152b7c2601d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65158c780ecaaf119db87198153e091157d25e34448e6afedbbd152b7c2601d9->enter($__internal_65158c780ecaaf119db87198153e091157d25e34448e6afedbbd152b7c2601d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_f7ef91f208191e14665339feaca79e926d90dbf4634f9dcec65bca98b584bd17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7ef91f208191e14665339feaca79e926d90dbf4634f9dcec65bca98b584bd17->enter($__internal_f7ef91f208191e14665339feaca79e926d90dbf4634f9dcec65bca98b584bd17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_65158c780ecaaf119db87198153e091157d25e34448e6afedbbd152b7c2601d9->leave($__internal_65158c780ecaaf119db87198153e091157d25e34448e6afedbbd152b7c2601d9_prof);

        
        $__internal_f7ef91f208191e14665339feaca79e926d90dbf4634f9dcec65bca98b584bd17->leave($__internal_f7ef91f208191e14665339feaca79e926d90dbf4634f9dcec65bca98b584bd17_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_bb80389e7ada5568f39218bb39f5ff0ce5ebcd55a5e3f8466259947e29620581 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb80389e7ada5568f39218bb39f5ff0ce5ebcd55a5e3f8466259947e29620581->enter($__internal_bb80389e7ada5568f39218bb39f5ff0ce5ebcd55a5e3f8466259947e29620581_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_46ad09f63064e9ab633233da5b585aa1cefe24908a363bcf114f7deb1dbdd494 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46ad09f63064e9ab633233da5b585aa1cefe24908a363bcf114f7deb1dbdd494->enter($__internal_46ad09f63064e9ab633233da5b585aa1cefe24908a363bcf114f7deb1dbdd494_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_46ad09f63064e9ab633233da5b585aa1cefe24908a363bcf114f7deb1dbdd494->leave($__internal_46ad09f63064e9ab633233da5b585aa1cefe24908a363bcf114f7deb1dbdd494_prof);

        
        $__internal_bb80389e7ada5568f39218bb39f5ff0ce5ebcd55a5e3f8466259947e29620581->leave($__internal_bb80389e7ada5568f39218bb39f5ff0ce5ebcd55a5e3f8466259947e29620581_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_c4e6b3dd5c72fe51c9fbec09a14f652ace883d37d85675bfc4e5dae4f5de6e0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4e6b3dd5c72fe51c9fbec09a14f652ace883d37d85675bfc4e5dae4f5de6e0e->enter($__internal_c4e6b3dd5c72fe51c9fbec09a14f652ace883d37d85675bfc4e5dae4f5de6e0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_c8a62425a9a2b327a61daf93fd1e38680619157c67039c2cb75eaa2e549d48d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8a62425a9a2b327a61daf93fd1e38680619157c67039c2cb75eaa2e549d48d1->enter($__internal_c8a62425a9a2b327a61daf93fd1e38680619157c67039c2cb75eaa2e549d48d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_c8a62425a9a2b327a61daf93fd1e38680619157c67039c2cb75eaa2e549d48d1->leave($__internal_c8a62425a9a2b327a61daf93fd1e38680619157c67039c2cb75eaa2e549d48d1_prof);

        
        $__internal_c4e6b3dd5c72fe51c9fbec09a14f652ace883d37d85675bfc4e5dae4f5de6e0e->leave($__internal_c4e6b3dd5c72fe51c9fbec09a14f652ace883d37d85675bfc4e5dae4f5de6e0e_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_43a7260a0365fd563ebf9ea2cca54131a752c7bac3e97e3411436ad35b3894e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43a7260a0365fd563ebf9ea2cca54131a752c7bac3e97e3411436ad35b3894e7->enter($__internal_43a7260a0365fd563ebf9ea2cca54131a752c7bac3e97e3411436ad35b3894e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_ff11bd3a59d0cd2e073dd1b6c45f5db2450fe58e2cc9408ce389c6d954529373 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff11bd3a59d0cd2e073dd1b6c45f5db2450fe58e2cc9408ce389c6d954529373->enter($__internal_ff11bd3a59d0cd2e073dd1b6c45f5db2450fe58e2cc9408ce389c6d954529373_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_ff11bd3a59d0cd2e073dd1b6c45f5db2450fe58e2cc9408ce389c6d954529373->leave($__internal_ff11bd3a59d0cd2e073dd1b6c45f5db2450fe58e2cc9408ce389c6d954529373_prof);

        
        $__internal_43a7260a0365fd563ebf9ea2cca54131a752c7bac3e97e3411436ad35b3894e7->leave($__internal_43a7260a0365fd563ebf9ea2cca54131a752c7bac3e97e3411436ad35b3894e7_prof);

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
