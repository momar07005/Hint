<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_01ae0849af69b5c127d7cfa97fc7648b82248f56883682dfe99ff3911784335a extends Twig_Template
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
        $__internal_2c6bb7c8a10f5eabb2ae335639358591d35e7d961289ea848201fe9fb4e8269d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c6bb7c8a10f5eabb2ae335639358591d35e7d961289ea848201fe9fb4e8269d->enter($__internal_2c6bb7c8a10f5eabb2ae335639358591d35e7d961289ea848201fe9fb4e8269d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_a108f255d9675d0037388d59fd6cc5fbdb374c9b537458f213ef7f934235749f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a108f255d9675d0037388d59fd6cc5fbdb374c9b537458f213ef7f934235749f->enter($__internal_a108f255d9675d0037388d59fd6cc5fbdb374c9b537458f213ef7f934235749f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_2c6bb7c8a10f5eabb2ae335639358591d35e7d961289ea848201fe9fb4e8269d->leave($__internal_2c6bb7c8a10f5eabb2ae335639358591d35e7d961289ea848201fe9fb4e8269d_prof);

        
        $__internal_a108f255d9675d0037388d59fd6cc5fbdb374c9b537458f213ef7f934235749f->leave($__internal_a108f255d9675d0037388d59fd6cc5fbdb374c9b537458f213ef7f934235749f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/Users/mac/SymfonyProjects/Hint/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
