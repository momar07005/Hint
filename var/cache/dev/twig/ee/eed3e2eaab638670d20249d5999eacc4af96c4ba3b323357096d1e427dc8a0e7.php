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
        $__internal_0d904088aaeef59895bcddcf394b7880e5d68b38c1b88f302ef92e4b8f1cb398 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d904088aaeef59895bcddcf394b7880e5d68b38c1b88f302ef92e4b8f1cb398->enter($__internal_0d904088aaeef59895bcddcf394b7880e5d68b38c1b88f302ef92e4b8f1cb398_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_7384de470827db6c5cadab0225dc9e878dee042a063c52a1477dd55e31cc7f11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7384de470827db6c5cadab0225dc9e878dee042a063c52a1477dd55e31cc7f11->enter($__internal_7384de470827db6c5cadab0225dc9e878dee042a063c52a1477dd55e31cc7f11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_0d904088aaeef59895bcddcf394b7880e5d68b38c1b88f302ef92e4b8f1cb398->leave($__internal_0d904088aaeef59895bcddcf394b7880e5d68b38c1b88f302ef92e4b8f1cb398_prof);

        
        $__internal_7384de470827db6c5cadab0225dc9e878dee042a063c52a1477dd55e31cc7f11->leave($__internal_7384de470827db6c5cadab0225dc9e878dee042a063c52a1477dd55e31cc7f11_prof);

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
