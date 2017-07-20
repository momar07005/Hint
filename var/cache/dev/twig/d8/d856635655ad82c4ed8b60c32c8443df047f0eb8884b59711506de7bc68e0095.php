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
        $__internal_41c3ce90012c975e1ac16de465618a361199554208169a0dd70973debcbfcdfd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41c3ce90012c975e1ac16de465618a361199554208169a0dd70973debcbfcdfd->enter($__internal_41c3ce90012c975e1ac16de465618a361199554208169a0dd70973debcbfcdfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_5b36a67d8263b58834a155358a54d97e485d139ff3d3c4de5313162d38028df1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b36a67d8263b58834a155358a54d97e485d139ff3d3c4de5313162d38028df1->enter($__internal_5b36a67d8263b58834a155358a54d97e485d139ff3d3c4de5313162d38028df1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_41c3ce90012c975e1ac16de465618a361199554208169a0dd70973debcbfcdfd->leave($__internal_41c3ce90012c975e1ac16de465618a361199554208169a0dd70973debcbfcdfd_prof);

        
        $__internal_5b36a67d8263b58834a155358a54d97e485d139ff3d3c4de5313162d38028df1->leave($__internal_5b36a67d8263b58834a155358a54d97e485d139ff3d3c4de5313162d38028df1_prof);

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
