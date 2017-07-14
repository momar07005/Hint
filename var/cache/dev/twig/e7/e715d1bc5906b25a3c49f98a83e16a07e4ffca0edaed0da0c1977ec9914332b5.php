<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_817f63dc66f2919b434a96391e40160544c401b293e58a45b44e7dacccfa79f0 extends Twig_Template
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
        $__internal_f6f9a552e6689b567529fbd5bf99e86fe29d5b4bbb85013b69f5d2ca606af54c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6f9a552e6689b567529fbd5bf99e86fe29d5b4bbb85013b69f5d2ca606af54c->enter($__internal_f6f9a552e6689b567529fbd5bf99e86fe29d5b4bbb85013b69f5d2ca606af54c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_c02f2c65bcab24828e9e646bca0b47167cd1c17daf9e0aeb690c42ee80883b87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c02f2c65bcab24828e9e646bca0b47167cd1c17daf9e0aeb690c42ee80883b87->enter($__internal_c02f2c65bcab24828e9e646bca0b47167cd1c17daf9e0aeb690c42ee80883b87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_f6f9a552e6689b567529fbd5bf99e86fe29d5b4bbb85013b69f5d2ca606af54c->leave($__internal_f6f9a552e6689b567529fbd5bf99e86fe29d5b4bbb85013b69f5d2ca606af54c_prof);

        
        $__internal_c02f2c65bcab24828e9e646bca0b47167cd1c17daf9e0aeb690c42ee80883b87->leave($__internal_c02f2c65bcab24828e9e646bca0b47167cd1c17daf9e0aeb690c42ee80883b87_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/Users/mac/SymfonyProjects/Hint/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
