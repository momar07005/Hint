<?php

/* HWIOAuthBundle:Connect:login.html.twig */
class __TwigTemplate_919fe88d3fe42d15fabf432e4244ceae0f2076b78b0dd3865229c125913f9a07 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("HWIOAuthBundle::layout.html.twig", "HWIOAuthBundle:Connect:login.html.twig", 1);
        $this->blocks = array(
            'hwi_oauth_content' => array($this, 'block_hwi_oauth_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "HWIOAuthBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_96a9667f599154c45f5962daca1b0791dca064556a2050d154beb319bc82b4c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96a9667f599154c45f5962daca1b0791dca064556a2050d154beb319bc82b4c5->enter($__internal_96a9667f599154c45f5962daca1b0791dca064556a2050d154beb319bc82b4c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HWIOAuthBundle:Connect:login.html.twig"));

        $__internal_3e706db84fc4dc99a00fb59473e7c4a2d331729f28a7a14830b8f964b6529f90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e706db84fc4dc99a00fb59473e7c4a2d331729f28a7a14830b8f964b6529f90->enter($__internal_3e706db84fc4dc99a00fb59473e7c4a2d331729f28a7a14830b8f964b6529f90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HWIOAuthBundle:Connect:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_96a9667f599154c45f5962daca1b0791dca064556a2050d154beb319bc82b4c5->leave($__internal_96a9667f599154c45f5962daca1b0791dca064556a2050d154beb319bc82b4c5_prof);

        
        $__internal_3e706db84fc4dc99a00fb59473e7c4a2d331729f28a7a14830b8f964b6529f90->leave($__internal_3e706db84fc4dc99a00fb59473e7c4a2d331729f28a7a14830b8f964b6529f90_prof);

    }

    // line 3
    public function block_hwi_oauth_content($context, array $blocks = array())
    {
        $__internal_fe3a4876780db23b869649a26416a18cd492ded807ab592a829cf85332be1475 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe3a4876780db23b869649a26416a18cd492ded807ab592a829cf85332be1475->enter($__internal_fe3a4876780db23b869649a26416a18cd492ded807ab592a829cf85332be1475_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

        $__internal_0b71941df17e8928d2babbf19bd5730568417ad06aae771abc0e99390b280fe9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b71941df17e8928d2babbf19bd5730568417ad06aae771abc0e99390b280fe9->enter($__internal_0b71941df17e8928d2babbf19bd5730568417ad06aae771abc0e99390b280fe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

        // line 4
        echo "    ";
        if ((array_key_exists("error", $context) && (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")))) {
            // line 5
            echo "        <span>";
            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "html", null, true);
            echo "</span>
    ";
        }
        // line 7
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('HWI\Bundle\OAuthBundle\Twig\Extension\OAuthExtension')->getResourceOwners());
        foreach ($context['_seq'] as $context["_key"] => $context["owner"]) {
            // line 8
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('HWI\Bundle\OAuthBundle\Twig\Extension\OAuthExtension')->getLoginUrl($context["owner"]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["owner"], array(), "HWIOAuthBundle"), "html", null, true);
            echo "</a> <br />
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['owner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_0b71941df17e8928d2babbf19bd5730568417ad06aae771abc0e99390b280fe9->leave($__internal_0b71941df17e8928d2babbf19bd5730568417ad06aae771abc0e99390b280fe9_prof);

        
        $__internal_fe3a4876780db23b869649a26416a18cd492ded807ab592a829cf85332be1475->leave($__internal_fe3a4876780db23b869649a26416a18cd492ded807ab592a829cf85332be1475_prof);

    }

    public function getTemplateName()
    {
        return "HWIOAuthBundle:Connect:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 8,  58 => 7,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'HWIOAuthBundle::layout.html.twig' %}

{% block hwi_oauth_content %}
    {% if error is defined and error %}
        <span>{{ error }}</span>
    {% endif %}
    {% for owner in hwi_oauth_resource_owners() %}
    <a href=\"{{ hwi_oauth_login_url(owner) }}\">{{ owner | trans({}, 'HWIOAuthBundle') }}</a> <br />
    {% endfor %}
{% endblock hwi_oauth_content %}
", "HWIOAuthBundle:Connect:login.html.twig", "/Users/mac/SymfonyProjects/Hint/app/Resources/HWIOAuthBundle/views/Connect/login.html.twig");
    }
}
