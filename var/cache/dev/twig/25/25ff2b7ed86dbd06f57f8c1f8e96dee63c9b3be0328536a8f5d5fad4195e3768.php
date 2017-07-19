<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_38f96c15819664d74a4744228d879f46ecbf98faafafebe0d96e495179d9756d extends Twig_Template
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
        $__internal_7e42aa59e8b4ec605d0cee015df11ab5af3160dc6bf04323a90f6d7379ef6669 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e42aa59e8b4ec605d0cee015df11ab5af3160dc6bf04323a90f6d7379ef6669->enter($__internal_7e42aa59e8b4ec605d0cee015df11ab5af3160dc6bf04323a90f6d7379ef6669_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_cb4278b58f9088927763938c82a8a256bde800c9fa41a610e9160d501bcb5442 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb4278b58f9088927763938c82a8a256bde800c9fa41a610e9160d501bcb5442->enter($__internal_cb4278b58f9088927763938c82a8a256bde800c9fa41a610e9160d501bcb5442_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_7e42aa59e8b4ec605d0cee015df11ab5af3160dc6bf04323a90f6d7379ef6669->leave($__internal_7e42aa59e8b4ec605d0cee015df11ab5af3160dc6bf04323a90f6d7379ef6669_prof);

        
        $__internal_cb4278b58f9088927763938c82a8a256bde800c9fa41a610e9160d501bcb5442->leave($__internal_cb4278b58f9088927763938c82a8a256bde800c9fa41a610e9160d501bcb5442_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/Users/mac/SymfonyProjects/Hint/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
