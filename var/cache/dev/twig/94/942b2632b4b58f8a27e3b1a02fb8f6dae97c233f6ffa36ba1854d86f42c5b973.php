<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_9005269caa2bdae1ee9a54ab2cf287519752a99b74a5aa861138fa4aa89cd3e4 extends Twig_Template
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
        $__internal_86c49ff4f67aa23fbd894a478cb009f82528fba9141383359b5321e94de2f7dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86c49ff4f67aa23fbd894a478cb009f82528fba9141383359b5321e94de2f7dc->enter($__internal_86c49ff4f67aa23fbd894a478cb009f82528fba9141383359b5321e94de2f7dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_4e0a7c3cd0a4e83569b08a1aab72b1a379f3a838485eadeebdea2c4e3eaf6e39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e0a7c3cd0a4e83569b08a1aab72b1a379f3a838485eadeebdea2c4e3eaf6e39->enter($__internal_4e0a7c3cd0a4e83569b08a1aab72b1a379f3a838485eadeebdea2c4e3eaf6e39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_86c49ff4f67aa23fbd894a478cb009f82528fba9141383359b5321e94de2f7dc->leave($__internal_86c49ff4f67aa23fbd894a478cb009f82528fba9141383359b5321e94de2f7dc_prof);

        
        $__internal_4e0a7c3cd0a4e83569b08a1aab72b1a379f3a838485eadeebdea2c4e3eaf6e39->leave($__internal_4e0a7c3cd0a4e83569b08a1aab72b1a379f3a838485eadeebdea2c4e3eaf6e39_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "/Users/mac/SymfonyProjects/Hint/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
