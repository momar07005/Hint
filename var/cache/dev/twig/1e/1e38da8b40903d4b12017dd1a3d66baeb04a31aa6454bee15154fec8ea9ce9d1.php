<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_4d85921b64ffb363dbf6ceeeb5a682f3268837fb15c3d16a0fcb385b24c75c65 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_16abfb7d993dce18d3707206ab874fc6256880cb43c2871307a443acae7664ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16abfb7d993dce18d3707206ab874fc6256880cb43c2871307a443acae7664ec->enter($__internal_16abfb7d993dce18d3707206ab874fc6256880cb43c2871307a443acae7664ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_a43fd8492b347143449511d6e91c11dc531c3737d7e7c6b848834dc662791f84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a43fd8492b347143449511d6e91c11dc531c3737d7e7c6b848834dc662791f84->enter($__internal_a43fd8492b347143449511d6e91c11dc531c3737d7e7c6b848834dc662791f84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_16abfb7d993dce18d3707206ab874fc6256880cb43c2871307a443acae7664ec->leave($__internal_16abfb7d993dce18d3707206ab874fc6256880cb43c2871307a443acae7664ec_prof);

        
        $__internal_a43fd8492b347143449511d6e91c11dc531c3737d7e7c6b848834dc662791f84->leave($__internal_a43fd8492b347143449511d6e91c11dc531c3737d7e7c6b848834dc662791f84_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_061667add42672f3209fdfcc6888638cf9a99757333f75fa368189ef778ecc85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_061667add42672f3209fdfcc6888638cf9a99757333f75fa368189ef778ecc85->enter($__internal_061667add42672f3209fdfcc6888638cf9a99757333f75fa368189ef778ecc85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_fe9bf281e0015b095f9809ef4c631ecfd0dbf2ed272664e2709a64797e559ad5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe9bf281e0015b095f9809ef4c631ecfd0dbf2ed272664e2709a64797e559ad5->enter($__internal_fe9bf281e0015b095f9809ef4c631ecfd0dbf2ed272664e2709a64797e559ad5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_fe9bf281e0015b095f9809ef4c631ecfd0dbf2ed272664e2709a64797e559ad5->leave($__internal_fe9bf281e0015b095f9809ef4c631ecfd0dbf2ed272664e2709a64797e559ad5_prof);

        
        $__internal_061667add42672f3209fdfcc6888638cf9a99757333f75fa368189ef778ecc85->leave($__internal_061667add42672f3209fdfcc6888638cf9a99757333f75fa368189ef778ecc85_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/Users/mac/SymfonyProjects/Hint/app/Resources/FOSUserBundle/views/Resetting/reset.html.twig");
    }
}
