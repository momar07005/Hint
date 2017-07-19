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
        $__internal_c58d2ad36df33b49df010378b77e48eba0b2b9e93c6ec94e9d8b524385dc48b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c58d2ad36df33b49df010378b77e48eba0b2b9e93c6ec94e9d8b524385dc48b1->enter($__internal_c58d2ad36df33b49df010378b77e48eba0b2b9e93c6ec94e9d8b524385dc48b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_9a4ea7caf45068bcdda19ad5baad7f2901615fdec3fec9d9959e68bf6e244d9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a4ea7caf45068bcdda19ad5baad7f2901615fdec3fec9d9959e68bf6e244d9f->enter($__internal_9a4ea7caf45068bcdda19ad5baad7f2901615fdec3fec9d9959e68bf6e244d9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_c58d2ad36df33b49df010378b77e48eba0b2b9e93c6ec94e9d8b524385dc48b1->leave($__internal_c58d2ad36df33b49df010378b77e48eba0b2b9e93c6ec94e9d8b524385dc48b1_prof);

        
        $__internal_9a4ea7caf45068bcdda19ad5baad7f2901615fdec3fec9d9959e68bf6e244d9f->leave($__internal_9a4ea7caf45068bcdda19ad5baad7f2901615fdec3fec9d9959e68bf6e244d9f_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_c0bd5e44651ece319344b4a3fc7131a7c55fd69404d4e4ad7aeff6aaf9b8f2cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0bd5e44651ece319344b4a3fc7131a7c55fd69404d4e4ad7aeff6aaf9b8f2cc->enter($__internal_c0bd5e44651ece319344b4a3fc7131a7c55fd69404d4e4ad7aeff6aaf9b8f2cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9f592d846bfded267735e34f6707b08fc6b5074a861e99cd68122eafca9c4eab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f592d846bfded267735e34f6707b08fc6b5074a861e99cd68122eafca9c4eab->enter($__internal_9f592d846bfded267735e34f6707b08fc6b5074a861e99cd68122eafca9c4eab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_9f592d846bfded267735e34f6707b08fc6b5074a861e99cd68122eafca9c4eab->leave($__internal_9f592d846bfded267735e34f6707b08fc6b5074a861e99cd68122eafca9c4eab_prof);

        
        $__internal_c0bd5e44651ece319344b4a3fc7131a7c55fd69404d4e4ad7aeff6aaf9b8f2cc->leave($__internal_c0bd5e44651ece319344b4a3fc7131a7c55fd69404d4e4ad7aeff6aaf9b8f2cc_prof);

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
