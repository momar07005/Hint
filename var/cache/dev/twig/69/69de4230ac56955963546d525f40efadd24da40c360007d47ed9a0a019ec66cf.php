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
        $__internal_050154f3ebce6ee933e47dcfb068eb2d8242630a0b29c68ab38b050d6cc23198 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_050154f3ebce6ee933e47dcfb068eb2d8242630a0b29c68ab38b050d6cc23198->enter($__internal_050154f3ebce6ee933e47dcfb068eb2d8242630a0b29c68ab38b050d6cc23198_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_d4c99110c5b15178b179c5e4d14d5913a9539f0eb30fc80a3e44d8df1ffc2666 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4c99110c5b15178b179c5e4d14d5913a9539f0eb30fc80a3e44d8df1ffc2666->enter($__internal_d4c99110c5b15178b179c5e4d14d5913a9539f0eb30fc80a3e44d8df1ffc2666_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_050154f3ebce6ee933e47dcfb068eb2d8242630a0b29c68ab38b050d6cc23198->leave($__internal_050154f3ebce6ee933e47dcfb068eb2d8242630a0b29c68ab38b050d6cc23198_prof);

        
        $__internal_d4c99110c5b15178b179c5e4d14d5913a9539f0eb30fc80a3e44d8df1ffc2666->leave($__internal_d4c99110c5b15178b179c5e4d14d5913a9539f0eb30fc80a3e44d8df1ffc2666_prof);

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
