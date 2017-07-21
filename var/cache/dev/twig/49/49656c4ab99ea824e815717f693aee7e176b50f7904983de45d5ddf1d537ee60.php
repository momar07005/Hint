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
        $__internal_3f5e883969083918ce8790bf86347dd81ebdae0d9ec288c6b68faa78e04342ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f5e883969083918ce8790bf86347dd81ebdae0d9ec288c6b68faa78e04342ce->enter($__internal_3f5e883969083918ce8790bf86347dd81ebdae0d9ec288c6b68faa78e04342ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_ba061976f43d8f0e833c96f7950d81b29f9edff6cc820078529cd9477c51b527 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba061976f43d8f0e833c96f7950d81b29f9edff6cc820078529cd9477c51b527->enter($__internal_ba061976f43d8f0e833c96f7950d81b29f9edff6cc820078529cd9477c51b527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_3f5e883969083918ce8790bf86347dd81ebdae0d9ec288c6b68faa78e04342ce->leave($__internal_3f5e883969083918ce8790bf86347dd81ebdae0d9ec288c6b68faa78e04342ce_prof);

        
        $__internal_ba061976f43d8f0e833c96f7950d81b29f9edff6cc820078529cd9477c51b527->leave($__internal_ba061976f43d8f0e833c96f7950d81b29f9edff6cc820078529cd9477c51b527_prof);

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
