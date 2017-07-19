<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_07c8934f5ebc33f258fbf75f13e2f68fda901579e901d2b88c70cba54f5e3640 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_80eaba464a07545b964a523b3b98c89cd977577dadcb72ae22d9ddd84d042f4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80eaba464a07545b964a523b3b98c89cd977577dadcb72ae22d9ddd84d042f4c->enter($__internal_80eaba464a07545b964a523b3b98c89cd977577dadcb72ae22d9ddd84d042f4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_4308621eb9a33f5e98cdbad6772dabb494569c2044b5887ff55d6232f67a95e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4308621eb9a33f5e98cdbad6772dabb494569c2044b5887ff55d6232f67a95e9->enter($__internal_4308621eb9a33f5e98cdbad6772dabb494569c2044b5887ff55d6232f67a95e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_80eaba464a07545b964a523b3b98c89cd977577dadcb72ae22d9ddd84d042f4c->leave($__internal_80eaba464a07545b964a523b3b98c89cd977577dadcb72ae22d9ddd84d042f4c_prof);

        
        $__internal_4308621eb9a33f5e98cdbad6772dabb494569c2044b5887ff55d6232f67a95e9->leave($__internal_4308621eb9a33f5e98cdbad6772dabb494569c2044b5887ff55d6232f67a95e9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_69f43d642ee6163193ea95cb2b1aa234506655066e497530d443c5f014d63a65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69f43d642ee6163193ea95cb2b1aa234506655066e497530d443c5f014d63a65->enter($__internal_69f43d642ee6163193ea95cb2b1aa234506655066e497530d443c5f014d63a65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_45af4bb68ac5bfa9283c51db116ecd66ad485ead3f480490352841092c4564ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45af4bb68ac5bfa9283c51db116ecd66ad485ead3f480490352841092c4564ef->enter($__internal_45af4bb68ac5bfa9283c51db116ecd66ad485ead3f480490352841092c4564ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_45af4bb68ac5bfa9283c51db116ecd66ad485ead3f480490352841092c4564ef->leave($__internal_45af4bb68ac5bfa9283c51db116ecd66ad485ead3f480490352841092c4564ef_prof);

        
        $__internal_69f43d642ee6163193ea95cb2b1aa234506655066e497530d443c5f014d63a65->leave($__internal_69f43d642ee6163193ea95cb2b1aa234506655066e497530d443c5f014d63a65_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/Users/mac/SymfonyProjects/Hint/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
