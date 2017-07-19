<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_8d530931757b69b700e933ed1781af5eff321bb6d47c058009c296c544f76931 extends Twig_Template
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
        $__internal_788e2039fdf7f19b470fecd62b800cc98adfaa599af76d32881a68fce7a3d26d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_788e2039fdf7f19b470fecd62b800cc98adfaa599af76d32881a68fce7a3d26d->enter($__internal_788e2039fdf7f19b470fecd62b800cc98adfaa599af76d32881a68fce7a3d26d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_f20adb3eb3683ceef0b9c8e6b2d8a8474fbaafba88d7cfb9a2acd96a9122061c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f20adb3eb3683ceef0b9c8e6b2d8a8474fbaafba88d7cfb9a2acd96a9122061c->enter($__internal_f20adb3eb3683ceef0b9c8e6b2d8a8474fbaafba88d7cfb9a2acd96a9122061c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_788e2039fdf7f19b470fecd62b800cc98adfaa599af76d32881a68fce7a3d26d->leave($__internal_788e2039fdf7f19b470fecd62b800cc98adfaa599af76d32881a68fce7a3d26d_prof);

        
        $__internal_f20adb3eb3683ceef0b9c8e6b2d8a8474fbaafba88d7cfb9a2acd96a9122061c->leave($__internal_f20adb3eb3683ceef0b9c8e6b2d8a8474fbaafba88d7cfb9a2acd96a9122061c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.js.twig", "/Users/mac/SymfonyProjects/Hint/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
