<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_181dfcf4c6b1e5d6973710c21b7646263dd4d27dfab2a2e02cb54a8c5a6171a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8c354e57a2a49754cb670e12ee764321f819b8bfaa25c972ebbb66b4353bab9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c354e57a2a49754cb670e12ee764321f819b8bfaa25c972ebbb66b4353bab9b->enter($__internal_8c354e57a2a49754cb670e12ee764321f819b8bfaa25c972ebbb66b4353bab9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_4403171bb8d1685e0595a136710b44268f5a8a8ab2f11c07e25adae1a7255cb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4403171bb8d1685e0595a136710b44268f5a8a8ab2f11c07e25adae1a7255cb6->enter($__internal_4403171bb8d1685e0595a136710b44268f5a8a8ab2f11c07e25adae1a7255cb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_8c354e57a2a49754cb670e12ee764321f819b8bfaa25c972ebbb66b4353bab9b->leave($__internal_8c354e57a2a49754cb670e12ee764321f819b8bfaa25c972ebbb66b4353bab9b_prof);

        
        $__internal_4403171bb8d1685e0595a136710b44268f5a8a8ab2f11c07e25adae1a7255cb6->leave($__internal_4403171bb8d1685e0595a136710b44268f5a8a8ab2f11c07e25adae1a7255cb6_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_cf08a945f48e1278854f5d27909d48f60ef1d8431c902995fa1a68a9a999e80f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf08a945f48e1278854f5d27909d48f60ef1d8431c902995fa1a68a9a999e80f->enter($__internal_cf08a945f48e1278854f5d27909d48f60ef1d8431c902995fa1a68a9a999e80f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7ea8705c422f4c915a37dfe9243b45b8f4e7f07a08923dfc52bae651e25681b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ea8705c422f4c915a37dfe9243b45b8f4e7f07a08923dfc52bae651e25681b7->enter($__internal_7ea8705c422f4c915a37dfe9243b45b8f4e7f07a08923dfc52bae651e25681b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_7ea8705c422f4c915a37dfe9243b45b8f4e7f07a08923dfc52bae651e25681b7->leave($__internal_7ea8705c422f4c915a37dfe9243b45b8f4e7f07a08923dfc52bae651e25681b7_prof);

        
        $__internal_cf08a945f48e1278854f5d27909d48f60ef1d8431c902995fa1a68a9a999e80f->leave($__internal_cf08a945f48e1278854f5d27909d48f60ef1d8431c902995fa1a68a9a999e80f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/Users/mac/SymfonyProjects/Hint/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
