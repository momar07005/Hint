<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_6a46e443046448e89fe958d293485241ac39f46719d5389d7eb16acffc3a1325 extends Twig_Template
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
        $__internal_52bb4c6e49b76ababa9082ffc9333469f64c8f0ae9c1205ad4d600704b9d1955 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52bb4c6e49b76ababa9082ffc9333469f64c8f0ae9c1205ad4d600704b9d1955->enter($__internal_52bb4c6e49b76ababa9082ffc9333469f64c8f0ae9c1205ad4d600704b9d1955_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_3df87bb94421037808086028377e0978846716b6a5ccb34b4561d3b51cc02a24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3df87bb94421037808086028377e0978846716b6a5ccb34b4561d3b51cc02a24->enter($__internal_3df87bb94421037808086028377e0978846716b6a5ccb34b4561d3b51cc02a24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_52bb4c6e49b76ababa9082ffc9333469f64c8f0ae9c1205ad4d600704b9d1955->leave($__internal_52bb4c6e49b76ababa9082ffc9333469f64c8f0ae9c1205ad4d600704b9d1955_prof);

        
        $__internal_3df87bb94421037808086028377e0978846716b6a5ccb34b4561d3b51cc02a24->leave($__internal_3df87bb94421037808086028377e0978846716b6a5ccb34b4561d3b51cc02a24_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.atom.twig", "/Users/mac/SymfonyProjects/Hint/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
