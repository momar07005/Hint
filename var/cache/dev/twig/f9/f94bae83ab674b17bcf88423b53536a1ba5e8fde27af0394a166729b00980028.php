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
        $__internal_79ed63434cc5a3f7a94f9220d763ac16f69c7988e9f36619cdcb9600cd3d9f81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79ed63434cc5a3f7a94f9220d763ac16f69c7988e9f36619cdcb9600cd3d9f81->enter($__internal_79ed63434cc5a3f7a94f9220d763ac16f69c7988e9f36619cdcb9600cd3d9f81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_17171f7e6bf65c462c4e43ffa8e6e5679d6a27ad8199098f8ca509a28ef7b1b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17171f7e6bf65c462c4e43ffa8e6e5679d6a27ad8199098f8ca509a28ef7b1b1->enter($__internal_17171f7e6bf65c462c4e43ffa8e6e5679d6a27ad8199098f8ca509a28ef7b1b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_79ed63434cc5a3f7a94f9220d763ac16f69c7988e9f36619cdcb9600cd3d9f81->leave($__internal_79ed63434cc5a3f7a94f9220d763ac16f69c7988e9f36619cdcb9600cd3d9f81_prof);

        
        $__internal_17171f7e6bf65c462c4e43ffa8e6e5679d6a27ad8199098f8ca509a28ef7b1b1->leave($__internal_17171f7e6bf65c462c4e43ffa8e6e5679d6a27ad8199098f8ca509a28ef7b1b1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1dbd882b70f8c81790efde1a3968583c82b795edfeb1ae7eb58205d89105d2fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1dbd882b70f8c81790efde1a3968583c82b795edfeb1ae7eb58205d89105d2fc->enter($__internal_1dbd882b70f8c81790efde1a3968583c82b795edfeb1ae7eb58205d89105d2fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9287b407a8406de1a1107441cc6659270f32f571f95647b80ceb1d3d952293b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9287b407a8406de1a1107441cc6659270f32f571f95647b80ceb1d3d952293b5->enter($__internal_9287b407a8406de1a1107441cc6659270f32f571f95647b80ceb1d3d952293b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_9287b407a8406de1a1107441cc6659270f32f571f95647b80ceb1d3d952293b5->leave($__internal_9287b407a8406de1a1107441cc6659270f32f571f95647b80ceb1d3d952293b5_prof);

        
        $__internal_1dbd882b70f8c81790efde1a3968583c82b795edfeb1ae7eb58205d89105d2fc->leave($__internal_1dbd882b70f8c81790efde1a3968583c82b795edfeb1ae7eb58205d89105d2fc_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_dec751856fc1da9c832d291a19f5d59339956fddbae70d99f2ab5d705bf541fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dec751856fc1da9c832d291a19f5d59339956fddbae70d99f2ab5d705bf541fb->enter($__internal_dec751856fc1da9c832d291a19f5d59339956fddbae70d99f2ab5d705bf541fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a444234b660c79d17676dae22a8e2ced44d77f2ae32e3418ab1d09daa2a2ad8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a444234b660c79d17676dae22a8e2ced44d77f2ae32e3418ab1d09daa2a2ad8f->enter($__internal_a444234b660c79d17676dae22a8e2ced44d77f2ae32e3418ab1d09daa2a2ad8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_a444234b660c79d17676dae22a8e2ced44d77f2ae32e3418ab1d09daa2a2ad8f->leave($__internal_a444234b660c79d17676dae22a8e2ced44d77f2ae32e3418ab1d09daa2a2ad8f_prof);

        
        $__internal_dec751856fc1da9c832d291a19f5d59339956fddbae70d99f2ab5d705bf541fb->leave($__internal_dec751856fc1da9c832d291a19f5d59339956fddbae70d99f2ab5d705bf541fb_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3649d3ed8b44bb4c241b7010bee73c9ac38eefafddf7d2749cd1f3d89c9b23fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3649d3ed8b44bb4c241b7010bee73c9ac38eefafddf7d2749cd1f3d89c9b23fb->enter($__internal_3649d3ed8b44bb4c241b7010bee73c9ac38eefafddf7d2749cd1f3d89c9b23fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5e420826491185e74c510ffcadeac3279c2c2691ea276551411ebf5cdf0eabdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e420826491185e74c510ffcadeac3279c2c2691ea276551411ebf5cdf0eabdc->enter($__internal_5e420826491185e74c510ffcadeac3279c2c2691ea276551411ebf5cdf0eabdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_5e420826491185e74c510ffcadeac3279c2c2691ea276551411ebf5cdf0eabdc->leave($__internal_5e420826491185e74c510ffcadeac3279c2c2691ea276551411ebf5cdf0eabdc_prof);

        
        $__internal_3649d3ed8b44bb4c241b7010bee73c9ac38eefafddf7d2749cd1f3d89c9b23fb->leave($__internal_3649d3ed8b44bb4c241b7010bee73c9ac38eefafddf7d2749cd1f3d89c9b23fb_prof);

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
