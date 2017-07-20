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
        $__internal_bf996b84b256cb8beef74906de6159431c1eadc2c089b4c1d803ea5777a5a90f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf996b84b256cb8beef74906de6159431c1eadc2c089b4c1d803ea5777a5a90f->enter($__internal_bf996b84b256cb8beef74906de6159431c1eadc2c089b4c1d803ea5777a5a90f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_47a069d698d0e209931bf71bf266c110cf47c29be51dfb3c8a3af4def093c4e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47a069d698d0e209931bf71bf266c110cf47c29be51dfb3c8a3af4def093c4e5->enter($__internal_47a069d698d0e209931bf71bf266c110cf47c29be51dfb3c8a3af4def093c4e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf996b84b256cb8beef74906de6159431c1eadc2c089b4c1d803ea5777a5a90f->leave($__internal_bf996b84b256cb8beef74906de6159431c1eadc2c089b4c1d803ea5777a5a90f_prof);

        
        $__internal_47a069d698d0e209931bf71bf266c110cf47c29be51dfb3c8a3af4def093c4e5->leave($__internal_47a069d698d0e209931bf71bf266c110cf47c29be51dfb3c8a3af4def093c4e5_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_46491e286e185844b7f90306fa7383e0027d07936b59aa56161e756465b70a2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46491e286e185844b7f90306fa7383e0027d07936b59aa56161e756465b70a2a->enter($__internal_46491e286e185844b7f90306fa7383e0027d07936b59aa56161e756465b70a2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1f2f11f022a3b4d7ff29edbc48f5e818fc0a3ce3e1c2cbdd5caa2a8270558c00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f2f11f022a3b4d7ff29edbc48f5e818fc0a3ce3e1c2cbdd5caa2a8270558c00->enter($__internal_1f2f11f022a3b4d7ff29edbc48f5e818fc0a3ce3e1c2cbdd5caa2a8270558c00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_1f2f11f022a3b4d7ff29edbc48f5e818fc0a3ce3e1c2cbdd5caa2a8270558c00->leave($__internal_1f2f11f022a3b4d7ff29edbc48f5e818fc0a3ce3e1c2cbdd5caa2a8270558c00_prof);

        
        $__internal_46491e286e185844b7f90306fa7383e0027d07936b59aa56161e756465b70a2a->leave($__internal_46491e286e185844b7f90306fa7383e0027d07936b59aa56161e756465b70a2a_prof);

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
", "FOSUserBundle:Registration:confirmed.html.twig", "/Users/mac/SymfonyProjects/Hint/app/Resources/FOSUserBundle/views/Registration/confirmed.html.twig");
    }
}
