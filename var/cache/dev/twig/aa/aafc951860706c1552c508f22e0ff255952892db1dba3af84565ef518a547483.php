<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_183ccc2007416f9fa3f41ee49e356a765125a0347fe719845f04ae7085a3c461 extends Twig_Template
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
        $__internal_9a18fa1c169d1bfdd52bc0a93e3971099f1506bce46e8637dde8f6880ac00dbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a18fa1c169d1bfdd52bc0a93e3971099f1506bce46e8637dde8f6880ac00dbc->enter($__internal_9a18fa1c169d1bfdd52bc0a93e3971099f1506bce46e8637dde8f6880ac00dbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_341d66763b2372c750ea136c2ca4b4712bb6e776dd27087a0e81ee6b309b42eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_341d66763b2372c750ea136c2ca4b4712bb6e776dd27087a0e81ee6b309b42eb->enter($__internal_341d66763b2372c750ea136c2ca4b4712bb6e776dd27087a0e81ee6b309b42eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_9a18fa1c169d1bfdd52bc0a93e3971099f1506bce46e8637dde8f6880ac00dbc->leave($__internal_9a18fa1c169d1bfdd52bc0a93e3971099f1506bce46e8637dde8f6880ac00dbc_prof);

        
        $__internal_341d66763b2372c750ea136c2ca4b4712bb6e776dd27087a0e81ee6b309b42eb->leave($__internal_341d66763b2372c750ea136c2ca4b4712bb6e776dd27087a0e81ee6b309b42eb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/Users/mac/SymfonyProjects/Hint/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
