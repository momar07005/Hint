<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_e25fcc805e0568ffee2ef8fba17725a0de432b9115a772f1b7a63be0d2c3678e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_d5e1c23ef89d285e87a67d18632c641a3a2c2a5c391c1aee6c485e23577a9445 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5e1c23ef89d285e87a67d18632c641a3a2c2a5c391c1aee6c485e23577a9445->enter($__internal_d5e1c23ef89d285e87a67d18632c641a3a2c2a5c391c1aee6c485e23577a9445_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_cd16b0d94b1a7d422e7b272c06432e890571cf0645d53d85bbbac423c5637ef4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd16b0d94b1a7d422e7b272c06432e890571cf0645d53d85bbbac423c5637ef4->enter($__internal_cd16b0d94b1a7d422e7b272c06432e890571cf0645d53d85bbbac423c5637ef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d5e1c23ef89d285e87a67d18632c641a3a2c2a5c391c1aee6c485e23577a9445->leave($__internal_d5e1c23ef89d285e87a67d18632c641a3a2c2a5c391c1aee6c485e23577a9445_prof);

        
        $__internal_cd16b0d94b1a7d422e7b272c06432e890571cf0645d53d85bbbac423c5637ef4->leave($__internal_cd16b0d94b1a7d422e7b272c06432e890571cf0645d53d85bbbac423c5637ef4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6d7ca065a18e6253032b459460c7b117f9172875fd1a68f4854e5fb16c60c6db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d7ca065a18e6253032b459460c7b117f9172875fd1a68f4854e5fb16c60c6db->enter($__internal_6d7ca065a18e6253032b459460c7b117f9172875fd1a68f4854e5fb16c60c6db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_bab1784e120070c31e913018e9b7e44a6520a528a5bf6eb8d6a056c322316981 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bab1784e120070c31e913018e9b7e44a6520a528a5bf6eb8d6a056c322316981->enter($__internal_bab1784e120070c31e913018e9b7e44a6520a528a5bf6eb8d6a056c322316981_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_bab1784e120070c31e913018e9b7e44a6520a528a5bf6eb8d6a056c322316981->leave($__internal_bab1784e120070c31e913018e9b7e44a6520a528a5bf6eb8d6a056c322316981_prof);

        
        $__internal_6d7ca065a18e6253032b459460c7b117f9172875fd1a68f4854e5fb16c60c6db->leave($__internal_6d7ca065a18e6253032b459460c7b117f9172875fd1a68f4854e5fb16c60c6db_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "C:\\Hint\\app/Resources/FOSUserBundle/views/Group/new.html.twig");
    }
}
