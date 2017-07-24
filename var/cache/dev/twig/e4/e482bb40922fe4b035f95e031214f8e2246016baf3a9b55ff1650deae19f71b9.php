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
        $__internal_3ec47695ebb9a3e54304283711f1ed37cd211f6036502a083698bc77257bcb92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ec47695ebb9a3e54304283711f1ed37cd211f6036502a083698bc77257bcb92->enter($__internal_3ec47695ebb9a3e54304283711f1ed37cd211f6036502a083698bc77257bcb92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_387fd09e8ea3017a606364399078a34e449f2239e210ce5c98fac1879173b8a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_387fd09e8ea3017a606364399078a34e449f2239e210ce5c98fac1879173b8a6->enter($__internal_387fd09e8ea3017a606364399078a34e449f2239e210ce5c98fac1879173b8a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ec47695ebb9a3e54304283711f1ed37cd211f6036502a083698bc77257bcb92->leave($__internal_3ec47695ebb9a3e54304283711f1ed37cd211f6036502a083698bc77257bcb92_prof);

        
        $__internal_387fd09e8ea3017a606364399078a34e449f2239e210ce5c98fac1879173b8a6->leave($__internal_387fd09e8ea3017a606364399078a34e449f2239e210ce5c98fac1879173b8a6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0dcb5e5f6479924057cde66134ea2911d6d8580a4d99d27bd8a2fdedd98500cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0dcb5e5f6479924057cde66134ea2911d6d8580a4d99d27bd8a2fdedd98500cf->enter($__internal_0dcb5e5f6479924057cde66134ea2911d6d8580a4d99d27bd8a2fdedd98500cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9504e29c38b8b0bf4093f72a863e4efb2e4ef4f2d25756eaa2712ddc4e668096 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9504e29c38b8b0bf4093f72a863e4efb2e4ef4f2d25756eaa2712ddc4e668096->enter($__internal_9504e29c38b8b0bf4093f72a863e4efb2e4ef4f2d25756eaa2712ddc4e668096_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_9504e29c38b8b0bf4093f72a863e4efb2e4ef4f2d25756eaa2712ddc4e668096->leave($__internal_9504e29c38b8b0bf4093f72a863e4efb2e4ef4f2d25756eaa2712ddc4e668096_prof);

        
        $__internal_0dcb5e5f6479924057cde66134ea2911d6d8580a4d99d27bd8a2fdedd98500cf->leave($__internal_0dcb5e5f6479924057cde66134ea2911d6d8580a4d99d27bd8a2fdedd98500cf_prof);

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
