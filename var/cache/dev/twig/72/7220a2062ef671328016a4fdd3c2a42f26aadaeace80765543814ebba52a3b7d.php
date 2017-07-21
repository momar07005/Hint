<?php

/* HWIOAuthBundle:Connect:registration_success.html.twig */
class __TwigTemplate_4d0b116cbaa8dbdede749ac2c85899ffe1cf561df283b74d06ecb745ed0dc1a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("HWIOAuthBundle::layout.html.twig", "HWIOAuthBundle:Connect:registration_success.html.twig", 1);
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
        $__internal_e14b802707a5c030821f97a9dbf8221437b70251dafddd8f03f252b6b0822655 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e14b802707a5c030821f97a9dbf8221437b70251dafddd8f03f252b6b0822655->enter($__internal_e14b802707a5c030821f97a9dbf8221437b70251dafddd8f03f252b6b0822655_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HWIOAuthBundle:Connect:registration_success.html.twig"));

        $__internal_2495e00c80da39a9bb79b220ec6e88b88a772e35e2842d4e8b21ff80440bdb74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2495e00c80da39a9bb79b220ec6e88b88a772e35e2842d4e8b21ff80440bdb74->enter($__internal_2495e00c80da39a9bb79b220ec6e88b88a772e35e2842d4e8b21ff80440bdb74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HWIOAuthBundle:Connect:registration_success.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e14b802707a5c030821f97a9dbf8221437b70251dafddd8f03f252b6b0822655->leave($__internal_e14b802707a5c030821f97a9dbf8221437b70251dafddd8f03f252b6b0822655_prof);

        
        $__internal_2495e00c80da39a9bb79b220ec6e88b88a772e35e2842d4e8b21ff80440bdb74->leave($__internal_2495e00c80da39a9bb79b220ec6e88b88a772e35e2842d4e8b21ff80440bdb74_prof);

    }

    // line 3
    public function block_hwi_oauth_content($context, array $blocks = array())
    {
        $__internal_2a0e360fad59ff3d5459eaedfd061d2dd75b8fc95df058a07d53149fd00bd0fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a0e360fad59ff3d5459eaedfd061d2dd75b8fc95df058a07d53149fd00bd0fa->enter($__internal_2a0e360fad59ff3d5459eaedfd061d2dd75b8fc95df058a07d53149fd00bd0fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

        $__internal_084b4346dc77ead80782c0c6b30b129d1782b64e465bf02723137d556efe8701 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_084b4346dc77ead80782c0c6b30b129d1782b64e465bf02723137d556efe8701->enter($__internal_084b4346dc77ead80782c0c6b30b129d1782b64e465bf02723137d556efe8701_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

        // line 4
        echo "    <h3>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("header.registration_success", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "HWIOAuthBundle"), "html", null, true);
        echo "</h3>
";
        
        $__internal_084b4346dc77ead80782c0c6b30b129d1782b64e465bf02723137d556efe8701->leave($__internal_084b4346dc77ead80782c0c6b30b129d1782b64e465bf02723137d556efe8701_prof);

        
        $__internal_2a0e360fad59ff3d5459eaedfd061d2dd75b8fc95df058a07d53149fd00bd0fa->leave($__internal_2a0e360fad59ff3d5459eaedfd061d2dd75b8fc95df058a07d53149fd00bd0fa_prof);

    }

    public function getTemplateName()
    {
        return "HWIOAuthBundle:Connect:registration_success.html.twig";
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
    <h3>{{ 'header.registration_success' | trans({'%username%': app.user.username}, 'HWIOAuthBundle') }}</h3>
{% endblock hwi_oauth_content %}
", "HWIOAuthBundle:Connect:registration_success.html.twig", "/Users/mac/SymfonyProjects/Hint/app/Resources/HWIOAuthBundle/views/Connect/registration_success.html.twig");
    }
}
