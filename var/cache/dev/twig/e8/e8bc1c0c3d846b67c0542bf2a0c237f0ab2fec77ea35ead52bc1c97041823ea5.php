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
        $__internal_606d8c3acc7f95dfc09941affc03058e16bf556d04265034d58714886f5b6829 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_606d8c3acc7f95dfc09941affc03058e16bf556d04265034d58714886f5b6829->enter($__internal_606d8c3acc7f95dfc09941affc03058e16bf556d04265034d58714886f5b6829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_170aeec8160e2e507ea452e6223f448a9448f18dedc4ea7eb9a92ae24a81cc44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_170aeec8160e2e507ea452e6223f448a9448f18dedc4ea7eb9a92ae24a81cc44->enter($__internal_170aeec8160e2e507ea452e6223f448a9448f18dedc4ea7eb9a92ae24a81cc44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_606d8c3acc7f95dfc09941affc03058e16bf556d04265034d58714886f5b6829->leave($__internal_606d8c3acc7f95dfc09941affc03058e16bf556d04265034d58714886f5b6829_prof);

        
        $__internal_170aeec8160e2e507ea452e6223f448a9448f18dedc4ea7eb9a92ae24a81cc44->leave($__internal_170aeec8160e2e507ea452e6223f448a9448f18dedc4ea7eb9a92ae24a81cc44_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ed02ad2db45fa89c89f0ae0968212ab934201ed222012e0a285f8586a7481f88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed02ad2db45fa89c89f0ae0968212ab934201ed222012e0a285f8586a7481f88->enter($__internal_ed02ad2db45fa89c89f0ae0968212ab934201ed222012e0a285f8586a7481f88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_86aebe30da19ba5fb38fa9ca32bec678d75f8e26f9867683f67d1eb4be502f09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86aebe30da19ba5fb38fa9ca32bec678d75f8e26f9867683f67d1eb4be502f09->enter($__internal_86aebe30da19ba5fb38fa9ca32bec678d75f8e26f9867683f67d1eb4be502f09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_86aebe30da19ba5fb38fa9ca32bec678d75f8e26f9867683f67d1eb4be502f09->leave($__internal_86aebe30da19ba5fb38fa9ca32bec678d75f8e26f9867683f67d1eb4be502f09_prof);

        
        $__internal_ed02ad2db45fa89c89f0ae0968212ab934201ed222012e0a285f8586a7481f88->leave($__internal_ed02ad2db45fa89c89f0ae0968212ab934201ed222012e0a285f8586a7481f88_prof);

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
