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
        $__internal_2dcb9bdbcb5928700e53a9de86863babb04ef0c9130dcd5d0f4ba2912369d4a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2dcb9bdbcb5928700e53a9de86863babb04ef0c9130dcd5d0f4ba2912369d4a0->enter($__internal_2dcb9bdbcb5928700e53a9de86863babb04ef0c9130dcd5d0f4ba2912369d4a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_dca5a3913350754241fbdbadc5b1890443f4e6083811a3a243ba7c9846b9aa96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dca5a3913350754241fbdbadc5b1890443f4e6083811a3a243ba7c9846b9aa96->enter($__internal_dca5a3913350754241fbdbadc5b1890443f4e6083811a3a243ba7c9846b9aa96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2dcb9bdbcb5928700e53a9de86863babb04ef0c9130dcd5d0f4ba2912369d4a0->leave($__internal_2dcb9bdbcb5928700e53a9de86863babb04ef0c9130dcd5d0f4ba2912369d4a0_prof);

        
        $__internal_dca5a3913350754241fbdbadc5b1890443f4e6083811a3a243ba7c9846b9aa96->leave($__internal_dca5a3913350754241fbdbadc5b1890443f4e6083811a3a243ba7c9846b9aa96_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f63a0cc0749a823ca365baaae12411f6b806a5a67f34235e3763b918c01ae9b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f63a0cc0749a823ca365baaae12411f6b806a5a67f34235e3763b918c01ae9b1->enter($__internal_f63a0cc0749a823ca365baaae12411f6b806a5a67f34235e3763b918c01ae9b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ba8c090d2698ac5b83ffbf2b505fa43f3df12e6cfb891f17c6a894ad4f14f234 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba8c090d2698ac5b83ffbf2b505fa43f3df12e6cfb891f17c6a894ad4f14f234->enter($__internal_ba8c090d2698ac5b83ffbf2b505fa43f3df12e6cfb891f17c6a894ad4f14f234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_ba8c090d2698ac5b83ffbf2b505fa43f3df12e6cfb891f17c6a894ad4f14f234->leave($__internal_ba8c090d2698ac5b83ffbf2b505fa43f3df12e6cfb891f17c6a894ad4f14f234_prof);

        
        $__internal_f63a0cc0749a823ca365baaae12411f6b806a5a67f34235e3763b918c01ae9b1->leave($__internal_f63a0cc0749a823ca365baaae12411f6b806a5a67f34235e3763b918c01ae9b1_prof);

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
