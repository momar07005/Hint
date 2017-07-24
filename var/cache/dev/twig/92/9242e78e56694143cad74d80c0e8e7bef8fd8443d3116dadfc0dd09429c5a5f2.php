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
        $__internal_3bf3509de5aafefefb6183a0d53fea0b5fa72f12d65705eff3afb17d5429a04c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bf3509de5aafefefb6183a0d53fea0b5fa72f12d65705eff3afb17d5429a04c->enter($__internal_3bf3509de5aafefefb6183a0d53fea0b5fa72f12d65705eff3afb17d5429a04c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_06298437978439310164f388b9c864031d3925ee1aedec2a2753ef35859145ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06298437978439310164f388b9c864031d3925ee1aedec2a2753ef35859145ec->enter($__internal_06298437978439310164f388b9c864031d3925ee1aedec2a2753ef35859145ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3bf3509de5aafefefb6183a0d53fea0b5fa72f12d65705eff3afb17d5429a04c->leave($__internal_3bf3509de5aafefefb6183a0d53fea0b5fa72f12d65705eff3afb17d5429a04c_prof);

        
        $__internal_06298437978439310164f388b9c864031d3925ee1aedec2a2753ef35859145ec->leave($__internal_06298437978439310164f388b9c864031d3925ee1aedec2a2753ef35859145ec_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cde100f8b626b22c299927a967c11588d0292cb5c4995c93cc7b090fcdf1c19c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cde100f8b626b22c299927a967c11588d0292cb5c4995c93cc7b090fcdf1c19c->enter($__internal_cde100f8b626b22c299927a967c11588d0292cb5c4995c93cc7b090fcdf1c19c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1aab0b6f8b02a77a0f137a3ec17ee67a607b76f79efcb342e562aabb3c639fad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1aab0b6f8b02a77a0f137a3ec17ee67a607b76f79efcb342e562aabb3c639fad->enter($__internal_1aab0b6f8b02a77a0f137a3ec17ee67a607b76f79efcb342e562aabb3c639fad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) ? $context["tokenLifetime"] : $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_1aab0b6f8b02a77a0f137a3ec17ee67a607b76f79efcb342e562aabb3c639fad->leave($__internal_1aab0b6f8b02a77a0f137a3ec17ee67a607b76f79efcb342e562aabb3c639fad_prof);

        
        $__internal_cde100f8b626b22c299927a967c11588d0292cb5c4995c93cc7b090fcdf1c19c->leave($__internal_cde100f8b626b22c299927a967c11588d0292cb5c4995c93cc7b090fcdf1c19c_prof);

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
", "FOSUserBundle:Resetting:check_email.html.twig", "C:\\Hint\\app/Resources/FOSUserBundle/views/Resetting/check_email.html.twig");
    }
}
