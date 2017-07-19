<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_91fa89a7c9d7b47aed4e927f36bae3d0d60ca6d398eae5ed96ae75e220b143a5 extends Twig_Template
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
        $__internal_d766315af154180758d140f453fbeb3118c77a92c2cbfac2210d903e61f8a251 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d766315af154180758d140f453fbeb3118c77a92c2cbfac2210d903e61f8a251->enter($__internal_d766315af154180758d140f453fbeb3118c77a92c2cbfac2210d903e61f8a251_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_59d166d83c771669b0ea5b17ae854452c54fa13b6e80fa28fc0521537f6d885a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59d166d83c771669b0ea5b17ae854452c54fa13b6e80fa28fc0521537f6d885a->enter($__internal_59d166d83c771669b0ea5b17ae854452c54fa13b6e80fa28fc0521537f6d885a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_d766315af154180758d140f453fbeb3118c77a92c2cbfac2210d903e61f8a251->leave($__internal_d766315af154180758d140f453fbeb3118c77a92c2cbfac2210d903e61f8a251_prof);

        
        $__internal_59d166d83c771669b0ea5b17ae854452c54fa13b6e80fa28fc0521537f6d885a->leave($__internal_59d166d83c771669b0ea5b17ae854452c54fa13b6e80fa28fc0521537f6d885a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/Users/mac/SymfonyProjects/Hint/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
