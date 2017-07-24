<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_fde3360136dd48078c4ddd72a839d903db1a83badb7828034803ad440e54eaff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_1ce663533d752ecae9d7f77d04565b47823ba5d82c28c8c8aced3cd440dad09a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ce663533d752ecae9d7f77d04565b47823ba5d82c28c8c8aced3cd440dad09a->enter($__internal_1ce663533d752ecae9d7f77d04565b47823ba5d82c28c8c8aced3cd440dad09a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_de94324cccdd52edf788ea6b68141760108a5e1f51c8ef5e65b5822eee42eedf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de94324cccdd52edf788ea6b68141760108a5e1f51c8ef5e65b5822eee42eedf->enter($__internal_de94324cccdd52edf788ea6b68141760108a5e1f51c8ef5e65b5822eee42eedf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ce663533d752ecae9d7f77d04565b47823ba5d82c28c8c8aced3cd440dad09a->leave($__internal_1ce663533d752ecae9d7f77d04565b47823ba5d82c28c8c8aced3cd440dad09a_prof);

        
        $__internal_de94324cccdd52edf788ea6b68141760108a5e1f51c8ef5e65b5822eee42eedf->leave($__internal_de94324cccdd52edf788ea6b68141760108a5e1f51c8ef5e65b5822eee42eedf_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6c57a910cdbc5fed0c5147fe01dbdf23c682bccb2f22784ca519403efe7cbca7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c57a910cdbc5fed0c5147fe01dbdf23c682bccb2f22784ca519403efe7cbca7->enter($__internal_6c57a910cdbc5fed0c5147fe01dbdf23c682bccb2f22784ca519403efe7cbca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_cc9df93d1b4203a4e0feddefcc2291774bf6f7fcc2d7dea9c6d333b08ac143fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc9df93d1b4203a4e0feddefcc2291774bf6f7fcc2d7dea9c6d333b08ac143fa->enter($__internal_cc9df93d1b4203a4e0feddefcc2291774bf6f7fcc2d7dea9c6d333b08ac143fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_cc9df93d1b4203a4e0feddefcc2291774bf6f7fcc2d7dea9c6d333b08ac143fa->leave($__internal_cc9df93d1b4203a4e0feddefcc2291774bf6f7fcc2d7dea9c6d333b08ac143fa_prof);

        
        $__internal_6c57a910cdbc5fed0c5147fe01dbdf23c682bccb2f22784ca519403efe7cbca7->leave($__internal_6c57a910cdbc5fed0c5147fe01dbdf23c682bccb2f22784ca519403efe7cbca7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "/Users/mac/SymfonyProjects/Hint/app/Resources/FOSUserBundle/views/Resetting/check_email.html.twig");
    }
}
