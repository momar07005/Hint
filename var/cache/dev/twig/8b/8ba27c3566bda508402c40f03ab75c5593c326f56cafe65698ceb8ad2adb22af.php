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
        $__internal_399682c94858877cd0868c8f8c5276c53cc04dd356932220771010f7933a57ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_399682c94858877cd0868c8f8c5276c53cc04dd356932220771010f7933a57ae->enter($__internal_399682c94858877cd0868c8f8c5276c53cc04dd356932220771010f7933a57ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_ad81e71c5ed2caa2ed76b42f513349ca88a24ed4a6c6324b5b995996eeb6c4c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad81e71c5ed2caa2ed76b42f513349ca88a24ed4a6c6324b5b995996eeb6c4c5->enter($__internal_ad81e71c5ed2caa2ed76b42f513349ca88a24ed4a6c6324b5b995996eeb6c4c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_399682c94858877cd0868c8f8c5276c53cc04dd356932220771010f7933a57ae->leave($__internal_399682c94858877cd0868c8f8c5276c53cc04dd356932220771010f7933a57ae_prof);

        
        $__internal_ad81e71c5ed2caa2ed76b42f513349ca88a24ed4a6c6324b5b995996eeb6c4c5->leave($__internal_ad81e71c5ed2caa2ed76b42f513349ca88a24ed4a6c6324b5b995996eeb6c4c5_prof);

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
