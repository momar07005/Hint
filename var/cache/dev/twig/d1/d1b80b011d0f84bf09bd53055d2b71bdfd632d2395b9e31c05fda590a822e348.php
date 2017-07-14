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
        $__internal_27e285065d74410f71781a4c0b8c3118070fc3a49b770385737e77d10bdd5cd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27e285065d74410f71781a4c0b8c3118070fc3a49b770385737e77d10bdd5cd5->enter($__internal_27e285065d74410f71781a4c0b8c3118070fc3a49b770385737e77d10bdd5cd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_4668b0d6837f039625a657cad8a39150d5d1e87b2834ead0ee64db2ae6edbd2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4668b0d6837f039625a657cad8a39150d5d1e87b2834ead0ee64db2ae6edbd2c->enter($__internal_4668b0d6837f039625a657cad8a39150d5d1e87b2834ead0ee64db2ae6edbd2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27e285065d74410f71781a4c0b8c3118070fc3a49b770385737e77d10bdd5cd5->leave($__internal_27e285065d74410f71781a4c0b8c3118070fc3a49b770385737e77d10bdd5cd5_prof);

        
        $__internal_4668b0d6837f039625a657cad8a39150d5d1e87b2834ead0ee64db2ae6edbd2c->leave($__internal_4668b0d6837f039625a657cad8a39150d5d1e87b2834ead0ee64db2ae6edbd2c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_92b14db3cb9dbb85f3e9a1c1f80eafea648864894b393c89f3283bb66c4b1f99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92b14db3cb9dbb85f3e9a1c1f80eafea648864894b393c89f3283bb66c4b1f99->enter($__internal_92b14db3cb9dbb85f3e9a1c1f80eafea648864894b393c89f3283bb66c4b1f99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4da750ac0f26b153ddea44ea885599fe8c54e58a44d5272578b7da1a6a81d591 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4da750ac0f26b153ddea44ea885599fe8c54e58a44d5272578b7da1a6a81d591->enter($__internal_4da750ac0f26b153ddea44ea885599fe8c54e58a44d5272578b7da1a6a81d591_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_4da750ac0f26b153ddea44ea885599fe8c54e58a44d5272578b7da1a6a81d591->leave($__internal_4da750ac0f26b153ddea44ea885599fe8c54e58a44d5272578b7da1a6a81d591_prof);

        
        $__internal_92b14db3cb9dbb85f3e9a1c1f80eafea648864894b393c89f3283bb66c4b1f99->leave($__internal_92b14db3cb9dbb85f3e9a1c1f80eafea648864894b393c89f3283bb66c4b1f99_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_cde13153a94b7cd1068b6b9dde1c362b95ad9dc05e2caefa0f89b80d7a04d458 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cde13153a94b7cd1068b6b9dde1c362b95ad9dc05e2caefa0f89b80d7a04d458->enter($__internal_cde13153a94b7cd1068b6b9dde1c362b95ad9dc05e2caefa0f89b80d7a04d458_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a916f96706de0d038727f3d8623b462755cdf3c15962dc3f50969a17bd6476f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a916f96706de0d038727f3d8623b462755cdf3c15962dc3f50969a17bd6476f8->enter($__internal_a916f96706de0d038727f3d8623b462755cdf3c15962dc3f50969a17bd6476f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a916f96706de0d038727f3d8623b462755cdf3c15962dc3f50969a17bd6476f8->leave($__internal_a916f96706de0d038727f3d8623b462755cdf3c15962dc3f50969a17bd6476f8_prof);

        
        $__internal_cde13153a94b7cd1068b6b9dde1c362b95ad9dc05e2caefa0f89b80d7a04d458->leave($__internal_cde13153a94b7cd1068b6b9dde1c362b95ad9dc05e2caefa0f89b80d7a04d458_prof);

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
