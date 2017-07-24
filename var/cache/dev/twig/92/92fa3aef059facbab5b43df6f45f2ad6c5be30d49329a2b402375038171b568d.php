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
        $__internal_5a0e07be4289f7def8ff45157a22262f60dfd551daea341361ac8be864f361d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a0e07be4289f7def8ff45157a22262f60dfd551daea341361ac8be864f361d2->enter($__internal_5a0e07be4289f7def8ff45157a22262f60dfd551daea341361ac8be864f361d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_997184a4afc638f8d17d0f1ec9b8f29267e4c7a08121eb5fa18510415f3bdf11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_997184a4afc638f8d17d0f1ec9b8f29267e4c7a08121eb5fa18510415f3bdf11->enter($__internal_997184a4afc638f8d17d0f1ec9b8f29267e4c7a08121eb5fa18510415f3bdf11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a0e07be4289f7def8ff45157a22262f60dfd551daea341361ac8be864f361d2->leave($__internal_5a0e07be4289f7def8ff45157a22262f60dfd551daea341361ac8be864f361d2_prof);

        
        $__internal_997184a4afc638f8d17d0f1ec9b8f29267e4c7a08121eb5fa18510415f3bdf11->leave($__internal_997184a4afc638f8d17d0f1ec9b8f29267e4c7a08121eb5fa18510415f3bdf11_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_efa0a9648df03100c11bc675bce23a01f9626412208f96880afefb91171c768a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efa0a9648df03100c11bc675bce23a01f9626412208f96880afefb91171c768a->enter($__internal_efa0a9648df03100c11bc675bce23a01f9626412208f96880afefb91171c768a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a2b5c07ac3aad46b61acb37c203654dd4a4ed2e39b236ae99a486d77f6c555f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2b5c07ac3aad46b61acb37c203654dd4a4ed2e39b236ae99a486d77f6c555f8->enter($__internal_a2b5c07ac3aad46b61acb37c203654dd4a4ed2e39b236ae99a486d77f6c555f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_a2b5c07ac3aad46b61acb37c203654dd4a4ed2e39b236ae99a486d77f6c555f8->leave($__internal_a2b5c07ac3aad46b61acb37c203654dd4a4ed2e39b236ae99a486d77f6c555f8_prof);

        
        $__internal_efa0a9648df03100c11bc675bce23a01f9626412208f96880afefb91171c768a->leave($__internal_efa0a9648df03100c11bc675bce23a01f9626412208f96880afefb91171c768a_prof);

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
