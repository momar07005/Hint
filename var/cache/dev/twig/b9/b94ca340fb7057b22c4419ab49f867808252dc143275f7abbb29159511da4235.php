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
        $__internal_1c333e988a9ec729480ef386ca56277b7a60478d65d7ec9fb2fdee2419fb0e63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c333e988a9ec729480ef386ca56277b7a60478d65d7ec9fb2fdee2419fb0e63->enter($__internal_1c333e988a9ec729480ef386ca56277b7a60478d65d7ec9fb2fdee2419fb0e63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_5b9d299509e00434aee26b8a0b5e6c8368f53397af4a7d6cc13a349c5eae9cac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b9d299509e00434aee26b8a0b5e6c8368f53397af4a7d6cc13a349c5eae9cac->enter($__internal_5b9d299509e00434aee26b8a0b5e6c8368f53397af4a7d6cc13a349c5eae9cac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_1c333e988a9ec729480ef386ca56277b7a60478d65d7ec9fb2fdee2419fb0e63->leave($__internal_1c333e988a9ec729480ef386ca56277b7a60478d65d7ec9fb2fdee2419fb0e63_prof);

        
        $__internal_5b9d299509e00434aee26b8a0b5e6c8368f53397af4a7d6cc13a349c5eae9cac->leave($__internal_5b9d299509e00434aee26b8a0b5e6c8368f53397af4a7d6cc13a349c5eae9cac_prof);

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
