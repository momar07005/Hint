<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_cc63dcbcbbcaaf31195d7f44ca7085aa09384b92985c51e9c5c2620559e9ac90 extends Twig_Template
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
        $__internal_aeca0d01de7e6014bc270aab998acba440b2a36ec73316c4b445481554852c6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aeca0d01de7e6014bc270aab998acba440b2a36ec73316c4b445481554852c6f->enter($__internal_aeca0d01de7e6014bc270aab998acba440b2a36ec73316c4b445481554852c6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_f12dbaf9dde6903569d204dfa7b866ff9315a7c8879941f7b8071d1656f3036f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f12dbaf9dde6903569d204dfa7b866ff9315a7c8879941f7b8071d1656f3036f->enter($__internal_f12dbaf9dde6903569d204dfa7b866ff9315a7c8879941f7b8071d1656f3036f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_aeca0d01de7e6014bc270aab998acba440b2a36ec73316c4b445481554852c6f->leave($__internal_aeca0d01de7e6014bc270aab998acba440b2a36ec73316c4b445481554852c6f_prof);

        
        $__internal_f12dbaf9dde6903569d204dfa7b866ff9315a7c8879941f7b8071d1656f3036f->leave($__internal_f12dbaf9dde6903569d204dfa7b866ff9315a7c8879941f7b8071d1656f3036f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
", "TwigBundle:Exception:error.css.twig", "/Users/mac/SymfonyProjects/Hint/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
