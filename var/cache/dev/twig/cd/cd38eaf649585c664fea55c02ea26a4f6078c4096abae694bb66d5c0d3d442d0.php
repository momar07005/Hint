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
        $__internal_ec525771fa95bcd61739f848883ebbeb384cfe983a48523c5ce932b4c071e1d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec525771fa95bcd61739f848883ebbeb384cfe983a48523c5ce932b4c071e1d1->enter($__internal_ec525771fa95bcd61739f848883ebbeb384cfe983a48523c5ce932b4c071e1d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_511bc7ecf6326614ab7c293578bc78eab863435be7367a797256d6da1fdf1ce6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_511bc7ecf6326614ab7c293578bc78eab863435be7367a797256d6da1fdf1ce6->enter($__internal_511bc7ecf6326614ab7c293578bc78eab863435be7367a797256d6da1fdf1ce6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_ec525771fa95bcd61739f848883ebbeb384cfe983a48523c5ce932b4c071e1d1->leave($__internal_ec525771fa95bcd61739f848883ebbeb384cfe983a48523c5ce932b4c071e1d1_prof);

        
        $__internal_511bc7ecf6326614ab7c293578bc78eab863435be7367a797256d6da1fdf1ce6->leave($__internal_511bc7ecf6326614ab7c293578bc78eab863435be7367a797256d6da1fdf1ce6_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_363259e931ef5b0699101a44cac1d7d0019265a9f5fa12e33cf866589ff230ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_363259e931ef5b0699101a44cac1d7d0019265a9f5fa12e33cf866589ff230ca->enter($__internal_363259e931ef5b0699101a44cac1d7d0019265a9f5fa12e33cf866589ff230ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_48225c95851bffb5d28e1301d3bac42b3a2b620d675f6991abd0eb025d75bc06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48225c95851bffb5d28e1301d3bac42b3a2b620d675f6991abd0eb025d75bc06->enter($__internal_48225c95851bffb5d28e1301d3bac42b3a2b620d675f6991abd0eb025d75bc06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_48225c95851bffb5d28e1301d3bac42b3a2b620d675f6991abd0eb025d75bc06->leave($__internal_48225c95851bffb5d28e1301d3bac42b3a2b620d675f6991abd0eb025d75bc06_prof);

        
        $__internal_363259e931ef5b0699101a44cac1d7d0019265a9f5fa12e33cf866589ff230ca->leave($__internal_363259e931ef5b0699101a44cac1d7d0019265a9f5fa12e33cf866589ff230ca_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_9cd1df35f53912c886867876e64a7089c49c0df41745aa2c7079f3386936b7fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cd1df35f53912c886867876e64a7089c49c0df41745aa2c7079f3386936b7fb->enter($__internal_9cd1df35f53912c886867876e64a7089c49c0df41745aa2c7079f3386936b7fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_982e20263ba7cd8f96d6db681fe95610c6c7056449d8e08777d3b4a4de00842f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_982e20263ba7cd8f96d6db681fe95610c6c7056449d8e08777d3b4a4de00842f->enter($__internal_982e20263ba7cd8f96d6db681fe95610c6c7056449d8e08777d3b4a4de00842f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_982e20263ba7cd8f96d6db681fe95610c6c7056449d8e08777d3b4a4de00842f->leave($__internal_982e20263ba7cd8f96d6db681fe95610c6c7056449d8e08777d3b4a4de00842f_prof);

        
        $__internal_9cd1df35f53912c886867876e64a7089c49c0df41745aa2c7079f3386936b7fb->leave($__internal_9cd1df35f53912c886867876e64a7089c49c0df41745aa2c7079f3386936b7fb_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_8eb97b1713e16024cf65e36f9f67a349c137a738a416659f7bfee6ecdc26deb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8eb97b1713e16024cf65e36f9f67a349c137a738a416659f7bfee6ecdc26deb4->enter($__internal_8eb97b1713e16024cf65e36f9f67a349c137a738a416659f7bfee6ecdc26deb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_b7036c7fb28846e383c6484287a5c626fb04a78c1d3fcda3ef14dd5046b07140 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7036c7fb28846e383c6484287a5c626fb04a78c1d3fcda3ef14dd5046b07140->enter($__internal_b7036c7fb28846e383c6484287a5c626fb04a78c1d3fcda3ef14dd5046b07140_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_b7036c7fb28846e383c6484287a5c626fb04a78c1d3fcda3ef14dd5046b07140->leave($__internal_b7036c7fb28846e383c6484287a5c626fb04a78c1d3fcda3ef14dd5046b07140_prof);

        
        $__internal_8eb97b1713e16024cf65e36f9f67a349c137a738a416659f7bfee6ecdc26deb4->leave($__internal_8eb97b1713e16024cf65e36f9f67a349c137a738a416659f7bfee6ecdc26deb4_prof);

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
