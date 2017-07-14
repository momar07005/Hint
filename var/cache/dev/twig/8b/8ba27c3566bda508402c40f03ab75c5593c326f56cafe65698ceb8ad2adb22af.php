<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_2fae884b2a09bc10ced154ad184e00eaff991b46319cbaea3f00941d62d4e0b9 extends Twig_Template
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
        $__internal_8e5692c46bdce05ff61f594ebb40698d23a9cec5b9917bf7115d61e808d9ea67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e5692c46bdce05ff61f594ebb40698d23a9cec5b9917bf7115d61e808d9ea67->enter($__internal_8e5692c46bdce05ff61f594ebb40698d23a9cec5b9917bf7115d61e808d9ea67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_418ece6f48dd2660edebbe3292013bc1f56bd438cbe075e4fe98ebfc584ed0e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_418ece6f48dd2660edebbe3292013bc1f56bd438cbe075e4fe98ebfc584ed0e2->enter($__internal_418ece6f48dd2660edebbe3292013bc1f56bd438cbe075e4fe98ebfc584ed0e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_8e5692c46bdce05ff61f594ebb40698d23a9cec5b9917bf7115d61e808d9ea67->leave($__internal_8e5692c46bdce05ff61f594ebb40698d23a9cec5b9917bf7115d61e808d9ea67_prof);

        
        $__internal_418ece6f48dd2660edebbe3292013bc1f56bd438cbe075e4fe98ebfc584ed0e2->leave($__internal_418ece6f48dd2660edebbe3292013bc1f56bd438cbe075e4fe98ebfc584ed0e2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/Users/mac/SymfonyProjects/Hint/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
