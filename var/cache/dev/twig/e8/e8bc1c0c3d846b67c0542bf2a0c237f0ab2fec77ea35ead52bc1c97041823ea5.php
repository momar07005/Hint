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
        $__internal_55ab52dc3734a7de4e07fe97709e776e437c53241ed10c157a3fa1d4a1dd1afc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55ab52dc3734a7de4e07fe97709e776e437c53241ed10c157a3fa1d4a1dd1afc->enter($__internal_55ab52dc3734a7de4e07fe97709e776e437c53241ed10c157a3fa1d4a1dd1afc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_b0dbc3ae078a0c1e819316d332267992b9842d790e9c9ec9f87f55228ce730f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0dbc3ae078a0c1e819316d332267992b9842d790e9c9ec9f87f55228ce730f4->enter($__internal_b0dbc3ae078a0c1e819316d332267992b9842d790e9c9ec9f87f55228ce730f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_55ab52dc3734a7de4e07fe97709e776e437c53241ed10c157a3fa1d4a1dd1afc->leave($__internal_55ab52dc3734a7de4e07fe97709e776e437c53241ed10c157a3fa1d4a1dd1afc_prof);

        
        $__internal_b0dbc3ae078a0c1e819316d332267992b9842d790e9c9ec9f87f55228ce730f4->leave($__internal_b0dbc3ae078a0c1e819316d332267992b9842d790e9c9ec9f87f55228ce730f4_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3d94ae94ab7d682c638b8ac0885cd3a9223a60d3eacf06cf391889be3ee76c19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d94ae94ab7d682c638b8ac0885cd3a9223a60d3eacf06cf391889be3ee76c19->enter($__internal_3d94ae94ab7d682c638b8ac0885cd3a9223a60d3eacf06cf391889be3ee76c19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_34d2e0b4a644d1871c3138e777ffc2b617cc51c3f3fdfbda505dd0cd3161d091 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34d2e0b4a644d1871c3138e777ffc2b617cc51c3f3fdfbda505dd0cd3161d091->enter($__internal_34d2e0b4a644d1871c3138e777ffc2b617cc51c3f3fdfbda505dd0cd3161d091_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_34d2e0b4a644d1871c3138e777ffc2b617cc51c3f3fdfbda505dd0cd3161d091->leave($__internal_34d2e0b4a644d1871c3138e777ffc2b617cc51c3f3fdfbda505dd0cd3161d091_prof);

        
        $__internal_3d94ae94ab7d682c638b8ac0885cd3a9223a60d3eacf06cf391889be3ee76c19->leave($__internal_3d94ae94ab7d682c638b8ac0885cd3a9223a60d3eacf06cf391889be3ee76c19_prof);

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
