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
        $__internal_0cd2776447744a6c4ab4d624404ccd52a3b1b1506f7c77df296fd9b0d3c96af5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cd2776447744a6c4ab4d624404ccd52a3b1b1506f7c77df296fd9b0d3c96af5->enter($__internal_0cd2776447744a6c4ab4d624404ccd52a3b1b1506f7c77df296fd9b0d3c96af5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_f948c4c192a5a89f78abdb4d22b540b8fdab84fb4a6c15fd17c5dc8bcad13648 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f948c4c192a5a89f78abdb4d22b540b8fdab84fb4a6c15fd17c5dc8bcad13648->enter($__internal_f948c4c192a5a89f78abdb4d22b540b8fdab84fb4a6c15fd17c5dc8bcad13648_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_0cd2776447744a6c4ab4d624404ccd52a3b1b1506f7c77df296fd9b0d3c96af5->leave($__internal_0cd2776447744a6c4ab4d624404ccd52a3b1b1506f7c77df296fd9b0d3c96af5_prof);

        
        $__internal_f948c4c192a5a89f78abdb4d22b540b8fdab84fb4a6c15fd17c5dc8bcad13648->leave($__internal_f948c4c192a5a89f78abdb4d22b540b8fdab84fb4a6c15fd17c5dc8bcad13648_prof);

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
