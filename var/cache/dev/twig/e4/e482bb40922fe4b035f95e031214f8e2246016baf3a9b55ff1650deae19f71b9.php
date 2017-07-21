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
        $__internal_ea7149114384c88361fde8ebae39b8e6c379027ec8a094f39671bd17f4d37f89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea7149114384c88361fde8ebae39b8e6c379027ec8a094f39671bd17f4d37f89->enter($__internal_ea7149114384c88361fde8ebae39b8e6c379027ec8a094f39671bd17f4d37f89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_d7ea3903d1e39df191794f1cddb64dd3431a95b15d8f61d86289c74cbc0a51a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7ea3903d1e39df191794f1cddb64dd3431a95b15d8f61d86289c74cbc0a51a3->enter($__internal_d7ea3903d1e39df191794f1cddb64dd3431a95b15d8f61d86289c74cbc0a51a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea7149114384c88361fde8ebae39b8e6c379027ec8a094f39671bd17f4d37f89->leave($__internal_ea7149114384c88361fde8ebae39b8e6c379027ec8a094f39671bd17f4d37f89_prof);

        
        $__internal_d7ea3903d1e39df191794f1cddb64dd3431a95b15d8f61d86289c74cbc0a51a3->leave($__internal_d7ea3903d1e39df191794f1cddb64dd3431a95b15d8f61d86289c74cbc0a51a3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7a2df74235663c9373cb9bd33cbcc77f0d1d8e7458fc946e86c96f6d98de53cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a2df74235663c9373cb9bd33cbcc77f0d1d8e7458fc946e86c96f6d98de53cb->enter($__internal_7a2df74235663c9373cb9bd33cbcc77f0d1d8e7458fc946e86c96f6d98de53cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9960bbc52616985b37f32c9b54b6f596833b3c114d48ff939294e546eff93328 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9960bbc52616985b37f32c9b54b6f596833b3c114d48ff939294e546eff93328->enter($__internal_9960bbc52616985b37f32c9b54b6f596833b3c114d48ff939294e546eff93328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_9960bbc52616985b37f32c9b54b6f596833b3c114d48ff939294e546eff93328->leave($__internal_9960bbc52616985b37f32c9b54b6f596833b3c114d48ff939294e546eff93328_prof);

        
        $__internal_7a2df74235663c9373cb9bd33cbcc77f0d1d8e7458fc946e86c96f6d98de53cb->leave($__internal_7a2df74235663c9373cb9bd33cbcc77f0d1d8e7458fc946e86c96f6d98de53cb_prof);

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
