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
        $__internal_4aa7e2d4f14a4b002b3f7b1eab0432a5b79a2d9d24809e764579c4b1817313b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4aa7e2d4f14a4b002b3f7b1eab0432a5b79a2d9d24809e764579c4b1817313b1->enter($__internal_4aa7e2d4f14a4b002b3f7b1eab0432a5b79a2d9d24809e764579c4b1817313b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        $__internal_7a2ccd7af727be006d803d95c2e185797a17c505f25dee22568f9761fd9d313a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a2ccd7af727be006d803d95c2e185797a17c505f25dee22568f9761fd9d313a->enter($__internal_7a2ccd7af727be006d803d95c2e185797a17c505f25dee22568f9761fd9d313a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

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
        
        $__internal_4aa7e2d4f14a4b002b3f7b1eab0432a5b79a2d9d24809e764579c4b1817313b1->leave($__internal_4aa7e2d4f14a4b002b3f7b1eab0432a5b79a2d9d24809e764579c4b1817313b1_prof);

        
        $__internal_7a2ccd7af727be006d803d95c2e185797a17c505f25dee22568f9761fd9d313a->leave($__internal_7a2ccd7af727be006d803d95c2e185797a17c505f25dee22568f9761fd9d313a_prof);

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
