<?php

/* NKHintBundle:Default:index.html.twig */
class __TwigTemplate_5878737c4aa010959463f5d846a8fb88699d258c049b8bc8ff3084c06a6d20d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1e4e3e816004161c040e4c3255a9942e8ba592fc89dc9d3401ff19ed12a796ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e4e3e816004161c040e4c3255a9942e8ba592fc89dc9d3401ff19ed12a796ae->enter($__internal_1e4e3e816004161c040e4c3255a9942e8ba592fc89dc9d3401ff19ed12a796ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NKHintBundle:Default:index.html.twig"));

        $__internal_d3b3c2940a5b52eb4893f4f8828b4458ee79d9ad43824eafd3d6508c235eb097 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3b3c2940a5b52eb4893f4f8828b4458ee79d9ad43824eafd3d6508c235eb097->enter($__internal_d3b3c2940a5b52eb4893f4f8828b4458ee79d9ad43824eafd3d6508c235eb097_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NKHintBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_1e4e3e816004161c040e4c3255a9942e8ba592fc89dc9d3401ff19ed12a796ae->leave($__internal_1e4e3e816004161c040e4c3255a9942e8ba592fc89dc9d3401ff19ed12a796ae_prof);

        
        $__internal_d3b3c2940a5b52eb4893f4f8828b4458ee79d9ad43824eafd3d6508c235eb097->leave($__internal_d3b3c2940a5b52eb4893f4f8828b4458ee79d9ad43824eafd3d6508c235eb097_prof);

    }

    public function getTemplateName()
    {
        return "NKHintBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Hello World!
", "NKHintBundle:Default:index.html.twig", "/Users/mac/SymfonyProjects/Hint/src/NK/HintBundle/Resources/views/Default/index.html.twig");
    }
}
