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
        $__internal_99a1ededcb67d44774cca3048866df038cef145162a0a0a12b3ce73b7ce4efcf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99a1ededcb67d44774cca3048866df038cef145162a0a0a12b3ce73b7ce4efcf->enter($__internal_99a1ededcb67d44774cca3048866df038cef145162a0a0a12b3ce73b7ce4efcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_3953b2fae6901887bf86c1f72092b7432dc52bb95d18e3be5f6b9d1f302f1a1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3953b2fae6901887bf86c1f72092b7432dc52bb95d18e3be5f6b9d1f302f1a1e->enter($__internal_3953b2fae6901887bf86c1f72092b7432dc52bb95d18e3be5f6b9d1f302f1a1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_99a1ededcb67d44774cca3048866df038cef145162a0a0a12b3ce73b7ce4efcf->leave($__internal_99a1ededcb67d44774cca3048866df038cef145162a0a0a12b3ce73b7ce4efcf_prof);

        
        $__internal_3953b2fae6901887bf86c1f72092b7432dc52bb95d18e3be5f6b9d1f302f1a1e->leave($__internal_3953b2fae6901887bf86c1f72092b7432dc52bb95d18e3be5f6b9d1f302f1a1e_prof);

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
