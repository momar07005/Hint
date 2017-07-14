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
        $__internal_b20364ac59b8cafe6d223dd50e34855ea7a584702b4fcebb57f7089c82c9b9af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b20364ac59b8cafe6d223dd50e34855ea7a584702b4fcebb57f7089c82c9b9af->enter($__internal_b20364ac59b8cafe6d223dd50e34855ea7a584702b4fcebb57f7089c82c9b9af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_9dc379c281bf068e9a868da1bac856320418fa376a02009b65c0b33a210fface = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dc379c281bf068e9a868da1bac856320418fa376a02009b65c0b33a210fface->enter($__internal_9dc379c281bf068e9a868da1bac856320418fa376a02009b65c0b33a210fface_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_b20364ac59b8cafe6d223dd50e34855ea7a584702b4fcebb57f7089c82c9b9af->leave($__internal_b20364ac59b8cafe6d223dd50e34855ea7a584702b4fcebb57f7089c82c9b9af_prof);

        
        $__internal_9dc379c281bf068e9a868da1bac856320418fa376a02009b65c0b33a210fface->leave($__internal_9dc379c281bf068e9a868da1bac856320418fa376a02009b65c0b33a210fface_prof);

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
