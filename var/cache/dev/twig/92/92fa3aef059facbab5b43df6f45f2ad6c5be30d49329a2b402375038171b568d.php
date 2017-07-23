<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_6d7293ee10c8b292354c28abe376587062ec212d92950df3b3d80bd8aca47a5b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_b69f56bb667f09ab77468e45a23df8bb90a0245a8f1237911fea31501aa04666 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b69f56bb667f09ab77468e45a23df8bb90a0245a8f1237911fea31501aa04666->enter($__internal_b69f56bb667f09ab77468e45a23df8bb90a0245a8f1237911fea31501aa04666_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_d95d14b22f79b4f70922ddcbdb3cb62fe86e6341de8a205f3660c8ba37d7ac90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d95d14b22f79b4f70922ddcbdb3cb62fe86e6341de8a205f3660c8ba37d7ac90->enter($__internal_d95d14b22f79b4f70922ddcbdb3cb62fe86e6341de8a205f3660c8ba37d7ac90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b69f56bb667f09ab77468e45a23df8bb90a0245a8f1237911fea31501aa04666->leave($__internal_b69f56bb667f09ab77468e45a23df8bb90a0245a8f1237911fea31501aa04666_prof);

        
        $__internal_d95d14b22f79b4f70922ddcbdb3cb62fe86e6341de8a205f3660c8ba37d7ac90->leave($__internal_d95d14b22f79b4f70922ddcbdb3cb62fe86e6341de8a205f3660c8ba37d7ac90_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_afcf81d8b72fa6ef94cb7125777f6ac695af8625a968909c66fbaf843d9d7554 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afcf81d8b72fa6ef94cb7125777f6ac695af8625a968909c66fbaf843d9d7554->enter($__internal_afcf81d8b72fa6ef94cb7125777f6ac695af8625a968909c66fbaf843d9d7554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_666cfa76e4ab3ac72e7efd9bb56961c443afa8827cdf63a1111fbb2c8f8dc526 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_666cfa76e4ab3ac72e7efd9bb56961c443afa8827cdf63a1111fbb2c8f8dc526->enter($__internal_666cfa76e4ab3ac72e7efd9bb56961c443afa8827cdf63a1111fbb2c8f8dc526_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_666cfa76e4ab3ac72e7efd9bb56961c443afa8827cdf63a1111fbb2c8f8dc526->leave($__internal_666cfa76e4ab3ac72e7efd9bb56961c443afa8827cdf63a1111fbb2c8f8dc526_prof);

        
        $__internal_afcf81d8b72fa6ef94cb7125777f6ac695af8625a968909c66fbaf843d9d7554->leave($__internal_afcf81d8b72fa6ef94cb7125777f6ac695af8625a968909c66fbaf843d9d7554_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
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

{% block fos_user_content %}
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "C:\\Hint\\app/Resources/FOSUserBundle/views/Group/show.html.twig");
    }
}
