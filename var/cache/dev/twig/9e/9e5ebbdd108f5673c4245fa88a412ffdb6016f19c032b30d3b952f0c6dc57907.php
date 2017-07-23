<?php

/* HWIOAuthBundle::layout.html.twig */
class __TwigTemplate_72566889ca6acda8c7e69f86e85d239f29278819048d37cdf38d902687da1b13 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("default/index.html.twig", "HWIOAuthBundle::layout.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'hwi_oauth_content' => array($this, 'block_hwi_oauth_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "default/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5b6a3ef2d7c26e1435be71adeddd65dcdc60b286320b21421847ac29982c2622 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b6a3ef2d7c26e1435be71adeddd65dcdc60b286320b21421847ac29982c2622->enter($__internal_5b6a3ef2d7c26e1435be71adeddd65dcdc60b286320b21421847ac29982c2622_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HWIOAuthBundle::layout.html.twig"));

        $__internal_0da59d3bcd8a80c0b6b3a2adc71b597be23f8f0250da7246f91788c1c56b7cec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0da59d3bcd8a80c0b6b3a2adc71b597be23f8f0250da7246f91788c1c56b7cec->enter($__internal_0da59d3bcd8a80c0b6b3a2adc71b597be23f8f0250da7246f91788c1c56b7cec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HWIOAuthBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b6a3ef2d7c26e1435be71adeddd65dcdc60b286320b21421847ac29982c2622->leave($__internal_5b6a3ef2d7c26e1435be71adeddd65dcdc60b286320b21421847ac29982c2622_prof);

        
        $__internal_0da59d3bcd8a80c0b6b3a2adc71b597be23f8f0250da7246f91788c1c56b7cec->leave($__internal_0da59d3bcd8a80c0b6b3a2adc71b597be23f8f0250da7246f91788c1c56b7cec_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_d80001c9483ad367da24822f0d523be3390f3f29ded0a349ccc509e81de529b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d80001c9483ad367da24822f0d523be3390f3f29ded0a349ccc509e81de529b6->enter($__internal_d80001c9483ad367da24822f0d523be3390f3f29ded0a349ccc509e81de529b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_7643bcdaed5eb51ffcbdfdac96fa51d86a9e0ae576c7e96a9f3c4e7b935d4944 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7643bcdaed5eb51ffcbdfdac96fa51d86a9e0ae576c7e96a9f3c4e7b935d4944->enter($__internal_7643bcdaed5eb51ffcbdfdac96fa51d86a9e0ae576c7e96a9f3c4e7b935d4944_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "        <div>
            ";
        // line 5
        $this->displayBlock('hwi_oauth_content', $context, $blocks);
        // line 7
        echo "        </div>
";
        
        $__internal_7643bcdaed5eb51ffcbdfdac96fa51d86a9e0ae576c7e96a9f3c4e7b935d4944->leave($__internal_7643bcdaed5eb51ffcbdfdac96fa51d86a9e0ae576c7e96a9f3c4e7b935d4944_prof);

        
        $__internal_d80001c9483ad367da24822f0d523be3390f3f29ded0a349ccc509e81de529b6->leave($__internal_d80001c9483ad367da24822f0d523be3390f3f29ded0a349ccc509e81de529b6_prof);

    }

    // line 5
    public function block_hwi_oauth_content($context, array $blocks = array())
    {
        $__internal_8d57cbfa885451cc94c3eda3aa42d1119e31d21ccdd265048d81f8081a640d7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d57cbfa885451cc94c3eda3aa42d1119e31d21ccdd265048d81f8081a640d7d->enter($__internal_8d57cbfa885451cc94c3eda3aa42d1119e31d21ccdd265048d81f8081a640d7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

        $__internal_eae7a701f4e37667802b9309201628fa8301275998a34b70ffc3452c24e8ca0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eae7a701f4e37667802b9309201628fa8301275998a34b70ffc3452c24e8ca0e->enter($__internal_eae7a701f4e37667802b9309201628fa8301275998a34b70ffc3452c24e8ca0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

        // line 6
        echo "            ";
        
        $__internal_eae7a701f4e37667802b9309201628fa8301275998a34b70ffc3452c24e8ca0e->leave($__internal_eae7a701f4e37667802b9309201628fa8301275998a34b70ffc3452c24e8ca0e_prof);

        
        $__internal_8d57cbfa885451cc94c3eda3aa42d1119e31d21ccdd265048d81f8081a640d7d->leave($__internal_8d57cbfa885451cc94c3eda3aa42d1119e31d21ccdd265048d81f8081a640d7d_prof);

    }

    public function getTemplateName()
    {
        return "HWIOAuthBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 6,  66 => 5,  55 => 7,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'default/index.html.twig' %}

{% block content %}
        <div>
            {% block hwi_oauth_content %}
            {% endblock hwi_oauth_content %}
        </div>
{% endblock %}", "HWIOAuthBundle::layout.html.twig", "C:\\Hint\\app/Resources/HWIOAuthBundle/views/layout.html.twig");
    }
}
