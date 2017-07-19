<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_6a46e443046448e89fe958d293485241ac39f46719d5389d7eb16acffc3a1325 extends Twig_Template
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
        $__internal_7aa384f59229c7e6a13fc60145589c89c6e4cf7b2dbc2e0818b3fa0826f4de6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7aa384f59229c7e6a13fc60145589c89c6e4cf7b2dbc2e0818b3fa0826f4de6f->enter($__internal_7aa384f59229c7e6a13fc60145589c89c6e4cf7b2dbc2e0818b3fa0826f4de6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_92a01a7c755893c8fc877f27dbe7c9ed14b9a205003a220fa6c2a927f93e039b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92a01a7c755893c8fc877f27dbe7c9ed14b9a205003a220fa6c2a927f93e039b->enter($__internal_92a01a7c755893c8fc877f27dbe7c9ed14b9a205003a220fa6c2a927f93e039b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_7aa384f59229c7e6a13fc60145589c89c6e4cf7b2dbc2e0818b3fa0826f4de6f->leave($__internal_7aa384f59229c7e6a13fc60145589c89c6e4cf7b2dbc2e0818b3fa0826f4de6f_prof);

        
        $__internal_92a01a7c755893c8fc877f27dbe7c9ed14b9a205003a220fa6c2a927f93e039b->leave($__internal_92a01a7c755893c8fc877f27dbe7c9ed14b9a205003a220fa6c2a927f93e039b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "/Users/mac/SymfonyProjects/Hint/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
