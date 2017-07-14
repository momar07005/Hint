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
        $__internal_7933c7d5eb9aa47468532a5fb870d5d1fb7e25a91e99b999e096aa317e876fdc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7933c7d5eb9aa47468532a5fb870d5d1fb7e25a91e99b999e096aa317e876fdc->enter($__internal_7933c7d5eb9aa47468532a5fb870d5d1fb7e25a91e99b999e096aa317e876fdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_fc33ed2c3ef92ed907aeaa84f391bd7cd69e8b32836eed1b386bd19450dba3c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc33ed2c3ef92ed907aeaa84f391bd7cd69e8b32836eed1b386bd19450dba3c3->enter($__internal_fc33ed2c3ef92ed907aeaa84f391bd7cd69e8b32836eed1b386bd19450dba3c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7933c7d5eb9aa47468532a5fb870d5d1fb7e25a91e99b999e096aa317e876fdc->leave($__internal_7933c7d5eb9aa47468532a5fb870d5d1fb7e25a91e99b999e096aa317e876fdc_prof);

        
        $__internal_fc33ed2c3ef92ed907aeaa84f391bd7cd69e8b32836eed1b386bd19450dba3c3->leave($__internal_fc33ed2c3ef92ed907aeaa84f391bd7cd69e8b32836eed1b386bd19450dba3c3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f92f6afb6dbc2c57003cc4cfbe6ed776d2dcdac5c167b87e6ff2d5172437d7a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f92f6afb6dbc2c57003cc4cfbe6ed776d2dcdac5c167b87e6ff2d5172437d7a4->enter($__internal_f92f6afb6dbc2c57003cc4cfbe6ed776d2dcdac5c167b87e6ff2d5172437d7a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_478f41a88dcec23c597ce15c021eb46b71b456ec5759cc811e7668561c6c71c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_478f41a88dcec23c597ce15c021eb46b71b456ec5759cc811e7668561c6c71c3->enter($__internal_478f41a88dcec23c597ce15c021eb46b71b456ec5759cc811e7668561c6c71c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_478f41a88dcec23c597ce15c021eb46b71b456ec5759cc811e7668561c6c71c3->leave($__internal_478f41a88dcec23c597ce15c021eb46b71b456ec5759cc811e7668561c6c71c3_prof);

        
        $__internal_f92f6afb6dbc2c57003cc4cfbe6ed776d2dcdac5c167b87e6ff2d5172437d7a4->leave($__internal_f92f6afb6dbc2c57003cc4cfbe6ed776d2dcdac5c167b87e6ff2d5172437d7a4_prof);

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
