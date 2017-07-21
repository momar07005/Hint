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
        $__internal_d6d97ea79519caa774d573fa0b92a82914756dbc6456ef46f0c1fbd81c7a21c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6d97ea79519caa774d573fa0b92a82914756dbc6456ef46f0c1fbd81c7a21c2->enter($__internal_d6d97ea79519caa774d573fa0b92a82914756dbc6456ef46f0c1fbd81c7a21c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_aa3e379312767583ad2cff1be42bc1ef60e9d55c147d5a8b33963ab188028ed8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa3e379312767583ad2cff1be42bc1ef60e9d55c147d5a8b33963ab188028ed8->enter($__internal_aa3e379312767583ad2cff1be42bc1ef60e9d55c147d5a8b33963ab188028ed8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

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
        
        $__internal_d6d97ea79519caa774d573fa0b92a82914756dbc6456ef46f0c1fbd81c7a21c2->leave($__internal_d6d97ea79519caa774d573fa0b92a82914756dbc6456ef46f0c1fbd81c7a21c2_prof);

        
        $__internal_aa3e379312767583ad2cff1be42bc1ef60e9d55c147d5a8b33963ab188028ed8->leave($__internal_aa3e379312767583ad2cff1be42bc1ef60e9d55c147d5a8b33963ab188028ed8_prof);

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
