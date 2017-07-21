<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_8d530931757b69b700e933ed1781af5eff321bb6d47c058009c296c544f76931 extends Twig_Template
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
        $__internal_733aeabc62c2a7403b2530153b69e913a2d9034632a8858119682f949701d3f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_733aeabc62c2a7403b2530153b69e913a2d9034632a8858119682f949701d3f0->enter($__internal_733aeabc62c2a7403b2530153b69e913a2d9034632a8858119682f949701d3f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_d5b1415b76733b4aa23981411540940b23035edb62fb2bc6975a90729a81ad8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5b1415b76733b4aa23981411540940b23035edb62fb2bc6975a90729a81ad8d->enter($__internal_d5b1415b76733b4aa23981411540940b23035edb62fb2bc6975a90729a81ad8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_733aeabc62c2a7403b2530153b69e913a2d9034632a8858119682f949701d3f0->leave($__internal_733aeabc62c2a7403b2530153b69e913a2d9034632a8858119682f949701d3f0_prof);

        
        $__internal_d5b1415b76733b4aa23981411540940b23035edb62fb2bc6975a90729a81ad8d->leave($__internal_d5b1415b76733b4aa23981411540940b23035edb62fb2bc6975a90729a81ad8d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
", "TwigBundle:Exception:exception.js.twig", "/Users/mac/SymfonyProjects/Hint/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
