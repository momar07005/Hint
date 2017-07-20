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
        $__internal_45197720df204b6f0de641824b07bb4b36b06489491af0ab015b7a7f558560e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45197720df204b6f0de641824b07bb4b36b06489491af0ab015b7a7f558560e0->enter($__internal_45197720df204b6f0de641824b07bb4b36b06489491af0ab015b7a7f558560e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_e37b1d233934b2a4702832ac0d7c6d8f8cf0e55a7cc7c384d8980a422e678116 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e37b1d233934b2a4702832ac0d7c6d8f8cf0e55a7cc7c384d8980a422e678116->enter($__internal_e37b1d233934b2a4702832ac0d7c6d8f8cf0e55a7cc7c384d8980a422e678116_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_45197720df204b6f0de641824b07bb4b36b06489491af0ab015b7a7f558560e0->leave($__internal_45197720df204b6f0de641824b07bb4b36b06489491af0ab015b7a7f558560e0_prof);

        
        $__internal_e37b1d233934b2a4702832ac0d7c6d8f8cf0e55a7cc7c384d8980a422e678116->leave($__internal_e37b1d233934b2a4702832ac0d7c6d8f8cf0e55a7cc7c384d8980a422e678116_prof);

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
