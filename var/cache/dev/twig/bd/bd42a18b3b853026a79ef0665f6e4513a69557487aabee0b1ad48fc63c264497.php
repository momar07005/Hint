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
        $__internal_2d2d6e4634df1ca2db572f1e2903bbb39b069f2a6c3feb905656b60b9756920d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d2d6e4634df1ca2db572f1e2903bbb39b069f2a6c3feb905656b60b9756920d->enter($__internal_2d2d6e4634df1ca2db572f1e2903bbb39b069f2a6c3feb905656b60b9756920d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_1e54ed26a2b9070b283f9c362c32634d25e6ec97c7a3bda28368c2b294f37a15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e54ed26a2b9070b283f9c362c32634d25e6ec97c7a3bda28368c2b294f37a15->enter($__internal_1e54ed26a2b9070b283f9c362c32634d25e6ec97c7a3bda28368c2b294f37a15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_2d2d6e4634df1ca2db572f1e2903bbb39b069f2a6c3feb905656b60b9756920d->leave($__internal_2d2d6e4634df1ca2db572f1e2903bbb39b069f2a6c3feb905656b60b9756920d_prof);

        
        $__internal_1e54ed26a2b9070b283f9c362c32634d25e6ec97c7a3bda28368c2b294f37a15->leave($__internal_1e54ed26a2b9070b283f9c362c32634d25e6ec97c7a3bda28368c2b294f37a15_prof);

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
