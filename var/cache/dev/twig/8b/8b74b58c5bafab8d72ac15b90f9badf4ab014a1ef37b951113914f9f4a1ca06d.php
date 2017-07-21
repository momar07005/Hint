<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_faf5013d6fd2a80c9730cc313a5df214cda640b3e4b2d2d97980ae0d750849dd extends Twig_Template
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
        $__internal_1c7495eeb1135bf6635ee33c23ef230b4ba96da429890b7b153a2258bcea484b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c7495eeb1135bf6635ee33c23ef230b4ba96da429890b7b153a2258bcea484b->enter($__internal_1c7495eeb1135bf6635ee33c23ef230b4ba96da429890b7b153a2258bcea484b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_9c5b0e28f8c3a1bb6fb5b19285b21f8e18ad6fc3fa1095fbbf0a3fd00358a68f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c5b0e28f8c3a1bb6fb5b19285b21f8e18ad6fc3fa1095fbbf0a3fd00358a68f->enter($__internal_9c5b0e28f8c3a1bb6fb5b19285b21f8e18ad6fc3fa1095fbbf0a3fd00358a68f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_1c7495eeb1135bf6635ee33c23ef230b4ba96da429890b7b153a2258bcea484b->leave($__internal_1c7495eeb1135bf6635ee33c23ef230b4ba96da429890b7b153a2258bcea484b_prof);

        
        $__internal_9c5b0e28f8c3a1bb6fb5b19285b21f8e18ad6fc3fa1095fbbf0a3fd00358a68f->leave($__internal_9c5b0e28f8c3a1bb6fb5b19285b21f8e18ad6fc3fa1095fbbf0a3fd00358a68f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/Users/mac/SymfonyProjects/Hint/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
