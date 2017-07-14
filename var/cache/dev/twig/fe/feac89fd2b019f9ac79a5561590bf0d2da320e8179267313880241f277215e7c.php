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
        $__internal_e71b753b757b69eced993792d6969d171032143ff938f248ad18abf5d783b626 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e71b753b757b69eced993792d6969d171032143ff938f248ad18abf5d783b626->enter($__internal_e71b753b757b69eced993792d6969d171032143ff938f248ad18abf5d783b626_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_6d62579411620ef5217b4810ea7066f5d774a89bd621858f695a03c89d42d259 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d62579411620ef5217b4810ea7066f5d774a89bd621858f695a03c89d42d259->enter($__internal_6d62579411620ef5217b4810ea7066f5d774a89bd621858f695a03c89d42d259_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_e71b753b757b69eced993792d6969d171032143ff938f248ad18abf5d783b626->leave($__internal_e71b753b757b69eced993792d6969d171032143ff938f248ad18abf5d783b626_prof);

        
        $__internal_6d62579411620ef5217b4810ea7066f5d774a89bd621858f695a03c89d42d259->leave($__internal_6d62579411620ef5217b4810ea7066f5d774a89bd621858f695a03c89d42d259_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_bdad16880524ec5bf03ad0c840ecf7f9c7dad38d09a710db4a8604b43f8078f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdad16880524ec5bf03ad0c840ecf7f9c7dad38d09a710db4a8604b43f8078f4->enter($__internal_bdad16880524ec5bf03ad0c840ecf7f9c7dad38d09a710db4a8604b43f8078f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_db2259c8433567bf7d80db041bfcfb778c106bbfd9cb8432f68bc59380100782 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db2259c8433567bf7d80db041bfcfb778c106bbfd9cb8432f68bc59380100782->enter($__internal_db2259c8433567bf7d80db041bfcfb778c106bbfd9cb8432f68bc59380100782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_db2259c8433567bf7d80db041bfcfb778c106bbfd9cb8432f68bc59380100782->leave($__internal_db2259c8433567bf7d80db041bfcfb778c106bbfd9cb8432f68bc59380100782_prof);

        
        $__internal_bdad16880524ec5bf03ad0c840ecf7f9c7dad38d09a710db4a8604b43f8078f4->leave($__internal_bdad16880524ec5bf03ad0c840ecf7f9c7dad38d09a710db4a8604b43f8078f4_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_d5c68115e93b88bb50b28e283cb1729f01f8e42378a5a69efd9d4bc0134b0f7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5c68115e93b88bb50b28e283cb1729f01f8e42378a5a69efd9d4bc0134b0f7e->enter($__internal_d5c68115e93b88bb50b28e283cb1729f01f8e42378a5a69efd9d4bc0134b0f7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_2653462209de20f7fb67096909bf6a2dd595dcde29ffb2d27df27bc0354a32f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2653462209de20f7fb67096909bf6a2dd595dcde29ffb2d27df27bc0354a32f3->enter($__internal_2653462209de20f7fb67096909bf6a2dd595dcde29ffb2d27df27bc0354a32f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_2653462209de20f7fb67096909bf6a2dd595dcde29ffb2d27df27bc0354a32f3->leave($__internal_2653462209de20f7fb67096909bf6a2dd595dcde29ffb2d27df27bc0354a32f3_prof);

        
        $__internal_d5c68115e93b88bb50b28e283cb1729f01f8e42378a5a69efd9d4bc0134b0f7e->leave($__internal_d5c68115e93b88bb50b28e283cb1729f01f8e42378a5a69efd9d4bc0134b0f7e_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_4e0687bacdb2c1dcdd3518733a24b26bff274a89ff196f24433f2602fc9ad3d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e0687bacdb2c1dcdd3518733a24b26bff274a89ff196f24433f2602fc9ad3d1->enter($__internal_4e0687bacdb2c1dcdd3518733a24b26bff274a89ff196f24433f2602fc9ad3d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_5f3162e318059c7d9936781642c154ed98cbb52b07f356d302fd7d68694fd049 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f3162e318059c7d9936781642c154ed98cbb52b07f356d302fd7d68694fd049->enter($__internal_5f3162e318059c7d9936781642c154ed98cbb52b07f356d302fd7d68694fd049_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_5f3162e318059c7d9936781642c154ed98cbb52b07f356d302fd7d68694fd049->leave($__internal_5f3162e318059c7d9936781642c154ed98cbb52b07f356d302fd7d68694fd049_prof);

        
        $__internal_4e0687bacdb2c1dcdd3518733a24b26bff274a89ff196f24433f2602fc9ad3d1->leave($__internal_4e0687bacdb2c1dcdd3518733a24b26bff274a89ff196f24433f2602fc9ad3d1_prof);

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
