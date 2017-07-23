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
        $__internal_b86f3955fb041a90cfbebcbcf53c0a0b8c1bbdad91a3f7e0f0268d18eaab8cb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b86f3955fb041a90cfbebcbcf53c0a0b8c1bbdad91a3f7e0f0268d18eaab8cb5->enter($__internal_b86f3955fb041a90cfbebcbcf53c0a0b8c1bbdad91a3f7e0f0268d18eaab8cb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HWIOAuthBundle:Connect:connect_success.html.twig"));

        $__internal_eb34bf571b6ce9d545a762ba26f3f27da6989bb3355636d007322dc2608abf83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb34bf571b6ce9d545a762ba26f3f27da6989bb3355636d007322dc2608abf83->enter($__internal_eb34bf571b6ce9d545a762ba26f3f27da6989bb3355636d007322dc2608abf83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HWIOAuthBundle:Connect:connect_success.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b86f3955fb041a90cfbebcbcf53c0a0b8c1bbdad91a3f7e0f0268d18eaab8cb5->leave($__internal_b86f3955fb041a90cfbebcbcf53c0a0b8c1bbdad91a3f7e0f0268d18eaab8cb5_prof);

        
        $__internal_eb34bf571b6ce9d545a762ba26f3f27da6989bb3355636d007322dc2608abf83->leave($__internal_eb34bf571b6ce9d545a762ba26f3f27da6989bb3355636d007322dc2608abf83_prof);

    }

    // line 3
    public function block_hwi_oauth_content($context, array $blocks = array())
    {
        $__internal_bfe3bfefaf09870e689da859cbcd9dcee0ec1d7f465b96a460a98c4512890ef4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfe3bfefaf09870e689da859cbcd9dcee0ec1d7f465b96a460a98c4512890ef4->enter($__internal_bfe3bfefaf09870e689da859cbcd9dcee0ec1d7f465b96a460a98c4512890ef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

        $__internal_4128ebe7618efb90bfc4305add2fbcc5abdbf4a50056aa0c705bc7dff7b39a7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4128ebe7618efb90bfc4305add2fbcc5abdbf4a50056aa0c705bc7dff7b39a7e->enter($__internal_4128ebe7618efb90bfc4305add2fbcc5abdbf4a50056aa0c705bc7dff7b39a7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hwi_oauth_content"));

        // line 4
        echo "    <h3>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("header.success", array("%name%" => $this->getAttribute((isset($context["userInformation"]) ? $context["userInformation"] : $this->getContext($context, "userInformation")), "realName", array())), "HWIOAuthBundle"), "html", null, true);
        echo "</h3>
";
        
        $__internal_4128ebe7618efb90bfc4305add2fbcc5abdbf4a50056aa0c705bc7dff7b39a7e->leave($__internal_4128ebe7618efb90bfc4305add2fbcc5abdbf4a50056aa0c705bc7dff7b39a7e_prof);

        
        $__internal_bfe3bfefaf09870e689da859cbcd9dcee0ec1d7f465b96a460a98c4512890ef4->leave($__internal_bfe3bfefaf09870e689da859cbcd9dcee0ec1d7f465b96a460a98c4512890ef4_prof);

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
