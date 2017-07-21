<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_07c8934f5ebc33f258fbf75f13e2f68fda901579e901d2b88c70cba54f5e3640 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
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
        $__internal_dcd004964cc65e22452afb50ed9861489ed09b15be74f790f043e957c92e5218 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcd004964cc65e22452afb50ed9861489ed09b15be74f790f043e957c92e5218->enter($__internal_dcd004964cc65e22452afb50ed9861489ed09b15be74f790f043e957c92e5218_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_fc7e289eec92a0bfba1d6d967e49e17265c78485ca9b59ad8788af498ef565a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc7e289eec92a0bfba1d6d967e49e17265c78485ca9b59ad8788af498ef565a8->enter($__internal_fc7e289eec92a0bfba1d6d967e49e17265c78485ca9b59ad8788af498ef565a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dcd004964cc65e22452afb50ed9861489ed09b15be74f790f043e957c92e5218->leave($__internal_dcd004964cc65e22452afb50ed9861489ed09b15be74f790f043e957c92e5218_prof);

        
        $__internal_fc7e289eec92a0bfba1d6d967e49e17265c78485ca9b59ad8788af498ef565a8->leave($__internal_fc7e289eec92a0bfba1d6d967e49e17265c78485ca9b59ad8788af498ef565a8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_76e1751d246a2b8db8ee7dd01169458f0b48ae89d8a41aa6c868b0c91746ae00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76e1751d246a2b8db8ee7dd01169458f0b48ae89d8a41aa6c868b0c91746ae00->enter($__internal_76e1751d246a2b8db8ee7dd01169458f0b48ae89d8a41aa6c868b0c91746ae00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e67009ab2af029e2688f8ecde81c9d618bdf2c0042b5c28b342d107aca57a760 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e67009ab2af029e2688f8ecde81c9d618bdf2c0042b5c28b342d107aca57a760->enter($__internal_e67009ab2af029e2688f8ecde81c9d618bdf2c0042b5c28b342d107aca57a760_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_e67009ab2af029e2688f8ecde81c9d618bdf2c0042b5c28b342d107aca57a760->leave($__internal_e67009ab2af029e2688f8ecde81c9d618bdf2c0042b5c28b342d107aca57a760_prof);

        
        $__internal_76e1751d246a2b8db8ee7dd01169458f0b48ae89d8a41aa6c868b0c91746ae00->leave($__internal_76e1751d246a2b8db8ee7dd01169458f0b48ae89d8a41aa6c868b0c91746ae00_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
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
", "WebProfilerBundle:Collector:ajax.html.twig", "/Users/mac/SymfonyProjects/Hint/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
