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
        $__internal_be3031d356d98f653a105d95a4fd485f01e8418cd186b37730c6fd3c941cd98a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be3031d356d98f653a105d95a4fd485f01e8418cd186b37730c6fd3c941cd98a->enter($__internal_be3031d356d98f653a105d95a4fd485f01e8418cd186b37730c6fd3c941cd98a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HWIOAuthBundle::layout.html.twig"));

        $__internal_fdf80b66bda5ca7130fdb4e13391b4ef59d8d701346db0e3857c4aa47b902f6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdf80b66bda5ca7130fdb4e13391b4ef59d8d701346db0e3857c4aa47b902f6a->enter($__internal_fdf80b66bda5ca7130fdb4e13391b4ef59d8d701346db0e3857c4aa47b902f6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HWIOAuthBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be3031d356d98f653a105d95a4fd485f01e8418cd186b37730c6fd3c941cd98a->leave($__internal_be3031d356d98f653a105d95a4fd485f01e8418cd186b37730c6fd3c941cd98a_prof);

        
        $__internal_fdf80b66bda5ca7130fdb4e13391b4ef59d8d701346db0e3857c4aa47b902f6a->leave($__internal_fdf80b66bda5ca7130fdb4e13391b4ef59d8d701346db0e3857c4aa47b902f6a_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_9b76b652830578615dca6435d2767990017c34445f623d6f5bc8b4c02efe2eb7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b76b652830578615dca6435d2767990017c34445f623d6f5bc8b4c02efe2eb7->enter($__internal_9b76b652830578615dca6435d2767990017c34445f623d6f5bc8b4c02efe2eb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_70993c363746f8d5611443c97409d6a3fbd6337688a874fae85938173f445766 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70993c363746f8d5611443c97409d6a3fbd6337688a874fae85938173f445766->enter($__internal_70993c363746f8d5611443c97409d6a3fbd6337688a874fae85938173f445766_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "        <div>
            ";
        // line 5
        $this->displayBlock('hwi_oauth_content', $context, $blocks);
        // line 7
        echo "        </div>
";
        
        $__internal_70993c363746f8d5611443c97409d6a3fbd6337688a874fae85938173f445766->leave($__internal_70993c363746f8d5611443c97409d6a3fbd6337688a874fae85938173f445766_prof);

        
        $__internal_9b76b652830578615dca6435d2767990017c34445f623d6f5bc8b4c02efe2eb7->leave($__internal_9b76b652830578615dca6435d2767990017c34445f623d6f5bc8b4c02efe2eb7_prof);

    }

    // line 5
    public function block_hwi_oauth_content($context, array $blocks = array())
    {
        $__internal_b0a8a717af81632a936ea2ba32895737612cf0f087016b86d121907b549b4b03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0a8a717af81632a936ea2ba32895737612cf0f087016b86d121907b549b4b03->enter($__internal_b0a8a717af81632a936ea2ba32895737612cf0f087016b86d121907b549b4b03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

        $__internal_688982f0bb080524a695e427152c02cd73ce01746e87f2f61b391187b05ce0e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_688982f0bb080524a695e427152c02cd73ce01746e87f2f61b391187b05ce0e8->enter($__internal_688982f0bb080524a695e427152c02cd73ce01746e87f2f61b391187b05ce0e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

        // line 6
        echo "            ";
        
        $__internal_688982f0bb080524a695e427152c02cd73ce01746e87f2f61b391187b05ce0e8->leave($__internal_688982f0bb080524a695e427152c02cd73ce01746e87f2f61b391187b05ce0e8_prof);

        
        $__internal_b0a8a717af81632a936ea2ba32895737612cf0f087016b86d121907b549b4b03->leave($__internal_b0a8a717af81632a936ea2ba32895737612cf0f087016b86d121907b549b4b03_prof);

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
