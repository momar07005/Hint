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
        $__internal_f49568d88d74bcda250f1a190671300f1f5220586127d6f8758c99f9f3e90c91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f49568d88d74bcda250f1a190671300f1f5220586127d6f8758c99f9f3e90c91->enter($__internal_f49568d88d74bcda250f1a190671300f1f5220586127d6f8758c99f9f3e90c91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_fcd69d4a85476d09526407cbea06b5d59706e34228d756521ee438c3b2e2f960 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcd69d4a85476d09526407cbea06b5d59706e34228d756521ee438c3b2e2f960->enter($__internal_fcd69d4a85476d09526407cbea06b5d59706e34228d756521ee438c3b2e2f960_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f49568d88d74bcda250f1a190671300f1f5220586127d6f8758c99f9f3e90c91->leave($__internal_f49568d88d74bcda250f1a190671300f1f5220586127d6f8758c99f9f3e90c91_prof);

        
        $__internal_fcd69d4a85476d09526407cbea06b5d59706e34228d756521ee438c3b2e2f960->leave($__internal_fcd69d4a85476d09526407cbea06b5d59706e34228d756521ee438c3b2e2f960_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_638c051e6eb8bd4052edecd96a63684bf6e93aa9b2e16ec629bbc2614dc2b0b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_638c051e6eb8bd4052edecd96a63684bf6e93aa9b2e16ec629bbc2614dc2b0b6->enter($__internal_638c051e6eb8bd4052edecd96a63684bf6e93aa9b2e16ec629bbc2614dc2b0b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a99f3bb76ee89242abf67281c40d4117cde427d5d71ada1f5d5c4e613482ab81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a99f3bb76ee89242abf67281c40d4117cde427d5d71ada1f5d5c4e613482ab81->enter($__internal_a99f3bb76ee89242abf67281c40d4117cde427d5d71ada1f5d5c4e613482ab81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_a99f3bb76ee89242abf67281c40d4117cde427d5d71ada1f5d5c4e613482ab81->leave($__internal_a99f3bb76ee89242abf67281c40d4117cde427d5d71ada1f5d5c4e613482ab81_prof);

        
        $__internal_638c051e6eb8bd4052edecd96a63684bf6e93aa9b2e16ec629bbc2614dc2b0b6->leave($__internal_638c051e6eb8bd4052edecd96a63684bf6e93aa9b2e16ec629bbc2614dc2b0b6_prof);

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
