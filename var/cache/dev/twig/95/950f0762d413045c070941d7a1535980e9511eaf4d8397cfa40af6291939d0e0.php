<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_0004dd9c7c130aed90cd1b2f3b3d23c7f8ed9163df26f63329095fe8bef34b8e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8450486bee3bfee00eb7c5a905630081851282ae9a3f4c1ce300b51207e71ceb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8450486bee3bfee00eb7c5a905630081851282ae9a3f4c1ce300b51207e71ceb->enter($__internal_8450486bee3bfee00eb7c5a905630081851282ae9a3f4c1ce300b51207e71ceb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        $__internal_d3ee565222fec5e7b7f3242e4c1dad4ea4eb5eb5744818423fae86f30630341e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3ee565222fec5e7b7f3242e4c1dad4ea4eb5eb5744818423fae86f30630341e->enter($__internal_d3ee565222fec5e7b7f3242e4c1dad4ea4eb5eb5744818423fae86f30630341e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_8450486bee3bfee00eb7c5a905630081851282ae9a3f4c1ce300b51207e71ceb->leave($__internal_8450486bee3bfee00eb7c5a905630081851282ae9a3f4c1ce300b51207e71ceb_prof);

        
        $__internal_d3ee565222fec5e7b7f3242e4c1dad4ea4eb5eb5744818423fae86f30630341e->leave($__internal_d3ee565222fec5e7b7f3242e4c1dad4ea4eb5eb5744818423fae86f30630341e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  29 => 4,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_user_show\">
    <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>
    <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>
</div>
", "FOSUserBundle:Profile:show_content.html.twig", "/Users/mac/SymfonyProjects/Hint/app/Resources/FOSUserBundle/views/Profile/show_content.html.twig");
    }
}
