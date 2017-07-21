<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_d89e7ce8a8530fe8e658ab55866620c780e83519f7c63d2d088d9469626e75ff extends Twig_Template
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
        $__internal_cd72f74d5a425b3e23911c1f1f6910f97dc92d183adab4a7782f64b1309fd2cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd72f74d5a425b3e23911c1f1f6910f97dc92d183adab4a7782f64b1309fd2cf->enter($__internal_cd72f74d5a425b3e23911c1f1f6910f97dc92d183adab4a7782f64b1309fd2cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_bdf3da4f963bd6971753ef32e11f8841b8af39fe1d71ec24a68e0cd16fb4c60e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdf3da4f963bd6971753ef32e11f8841b8af39fe1d71ec24a68e0cd16fb4c60e->enter($__internal_bdf3da4f963bd6971753ef32e11f8841b8af39fe1d71ec24a68e0cd16fb4c60e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_cd72f74d5a425b3e23911c1f1f6910f97dc92d183adab4a7782f64b1309fd2cf->leave($__internal_cd72f74d5a425b3e23911c1f1f6910f97dc92d183adab4a7782f64b1309fd2cf_prof);

        
        $__internal_bdf3da4f963bd6971753ef32e11f8841b8af39fe1d71ec24a68e0cd16fb4c60e->leave($__internal_bdf3da4f963bd6971753ef32e11f8841b8af39fe1d71ec24a68e0cd16fb4c60e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/Users/mac/SymfonyProjects/Hint/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
