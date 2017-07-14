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
        $__internal_dde531efc524e5deedc849df3f3109ead3c951fc6677a43aa535012ff964990d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dde531efc524e5deedc849df3f3109ead3c951fc6677a43aa535012ff964990d->enter($__internal_dde531efc524e5deedc849df3f3109ead3c951fc6677a43aa535012ff964990d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_6aa9d60a6066c222867fed44ab55bd417dd2e62bb7697dd661ebf6841422bf7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6aa9d60a6066c222867fed44ab55bd417dd2e62bb7697dd661ebf6841422bf7f->enter($__internal_6aa9d60a6066c222867fed44ab55bd417dd2e62bb7697dd661ebf6841422bf7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dde531efc524e5deedc849df3f3109ead3c951fc6677a43aa535012ff964990d->leave($__internal_dde531efc524e5deedc849df3f3109ead3c951fc6677a43aa535012ff964990d_prof);

        
        $__internal_6aa9d60a6066c222867fed44ab55bd417dd2e62bb7697dd661ebf6841422bf7f->leave($__internal_6aa9d60a6066c222867fed44ab55bd417dd2e62bb7697dd661ebf6841422bf7f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b1ff9a55bcc0a09ac27ba22c9a64e51a57dae518989695b064a2685706901dbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1ff9a55bcc0a09ac27ba22c9a64e51a57dae518989695b064a2685706901dbd->enter($__internal_b1ff9a55bcc0a09ac27ba22c9a64e51a57dae518989695b064a2685706901dbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_563e2a72ef0fe33b79bb50ffc00a826940f8dc1124688a78874c3fe89b8815df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_563e2a72ef0fe33b79bb50ffc00a826940f8dc1124688a78874c3fe89b8815df->enter($__internal_563e2a72ef0fe33b79bb50ffc00a826940f8dc1124688a78874c3fe89b8815df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_563e2a72ef0fe33b79bb50ffc00a826940f8dc1124688a78874c3fe89b8815df->leave($__internal_563e2a72ef0fe33b79bb50ffc00a826940f8dc1124688a78874c3fe89b8815df_prof);

        
        $__internal_b1ff9a55bcc0a09ac27ba22c9a64e51a57dae518989695b064a2685706901dbd->leave($__internal_b1ff9a55bcc0a09ac27ba22c9a64e51a57dae518989695b064a2685706901dbd_prof);

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
