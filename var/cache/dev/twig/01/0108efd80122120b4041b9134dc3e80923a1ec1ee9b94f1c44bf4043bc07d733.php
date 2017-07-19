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
        $__internal_1203261a2e6f86ed53dbcdcc8d455d9ec2aac4eb1f4fe422a2767d71bb4f16cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1203261a2e6f86ed53dbcdcc8d455d9ec2aac4eb1f4fe422a2767d71bb4f16cf->enter($__internal_1203261a2e6f86ed53dbcdcc8d455d9ec2aac4eb1f4fe422a2767d71bb4f16cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_ed942610dd7536c8ff54afdeaff675acf0cb3149ebf07cc3b8337a0fc27c9ee2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed942610dd7536c8ff54afdeaff675acf0cb3149ebf07cc3b8337a0fc27c9ee2->enter($__internal_ed942610dd7536c8ff54afdeaff675acf0cb3149ebf07cc3b8337a0fc27c9ee2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_1203261a2e6f86ed53dbcdcc8d455d9ec2aac4eb1f4fe422a2767d71bb4f16cf->leave($__internal_1203261a2e6f86ed53dbcdcc8d455d9ec2aac4eb1f4fe422a2767d71bb4f16cf_prof);

        
        $__internal_ed942610dd7536c8ff54afdeaff675acf0cb3149ebf07cc3b8337a0fc27c9ee2->leave($__internal_ed942610dd7536c8ff54afdeaff675acf0cb3149ebf07cc3b8337a0fc27c9ee2_prof);

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
