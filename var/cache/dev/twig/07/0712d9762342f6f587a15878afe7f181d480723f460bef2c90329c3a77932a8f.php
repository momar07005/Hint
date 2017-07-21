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
        $__internal_f3af0f98be73fe23c99d2c22851f4d467c203999b003e77d4212253b74e1ddc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3af0f98be73fe23c99d2c22851f4d467c203999b003e77d4212253b74e1ddc7->enter($__internal_f3af0f98be73fe23c99d2c22851f4d467c203999b003e77d4212253b74e1ddc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_90a8b37830b632a4e5d587977130a44d78930bb1e21b9c9b311e291cb58ee776 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90a8b37830b632a4e5d587977130a44d78930bb1e21b9c9b311e291cb58ee776->enter($__internal_90a8b37830b632a4e5d587977130a44d78930bb1e21b9c9b311e291cb58ee776_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_f3af0f98be73fe23c99d2c22851f4d467c203999b003e77d4212253b74e1ddc7->leave($__internal_f3af0f98be73fe23c99d2c22851f4d467c203999b003e77d4212253b74e1ddc7_prof);

        
        $__internal_90a8b37830b632a4e5d587977130a44d78930bb1e21b9c9b311e291cb58ee776->leave($__internal_90a8b37830b632a4e5d587977130a44d78930bb1e21b9c9b311e291cb58ee776_prof);

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
