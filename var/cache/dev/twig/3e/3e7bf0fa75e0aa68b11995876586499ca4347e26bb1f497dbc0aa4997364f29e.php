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
        $__internal_72781f143b4940e405572efbd40f5872889e0e96b5eb079034eb90bcf9aa0fd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72781f143b4940e405572efbd40f5872889e0e96b5eb079034eb90bcf9aa0fd3->enter($__internal_72781f143b4940e405572efbd40f5872889e0e96b5eb079034eb90bcf9aa0fd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_6bbbb96a43b905f156a945bbfa482aee2f141618abe894a9a34b46bfffafd9a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bbbb96a43b905f156a945bbfa482aee2f141618abe894a9a34b46bfffafd9a6->enter($__internal_6bbbb96a43b905f156a945bbfa482aee2f141618abe894a9a34b46bfffafd9a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_72781f143b4940e405572efbd40f5872889e0e96b5eb079034eb90bcf9aa0fd3->leave($__internal_72781f143b4940e405572efbd40f5872889e0e96b5eb079034eb90bcf9aa0fd3_prof);

        
        $__internal_6bbbb96a43b905f156a945bbfa482aee2f141618abe894a9a34b46bfffafd9a6->leave($__internal_6bbbb96a43b905f156a945bbfa482aee2f141618abe894a9a34b46bfffafd9a6_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_fcb9121574c9361795b3fa0fa89b5e36e57afdb926d768c260fd5f07df2ad913 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcb9121574c9361795b3fa0fa89b5e36e57afdb926d768c260fd5f07df2ad913->enter($__internal_fcb9121574c9361795b3fa0fa89b5e36e57afdb926d768c260fd5f07df2ad913_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6ee6dbca8555049d00989870be9bf00f9269480942da0004a2467c1273cb72bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ee6dbca8555049d00989870be9bf00f9269480942da0004a2467c1273cb72bc->enter($__internal_6ee6dbca8555049d00989870be9bf00f9269480942da0004a2467c1273cb72bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_6ee6dbca8555049d00989870be9bf00f9269480942da0004a2467c1273cb72bc->leave($__internal_6ee6dbca8555049d00989870be9bf00f9269480942da0004a2467c1273cb72bc_prof);

        
        $__internal_fcb9121574c9361795b3fa0fa89b5e36e57afdb926d768c260fd5f07df2ad913->leave($__internal_fcb9121574c9361795b3fa0fa89b5e36e57afdb926d768c260fd5f07df2ad913_prof);

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
