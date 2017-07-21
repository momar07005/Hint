<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_69dd5892e0d7aa013296cccda76faf754bbacb358d142941711b038ff22a1fd0 extends Twig_Template
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
        $__internal_9c272c11336ce121ebc211bd7f8f6f595e7faead86cb08a51c727a50fbf90268 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c272c11336ce121ebc211bd7f8f6f595e7faead86cb08a51c727a50fbf90268->enter($__internal_9c272c11336ce121ebc211bd7f8f6f595e7faead86cb08a51c727a50fbf90268_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_f6915abc849a2bb1189fa61a6eb7b2155e9bb263bfb18012cbf685c97b3e8cd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6915abc849a2bb1189fa61a6eb7b2155e9bb263bfb18012cbf685c97b3e8cd2->enter($__internal_f6915abc849a2bb1189fa61a6eb7b2155e9bb263bfb18012cbf685c97b3e8cd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_9c272c11336ce121ebc211bd7f8f6f595e7faead86cb08a51c727a50fbf90268->leave($__internal_9c272c11336ce121ebc211bd7f8f6f595e7faead86cb08a51c727a50fbf90268_prof);

        
        $__internal_f6915abc849a2bb1189fa61a6eb7b2155e9bb263bfb18012cbf685c97b3e8cd2->leave($__internal_f6915abc849a2bb1189fa61a6eb7b2155e9bb263bfb18012cbf685c97b3e8cd2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/Users/mac/SymfonyProjects/Hint/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
