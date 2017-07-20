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
        $__internal_7cf173b1f5388417ce4126c9f7e85764620644b4a14874d52adcd712157810e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cf173b1f5388417ce4126c9f7e85764620644b4a14874d52adcd712157810e0->enter($__internal_7cf173b1f5388417ce4126c9f7e85764620644b4a14874d52adcd712157810e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_ec7604ca30f6623db02ebaa2313e5b97992791ffca0b9505bb32d002b9decd7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec7604ca30f6623db02ebaa2313e5b97992791ffca0b9505bb32d002b9decd7a->enter($__internal_ec7604ca30f6623db02ebaa2313e5b97992791ffca0b9505bb32d002b9decd7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7cf173b1f5388417ce4126c9f7e85764620644b4a14874d52adcd712157810e0->leave($__internal_7cf173b1f5388417ce4126c9f7e85764620644b4a14874d52adcd712157810e0_prof);

        
        $__internal_ec7604ca30f6623db02ebaa2313e5b97992791ffca0b9505bb32d002b9decd7a->leave($__internal_ec7604ca30f6623db02ebaa2313e5b97992791ffca0b9505bb32d002b9decd7a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0332fa4015a2a7df860fc3e5377f1a3cd451f18f6889b87a642a6e3e11b28c6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0332fa4015a2a7df860fc3e5377f1a3cd451f18f6889b87a642a6e3e11b28c6e->enter($__internal_0332fa4015a2a7df860fc3e5377f1a3cd451f18f6889b87a642a6e3e11b28c6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_faeab406e02b10f8f1b55b0bccb99cecf42fb29aee0c076eb27263934a637ac0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_faeab406e02b10f8f1b55b0bccb99cecf42fb29aee0c076eb27263934a637ac0->enter($__internal_faeab406e02b10f8f1b55b0bccb99cecf42fb29aee0c076eb27263934a637ac0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_faeab406e02b10f8f1b55b0bccb99cecf42fb29aee0c076eb27263934a637ac0->leave($__internal_faeab406e02b10f8f1b55b0bccb99cecf42fb29aee0c076eb27263934a637ac0_prof);

        
        $__internal_0332fa4015a2a7df860fc3e5377f1a3cd451f18f6889b87a642a6e3e11b28c6e->leave($__internal_0332fa4015a2a7df860fc3e5377f1a3cd451f18f6889b87a642a6e3e11b28c6e_prof);

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
", "FOSUserBundle:Group:new.html.twig", "/Users/mac/SymfonyProjects/Hint/app/Resources/FOSUserBundle/views/Group/new.html.twig");
    }
}
