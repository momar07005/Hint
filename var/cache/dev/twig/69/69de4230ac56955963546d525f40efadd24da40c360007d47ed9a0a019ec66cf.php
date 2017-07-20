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
        $__internal_a6960a25ee5f6fe52e64c41e5a38fd632d0e87b86c499f58f69d65da96d3051b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6960a25ee5f6fe52e64c41e5a38fd632d0e87b86c499f58f69d65da96d3051b->enter($__internal_a6960a25ee5f6fe52e64c41e5a38fd632d0e87b86c499f58f69d65da96d3051b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_8aaab9973c9674c73b951b0626f29eee146ebb1ac1e03d08beb79d58002eeee1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8aaab9973c9674c73b951b0626f29eee146ebb1ac1e03d08beb79d58002eeee1->enter($__internal_8aaab9973c9674c73b951b0626f29eee146ebb1ac1e03d08beb79d58002eeee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_a6960a25ee5f6fe52e64c41e5a38fd632d0e87b86c499f58f69d65da96d3051b->leave($__internal_a6960a25ee5f6fe52e64c41e5a38fd632d0e87b86c499f58f69d65da96d3051b_prof);

        
        $__internal_8aaab9973c9674c73b951b0626f29eee146ebb1ac1e03d08beb79d58002eeee1->leave($__internal_8aaab9973c9674c73b951b0626f29eee146ebb1ac1e03d08beb79d58002eeee1_prof);

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
