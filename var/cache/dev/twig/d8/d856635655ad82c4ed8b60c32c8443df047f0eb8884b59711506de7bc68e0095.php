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
        $__internal_9fc58c125568e4f391bd2224300d1d6695393a5168f2da4d09039592a055a0f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fc58c125568e4f391bd2224300d1d6695393a5168f2da4d09039592a055a0f6->enter($__internal_9fc58c125568e4f391bd2224300d1d6695393a5168f2da4d09039592a055a0f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_681f499e21ac719cfc9f762bc1c8e42185a3fc0dd6fd6443ad6ebe2063994be0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_681f499e21ac719cfc9f762bc1c8e42185a3fc0dd6fd6443ad6ebe2063994be0->enter($__internal_681f499e21ac719cfc9f762bc1c8e42185a3fc0dd6fd6443ad6ebe2063994be0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_9fc58c125568e4f391bd2224300d1d6695393a5168f2da4d09039592a055a0f6->leave($__internal_9fc58c125568e4f391bd2224300d1d6695393a5168f2da4d09039592a055a0f6_prof);

        
        $__internal_681f499e21ac719cfc9f762bc1c8e42185a3fc0dd6fd6443ad6ebe2063994be0->leave($__internal_681f499e21ac719cfc9f762bc1c8e42185a3fc0dd6fd6443ad6ebe2063994be0_prof);

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
