<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_7687bb1c1c6aa511a4d6f4947d6fc43df0e4d28db4aa53199e73850c9ab26c05 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_3c85b19dcad1451f7b9e75890ce933962b59931b9ce1e28206c83ed74d7c8b78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c85b19dcad1451f7b9e75890ce933962b59931b9ce1e28206c83ed74d7c8b78->enter($__internal_3c85b19dcad1451f7b9e75890ce933962b59931b9ce1e28206c83ed74d7c8b78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_540ce76f4e3eb2af960152d05b523ccb50eab3db86bc9e31c5ca5515b5cd895d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_540ce76f4e3eb2af960152d05b523ccb50eab3db86bc9e31c5ca5515b5cd895d->enter($__internal_540ce76f4e3eb2af960152d05b523ccb50eab3db86bc9e31c5ca5515b5cd895d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c85b19dcad1451f7b9e75890ce933962b59931b9ce1e28206c83ed74d7c8b78->leave($__internal_3c85b19dcad1451f7b9e75890ce933962b59931b9ce1e28206c83ed74d7c8b78_prof);

        
        $__internal_540ce76f4e3eb2af960152d05b523ccb50eab3db86bc9e31c5ca5515b5cd895d->leave($__internal_540ce76f4e3eb2af960152d05b523ccb50eab3db86bc9e31c5ca5515b5cd895d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_27a0b1c8405849926e4b18417c552a1f82789217bbdf93309622b6d6cf94cfc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27a0b1c8405849926e4b18417c552a1f82789217bbdf93309622b6d6cf94cfc6->enter($__internal_27a0b1c8405849926e4b18417c552a1f82789217bbdf93309622b6d6cf94cfc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d58510bcf1dcfc9716c9977043659425f8ebdccae7f75b83a83080e60dcfc681 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d58510bcf1dcfc9716c9977043659425f8ebdccae7f75b83a83080e60dcfc681->enter($__internal_d58510bcf1dcfc9716c9977043659425f8ebdccae7f75b83a83080e60dcfc681_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_d58510bcf1dcfc9716c9977043659425f8ebdccae7f75b83a83080e60dcfc681->leave($__internal_d58510bcf1dcfc9716c9977043659425f8ebdccae7f75b83a83080e60dcfc681_prof);

        
        $__internal_27a0b1c8405849926e4b18417c552a1f82789217bbdf93309622b6d6cf94cfc6->leave($__internal_27a0b1c8405849926e4b18417c552a1f82789217bbdf93309622b6d6cf94cfc6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "C:\\Hint\\app/Resources/FOSUserBundle/views/Group/list.html.twig");
    }
}
