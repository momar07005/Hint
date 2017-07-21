<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_94b3ea64fabda46e20ee47a4d49c2030e52788807924e1ac5babb68a2e0fa9eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_b8fc9f5a4d2335471be7cb756d2990c5014451f4ae8a6e930c54023a9097f840 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8fc9f5a4d2335471be7cb756d2990c5014451f4ae8a6e930c54023a9097f840->enter($__internal_b8fc9f5a4d2335471be7cb756d2990c5014451f4ae8a6e930c54023a9097f840_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_908ec630cc8312310573b0e2a1efeebb461afbae7447993743d7d1bec9b70015 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_908ec630cc8312310573b0e2a1efeebb461afbae7447993743d7d1bec9b70015->enter($__internal_908ec630cc8312310573b0e2a1efeebb461afbae7447993743d7d1bec9b70015_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8fc9f5a4d2335471be7cb756d2990c5014451f4ae8a6e930c54023a9097f840->leave($__internal_b8fc9f5a4d2335471be7cb756d2990c5014451f4ae8a6e930c54023a9097f840_prof);

        
        $__internal_908ec630cc8312310573b0e2a1efeebb461afbae7447993743d7d1bec9b70015->leave($__internal_908ec630cc8312310573b0e2a1efeebb461afbae7447993743d7d1bec9b70015_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_20d472dfbf2fb2bbf11dcefb6269f9cd99238e8981ce62c69ffd32dd9bfbc4dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20d472dfbf2fb2bbf11dcefb6269f9cd99238e8981ce62c69ffd32dd9bfbc4dc->enter($__internal_20d472dfbf2fb2bbf11dcefb6269f9cd99238e8981ce62c69ffd32dd9bfbc4dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_af1e79a3cad7f26e6c688a10f988a5cbfc36498f46ee2c348c3c37c712e455d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af1e79a3cad7f26e6c688a10f988a5cbfc36498f46ee2c348c3c37c712e455d6->enter($__internal_af1e79a3cad7f26e6c688a10f988a5cbfc36498f46ee2c348c3c37c712e455d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_af1e79a3cad7f26e6c688a10f988a5cbfc36498f46ee2c348c3c37c712e455d6->leave($__internal_af1e79a3cad7f26e6c688a10f988a5cbfc36498f46ee2c348c3c37c712e455d6_prof);

        
        $__internal_20d472dfbf2fb2bbf11dcefb6269f9cd99238e8981ce62c69ffd32dd9bfbc4dc->leave($__internal_20d472dfbf2fb2bbf11dcefb6269f9cd99238e8981ce62c69ffd32dd9bfbc4dc_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "/Users/mac/SymfonyProjects/Hint/app/Resources/FOSUserBundle/views/Resetting/request.html.twig");
    }
}
