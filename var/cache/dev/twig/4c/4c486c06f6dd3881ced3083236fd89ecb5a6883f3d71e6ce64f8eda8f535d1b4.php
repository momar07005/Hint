<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_eeef907ba323869e25a0a8179919d86a319ae25c0412cadd40a32e5f9b2379d3 extends Twig_Template
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
        $__internal_d4e7fefdc62e8ff9bb09e23e4043729ff8806e54b2afb2a02562371aef818281 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4e7fefdc62e8ff9bb09e23e4043729ff8806e54b2afb2a02562371aef818281->enter($__internal_d4e7fefdc62e8ff9bb09e23e4043729ff8806e54b2afb2a02562371aef818281_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_88857f76b7416b883389ddc0d86dd21ba9e7cf8ca9b3033eaec937749f5a2e25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88857f76b7416b883389ddc0d86dd21ba9e7cf8ca9b3033eaec937749f5a2e25->enter($__internal_88857f76b7416b883389ddc0d86dd21ba9e7cf8ca9b3033eaec937749f5a2e25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_d4e7fefdc62e8ff9bb09e23e4043729ff8806e54b2afb2a02562371aef818281->leave($__internal_d4e7fefdc62e8ff9bb09e23e4043729ff8806e54b2afb2a02562371aef818281_prof);

        
        $__internal_88857f76b7416b883389ddc0d86dd21ba9e7cf8ca9b3033eaec937749f5a2e25->leave($__internal_88857f76b7416b883389ddc0d86dd21ba9e7cf8ca9b3033eaec937749f5a2e25_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
", "TwigBundle:Exception:error.js.twig", "/Users/mac/SymfonyProjects/Hint/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
