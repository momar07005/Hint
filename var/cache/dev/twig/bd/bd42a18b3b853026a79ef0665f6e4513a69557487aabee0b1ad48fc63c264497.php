<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_382d846b3d74926112e4170b448e10a1f0b7596e8953a1daff218879c08ac1a8 extends Twig_Template
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
        $__internal_e5dacfb2641de233c85cbf8a0b5ce173af16e2ea7f85071dd0b3833790df1919 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5dacfb2641de233c85cbf8a0b5ce173af16e2ea7f85071dd0b3833790df1919->enter($__internal_e5dacfb2641de233c85cbf8a0b5ce173af16e2ea7f85071dd0b3833790df1919_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_da65e2b692b110a9183ec4afa68ceb429e6574e1dc020225680b652998609a1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da65e2b692b110a9183ec4afa68ceb429e6574e1dc020225680b652998609a1d->enter($__internal_da65e2b692b110a9183ec4afa68ceb429e6574e1dc020225680b652998609a1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_e5dacfb2641de233c85cbf8a0b5ce173af16e2ea7f85071dd0b3833790df1919->leave($__internal_e5dacfb2641de233c85cbf8a0b5ce173af16e2ea7f85071dd0b3833790df1919_prof);

        
        $__internal_da65e2b692b110a9183ec4afa68ceb429e6574e1dc020225680b652998609a1d->leave($__internal_da65e2b692b110a9183ec4afa68ceb429e6574e1dc020225680b652998609a1d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/Users/mac/SymfonyProjects/Hint/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
