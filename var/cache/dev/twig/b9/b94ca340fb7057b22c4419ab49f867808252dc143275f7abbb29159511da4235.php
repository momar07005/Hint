<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_303380a97841f0ef746eefdba4fcad896e4608edba21af0b818a63857951b0ba extends Twig_Template
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
        $__internal_1227c57cf80467c8e408ac53aa9f8f0454a9ab508b26bd960f7535ec5ddf2204 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1227c57cf80467c8e408ac53aa9f8f0454a9ab508b26bd960f7535ec5ddf2204->enter($__internal_1227c57cf80467c8e408ac53aa9f8f0454a9ab508b26bd960f7535ec5ddf2204_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_1b9125d9b50228e87311fdefe8059fb8240e1d641c34463e4fa33d69ceceb219 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b9125d9b50228e87311fdefe8059fb8240e1d641c34463e4fa33d69ceceb219->enter($__internal_1b9125d9b50228e87311fdefe8059fb8240e1d641c34463e4fa33d69ceceb219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_1227c57cf80467c8e408ac53aa9f8f0454a9ab508b26bd960f7535ec5ddf2204->leave($__internal_1227c57cf80467c8e408ac53aa9f8f0454a9ab508b26bd960f7535ec5ddf2204_prof);

        
        $__internal_1b9125d9b50228e87311fdefe8059fb8240e1d641c34463e4fa33d69ceceb219->leave($__internal_1b9125d9b50228e87311fdefe8059fb8240e1d641c34463e4fa33d69ceceb219_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.atom.twig", "/Users/mac/SymfonyProjects/Hint/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
