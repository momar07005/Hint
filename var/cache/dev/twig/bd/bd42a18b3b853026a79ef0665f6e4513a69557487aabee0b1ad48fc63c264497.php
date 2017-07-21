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
        $__internal_ea49ce4c0783a76fe025a9d3168f3dac39239b670680dc97ff0ef254bcaaf12f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea49ce4c0783a76fe025a9d3168f3dac39239b670680dc97ff0ef254bcaaf12f->enter($__internal_ea49ce4c0783a76fe025a9d3168f3dac39239b670680dc97ff0ef254bcaaf12f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_fd1452ac9825b8123da50acee6e88ffc55297a40c908d7e90841d585d1319293 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd1452ac9825b8123da50acee6e88ffc55297a40c908d7e90841d585d1319293->enter($__internal_fd1452ac9825b8123da50acee6e88ffc55297a40c908d7e90841d585d1319293_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_ea49ce4c0783a76fe025a9d3168f3dac39239b670680dc97ff0ef254bcaaf12f->leave($__internal_ea49ce4c0783a76fe025a9d3168f3dac39239b670680dc97ff0ef254bcaaf12f_prof);

        
        $__internal_fd1452ac9825b8123da50acee6e88ffc55297a40c908d7e90841d585d1319293->leave($__internal_fd1452ac9825b8123da50acee6e88ffc55297a40c908d7e90841d585d1319293_prof);

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
