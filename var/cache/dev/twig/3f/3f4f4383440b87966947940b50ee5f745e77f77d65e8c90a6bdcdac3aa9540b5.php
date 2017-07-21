<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_989c83de36f18a95870d39b60b5baabcebeef6da491026b3db53117dad33b771 extends Twig_Template
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
        $__internal_4c8813b666046b9c146ab08f2b2cbebae4f9e1287439f174d52b5b442585382d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c8813b666046b9c146ab08f2b2cbebae4f9e1287439f174d52b5b442585382d->enter($__internal_4c8813b666046b9c146ab08f2b2cbebae4f9e1287439f174d52b5b442585382d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_7d43ab15d439272b33e720f436b5d65097f816b49790f34ae99ade361e56a3d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d43ab15d439272b33e720f436b5d65097f816b49790f34ae99ade361e56a3d6->enter($__internal_7d43ab15d439272b33e720f436b5d65097f816b49790f34ae99ade361e56a3d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_4c8813b666046b9c146ab08f2b2cbebae4f9e1287439f174d52b5b442585382d->leave($__internal_4c8813b666046b9c146ab08f2b2cbebae4f9e1287439f174d52b5b442585382d_prof);

        
        $__internal_7d43ab15d439272b33e720f436b5d65097f816b49790f34ae99ade361e56a3d6->leave($__internal_7d43ab15d439272b33e720f436b5d65097f816b49790f34ae99ade361e56a3d6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/Users/mac/SymfonyProjects/Hint/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
