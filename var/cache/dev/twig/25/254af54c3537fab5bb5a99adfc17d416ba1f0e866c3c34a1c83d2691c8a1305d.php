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
        $__internal_fd07cf2ba0e92d31bb911f1362e5e894708c029af3b1eed9befabdf82e54517f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd07cf2ba0e92d31bb911f1362e5e894708c029af3b1eed9befabdf82e54517f->enter($__internal_fd07cf2ba0e92d31bb911f1362e5e894708c029af3b1eed9befabdf82e54517f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_29e5811274a54b58d5d5f85a3b62bb7b29092dc15cced095118cd0266f173ad9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29e5811274a54b58d5d5f85a3b62bb7b29092dc15cced095118cd0266f173ad9->enter($__internal_29e5811274a54b58d5d5f85a3b62bb7b29092dc15cced095118cd0266f173ad9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

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
        
        $__internal_fd07cf2ba0e92d31bb911f1362e5e894708c029af3b1eed9befabdf82e54517f->leave($__internal_fd07cf2ba0e92d31bb911f1362e5e894708c029af3b1eed9befabdf82e54517f_prof);

        
        $__internal_29e5811274a54b58d5d5f85a3b62bb7b29092dc15cced095118cd0266f173ad9->leave($__internal_29e5811274a54b58d5d5f85a3b62bb7b29092dc15cced095118cd0266f173ad9_prof);

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
