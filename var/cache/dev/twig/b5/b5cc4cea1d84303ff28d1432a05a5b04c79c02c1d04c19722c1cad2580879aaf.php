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
        $__internal_a6fa9426034ad41649d82307bdcbd0a7b706dd96682dd27633ff2f766a4605e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6fa9426034ad41649d82307bdcbd0a7b706dd96682dd27633ff2f766a4605e0->enter($__internal_a6fa9426034ad41649d82307bdcbd0a7b706dd96682dd27633ff2f766a4605e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_32538ecd119c4c507c5f275a41acc9d3094882819b5d5c6ade1ec1e379abf259 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32538ecd119c4c507c5f275a41acc9d3094882819b5d5c6ade1ec1e379abf259->enter($__internal_32538ecd119c4c507c5f275a41acc9d3094882819b5d5c6ade1ec1e379abf259_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_a6fa9426034ad41649d82307bdcbd0a7b706dd96682dd27633ff2f766a4605e0->leave($__internal_a6fa9426034ad41649d82307bdcbd0a7b706dd96682dd27633ff2f766a4605e0_prof);

        
        $__internal_32538ecd119c4c507c5f275a41acc9d3094882819b5d5c6ade1ec1e379abf259->leave($__internal_32538ecd119c4c507c5f275a41acc9d3094882819b5d5c6ade1ec1e379abf259_prof);

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
