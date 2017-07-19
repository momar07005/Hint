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
        $__internal_e6682a61105cba8bfe8f396b9cecdeaaf3ea86def51aa5afdf118968d99f85c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6682a61105cba8bfe8f396b9cecdeaaf3ea86def51aa5afdf118968d99f85c9->enter($__internal_e6682a61105cba8bfe8f396b9cecdeaaf3ea86def51aa5afdf118968d99f85c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_3473523f0275935f4bbd510844790494cdbc74b147b68f44099e1f89b12b5978 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3473523f0275935f4bbd510844790494cdbc74b147b68f44099e1f89b12b5978->enter($__internal_3473523f0275935f4bbd510844790494cdbc74b147b68f44099e1f89b12b5978_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e6682a61105cba8bfe8f396b9cecdeaaf3ea86def51aa5afdf118968d99f85c9->leave($__internal_e6682a61105cba8bfe8f396b9cecdeaaf3ea86def51aa5afdf118968d99f85c9_prof);

        
        $__internal_3473523f0275935f4bbd510844790494cdbc74b147b68f44099e1f89b12b5978->leave($__internal_3473523f0275935f4bbd510844790494cdbc74b147b68f44099e1f89b12b5978_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f5c19ab874c1d50ff07f7624fdf2ed81a73dfcb32a77783220f00af92ba0097f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5c19ab874c1d50ff07f7624fdf2ed81a73dfcb32a77783220f00af92ba0097f->enter($__internal_f5c19ab874c1d50ff07f7624fdf2ed81a73dfcb32a77783220f00af92ba0097f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d733a6140d91e77ebb2665f01039f73c10bd8c672b506ce00877195e27bf46d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d733a6140d91e77ebb2665f01039f73c10bd8c672b506ce00877195e27bf46d1->enter($__internal_d733a6140d91e77ebb2665f01039f73c10bd8c672b506ce00877195e27bf46d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_d733a6140d91e77ebb2665f01039f73c10bd8c672b506ce00877195e27bf46d1->leave($__internal_d733a6140d91e77ebb2665f01039f73c10bd8c672b506ce00877195e27bf46d1_prof);

        
        $__internal_f5c19ab874c1d50ff07f7624fdf2ed81a73dfcb32a77783220f00af92ba0097f->leave($__internal_f5c19ab874c1d50ff07f7624fdf2ed81a73dfcb32a77783220f00af92ba0097f_prof);

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
