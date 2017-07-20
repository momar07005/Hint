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
        $__internal_d8a4e155a9baca8930a5973c1b9a10c7a670e3eca6526a4c0f3d64a074b040a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8a4e155a9baca8930a5973c1b9a10c7a670e3eca6526a4c0f3d64a074b040a9->enter($__internal_d8a4e155a9baca8930a5973c1b9a10c7a670e3eca6526a4c0f3d64a074b040a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_dc7cf00d3fdbd03c64f6845010893b21258671c635e818e8f763b291c00de3ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc7cf00d3fdbd03c64f6845010893b21258671c635e818e8f763b291c00de3ad->enter($__internal_dc7cf00d3fdbd03c64f6845010893b21258671c635e818e8f763b291c00de3ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_d8a4e155a9baca8930a5973c1b9a10c7a670e3eca6526a4c0f3d64a074b040a9->leave($__internal_d8a4e155a9baca8930a5973c1b9a10c7a670e3eca6526a4c0f3d64a074b040a9_prof);

        
        $__internal_dc7cf00d3fdbd03c64f6845010893b21258671c635e818e8f763b291c00de3ad->leave($__internal_dc7cf00d3fdbd03c64f6845010893b21258671c635e818e8f763b291c00de3ad_prof);

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
