<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_72df8e9575249c56739f3f4ddd7c9f8c1d67769956d5937dd5793f569c113c2b extends Twig_Template
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
        $__internal_e54dd948df6f4bf45c802ae0781bd8bf022039c7309b1ddf18a89671bc24c9f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e54dd948df6f4bf45c802ae0781bd8bf022039c7309b1ddf18a89671bc24c9f6->enter($__internal_e54dd948df6f4bf45c802ae0781bd8bf022039c7309b1ddf18a89671bc24c9f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_e44b4256e086871dbd9fa0065fb1c882ed2a2bbc5b70883866f7251ab540a2b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e44b4256e086871dbd9fa0065fb1c882ed2a2bbc5b70883866f7251ab540a2b1->enter($__internal_e44b4256e086871dbd9fa0065fb1c882ed2a2bbc5b70883866f7251ab540a2b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_e54dd948df6f4bf45c802ae0781bd8bf022039c7309b1ddf18a89671bc24c9f6->leave($__internal_e54dd948df6f4bf45c802ae0781bd8bf022039c7309b1ddf18a89671bc24c9f6_prof);

        
        $__internal_e44b4256e086871dbd9fa0065fb1c882ed2a2bbc5b70883866f7251ab540a2b1->leave($__internal_e44b4256e086871dbd9fa0065fb1c882ed2a2bbc5b70883866f7251ab540a2b1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/Users/mac/SymfonyProjects/Hint/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
