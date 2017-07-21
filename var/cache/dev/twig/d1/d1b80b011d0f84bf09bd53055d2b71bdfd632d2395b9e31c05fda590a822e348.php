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
        $__internal_c020e58e867ecec0e76cf334510ae3cd11ed66c3e3f6a7379a363e04a755f5d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c020e58e867ecec0e76cf334510ae3cd11ed66c3e3f6a7379a363e04a755f5d0->enter($__internal_c020e58e867ecec0e76cf334510ae3cd11ed66c3e3f6a7379a363e04a755f5d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_33c9298b84f0f122682867b1b2aa93ee3fd9522ecd36791fe10102af54965c4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33c9298b84f0f122682867b1b2aa93ee3fd9522ecd36791fe10102af54965c4f->enter($__internal_33c9298b84f0f122682867b1b2aa93ee3fd9522ecd36791fe10102af54965c4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c020e58e867ecec0e76cf334510ae3cd11ed66c3e3f6a7379a363e04a755f5d0->leave($__internal_c020e58e867ecec0e76cf334510ae3cd11ed66c3e3f6a7379a363e04a755f5d0_prof);

        
        $__internal_33c9298b84f0f122682867b1b2aa93ee3fd9522ecd36791fe10102af54965c4f->leave($__internal_33c9298b84f0f122682867b1b2aa93ee3fd9522ecd36791fe10102af54965c4f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1796c4ee0a36f21e6982c30ba85eb246f677204a689a19d3617fb0923558a2a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1796c4ee0a36f21e6982c30ba85eb246f677204a689a19d3617fb0923558a2a7->enter($__internal_1796c4ee0a36f21e6982c30ba85eb246f677204a689a19d3617fb0923558a2a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2c11c4a968f0cf9f7492338b2ae449ba7f2ec386e7ee19045f4e9748306893d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c11c4a968f0cf9f7492338b2ae449ba7f2ec386e7ee19045f4e9748306893d2->enter($__internal_2c11c4a968f0cf9f7492338b2ae449ba7f2ec386e7ee19045f4e9748306893d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_2c11c4a968f0cf9f7492338b2ae449ba7f2ec386e7ee19045f4e9748306893d2->leave($__internal_2c11c4a968f0cf9f7492338b2ae449ba7f2ec386e7ee19045f4e9748306893d2_prof);

        
        $__internal_1796c4ee0a36f21e6982c30ba85eb246f677204a689a19d3617fb0923558a2a7->leave($__internal_1796c4ee0a36f21e6982c30ba85eb246f677204a689a19d3617fb0923558a2a7_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_7f0fc919e0e71fb039ae89b50c682de5741366d32795712ba5e6420278a03717 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f0fc919e0e71fb039ae89b50c682de5741366d32795712ba5e6420278a03717->enter($__internal_7f0fc919e0e71fb039ae89b50c682de5741366d32795712ba5e6420278a03717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_67689ed3fbfd8fabae02096b77bb95bc7535d9612c5da9771f5715bf7c466cc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67689ed3fbfd8fabae02096b77bb95bc7535d9612c5da9771f5715bf7c466cc8->enter($__internal_67689ed3fbfd8fabae02096b77bb95bc7535d9612c5da9771f5715bf7c466cc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_67689ed3fbfd8fabae02096b77bb95bc7535d9612c5da9771f5715bf7c466cc8->leave($__internal_67689ed3fbfd8fabae02096b77bb95bc7535d9612c5da9771f5715bf7c466cc8_prof);

        
        $__internal_7f0fc919e0e71fb039ae89b50c682de5741366d32795712ba5e6420278a03717->leave($__internal_7f0fc919e0e71fb039ae89b50c682de5741366d32795712ba5e6420278a03717_prof);

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
