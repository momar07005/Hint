<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_cc63dcbcbbcaaf31195d7f44ca7085aa09384b92985c51e9c5c2620559e9ac90 extends Twig_Template
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
        $__internal_509340e9f07070b98ab832958ca208266fbbbcba8781d4cdea3d171beda3b331 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_509340e9f07070b98ab832958ca208266fbbbcba8781d4cdea3d171beda3b331->enter($__internal_509340e9f07070b98ab832958ca208266fbbbcba8781d4cdea3d171beda3b331_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_120c5dc98b966a37d300751d3391891901015ebf6f2d75906a7fd049188b574e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_120c5dc98b966a37d300751d3391891901015ebf6f2d75906a7fd049188b574e->enter($__internal_120c5dc98b966a37d300751d3391891901015ebf6f2d75906a7fd049188b574e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_509340e9f07070b98ab832958ca208266fbbbcba8781d4cdea3d171beda3b331->leave($__internal_509340e9f07070b98ab832958ca208266fbbbcba8781d4cdea3d171beda3b331_prof);

        
        $__internal_120c5dc98b966a37d300751d3391891901015ebf6f2d75906a7fd049188b574e->leave($__internal_120c5dc98b966a37d300751d3391891901015ebf6f2d75906a7fd049188b574e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "/Users/mac/SymfonyProjects/Hint/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
