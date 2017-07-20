<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_2663d8cd2d78322849d2faaaff7879e0c2bf58f400e97d2c373a21ae660f07ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0d0e678463089dd7d1201af380103f3feb0cfbe7955a6800b5ed1168af63fa56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d0e678463089dd7d1201af380103f3feb0cfbe7955a6800b5ed1168af63fa56->enter($__internal_0d0e678463089dd7d1201af380103f3feb0cfbe7955a6800b5ed1168af63fa56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_a49bfef03448d15f9425e0cd5e033a2115c215c5c1f9801be8e5badb79bf9ed7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a49bfef03448d15f9425e0cd5e033a2115c215c5c1f9801be8e5badb79bf9ed7->enter($__internal_a49bfef03448d15f9425e0cd5e033a2115c215c5c1f9801be8e5badb79bf9ed7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d0e678463089dd7d1201af380103f3feb0cfbe7955a6800b5ed1168af63fa56->leave($__internal_0d0e678463089dd7d1201af380103f3feb0cfbe7955a6800b5ed1168af63fa56_prof);

        
        $__internal_a49bfef03448d15f9425e0cd5e033a2115c215c5c1f9801be8e5badb79bf9ed7->leave($__internal_a49bfef03448d15f9425e0cd5e033a2115c215c5c1f9801be8e5badb79bf9ed7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3fadfd7a0fdf17557836b4159964f618776aae25b8458ece8a4c88f7adae9e2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fadfd7a0fdf17557836b4159964f618776aae25b8458ece8a4c88f7adae9e2c->enter($__internal_3fadfd7a0fdf17557836b4159964f618776aae25b8458ece8a4c88f7adae9e2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_15704b41e72b9c5d91982f057c3fb495804c11e987fc22f643122102cbd35b25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15704b41e72b9c5d91982f057c3fb495804c11e987fc22f643122102cbd35b25->enter($__internal_15704b41e72b9c5d91982f057c3fb495804c11e987fc22f643122102cbd35b25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_15704b41e72b9c5d91982f057c3fb495804c11e987fc22f643122102cbd35b25->leave($__internal_15704b41e72b9c5d91982f057c3fb495804c11e987fc22f643122102cbd35b25_prof);

        
        $__internal_3fadfd7a0fdf17557836b4159964f618776aae25b8458ece8a4c88f7adae9e2c->leave($__internal_3fadfd7a0fdf17557836b4159964f618776aae25b8458ece8a4c88f7adae9e2c_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_372d7cca4eae7866621d266bdab73deccf264ff1c1c1fa98bd19dc3e1c66cfad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_372d7cca4eae7866621d266bdab73deccf264ff1c1c1fa98bd19dc3e1c66cfad->enter($__internal_372d7cca4eae7866621d266bdab73deccf264ff1c1c1fa98bd19dc3e1c66cfad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0b8c6f881c797b61ede4b388e6c99499cf38e170eeb25297eba7b1f7e44e1da4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b8c6f881c797b61ede4b388e6c99499cf38e170eeb25297eba7b1f7e44e1da4->enter($__internal_0b8c6f881c797b61ede4b388e6c99499cf38e170eeb25297eba7b1f7e44e1da4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_0b8c6f881c797b61ede4b388e6c99499cf38e170eeb25297eba7b1f7e44e1da4->leave($__internal_0b8c6f881c797b61ede4b388e6c99499cf38e170eeb25297eba7b1f7e44e1da4_prof);

        
        $__internal_372d7cca4eae7866621d266bdab73deccf264ff1c1c1fa98bd19dc3e1c66cfad->leave($__internal_372d7cca4eae7866621d266bdab73deccf264ff1c1c1fa98bd19dc3e1c66cfad_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/Users/mac/SymfonyProjects/Hint/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
