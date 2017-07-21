<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_37b40d239d7a33435bce260110da62e80cfaca36ee43a2478ac7c308dfbfd72d extends Twig_Template
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
        $__internal_ccd71642259a26c3a030367880c6c76d32e9d899db6a9ea7c6281a683d9ee9fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccd71642259a26c3a030367880c6c76d32e9d899db6a9ea7c6281a683d9ee9fa->enter($__internal_ccd71642259a26c3a030367880c6c76d32e9d899db6a9ea7c6281a683d9ee9fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_ac77e16db16f4672d82fbfd3ab296c33b8731822dfdbf34ec3aaa67611b6b70f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac77e16db16f4672d82fbfd3ab296c33b8731822dfdbf34ec3aaa67611b6b70f->enter($__internal_ac77e16db16f4672d82fbfd3ab296c33b8731822dfdbf34ec3aaa67611b6b70f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_ccd71642259a26c3a030367880c6c76d32e9d899db6a9ea7c6281a683d9ee9fa->leave($__internal_ccd71642259a26c3a030367880c6c76d32e9d899db6a9ea7c6281a683d9ee9fa_prof);

        
        $__internal_ac77e16db16f4672d82fbfd3ab296c33b8731822dfdbf34ec3aaa67611b6b70f->leave($__internal_ac77e16db16f4672d82fbfd3ab296c33b8731822dfdbf34ec3aaa67611b6b70f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/Users/mac/SymfonyProjects/Hint/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
