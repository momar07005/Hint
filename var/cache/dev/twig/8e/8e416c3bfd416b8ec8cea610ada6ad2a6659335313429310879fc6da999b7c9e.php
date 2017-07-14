<?php

/* HWIOAuthBundle:Connect:connect_success.html.twig */
class __TwigTemplate_64091ed9345dcbb5ffd8719db98f5bb178f6fe9c6e13a32d79bd1de93b6f7169 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("HWIOAuthBundle::layout.html.twig", "HWIOAuthBundle:Connect:connect_success.html.twig", 1);
        $this->blocks = array(
            'hwi_oauth_content' => array($this, 'block_hwi_oauth_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "HWIOAuthBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c86f59545f619e003daf450d2d06fa7c000b3050e39c3d82fef706ff6da89658 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c86f59545f619e003daf450d2d06fa7c000b3050e39c3d82fef706ff6da89658->enter($__internal_c86f59545f619e003daf450d2d06fa7c000b3050e39c3d82fef706ff6da89658_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HWIOAuthBundle:Connect:connect_success.html.twig"));

        $__internal_0283571386629e3bb140a77b2f6385f2be375b282d508b0e1dedce62b8013fbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0283571386629e3bb140a77b2f6385f2be375b282d508b0e1dedce62b8013fbd->enter($__internal_0283571386629e3bb140a77b2f6385f2be375b282d508b0e1dedce62b8013fbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HWIOAuthBundle:Connect:connect_success.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c86f59545f619e003daf450d2d06fa7c000b3050e39c3d82fef706ff6da89658->leave($__internal_c86f59545f619e003daf450d2d06fa7c000b3050e39c3d82fef706ff6da89658_prof);

        
        $__internal_0283571386629e3bb140a77b2f6385f2be375b282d508b0e1dedce62b8013fbd->leave($__internal_0283571386629e3bb140a77b2f6385f2be375b282d508b0e1dedce62b8013fbd_prof);

    }

    // line 3
    public function block_hwi_oauth_content($context, array $blocks = array())
    {
        $__internal_1eae90fe598e43fb33947c9ebf701de4b47638c6f8284e07725b1f2c5d462f4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1eae90fe598e43fb33947c9ebf701de4b47638c6f8284e07725b1f2c5d462f4e->enter($__internal_1eae90fe598e43fb33947c9ebf701de4b47638c6f8284e07725b1f2c5d462f4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

        $__internal_3e2deb5d340c13b6af2819377b25b7e9413bb118dac55cb71daaaa1c1e234010 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e2deb5d340c13b6af2819377b25b7e9413bb118dac55cb71daaaa1c1e234010->enter($__internal_3e2deb5d340c13b6af2819377b25b7e9413bb118dac55cb71daaaa1c1e234010_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

        // line 4
        echo "    <h3>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("header.success", array("%name%" => $this->getAttribute((isset($context["userInformation"]) ? $context["userInformation"] : $this->getContext($context, "userInformation")), "realName", array())), "HWIOAuthBundle"), "html", null, true);
        echo "</h3>
";
        
        $__internal_3e2deb5d340c13b6af2819377b25b7e9413bb118dac55cb71daaaa1c1e234010->leave($__internal_3e2deb5d340c13b6af2819377b25b7e9413bb118dac55cb71daaaa1c1e234010_prof);

        
        $__internal_1eae90fe598e43fb33947c9ebf701de4b47638c6f8284e07725b1f2c5d462f4e->leave($__internal_1eae90fe598e43fb33947c9ebf701de4b47638c6f8284e07725b1f2c5d462f4e_prof);

    }

    public function getTemplateName()
    {
        return "HWIOAuthBundle:Connect:connect_success.html.twig";
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
        return new Twig_Source("{% extends 'HWIOAuthBundle::layout.html.twig' %}

{% block hwi_oauth_content %}
    <h3>{{ 'header.success' | trans({'%name%': userInformation.realName}, 'HWIOAuthBundle') }}</h3>
{% endblock hwi_oauth_content %}
", "HWIOAuthBundle:Connect:connect_success.html.twig", "/Users/mac/SymfonyProjects/Hint/app/Resources/HWIOAuthBundle/views/Connect/connect_success.html.twig");
    }
}
