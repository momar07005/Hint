<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_514958e2ebbca0ab400b5f7b13950f2bba7e75dd7219e9db93da65747ce20ef1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_46f3dd5412f23dea197743960f041f354f079e8df96dceda0ca343495d66ee01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46f3dd5412f23dea197743960f041f354f079e8df96dceda0ca343495d66ee01->enter($__internal_46f3dd5412f23dea197743960f041f354f079e8df96dceda0ca343495d66ee01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_4cf382e9bac4d0e77465251635dd005001b50d33a5f1550467c67cfe4b3b96ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cf382e9bac4d0e77465251635dd005001b50d33a5f1550467c67cfe4b3b96ac->enter($__internal_4cf382e9bac4d0e77465251635dd005001b50d33a5f1550467c67cfe4b3b96ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_46f3dd5412f23dea197743960f041f354f079e8df96dceda0ca343495d66ee01->leave($__internal_46f3dd5412f23dea197743960f041f354f079e8df96dceda0ca343495d66ee01_prof);

        
        $__internal_4cf382e9bac4d0e77465251635dd005001b50d33a5f1550467c67cfe4b3b96ac->leave($__internal_4cf382e9bac4d0e77465251635dd005001b50d33a5f1550467c67cfe4b3b96ac_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6edecaeeb946c206b0f6711ee5ed14aeaf341276c3e60704bbd003c9dcc7ccea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6edecaeeb946c206b0f6711ee5ed14aeaf341276c3e60704bbd003c9dcc7ccea->enter($__internal_6edecaeeb946c206b0f6711ee5ed14aeaf341276c3e60704bbd003c9dcc7ccea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6936b8372dc701bd1c32228f451cc41cb0ff5105c88a303d8dca59ccd1811c09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6936b8372dc701bd1c32228f451cc41cb0ff5105c88a303d8dca59ccd1811c09->enter($__internal_6936b8372dc701bd1c32228f451cc41cb0ff5105c88a303d8dca59ccd1811c09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_6936b8372dc701bd1c32228f451cc41cb0ff5105c88a303d8dca59ccd1811c09->leave($__internal_6936b8372dc701bd1c32228f451cc41cb0ff5105c88a303d8dca59ccd1811c09_prof);

        
        $__internal_6edecaeeb946c206b0f6711ee5ed14aeaf341276c3e60704bbd003c9dcc7ccea->leave($__internal_6edecaeeb946c206b0f6711ee5ed14aeaf341276c3e60704bbd003c9dcc7ccea_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/Users/mac/SymfonyProjects/Hint/app/Resources/FOSUserBundle/views/Group/edit.html.twig");
    }
}
