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
        $__internal_1ed467c97cdbebd3f8f564f557e92c7bdd8fbc239cf616a1c08f1dc4f4377727 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ed467c97cdbebd3f8f564f557e92c7bdd8fbc239cf616a1c08f1dc4f4377727->enter($__internal_1ed467c97cdbebd3f8f564f557e92c7bdd8fbc239cf616a1c08f1dc4f4377727_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_1d51e9c00073b2735c2311f3d86a11b15dda450689c9783fa313e9b0807c4a76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d51e9c00073b2735c2311f3d86a11b15dda450689c9783fa313e9b0807c4a76->enter($__internal_1d51e9c00073b2735c2311f3d86a11b15dda450689c9783fa313e9b0807c4a76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ed467c97cdbebd3f8f564f557e92c7bdd8fbc239cf616a1c08f1dc4f4377727->leave($__internal_1ed467c97cdbebd3f8f564f557e92c7bdd8fbc239cf616a1c08f1dc4f4377727_prof);

        
        $__internal_1d51e9c00073b2735c2311f3d86a11b15dda450689c9783fa313e9b0807c4a76->leave($__internal_1d51e9c00073b2735c2311f3d86a11b15dda450689c9783fa313e9b0807c4a76_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f2c27f5aab65e7b3878e34dc839c3720c0c30b1fbe8d8bb3cc759ebc562fd414 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2c27f5aab65e7b3878e34dc839c3720c0c30b1fbe8d8bb3cc759ebc562fd414->enter($__internal_f2c27f5aab65e7b3878e34dc839c3720c0c30b1fbe8d8bb3cc759ebc562fd414_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_5c4ffea8634e1f93473a66a782ca11b552ff33d9e5fb7cc39f76e6fb80e907c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c4ffea8634e1f93473a66a782ca11b552ff33d9e5fb7cc39f76e6fb80e907c5->enter($__internal_5c4ffea8634e1f93473a66a782ca11b552ff33d9e5fb7cc39f76e6fb80e907c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_5c4ffea8634e1f93473a66a782ca11b552ff33d9e5fb7cc39f76e6fb80e907c5->leave($__internal_5c4ffea8634e1f93473a66a782ca11b552ff33d9e5fb7cc39f76e6fb80e907c5_prof);

        
        $__internal_f2c27f5aab65e7b3878e34dc839c3720c0c30b1fbe8d8bb3cc759ebc562fd414->leave($__internal_f2c27f5aab65e7b3878e34dc839c3720c0c30b1fbe8d8bb3cc759ebc562fd414_prof);

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
