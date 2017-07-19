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
        $__internal_e5aa952c24d0987a933e1ecb852effef71477b9a1b3b96439952040cb70dc648 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5aa952c24d0987a933e1ecb852effef71477b9a1b3b96439952040cb70dc648->enter($__internal_e5aa952c24d0987a933e1ecb852effef71477b9a1b3b96439952040cb70dc648_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_e852733999dffe20ea89fb08a82974be4bf340913e4850871c91ef20887215ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e852733999dffe20ea89fb08a82974be4bf340913e4850871c91ef20887215ee->enter($__internal_e852733999dffe20ea89fb08a82974be4bf340913e4850871c91ef20887215ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_e5aa952c24d0987a933e1ecb852effef71477b9a1b3b96439952040cb70dc648->leave($__internal_e5aa952c24d0987a933e1ecb852effef71477b9a1b3b96439952040cb70dc648_prof);

        
        $__internal_e852733999dffe20ea89fb08a82974be4bf340913e4850871c91ef20887215ee->leave($__internal_e852733999dffe20ea89fb08a82974be4bf340913e4850871c91ef20887215ee_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_0e6068c3cfd5823bdea6319134b35b57ade45dc30f189e382c4c1459a2b96289 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e6068c3cfd5823bdea6319134b35b57ade45dc30f189e382c4c1459a2b96289->enter($__internal_0e6068c3cfd5823bdea6319134b35b57ade45dc30f189e382c4c1459a2b96289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_e239c41455a0ef2261c9d110dbc86e1a673cb10a89ae2ef6f1556bb4ea47c651 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e239c41455a0ef2261c9d110dbc86e1a673cb10a89ae2ef6f1556bb4ea47c651->enter($__internal_e239c41455a0ef2261c9d110dbc86e1a673cb10a89ae2ef6f1556bb4ea47c651_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_e239c41455a0ef2261c9d110dbc86e1a673cb10a89ae2ef6f1556bb4ea47c651->leave($__internal_e239c41455a0ef2261c9d110dbc86e1a673cb10a89ae2ef6f1556bb4ea47c651_prof);

        
        $__internal_0e6068c3cfd5823bdea6319134b35b57ade45dc30f189e382c4c1459a2b96289->leave($__internal_0e6068c3cfd5823bdea6319134b35b57ade45dc30f189e382c4c1459a2b96289_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_6d3e1db3f87107ff662e9ac87ee55f36e5f48e2b1abb5c14c997b9f3f09c8e72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d3e1db3f87107ff662e9ac87ee55f36e5f48e2b1abb5c14c997b9f3f09c8e72->enter($__internal_6d3e1db3f87107ff662e9ac87ee55f36e5f48e2b1abb5c14c997b9f3f09c8e72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_dbf2fe11cad3f2617c6b1b58de8bdc260ae8bbdaa70bb40ba5830b7810f14c1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbf2fe11cad3f2617c6b1b58de8bdc260ae8bbdaa70bb40ba5830b7810f14c1a->enter($__internal_dbf2fe11cad3f2617c6b1b58de8bdc260ae8bbdaa70bb40ba5830b7810f14c1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_dbf2fe11cad3f2617c6b1b58de8bdc260ae8bbdaa70bb40ba5830b7810f14c1a->leave($__internal_dbf2fe11cad3f2617c6b1b58de8bdc260ae8bbdaa70bb40ba5830b7810f14c1a_prof);

        
        $__internal_6d3e1db3f87107ff662e9ac87ee55f36e5f48e2b1abb5c14c997b9f3f09c8e72->leave($__internal_6d3e1db3f87107ff662e9ac87ee55f36e5f48e2b1abb5c14c997b9f3f09c8e72_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_9a1aebf5471200097b9b9f6904128b3a58812eda026c0eb10f82979f0b2b257f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a1aebf5471200097b9b9f6904128b3a58812eda026c0eb10f82979f0b2b257f->enter($__internal_9a1aebf5471200097b9b9f6904128b3a58812eda026c0eb10f82979f0b2b257f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_8cbe2a8c05f2fd4dfe9934b5ac338266d74c0ab37a70cc095c633cf2c467cb07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cbe2a8c05f2fd4dfe9934b5ac338266d74c0ab37a70cc095c633cf2c467cb07->enter($__internal_8cbe2a8c05f2fd4dfe9934b5ac338266d74c0ab37a70cc095c633cf2c467cb07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_8cbe2a8c05f2fd4dfe9934b5ac338266d74c0ab37a70cc095c633cf2c467cb07->leave($__internal_8cbe2a8c05f2fd4dfe9934b5ac338266d74c0ab37a70cc095c633cf2c467cb07_prof);

        
        $__internal_9a1aebf5471200097b9b9f6904128b3a58812eda026c0eb10f82979f0b2b257f->leave($__internal_9a1aebf5471200097b9b9f6904128b3a58812eda026c0eb10f82979f0b2b257f_prof);

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
