<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_94b3ea64fabda46e20ee47a4d49c2030e52788807924e1ac5babb68a2e0fa9eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_11186d1ed76b0fde8342dcf839ba34cc2fc9b6eab473aaa622ca5aacd03fac36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11186d1ed76b0fde8342dcf839ba34cc2fc9b6eab473aaa622ca5aacd03fac36->enter($__internal_11186d1ed76b0fde8342dcf839ba34cc2fc9b6eab473aaa622ca5aacd03fac36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_b418a8b3a3baa843a1c37e1b49f36160f0a58971b58fc5e489fe867859539463 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b418a8b3a3baa843a1c37e1b49f36160f0a58971b58fc5e489fe867859539463->enter($__internal_b418a8b3a3baa843a1c37e1b49f36160f0a58971b58fc5e489fe867859539463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_11186d1ed76b0fde8342dcf839ba34cc2fc9b6eab473aaa622ca5aacd03fac36->leave($__internal_11186d1ed76b0fde8342dcf839ba34cc2fc9b6eab473aaa622ca5aacd03fac36_prof);

        
        $__internal_b418a8b3a3baa843a1c37e1b49f36160f0a58971b58fc5e489fe867859539463->leave($__internal_b418a8b3a3baa843a1c37e1b49f36160f0a58971b58fc5e489fe867859539463_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c4b007f3d126e2ead7787d2b45f5e7859bcbb0f607ca36a7869f969d38601b4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4b007f3d126e2ead7787d2b45f5e7859bcbb0f607ca36a7869f969d38601b4c->enter($__internal_c4b007f3d126e2ead7787d2b45f5e7859bcbb0f607ca36a7869f969d38601b4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ac2888f9a6216499d92e51ff35e37ced52a26e77f251bb7fb516abf005008e33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac2888f9a6216499d92e51ff35e37ced52a26e77f251bb7fb516abf005008e33->enter($__internal_ac2888f9a6216499d92e51ff35e37ced52a26e77f251bb7fb516abf005008e33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_ac2888f9a6216499d92e51ff35e37ced52a26e77f251bb7fb516abf005008e33->leave($__internal_ac2888f9a6216499d92e51ff35e37ced52a26e77f251bb7fb516abf005008e33_prof);

        
        $__internal_c4b007f3d126e2ead7787d2b45f5e7859bcbb0f607ca36a7869f969d38601b4c->leave($__internal_c4b007f3d126e2ead7787d2b45f5e7859bcbb0f607ca36a7869f969d38601b4c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "/Users/mac/SymfonyProjects/Hint/app/Resources/FOSUserBundle/views/Resetting/request.html.twig");
    }
}
