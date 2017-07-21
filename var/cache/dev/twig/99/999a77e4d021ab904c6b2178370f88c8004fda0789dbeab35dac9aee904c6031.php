<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_e4dbd497deb6193d31ca6c58354dfc01ec7cfb49cfc91bf552561bd8b69f7447 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_abfc20c3833716bac790237d6a9aee14c7a3b69b987e8b4115a46b6477c3f4c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abfc20c3833716bac790237d6a9aee14c7a3b69b987e8b4115a46b6477c3f4c7->enter($__internal_abfc20c3833716bac790237d6a9aee14c7a3b69b987e8b4115a46b6477c3f4c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_e6d9f9dff40c7974e1a540469bff698318bce4315ec7be9240c6f30b4f96ea6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6d9f9dff40c7974e1a540469bff698318bce4315ec7be9240c6f30b4f96ea6d->enter($__internal_e6d9f9dff40c7974e1a540469bff698318bce4315ec7be9240c6f30b4f96ea6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_abfc20c3833716bac790237d6a9aee14c7a3b69b987e8b4115a46b6477c3f4c7->leave($__internal_abfc20c3833716bac790237d6a9aee14c7a3b69b987e8b4115a46b6477c3f4c7_prof);

        
        $__internal_e6d9f9dff40c7974e1a540469bff698318bce4315ec7be9240c6f30b4f96ea6d->leave($__internal_e6d9f9dff40c7974e1a540469bff698318bce4315ec7be9240c6f30b4f96ea6d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f6e64903b0a775966551b48a3a8ce7652c4666aea24d84b907628efa5eed3a59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6e64903b0a775966551b48a3a8ce7652c4666aea24d84b907628efa5eed3a59->enter($__internal_f6e64903b0a775966551b48a3a8ce7652c4666aea24d84b907628efa5eed3a59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2ed341bee5c267fe8b8713a8a47e6404b0868d5d520d37a68484bae43d2072dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ed341bee5c267fe8b8713a8a47e6404b0868d5d520d37a68484bae43d2072dd->enter($__internal_2ed341bee5c267fe8b8713a8a47e6404b0868d5d520d37a68484bae43d2072dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_2ed341bee5c267fe8b8713a8a47e6404b0868d5d520d37a68484bae43d2072dd->leave($__internal_2ed341bee5c267fe8b8713a8a47e6404b0868d5d520d37a68484bae43d2072dd_prof);

        
        $__internal_f6e64903b0a775966551b48a3a8ce7652c4666aea24d84b907628efa5eed3a59->leave($__internal_f6e64903b0a775966551b48a3a8ce7652c4666aea24d84b907628efa5eed3a59_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/Users/mac/SymfonyProjects/Hint/app/Resources/FOSUserBundle/views/Profile/show.html.twig");
    }
}
