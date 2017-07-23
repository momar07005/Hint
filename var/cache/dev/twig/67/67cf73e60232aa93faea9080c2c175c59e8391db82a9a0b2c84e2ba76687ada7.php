<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_99de65678d3e0e9604278d2b94bc840211fdecc14dc4a30f967cc73b2e6289ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_467a33f25729a18559337a94b063fc6a0d6629fe091d3dd7bd6d8b0f5b83bb79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_467a33f25729a18559337a94b063fc6a0d6629fe091d3dd7bd6d8b0f5b83bb79->enter($__internal_467a33f25729a18559337a94b063fc6a0d6629fe091d3dd7bd6d8b0f5b83bb79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_ff870c7346463563a9578a88fd8923fb324f847f0ae1025ce9eca242072d0fbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff870c7346463563a9578a88fd8923fb324f847f0ae1025ce9eca242072d0fbb->enter($__internal_ff870c7346463563a9578a88fd8923fb324f847f0ae1025ce9eca242072d0fbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_467a33f25729a18559337a94b063fc6a0d6629fe091d3dd7bd6d8b0f5b83bb79->leave($__internal_467a33f25729a18559337a94b063fc6a0d6629fe091d3dd7bd6d8b0f5b83bb79_prof);

        
        $__internal_ff870c7346463563a9578a88fd8923fb324f847f0ae1025ce9eca242072d0fbb->leave($__internal_ff870c7346463563a9578a88fd8923fb324f847f0ae1025ce9eca242072d0fbb_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5ad6b3a45648d306751724b0c74b125c697606c34b58c37511b627f25373c04e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ad6b3a45648d306751724b0c74b125c697606c34b58c37511b627f25373c04e->enter($__internal_5ad6b3a45648d306751724b0c74b125c697606c34b58c37511b627f25373c04e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a7d29350116f70b22b84a061d942d555d6735981b5194a9b7530b1db2418bb45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7d29350116f70b22b84a061d942d555d6735981b5194a9b7530b1db2418bb45->enter($__internal_a7d29350116f70b22b84a061d942d555d6735981b5194a9b7530b1db2418bb45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_a7d29350116f70b22b84a061d942d555d6735981b5194a9b7530b1db2418bb45->leave($__internal_a7d29350116f70b22b84a061d942d555d6735981b5194a9b7530b1db2418bb45_prof);

        
        $__internal_5ad6b3a45648d306751724b0c74b125c697606c34b58c37511b627f25373c04e->leave($__internal_5ad6b3a45648d306751724b0c74b125c697606c34b58c37511b627f25373c04e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:confirmed.html.twig", "C:\\Hint\\app/Resources/FOSUserBundle/views/Registration/confirmed.html.twig");
    }
}
