<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_21e77ce22ea0f6b31f2a4d227359a57b5030b34fbcb9b678758772c2717ca544 extends Twig_Template
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
        $__internal_290c0faf1d89d9e8ed05f083be49f71d2e3bc5ff2d5e66fe01c2214ba19d4734 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_290c0faf1d89d9e8ed05f083be49f71d2e3bc5ff2d5e66fe01c2214ba19d4734->enter($__internal_290c0faf1d89d9e8ed05f083be49f71d2e3bc5ff2d5e66fe01c2214ba19d4734_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_fa5f0949843ba7f960b1ee53a64bb3403534d4854eb2d1b5a7f2448f6e06269f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa5f0949843ba7f960b1ee53a64bb3403534d4854eb2d1b5a7f2448f6e06269f->enter($__internal_fa5f0949843ba7f960b1ee53a64bb3403534d4854eb2d1b5a7f2448f6e06269f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_290c0faf1d89d9e8ed05f083be49f71d2e3bc5ff2d5e66fe01c2214ba19d4734->leave($__internal_290c0faf1d89d9e8ed05f083be49f71d2e3bc5ff2d5e66fe01c2214ba19d4734_prof);

        
        $__internal_fa5f0949843ba7f960b1ee53a64bb3403534d4854eb2d1b5a7f2448f6e06269f->leave($__internal_fa5f0949843ba7f960b1ee53a64bb3403534d4854eb2d1b5a7f2448f6e06269f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/Users/mac/SymfonyProjects/Hint/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
