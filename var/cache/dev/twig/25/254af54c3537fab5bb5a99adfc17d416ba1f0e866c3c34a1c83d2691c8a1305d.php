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
        $__internal_cfdde9ab14089d796380896decc0640d12076565d824ca900644ba1dae6f7d10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfdde9ab14089d796380896decc0640d12076565d824ca900644ba1dae6f7d10->enter($__internal_cfdde9ab14089d796380896decc0640d12076565d824ca900644ba1dae6f7d10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_65b859339c5db0281e192649f9387239df8835168432affb0b60a6bfdc9aaf82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65b859339c5db0281e192649f9387239df8835168432affb0b60a6bfdc9aaf82->enter($__internal_65b859339c5db0281e192649f9387239df8835168432affb0b60a6bfdc9aaf82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

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
        
        $__internal_cfdde9ab14089d796380896decc0640d12076565d824ca900644ba1dae6f7d10->leave($__internal_cfdde9ab14089d796380896decc0640d12076565d824ca900644ba1dae6f7d10_prof);

        
        $__internal_65b859339c5db0281e192649f9387239df8835168432affb0b60a6bfdc9aaf82->leave($__internal_65b859339c5db0281e192649f9387239df8835168432affb0b60a6bfdc9aaf82_prof);

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
