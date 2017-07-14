<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_fde3360136dd48078c4ddd72a839d903db1a83badb7828034803ad440e54eaff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_764fba6d7f73762fd156f4f6eb829a821703142e9cc7ffab3f8c6b3369999538 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_764fba6d7f73762fd156f4f6eb829a821703142e9cc7ffab3f8c6b3369999538->enter($__internal_764fba6d7f73762fd156f4f6eb829a821703142e9cc7ffab3f8c6b3369999538_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_e7117e81818d81e3f0a5602b4e923f0978e979b2f07924822690daae0d0d9ebd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7117e81818d81e3f0a5602b4e923f0978e979b2f07924822690daae0d0d9ebd->enter($__internal_e7117e81818d81e3f0a5602b4e923f0978e979b2f07924822690daae0d0d9ebd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_764fba6d7f73762fd156f4f6eb829a821703142e9cc7ffab3f8c6b3369999538->leave($__internal_764fba6d7f73762fd156f4f6eb829a821703142e9cc7ffab3f8c6b3369999538_prof);

        
        $__internal_e7117e81818d81e3f0a5602b4e923f0978e979b2f07924822690daae0d0d9ebd->leave($__internal_e7117e81818d81e3f0a5602b4e923f0978e979b2f07924822690daae0d0d9ebd_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4cc2c417963a5fa389e84bdbe714510120e4775b0789d8621fc2fd90c71db9c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cc2c417963a5fa389e84bdbe714510120e4775b0789d8621fc2fd90c71db9c8->enter($__internal_4cc2c417963a5fa389e84bdbe714510120e4775b0789d8621fc2fd90c71db9c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_555f433fed998996e91fd27b4956fe4cc897f93a43b610580741ca7d1d9b5a8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_555f433fed998996e91fd27b4956fe4cc897f93a43b610580741ca7d1d9b5a8b->enter($__internal_555f433fed998996e91fd27b4956fe4cc897f93a43b610580741ca7d1d9b5a8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_555f433fed998996e91fd27b4956fe4cc897f93a43b610580741ca7d1d9b5a8b->leave($__internal_555f433fed998996e91fd27b4956fe4cc897f93a43b610580741ca7d1d9b5a8b_prof);

        
        $__internal_4cc2c417963a5fa389e84bdbe714510120e4775b0789d8621fc2fd90c71db9c8->leave($__internal_4cc2c417963a5fa389e84bdbe714510120e4775b0789d8621fc2fd90c71db9c8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
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
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "/Users/mac/SymfonyProjects/Hint/app/Resources/FOSUserBundle/views/Resetting/check_email.html.twig");
    }
}
