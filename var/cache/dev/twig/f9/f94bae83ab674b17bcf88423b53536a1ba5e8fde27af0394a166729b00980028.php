<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_9647b7dc739a6b3a00c2b95734c96cdd272cae1495a4e5dcb26acdab955a7b4c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
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
        $__internal_f02c66dc6d187279acd52bda81f0e1dd5a069f334aec20517006c706181db974 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f02c66dc6d187279acd52bda81f0e1dd5a069f334aec20517006c706181db974->enter($__internal_f02c66dc6d187279acd52bda81f0e1dd5a069f334aec20517006c706181db974_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_a720fcc9f1aab64c1813f8a6ccde03232ad6b7a80f8b5cc5f6c7cdc1190c0bf6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a720fcc9f1aab64c1813f8a6ccde03232ad6b7a80f8b5cc5f6c7cdc1190c0bf6->enter($__internal_a720fcc9f1aab64c1813f8a6ccde03232ad6b7a80f8b5cc5f6c7cdc1190c0bf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f02c66dc6d187279acd52bda81f0e1dd5a069f334aec20517006c706181db974->leave($__internal_f02c66dc6d187279acd52bda81f0e1dd5a069f334aec20517006c706181db974_prof);

        
        $__internal_a720fcc9f1aab64c1813f8a6ccde03232ad6b7a80f8b5cc5f6c7cdc1190c0bf6->leave($__internal_a720fcc9f1aab64c1813f8a6ccde03232ad6b7a80f8b5cc5f6c7cdc1190c0bf6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7b160f58c0ac7f921587d9ecc9f9dfe47b8e8ca3efa5aa4ebaec402d12cfaa63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b160f58c0ac7f921587d9ecc9f9dfe47b8e8ca3efa5aa4ebaec402d12cfaa63->enter($__internal_7b160f58c0ac7f921587d9ecc9f9dfe47b8e8ca3efa5aa4ebaec402d12cfaa63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2354000ed50b232ccea0546f163644d5efed3eaa79e55a1a344e948b9e9cd206 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2354000ed50b232ccea0546f163644d5efed3eaa79e55a1a344e948b9e9cd206->enter($__internal_2354000ed50b232ccea0546f163644d5efed3eaa79e55a1a344e948b9e9cd206_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_2354000ed50b232ccea0546f163644d5efed3eaa79e55a1a344e948b9e9cd206->leave($__internal_2354000ed50b232ccea0546f163644d5efed3eaa79e55a1a344e948b9e9cd206_prof);

        
        $__internal_7b160f58c0ac7f921587d9ecc9f9dfe47b8e8ca3efa5aa4ebaec402d12cfaa63->leave($__internal_7b160f58c0ac7f921587d9ecc9f9dfe47b8e8ca3efa5aa4ebaec402d12cfaa63_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b2d15ba85561638d03c70f7d7a6a28aa642c4761680ce815b944db4c52afd525 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2d15ba85561638d03c70f7d7a6a28aa642c4761680ce815b944db4c52afd525->enter($__internal_b2d15ba85561638d03c70f7d7a6a28aa642c4761680ce815b944db4c52afd525_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d98efb05db40965509aec1e0623abb39f5e92a0e57aaa910782630d4f2622799 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d98efb05db40965509aec1e0623abb39f5e92a0e57aaa910782630d4f2622799->enter($__internal_d98efb05db40965509aec1e0623abb39f5e92a0e57aaa910782630d4f2622799_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_d98efb05db40965509aec1e0623abb39f5e92a0e57aaa910782630d4f2622799->leave($__internal_d98efb05db40965509aec1e0623abb39f5e92a0e57aaa910782630d4f2622799_prof);

        
        $__internal_b2d15ba85561638d03c70f7d7a6a28aa642c4761680ce815b944db4c52afd525->leave($__internal_b2d15ba85561638d03c70f7d7a6a28aa642c4761680ce815b944db4c52afd525_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d7ecd3551fbbc1f0468fce77e29dd4a60ee88aa53e83c80ecf01dd9677529ed2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7ecd3551fbbc1f0468fce77e29dd4a60ee88aa53e83c80ecf01dd9677529ed2->enter($__internal_d7ecd3551fbbc1f0468fce77e29dd4a60ee88aa53e83c80ecf01dd9677529ed2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ba7d7fd3fa92ee4f21363787633287ea6ec98e6ba6fa9eff1228ba9bd690bb58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba7d7fd3fa92ee4f21363787633287ea6ec98e6ba6fa9eff1228ba9bd690bb58->enter($__internal_ba7d7fd3fa92ee4f21363787633287ea6ec98e6ba6fa9eff1228ba9bd690bb58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_ba7d7fd3fa92ee4f21363787633287ea6ec98e6ba6fa9eff1228ba9bd690bb58->leave($__internal_ba7d7fd3fa92ee4f21363787633287ea6ec98e6ba6fa9eff1228ba9bd690bb58_prof);

        
        $__internal_d7ecd3551fbbc1f0468fce77e29dd4a60ee88aa53e83c80ecf01dd9677529ed2->leave($__internal_d7ecd3551fbbc1f0468fce77e29dd4a60ee88aa53e83c80ecf01dd9677529ed2_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
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
", "@WebProfiler/Collector/exception.html.twig", "/Users/mac/SymfonyProjects/Hint/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
