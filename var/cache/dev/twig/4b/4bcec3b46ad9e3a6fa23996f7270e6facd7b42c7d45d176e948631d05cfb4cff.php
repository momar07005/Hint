<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_83ad927c07cda423e60913f8bb5d1b7b3530e697302005ab74e8980fdbc93dd0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_8cf17ec4cf4ad6557dfe7d388870680e9445c6adeb72544f70854241680be6f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cf17ec4cf4ad6557dfe7d388870680e9445c6adeb72544f70854241680be6f5->enter($__internal_8cf17ec4cf4ad6557dfe7d388870680e9445c6adeb72544f70854241680be6f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_909c4a7eabf8b32ec8bffbe5e637e70087ec8fef597f792a5493a93cabe0833a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_909c4a7eabf8b32ec8bffbe5e637e70087ec8fef597f792a5493a93cabe0833a->enter($__internal_909c4a7eabf8b32ec8bffbe5e637e70087ec8fef597f792a5493a93cabe0833a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8cf17ec4cf4ad6557dfe7d388870680e9445c6adeb72544f70854241680be6f5->leave($__internal_8cf17ec4cf4ad6557dfe7d388870680e9445c6adeb72544f70854241680be6f5_prof);

        
        $__internal_909c4a7eabf8b32ec8bffbe5e637e70087ec8fef597f792a5493a93cabe0833a->leave($__internal_909c4a7eabf8b32ec8bffbe5e637e70087ec8fef597f792a5493a93cabe0833a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_54acb0ea572ad266f6d5f2562795f678305142099065882a281178663e50760a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54acb0ea572ad266f6d5f2562795f678305142099065882a281178663e50760a->enter($__internal_54acb0ea572ad266f6d5f2562795f678305142099065882a281178663e50760a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_1904ba5bec297acb4708072faac3a32066bc93bbff9195a36d02a4c995dc9b74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1904ba5bec297acb4708072faac3a32066bc93bbff9195a36d02a4c995dc9b74->enter($__internal_1904ba5bec297acb4708072faac3a32066bc93bbff9195a36d02a4c995dc9b74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1904ba5bec297acb4708072faac3a32066bc93bbff9195a36d02a4c995dc9b74->leave($__internal_1904ba5bec297acb4708072faac3a32066bc93bbff9195a36d02a4c995dc9b74_prof);

        
        $__internal_54acb0ea572ad266f6d5f2562795f678305142099065882a281178663e50760a->leave($__internal_54acb0ea572ad266f6d5f2562795f678305142099065882a281178663e50760a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3450282650de12621ed9e6e6ad8a1a09efdfdb85b0c75d91daa02b54e0f8d388 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3450282650de12621ed9e6e6ad8a1a09efdfdb85b0c75d91daa02b54e0f8d388->enter($__internal_3450282650de12621ed9e6e6ad8a1a09efdfdb85b0c75d91daa02b54e0f8d388_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_49be63b80fffe37c7a0668b948dba49f1f26cbb533f2aad1c3e68f89f9a0f2e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49be63b80fffe37c7a0668b948dba49f1f26cbb533f2aad1c3e68f89f9a0f2e9->enter($__internal_49be63b80fffe37c7a0668b948dba49f1f26cbb533f2aad1c3e68f89f9a0f2e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_49be63b80fffe37c7a0668b948dba49f1f26cbb533f2aad1c3e68f89f9a0f2e9->leave($__internal_49be63b80fffe37c7a0668b948dba49f1f26cbb533f2aad1c3e68f89f9a0f2e9_prof);

        
        $__internal_3450282650de12621ed9e6e6ad8a1a09efdfdb85b0c75d91daa02b54e0f8d388->leave($__internal_3450282650de12621ed9e6e6ad8a1a09efdfdb85b0c75d91daa02b54e0f8d388_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_21559adb33a329c19b754e7095be145204c484abcee31787693195057f52b38a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21559adb33a329c19b754e7095be145204c484abcee31787693195057f52b38a->enter($__internal_21559adb33a329c19b754e7095be145204c484abcee31787693195057f52b38a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_030335496098dd6398ecb81c54ecd2ca113ecb239614a1ca0efed84b4b68bfc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_030335496098dd6398ecb81c54ecd2ca113ecb239614a1ca0efed84b4b68bfc8->enter($__internal_030335496098dd6398ecb81c54ecd2ca113ecb239614a1ca0efed84b4b68bfc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_030335496098dd6398ecb81c54ecd2ca113ecb239614a1ca0efed84b4b68bfc8->leave($__internal_030335496098dd6398ecb81c54ecd2ca113ecb239614a1ca0efed84b4b68bfc8_prof);

        
        $__internal_21559adb33a329c19b754e7095be145204c484abcee31787693195057f52b38a->leave($__internal_21559adb33a329c19b754e7095be145204c484abcee31787693195057f52b38a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Users/mac/SymfonyProjects/Hint/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
