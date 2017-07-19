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
        $__internal_9c47b8d2cf276bbc4c782d265c2dbfdb6ba0aa847198da6e554b7ea9238bae27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c47b8d2cf276bbc4c782d265c2dbfdb6ba0aa847198da6e554b7ea9238bae27->enter($__internal_9c47b8d2cf276bbc4c782d265c2dbfdb6ba0aa847198da6e554b7ea9238bae27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HWIOAuthBundle:Connect:connect_success.html.twig"));

        $__internal_6d7eae94271028c52c30b7bc6e77480e2b4c745a6bfa7629df82192c79ee24bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d7eae94271028c52c30b7bc6e77480e2b4c745a6bfa7629df82192c79ee24bd->enter($__internal_6d7eae94271028c52c30b7bc6e77480e2b4c745a6bfa7629df82192c79ee24bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HWIOAuthBundle:Connect:connect_success.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c47b8d2cf276bbc4c782d265c2dbfdb6ba0aa847198da6e554b7ea9238bae27->leave($__internal_9c47b8d2cf276bbc4c782d265c2dbfdb6ba0aa847198da6e554b7ea9238bae27_prof);

        
        $__internal_6d7eae94271028c52c30b7bc6e77480e2b4c745a6bfa7629df82192c79ee24bd->leave($__internal_6d7eae94271028c52c30b7bc6e77480e2b4c745a6bfa7629df82192c79ee24bd_prof);

    }

    // line 3
    public function block_hwi_oauth_content($context, array $blocks = array())
    {
        $__internal_ab47f8e3c2a4fc22f96909127a1fd7362c085d9af6f313ff76ea2aa198245063 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab47f8e3c2a4fc22f96909127a1fd7362c085d9af6f313ff76ea2aa198245063->enter($__internal_ab47f8e3c2a4fc22f96909127a1fd7362c085d9af6f313ff76ea2aa198245063_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

        $__internal_867d52290305ecbd8d03c1902031ff7a6550428e007f247064be63b6d80b7ba2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_867d52290305ecbd8d03c1902031ff7a6550428e007f247064be63b6d80b7ba2->enter($__internal_867d52290305ecbd8d03c1902031ff7a6550428e007f247064be63b6d80b7ba2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

        // line 4
        echo "    <h3>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("header.success", array("%name%" => $this->getAttribute((isset($context["userInformation"]) ? $context["userInformation"] : $this->getContext($context, "userInformation")), "realName", array())), "HWIOAuthBundle"), "html", null, true);
        echo "</h3>
";
        
        $__internal_867d52290305ecbd8d03c1902031ff7a6550428e007f247064be63b6d80b7ba2->leave($__internal_867d52290305ecbd8d03c1902031ff7a6550428e007f247064be63b6d80b7ba2_prof);

        
        $__internal_ab47f8e3c2a4fc22f96909127a1fd7362c085d9af6f313ff76ea2aa198245063->leave($__internal_ab47f8e3c2a4fc22f96909127a1fd7362c085d9af6f313ff76ea2aa198245063_prof);

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
