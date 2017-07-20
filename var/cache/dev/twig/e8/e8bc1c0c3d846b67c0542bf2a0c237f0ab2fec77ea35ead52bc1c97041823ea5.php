<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_82882cea376725de34eb85d5e74e8099aa43dda6e9d812461008b5f374b097cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_85d7b1da01b68da7324c35c12af1b669d38ad26c46842d5e84ac69718ca34a86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85d7b1da01b68da7324c35c12af1b669d38ad26c46842d5e84ac69718ca34a86->enter($__internal_85d7b1da01b68da7324c35c12af1b669d38ad26c46842d5e84ac69718ca34a86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_25dd97d2db75f8b26a455cfb3c7f2e4576e383934982052b0d2e6819755f6770 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25dd97d2db75f8b26a455cfb3c7f2e4576e383934982052b0d2e6819755f6770->enter($__internal_25dd97d2db75f8b26a455cfb3c7f2e4576e383934982052b0d2e6819755f6770_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_85d7b1da01b68da7324c35c12af1b669d38ad26c46842d5e84ac69718ca34a86->leave($__internal_85d7b1da01b68da7324c35c12af1b669d38ad26c46842d5e84ac69718ca34a86_prof);

        
        $__internal_25dd97d2db75f8b26a455cfb3c7f2e4576e383934982052b0d2e6819755f6770->leave($__internal_25dd97d2db75f8b26a455cfb3c7f2e4576e383934982052b0d2e6819755f6770_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bfff8fb8dc7592d6caaef20c98a224ff92cac0a39a7f29af857d78a42b455c78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfff8fb8dc7592d6caaef20c98a224ff92cac0a39a7f29af857d78a42b455c78->enter($__internal_bfff8fb8dc7592d6caaef20c98a224ff92cac0a39a7f29af857d78a42b455c78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d50bae1ada702bb6c2cedb3dd8863ee940f7441a7830bbee45c8185cc39e1005 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d50bae1ada702bb6c2cedb3dd8863ee940f7441a7830bbee45c8185cc39e1005->enter($__internal_d50bae1ada702bb6c2cedb3dd8863ee940f7441a7830bbee45c8185cc39e1005_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_d50bae1ada702bb6c2cedb3dd8863ee940f7441a7830bbee45c8185cc39e1005->leave($__internal_d50bae1ada702bb6c2cedb3dd8863ee940f7441a7830bbee45c8185cc39e1005_prof);

        
        $__internal_bfff8fb8dc7592d6caaef20c98a224ff92cac0a39a7f29af857d78a42b455c78->leave($__internal_bfff8fb8dc7592d6caaef20c98a224ff92cac0a39a7f29af857d78a42b455c78_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
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
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "/Users/mac/SymfonyProjects/Hint/app/Resources/FOSUserBundle/views/Registration/check_email.html.twig");
    }
}
