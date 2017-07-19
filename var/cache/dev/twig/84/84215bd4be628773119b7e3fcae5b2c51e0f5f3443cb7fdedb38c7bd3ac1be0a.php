<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_98ba75c7ab981168cfd4ebb359497eb4d100f6a66ada4f8a9ef58f470e90aad6 extends Twig_Template
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
        $__internal_db5e9d117f6b2a18397e72aa6b7bf8af53a534fbb813e46bdec1f2e5dc3579b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db5e9d117f6b2a18397e72aa6b7bf8af53a534fbb813e46bdec1f2e5dc3579b7->enter($__internal_db5e9d117f6b2a18397e72aa6b7bf8af53a534fbb813e46bdec1f2e5dc3579b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_6871aff5aef6a40e614f17a1e8fc863166a17c4df5d4c4d3d4e5bc296c6e78ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6871aff5aef6a40e614f17a1e8fc863166a17c4df5d4c4d3d4e5bc296c6e78ce->enter($__internal_6871aff5aef6a40e614f17a1e8fc863166a17c4df5d4c4d3d4e5bc296c6e78ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_db5e9d117f6b2a18397e72aa6b7bf8af53a534fbb813e46bdec1f2e5dc3579b7->leave($__internal_db5e9d117f6b2a18397e72aa6b7bf8af53a534fbb813e46bdec1f2e5dc3579b7_prof);

        
        $__internal_6871aff5aef6a40e614f17a1e8fc863166a17c4df5d4c4d3d4e5bc296c6e78ce->leave($__internal_6871aff5aef6a40e614f17a1e8fc863166a17c4df5d4c4d3d4e5bc296c6e78ce_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "/Users/mac/SymfonyProjects/Hint/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
