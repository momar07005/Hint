<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_63a78e45f285da395fc8a9af3344dd24563c7e334e44e148df4828b03e0f05ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_e87a6675b9de6653535d153072d9ecf1cbbe8b2db9764685307905f7f8daa0c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e87a6675b9de6653535d153072d9ecf1cbbe8b2db9764685307905f7f8daa0c4->enter($__internal_e87a6675b9de6653535d153072d9ecf1cbbe8b2db9764685307905f7f8daa0c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_936cd611b494a9c5bbca79fb7c1d2052fc39b26281acd9f11bd5c83d4536e9c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_936cd611b494a9c5bbca79fb7c1d2052fc39b26281acd9f11bd5c83d4536e9c1->enter($__internal_936cd611b494a9c5bbca79fb7c1d2052fc39b26281acd9f11bd5c83d4536e9c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e87a6675b9de6653535d153072d9ecf1cbbe8b2db9764685307905f7f8daa0c4->leave($__internal_e87a6675b9de6653535d153072d9ecf1cbbe8b2db9764685307905f7f8daa0c4_prof);

        
        $__internal_936cd611b494a9c5bbca79fb7c1d2052fc39b26281acd9f11bd5c83d4536e9c1->leave($__internal_936cd611b494a9c5bbca79fb7c1d2052fc39b26281acd9f11bd5c83d4536e9c1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ac26b06467d751aa84bd1fd93ccd47d3c9d9184861a4061e43d32904934d7daf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac26b06467d751aa84bd1fd93ccd47d3c9d9184861a4061e43d32904934d7daf->enter($__internal_ac26b06467d751aa84bd1fd93ccd47d3c9d9184861a4061e43d32904934d7daf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6b739d1f7f0828416c1cc2484adbb5b9c87e5df6ffbb51be5a123a3f9a128c9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b739d1f7f0828416c1cc2484adbb5b9c87e5df6ffbb51be5a123a3f9a128c9e->enter($__internal_6b739d1f7f0828416c1cc2484adbb5b9c87e5df6ffbb51be5a123a3f9a128c9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_6b739d1f7f0828416c1cc2484adbb5b9c87e5df6ffbb51be5a123a3f9a128c9e->leave($__internal_6b739d1f7f0828416c1cc2484adbb5b9c87e5df6ffbb51be5a123a3f9a128c9e_prof);

        
        $__internal_ac26b06467d751aa84bd1fd93ccd47d3c9d9184861a4061e43d32904934d7daf->leave($__internal_ac26b06467d751aa84bd1fd93ccd47d3c9d9184861a4061e43d32904934d7daf_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "C:\\Hint\\app/Resources/FOSUserBundle/views/Profile/edit.html.twig");
    }
}
