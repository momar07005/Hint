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
        $__internal_dd9bcc448fca95bf61b12df96efb51d806c98fe1ee222282e3f7520d8f27a4ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd9bcc448fca95bf61b12df96efb51d806c98fe1ee222282e3f7520d8f27a4ed->enter($__internal_dd9bcc448fca95bf61b12df96efb51d806c98fe1ee222282e3f7520d8f27a4ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_ec029130e0bd1ce41a70f149469ff1d75a94b55388c07df972b21a822d517188 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec029130e0bd1ce41a70f149469ff1d75a94b55388c07df972b21a822d517188->enter($__internal_ec029130e0bd1ce41a70f149469ff1d75a94b55388c07df972b21a822d517188_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd9bcc448fca95bf61b12df96efb51d806c98fe1ee222282e3f7520d8f27a4ed->leave($__internal_dd9bcc448fca95bf61b12df96efb51d806c98fe1ee222282e3f7520d8f27a4ed_prof);

        
        $__internal_ec029130e0bd1ce41a70f149469ff1d75a94b55388c07df972b21a822d517188->leave($__internal_ec029130e0bd1ce41a70f149469ff1d75a94b55388c07df972b21a822d517188_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dcba28ce3f180d55968472419b2d671c1aa0bc45f0fc0a4279c7b77b5e50d59b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcba28ce3f180d55968472419b2d671c1aa0bc45f0fc0a4279c7b77b5e50d59b->enter($__internal_dcba28ce3f180d55968472419b2d671c1aa0bc45f0fc0a4279c7b77b5e50d59b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_7059f6ca8597644d2d0af8b416fc62b67306bf50acda5f397cc3a5c11194524b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7059f6ca8597644d2d0af8b416fc62b67306bf50acda5f397cc3a5c11194524b->enter($__internal_7059f6ca8597644d2d0af8b416fc62b67306bf50acda5f397cc3a5c11194524b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_7059f6ca8597644d2d0af8b416fc62b67306bf50acda5f397cc3a5c11194524b->leave($__internal_7059f6ca8597644d2d0af8b416fc62b67306bf50acda5f397cc3a5c11194524b_prof);

        
        $__internal_dcba28ce3f180d55968472419b2d671c1aa0bc45f0fc0a4279c7b77b5e50d59b->leave($__internal_dcba28ce3f180d55968472419b2d671c1aa0bc45f0fc0a4279c7b77b5e50d59b_prof);

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
", "FOSUserBundle:Group:list.html.twig", "/Users/mac/SymfonyProjects/Hint/app/Resources/FOSUserBundle/views/Group/list.html.twig");
    }
}
