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
        $__internal_7863f439d21818e1f6dc72bcffd64f63348ae453056f55b6489875119a5d16ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7863f439d21818e1f6dc72bcffd64f63348ae453056f55b6489875119a5d16ec->enter($__internal_7863f439d21818e1f6dc72bcffd64f63348ae453056f55b6489875119a5d16ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_5cc5f469fcccc79f1b715e1c97414c97e04d945eeb628df4e403d8ef15b8104c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cc5f469fcccc79f1b715e1c97414c97e04d945eeb628df4e403d8ef15b8104c->enter($__internal_5cc5f469fcccc79f1b715e1c97414c97e04d945eeb628df4e403d8ef15b8104c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7863f439d21818e1f6dc72bcffd64f63348ae453056f55b6489875119a5d16ec->leave($__internal_7863f439d21818e1f6dc72bcffd64f63348ae453056f55b6489875119a5d16ec_prof);

        
        $__internal_5cc5f469fcccc79f1b715e1c97414c97e04d945eeb628df4e403d8ef15b8104c->leave($__internal_5cc5f469fcccc79f1b715e1c97414c97e04d945eeb628df4e403d8ef15b8104c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7e763be653b365169a4810c94028495e1d50ac856e03fa0d9287c407d5f61305 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e763be653b365169a4810c94028495e1d50ac856e03fa0d9287c407d5f61305->enter($__internal_7e763be653b365169a4810c94028495e1d50ac856e03fa0d9287c407d5f61305_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_21d84298dc9ff00a9243f890f32d5c6e0e79cfc6cf4f30b7c3dc96c2a5720a72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21d84298dc9ff00a9243f890f32d5c6e0e79cfc6cf4f30b7c3dc96c2a5720a72->enter($__internal_21d84298dc9ff00a9243f890f32d5c6e0e79cfc6cf4f30b7c3dc96c2a5720a72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_21d84298dc9ff00a9243f890f32d5c6e0e79cfc6cf4f30b7c3dc96c2a5720a72->leave($__internal_21d84298dc9ff00a9243f890f32d5c6e0e79cfc6cf4f30b7c3dc96c2a5720a72_prof);

        
        $__internal_7e763be653b365169a4810c94028495e1d50ac856e03fa0d9287c407d5f61305->leave($__internal_7e763be653b365169a4810c94028495e1d50ac856e03fa0d9287c407d5f61305_prof);

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
