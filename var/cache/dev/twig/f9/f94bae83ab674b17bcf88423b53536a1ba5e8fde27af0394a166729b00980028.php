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
        $__internal_e76db5e3d9585d23829d0d8794f3c143079ff6e31da7ce549967724a8d024106 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e76db5e3d9585d23829d0d8794f3c143079ff6e31da7ce549967724a8d024106->enter($__internal_e76db5e3d9585d23829d0d8794f3c143079ff6e31da7ce549967724a8d024106_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_3b16dfdde74e72ccbee30bb1d5fa30848aaf4a1fbefa4e08fc8f65bc8c58d1cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b16dfdde74e72ccbee30bb1d5fa30848aaf4a1fbefa4e08fc8f65bc8c58d1cc->enter($__internal_3b16dfdde74e72ccbee30bb1d5fa30848aaf4a1fbefa4e08fc8f65bc8c58d1cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e76db5e3d9585d23829d0d8794f3c143079ff6e31da7ce549967724a8d024106->leave($__internal_e76db5e3d9585d23829d0d8794f3c143079ff6e31da7ce549967724a8d024106_prof);

        
        $__internal_3b16dfdde74e72ccbee30bb1d5fa30848aaf4a1fbefa4e08fc8f65bc8c58d1cc->leave($__internal_3b16dfdde74e72ccbee30bb1d5fa30848aaf4a1fbefa4e08fc8f65bc8c58d1cc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_34d01d66c687bd98ad8b99a47cb0daac37092e81866512e2795acfd955247670 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34d01d66c687bd98ad8b99a47cb0daac37092e81866512e2795acfd955247670->enter($__internal_34d01d66c687bd98ad8b99a47cb0daac37092e81866512e2795acfd955247670_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8d585f8703c8af3b16d86cea24ecaabd9468ab37fe53347618644d43270d35e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d585f8703c8af3b16d86cea24ecaabd9468ab37fe53347618644d43270d35e7->enter($__internal_8d585f8703c8af3b16d86cea24ecaabd9468ab37fe53347618644d43270d35e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_8d585f8703c8af3b16d86cea24ecaabd9468ab37fe53347618644d43270d35e7->leave($__internal_8d585f8703c8af3b16d86cea24ecaabd9468ab37fe53347618644d43270d35e7_prof);

        
        $__internal_34d01d66c687bd98ad8b99a47cb0daac37092e81866512e2795acfd955247670->leave($__internal_34d01d66c687bd98ad8b99a47cb0daac37092e81866512e2795acfd955247670_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_cdd88136f2ce0f89f2e8d0e341fc7349a989a13da5c239eda6c263756c08b585 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdd88136f2ce0f89f2e8d0e341fc7349a989a13da5c239eda6c263756c08b585->enter($__internal_cdd88136f2ce0f89f2e8d0e341fc7349a989a13da5c239eda6c263756c08b585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_358b12f705e0374ead963ded6e45fdc5f744d22aa095e5ffa366225cae01ed88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_358b12f705e0374ead963ded6e45fdc5f744d22aa095e5ffa366225cae01ed88->enter($__internal_358b12f705e0374ead963ded6e45fdc5f744d22aa095e5ffa366225cae01ed88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_358b12f705e0374ead963ded6e45fdc5f744d22aa095e5ffa366225cae01ed88->leave($__internal_358b12f705e0374ead963ded6e45fdc5f744d22aa095e5ffa366225cae01ed88_prof);

        
        $__internal_cdd88136f2ce0f89f2e8d0e341fc7349a989a13da5c239eda6c263756c08b585->leave($__internal_cdd88136f2ce0f89f2e8d0e341fc7349a989a13da5c239eda6c263756c08b585_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_abdf6bf1e8e30ccdeb322e70d11bcb3475d7d8bba8226bf7a5e9406dc8d49ce6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abdf6bf1e8e30ccdeb322e70d11bcb3475d7d8bba8226bf7a5e9406dc8d49ce6->enter($__internal_abdf6bf1e8e30ccdeb322e70d11bcb3475d7d8bba8226bf7a5e9406dc8d49ce6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0709628da4d904a156f7931479c75fa401869971d786b7ffedc1c06a326e4e87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0709628da4d904a156f7931479c75fa401869971d786b7ffedc1c06a326e4e87->enter($__internal_0709628da4d904a156f7931479c75fa401869971d786b7ffedc1c06a326e4e87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_0709628da4d904a156f7931479c75fa401869971d786b7ffedc1c06a326e4e87->leave($__internal_0709628da4d904a156f7931479c75fa401869971d786b7ffedc1c06a326e4e87_prof);

        
        $__internal_abdf6bf1e8e30ccdeb322e70d11bcb3475d7d8bba8226bf7a5e9406dc8d49ce6->leave($__internal_abdf6bf1e8e30ccdeb322e70d11bcb3475d7d8bba8226bf7a5e9406dc8d49ce6_prof);

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
