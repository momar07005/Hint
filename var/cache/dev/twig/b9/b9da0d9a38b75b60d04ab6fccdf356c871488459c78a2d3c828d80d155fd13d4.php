<?php

/* NKHintBundle:Default:index.html.twig */
class __TwigTemplate_5878737c4aa010959463f5d846a8fb88699d258c049b8bc8ff3084c06a6d20d1 extends Twig_Template
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
        $__internal_02176e050234f1e01c61c7fd2017a64e30e032e35a4a5f2c083de831b220da10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02176e050234f1e01c61c7fd2017a64e30e032e35a4a5f2c083de831b220da10->enter($__internal_02176e050234f1e01c61c7fd2017a64e30e032e35a4a5f2c083de831b220da10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NKHintBundle:Default:index.html.twig"));

        $__internal_fc3d61b4d019c5562726ea3cb2c1c7af0e5911c6eba855f69f8090debe4dab99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc3d61b4d019c5562726ea3cb2c1c7af0e5911c6eba855f69f8090debe4dab99->enter($__internal_fc3d61b4d019c5562726ea3cb2c1c7af0e5911c6eba855f69f8090debe4dab99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NKHintBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_02176e050234f1e01c61c7fd2017a64e30e032e35a4a5f2c083de831b220da10->leave($__internal_02176e050234f1e01c61c7fd2017a64e30e032e35a4a5f2c083de831b220da10_prof);

        
        $__internal_fc3d61b4d019c5562726ea3cb2c1c7af0e5911c6eba855f69f8090debe4dab99->leave($__internal_fc3d61b4d019c5562726ea3cb2c1c7af0e5911c6eba855f69f8090debe4dab99_prof);

    }

    public function getTemplateName()
    {
        return "NKHintBundle:Default:index.html.twig";
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
        return new Twig_Source("Hello World!
", "NKHintBundle:Default:index.html.twig", "/Users/mac/SymfonyProjects/Hint/src/NK/HintBundle/Resources/views/Default/index.html.twig");
    }
}
