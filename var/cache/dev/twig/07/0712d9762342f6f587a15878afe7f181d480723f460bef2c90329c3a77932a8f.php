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
        $__internal_7ddb23b41ed033630050be2ef7fd12bcc2c2222f16a410e756effc01e298199a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ddb23b41ed033630050be2ef7fd12bcc2c2222f16a410e756effc01e298199a->enter($__internal_7ddb23b41ed033630050be2ef7fd12bcc2c2222f16a410e756effc01e298199a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_22357943a7a5ce825e111dba89ee261573ca6cb75810c575d610d017def5bea3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22357943a7a5ce825e111dba89ee261573ca6cb75810c575d610d017def5bea3->enter($__internal_22357943a7a5ce825e111dba89ee261573ca6cb75810c575d610d017def5bea3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_7ddb23b41ed033630050be2ef7fd12bcc2c2222f16a410e756effc01e298199a->leave($__internal_7ddb23b41ed033630050be2ef7fd12bcc2c2222f16a410e756effc01e298199a_prof);

        
        $__internal_22357943a7a5ce825e111dba89ee261573ca6cb75810c575d610d017def5bea3->leave($__internal_22357943a7a5ce825e111dba89ee261573ca6cb75810c575d610d017def5bea3_prof);

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
