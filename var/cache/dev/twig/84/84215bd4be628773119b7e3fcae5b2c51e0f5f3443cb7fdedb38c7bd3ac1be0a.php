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
        $__internal_2f1a5299dc29b9c92ca44d96ef397d6f5aa76052c0598d5f3eb6d69af6a5e1dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f1a5299dc29b9c92ca44d96ef397d6f5aa76052c0598d5f3eb6d69af6a5e1dd->enter($__internal_2f1a5299dc29b9c92ca44d96ef397d6f5aa76052c0598d5f3eb6d69af6a5e1dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_a3a965aa8688768f915efd33799bb55d8662bccb3390dd585ffd73cf46f24841 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3a965aa8688768f915efd33799bb55d8662bccb3390dd585ffd73cf46f24841->enter($__internal_a3a965aa8688768f915efd33799bb55d8662bccb3390dd585ffd73cf46f24841_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_2f1a5299dc29b9c92ca44d96ef397d6f5aa76052c0598d5f3eb6d69af6a5e1dd->leave($__internal_2f1a5299dc29b9c92ca44d96ef397d6f5aa76052c0598d5f3eb6d69af6a5e1dd_prof);

        
        $__internal_a3a965aa8688768f915efd33799bb55d8662bccb3390dd585ffd73cf46f24841->leave($__internal_a3a965aa8688768f915efd33799bb55d8662bccb3390dd585ffd73cf46f24841_prof);

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
