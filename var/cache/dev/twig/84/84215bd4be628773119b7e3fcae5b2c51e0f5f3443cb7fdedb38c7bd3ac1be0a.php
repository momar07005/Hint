<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_98ba75c7ab981168cfd4ebb359497eb4d100f6a66ada4f8a9ef58f470e90aad6 extends Twig_Template
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
        $__internal_d6adbdcfd224989513a67299525ecd977f88ba0bc3b41f6b133de403489ba79f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6adbdcfd224989513a67299525ecd977f88ba0bc3b41f6b133de403489ba79f->enter($__internal_d6adbdcfd224989513a67299525ecd977f88ba0bc3b41f6b133de403489ba79f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_95d8ac40a7ac8b46b57f6e21642beaa017e35d530b304c26db7747793cc59dd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95d8ac40a7ac8b46b57f6e21642beaa017e35d530b304c26db7747793cc59dd2->enter($__internal_95d8ac40a7ac8b46b57f6e21642beaa017e35d530b304c26db7747793cc59dd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_d6adbdcfd224989513a67299525ecd977f88ba0bc3b41f6b133de403489ba79f->leave($__internal_d6adbdcfd224989513a67299525ecd977f88ba0bc3b41f6b133de403489ba79f_prof);

        
        $__internal_95d8ac40a7ac8b46b57f6e21642beaa017e35d530b304c26db7747793cc59dd2->leave($__internal_95d8ac40a7ac8b46b57f6e21642beaa017e35d530b304c26db7747793cc59dd2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.rdf.twig", "/Users/mac/SymfonyProjects/Hint/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
