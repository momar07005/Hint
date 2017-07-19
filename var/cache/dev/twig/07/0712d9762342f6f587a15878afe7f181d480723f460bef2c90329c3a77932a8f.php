<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_6ccc728cb535ce94575e7ba8c28a82e16384038ba3cb80a06ee2e6fc6fab5137 extends Twig_Template
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
        $__internal_acc40150591731d448953b851d62130ca7406bc3d8e561f1b0e2f3178bc41ca2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acc40150591731d448953b851d62130ca7406bc3d8e561f1b0e2f3178bc41ca2->enter($__internal_acc40150591731d448953b851d62130ca7406bc3d8e561f1b0e2f3178bc41ca2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_89df8658f57cfeb40bfe7df0145cedd4c02893e259d29c5aac9549368f88c493 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89df8658f57cfeb40bfe7df0145cedd4c02893e259d29c5aac9549368f88c493->enter($__internal_89df8658f57cfeb40bfe7df0145cedd4c02893e259d29c5aac9549368f88c493_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_acc40150591731d448953b851d62130ca7406bc3d8e561f1b0e2f3178bc41ca2->leave($__internal_acc40150591731d448953b851d62130ca7406bc3d8e561f1b0e2f3178bc41ca2_prof);

        
        $__internal_89df8658f57cfeb40bfe7df0145cedd4c02893e259d29c5aac9549368f88c493->leave($__internal_89df8658f57cfeb40bfe7df0145cedd4c02893e259d29c5aac9549368f88c493_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/Users/mac/SymfonyProjects/Hint/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
