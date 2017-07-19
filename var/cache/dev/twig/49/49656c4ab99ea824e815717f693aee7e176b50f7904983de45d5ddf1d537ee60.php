<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_613b0d0bf0b04bfa2d6cf8114d39dbb606328d22feb5121c8b8c418608140930 extends Twig_Template
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
        $__internal_4b1a4312f874feec4e0a31cea25f7c83f56a2ccb92acd694d51d05eefb51a888 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b1a4312f874feec4e0a31cea25f7c83f56a2ccb92acd694d51d05eefb51a888->enter($__internal_4b1a4312f874feec4e0a31cea25f7c83f56a2ccb92acd694d51d05eefb51a888_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_44158fc2503ebd76b5d065666930e0ed57b7c7db76f78ab12f7f4769eb2b2888 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44158fc2503ebd76b5d065666930e0ed57b7c7db76f78ab12f7f4769eb2b2888->enter($__internal_44158fc2503ebd76b5d065666930e0ed57b7c7db76f78ab12f7f4769eb2b2888_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_4b1a4312f874feec4e0a31cea25f7c83f56a2ccb92acd694d51d05eefb51a888->leave($__internal_4b1a4312f874feec4e0a31cea25f7c83f56a2ccb92acd694d51d05eefb51a888_prof);

        
        $__internal_44158fc2503ebd76b5d065666930e0ed57b7c7db76f78ab12f7f4769eb2b2888->leave($__internal_44158fc2503ebd76b5d065666930e0ed57b7c7db76f78ab12f7f4769eb2b2888_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/Users/mac/SymfonyProjects/Hint/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
