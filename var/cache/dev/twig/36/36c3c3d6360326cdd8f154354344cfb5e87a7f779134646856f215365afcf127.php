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
        $__internal_eef94039076564962ecae02626bd14557bcd961c8858cde45735d53b1594b2bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eef94039076564962ecae02626bd14557bcd961c8858cde45735d53b1594b2bc->enter($__internal_eef94039076564962ecae02626bd14557bcd961c8858cde45735d53b1594b2bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_8ed5a111a1239c7e47cd6a5671c188844d8698f1f3bc6e2da407febcabd0d1a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ed5a111a1239c7e47cd6a5671c188844d8698f1f3bc6e2da407febcabd0d1a0->enter($__internal_8ed5a111a1239c7e47cd6a5671c188844d8698f1f3bc6e2da407febcabd0d1a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_eef94039076564962ecae02626bd14557bcd961c8858cde45735d53b1594b2bc->leave($__internal_eef94039076564962ecae02626bd14557bcd961c8858cde45735d53b1594b2bc_prof);

        
        $__internal_8ed5a111a1239c7e47cd6a5671c188844d8698f1f3bc6e2da407febcabd0d1a0->leave($__internal_8ed5a111a1239c7e47cd6a5671c188844d8698f1f3bc6e2da407febcabd0d1a0_prof);

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
