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
        $__internal_9117abf536cbba38a9edcf78ce503a5ee7c79cc8213288078be1b67b6667212c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9117abf536cbba38a9edcf78ce503a5ee7c79cc8213288078be1b67b6667212c->enter($__internal_9117abf536cbba38a9edcf78ce503a5ee7c79cc8213288078be1b67b6667212c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_b514b9f8e094bb1c73d413416dc70d408b2e1fc22651692b1078039c8dd9aa6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b514b9f8e094bb1c73d413416dc70d408b2e1fc22651692b1078039c8dd9aa6e->enter($__internal_b514b9f8e094bb1c73d413416dc70d408b2e1fc22651692b1078039c8dd9aa6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9117abf536cbba38a9edcf78ce503a5ee7c79cc8213288078be1b67b6667212c->leave($__internal_9117abf536cbba38a9edcf78ce503a5ee7c79cc8213288078be1b67b6667212c_prof);

        
        $__internal_b514b9f8e094bb1c73d413416dc70d408b2e1fc22651692b1078039c8dd9aa6e->leave($__internal_b514b9f8e094bb1c73d413416dc70d408b2e1fc22651692b1078039c8dd9aa6e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5e12dac7a8c674b4a585a67ae55dede20abe7ee8457476107349e6cc59d304f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e12dac7a8c674b4a585a67ae55dede20abe7ee8457476107349e6cc59d304f7->enter($__internal_5e12dac7a8c674b4a585a67ae55dede20abe7ee8457476107349e6cc59d304f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_32ff15723e96f6a716323bf6e42551a143b3ca30327d2bdfeb02dc9d2fd030ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32ff15723e96f6a716323bf6e42551a143b3ca30327d2bdfeb02dc9d2fd030ad->enter($__internal_32ff15723e96f6a716323bf6e42551a143b3ca30327d2bdfeb02dc9d2fd030ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_32ff15723e96f6a716323bf6e42551a143b3ca30327d2bdfeb02dc9d2fd030ad->leave($__internal_32ff15723e96f6a716323bf6e42551a143b3ca30327d2bdfeb02dc9d2fd030ad_prof);

        
        $__internal_5e12dac7a8c674b4a585a67ae55dede20abe7ee8457476107349e6cc59d304f7->leave($__internal_5e12dac7a8c674b4a585a67ae55dede20abe7ee8457476107349e6cc59d304f7_prof);

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
