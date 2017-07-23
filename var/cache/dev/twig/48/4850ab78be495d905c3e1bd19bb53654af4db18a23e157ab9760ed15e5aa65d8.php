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
        $__internal_5667e2383261e7975ea590228c16b219003560adaac6ee1d7ebeb6ca455fc57e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5667e2383261e7975ea590228c16b219003560adaac6ee1d7ebeb6ca455fc57e->enter($__internal_5667e2383261e7975ea590228c16b219003560adaac6ee1d7ebeb6ca455fc57e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_018c0e9208214b5b4d5c96969ae742b22137f6c00e92f5256125ca9f570ad48d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_018c0e9208214b5b4d5c96969ae742b22137f6c00e92f5256125ca9f570ad48d->enter($__internal_018c0e9208214b5b4d5c96969ae742b22137f6c00e92f5256125ca9f570ad48d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5667e2383261e7975ea590228c16b219003560adaac6ee1d7ebeb6ca455fc57e->leave($__internal_5667e2383261e7975ea590228c16b219003560adaac6ee1d7ebeb6ca455fc57e_prof);

        
        $__internal_018c0e9208214b5b4d5c96969ae742b22137f6c00e92f5256125ca9f570ad48d->leave($__internal_018c0e9208214b5b4d5c96969ae742b22137f6c00e92f5256125ca9f570ad48d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9dd63c48b950bac3c7c9712687b3aecb3c2a5133e0db084e5c8deb1531569f53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9dd63c48b950bac3c7c9712687b3aecb3c2a5133e0db084e5c8deb1531569f53->enter($__internal_9dd63c48b950bac3c7c9712687b3aecb3c2a5133e0db084e5c8deb1531569f53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_69328f6bc68121935d8c03491f5cb8ba2685e3d214b3c3e3a72005a08dd6c1d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69328f6bc68121935d8c03491f5cb8ba2685e3d214b3c3e3a72005a08dd6c1d7->enter($__internal_69328f6bc68121935d8c03491f5cb8ba2685e3d214b3c3e3a72005a08dd6c1d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_69328f6bc68121935d8c03491f5cb8ba2685e3d214b3c3e3a72005a08dd6c1d7->leave($__internal_69328f6bc68121935d8c03491f5cb8ba2685e3d214b3c3e3a72005a08dd6c1d7_prof);

        
        $__internal_9dd63c48b950bac3c7c9712687b3aecb3c2a5133e0db084e5c8deb1531569f53->leave($__internal_9dd63c48b950bac3c7c9712687b3aecb3c2a5133e0db084e5c8deb1531569f53_prof);

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
", "FOSUserBundle:Resetting:request.html.twig", "C:\\Hint\\app/Resources/FOSUserBundle/views/Resetting/request.html.twig");
    }
}
