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
        $__internal_c40da3f68ad859626ae42ab2ac9cb35e732671efde46a305a24f174760a3044f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c40da3f68ad859626ae42ab2ac9cb35e732671efde46a305a24f174760a3044f->enter($__internal_c40da3f68ad859626ae42ab2ac9cb35e732671efde46a305a24f174760a3044f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_7c89b074c4a4247a3ac2633a37c56d3a316bbee0541de22e09a8e6a488968f20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c89b074c4a4247a3ac2633a37c56d3a316bbee0541de22e09a8e6a488968f20->enter($__internal_7c89b074c4a4247a3ac2633a37c56d3a316bbee0541de22e09a8e6a488968f20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c40da3f68ad859626ae42ab2ac9cb35e732671efde46a305a24f174760a3044f->leave($__internal_c40da3f68ad859626ae42ab2ac9cb35e732671efde46a305a24f174760a3044f_prof);

        
        $__internal_7c89b074c4a4247a3ac2633a37c56d3a316bbee0541de22e09a8e6a488968f20->leave($__internal_7c89b074c4a4247a3ac2633a37c56d3a316bbee0541de22e09a8e6a488968f20_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d832fc6d8ccb28a4bc51f22ecd39233a7e789f066ce075230204e35930c10d32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d832fc6d8ccb28a4bc51f22ecd39233a7e789f066ce075230204e35930c10d32->enter($__internal_d832fc6d8ccb28a4bc51f22ecd39233a7e789f066ce075230204e35930c10d32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ed915da3b789dc1e6035f7a0dc5e9dec93a6abc591776709c43b3f76ecfddb5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed915da3b789dc1e6035f7a0dc5e9dec93a6abc591776709c43b3f76ecfddb5c->enter($__internal_ed915da3b789dc1e6035f7a0dc5e9dec93a6abc591776709c43b3f76ecfddb5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_ed915da3b789dc1e6035f7a0dc5e9dec93a6abc591776709c43b3f76ecfddb5c->leave($__internal_ed915da3b789dc1e6035f7a0dc5e9dec93a6abc591776709c43b3f76ecfddb5c_prof);

        
        $__internal_d832fc6d8ccb28a4bc51f22ecd39233a7e789f066ce075230204e35930c10d32->leave($__internal_d832fc6d8ccb28a4bc51f22ecd39233a7e789f066ce075230204e35930c10d32_prof);

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
", "FOSUserBundle:Registration:check_email.html.twig", "C:\\Hint\\app/Resources/FOSUserBundle/views/Registration/check_email.html.twig");
    }
}
