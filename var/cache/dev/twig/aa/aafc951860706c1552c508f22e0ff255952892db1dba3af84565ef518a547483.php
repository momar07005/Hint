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
        $__internal_efbb77bc09082fefebe354fac200f556be44fa90f92081d01e641f836d9481fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efbb77bc09082fefebe354fac200f556be44fa90f92081d01e641f836d9481fb->enter($__internal_efbb77bc09082fefebe354fac200f556be44fa90f92081d01e641f836d9481fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_6613c83749b5b7f114dfe33e94ab1adc8a0cc08263e9c2043984ade271acd20d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6613c83749b5b7f114dfe33e94ab1adc8a0cc08263e9c2043984ade271acd20d->enter($__internal_6613c83749b5b7f114dfe33e94ab1adc8a0cc08263e9c2043984ade271acd20d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_efbb77bc09082fefebe354fac200f556be44fa90f92081d01e641f836d9481fb->leave($__internal_efbb77bc09082fefebe354fac200f556be44fa90f92081d01e641f836d9481fb_prof);

        
        $__internal_6613c83749b5b7f114dfe33e94ab1adc8a0cc08263e9c2043984ade271acd20d->leave($__internal_6613c83749b5b7f114dfe33e94ab1adc8a0cc08263e9c2043984ade271acd20d_prof);

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
