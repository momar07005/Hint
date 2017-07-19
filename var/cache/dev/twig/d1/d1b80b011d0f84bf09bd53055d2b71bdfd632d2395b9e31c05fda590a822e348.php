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
        $__internal_fd75008e8da49524f4bcfc5e66d06e1e010384557d47f7835783cb58cc309972 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd75008e8da49524f4bcfc5e66d06e1e010384557d47f7835783cb58cc309972->enter($__internal_fd75008e8da49524f4bcfc5e66d06e1e010384557d47f7835783cb58cc309972_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_1437a51d9dbc96690e1f3c7d5b015a285e868f2728fcb6a1aa75fe05c8b89097 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1437a51d9dbc96690e1f3c7d5b015a285e868f2728fcb6a1aa75fe05c8b89097->enter($__internal_1437a51d9dbc96690e1f3c7d5b015a285e868f2728fcb6a1aa75fe05c8b89097_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd75008e8da49524f4bcfc5e66d06e1e010384557d47f7835783cb58cc309972->leave($__internal_fd75008e8da49524f4bcfc5e66d06e1e010384557d47f7835783cb58cc309972_prof);

        
        $__internal_1437a51d9dbc96690e1f3c7d5b015a285e868f2728fcb6a1aa75fe05c8b89097->leave($__internal_1437a51d9dbc96690e1f3c7d5b015a285e868f2728fcb6a1aa75fe05c8b89097_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9ba352d284227974014bb121982b1e97847c1c016c13a36a6ccd4667e8497850 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ba352d284227974014bb121982b1e97847c1c016c13a36a6ccd4667e8497850->enter($__internal_9ba352d284227974014bb121982b1e97847c1c016c13a36a6ccd4667e8497850_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_91fa4ddc115f509a78ae00583bd8b93bf26121fd5b34e6cb0b6ff4306a5d187f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91fa4ddc115f509a78ae00583bd8b93bf26121fd5b34e6cb0b6ff4306a5d187f->enter($__internal_91fa4ddc115f509a78ae00583bd8b93bf26121fd5b34e6cb0b6ff4306a5d187f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_91fa4ddc115f509a78ae00583bd8b93bf26121fd5b34e6cb0b6ff4306a5d187f->leave($__internal_91fa4ddc115f509a78ae00583bd8b93bf26121fd5b34e6cb0b6ff4306a5d187f_prof);

        
        $__internal_9ba352d284227974014bb121982b1e97847c1c016c13a36a6ccd4667e8497850->leave($__internal_9ba352d284227974014bb121982b1e97847c1c016c13a36a6ccd4667e8497850_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_35464d1ecd5f6e250b9c50398ef9b64252431824e4b79fba0a474b45f66e06e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35464d1ecd5f6e250b9c50398ef9b64252431824e4b79fba0a474b45f66e06e8->enter($__internal_35464d1ecd5f6e250b9c50398ef9b64252431824e4b79fba0a474b45f66e06e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_79184a9900206567a8d6d4d873867bcd23d20ba53e624ae0f525400243154d7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79184a9900206567a8d6d4d873867bcd23d20ba53e624ae0f525400243154d7e->enter($__internal_79184a9900206567a8d6d4d873867bcd23d20ba53e624ae0f525400243154d7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_79184a9900206567a8d6d4d873867bcd23d20ba53e624ae0f525400243154d7e->leave($__internal_79184a9900206567a8d6d4d873867bcd23d20ba53e624ae0f525400243154d7e_prof);

        
        $__internal_35464d1ecd5f6e250b9c50398ef9b64252431824e4b79fba0a474b45f66e06e8->leave($__internal_35464d1ecd5f6e250b9c50398ef9b64252431824e4b79fba0a474b45f66e06e8_prof);

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
