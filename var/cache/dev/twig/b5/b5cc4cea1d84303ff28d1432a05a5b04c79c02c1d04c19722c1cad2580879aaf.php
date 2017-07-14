<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_37b40d239d7a33435bce260110da62e80cfaca36ee43a2478ac7c308dfbfd72d extends Twig_Template
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
        $__internal_9cbeeb8dd95602eafe74f41c4ca9ed0f0263a951ee786c866218583c6250dddf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cbeeb8dd95602eafe74f41c4ca9ed0f0263a951ee786c866218583c6250dddf->enter($__internal_9cbeeb8dd95602eafe74f41c4ca9ed0f0263a951ee786c866218583c6250dddf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_46bf78632f101de69bda6e590bb66c490e97be24ff2c0045f4abd3c704555c83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46bf78632f101de69bda6e590bb66c490e97be24ff2c0045f4abd3c704555c83->enter($__internal_46bf78632f101de69bda6e590bb66c490e97be24ff2c0045f4abd3c704555c83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_9cbeeb8dd95602eafe74f41c4ca9ed0f0263a951ee786c866218583c6250dddf->leave($__internal_9cbeeb8dd95602eafe74f41c4ca9ed0f0263a951ee786c866218583c6250dddf_prof);

        
        $__internal_46bf78632f101de69bda6e590bb66c490e97be24ff2c0045f4abd3c704555c83->leave($__internal_46bf78632f101de69bda6e590bb66c490e97be24ff2c0045f4abd3c704555c83_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/Users/mac/SymfonyProjects/Hint/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
