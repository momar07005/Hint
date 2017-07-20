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
        $__internal_6ff71504f93c45c845fa57ee740a3b56c8cd25a2c3515576b518ec6761f5f886 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ff71504f93c45c845fa57ee740a3b56c8cd25a2c3515576b518ec6761f5f886->enter($__internal_6ff71504f93c45c845fa57ee740a3b56c8cd25a2c3515576b518ec6761f5f886_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_2c893ac242cf3f5bfd3ef84aed781ba8921a36801d59fc4c68bdec2a4a6743ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c893ac242cf3f5bfd3ef84aed781ba8921a36801d59fc4c68bdec2a4a6743ad->enter($__internal_2c893ac242cf3f5bfd3ef84aed781ba8921a36801d59fc4c68bdec2a4a6743ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_6ff71504f93c45c845fa57ee740a3b56c8cd25a2c3515576b518ec6761f5f886->leave($__internal_6ff71504f93c45c845fa57ee740a3b56c8cd25a2c3515576b518ec6761f5f886_prof);

        
        $__internal_2c893ac242cf3f5bfd3ef84aed781ba8921a36801d59fc4c68bdec2a4a6743ad->leave($__internal_2c893ac242cf3f5bfd3ef84aed781ba8921a36801d59fc4c68bdec2a4a6743ad_prof);

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
