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
        $__internal_784a1e77c58803d3bf5775e750dfd4da2188196b6bcf6cab532140d2b3d27609 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_784a1e77c58803d3bf5775e750dfd4da2188196b6bcf6cab532140d2b3d27609->enter($__internal_784a1e77c58803d3bf5775e750dfd4da2188196b6bcf6cab532140d2b3d27609_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_76ed3193f94d9f28be3fbba71048c4cacb07a1300af69896bb31fd7cf5a6b445 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76ed3193f94d9f28be3fbba71048c4cacb07a1300af69896bb31fd7cf5a6b445->enter($__internal_76ed3193f94d9f28be3fbba71048c4cacb07a1300af69896bb31fd7cf5a6b445_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_784a1e77c58803d3bf5775e750dfd4da2188196b6bcf6cab532140d2b3d27609->leave($__internal_784a1e77c58803d3bf5775e750dfd4da2188196b6bcf6cab532140d2b3d27609_prof);

        
        $__internal_76ed3193f94d9f28be3fbba71048c4cacb07a1300af69896bb31fd7cf5a6b445->leave($__internal_76ed3193f94d9f28be3fbba71048c4cacb07a1300af69896bb31fd7cf5a6b445_prof);

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
