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
        $__internal_2be5c820422d6aaa330ed5cc5e90646c3999a0949e44394b107f611e0fa8f73d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2be5c820422d6aaa330ed5cc5e90646c3999a0949e44394b107f611e0fa8f73d->enter($__internal_2be5c820422d6aaa330ed5cc5e90646c3999a0949e44394b107f611e0fa8f73d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_b9208ed3e2323758fa4ff46bf449a8620d2c79794c32ae9b37233e559b053c17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9208ed3e2323758fa4ff46bf449a8620d2c79794c32ae9b37233e559b053c17->enter($__internal_b9208ed3e2323758fa4ff46bf449a8620d2c79794c32ae9b37233e559b053c17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2be5c820422d6aaa330ed5cc5e90646c3999a0949e44394b107f611e0fa8f73d->leave($__internal_2be5c820422d6aaa330ed5cc5e90646c3999a0949e44394b107f611e0fa8f73d_prof);

        
        $__internal_b9208ed3e2323758fa4ff46bf449a8620d2c79794c32ae9b37233e559b053c17->leave($__internal_b9208ed3e2323758fa4ff46bf449a8620d2c79794c32ae9b37233e559b053c17_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c00325f597d4dfe9b96aca257b1eadec7a73ca244eecb1bff8d7b96920f48467 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c00325f597d4dfe9b96aca257b1eadec7a73ca244eecb1bff8d7b96920f48467->enter($__internal_c00325f597d4dfe9b96aca257b1eadec7a73ca244eecb1bff8d7b96920f48467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f16fac0760e9fdcc40f2ff3278fa4496b8f045c1ad5e0cd8f363a3696043275c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f16fac0760e9fdcc40f2ff3278fa4496b8f045c1ad5e0cd8f363a3696043275c->enter($__internal_f16fac0760e9fdcc40f2ff3278fa4496b8f045c1ad5e0cd8f363a3696043275c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_f16fac0760e9fdcc40f2ff3278fa4496b8f045c1ad5e0cd8f363a3696043275c->leave($__internal_f16fac0760e9fdcc40f2ff3278fa4496b8f045c1ad5e0cd8f363a3696043275c_prof);

        
        $__internal_c00325f597d4dfe9b96aca257b1eadec7a73ca244eecb1bff8d7b96920f48467->leave($__internal_c00325f597d4dfe9b96aca257b1eadec7a73ca244eecb1bff8d7b96920f48467_prof);

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
