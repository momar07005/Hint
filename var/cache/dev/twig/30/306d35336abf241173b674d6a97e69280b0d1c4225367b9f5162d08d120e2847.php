<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_63a78e45f285da395fc8a9af3344dd24563c7e334e44e148df4828b03e0f05ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_ddf63d5a8a47d6d549407e3fb0221fdfde623c4ba0d570b9ebd4057c629f416a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddf63d5a8a47d6d549407e3fb0221fdfde623c4ba0d570b9ebd4057c629f416a->enter($__internal_ddf63d5a8a47d6d549407e3fb0221fdfde623c4ba0d570b9ebd4057c629f416a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_61b58ab66d25d9942d749545d3bb556527bc0bc85339a24f66062dd1d92bbfe3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61b58ab66d25d9942d749545d3bb556527bc0bc85339a24f66062dd1d92bbfe3->enter($__internal_61b58ab66d25d9942d749545d3bb556527bc0bc85339a24f66062dd1d92bbfe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ddf63d5a8a47d6d549407e3fb0221fdfde623c4ba0d570b9ebd4057c629f416a->leave($__internal_ddf63d5a8a47d6d549407e3fb0221fdfde623c4ba0d570b9ebd4057c629f416a_prof);

        
        $__internal_61b58ab66d25d9942d749545d3bb556527bc0bc85339a24f66062dd1d92bbfe3->leave($__internal_61b58ab66d25d9942d749545d3bb556527bc0bc85339a24f66062dd1d92bbfe3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_71f984a46bffbafd47abb56a5ab9f6d7a85e1005b7dddf873cd882c40fdcc328 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71f984a46bffbafd47abb56a5ab9f6d7a85e1005b7dddf873cd882c40fdcc328->enter($__internal_71f984a46bffbafd47abb56a5ab9f6d7a85e1005b7dddf873cd882c40fdcc328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_3d786a2c954d2cd195473b26ee45bd2985f327063818c6fb908239dd51e3f937 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d786a2c954d2cd195473b26ee45bd2985f327063818c6fb908239dd51e3f937->enter($__internal_3d786a2c954d2cd195473b26ee45bd2985f327063818c6fb908239dd51e3f937_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_3d786a2c954d2cd195473b26ee45bd2985f327063818c6fb908239dd51e3f937->leave($__internal_3d786a2c954d2cd195473b26ee45bd2985f327063818c6fb908239dd51e3f937_prof);

        
        $__internal_71f984a46bffbafd47abb56a5ab9f6d7a85e1005b7dddf873cd882c40fdcc328->leave($__internal_71f984a46bffbafd47abb56a5ab9f6d7a85e1005b7dddf873cd882c40fdcc328_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "C:\\Hint\\app/Resources/FOSUserBundle/views/Profile/edit.html.twig");
    }
}
