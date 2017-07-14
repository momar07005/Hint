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
        $__internal_44d4c46e28dfd9378371d64649682dd65bc7df314e46ef6ad4fdf4879b3bd88d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44d4c46e28dfd9378371d64649682dd65bc7df314e46ef6ad4fdf4879b3bd88d->enter($__internal_44d4c46e28dfd9378371d64649682dd65bc7df314e46ef6ad4fdf4879b3bd88d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_e93d9c04bbda767f4990e74689afb5eed3bc0c10d23fb5fdf0501821e9ca6fb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e93d9c04bbda767f4990e74689afb5eed3bc0c10d23fb5fdf0501821e9ca6fb9->enter($__internal_e93d9c04bbda767f4990e74689afb5eed3bc0c10d23fb5fdf0501821e9ca6fb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_44d4c46e28dfd9378371d64649682dd65bc7df314e46ef6ad4fdf4879b3bd88d->leave($__internal_44d4c46e28dfd9378371d64649682dd65bc7df314e46ef6ad4fdf4879b3bd88d_prof);

        
        $__internal_e93d9c04bbda767f4990e74689afb5eed3bc0c10d23fb5fdf0501821e9ca6fb9->leave($__internal_e93d9c04bbda767f4990e74689afb5eed3bc0c10d23fb5fdf0501821e9ca6fb9_prof);

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
