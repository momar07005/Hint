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
        $__internal_af7e151a1b899fffac41fde44c2cd6861f7df4678757589bc1e366eaafd2da88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af7e151a1b899fffac41fde44c2cd6861f7df4678757589bc1e366eaafd2da88->enter($__internal_af7e151a1b899fffac41fde44c2cd6861f7df4678757589bc1e366eaafd2da88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NKHintBundle:Default:index.html.twig"));

        $__internal_be03b71fd0dac635bb390df92936d9f3b7d69cb1556739f092620d91057fbb57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be03b71fd0dac635bb390df92936d9f3b7d69cb1556739f092620d91057fbb57->enter($__internal_be03b71fd0dac635bb390df92936d9f3b7d69cb1556739f092620d91057fbb57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NKHintBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_af7e151a1b899fffac41fde44c2cd6861f7df4678757589bc1e366eaafd2da88->leave($__internal_af7e151a1b899fffac41fde44c2cd6861f7df4678757589bc1e366eaafd2da88_prof);

        
        $__internal_be03b71fd0dac635bb390df92936d9f3b7d69cb1556739f092620d91057fbb57->leave($__internal_be03b71fd0dac635bb390df92936d9f3b7d69cb1556739f092620d91057fbb57_prof);

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
