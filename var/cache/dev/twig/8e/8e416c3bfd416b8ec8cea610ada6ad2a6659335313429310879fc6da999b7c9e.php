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
        $__internal_5bcc2daefd94fc689eeb5164dcf2051c1a7bd862077c319512cdd431f77be750 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bcc2daefd94fc689eeb5164dcf2051c1a7bd862077c319512cdd431f77be750->enter($__internal_5bcc2daefd94fc689eeb5164dcf2051c1a7bd862077c319512cdd431f77be750_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HWIOAuthBundle:Connect:connect_success.html.twig"));

        $__internal_971ec2c99e0872a43b057550d63bdfd900fa875e0b0c512c881d4ac18ee02e9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_971ec2c99e0872a43b057550d63bdfd900fa875e0b0c512c881d4ac18ee02e9a->enter($__internal_971ec2c99e0872a43b057550d63bdfd900fa875e0b0c512c881d4ac18ee02e9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HWIOAuthBundle:Connect:connect_success.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5bcc2daefd94fc689eeb5164dcf2051c1a7bd862077c319512cdd431f77be750->leave($__internal_5bcc2daefd94fc689eeb5164dcf2051c1a7bd862077c319512cdd431f77be750_prof);

        
        $__internal_971ec2c99e0872a43b057550d63bdfd900fa875e0b0c512c881d4ac18ee02e9a->leave($__internal_971ec2c99e0872a43b057550d63bdfd900fa875e0b0c512c881d4ac18ee02e9a_prof);

    }

    // line 3
    public function block_hwi_oauth_content($context, array $blocks = array())
    {
        $__internal_f16aa18c18286de07fbba26373ff07a7587557da05d1c762c04be7a9e19d2125 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f16aa18c18286de07fbba26373ff07a7587557da05d1c762c04be7a9e19d2125->enter($__internal_f16aa18c18286de07fbba26373ff07a7587557da05d1c762c04be7a9e19d2125_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

        $__internal_9da917cf646815de926882a59c8bb401f648c76b42e08dfd06751b139786ea74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9da917cf646815de926882a59c8bb401f648c76b42e08dfd06751b139786ea74->enter($__internal_9da917cf646815de926882a59c8bb401f648c76b42e08dfd06751b139786ea74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

        // line 4
        echo "    <h3>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("header.success", array("%name%" => $this->getAttribute((isset($context["userInformation"]) ? $context["userInformation"] : $this->getContext($context, "userInformation")), "realName", array())), "HWIOAuthBundle"), "html", null, true);
        echo "</h3>
";
        
        $__internal_9da917cf646815de926882a59c8bb401f648c76b42e08dfd06751b139786ea74->leave($__internal_9da917cf646815de926882a59c8bb401f648c76b42e08dfd06751b139786ea74_prof);

        
        $__internal_f16aa18c18286de07fbba26373ff07a7587557da05d1c762c04be7a9e19d2125->leave($__internal_f16aa18c18286de07fbba26373ff07a7587557da05d1c762c04be7a9e19d2125_prof);

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
", "HWIOAuthBundle:Connect:connect_success.html.twig", "C:\\Hint\\app/Resources/HWIOAuthBundle/views/Connect/connect_success.html.twig");
    }
}
