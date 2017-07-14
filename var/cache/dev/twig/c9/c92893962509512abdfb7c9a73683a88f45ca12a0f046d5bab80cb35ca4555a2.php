<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_233bc30afc42219a9240333166f04a0ba4bb96b62e43c2fdde6fc8bf43ef07b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_e4520fa3fdf6494f9a82cbe8219872d54c72f8d476428f199fb5d8f6c97c85db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4520fa3fdf6494f9a82cbe8219872d54c72f8d476428f199fb5d8f6c97c85db->enter($__internal_e4520fa3fdf6494f9a82cbe8219872d54c72f8d476428f199fb5d8f6c97c85db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_5875cf19e35f9ee1446c2103c675506cd151e3eaa0c2840c3f64540f6744b66f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5875cf19e35f9ee1446c2103c675506cd151e3eaa0c2840c3f64540f6744b66f->enter($__internal_5875cf19e35f9ee1446c2103c675506cd151e3eaa0c2840c3f64540f6744b66f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4520fa3fdf6494f9a82cbe8219872d54c72f8d476428f199fb5d8f6c97c85db->leave($__internal_e4520fa3fdf6494f9a82cbe8219872d54c72f8d476428f199fb5d8f6c97c85db_prof);

        
        $__internal_5875cf19e35f9ee1446c2103c675506cd151e3eaa0c2840c3f64540f6744b66f->leave($__internal_5875cf19e35f9ee1446c2103c675506cd151e3eaa0c2840c3f64540f6744b66f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ccb83dedaa1ad471673b92d21db72107b069c3b7c91ea1dff0e12510cea166d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccb83dedaa1ad471673b92d21db72107b069c3b7c91ea1dff0e12510cea166d3->enter($__internal_ccb83dedaa1ad471673b92d21db72107b069c3b7c91ea1dff0e12510cea166d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e61fc0c268ae6ca8a404ee614ae3f703ce3ed8ed6f9f3c096bf71b3dda3ec61e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e61fc0c268ae6ca8a404ee614ae3f703ce3ed8ed6f9f3c096bf71b3dda3ec61e->enter($__internal_e61fc0c268ae6ca8a404ee614ae3f703ce3ed8ed6f9f3c096bf71b3dda3ec61e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_e61fc0c268ae6ca8a404ee614ae3f703ce3ed8ed6f9f3c096bf71b3dda3ec61e->leave($__internal_e61fc0c268ae6ca8a404ee614ae3f703ce3ed8ed6f9f3c096bf71b3dda3ec61e_prof);

        
        $__internal_ccb83dedaa1ad471673b92d21db72107b069c3b7c91ea1dff0e12510cea166d3->leave($__internal_ccb83dedaa1ad471673b92d21db72107b069c3b7c91ea1dff0e12510cea166d3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/Users/mac/SymfonyProjects/Hint/app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}
