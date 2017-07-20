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
        $__internal_7f69d09fa793a1154a6b5c0797211db63b6c56534b43149a253bccb306de07a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f69d09fa793a1154a6b5c0797211db63b6c56534b43149a253bccb306de07a1->enter($__internal_7f69d09fa793a1154a6b5c0797211db63b6c56534b43149a253bccb306de07a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_8087677a82f9ff30bc49961c4409dd87b4271fbc98bbc30e3dbeb2d5b2276478 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8087677a82f9ff30bc49961c4409dd87b4271fbc98bbc30e3dbeb2d5b2276478->enter($__internal_8087677a82f9ff30bc49961c4409dd87b4271fbc98bbc30e3dbeb2d5b2276478_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_7f69d09fa793a1154a6b5c0797211db63b6c56534b43149a253bccb306de07a1->leave($__internal_7f69d09fa793a1154a6b5c0797211db63b6c56534b43149a253bccb306de07a1_prof);

        
        $__internal_8087677a82f9ff30bc49961c4409dd87b4271fbc98bbc30e3dbeb2d5b2276478->leave($__internal_8087677a82f9ff30bc49961c4409dd87b4271fbc98bbc30e3dbeb2d5b2276478_prof);

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
