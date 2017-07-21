<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_9647b7dc739a6b3a00c2b95734c96cdd272cae1495a4e5dcb26acdab955a7b4c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_452d2bfe085ae2fb3e99f9486a34959babe548ad2acfd58f019ebda06fa221be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_452d2bfe085ae2fb3e99f9486a34959babe548ad2acfd58f019ebda06fa221be->enter($__internal_452d2bfe085ae2fb3e99f9486a34959babe548ad2acfd58f019ebda06fa221be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_583e391387511c4f44dcd6e9cf90074e675d36d150b2b77dc5f6c6a78add0038 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_583e391387511c4f44dcd6e9cf90074e675d36d150b2b77dc5f6c6a78add0038->enter($__internal_583e391387511c4f44dcd6e9cf90074e675d36d150b2b77dc5f6c6a78add0038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_452d2bfe085ae2fb3e99f9486a34959babe548ad2acfd58f019ebda06fa221be->leave($__internal_452d2bfe085ae2fb3e99f9486a34959babe548ad2acfd58f019ebda06fa221be_prof);

        
        $__internal_583e391387511c4f44dcd6e9cf90074e675d36d150b2b77dc5f6c6a78add0038->leave($__internal_583e391387511c4f44dcd6e9cf90074e675d36d150b2b77dc5f6c6a78add0038_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_eb46a84859b71c7219cd1c3974e824fa941e2450f5ed7a7dd95e2579cd4e02c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb46a84859b71c7219cd1c3974e824fa941e2450f5ed7a7dd95e2579cd4e02c5->enter($__internal_eb46a84859b71c7219cd1c3974e824fa941e2450f5ed7a7dd95e2579cd4e02c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_43d9bd19c4a029da51714719d9ce354c17e31de3d91d555d144378fa5dfbda97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43d9bd19c4a029da51714719d9ce354c17e31de3d91d555d144378fa5dfbda97->enter($__internal_43d9bd19c4a029da51714719d9ce354c17e31de3d91d555d144378fa5dfbda97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_43d9bd19c4a029da51714719d9ce354c17e31de3d91d555d144378fa5dfbda97->leave($__internal_43d9bd19c4a029da51714719d9ce354c17e31de3d91d555d144378fa5dfbda97_prof);

        
        $__internal_eb46a84859b71c7219cd1c3974e824fa941e2450f5ed7a7dd95e2579cd4e02c5->leave($__internal_eb46a84859b71c7219cd1c3974e824fa941e2450f5ed7a7dd95e2579cd4e02c5_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d7f49df9de5da161119585dd83c3019734da55a20fa490b241648341ef4b5e13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7f49df9de5da161119585dd83c3019734da55a20fa490b241648341ef4b5e13->enter($__internal_d7f49df9de5da161119585dd83c3019734da55a20fa490b241648341ef4b5e13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d2f76418d0e47cccc818ea20d854a36786e69546e71405878f7df72e8afcd1f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2f76418d0e47cccc818ea20d854a36786e69546e71405878f7df72e8afcd1f2->enter($__internal_d2f76418d0e47cccc818ea20d854a36786e69546e71405878f7df72e8afcd1f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_d2f76418d0e47cccc818ea20d854a36786e69546e71405878f7df72e8afcd1f2->leave($__internal_d2f76418d0e47cccc818ea20d854a36786e69546e71405878f7df72e8afcd1f2_prof);

        
        $__internal_d7f49df9de5da161119585dd83c3019734da55a20fa490b241648341ef4b5e13->leave($__internal_d7f49df9de5da161119585dd83c3019734da55a20fa490b241648341ef4b5e13_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_98a203f9acb9ceaa48cf16d726d62c589b4b9d07063a084a9f303be5f682afa7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98a203f9acb9ceaa48cf16d726d62c589b4b9d07063a084a9f303be5f682afa7->enter($__internal_98a203f9acb9ceaa48cf16d726d62c589b4b9d07063a084a9f303be5f682afa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_38b73d17f36b43ad3feac9066beb8cb88c645a8c023061dab9627148ddaec45b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38b73d17f36b43ad3feac9066beb8cb88c645a8c023061dab9627148ddaec45b->enter($__internal_38b73d17f36b43ad3feac9066beb8cb88c645a8c023061dab9627148ddaec45b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_38b73d17f36b43ad3feac9066beb8cb88c645a8c023061dab9627148ddaec45b->leave($__internal_38b73d17f36b43ad3feac9066beb8cb88c645a8c023061dab9627148ddaec45b_prof);

        
        $__internal_98a203f9acb9ceaa48cf16d726d62c589b4b9d07063a084a9f303be5f682afa7->leave($__internal_98a203f9acb9ceaa48cf16d726d62c589b4b9d07063a084a9f303be5f682afa7_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "/Users/mac/SymfonyProjects/Hint/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
