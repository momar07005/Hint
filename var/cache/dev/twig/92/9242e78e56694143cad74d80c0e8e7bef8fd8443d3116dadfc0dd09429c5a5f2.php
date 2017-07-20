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
        $__internal_054379c38bab0184fd8974fd5ab9146a023a96815d7635571f891a7f51e9d781 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_054379c38bab0184fd8974fd5ab9146a023a96815d7635571f891a7f51e9d781->enter($__internal_054379c38bab0184fd8974fd5ab9146a023a96815d7635571f891a7f51e9d781_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_8502c6c04a235a3ab5d7213e075a999ebad7f98ed51f1487dd02a68bcc043571 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8502c6c04a235a3ab5d7213e075a999ebad7f98ed51f1487dd02a68bcc043571->enter($__internal_8502c6c04a235a3ab5d7213e075a999ebad7f98ed51f1487dd02a68bcc043571_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_054379c38bab0184fd8974fd5ab9146a023a96815d7635571f891a7f51e9d781->leave($__internal_054379c38bab0184fd8974fd5ab9146a023a96815d7635571f891a7f51e9d781_prof);

        
        $__internal_8502c6c04a235a3ab5d7213e075a999ebad7f98ed51f1487dd02a68bcc043571->leave($__internal_8502c6c04a235a3ab5d7213e075a999ebad7f98ed51f1487dd02a68bcc043571_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a1708345353111ada172bdeee0fab6651a86b6835499e9c566473967df4a5d4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1708345353111ada172bdeee0fab6651a86b6835499e9c566473967df4a5d4f->enter($__internal_a1708345353111ada172bdeee0fab6651a86b6835499e9c566473967df4a5d4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d9ced68ba586f8833eb7d42f6d159b1ebdaac5c2d8f460adae1c131d36da80f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9ced68ba586f8833eb7d42f6d159b1ebdaac5c2d8f460adae1c131d36da80f3->enter($__internal_d9ced68ba586f8833eb7d42f6d159b1ebdaac5c2d8f460adae1c131d36da80f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_d9ced68ba586f8833eb7d42f6d159b1ebdaac5c2d8f460adae1c131d36da80f3->leave($__internal_d9ced68ba586f8833eb7d42f6d159b1ebdaac5c2d8f460adae1c131d36da80f3_prof);

        
        $__internal_a1708345353111ada172bdeee0fab6651a86b6835499e9c566473967df4a5d4f->leave($__internal_a1708345353111ada172bdeee0fab6651a86b6835499e9c566473967df4a5d4f_prof);

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
