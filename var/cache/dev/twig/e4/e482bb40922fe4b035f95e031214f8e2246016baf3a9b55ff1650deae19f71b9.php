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
        $__internal_d5496bd293369798015d883c7d082905ecd72f909ca3e3dfa7268ac752ee0f63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5496bd293369798015d883c7d082905ecd72f909ca3e3dfa7268ac752ee0f63->enter($__internal_d5496bd293369798015d883c7d082905ecd72f909ca3e3dfa7268ac752ee0f63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_42555ca8f804707b68e6d73103879080500818fa214f10d77bdccc296d06e349 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42555ca8f804707b68e6d73103879080500818fa214f10d77bdccc296d06e349->enter($__internal_42555ca8f804707b68e6d73103879080500818fa214f10d77bdccc296d06e349_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d5496bd293369798015d883c7d082905ecd72f909ca3e3dfa7268ac752ee0f63->leave($__internal_d5496bd293369798015d883c7d082905ecd72f909ca3e3dfa7268ac752ee0f63_prof);

        
        $__internal_42555ca8f804707b68e6d73103879080500818fa214f10d77bdccc296d06e349->leave($__internal_42555ca8f804707b68e6d73103879080500818fa214f10d77bdccc296d06e349_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3e6d6586747bc41a2d9f9b61842754bc4caf4cfc4f2354c58d8d559ff556e28c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e6d6586747bc41a2d9f9b61842754bc4caf4cfc4f2354c58d8d559ff556e28c->enter($__internal_3e6d6586747bc41a2d9f9b61842754bc4caf4cfc4f2354c58d8d559ff556e28c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_62f159ff22d2edde552df82303219a7c854e0058e5dd0214763eec81123c607c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62f159ff22d2edde552df82303219a7c854e0058e5dd0214763eec81123c607c->enter($__internal_62f159ff22d2edde552df82303219a7c854e0058e5dd0214763eec81123c607c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_62f159ff22d2edde552df82303219a7c854e0058e5dd0214763eec81123c607c->leave($__internal_62f159ff22d2edde552df82303219a7c854e0058e5dd0214763eec81123c607c_prof);

        
        $__internal_3e6d6586747bc41a2d9f9b61842754bc4caf4cfc4f2354c58d8d559ff556e28c->leave($__internal_3e6d6586747bc41a2d9f9b61842754bc4caf4cfc4f2354c58d8d559ff556e28c_prof);

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
", "FOSUserBundle:ChangePassword:change_password.html.twig", "C:\\Hint\\app/Resources/FOSUserBundle/views/ChangePassword/change_password.html.twig");
    }
}
