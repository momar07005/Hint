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
        $__internal_c351a34f8aa04b72187c4730647006729047df418425b4259060c4e2d6e9c2af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c351a34f8aa04b72187c4730647006729047df418425b4259060c4e2d6e9c2af->enter($__internal_c351a34f8aa04b72187c4730647006729047df418425b4259060c4e2d6e9c2af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HWIOAuthBundle:Connect:connect_success.html.twig"));

        $__internal_076f567a723deead689a03d9cdb432a96ea2b234fdf7ae7fd289d3cc42b0750d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_076f567a723deead689a03d9cdb432a96ea2b234fdf7ae7fd289d3cc42b0750d->enter($__internal_076f567a723deead689a03d9cdb432a96ea2b234fdf7ae7fd289d3cc42b0750d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HWIOAuthBundle:Connect:connect_success.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c351a34f8aa04b72187c4730647006729047df418425b4259060c4e2d6e9c2af->leave($__internal_c351a34f8aa04b72187c4730647006729047df418425b4259060c4e2d6e9c2af_prof);

        
        $__internal_076f567a723deead689a03d9cdb432a96ea2b234fdf7ae7fd289d3cc42b0750d->leave($__internal_076f567a723deead689a03d9cdb432a96ea2b234fdf7ae7fd289d3cc42b0750d_prof);

    }

    // line 3
    public function block_hwi_oauth_content($context, array $blocks = array())
    {
        $__internal_ce712b4814f8657a98a29ad2f92de05087395b9f9d6fe9d9474ba9c612527d6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce712b4814f8657a98a29ad2f92de05087395b9f9d6fe9d9474ba9c612527d6c->enter($__internal_ce712b4814f8657a98a29ad2f92de05087395b9f9d6fe9d9474ba9c612527d6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

        $__internal_b15dfc40aba01ba1812425ac5354a7ad2eea134c195758fb588f4cdecdffe2ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b15dfc40aba01ba1812425ac5354a7ad2eea134c195758fb588f4cdecdffe2ad->enter($__internal_b15dfc40aba01ba1812425ac5354a7ad2eea134c195758fb588f4cdecdffe2ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

        // line 4
        echo "    <h3>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("header.success", array("%name%" => $this->getAttribute((isset($context["userInformation"]) ? $context["userInformation"] : $this->getContext($context, "userInformation")), "realName", array())), "HWIOAuthBundle"), "html", null, true);
        echo "</h3>
";
        
        $__internal_b15dfc40aba01ba1812425ac5354a7ad2eea134c195758fb588f4cdecdffe2ad->leave($__internal_b15dfc40aba01ba1812425ac5354a7ad2eea134c195758fb588f4cdecdffe2ad_prof);

        
        $__internal_ce712b4814f8657a98a29ad2f92de05087395b9f9d6fe9d9474ba9c612527d6c->leave($__internal_ce712b4814f8657a98a29ad2f92de05087395b9f9d6fe9d9474ba9c612527d6c_prof);

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
