<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_a37bb81aba82dd392bd1745602b306961021824d222d0eda387896444c685228 extends Twig_Template
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
        $__internal_a438d29404fec58b9f783dc2a06d33e9a625220e03ea30f137e88bcd34e570ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a438d29404fec58b9f783dc2a06d33e9a625220e03ea30f137e88bcd34e570ef->enter($__internal_a438d29404fec58b9f783dc2a06d33e9a625220e03ea30f137e88bcd34e570ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_4dc31c6fd8086a00517af1e2cc5550514eac88ab61206d32d42686b80598258e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dc31c6fd8086a00517af1e2cc5550514eac88ab61206d32d42686b80598258e->enter($__internal_4dc31c6fd8086a00517af1e2cc5550514eac88ab61206d32d42686b80598258e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_a438d29404fec58b9f783dc2a06d33e9a625220e03ea30f137e88bcd34e570ef->leave($__internal_a438d29404fec58b9f783dc2a06d33e9a625220e03ea30f137e88bcd34e570ef_prof);

        
        $__internal_4dc31c6fd8086a00517af1e2cc5550514eac88ab61206d32d42686b80598258e->leave($__internal_4dc31c6fd8086a00517af1e2cc5550514eac88ab61206d32d42686b80598258e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.css.twig", "/Users/mac/SymfonyProjects/Hint/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
