<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_eeef907ba323869e25a0a8179919d86a319ae25c0412cadd40a32e5f9b2379d3 extends Twig_Template
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
        $__internal_bd2b36a63f04f9a2aa54159c9cb2f2c34e1e58770edeae9682e4d15b198b1645 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd2b36a63f04f9a2aa54159c9cb2f2c34e1e58770edeae9682e4d15b198b1645->enter($__internal_bd2b36a63f04f9a2aa54159c9cb2f2c34e1e58770edeae9682e4d15b198b1645_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_ddbd1675f8b6c99fe250c5598a5adaea6f1123537b6ca722e673d448bf17946e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddbd1675f8b6c99fe250c5598a5adaea6f1123537b6ca722e673d448bf17946e->enter($__internal_ddbd1675f8b6c99fe250c5598a5adaea6f1123537b6ca722e673d448bf17946e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_bd2b36a63f04f9a2aa54159c9cb2f2c34e1e58770edeae9682e4d15b198b1645->leave($__internal_bd2b36a63f04f9a2aa54159c9cb2f2c34e1e58770edeae9682e4d15b198b1645_prof);

        
        $__internal_ddbd1675f8b6c99fe250c5598a5adaea6f1123537b6ca722e673d448bf17946e->leave($__internal_ddbd1675f8b6c99fe250c5598a5adaea6f1123537b6ca722e673d448bf17946e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
", "TwigBundle:Exception:error.js.twig", "/Users/mac/SymfonyProjects/Hint/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
