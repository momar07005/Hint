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
        $__internal_f437ac976e742d1d15ef29686bb2fa626b970dc12ef138c260be46a90b190c8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f437ac976e742d1d15ef29686bb2fa626b970dc12ef138c260be46a90b190c8d->enter($__internal_f437ac976e742d1d15ef29686bb2fa626b970dc12ef138c260be46a90b190c8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_2d38fb71870f34d9142ea3207c8b80e3dc8a1f2b1de4eb368ea7d700e9a3f181 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d38fb71870f34d9142ea3207c8b80e3dc8a1f2b1de4eb368ea7d700e9a3f181->enter($__internal_2d38fb71870f34d9142ea3207c8b80e3dc8a1f2b1de4eb368ea7d700e9a3f181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f437ac976e742d1d15ef29686bb2fa626b970dc12ef138c260be46a90b190c8d->leave($__internal_f437ac976e742d1d15ef29686bb2fa626b970dc12ef138c260be46a90b190c8d_prof);

        
        $__internal_2d38fb71870f34d9142ea3207c8b80e3dc8a1f2b1de4eb368ea7d700e9a3f181->leave($__internal_2d38fb71870f34d9142ea3207c8b80e3dc8a1f2b1de4eb368ea7d700e9a3f181_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1e3fdc42aa60f0b38a946939e70b2ff4e9a6e96ba7669b70132ee281159acf15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e3fdc42aa60f0b38a946939e70b2ff4e9a6e96ba7669b70132ee281159acf15->enter($__internal_1e3fdc42aa60f0b38a946939e70b2ff4e9a6e96ba7669b70132ee281159acf15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_593eb5b2ff9da31fb36f4014e7ab463d9ca864661bf2c12950332879b287420b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_593eb5b2ff9da31fb36f4014e7ab463d9ca864661bf2c12950332879b287420b->enter($__internal_593eb5b2ff9da31fb36f4014e7ab463d9ca864661bf2c12950332879b287420b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_593eb5b2ff9da31fb36f4014e7ab463d9ca864661bf2c12950332879b287420b->leave($__internal_593eb5b2ff9da31fb36f4014e7ab463d9ca864661bf2c12950332879b287420b_prof);

        
        $__internal_1e3fdc42aa60f0b38a946939e70b2ff4e9a6e96ba7669b70132ee281159acf15->leave($__internal_1e3fdc42aa60f0b38a946939e70b2ff4e9a6e96ba7669b70132ee281159acf15_prof);

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
