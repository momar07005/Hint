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
        $__internal_47fd347bc49aa015f95007e52056caa484ba1b6afa7adf00060c7b1054e36d79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47fd347bc49aa015f95007e52056caa484ba1b6afa7adf00060c7b1054e36d79->enter($__internal_47fd347bc49aa015f95007e52056caa484ba1b6afa7adf00060c7b1054e36d79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_63fda9068d2b78b3b1483b1b8b2131ddf2f1c1e71eef72f7279441edce58376a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63fda9068d2b78b3b1483b1b8b2131ddf2f1c1e71eef72f7279441edce58376a->enter($__internal_63fda9068d2b78b3b1483b1b8b2131ddf2f1c1e71eef72f7279441edce58376a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_47fd347bc49aa015f95007e52056caa484ba1b6afa7adf00060c7b1054e36d79->leave($__internal_47fd347bc49aa015f95007e52056caa484ba1b6afa7adf00060c7b1054e36d79_prof);

        
        $__internal_63fda9068d2b78b3b1483b1b8b2131ddf2f1c1e71eef72f7279441edce58376a->leave($__internal_63fda9068d2b78b3b1483b1b8b2131ddf2f1c1e71eef72f7279441edce58376a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0f1230b4ac585ca76d342529a586d1181c59594d3c42970cedf7d60f97e347a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f1230b4ac585ca76d342529a586d1181c59594d3c42970cedf7d60f97e347a9->enter($__internal_0f1230b4ac585ca76d342529a586d1181c59594d3c42970cedf7d60f97e347a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8869a5a41f0fea30396f4e7f9cef6b17a284ef778e07c34d7c90b49697c29715 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8869a5a41f0fea30396f4e7f9cef6b17a284ef778e07c34d7c90b49697c29715->enter($__internal_8869a5a41f0fea30396f4e7f9cef6b17a284ef778e07c34d7c90b49697c29715_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_8869a5a41f0fea30396f4e7f9cef6b17a284ef778e07c34d7c90b49697c29715->leave($__internal_8869a5a41f0fea30396f4e7f9cef6b17a284ef778e07c34d7c90b49697c29715_prof);

        
        $__internal_0f1230b4ac585ca76d342529a586d1181c59594d3c42970cedf7d60f97e347a9->leave($__internal_0f1230b4ac585ca76d342529a586d1181c59594d3c42970cedf7d60f97e347a9_prof);

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
", "FOSUserBundle:Group:show.html.twig", "/Users/mac/SymfonyProjects/Hint/app/Resources/FOSUserBundle/views/Group/show.html.twig");
    }
}
