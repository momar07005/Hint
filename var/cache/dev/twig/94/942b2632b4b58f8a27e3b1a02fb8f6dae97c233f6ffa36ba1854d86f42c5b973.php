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
        $__internal_9b7e746055b35aadf0b5664428b37b971b0b38fbd5406306c9292b67d5387353 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b7e746055b35aadf0b5664428b37b971b0b38fbd5406306c9292b67d5387353->enter($__internal_9b7e746055b35aadf0b5664428b37b971b0b38fbd5406306c9292b67d5387353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_e9be333c8d77158b342be162ae9ae75486b343f453445a74ddf38788b435414b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9be333c8d77158b342be162ae9ae75486b343f453445a74ddf38788b435414b->enter($__internal_e9be333c8d77158b342be162ae9ae75486b343f453445a74ddf38788b435414b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_9b7e746055b35aadf0b5664428b37b971b0b38fbd5406306c9292b67d5387353->leave($__internal_9b7e746055b35aadf0b5664428b37b971b0b38fbd5406306c9292b67d5387353_prof);

        
        $__internal_e9be333c8d77158b342be162ae9ae75486b343f453445a74ddf38788b435414b->leave($__internal_e9be333c8d77158b342be162ae9ae75486b343f453445a74ddf38788b435414b_prof);

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
