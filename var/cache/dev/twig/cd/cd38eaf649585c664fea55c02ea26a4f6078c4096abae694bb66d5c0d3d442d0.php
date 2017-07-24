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
        $__internal_fb0f09cf98642afa16cb212a23201c51bc02fcea16196a0d80970b2ef5875fe6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb0f09cf98642afa16cb212a23201c51bc02fcea16196a0d80970b2ef5875fe6->enter($__internal_fb0f09cf98642afa16cb212a23201c51bc02fcea16196a0d80970b2ef5875fe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_b2f7d83066459b414d444776a46c59717b851b9dca045c91e3a918a87cf4d060 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2f7d83066459b414d444776a46c59717b851b9dca045c91e3a918a87cf4d060->enter($__internal_b2f7d83066459b414d444776a46c59717b851b9dca045c91e3a918a87cf4d060_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_fb0f09cf98642afa16cb212a23201c51bc02fcea16196a0d80970b2ef5875fe6->leave($__internal_fb0f09cf98642afa16cb212a23201c51bc02fcea16196a0d80970b2ef5875fe6_prof);

        
        $__internal_b2f7d83066459b414d444776a46c59717b851b9dca045c91e3a918a87cf4d060->leave($__internal_b2f7d83066459b414d444776a46c59717b851b9dca045c91e3a918a87cf4d060_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_52b4d62e253da42ef992b66317acf523adf033b2726c26776889d0e5809f46e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52b4d62e253da42ef992b66317acf523adf033b2726c26776889d0e5809f46e6->enter($__internal_52b4d62e253da42ef992b66317acf523adf033b2726c26776889d0e5809f46e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_99652b88e6019614cdde9af903260d26308ef4e2b1645f7cdeb6c0078cc6cc52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99652b88e6019614cdde9af903260d26308ef4e2b1645f7cdeb6c0078cc6cc52->enter($__internal_99652b88e6019614cdde9af903260d26308ef4e2b1645f7cdeb6c0078cc6cc52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_99652b88e6019614cdde9af903260d26308ef4e2b1645f7cdeb6c0078cc6cc52->leave($__internal_99652b88e6019614cdde9af903260d26308ef4e2b1645f7cdeb6c0078cc6cc52_prof);

        
        $__internal_52b4d62e253da42ef992b66317acf523adf033b2726c26776889d0e5809f46e6->leave($__internal_52b4d62e253da42ef992b66317acf523adf033b2726c26776889d0e5809f46e6_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_d7ddb32046d338117745910b3e97b9b302851240137ac8cdd852543fb0b4073c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7ddb32046d338117745910b3e97b9b302851240137ac8cdd852543fb0b4073c->enter($__internal_d7ddb32046d338117745910b3e97b9b302851240137ac8cdd852543fb0b4073c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_06c9d746fe8cb2a93f34413f9cea19ebdc8f1964625affe7a4775c22e8bb5452 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06c9d746fe8cb2a93f34413f9cea19ebdc8f1964625affe7a4775c22e8bb5452->enter($__internal_06c9d746fe8cb2a93f34413f9cea19ebdc8f1964625affe7a4775c22e8bb5452_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_06c9d746fe8cb2a93f34413f9cea19ebdc8f1964625affe7a4775c22e8bb5452->leave($__internal_06c9d746fe8cb2a93f34413f9cea19ebdc8f1964625affe7a4775c22e8bb5452_prof);

        
        $__internal_d7ddb32046d338117745910b3e97b9b302851240137ac8cdd852543fb0b4073c->leave($__internal_d7ddb32046d338117745910b3e97b9b302851240137ac8cdd852543fb0b4073c_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_cdd7bae406b714ac780b270dd7b56b91dd808eebd54c258fa00eb388f4662967 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdd7bae406b714ac780b270dd7b56b91dd808eebd54c258fa00eb388f4662967->enter($__internal_cdd7bae406b714ac780b270dd7b56b91dd808eebd54c258fa00eb388f4662967_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_7cf2a16f0c1e99521bee7dad2895c6636975f13b5e2717ada67b25fd568cd0b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cf2a16f0c1e99521bee7dad2895c6636975f13b5e2717ada67b25fd568cd0b9->enter($__internal_7cf2a16f0c1e99521bee7dad2895c6636975f13b5e2717ada67b25fd568cd0b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_7cf2a16f0c1e99521bee7dad2895c6636975f13b5e2717ada67b25fd568cd0b9->leave($__internal_7cf2a16f0c1e99521bee7dad2895c6636975f13b5e2717ada67b25fd568cd0b9_prof);

        
        $__internal_cdd7bae406b714ac780b270dd7b56b91dd808eebd54c258fa00eb388f4662967->leave($__internal_cdd7bae406b714ac780b270dd7b56b91dd808eebd54c258fa00eb388f4662967_prof);

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
