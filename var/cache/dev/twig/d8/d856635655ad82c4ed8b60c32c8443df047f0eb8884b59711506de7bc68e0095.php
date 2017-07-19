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
        $__internal_fc9a360a83ff43b97742f35abdcac24f4f66bb6ba06e17cd2619c8783f2f61f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc9a360a83ff43b97742f35abdcac24f4f66bb6ba06e17cd2619c8783f2f61f5->enter($__internal_fc9a360a83ff43b97742f35abdcac24f4f66bb6ba06e17cd2619c8783f2f61f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_1f95fb2cc5292464865cf53cf6dcfe27707ad89290c345c8291d95db437d3a1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f95fb2cc5292464865cf53cf6dcfe27707ad89290c345c8291d95db437d3a1d->enter($__internal_1f95fb2cc5292464865cf53cf6dcfe27707ad89290c345c8291d95db437d3a1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_fc9a360a83ff43b97742f35abdcac24f4f66bb6ba06e17cd2619c8783f2f61f5->leave($__internal_fc9a360a83ff43b97742f35abdcac24f4f66bb6ba06e17cd2619c8783f2f61f5_prof);

        
        $__internal_1f95fb2cc5292464865cf53cf6dcfe27707ad89290c345c8291d95db437d3a1d->leave($__internal_1f95fb2cc5292464865cf53cf6dcfe27707ad89290c345c8291d95db437d3a1d_prof);

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
