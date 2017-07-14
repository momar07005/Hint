<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_093e529b77c6f2e374a4a6a3cbaf306a544752c2845fc4aacced12728cc81333 extends Twig_Template
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
        $__internal_71234ac3ae9e4d5017992d6ffa5c0d74f1f43c9c9466274f1777ddd96e9d1d3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71234ac3ae9e4d5017992d6ffa5c0d74f1f43c9c9466274f1777ddd96e9d1d3b->enter($__internal_71234ac3ae9e4d5017992d6ffa5c0d74f1f43c9c9466274f1777ddd96e9d1d3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_7fa88e212cc43d24be4e2def6276502726b7894cdcd81cd2f25fc069c49d0914 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fa88e212cc43d24be4e2def6276502726b7894cdcd81cd2f25fc069c49d0914->enter($__internal_7fa88e212cc43d24be4e2def6276502726b7894cdcd81cd2f25fc069c49d0914_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_71234ac3ae9e4d5017992d6ffa5c0d74f1f43c9c9466274f1777ddd96e9d1d3b->leave($__internal_71234ac3ae9e4d5017992d6ffa5c0d74f1f43c9c9466274f1777ddd96e9d1d3b_prof);

        
        $__internal_7fa88e212cc43d24be4e2def6276502726b7894cdcd81cd2f25fc069c49d0914->leave($__internal_7fa88e212cc43d24be4e2def6276502726b7894cdcd81cd2f25fc069c49d0914_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/Users/mac/SymfonyProjects/Hint/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
