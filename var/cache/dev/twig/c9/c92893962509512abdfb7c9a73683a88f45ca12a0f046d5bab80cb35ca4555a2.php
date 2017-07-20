<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_233bc30afc42219a9240333166f04a0ba4bb96b62e43c2fdde6fc8bf43ef07b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_6128df34f6b78116f150378a98d2266728d67fd37c18f7ca5ca465994ffd2c05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6128df34f6b78116f150378a98d2266728d67fd37c18f7ca5ca465994ffd2c05->enter($__internal_6128df34f6b78116f150378a98d2266728d67fd37c18f7ca5ca465994ffd2c05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_716a81c90ab8a2bc9fa9ef82a37581ac841bfd150628d5f8e218fbb929e3bce2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_716a81c90ab8a2bc9fa9ef82a37581ac841bfd150628d5f8e218fbb929e3bce2->enter($__internal_716a81c90ab8a2bc9fa9ef82a37581ac841bfd150628d5f8e218fbb929e3bce2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6128df34f6b78116f150378a98d2266728d67fd37c18f7ca5ca465994ffd2c05->leave($__internal_6128df34f6b78116f150378a98d2266728d67fd37c18f7ca5ca465994ffd2c05_prof);

        
        $__internal_716a81c90ab8a2bc9fa9ef82a37581ac841bfd150628d5f8e218fbb929e3bce2->leave($__internal_716a81c90ab8a2bc9fa9ef82a37581ac841bfd150628d5f8e218fbb929e3bce2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3ea53201568594732c49a03147ac2f8965f0f2ab51a813f9525350804b56e188 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ea53201568594732c49a03147ac2f8965f0f2ab51a813f9525350804b56e188->enter($__internal_3ea53201568594732c49a03147ac2f8965f0f2ab51a813f9525350804b56e188_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f0fd0d03615258a9c62784e167bff8c0bc40050c7c111fbe9fd9ca12b0ebf495 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0fd0d03615258a9c62784e167bff8c0bc40050c7c111fbe9fd9ca12b0ebf495->enter($__internal_f0fd0d03615258a9c62784e167bff8c0bc40050c7c111fbe9fd9ca12b0ebf495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "\t";
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        // line 5
        echo "\t<script>
\t    \$(function() {
\t        \$('.register').hide();
\t    });
\t </script>
";
        
        $__internal_f0fd0d03615258a9c62784e167bff8c0bc40050c7c111fbe9fd9ca12b0ebf495->leave($__internal_f0fd0d03615258a9c62784e167bff8c0bc40050c7c111fbe9fd9ca12b0ebf495_prof);

        
        $__internal_3ea53201568594732c49a03147ac2f8965f0f2ab51a813f9525350804b56e188->leave($__internal_3ea53201568594732c49a03147ac2f8965f0f2ab51a813f9525350804b56e188_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
\t{% include \"@FOSUser/Registration/register_content.html.twig\" %}
\t<script>
\t    \$(function() {
\t        \$('.register').hide();
\t    });
\t </script>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/Users/mac/SymfonyProjects/Hint/app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}
