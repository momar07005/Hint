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
        $__internal_2da971a799cfca5e12647df6c8df113210ceb4b62a98f691a10cbe439e49e4ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2da971a799cfca5e12647df6c8df113210ceb4b62a98f691a10cbe439e49e4ff->enter($__internal_2da971a799cfca5e12647df6c8df113210ceb4b62a98f691a10cbe439e49e4ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_019fcc77cbed92b42df754416514246ecd0418db4a76dd4563884da73d11305d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_019fcc77cbed92b42df754416514246ecd0418db4a76dd4563884da73d11305d->enter($__internal_019fcc77cbed92b42df754416514246ecd0418db4a76dd4563884da73d11305d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_2da971a799cfca5e12647df6c8df113210ceb4b62a98f691a10cbe439e49e4ff->leave($__internal_2da971a799cfca5e12647df6c8df113210ceb4b62a98f691a10cbe439e49e4ff_prof);

        
        $__internal_019fcc77cbed92b42df754416514246ecd0418db4a76dd4563884da73d11305d->leave($__internal_019fcc77cbed92b42df754416514246ecd0418db4a76dd4563884da73d11305d_prof);

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
