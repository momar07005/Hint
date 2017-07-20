<?php

/* TwigBundle:Exception:error.html.twig */
class __TwigTemplate_0e7c0ce7e2b7fada69efd23c803e58d243a2aa24c9f0b14e35e2500124d3b529 extends Twig_Template
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
        $__internal_3c3829f8863dc727a84056ddea8dcf42a51ab47556535b01ca2ea2c20ca5e2a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c3829f8863dc727a84056ddea8dcf42a51ab47556535b01ca2ea2c20ca5e2a6->enter($__internal_3c3829f8863dc727a84056ddea8dcf42a51ab47556535b01ca2ea2c20ca5e2a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.html.twig"));

        $__internal_9c0af9eeff4051f76d7fe49f5582f7697e5bdeb298f811d202279063fcf6d9ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c0af9eeff4051f76d7fe49f5582f7697e5bdeb298f811d202279063fcf6d9ae->enter($__internal_9c0af9eeff4051f76d7fe49f5582f7697e5bdeb298f811d202279063fcf6d9ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <title>An Error Occurred: ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "</title>
    </head>
    <body>
        <h1>Oops! An Error Occurred</h1>
        <h2>The server returned a \"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\".</h2>

        <div>
            Something is broken. Please let us know what you were doing when this error occurred.
            We will fix it as soon as possible. Sorry for any inconvenience caused.
        </div>
    </body>
</html>
";
        
        $__internal_3c3829f8863dc727a84056ddea8dcf42a51ab47556535b01ca2ea2c20ca5e2a6->leave($__internal_3c3829f8863dc727a84056ddea8dcf42a51ab47556535b01ca2ea2c20ca5e2a6_prof);

        
        $__internal_9c0af9eeff4051f76d7fe49f5582f7697e5bdeb298f811d202279063fcf6d9ae->leave($__internal_9c0af9eeff4051f76d7fe49f5582f7697e5bdeb298f811d202279063fcf6d9ae_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 9,  34 => 5,  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <title>An Error Occurred: {{ status_text }}</title>
    </head>
    <body>
        <h1>Oops! An Error Occurred</h1>
        <h2>The server returned a \"{{ status_code }} {{ status_text }}\".</h2>

        <div>
            Something is broken. Please let us know what you were doing when this error occurred.
            We will fix it as soon as possible. Sorry for any inconvenience caused.
        </div>
    </body>
</html>
", "TwigBundle:Exception:error.html.twig", "/Users/mac/SymfonyProjects/Hint/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.html.twig");
    }
}
