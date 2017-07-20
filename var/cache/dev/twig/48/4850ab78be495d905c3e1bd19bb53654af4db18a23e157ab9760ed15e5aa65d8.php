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
        $__internal_34958cccd2e9003c5953d62039c4085b8f469aa5a0bc98e2466093a14344aaa7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34958cccd2e9003c5953d62039c4085b8f469aa5a0bc98e2466093a14344aaa7->enter($__internal_34958cccd2e9003c5953d62039c4085b8f469aa5a0bc98e2466093a14344aaa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_2bb9b9b26234046b677381cebae21981fb32a24e7575828ba411cfd9ea96e15f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bb9b9b26234046b677381cebae21981fb32a24e7575828ba411cfd9ea96e15f->enter($__internal_2bb9b9b26234046b677381cebae21981fb32a24e7575828ba411cfd9ea96e15f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_34958cccd2e9003c5953d62039c4085b8f469aa5a0bc98e2466093a14344aaa7->leave($__internal_34958cccd2e9003c5953d62039c4085b8f469aa5a0bc98e2466093a14344aaa7_prof);

        
        $__internal_2bb9b9b26234046b677381cebae21981fb32a24e7575828ba411cfd9ea96e15f->leave($__internal_2bb9b9b26234046b677381cebae21981fb32a24e7575828ba411cfd9ea96e15f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1536eafad685bbc9859fc02e08c1285c04da5d1a0613c5831fd6ec3d86bcbbfb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1536eafad685bbc9859fc02e08c1285c04da5d1a0613c5831fd6ec3d86bcbbfb->enter($__internal_1536eafad685bbc9859fc02e08c1285c04da5d1a0613c5831fd6ec3d86bcbbfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_eb263d649c90d3918aac5a82c76738a0b091fd3074c23b5d010139060f063b89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb263d649c90d3918aac5a82c76738a0b091fd3074c23b5d010139060f063b89->enter($__internal_eb263d649c90d3918aac5a82c76738a0b091fd3074c23b5d010139060f063b89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_eb263d649c90d3918aac5a82c76738a0b091fd3074c23b5d010139060f063b89->leave($__internal_eb263d649c90d3918aac5a82c76738a0b091fd3074c23b5d010139060f063b89_prof);

        
        $__internal_1536eafad685bbc9859fc02e08c1285c04da5d1a0613c5831fd6ec3d86bcbbfb->leave($__internal_1536eafad685bbc9859fc02e08c1285c04da5d1a0613c5831fd6ec3d86bcbbfb_prof);

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
