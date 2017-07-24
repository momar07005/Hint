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
        $__internal_c2b1e3cb6f11e0f8928b9c128aff55de454185278a4525da4c1dcd76e160a213 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2b1e3cb6f11e0f8928b9c128aff55de454185278a4525da4c1dcd76e160a213->enter($__internal_c2b1e3cb6f11e0f8928b9c128aff55de454185278a4525da4c1dcd76e160a213_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_243e9923fa5ab3c7d5604133f126871ccbc9e1df05561ae0761d488cf6df1979 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_243e9923fa5ab3c7d5604133f126871ccbc9e1df05561ae0761d488cf6df1979->enter($__internal_243e9923fa5ab3c7d5604133f126871ccbc9e1df05561ae0761d488cf6df1979_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c2b1e3cb6f11e0f8928b9c128aff55de454185278a4525da4c1dcd76e160a213->leave($__internal_c2b1e3cb6f11e0f8928b9c128aff55de454185278a4525da4c1dcd76e160a213_prof);

        
        $__internal_243e9923fa5ab3c7d5604133f126871ccbc9e1df05561ae0761d488cf6df1979->leave($__internal_243e9923fa5ab3c7d5604133f126871ccbc9e1df05561ae0761d488cf6df1979_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fba36129f560c9631f94e5c0e4cc9e290dc2ebf4db7d8a1e685d4f52a0994519 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fba36129f560c9631f94e5c0e4cc9e290dc2ebf4db7d8a1e685d4f52a0994519->enter($__internal_fba36129f560c9631f94e5c0e4cc9e290dc2ebf4db7d8a1e685d4f52a0994519_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a098979afdf615f5d5b721d99e429a7644e241d33766ac6c13f036ed0492d607 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a098979afdf615f5d5b721d99e429a7644e241d33766ac6c13f036ed0492d607->enter($__internal_a098979afdf615f5d5b721d99e429a7644e241d33766ac6c13f036ed0492d607_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_a098979afdf615f5d5b721d99e429a7644e241d33766ac6c13f036ed0492d607->leave($__internal_a098979afdf615f5d5b721d99e429a7644e241d33766ac6c13f036ed0492d607_prof);

        
        $__internal_fba36129f560c9631f94e5c0e4cc9e290dc2ebf4db7d8a1e685d4f52a0994519->leave($__internal_fba36129f560c9631f94e5c0e4cc9e290dc2ebf4db7d8a1e685d4f52a0994519_prof);

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
", "FOSUserBundle:Profile:edit.html.twig", "/Users/mac/SymfonyProjects/Hint/app/Resources/FOSUserBundle/views/Profile/edit.html.twig");
    }
}
