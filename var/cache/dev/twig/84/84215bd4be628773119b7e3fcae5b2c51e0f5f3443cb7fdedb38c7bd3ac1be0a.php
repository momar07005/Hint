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
        $__internal_2944e7fc46541658df2550b4ed40c3f4f9faab48f3738d568dd3c72125829ae2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2944e7fc46541658df2550b4ed40c3f4f9faab48f3738d568dd3c72125829ae2->enter($__internal_2944e7fc46541658df2550b4ed40c3f4f9faab48f3738d568dd3c72125829ae2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_d830e864de952fbcbb6c6b884ea79be57885d02762052b5ec5a1ac0e9f6cc026 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d830e864de952fbcbb6c6b884ea79be57885d02762052b5ec5a1ac0e9f6cc026->enter($__internal_d830e864de952fbcbb6c6b884ea79be57885d02762052b5ec5a1ac0e9f6cc026_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_2944e7fc46541658df2550b4ed40c3f4f9faab48f3738d568dd3c72125829ae2->leave($__internal_2944e7fc46541658df2550b4ed40c3f4f9faab48f3738d568dd3c72125829ae2_prof);

        
        $__internal_d830e864de952fbcbb6c6b884ea79be57885d02762052b5ec5a1ac0e9f6cc026->leave($__internal_d830e864de952fbcbb6c6b884ea79be57885d02762052b5ec5a1ac0e9f6cc026_prof);

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
