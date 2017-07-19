<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_e62f88bc221f6fa1de7e5e187bcc6adeeefe012dc7acf37e182872062161dcbc extends Twig_Template
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
        $__internal_5daf9352377b2e1d3a59d792739b64233793c9c83c5514358945c077811eea59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5daf9352377b2e1d3a59d792739b64233793c9c83c5514358945c077811eea59->enter($__internal_5daf9352377b2e1d3a59d792739b64233793c9c83c5514358945c077811eea59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_a87712d6a799560bb0cd20938c9c33e80cb07072bc0f0faf883a5a01d6924559 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a87712d6a799560bb0cd20938c9c33e80cb07072bc0f0faf883a5a01d6924559->enter($__internal_a87712d6a799560bb0cd20938c9c33e80cb07072bc0f0faf883a5a01d6924559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_5daf9352377b2e1d3a59d792739b64233793c9c83c5514358945c077811eea59->leave($__internal_5daf9352377b2e1d3a59d792739b64233793c9c83c5514358945c077811eea59_prof);

        
        $__internal_a87712d6a799560bb0cd20938c9c33e80cb07072bc0f0faf883a5a01d6924559->leave($__internal_a87712d6a799560bb0cd20938c9c33e80cb07072bc0f0faf883a5a01d6924559_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/Users/mac/SymfonyProjects/Hint/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
