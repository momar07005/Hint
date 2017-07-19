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
        $__internal_13122d0a7dd22c6011d92d513e87da7acb66d9d5f25333896a0e5b104bb9e4e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13122d0a7dd22c6011d92d513e87da7acb66d9d5f25333896a0e5b104bb9e4e7->enter($__internal_13122d0a7dd22c6011d92d513e87da7acb66d9d5f25333896a0e5b104bb9e4e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_7fd9aa95b8b67d91027334c05fe674c8b732639b17b8754d1c4c033c674de02f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fd9aa95b8b67d91027334c05fe674c8b732639b17b8754d1c4c033c674de02f->enter($__internal_7fd9aa95b8b67d91027334c05fe674c8b732639b17b8754d1c4c033c674de02f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_13122d0a7dd22c6011d92d513e87da7acb66d9d5f25333896a0e5b104bb9e4e7->leave($__internal_13122d0a7dd22c6011d92d513e87da7acb66d9d5f25333896a0e5b104bb9e4e7_prof);

        
        $__internal_7fd9aa95b8b67d91027334c05fe674c8b732639b17b8754d1c4c033c674de02f->leave($__internal_7fd9aa95b8b67d91027334c05fe674c8b732639b17b8754d1c4c033c674de02f_prof);

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
