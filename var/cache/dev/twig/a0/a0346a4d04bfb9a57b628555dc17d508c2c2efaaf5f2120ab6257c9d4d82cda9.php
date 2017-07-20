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
        $__internal_3226bcdb1271a1f2adcf3df550d3caf5ecb97b2df3ed4984ff1029988d24ab65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3226bcdb1271a1f2adcf3df550d3caf5ecb97b2df3ed4984ff1029988d24ab65->enter($__internal_3226bcdb1271a1f2adcf3df550d3caf5ecb97b2df3ed4984ff1029988d24ab65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_aef85dcf5e75b76de4cee21c28bcc2c1ec0cade6483f6a80b754a4edd1917420 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aef85dcf5e75b76de4cee21c28bcc2c1ec0cade6483f6a80b754a4edd1917420->enter($__internal_aef85dcf5e75b76de4cee21c28bcc2c1ec0cade6483f6a80b754a4edd1917420_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_3226bcdb1271a1f2adcf3df550d3caf5ecb97b2df3ed4984ff1029988d24ab65->leave($__internal_3226bcdb1271a1f2adcf3df550d3caf5ecb97b2df3ed4984ff1029988d24ab65_prof);

        
        $__internal_aef85dcf5e75b76de4cee21c28bcc2c1ec0cade6483f6a80b754a4edd1917420->leave($__internal_aef85dcf5e75b76de4cee21c28bcc2c1ec0cade6483f6a80b754a4edd1917420_prof);

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
