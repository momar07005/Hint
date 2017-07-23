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
        $__internal_06af0bf8a7c3a1b91e4a7a812f5a5d78c442a9bd398c4c6836d18fd49ff7b45c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06af0bf8a7c3a1b91e4a7a812f5a5d78c442a9bd398c4c6836d18fd49ff7b45c->enter($__internal_06af0bf8a7c3a1b91e4a7a812f5a5d78c442a9bd398c4c6836d18fd49ff7b45c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        $__internal_05acbd5b803cf3ea3569516f17b6854d9ee45317099f1e644637733a69923174 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05acbd5b803cf3ea3569516f17b6854d9ee45317099f1e644637733a69923174->enter($__internal_05acbd5b803cf3ea3569516f17b6854d9ee45317099f1e644637733a69923174_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

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
        
        $__internal_06af0bf8a7c3a1b91e4a7a812f5a5d78c442a9bd398c4c6836d18fd49ff7b45c->leave($__internal_06af0bf8a7c3a1b91e4a7a812f5a5d78c442a9bd398c4c6836d18fd49ff7b45c_prof);

        
        $__internal_05acbd5b803cf3ea3569516f17b6854d9ee45317099f1e644637733a69923174->leave($__internal_05acbd5b803cf3ea3569516f17b6854d9ee45317099f1e644637733a69923174_prof);

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
", "FOSUserBundle:Profile:show_content.html.twig", "C:\\Hint\\app/Resources/FOSUserBundle/views/Profile/show_content.html.twig");
    }
}
