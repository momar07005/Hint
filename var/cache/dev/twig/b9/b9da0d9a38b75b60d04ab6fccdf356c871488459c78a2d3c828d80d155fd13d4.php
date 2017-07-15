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
        $__internal_f56ab4847120aa27273e1949ac7912dac9716da3231d0f4045fa7fc81452ef3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f56ab4847120aa27273e1949ac7912dac9716da3231d0f4045fa7fc81452ef3e->enter($__internal_f56ab4847120aa27273e1949ac7912dac9716da3231d0f4045fa7fc81452ef3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NKHintBundle:Default:index.html.twig"));

        $__internal_77512e3b21f59fac72c94b80956ca8079af5040109340347cde3783033f53c63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77512e3b21f59fac72c94b80956ca8079af5040109340347cde3783033f53c63->enter($__internal_77512e3b21f59fac72c94b80956ca8079af5040109340347cde3783033f53c63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NKHintBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_f56ab4847120aa27273e1949ac7912dac9716da3231d0f4045fa7fc81452ef3e->leave($__internal_f56ab4847120aa27273e1949ac7912dac9716da3231d0f4045fa7fc81452ef3e_prof);

        
        $__internal_77512e3b21f59fac72c94b80956ca8079af5040109340347cde3783033f53c63->leave($__internal_77512e3b21f59fac72c94b80956ca8079af5040109340347cde3783033f53c63_prof);

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
