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
        $__internal_1fbbe8aee9aafb680434427683f8c72ae462891ff2cb6f8044f6ec0b4f7be490 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fbbe8aee9aafb680434427683f8c72ae462891ff2cb6f8044f6ec0b4f7be490->enter($__internal_1fbbe8aee9aafb680434427683f8c72ae462891ff2cb6f8044f6ec0b4f7be490_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HWIOAuthBundle:Connect:connect_success.html.twig"));

        $__internal_e3a441ba7f6a442e37c3f60278c3881c5e0746a3f083beca0416b573b8892c1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3a441ba7f6a442e37c3f60278c3881c5e0746a3f083beca0416b573b8892c1c->enter($__internal_e3a441ba7f6a442e37c3f60278c3881c5e0746a3f083beca0416b573b8892c1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HWIOAuthBundle:Connect:connect_success.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1fbbe8aee9aafb680434427683f8c72ae462891ff2cb6f8044f6ec0b4f7be490->leave($__internal_1fbbe8aee9aafb680434427683f8c72ae462891ff2cb6f8044f6ec0b4f7be490_prof);

        
        $__internal_e3a441ba7f6a442e37c3f60278c3881c5e0746a3f083beca0416b573b8892c1c->leave($__internal_e3a441ba7f6a442e37c3f60278c3881c5e0746a3f083beca0416b573b8892c1c_prof);

    }

    // line 3
    public function block_hwi_oauth_content($context, array $blocks = array())
    {
        $__internal_3652ca9448752a09731c1dcef094cf6fdae8db3fd94461e814f85683afaf9852 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3652ca9448752a09731c1dcef094cf6fdae8db3fd94461e814f85683afaf9852->enter($__internal_3652ca9448752a09731c1dcef094cf6fdae8db3fd94461e814f85683afaf9852_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

        $__internal_16a7e21bcbfc7ad3aa780143eb19406973ca6f566f3bb2464c356d3f8eb1ceae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16a7e21bcbfc7ad3aa780143eb19406973ca6f566f3bb2464c356d3f8eb1ceae->enter($__internal_16a7e21bcbfc7ad3aa780143eb19406973ca6f566f3bb2464c356d3f8eb1ceae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

        // line 4
        echo "    <h3>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("header.success", array("%name%" => $this->getAttribute((isset($context["userInformation"]) ? $context["userInformation"] : $this->getContext($context, "userInformation")), "realName", array())), "HWIOAuthBundle"), "html", null, true);
        echo "</h3>
";
        
        $__internal_16a7e21bcbfc7ad3aa780143eb19406973ca6f566f3bb2464c356d3f8eb1ceae->leave($__internal_16a7e21bcbfc7ad3aa780143eb19406973ca6f566f3bb2464c356d3f8eb1ceae_prof);

        
        $__internal_3652ca9448752a09731c1dcef094cf6fdae8db3fd94461e814f85683afaf9852->leave($__internal_3652ca9448752a09731c1dcef094cf6fdae8db3fd94461e814f85683afaf9852_prof);

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
