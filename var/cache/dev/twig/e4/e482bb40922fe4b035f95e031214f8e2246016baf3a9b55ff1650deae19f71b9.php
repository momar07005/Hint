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
        $__internal_764030078ff08ff0ea34fc1cd6ada56fdda4b8c3dd32cf7df8998792135db652 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_764030078ff08ff0ea34fc1cd6ada56fdda4b8c3dd32cf7df8998792135db652->enter($__internal_764030078ff08ff0ea34fc1cd6ada56fdda4b8c3dd32cf7df8998792135db652_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_ef5d5fdb35cbfec44eecb3918d312cd6530bc1c54e741b9ed7266328606c70b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef5d5fdb35cbfec44eecb3918d312cd6530bc1c54e741b9ed7266328606c70b1->enter($__internal_ef5d5fdb35cbfec44eecb3918d312cd6530bc1c54e741b9ed7266328606c70b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_764030078ff08ff0ea34fc1cd6ada56fdda4b8c3dd32cf7df8998792135db652->leave($__internal_764030078ff08ff0ea34fc1cd6ada56fdda4b8c3dd32cf7df8998792135db652_prof);

        
        $__internal_ef5d5fdb35cbfec44eecb3918d312cd6530bc1c54e741b9ed7266328606c70b1->leave($__internal_ef5d5fdb35cbfec44eecb3918d312cd6530bc1c54e741b9ed7266328606c70b1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_85a0babec02fe1b675e4cfda8ad49a60db37796252cdbf0b8cfefb03184b16b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85a0babec02fe1b675e4cfda8ad49a60db37796252cdbf0b8cfefb03184b16b2->enter($__internal_85a0babec02fe1b675e4cfda8ad49a60db37796252cdbf0b8cfefb03184b16b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f2e7adf73b4fbf3e00fd835ee3c91cae3eaf7696a2164e77dcc15b28936ad149 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2e7adf73b4fbf3e00fd835ee3c91cae3eaf7696a2164e77dcc15b28936ad149->enter($__internal_f2e7adf73b4fbf3e00fd835ee3c91cae3eaf7696a2164e77dcc15b28936ad149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_f2e7adf73b4fbf3e00fd835ee3c91cae3eaf7696a2164e77dcc15b28936ad149->leave($__internal_f2e7adf73b4fbf3e00fd835ee3c91cae3eaf7696a2164e77dcc15b28936ad149_prof);

        
        $__internal_85a0babec02fe1b675e4cfda8ad49a60db37796252cdbf0b8cfefb03184b16b2->leave($__internal_85a0babec02fe1b675e4cfda8ad49a60db37796252cdbf0b8cfefb03184b16b2_prof);

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
