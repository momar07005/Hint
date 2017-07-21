<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_99de65678d3e0e9604278d2b94bc840211fdecc14dc4a30f967cc73b2e6289ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_d92ae6fc21acd722867698c63cb24d7a649d6414bb15a4f77d2fda554a6d1373 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d92ae6fc21acd722867698c63cb24d7a649d6414bb15a4f77d2fda554a6d1373->enter($__internal_d92ae6fc21acd722867698c63cb24d7a649d6414bb15a4f77d2fda554a6d1373_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_fdbbc175a81dd0af72297f05c8af6217d82d4310be5ed3a2e8967e046ead21bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdbbc175a81dd0af72297f05c8af6217d82d4310be5ed3a2e8967e046ead21bc->enter($__internal_fdbbc175a81dd0af72297f05c8af6217d82d4310be5ed3a2e8967e046ead21bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d92ae6fc21acd722867698c63cb24d7a649d6414bb15a4f77d2fda554a6d1373->leave($__internal_d92ae6fc21acd722867698c63cb24d7a649d6414bb15a4f77d2fda554a6d1373_prof);

        
        $__internal_fdbbc175a81dd0af72297f05c8af6217d82d4310be5ed3a2e8967e046ead21bc->leave($__internal_fdbbc175a81dd0af72297f05c8af6217d82d4310be5ed3a2e8967e046ead21bc_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_265221efe77eea5b1499c8916b6f924848d88c8f8595032539e4d7a87703adbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_265221efe77eea5b1499c8916b6f924848d88c8f8595032539e4d7a87703adbc->enter($__internal_265221efe77eea5b1499c8916b6f924848d88c8f8595032539e4d7a87703adbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f4290b13a38277c94051fe383cbb9c18c69c774e9160eff58188685781415a7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4290b13a38277c94051fe383cbb9c18c69c774e9160eff58188685781415a7e->enter($__internal_f4290b13a38277c94051fe383cbb9c18c69c774e9160eff58188685781415a7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_f4290b13a38277c94051fe383cbb9c18c69c774e9160eff58188685781415a7e->leave($__internal_f4290b13a38277c94051fe383cbb9c18c69c774e9160eff58188685781415a7e_prof);

        
        $__internal_265221efe77eea5b1499c8916b6f924848d88c8f8595032539e4d7a87703adbc->leave($__internal_265221efe77eea5b1499c8916b6f924848d88c8f8595032539e4d7a87703adbc_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
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
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:confirmed.html.twig", "/Users/mac/SymfonyProjects/Hint/app/Resources/FOSUserBundle/views/Registration/confirmed.html.twig");
    }
}
