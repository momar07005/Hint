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
        $__internal_7b213579d90624cb46f307972c90e7c54bd2be4fee8cf2cdbacd963f7eaf80aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b213579d90624cb46f307972c90e7c54bd2be4fee8cf2cdbacd963f7eaf80aa->enter($__internal_7b213579d90624cb46f307972c90e7c54bd2be4fee8cf2cdbacd963f7eaf80aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_69ea66de4034b4e822f7f55891b2a62036fc92846219ab3b38377017637bda1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69ea66de4034b4e822f7f55891b2a62036fc92846219ab3b38377017637bda1d->enter($__internal_69ea66de4034b4e822f7f55891b2a62036fc92846219ab3b38377017637bda1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b213579d90624cb46f307972c90e7c54bd2be4fee8cf2cdbacd963f7eaf80aa->leave($__internal_7b213579d90624cb46f307972c90e7c54bd2be4fee8cf2cdbacd963f7eaf80aa_prof);

        
        $__internal_69ea66de4034b4e822f7f55891b2a62036fc92846219ab3b38377017637bda1d->leave($__internal_69ea66de4034b4e822f7f55891b2a62036fc92846219ab3b38377017637bda1d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c47ddacda52adc5feb5905313b3fe645df673d6462b70788a38efc6bc18454a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c47ddacda52adc5feb5905313b3fe645df673d6462b70788a38efc6bc18454a6->enter($__internal_c47ddacda52adc5feb5905313b3fe645df673d6462b70788a38efc6bc18454a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_db7472052ad41c979dd64aea1d91abab90af05dc10254a85174090fcc4a3cd42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db7472052ad41c979dd64aea1d91abab90af05dc10254a85174090fcc4a3cd42->enter($__internal_db7472052ad41c979dd64aea1d91abab90af05dc10254a85174090fcc4a3cd42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_db7472052ad41c979dd64aea1d91abab90af05dc10254a85174090fcc4a3cd42->leave($__internal_db7472052ad41c979dd64aea1d91abab90af05dc10254a85174090fcc4a3cd42_prof);

        
        $__internal_c47ddacda52adc5feb5905313b3fe645df673d6462b70788a38efc6bc18454a6->leave($__internal_c47ddacda52adc5feb5905313b3fe645df673d6462b70788a38efc6bc18454a6_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ffd76cbd63538bbc6c1b38c52b933afa1ada72892004ae4764652c6cb0e39903 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffd76cbd63538bbc6c1b38c52b933afa1ada72892004ae4764652c6cb0e39903->enter($__internal_ffd76cbd63538bbc6c1b38c52b933afa1ada72892004ae4764652c6cb0e39903_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_02a4640bb9a5a1527d24f430893bea2bfdbf817b32f6b23cad64cad6c5bbd027 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02a4640bb9a5a1527d24f430893bea2bfdbf817b32f6b23cad64cad6c5bbd027->enter($__internal_02a4640bb9a5a1527d24f430893bea2bfdbf817b32f6b23cad64cad6c5bbd027_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_02a4640bb9a5a1527d24f430893bea2bfdbf817b32f6b23cad64cad6c5bbd027->leave($__internal_02a4640bb9a5a1527d24f430893bea2bfdbf817b32f6b23cad64cad6c5bbd027_prof);

        
        $__internal_ffd76cbd63538bbc6c1b38c52b933afa1ada72892004ae4764652c6cb0e39903->leave($__internal_ffd76cbd63538bbc6c1b38c52b933afa1ada72892004ae4764652c6cb0e39903_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9eb10201db018f3c894838a64f7ca55cf48e405d3a1299cb689b0d72a8976046 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9eb10201db018f3c894838a64f7ca55cf48e405d3a1299cb689b0d72a8976046->enter($__internal_9eb10201db018f3c894838a64f7ca55cf48e405d3a1299cb689b0d72a8976046_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_99fd7b3eee50e2d45fc0782bf44f13605e3ff79627309d11f5998879e5495010 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99fd7b3eee50e2d45fc0782bf44f13605e3ff79627309d11f5998879e5495010->enter($__internal_99fd7b3eee50e2d45fc0782bf44f13605e3ff79627309d11f5998879e5495010_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_99fd7b3eee50e2d45fc0782bf44f13605e3ff79627309d11f5998879e5495010->leave($__internal_99fd7b3eee50e2d45fc0782bf44f13605e3ff79627309d11f5998879e5495010_prof);

        
        $__internal_9eb10201db018f3c894838a64f7ca55cf48e405d3a1299cb689b0d72a8976046->leave($__internal_9eb10201db018f3c894838a64f7ca55cf48e405d3a1299cb689b0d72a8976046_prof);

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
