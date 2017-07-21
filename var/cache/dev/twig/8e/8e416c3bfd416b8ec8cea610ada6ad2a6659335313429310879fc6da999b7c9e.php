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
        $__internal_29c0ae9f4c2e287a8a50a64b502bc753201b417d720548fa214e4ba3461b7149 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29c0ae9f4c2e287a8a50a64b502bc753201b417d720548fa214e4ba3461b7149->enter($__internal_29c0ae9f4c2e287a8a50a64b502bc753201b417d720548fa214e4ba3461b7149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HWIOAuthBundle:Connect:connect_success.html.twig"));

        $__internal_6657bfcc116f9cb34102adf8bb5cc93d8a2156e589a4015a91837379d9f0080b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6657bfcc116f9cb34102adf8bb5cc93d8a2156e589a4015a91837379d9f0080b->enter($__internal_6657bfcc116f9cb34102adf8bb5cc93d8a2156e589a4015a91837379d9f0080b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HWIOAuthBundle:Connect:connect_success.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29c0ae9f4c2e287a8a50a64b502bc753201b417d720548fa214e4ba3461b7149->leave($__internal_29c0ae9f4c2e287a8a50a64b502bc753201b417d720548fa214e4ba3461b7149_prof);

        
        $__internal_6657bfcc116f9cb34102adf8bb5cc93d8a2156e589a4015a91837379d9f0080b->leave($__internal_6657bfcc116f9cb34102adf8bb5cc93d8a2156e589a4015a91837379d9f0080b_prof);

    }

    // line 3
    public function block_hwi_oauth_content($context, array $blocks = array())
    {
        $__internal_d96b88d7744e33158ca60c5d5c3150962d06f05e4b696b7848b810334d291ef2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d96b88d7744e33158ca60c5d5c3150962d06f05e4b696b7848b810334d291ef2->enter($__internal_d96b88d7744e33158ca60c5d5c3150962d06f05e4b696b7848b810334d291ef2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

        $__internal_0cfede381c9961bb7d5b6a40e84046c84823400c6c07419612868a757c54e3e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cfede381c9961bb7d5b6a40e84046c84823400c6c07419612868a757c54e3e7->enter($__internal_0cfede381c9961bb7d5b6a40e84046c84823400c6c07419612868a757c54e3e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

        // line 4
        echo "    <h3>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("header.success", array("%name%" => $this->getAttribute((isset($context["userInformation"]) ? $context["userInformation"] : $this->getContext($context, "userInformation")), "realName", array())), "HWIOAuthBundle"), "html", null, true);
        echo "</h3>
";
        
        $__internal_0cfede381c9961bb7d5b6a40e84046c84823400c6c07419612868a757c54e3e7->leave($__internal_0cfede381c9961bb7d5b6a40e84046c84823400c6c07419612868a757c54e3e7_prof);

        
        $__internal_d96b88d7744e33158ca60c5d5c3150962d06f05e4b696b7848b810334d291ef2->leave($__internal_d96b88d7744e33158ca60c5d5c3150962d06f05e4b696b7848b810334d291ef2_prof);

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
