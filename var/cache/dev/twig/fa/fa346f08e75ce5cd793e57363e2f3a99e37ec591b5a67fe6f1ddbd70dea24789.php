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
        $__internal_021efa3e8759cd8b01b965411f0296363fe9bdfceca9daf3ab3dfa2058c0c478 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_021efa3e8759cd8b01b965411f0296363fe9bdfceca9daf3ab3dfa2058c0c478->enter($__internal_021efa3e8759cd8b01b965411f0296363fe9bdfceca9daf3ab3dfa2058c0c478_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_70a3db27244686e9025825c8644059a366065d84d7d7ca6c3954ebf745000603 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70a3db27244686e9025825c8644059a366065d84d7d7ca6c3954ebf745000603->enter($__internal_70a3db27244686e9025825c8644059a366065d84d7d7ca6c3954ebf745000603_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_021efa3e8759cd8b01b965411f0296363fe9bdfceca9daf3ab3dfa2058c0c478->leave($__internal_021efa3e8759cd8b01b965411f0296363fe9bdfceca9daf3ab3dfa2058c0c478_prof);

        
        $__internal_70a3db27244686e9025825c8644059a366065d84d7d7ca6c3954ebf745000603->leave($__internal_70a3db27244686e9025825c8644059a366065d84d7d7ca6c3954ebf745000603_prof);

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
