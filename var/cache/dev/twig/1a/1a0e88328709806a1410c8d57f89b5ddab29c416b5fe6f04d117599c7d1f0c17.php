<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_82c5777a783fe5d11db384351990f0d8a28981e1830bfa370e13b292f25eacf0 extends Twig_Template
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
        $__internal_0cb5b57781d4b63f067ab7c051f2449a43dc9f22466b91f8dddc0a6b4504a62d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cb5b57781d4b63f067ab7c051f2449a43dc9f22466b91f8dddc0a6b4504a62d->enter($__internal_0cb5b57781d4b63f067ab7c051f2449a43dc9f22466b91f8dddc0a6b4504a62d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_8e0af84f017045c02fa5ad8d1343721b76b3d1349b84610bbf17a2580a66584d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e0af84f017045c02fa5ad8d1343721b76b3d1349b84610bbf17a2580a66584d->enter($__internal_8e0af84f017045c02fa5ad8d1343721b76b3d1349b84610bbf17a2580a66584d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_0cb5b57781d4b63f067ab7c051f2449a43dc9f22466b91f8dddc0a6b4504a62d->leave($__internal_0cb5b57781d4b63f067ab7c051f2449a43dc9f22466b91f8dddc0a6b4504a62d_prof);

        
        $__internal_8e0af84f017045c02fa5ad8d1343721b76b3d1349b84610bbf17a2580a66584d->leave($__internal_8e0af84f017045c02fa5ad8d1343721b76b3d1349b84610bbf17a2580a66584d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/Users/mac/SymfonyProjects/Hint/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
