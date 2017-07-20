<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_428fec409f401c1f1673d4c20b08279c26cee025a5fa8226d37b86690cb35c21 extends Twig_Template
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
        $__internal_dadf83ff2b0c2ed98a8014534895ab6db6c7b2e77ab70b873ddacffa5fa6785c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dadf83ff2b0c2ed98a8014534895ab6db6c7b2e77ab70b873ddacffa5fa6785c->enter($__internal_dadf83ff2b0c2ed98a8014534895ab6db6c7b2e77ab70b873ddacffa5fa6785c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_391362f1a8c4e30bcffca3cde9b0e1ae75a9ec9aa8c8a189810aea7a5509268d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_391362f1a8c4e30bcffca3cde9b0e1ae75a9ec9aa8c8a189810aea7a5509268d->enter($__internal_391362f1a8c4e30bcffca3cde9b0e1ae75a9ec9aa8c8a189810aea7a5509268d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_dadf83ff2b0c2ed98a8014534895ab6db6c7b2e77ab70b873ddacffa5fa6785c->leave($__internal_dadf83ff2b0c2ed98a8014534895ab6db6c7b2e77ab70b873ddacffa5fa6785c_prof);

        
        $__internal_391362f1a8c4e30bcffca3cde9b0e1ae75a9ec9aa8c8a189810aea7a5509268d->leave($__internal_391362f1a8c4e30bcffca3cde9b0e1ae75a9ec9aa8c8a189810aea7a5509268d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/Users/mac/SymfonyProjects/Hint/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
