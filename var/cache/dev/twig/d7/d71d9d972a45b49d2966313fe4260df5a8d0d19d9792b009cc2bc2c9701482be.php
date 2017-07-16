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
        $__internal_b7472500741af4ce869374a6fc55a99c8ca04020262d6ff14a4dd9a7256b9536 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7472500741af4ce869374a6fc55a99c8ca04020262d6ff14a4dd9a7256b9536->enter($__internal_b7472500741af4ce869374a6fc55a99c8ca04020262d6ff14a4dd9a7256b9536_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_e7681a53c9710257f04d6be7dea15296426f2b90dd60d1bcf3b21fcfebbf89e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7681a53c9710257f04d6be7dea15296426f2b90dd60d1bcf3b21fcfebbf89e5->enter($__internal_e7681a53c9710257f04d6be7dea15296426f2b90dd60d1bcf3b21fcfebbf89e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b7472500741af4ce869374a6fc55a99c8ca04020262d6ff14a4dd9a7256b9536->leave($__internal_b7472500741af4ce869374a6fc55a99c8ca04020262d6ff14a4dd9a7256b9536_prof);

        
        $__internal_e7681a53c9710257f04d6be7dea15296426f2b90dd60d1bcf3b21fcfebbf89e5->leave($__internal_e7681a53c9710257f04d6be7dea15296426f2b90dd60d1bcf3b21fcfebbf89e5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5f015043192710bcae3f76a8087f0b1ebcbc0ea06044ee9988ca6ef0e0bb2fa2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f015043192710bcae3f76a8087f0b1ebcbc0ea06044ee9988ca6ef0e0bb2fa2->enter($__internal_5f015043192710bcae3f76a8087f0b1ebcbc0ea06044ee9988ca6ef0e0bb2fa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b80a645e15583e7d22cbc9b44c33f58ea44ad9ef5e71fa00b7b910530b6a399f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b80a645e15583e7d22cbc9b44c33f58ea44ad9ef5e71fa00b7b910530b6a399f->enter($__internal_b80a645e15583e7d22cbc9b44c33f58ea44ad9ef5e71fa00b7b910530b6a399f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_b80a645e15583e7d22cbc9b44c33f58ea44ad9ef5e71fa00b7b910530b6a399f->leave($__internal_b80a645e15583e7d22cbc9b44c33f58ea44ad9ef5e71fa00b7b910530b6a399f_prof);

        
        $__internal_5f015043192710bcae3f76a8087f0b1ebcbc0ea06044ee9988ca6ef0e0bb2fa2->leave($__internal_5f015043192710bcae3f76a8087f0b1ebcbc0ea06044ee9988ca6ef0e0bb2fa2_prof);

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
