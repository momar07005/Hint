<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_d47e477191ec518c06602bd78ecda6e8826278143f911b45d43e88234bb56f92 extends Twig_Template
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
        $__internal_0cf4f3d9c211996b213fed877cdac2df0384a72a1ffb3ca50231522c5d655000 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cf4f3d9c211996b213fed877cdac2df0384a72a1ffb3ca50231522c5d655000->enter($__internal_0cf4f3d9c211996b213fed877cdac2df0384a72a1ffb3ca50231522c5d655000_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_7ffcf912f34aaeba2def636393b0bdbe525e3b0e4af8c7440d3c1ba128bb7384 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ffcf912f34aaeba2def636393b0bdbe525e3b0e4af8c7440d3c1ba128bb7384->enter($__internal_7ffcf912f34aaeba2def636393b0bdbe525e3b0e4af8c7440d3c1ba128bb7384_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper {
    min-height: auto;
}
";
        
        $__internal_0cf4f3d9c211996b213fed877cdac2df0384a72a1ffb3ca50231522c5d655000->leave($__internal_0cf4f3d9c211996b213fed877cdac2df0384a72a1ffb3ca50231522c5d655000_prof);

        
        $__internal_7ffcf912f34aaeba2def636393b0bdbe525e3b0e4af8c7440d3c1ba128bb7384->leave($__internal_7ffcf912f34aaeba2def636393b0bdbe525e3b0e4af8c7440d3c1ba128bb7384_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
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
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper {
    min-height: auto;
}
", "WebProfilerBundle:Collector:exception.css.twig", "/Users/mac/SymfonyProjects/Hint/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.css.twig");
    }
}
