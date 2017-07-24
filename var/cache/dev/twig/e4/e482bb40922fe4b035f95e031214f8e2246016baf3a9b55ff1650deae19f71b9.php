<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_ade6c52ddf2b7e86dce6152d28c59370f96c96a351c4b5efeb52a5a0ed2b9504 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_257cc42b1567fc0e17ceef99fcca3055df7dd17d99deb288a9ea2a60b40e5476 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_257cc42b1567fc0e17ceef99fcca3055df7dd17d99deb288a9ea2a60b40e5476->enter($__internal_257cc42b1567fc0e17ceef99fcca3055df7dd17d99deb288a9ea2a60b40e5476_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_1d8ea04c628fff8c13ad875bbd7a5deb135b8fa7b1042a9e1f6c4f490a8af521 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d8ea04c628fff8c13ad875bbd7a5deb135b8fa7b1042a9e1f6c4f490a8af521->enter($__internal_1d8ea04c628fff8c13ad875bbd7a5deb135b8fa7b1042a9e1f6c4f490a8af521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_257cc42b1567fc0e17ceef99fcca3055df7dd17d99deb288a9ea2a60b40e5476->leave($__internal_257cc42b1567fc0e17ceef99fcca3055df7dd17d99deb288a9ea2a60b40e5476_prof);

        
        $__internal_1d8ea04c628fff8c13ad875bbd7a5deb135b8fa7b1042a9e1f6c4f490a8af521->leave($__internal_1d8ea04c628fff8c13ad875bbd7a5deb135b8fa7b1042a9e1f6c4f490a8af521_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_638dfe0e90f2b354221bcdce1a00a86c9c00698842a7b8c3456d5249c2aac668 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_638dfe0e90f2b354221bcdce1a00a86c9c00698842a7b8c3456d5249c2aac668->enter($__internal_638dfe0e90f2b354221bcdce1a00a86c9c00698842a7b8c3456d5249c2aac668_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_7be857c843818108a92ed5a12e3ee5e79cd001a0c182d7aa219d507d9f38e44d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7be857c843818108a92ed5a12e3ee5e79cd001a0c182d7aa219d507d9f38e44d->enter($__internal_7be857c843818108a92ed5a12e3ee5e79cd001a0c182d7aa219d507d9f38e44d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_7be857c843818108a92ed5a12e3ee5e79cd001a0c182d7aa219d507d9f38e44d->leave($__internal_7be857c843818108a92ed5a12e3ee5e79cd001a0c182d7aa219d507d9f38e44d_prof);

        
        $__internal_638dfe0e90f2b354221bcdce1a00a86c9c00698842a7b8c3456d5249c2aac668->leave($__internal_638dfe0e90f2b354221bcdce1a00a86c9c00698842a7b8c3456d5249c2aac668_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "/Users/mac/SymfonyProjects/Hint/app/Resources/FOSUserBundle/views/ChangePassword/change_password.html.twig");
    }
}
